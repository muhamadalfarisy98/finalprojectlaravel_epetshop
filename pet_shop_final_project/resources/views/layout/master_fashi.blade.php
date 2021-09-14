<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="shortcut icon" type="image" href="{{asset('icon.png')}}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('fashi-master/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi-master/css/style.css')}}" type="text/css">
    @stack('ashion-style')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-right">
                    @yield('header')
                </div>      
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="/">
                                <img src="{{asset('icon.png')}}" height="80px" width="80px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            {{-- <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li> --}}
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="{{asset('fashi-master/img/select-product-1.jpg')}}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                    <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="/cart" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="/checkout" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            {{-- <li class="cart-price">$150.00</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container ">
                {{-- <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div> --}}
                <nav class="nav-menu mobile-menu ">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        {{-- <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li> --}}
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                {{-- <li><a href="./blog-details.html">Blog Details</a></li> --}}
                                <li><a href="/cart">Shopping Cart</a></li>
                                <li><a href="/checkout">Checkout</a></li>
                                {{-- <li><a href="/details">Product Details</a></li> --}}
                                {{-- <li><a href="./register.html">Register</a></li>
                                <li><a href="./login.html">Login</a></li> --}}
                            </ul>
                        </li>
                        @auth
                            @if ( Auth::user()->role == 'admin')
                                <li><a href="/dashboard">Dashboard Admin</a></li>       
                            @endif
                        @endauth
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- Hero Section Begin -->
    {{-- <section class="hero-section">
        @include('partials.hero')
    </section> --}}
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    {{-- <div class="banner-section spad">
        @include('partials.banner')
    </div> --}}
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    {{-- <section class="women-banner ">
        @include('partials.women_banner')
    </section> --}}
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    {{-- <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        @include('partials.deal')
    </section> --}}
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    {{-- <section class="man-banner spad">
        @include('partials.man_banner')
    </section> --}}
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    {{-- <div class="instagram-photo">
        @include('partials.instagram')
    </div> --}}
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    {{-- <section class="latest-blog spad">
        @include('layout.partials.latest_blog')
    </section> --}}
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    {{-- <div class="partner-logo">
        @include('partials.partner_logo')
    </div> --}}
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        @include('partials.footer')
    </footer>
    <!-- Footer Section End -->

    {{-- jquery  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).on('click','ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
    
    <!-- Js Plugins -->
    <script src="{{asset('fashi-master/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/jquery.dd.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('fashi-master/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fashi-master/js/main.js')}}"></script>

    {{-- sweet alert  --}}
    <script src="{{asset('fashi-master/js/swal.min.js')}}"></script>
    @stack('scripts')
    @stack('ashion-scripts')
</body>

</html>