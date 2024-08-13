<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Destinasi;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function welcome(){
        $destinasis = Destinasi::all();
        $beritas = Berita::all();
        $kategoris = Kategori::all();

        return view('welcome', [
            'destinasis' => $destinasis,
            'beritas' => $beritas,
            'kategoris' => $kategoris
        ]);
    }

    public function profil(){
        return view('profilpemkab');
    }

    public function flogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dd($request);
        #logic untuk autentikasi
        $user = User::where('email', $request->email)->first();

        $attr = $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($attr)){
            Auth::login($user);
        return redirect()->route('dashboard')->with('sukses', "Login Sukses");
        } else {
            dd('gagal');
            return back()->with('failed', 'Email / Password Salah!');
        }
    }

    public function logout()
    {
            Auth::logout();
            return redirect()->intended('/login')->with('sukses', 'logout berhasil');
    }

    public function dashboard()
    {
        $customcss = '';
        // $jmlsetting = Setting::where('group', 'env')->get();
        $settings = ['customcss' => $customcss,
                     'title' => 'Dashboard',
                     'baractive' => 'dashboardbar',
                    ];
                    // foreach ($jmlsetting as $i => $set) {
                    //     $settings[$set->setname] = $set->value;
                    //  }


        return view('admin.dashboard', [
            $settings['baractive'] => 'active',
            'stgs' => $settings,
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $userdata = User::all();
        $usercount = User::count();

        if ($request->ajax()){
            return DataTables::of($userdata)
            ->addColumn('action', function($data){
                $button = '
                <button data-toggle="modal" data-bs-toggle="modal" data-original-title="Edit" type="button" data-bs-target="#modaledit'.$data->id.'" type="button" class="edit-post btn btn-icon btn-info">
                    <i data-feather="edit-3"></i>
                </button>';
                // $button .= '&nbsp;&nbsp;';
                $button .= '
                <button data-toggle="modal" data-bs-toggle="modal" name="delete" data-original-title="delete" data-bs-target="#modaldel'.$data->id.'" type="button" class="delete btn btn-icon btn-outline-danger">
                    <i data-feather="trash-2"></i>
                </button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        $customcss = '';
        $settings = ['customcss' => $customcss,
        'title' => 'Username',
        'baractive' => 'userbar',
       ];
       // foreach ($jmlsetting as $i => $set) {
       //     $settings[$set->setname] = $set->value;
       //  }

        return view('admin.usermgmt', ['userdata' => $userdata, 'latestuser_id' => $usercount, $settings['baractive'] => 'active',
        'stgs' => $settings,]);
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
    public function store(Request $r)
    {
                // dd($r);
        #controller ini diperuntukan untuk membuat akun.
        $rules = [
            'password' => [
                'min:8',
            ],
            'email' => [
                Rule::unique('users', 'email'),
            ],
        ];

        $messages = [
            'password.min' => 'Maaf, password kamu harus minimal 8 karakter',
            'email.unique' => 'Maaf, Username Sudah Terdaftar Sebelumnya',
        ];

        $r->validate($rules, $messages);

        try {
            User::create([
                'id' => $r->id,
                'name' => $r->name,
                'email' => $r->email,
                'password' => bcrypt($r->password),
            ]);
            return back()->with('success', 'User telah dibuat');
        } catch (\Throwable $th) {
            return back()->with('error', 'Maaf, Terdapat Kesalahan', $th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $req)
    {
        #fungsi untuk mengedit user
        try {
            if ($req->password == '') {
                User::where('id', $req->idedit)->update([
                    'id' => $req->id,
                    'name' => $req->name,
                    'role' => $req->role,
                    'username' => $req->username,
                ]);
            }else{
                User::where('id', $req->idedit)->update([
                    'id' => $req->id,
                    'name' => $req->name,
                    'role' => $req->role,
                    'username' => $req->username,
                    'password' => bcrypt($req->password),
                    'decrypted_password' => $req->password
                ]);
            }
            return back()->with('success', 'User Berhasil Diedit.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Terdapat Kesalahan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        #ini untuk menghapus user
        try {
            Berita::where('id_user', $id)->delete();
            User::where('id', $id)->delete();
            return back()->with('success', 'User Berhasil Dihapus.');
        } catch (\Throwable $th) {
            return back()->with('error', 'Maaf, User Tidak Dapat Dihapus', $th);
        }
    }
}
