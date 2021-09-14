@extends('../layout.admin.layout')

@section('judulkonten','Dashboard')

@section('isikonten')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Admin</h4>
                </div>
                <div class="card-body">
                    {{ $totalAdmin }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total User</h4>
                </div>
                <div class="card-body">
                    {{ $totalUser }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-tags"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Produk</h4>
                </div>
                <div class="card-body">
                    {{ $totalProduct }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection