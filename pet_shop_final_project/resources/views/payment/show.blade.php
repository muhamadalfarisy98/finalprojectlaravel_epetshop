@extends('../layout.admin.layout')

@section('judulkonten','Detail Payment')
@section('judulpage','Detail Payment')
@section('isikonten')

    <div class="card centered" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('product_asset/'. $payment->image)}}" alt="Card image cap">
        <div class="card-body">

            <h2 class="card-title" style="text-align: center;">{{$payment->provider}}</h2>

        </div>
        <a href="/payment" class="btn btn-primary">Kembali</a>
    </div>

@endsection