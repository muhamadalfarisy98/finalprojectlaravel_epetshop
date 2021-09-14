@extends('../../layout.Admin.layout')
@section('judulpage','Edit Manajemen User')
@section('judulkonten','Manajemen User')
@section('isikonten')
<form action="/manajemenuser/{{ $user->id }}" method="POST">
    @method('PUT')
    @csrf
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data User</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nama User :</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama"
                        value="{{ $user->name }}">
                    @error('name')
                    <div class=" alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email User :</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email"
                        value="{{ $user->email }}">
                    @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" id="password"
                        value="{{ $user->password }}" placeholder="Masukkan password">
                    @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat"
                        value="{{ $user->profil->alamat }}">
                    @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nomor_hp">Nomor HP :</label>
                    <input type="number" class="form-control" name="nomor_hp" id="nomor_hp"
                        value="{{ $user->profil->nomor_hp}}" placeholder=" Masukkan Nomor Hp">
                    @error('nomor_hp')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Role :</label>
                    <select name="role" id="role" class="form-control">
                        <option {{old('role',$user->role) == $user->id ? 'selected': null}}>{{ $user->role }}
                        </option>
                        <option value="admin">Admin</option>
                        <option value="pembeli">Pembeli</option>
                    </select>
                    @error('role')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type=" submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="/manajemenuser" role="button">Kembali</a>
            </div>
        </div>
    </div>
</form>
@endsection