<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customcss = '';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Kategori',
                     'baractive' => 'kategoribar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }

        $kategoridata = Kategori::all();

        if ($request->ajax()){
            return DataTables::of($kategoridata)
            ->addColumn('action', function($data){
                // $button = '
                // <a href="'.route('kategori.edit', ['kategori'. $data->id]).'" class="edit-post btn btn-icon btn-success">
                //     <i data-feather="edit-3"></i>
                // </a>';
                $button = ' <div class="row">
                <div class="col-2">
                <button data-toggle="modal" data-bs-toggle="modal" data-original-title="Edit" type="button" data-bs-target="#modaledit'.$data->id.'" type="button" class="edit-post btn btn-icon btn-info">
                    <i data-feather="edit-3"></i>
                </button>
                </div>';
                // $button .= '&nbsp;&nbsp;';
                $button .= '
                <div class="col-2">
                <form action="'.route('kategori.destroy', ['kategori' => $data->id]).'" method="POST" class="delete-form">
                    '.csrf_field().'
                    '.method_field('DELETE').'

                    <button type="submit" class="delete btn btn-icon btn-outline-danger" onclick="return confirm(\'Apakah Anda yakin ingin menghapus kegiatan ini?\')">
                        <i data-feather="trash-2"></i>
                    </button>
                </form>
                </div>
                </div>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        $kategoris = Kategori::all();



        return view('admin.kategori', [
            $settings['baractive'] => 'active',
            'stgs' => $settings,
            'kategoris' => $kategoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        $kategori = new Kategori();
        $kategori->kategori = $request->kategori;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        $kategori->kategori = $request->kategori;

        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return back()->with('success', 'Berhasil Menghapus Kategori');
    }
}
