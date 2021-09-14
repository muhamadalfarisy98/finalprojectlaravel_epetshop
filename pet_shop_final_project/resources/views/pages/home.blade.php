@extends('layout.master_fashi')

@section('header')
@auth
<div class="row">
    <div class="col">
        Welcome {{ Auth::user()->name }} !
    </div>

    <div class="col">
        <a class="nav-link bg-warning" style="color:white;" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none; color:white;">
            @csrf
        </form>

    </div>
</div>
@endauth

@guest
<a href="/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
@endguest

@endsection

@section('content')
<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="{{asset('assets/home-1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        {{-- <span>Bag,kids</span> --}}
                        <h3>Tersedia kebutuhan hewan peliharaan anjing</h3>
                        <br />
                        <br />
                        {{-- <p>Tersedia kebutuhan hewan peliharaan anjing</p> --}}
                        <a href="/shop" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                {{-- <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div> --}}
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="{{asset('assets/home.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        {{-- <span>Kucing</span> --}}
                        <h3>Tersedia kebutuhan hewan peliharaan kucing</h3>
                        <br />
                        <br />
                        {{-- <p>Tersedia kebutuhan hewan peliharaan kucing</p> --}}
                        <a href="/shop" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                {{-- <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        {{-- <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div> --}}
    </div>
</div>
<!-- Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="{{asset('product_asset/kucing_2.jpeg')}}">
                    <h2>Gimme Food</h2>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                {{-- <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div> --}}
                <div class="product-slider owl-carousel">
                    {{-- <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/women-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div> --}}
                    <?php $produk = \App\Product::get()  ?>
                    @foreach ($produk as $produk)



                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{asset('product_asset/'. $produk->image)}}" alt="">
                            {{-- <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div> --}}
                            <ul>

                                <li class="w-icon active">
                                    <form method="post" action="/pesanproduk/{{ $produk->id }}">
                                        @csrf
                                        <button class="btn btn-warning">
                                            <i class="icon_bag_alt"></i>
                                        </button>
                                    </form>
                                </li>
                                <li class="quick-view"><a href="/details/{{$produk->id}}">+ Details</a></li>
                                {{-- <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li> --}}
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{ $produk->nama_barang }}</div>
                            <a href="#">
                                <h5>{{ $produk->nama_barang }}</h5>
                            </a>
                            <div class="product-price">
                                Rp {{ $produk->harga }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{asset('fashi-master/img/products/women-3.jpg')}}" alt="">
                    <div class="icon">
                        <i class="icon_heart_alt"></i>
                    </div>
                    <ul>
                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                        <li class="quick-view"><a href="#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                    </ul>
                </div>
                <div class="pi-text">
                    <div class="catagory-name">Towel</div>
                    <a href="#">
                        <h5>Pure Pineapple</h5>
                    </a>
                    <div class="product-price">
                        $34.00
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="{{asset('fashi-master/img/products/women-4.jpg')}}" alt="">
                    <div class="icon">
                        <i class="icon_heart_alt"></i>
                    </div>
                    <ul>
                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                        <li class="quick-view"><a href="#">+ Quick View</a></li>
                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                    </ul>
                </div>
                <div class="pi-text">
                    <div class="catagory-name">Towel</div>
                    <a href="#">
                        <h5>Converse Shoes</h5>
                    </a>
                    <div class="product-price">
                        $34.00
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin-->
{{-- <section class="deal-of-week set-bg spad" data-setbg="{{asset('fashi-master/img/time-bg.jpg')}}">
<div class="container">
    <div class="col-lg-6 text-center">
        <div class="section-title">
            <h2>Deal Of The Week</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
                consectetur adipisicing elit </p>
            <div class="product-price">
                $35.00
                <span>/ HanBag</span>
            </div>
        </div>
        <div class="countdown-timer" id="countdown">
            <div class="cd-item">
                <span>56</span>
                <p>Days</p>
            </div>
            <div class="cd-item">
                <span>12</span>
                <p>Hrs</p>
            </div>
            <div class="cd-item">
                <span>40</span>
                <p>Mins</p>
            </div>
            <div class="cd-item">
                <span>52</span>
                <p>Secs</p>
            </div>
        </div>
        <a href="#" class="primary-btn">Shop Now</a>
    </div>
</div>
</section> --}}
<!-- Deal Of The Week Section End -->

<section class="latest-blog spad">
    <div class="benefit-items">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="{{asset('fashi-master/img/icon-1.png')}}" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Free Shipping</h6>
                        <p>For all order over 99$</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="{{asset('fashi-master/img/icon-2.png')}}" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Delivery On Time</h6>
                        <p>If good have prolems</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="{{asset('fashi-master/img/icon-1.png')}}" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Secure Payment</h6>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Man Banner Section Begin -->
{{-- <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $14.00
                                    <span>$35.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/products/man-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- Man Banner Section End -->

<!-- Instagram Section Begin -->
{{-- <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div> --}}
<!-- Instagram Section End -->
@endsection