@extends('../layout.admin.layout')

@section('judulkonten','List Produk')

@push('scripts')
<script src="https://cdn.tiny.cloud/1/0ccewjnuo46g0g00l47p6qbtaz3ckuclyyugkcosvrwljg7y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>
@endpush

@section('isikonten')
    <form action="/product" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Nama barang  --}}
        <div class="form-group">
            <label for="nama_barang">Nama Produk</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan nama barang">
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
                <option value="" disabled>..Pilih UoM..</option>
                @foreach ($uom as $item)
                    <option value="{{$item->id}}">{{$item->nama_unit}}</option>
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
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan harga barang">
            @error('harga')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Stok Barang  --}}
        <div class="form-group">
            <label for="stock_quantity">Stok Barang</label>
            <input type="text" class="form-control" name="stock_quantity" id="stock_quantity" placeholder="Masukkan stok barang">
            @error('stock_quantity')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Gambar Barang  --}}
        <div class="form-group">
            <label for="title">Gambar Produk</label>
            <input type="file" class="form-control" name="image" id="image" placeholder="Masukkan gambar produk">
            @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- Deskripsi Barang  --}}
        <div class="form-group">
            <label for="title">Deskripsi barang</label>
            <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10"></textarea>
            @error('keterangan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Tambah Barang</button>
    </form>

@endsection