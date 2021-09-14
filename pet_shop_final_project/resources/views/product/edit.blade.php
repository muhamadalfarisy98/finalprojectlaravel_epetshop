@extends('../layout.admin.layout')

@section('judulkonten','Edit Produk')
@section('judulpage','Edit Produk')

@section('isikonten')

    <form action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_barang">Nama Produk</label>
            <input type="text" class="form-control" name="nama_barang" value="{{$product->nama_barang}}" id="nama_barang" placeholder="Masukkan nama barang">
            @error('nama_barang')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- UoM  --}}
        <div class="form-group">
            <label for="uom_id">Unit of Measure</label>
            <select name="uom_id" id="uom_id" class="form-control">
                <option value="" >..Pilih UoM..</option>

                @foreach ($uom as $item)
                    @if ($item->id === $product->uom_id)
                        <option value="{{$item->id}}" selected>{{$item->nama_unit}}</option>
                    @else 
                        <option value="{{$item->id}}">{{$item->nama_unit}}</option>
                    @endif
                @endforeach
            </select>
            
            @error('uom_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Harga Barang  --}}
        <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{$product->harga}}" placeholder="Masukkan harga barang">
            @error('harga')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Stok Barang  --}}
        <div class="form-group">
            <label for="stock_quantity">Stok Barang</label>
            <input type="text" class="form-control" name="stock_quantity" id="stock_quantity" value="{{$product->stock_quantity}}" placeholder="Masukkan stok barang">
            @error('stock_quantity')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Gambar Barang  --}}
        <div class="form-group">
            <label for="title">Gambar Produk</label>
            <input type="file" class="form-control" name="image" id="image" value="{{$product->image}}" placeholder="Masukkan gambar produk">
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Deskripsi Barang  --}}
        <div class="form-group">
            <label for="title">Deskripsi barang</label>
            <textarea name="keterangan" id="keterangan" class="form-control" value="{{$product->keterangan}}" cols="30" rows="10"></textarea>
            @error('keterangan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection