@extends('../layout.admin.layout')

@section('judulkonten','List Produk')
@section('judulpage','Manajemen Produk')

@section('search')
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
@endsection

@section('isikonten')

    @auth
        @if ( Auth::user()->role == 'admin')
            <a href="/product/create" class="btn btn-primary my-2">Tambah Produk</a>  
            <a class="btn btn-primary my-2" href="/cetak_product">Cetak</a>  
        @endif
        <br/><br/>
    @endauth
    
    <div class="row">
        @foreach ($product as $item)
            <div class="col-3">
                <div class="card" style="width: 18rem; ">
                    <img class="card-img-top" src="{{asset('product_asset/'. $item->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">{{$item->nama_barang}}</h2>
                        <p class="card-text" style="text-align: justify;">{{ Str::limit($item->keterangan, 28) }}</p>

                        <div style="text-align: center;">
                            <p class="card-title">Harga : Rp. {{number_format($item->harga)}}</p>
                            <p class="card-title">Stok   : {{$item->stock_quantity}}</p>
                        </div>

                        @auth
                            @if ( Auth::user()->role == 'admin')
                                <form action="/product/{{$item->id}}" method="POST">
                                    <div style="text-align: center;">
                                        <a href="/product/{{$item->id}}" class="btn btn-primary">Detail</a>
                                        <a href="/product/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </div>
                                </form>    
                            @endif
                            
                        @endauth
                        @guest
                            <a href="/product/{{$item->id}}" class="btn btn-primary">Detail</a>
                        @endguest
                    </div>
                </div>
            </div>
        @endforeach
        
        

    </div>


@endsection