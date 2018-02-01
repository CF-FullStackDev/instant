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
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-instagram"></i>
                            <i class="fa fa-pinterest-p"></i>
                        </div>
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/images/logo.png')}}" alt="Instant">
                        </a>
                        <div class="top-links">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-shopping-cart"></i>
                            <i class="fa fa-navicon"></i>
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

        <!-- === HEADER === -->
        <header>
            <div class="product-list-header">
                <div class="container breadcrums-top">
                    <div class="col-xs-12">
                        <ul class="list-inline breadcrums-container">
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <a href="#">
                                    Concerns
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-right"></i>
                                <span>
                                    Anti-Aging
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <h1>Anti-Aging</h1>
                        <div class="dotted-line dotted-grey">&nbsp;</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh ipsum consequat nisl vel pretium lectus quam id leo.</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- === CONTENTS === -->
        <section>
            <div class="container product-list-container">
                <div class="row">

                    <div class="col-xs-3 product-list-left">
                        <h4>Categories</h4>
                        <div class="divider"></div>
                        <div class="category-container">
                            <span>Skin Care</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <div></div> Moisturizer
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div></div> Treatments
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div></div> Eye Care
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div></div> Lip Care
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="category-container">
                            <span>Skin Type</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <div></div> Normal/Combination
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div></div> Oily
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div></div> Dry
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div></div> All Skin Types
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-9">
                        @for ($i = 0; $i < 9; $i++)
                            <div class="col-xs-4 product-item-container">
                                <a href="{{url('product-view')}}">
                                    <img src="{{asset('assets/images/products/product2.png')}}" alt="Banner1" class="img-responsive center-block">
                                </a>
                                <div class="product-details">
                                    <span>RetrinAL 0.1 Intensive Cream</span>
                                    <span>₱150.00</span>
                                    <button type="button" name="" class="btn btn-default-style"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                    <div class="star-ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>15</span>
                                    </div>
                                    <div class="quick-view">
                                        <a href="#">Quick View</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
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

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('plugins/slick/slick.js') }}"></script>
        <script src="{{ asset('js/style.js') }}"></script>
    </body>
</html>
