<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Profil;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate('5');
        return view('admin.manajemenuser.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manajemenuser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'role' => 'required',
            'nomor_hp' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        $profil = Profil::create([
            'alamat' => $request->alamat,
            'nomor_hp' => $request->nomor_hp,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
            'profil_id' => $profil->id,
        ]);

        return redirect('/manajemenuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.manajemenuser.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.manajemenuser.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'role' => 'required',
            'nomor_hp' => 'required|integer',
            'alamat' => 'required|string',
        ]);

        $users = User::where('id', $id)->first();
        $profil = Profil::where('id', $users->profil_id)
            ->update([
                'alamat' => $request->alamat,
                'nomor_hp' => $request->nomor_hp,
            ]);

        $user = User::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);

        return redirect('/manajemenuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/manajemenuser');
    }
    public function cetak_pdf()
    {
        $users = User::all();

        $pdf = PDF::loadview('admin.manajemenuser.user_pdf', ['user' => $users]);
        return $pdf->stream();
    }
}
