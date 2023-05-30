<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tech-O-Matic</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/easyzoom.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">

        <!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
        @livewireStyles
    </head>
    <body>

        <!-- header start -->
            <header>
                <div>
                    <div class="container-fluid" style="background-color:#131921; border-bottom:1px solid white;">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <div class="same-language-currency use-style text-white mx-lg-4 py-lg-2 text-center" >
                                    <span>USD <i class="fa fa-angle-down"></i></span>
                                    <div class="lang-car-dropdown">
                                        <ul>
                                            <li><button value="PHP">PHP</button></li>
                                            <li><button value="EUR">EUR</button></li>
                                            <li><button value="USD">USD</button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="same-language-currency text-center text-white">
                                    <p><i class="fa fa-phone" aria-hidden="true"></i> Call Us 09430901821</p>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="header-offer text-center text-white">
                                    <p><i class="fa fa-truck" aria-hidden="true"></i> Free delivery on order over <span style="color: bisque">$21.76</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-padding-2 res-header-sm" style="background-color: #531516;">
                    <div class="container-fluid">
                        <div class="header-bottom-wrapper">
                            <div class="logo-2 ptb-30">
                                <a href="/">
                                    <img height="60" style="transform:scale(1.5);object-fit: cover;" src="{{ asset('frontend/assets/img/logo/logo.png') }}" alt="">
                                </a>
                            </div>
                            <div class="menu-style-2 " >
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="/">home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop.index') }}">shop</a>
                                        </li>
                                        <li><a href={{URL::to('/blog')}}>Blogs</a>
                                            <ul class="single-dropdown">
                                                @foreach($categories_menu as $category_menu)
                                                    <li><a href="{{ route('shop.index', $category_menu->slug) }}">{{ $category_menu->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href={{URL::to('/contact')}}>contact us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-cart">
                                <a class="icon-cart-1" href="{{ route('cart.index') }}">
                                    <i class="ti-shopping-cart"></i>
                                    <span class="shop-count-furniture green">{{ \Cart::getTotalQuantity() }}</span>
                                </a>
                                @if (!\Cart::isEmpty())
                                    <ul class="cart-dropdown">
                                    @foreach (\Cart::getContent() as $item)
                                        @php
                                            $product = $item->associatedModel;
											$image = !empty($product->firstMedia) ? asset('storage/images/products/'. $product->firstMedia->file_name) : asset('frontend/assets/img/cart/3.jpg')
                                        @endphp
                                        <li class="single-product-cart">
                                            <div class="cart-img">
                                                <a href="{{ route('product.show', $product->slug) }}"><img src="{{ $image }}" alt="{{ $product->name }}" style="width:100px"></a>
                                            </div>
                                            <div class="cart-title">
                                                <h5><a href="{{ route('product.show', $product->slug) }}">{{ $item->name }}</a></h5>
                                                <span>{{ number_format($item->price) }} x {{ $item->quantity }}</span>
                                            </div>
                                            <div class="cart-delete">
                                                <form id="deleteCart" action="{{ route('cart.destroy', $item->id) }}" method="POST" class="d-none">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                <a href="" onclick="event.preventDefault();document.getElementById('deleteCart').submit();" class="delete"><i class="ti-trash"></i></a>
                                            </div>
                                        </li>
                                     @endforeach
                                        <li class="cart-space">
                                            <div class="cart-sub">
                                                <h4>Subtotal</h4>
                                            </div>
                                            <div class="cart-price">
                                                <h4>{{ number_format(\Cart::getSubTotal()) }}</h4>
                                            </div>
                                        </li>
                                        <li class="cart-btn-wrapper">
                                            <a class="cart-btn btn-hover" href="{{ route('cart.index') }}">view cart</a>
                                            <a class="cart-btn btn-hover" href="{{ route('checkout.process') }}">checkout</a>
                                        </li>
                                    </ul>
                                 @endif   
                            </div>
                        </div>
                        <div class="row">
                            <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li>
                                                <a href="#">HOME</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('shop.index') }}">shop</a>
                                            </li>
                                            <li><a href="#">Blogs</a>
                                                <ul>
                                                @foreach($categories_menu as $category_menu)
                                                    <li><a href="{{ route('shop.index', $category_menu->slug) }}">{{ $category_menu->name }}</a></li>
                                                @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#"> Contact us </a></li>
                                        </ul>
                                    </nav>							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom wrapper-padding-2 border-top-3" style="border-bottom: 1px solid #e0e0e0;">
                    <div class="container-fluid">
                        <div class="ecommerce-bottom-wrapper">
                            <div class="ecommerce-login">
                                <ul>
                                    @guest
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                        <li>Hello: <a href="{{ route('profile.index') }}">{{ auth()->user()->username }}</a></li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    @endguest
                                </ul>
                            </div>
                            <div class="ecommerce-search">
                                <form>
                                    <input placeholder="Search. . ." type="text" name="q" autocomplete="off" id="search">
                                    <button disabled>
                                        <i class="ti-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="ecommerce-wishlist">
                                <ul>
                                    <li>
                                        <a href="{{ route('favorite.index') }}"><i class="ti-heart"></i> Favorites</a>
                                    </li>
                                    @auth
                                    <li>
                                        <a href="{{ route('orders.index') }}"><i class="ti-money"></i> Orders</a>
                                    </li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <!-- header end -->

        @yield('content')

        <!-- footer -->
        <footer class="footer-area pt-100 pb-70"style="background-color: #531516;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-4">
                        <div class="copyright mb-30">
                            <div class="footer-logo">
                                <a href="/">
                                    <img height="60" style="transform:scale(1.5);object-fit: cover;" 
                                    src="{{ asset('frontend/assets/img/logo/logo.png') }}"
                                     alt="">
                                </a>
                            </div>
                            <p>© 2023 
                            <a href="https://hasthemes.com" rel="noopener noreferrer" target="_blank">
                            </a>.<br> All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="footer-widget mb-30 ml-30">
                            <div class="footer-title">
                                <h3>ABOUT US</h3>
                            </div>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="/about">Company Info</a></li>
                                    <li><a href="/#/">Store location</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="/#/">Orders tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-4">
                        <div class="footer-widget mb-30 ml-50">
                            <div class="footer-title">
                                <h3>USEFUL LINKS</h3>
                            </div>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="/#/">Returns</a></li>
                                    <li><a href="/#/">Support Policy</a></li>
                                    <li><a href="/#/">Refund Policy</a></li>
                                    <li><a href="/#/">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="footer-widget mb-30 ml-50 ">
                            <div class="footer-title">
                                <h3>FOLLOW US</h3>
                            </div>
                            <div class="footer-list">
                                <ul>
                                    <li><a href="//www.facebook.com" target="_blank" rel="noopener noreferrer">Facebook</a></li>
                                    <li><a href="//www.twitter.com" target="_blank" rel="noopener noreferrer">Twitter</a></li>
                                    <li><a href="//www.instagram.com" target="_blank" rel="noopener noreferrer">Instagram</a></li>
                                    <li><a href="//www.youtube.com" target="_blank" rel="noopener noreferrer">Youtube</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="footer-widget mb-30 ml-70">
                            <div class="footer-title">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.6877769158345!2d121.13563731543258!3d14.73023597783421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb18144bf653%3A0x34e13592dd4050d0!2sRodriguez%20Hwy%2C%20Rodriguez%2C%20Rizal!5e0!3m2!1sen!2sph!4v1679020338140!5m2!1sen!2sph" width="600" height="200" class="border-0 w-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        @livewireScripts
		<!-- all js here -->
        <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                let bloodhound = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    remote: {
                        url: '{{url("search")}}?productName=%QUERY%', //'/user/find?q=%QUERY%',
                        wildcard: '%QUERY%'
                    },
                });

                $('#search').typeahead({
                    hint: true,
                    highlight: true,
                    minLength: 1
                }, {
                    name: 'products',
                    source: bloodhound,
                    limit: 10,
                    display: function(data) {
                        return data.name  //Input value to be set when you select a suggestion.
                    },
                    templates: {
                        empty: [
                            '<div class="list-group-item">There are no matching search results</div>'
                        ],
                        header: [
                            '<div class="list-group search-results-dropdown">'
                        ],
                        suggestion: function(data) {
                            return '<div style="font-weight:normal; width:100%" class="list-group-item"><a href="{{url('product')}}/'+data.slug+'">' + data.name + '</a></div></div>'
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/24469787.js"></script>
    </body>
</html>
