@extends('../layout.admin.layout')

@section('judulkonten','List Payment')
@section('judulpage','Manajemen Pembayaran')

@section('search')
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
@endsection

@section('isikonten')

    @auth
        @if ( Auth::user()->role == 'admin')
            <a href="/payment/create" class="btn btn-primary my-2">Tambah Metode Pembayaran</a>  
        @endif
        <br/><br/>
    @endauth
    
    <div class="row">
        @foreach ($payment as $item)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('product_asset/'. $item->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center;">{{$item->provider}}</h2>
                        {{-- <p class="card-text" style="text-align: justify;">{{ Str::limit($item->keterangan, 28) }}</p> --}}

                        {{-- <div style="text-align: center;">
                            <p class="card-title">Harga : Rp. {{number_format($item->harga)}}</p>
                            <p class="card-title">Stok   : {{$item->stock_quantity}}</p>
                        </div> --}}

                        @auth
                            @if ( Auth::user()->role == 'admin')
                                <form action="/payment/{{$item->id}}" method="POST">
                                    <div style="text-align: center;">
                                        <a href="/payment/{{$item->id}}" class="btn btn-primary">Detail</a>
                                        <a href="/payment/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </div>
                                </form>    
                            @endif
                            
                        @endauth
                        @guest
                            <a href="/payment/{{$item->id}}" class="btn btn-primary">Detail</a>
                        @endguest
                    </div>
                </div>
            </div>
        @endforeach
        
        

    </div>


@endsection