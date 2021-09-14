@extends('../../layout.admin.layout')

@section('judulpage','Detail Data User')
@section('judulkonten','Detail Data User')

@section('isikonten')
<div class="section-body">
    <h2 class="section-title">{{ $user->name }}</h2>
    <p class="section-lead">Berikut adalah informasi profil {{ $user->name }}</p>
    <div class="card">
        <div class="card-body">
            <p class="text-primary">Nama User : <span class="text-dark">{{ $user->name }}</span></p>
            <p class="text-primary">Email User : <span class="text-dark">{{ $user->email }}</span></p>
            @if ($user->role == 'pembeli' )

            <p class="text-primary">Email User : <span class="badge badge-success">{{ $user->role }}</span></p>
            @else

            <p class="text-primary">Email User : <span class="badge badge-warning">{{ $user->role }}</span></p>
            @endif

            <p class="text-primary">Alamat User : <span class="text-dark">{{ $user->profil->alamat }}</span></p>
            <p class="text-primary">Nomor HP User : <span class="text-dark">{{ $user->profil->nomor_hp }}</span></p>
        </div>
        <a class="btn btn-primary " href="/manajemenuser" style="width:100px; margin-left:20px; margin-bottom:10px"
            role="button">Kembali</a>



    </div>
</div>
@endsection