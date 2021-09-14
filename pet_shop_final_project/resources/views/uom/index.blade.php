@extends('../layout.admin.layout')

@section('judulkonten','Unit of Measure')
@section('judulpage','Manajemen Produk')

@section('search')
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
@endsection

@section('isikonten')

    @auth
        <a href="/uom/create" class="btn btn-primary my-2">Tambah UoM</a>    
        <br/>
        <br/>
    @endauth

    <div class="row">
        @foreach ($uom as $item)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{$item->nama_unit}}</h2>
                        @auth
                        <form action="/uom/{{$item->id}}" method="POST">
                            <a href="/uom/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>    
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection