<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customcss = '';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Berita',
                     'baractive' => 'beritabar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $beritadata = Berita::all();

        if ($request->ajax()){
            return DataTables::of($beritadata)
            ->addColumn('action', function($data){
                $button = '
                <a href="'.route('berita.edit', ['beritum' => $data->id]).'" class="edit-post btn btn-icon btn-success">
                    <i data-feather="edit-3"></i>
                </a>';
                // $button = '
                // <a href="'.route('berita.edit', ['berita' => $data->id]).'" class="edit-post btn btn-icon btn-success">
                //     <i data-feather="edit-3"></i>
                // </a>';
                // $button .= '&nbsp;&nbsp;';
                $button .= '
                <form action="'.route('berita.destroy', ['beritum' => $data->id]).'" method="POST" class="delete-form">
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
                $cover = '<img src="'.$coverUrl.'" style="max-width: 10rem;">';

                return $cover;
            })
            ->rawColumns(['action', 'covered'])
            ->addIndexColumn()
            ->make(true);
        }



        return view('admin.berita.index', [
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

        $beritas = Berita::all()->sortByDesc('created_at');

        return view('cariberita', [
            $settings['baractive'] => 'active',
            'beritas' => $beritas,
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
                     'title' => 'Berita',
                     'baractive' => 'beritabar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        return view('admin.berita.create', [
            $settings['baractive'] => 'active',
            'stgs' => $settings,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'konten' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $coverBinary = file_get_contents($request->file('cover')->getRealPath());

        $berita = new Berita();
        $berita->id_user = auth()->user()->id;
        $berita->title = $request->title;
        $berita->content = $request->konten;
        $berita->cover = $coverBinary;
        $berita->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    {
        $beritas = Berita::all();
        return view('berita', [
            'beritas' => $beritas,
            'b' => $beritum,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $beritum)
    {
        $customcss = '

        ';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Berita',
                     'baractive' => 'beritabar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $kategoris = Berita::all();

        return view('admin.berita.detail', [
            $settings['baractive'] => 'active',
            'b' => $beritum,
            'kategori' => $kategoris,
            'stgs' => $settings,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'konten' => 'required|string',
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $beritum->title = $request->title;
        $beritum->content = $request->konten;

        if ($request->hasFile('cover')) {
            // Get the cover file as binary data
            $coverData = file_get_contents($request->file('cover')->getRealPath());
            $beritum->cover = $coverData;
        }

        $beritum->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        return back()->with('success', 'Berhasil Menghapus Berita');
    }
}
