@extends('../layout.admin.layout')

@section('judulkonten','List Pembayaran')

@section('isikonten')
    <form action="/payment" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Provider  --}}
        <div class="form-group">
            <label for="provider">Metode pembayaran</label>
            <input type="text" class="form-control" name="provider" id="provider" placeholder="Masukkan provider">
            @error('provider')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- Gambar Provider  --}}
        <div class="form-group">
            <label for="title">Gambar Provider</label>
            <input type="file" class="form-control" name="image" id="image" placeholder="Masukkan gambar provider">
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Provider</button>
    </form>

@endsection