@extends('layout.master_fashi')

@push('ashion-style')
    <link rel="stylesheet" href="{{asset('ogani-master/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('ogani-master/css/style.css')}}" type="text/css">
@endpush

@push('ashion-scripts')
    <script src="{{asset('ogani-master/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('ogani-master/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ogani-master/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('ogani-master/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('ogani-master/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('ogani-master/js/mixitup.min.js')}}"></script>
    <script src="{{asset('ogani-master/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ogani-master/js/main.js')}}"></script>
@endpush

{{-- @push('scripts')
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
@endpush --}}

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"></i> Home</a>
                        <a href="/shop">Shop</a>
                        <span>Detail Screen</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{asset('product_asset/'. $product->image)}}" alt="">
                        </div>
                        {{-- <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$product->nama_barang}}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            {{-- <span>(18 reviews)</span> --}}
                        </div>
                        <div class="product__details__price">Rp. {{number_format($product->harga)}}</div>
                        {{-- <p>{{$product->keterangan}}</p> --}}
                        {{-- <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div> --}}
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        {{-- <br/>
                        <br/> --}}
                        <b>Availability</b> <span>{{$product->stock_quantity}} pcs</span>
                        <br/>
                        <br/>
                        <b>Products Infomation</b>
                        <p>{{$product->keterangan}}</p>
                        {{-- <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a> --}}
                        {{-- <ul>
                            <li><b>Availability</b> <span>{{$product->stock_quantity}}</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>{{$uom}}</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" >
                                <li class="nav-item">
                                    <a class="nav-link" style="background-color:white;" data-toggle="tab" href="#tabs-1" role="tab"
                                        aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="background-color:white;" data-toggle="tab" href="#tabs-2" role="tab"
                                        aria-selected="false">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  style="background-color:white;" data-toggle="tab" href="#tabs-3" role="tab"
                                        aria-selected="false">Reviews <span>(1)</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p>{{$product->keterangan}}</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                            Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                            elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                            porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                            nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Products Infomation</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                            Proin eget tortor risus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection