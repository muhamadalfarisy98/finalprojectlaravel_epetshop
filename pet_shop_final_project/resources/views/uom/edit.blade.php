@extends('../layout.admin.layout')

@section('judulkonten','Edit Unit of Measure')
@section('judulpage','Edit UoM')

@section('isikonten')

    <form action="/uom/{{$uom->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_unit">Nama Uom</label>
            <input type="text" class="form-control" name="nama_unit" id="nama_unit" value="{{$uom->nama_unit}}" placeholder="Masukkan nama uom">
            @error('nama_unit')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection