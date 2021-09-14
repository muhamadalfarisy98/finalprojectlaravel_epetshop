@extends('../layout.admin.layout')

@section('judulkonten','Edit Produk')
@section('judulpage','Edit Produk')

@section('isikonten')

    <form action="/payment/{{$payment->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="provider">Nama Provider</label>
            <input type="text" class="form-control" name="provider" value="{{$payment->provider}}" id="provider" placeholder="Masukkan nama barang">
            @error('provider')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        {{-- Gambar Barang  --}}
        <div class="form-group">
            <label for="title">Gambar Payment</label>
            <input type="file" class="form-control" name="image" id="image" value="{{$payment->image}}" placeholder="Masukkan gambar produk">
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection