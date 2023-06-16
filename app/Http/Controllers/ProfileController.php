<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
    public function edit(string $id)
    {
        //
        $title='';
        $user = User::find($id);
        $profile = Profile::where('user_id', $user->id)->first(); // Mengambil data profile yang terkait dengan user

        return view('profile.index', compact('profile','user','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //proses input pegawai
        $data_profile = [
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'foto' => $request->foto
        ];
        
        $data_user = [
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ];

        //lakukan update data dari request form edit
        Profile::find($request->profile_id)->update($data_profile);
        User::find($request->id)->update($data_user);
        
        return redirect('/edit_profile/' . $id)
            ->with('success', 'Data Profile Berhasil Diubah');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
