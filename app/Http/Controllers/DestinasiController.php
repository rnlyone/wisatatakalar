<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customcss = '';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Destinasi',
                     'baractive' => 'destinasibar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $destinasidata = Destinasi::all();

        if ($request->ajax()){
            return DataTables::of($destinasidata)
            ->addColumn('action', function($data){
                // $button = '
                // <a href="'.route('destinasi.edit', ['destinasi'. $data->id]).'" class="edit-post btn btn-icon btn-success">
                //     <i data-feather="edit-3"></i>
                // </a>';
                $button = '
                <a href="'.route('destinasi.edit', ['destinasi' => $data->id]).'" class="edit-post btn btn-icon btn-success">
                    <i data-feather="edit-3"></i>
                </a>';
                // $button .= '&nbsp;&nbsp;';
                $button .= '
                <form action="'.route('destinasi.destroy', ['destinasi' => $data->id]).'" method="POST" class="delete-form">
                    '.csrf_field().'
                    '.method_field('DELETE').'

                    <button type="submit" class="delete btn btn-icon btn-outline-danger" onclick="return confirm(\'Apakah Anda yakin ingin menghapus kegiatan ini?\')">
                        <i data-feather="trash-2"></i>
                    </button>
                </form>';
                return $button;
            })
            ->addColumn('covered', function($data){
                $coverUrl = $data->cover_base64;
                $cover = '<img src="'.$coverUrl.'" style="max-width: 100%;">';

                return $cover;
            })
            ->addColumn('kategorizz', function($data){
                $kategori = $data->kategori->kategori;

                return $kategori;
            })
            ->rawColumns(['action', 'kategorizz', 'covered'])
            ->addIndexColumn()
            ->make(true);
        }



        return view('admin.destinasi.index', [
            $settings['baractive'] => 'active',
            'stgs' => $settings,
        ]);
    }

    public function cari()
    {
        $customcss = '

        ';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Cari Destinasi',
                     'baractive' => '',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $kategoris = Kategori::all();

        return view('cariwisata', [
            $settings['baractive'] => 'active',
            'kategoris' => $kategoris,
            'stgs' => $settings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customcss = '

        ';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Destinasi',
                     'baractive' => 'destinasibar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $kategoris = Kategori::all();

        return view('admin.destinasi.create', [
            $settings['baractive'] => 'active',
            'kategori' => $kategoris,
            'stgs' => $settings,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kategori' => 'required|exists:kategoris,id',
            'deskripsi' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'longlat' => 'required|string',
        ]);

        $coverBinary = file_get_contents($request->file('cover')->getRealPath());

        list($latitude, $longitude) = explode(',', $request->longlat);

        $destinasi = new Destinasi();
        $destinasi->nama = $request->nama;
        $destinasi->alamat = $request->alamat;
        $destinasi->id_kategori = $request->kategori;
        $destinasi->content = $request->deskripsi;
        $destinasi->cover = $coverBinary;
        $destinasi->latitude = trim($latitude);
        $destinasi->longitude = trim($longitude);
        $destinasi->save();

        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destinasi $destinasi)
    {
        $destinasis = Destinasi::all();
        return view('wisata', [
            'destinasis' => $destinasis,
            'd' => $destinasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destinasi $destinasi)
    {
        $customcss = '

        ';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Destinasi',
                     'baractive' => 'destinasibar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $kategoris = Kategori::all();

        return view('admin.destinasi.detail', [
            $settings['baractive'] => 'active',
            'd' => $destinasi,
            'kategori' => $kategoris,
            'stgs' => $settings,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Destinasi $destinasi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'kategori' => 'required|exists:kategoris,id',
            'deskripsi' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'longlat' => 'required|string',
        ]);

        $destinasi->nama = $request->nama;
        $destinasi->alamat = $request->alamat;
        $destinasi->id_kategori = $request->kategori;
        $destinasi->content = $request->deskripsi;

        if ($request->hasFile('cover')) {
            // Get the cover file as binary data
            $coverData = file_get_contents($request->file('cover')->getRealPath());
            $destinasi->cover = $coverData;
        }

        list($latitude, $longitude) = explode(',', $request->longlat);
        $destinasi->latitude = trim($latitude);
        $destinasi->longitude = trim($longitude);

        $destinasi->save();

        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        $destinasi->delete();
        return back()->with('success', 'Berhasil Menghapus Destinasi');
    }
}
