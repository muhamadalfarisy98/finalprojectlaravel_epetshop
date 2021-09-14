@extends('../layout.admin.layout')

@section('judulkonten','Detail Produk')
@section('judulpage','Detail Produk')
@section('isikonten')

    <div class="card centered" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('product_asset/'. $product->image)}}" alt="Card image cap">
        <div class="card-body">

        <h2 class="card-title" style="text-align: center;">{{$product->nama_barang}}</h2>
        <p class="card-text" style="text-align: justify;">{{$product->keterangan}}</p>

        <div style="text-align: center;">
            <p class="card-text">Harga : Rp.{{$product->harga}},00 -</p>
            <p class="card-text">Stok barang :{{$product->stock_quantity}}</p>
            @foreach ($uom as $item)
                <p class="card-text">Satuan : {{$item->nama_unit}}</p>
            @endforeach
        </div>
        
        {{-- // <p class="card-text">{{$uom}}</p> --}}
        </div>
        <a href="/product" class="btn btn-primary">Kembali</a>
    </div>

@endsection