<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>instant | beauty from within</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>

        <!-- === MENU === -->
        <nav class="sub-navbar navbar navbar-default navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sub-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('assets/images/logo.png')}}" alt="Instant">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="sub-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('product')}}">WHITENING<span class="sr-only">(current)</span></a></li>
                        <li><a href="{{url('product')}}">ANTI-AGING</a></li>
                        <li><a href="{{url('product')}}">SUPPLEMENTS</a></li>
                        <li><a href="{{url('product')}}">SKIN CARE</a></li>
                        <li><a href="#">ABOUT US</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <nav class="main-navbar navbar navbar-default">
            <div class="container-fluid">

                <div class="text-center menu-top-header">
                    <div class="container">
                        <div class="top-links">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </div>
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/images/logo.png')}}" alt="Instant">
                        </a>
                        <div class="top-links">
                            <i class="fa fa-search" id="target-main-search"></i>
                            <a href="mailto:info@instant.com.ph">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                            <a href="{{url('contact')}}">
                                <i class="fa fa-phone"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="main-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('product')}}">WHITENING<span class="sr-only">(current)</span></a></li><!-- class="active" -->
                        <li class="divider">|</li>
                        <li><a href="{{url('product')}}">ANTI-AGING</a></li>
                        <li class="divider">|</li>
                        <li><a href="{{url('product')}}">SUPPLEMENTS</a></li>
                        <li class="divider">|</li>
                        <li><a href="{{url('product')}}">SKIN CARE</a></li>
                        <li class="divider">|</li>
                        <li><a href="#">ABOUT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- === SEARCH === -->
        <div class="container main-search-container">
            <div class="search-panel">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="What you are searching for?">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- === HEADER === -->
        <header id="home-slider" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
                <li data-target="#home-slider" data-slide-to="0" class="active carousel-square"></li>
                <li data-target="#home-slider" data-slide-to="1" class="carousel-square"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <div class="fill" style="background-image:url('assets/images/slider2.jpg');"></div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image:url('assets/images/slider1.jpg');"></div>
                </div>
            </div>
        </header>

        <!-- === BANNERS === -->
        <section>
            <div class="container-fluid home-banner">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <img src="{{asset('assets/images/banner-1.jpg')}}" alt="Banner1" class="img-responsive center-block">
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <img src="{{asset('assets/images/banner-2.jpg')}}" alt="Banner2" class="img-responsive center-block">
                    </div>
                </div>
            </div>
        </section>

        <!-- === PRODUCTS === -->
        <section>
            <div class="container-fluid home-products">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center header-default">
                            <h3>Our Products</h3>
                        </div>
                        <div class="main-container">

                            <ul class="nav nav-tabs nav-justified nav-home-products">
                                <li class="active"><a data-toggle="tab" href="#new">New Arrivals</a></li>
                                <li><a data-toggle="tab" href="#best">Best Seller</a></li>
                                <li><a data-toggle="tab" href="#trends">Trends</a></li>
                                <li><a data-toggle="tab" href="#top">Top Rate</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="new" class="tab-pane fade in active">
                                    <div class="multiple-items">
                                        @for ($i = 0; $i < 11; $i++)
                                            <div class="text-center product-container">
                                                <a href="{{url('product')}}">
                                                    <img src="{{asset('assets/images/products/product1.jpg')}}" alt="Banner1" class="img-responsive center-block">
                                                </a>
                                                <span class="product-name">Snow White Cream</span>
                                                <span class="product-price">₱150</span>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>15</span>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div id="best" class="tab-pane fade">
                                    <div class="multiple-items">
                                        @for ($i = 0; $i < 11; $i++)
                                            <div class="text-center product-container">
                                                <a href="{{url('product')}}">
                                                    <img src="{{asset('assets/images/products/product1.jpg')}}" alt="Banner1" class="img-responsive center-block">
                                                </a>
                                                <span class="product-name">Snow White Cream</span>
                                                <span class="product-price">₱150</span>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>15</span>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div id="trends" class="tab-pane fade">
                                    <div class="multiple-items">
                                        @for ($i = 0; $i < 11; $i++)
                                            <div class="text-center product-container">
                                                <a href="{{url('product')}}">
                                                    <img src="{{asset('assets/images/products/product1.jpg')}}" alt="Banner1" class="img-responsive center-block">
                                                </a>
                                                <span class="product-name">Snow White Cream</span>
                                                <span class="product-price">₱150</span>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>15</span>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div id="top" class="tab-pane fade">
                                    <div class="multiple-items">
                                        @for ($i = 0; $i < 11; $i++)
                                            <div class="text-center product-container">
                                                <a href="{{url('product')}}">
                                                    <img src="{{asset('assets/images/products/product1.jpg')}}" alt="Banner1" class="img-responsive center-block">
                                                </a>
                                                <span class="product-name">Snow White Cream</span>
                                                <span class="product-price">₱150</span>
                                                <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <span>15</span>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- === TAGLINE === -->
        <section>
            <div class="parallax-bg">
                <div class="container home-tagline">
                    <div class="content">
                        <h2>happy skin is a reflection of a healthy mind and a healthy body</h2>
                    </div>
                    <div class="dotted-line">&nbsp;</div>
                    <button type="button" name="button" class="btn btn-sm btn-outline-white center-block">Discover Instant</button>
                </div>
            </div>
        </section>

        <!-- === OFFERS === -->
        <section class="parallax-bg2">
            <div class="container home-offers">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center header-default">
                            <h3>Skin care offers</h3>
                        </div>
                        <div class="text-center content-text">
                            Check out the best deals and top-rated products that everyone is talking about.
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img src="{{asset('assets/images/blog3.jpg')}}" alt="Blog1">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img src="{{asset('assets/images/blog2.jpg')}}" alt="Blog2">
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <img src="{{asset('assets/images/blog1.jpg')}}" alt="Blog3">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- === HASH === -->
        <section>
            <div class="container-fluid home-hash">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center header-default">
                            <h3>#instantbeautyfromwithin</h3>
                        </div>
                        <div class="text-center content-text">
                            What’s your story? Share us your favorite story of Instant products by using #Instantbeautyfromwithin and get a chance to be featured on our Facebook
                        </div>
                        <div class="hash-tags-items">
                            <div class="margin-space">
                                <img src="{{asset('assets/images/hash1.jpeg')}}" alt="Hash1" class="img-responsive">
                            </div>
                            <div class="margin-space">
                                <img src="{{asset('assets/images/hash2.jpeg')}}" alt="Hash2" class="img-responsive">
                            </div>
                            <div class="margin-space">
                                <img src="{{asset('assets/images/hash3.jpeg')}}" alt="Hash3" class="img-responsive">
                            </div>
                            <div class="margin-space">
                                <img src="{{asset('assets/images/hash4.jpeg')}}" alt="Hash4" class="img-responsive">
                            </div>
                            <div class="margin-space">
                                <img src="{{asset('assets/images/hash5.jpeg')}}" alt="Hash5" class="img-responsive">
                            </div>
                            <div class="margin-space">
                                <img src="{{asset('assets/images/hash5.jpeg')}}" alt="Hash6" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- === STORE === -->
        <section class="parallax-bg3">
            <div class="container-fluid home-store">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center header-grey">
                            <h3>Where you can buy?</h3>
                        </div>
                        <div class="text-center content-text">
                            We are available in all Watsons and SM Stores near you!
                        </div>
                        <div class="dotted-line dotted-grey">&nbsp;</div>
                        <button type="button" name="button" class="btn btn-sm center-block btn-outline-grey">Discover Instant</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- === FOOTER === -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <h5>Contact</h5>
                        <ul class="list-unstyled">
                            <li><b>Add:</b> M.San Buenaventura, Pasig, Metro Manila</li>
                            <li><b>Phone:</b> (02) 671 4635</li>
                            <li><b>Email:</b> info@instant.com.ph</li>
                            <li><b>Open:</b> 9am-6pm, Mon-Fri</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h5>Our Service</h5>
                        <ul class="list-unstyled">
                            <li>Help</li>
                            <li>Contact Us</li>
                            <li>Shops</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h5>Policy</h5>
                        <ul class="list-unstyled">
                            <li>Gift voucher</li>
                            <li>FAQs</li>
                            <li>Privacy Policy</li>
                            <li>Terms & Conditions</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h5>Join our newsletter</h5>
                        <ul class="list-unstyled">
                            <li>Lorem Ipsum is not simply loreum Ipsum is not simply</li>
                            <li>
                                <div class="input-group add-on" style="padding-top:5px;">
                                    <input type="text" class="form-control input-sm" placeholder="Enter your e-mail" name="" style="background-color:transparent;border-radius:0;border-color:#636b6f;color:#FFF;border-right:0;font-size:11px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default btn-sm" type="submit" style="border-left:0;background-color:transparent;border-color:#636b6f;border-radius:0;"><i class="fa fa-paper-plane"></i></button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 text-right copyright">
                        © 2018 <a href="#">INSTANT</a> | Design by Primeline Product | All rights reserved
                    </div>
                </div>
            </div>
        </footer>

        <!-- === FLOATING BUTTON === -->
        <div class="floating-btn">
            <button type="button" class="btn btn-sm" id="back-to-top"><i class="fa fa-angle-up"></i> <span>TOP</span></button>
        </div>

        <!-- === MODAL NEWSLETTER === -->
        <div id="modal-newsletter" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="left-body">
                            <img src="{{asset('assets/images/modal-banner.png')}}" alt="" class="img-responsive center-block">
                            <img src="{{asset('assets/images/modal-banner2.png')}}" alt="" class="img-responsive center-block" style="position:absolute;top:0;left:0;width:150px;">
                        </div>
                        <div class="right-body text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2>Always First</h2>
                            <div class="line"></div>
                            <h3>Sign Up Now!</h3>
                            <p>Be the first to receive our exclusive offers and coupons</p>
                            <input type="text" name="" class="form-control text-center" placeholder="Enter your email address">
                            <button type="button" name="button" class="btn btn-default-style">SUBSCRIBE</button>
                            <div class="footer-text">
                                <i class="fa fa-check-square-o"></i> I don’t want to recieve it!
                            </div>
                            <img src="{{asset('assets/images/modal-banner3.png')}}" alt="" class="img-responsive center-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('plugins/slick/slick.js') }}"></script>
        <script type="text/javascript">
            $('.multiple-items').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                centerPadding: '60px',
                autoplay: true,
                autoplaySpeed: 3000,
                nextArrow: '<button type="button" class="btn btn-sm carousel-product next"><i class="fa fa-angle-right"></i></button>',
                prevArrow: '<button type="button" class="btn btn-sm carousel-product prev"><i class="fa fa-angle-left"></i></button>',
                responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
            });

            $('.hash-tags-items').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                centerPadding: '0px',
                autoplay: true,
                autoplaySpeed: 3000,
                nextArrow: '<button type="button" class="btn btn-sm carousel-product hash-next"><i class="fa fa-angle-right"></i></button>',
                prevArrow: '<button type="button" class="btn btn-sm carousel-product hash-prev"><i class="fa fa-angle-left"></i></button>',
                responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]
            });
        </script>
        <script src="{{ asset('js/style.js') }}"></script>
    </body>
</html>
