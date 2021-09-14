@extends('../layout.admin.layout')

@section('judulkonten','Halaman Tambah Unit of Measure')

@section('isikonten')
    <form action="/uom" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_unit">Nama UoM</label>
            <input type="text" class="form-control" name="nama_unit" id="nama_unit" placeholder="Masukkan nama unit of measure">
            @error('nama_unit')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

@endsection