@extends('../../layout.admin.layout')

@section('judulpage','Manajemen User')
@section('judulkonten','Manajemen User')

@section('search')
<input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
@endsection

@section('isikonten')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4>Data User</h4>
        </div>
        <div class="card-body p-0">
            <a class="btn btn-primary" href="/manajemenuser/create" role="button"
                style="margin-bottom: 20px; margin-left:20px;">Tambah</a>
            <a class="btn btn-primary" href="/cetak_user" role="button"
                style="margin-bottom: 20px; margin-left:20px;">Cetak</a>

            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->role == 'pembeli' )
                            <div class="badge badge-success">{{ $user->role }}</div>
                            @else
                            <div class="badge badge-warning">{{ $user->role }}</div>
                            @endif
                        </td>
                        <td class=""><a href="manajemenuser/{{ $user->id }}/edit" class="btn btn-primary btn-sm"><i
                                    class="fas fa-edit"></i></a>
                            <a href="/manajemenuser/{{ $user->id }}" class="btn btn-warning btn-sm"><i
                                    class="fas fa-eye"></i></a>
                            <form action="/manajemenuser/{{ $user->id }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin Hapus Data?')">
                                @method('DELETE')
                                @csrf
                                <button class=" btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>


            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                {{ $users->links() }}
            </nav>
        </div>
    </div>
</div>
@endsection