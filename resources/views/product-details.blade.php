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
            <div class="product-view-header">
                <div class="container">
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
                            <a href="#">
                                Anti-Aging
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <span>
                                RetrinAL 0.1 Intensive Cream
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- === CONTENTS === -->
        <div class="container product-view-container">
            <div class="row">
                <div class="col-xs-4">
                    <img src="{{asset('assets/images/products/product2-view.png')}}" alt="" class="img-responsive">
                </div>
                <div class="col-xs-8 product-details">
                    <h3>RetrinAL 0.1 Intensive Cream</h3>
                    <div class="star-ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <span>15</span>
                    </div>
                    <span class="read-review"><i class="fa fa-circle"></i> <a href="javascript:void(0)" id="target-reviews">Read Reviews</a></span>
                    <span class="write-review"><i class="fa fa-circle"></i> <a href="javascript:void(0)" id="target-reviews-comment"> Write Review</a></span>
                    <div class="product-price">
                        <span>₱150.00</span>
                        <span>SKU: RIC-01</span>
                    </div>
                    <div class="clearfix">
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nibh ipsum consequat nisl vel pretium lectus quam id leo. Massa sed elementum tempus egestas sed sed risus pretium quam. Sed elementum tempus egestas sed sed.</span>
                        <a href="#">More Details</a>
                    </div>
                    <div class="product-options">
                        <p>
                            <span>TAGS:</span> Hypoallergenic, Non-Comedogenic, Fragrance-Free, Soap-Free, Paraben-Free, Soy-Free
                        </p>
                        <p>
                            <span>SHARE:</span> <i class="fa fa-facebook-official"></i> <i class="fa fa-twitter-square"></i> <i class="fa fa-instagram"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-view-tabs">
            <div class="container">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#home">Benefits</a></li>
                    <li><a data-toggle="tab" href="#menu1">Indications</a></li>
                    <li><a data-toggle="tab" href="#menu2">Ingredients</a></li>
                    <li><a data-toggle="tab" href="#menu3">How to Use</a></li>
                </ul>
            </div>
        </div>

        <div class="product-view-tabs-content">
            <div class="container">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <span>BENEFITS</span>
                        <ul>
                            <li><span>Fills wrinkles for a smoother appearance</span></li>
                            <li><span>Visibly tightens the skin</span></li>
                            <li><span>Reduces appearance of dark circles and puffiness</span></li>
                            <li><span>Eye contour is left hydrated and supple</span></li>
                        </ul>
                        <span>KEY INGREDIENTS</span>
                        <ul>
                            <li><span>Retinaldehyde, clinically shown to be more effective than Retinol, smoothes away the appearance of wrinkles and brightens the skin</span></li>
                            <li><span>Patented Collactin reduces the appearance of pronounced wrinkles</span></li>
                            <li><span>Hyaluronic Acid MO, the ideal molecular weight of Hyaluronic Acid to penetrate skin, replenishes hydration to visibly plump and firm the skin</span></li>
                            <li><span>Dextran Sulfate reduces the appearance of dark circles and decongests puffiness</span></li>
                        </ul>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <ul>
                            <li><span>Deep lines and wrinkles</span></li>
                            <li><span>Lack of radiance</span></li>
                            <li><span>Dark circles</span></li>
                            <li><span>Under-eye puffiness</span></li>
                        </ul>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <p>WATER, ALUMINUM STARCH OCTENYLSUCCINATE, GLYCERIN, ISODECYL NEOPENTANOATE, PPG-15 STEARYL ETHER, CETYL ALCOHOL, CETEARYL ALCOHOL, GLYCERYL STEARATE, PEG-100 STEARATE, CAPRYLIC/CAPRIC TRIGLYCERIDE, DIMETHICONE, 1,2-HEXANEDIOL, ASCOPHYLLUM NODOSUM EXTRACT, BHT, CAPRYLYL GLYCOL, CETEARETH-33, DISODIUM EDTA, RETINAL, SODIUM DEXTRAN SULFATE, SODIUM HYALURONATE, SODIUM HYDROXIDE, TOCOPHERYL ACETATE, XANTHAN GUM</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <p>Apply in the evening by gently dabbing on the eye contour, focusing on crow's feet, and smoothing along the eyebrow arch. The use of daily sun protection is recommended during the use of this product.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row product-view-related">
                <div class="col-xs-12">
                    <h3 class="text-center">Related products</h3>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-xs-3 product-view-item">
                            <a href="#">
                                <img src="{{asset('assets/images/products/product2.png')}}" alt="" class="img-responsive center-block">
                            </a>
                            <span>RetrinAL 0.1 Intensive</span>
                            <span>₱150.00</span>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row product-view-reviews" id="section-reviews">
                <div class="col-xs-12">
                    <div class="text-center product-view-reviews-header">
                        <div class="star-ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h3>Customer Reviews</h3>
                        <span>Based of 10 reviews</span>
                        <button type="button" data-toggle="collapse" data-target="#toggle-review-form" class="btn btn-default-outline"><i class="fa fa-pencil-square-o"></i> Write a review</button>
                    </div>
                    <div id="toggle-review-form" class="collapse">
                        <h4>WRITE A REVIEW</h4>
                        <form class="" action="" method="post">
                            <label>Score:</label>
                            <div class="star-ratings">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="reviewRating" value="5" /><label for="star5" title="star5">5 stars</label>
                                    <input type="radio" id="star4" name="reviewRating" value="4" /><label for="star4" title="star4">4 stars</label>
                                    <input type="radio" id="star3" name="reviewRating" value="3" /><label for="star3" title="star3">3 stars</label>
                                    <input type="radio" id="star2" name="reviewRating" value="2" /><label for="star2" title="star2">2 stars</label>
                                    <input type="radio" id="star1" name="reviewRating" value="1" /><label for="star1" title="star1">1 star</label>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label for="usr">Name:</label>
                                <input type="text" class="form-control" id="usr" maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="usr2" style="font-weight:300;">Title:</label>
                                <input type="text" class="form-control" id="usr2" maxlength="50">
                            </div>
                            <div class="form-group">
                                <label for="usr3" style="font-weight:300;">Review:</label>
                                <textarea name="name" rows="3" class="form-control" style="resize:none;border-radius:0;" id="usr3"></textarea>
                            </div>
                            <button type="button" name="" class="btn btn-default-style center-block" style="margin-top:20px;"><i class="fa fa-paper-plane"></i> Send Review</button>
                        </form>
                    </div>
                    <div class="divider"></div>

                    <div class="col-xs-12 product-view-reviews-container">
                        <div class="col-xs-3 reviews-user">
                            <div>D</div>
                            <span>Dior Z.</span>
                        </div>
                        <div class="col-xs-9 reviews-comment">
                            <div class="star-ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span>12/16/17</span>
                            <h4>Excellent product</h4>
                            <span>Very happy with this eye cream!</span>
                        </div>
                        <div class="reviews-option">
                            <i class="fa fa-share-square-o"></i> Share
                            <span>Was This Review Helpful?</span>
                            <i class="fa fa-thumbs-down"></i> 0
                            <i class="fa fa-thumbs-up"></i> 0
                        </div>
                    </div>

                    <div class="col-xs-12 product-view-reviews-container">
                        <div class="col-xs-3 reviews-user">
                            <div>C</div>
                            <span>Cristian F.</span>
                        </div>
                        <div class="col-xs-9 reviews-comment">
                            <div class="star-ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <span>12/16/17</span>
                            <h4>Great product</h4>
                            <span>I am very happy with my recent purchase. The product does magic on the eyes and its especially suitable for dark circles. I will definitely purchase this one again.</span>
                        </div>
                        <div class="reviews-option">
                            <i class="fa fa-share-square-o"></i> Share
                            <span>Was This Review Helpful?</span>
                            <i class="fa fa-thumbs-down"></i> 0
                            <i class="fa fa-thumbs-up"></i> 0
                        </div>
                    </div>

                </div>
            </div>
        </div>

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
