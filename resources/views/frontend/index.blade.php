@extends('frontend.layouts.app')

@section('content')
    {{-- <!doctype html>
<html lang="en">
<!-- Mirrored from bizbookdirectorytemplate.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 18:30:59 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <title>
        BizBook Directory Template by Rn53Themes.net
    </title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#76cef1" />
    <meta property="og:image" content="images/home/16077bizbook-white.png') }}" />
    <meta name="description"
        content="Kick start your online directory with BizBook Directory Template. Its comes with ultimate features like listings, events, blog, community. Try Bizbook directory now!">
    <meta name="keyword"
        content="bizbook directory, bizbook directory template, business directory template, php directory template, functional php template, php listing template, php dirctory database, local listing php template">
    <!--== FAV ICON(BROWSER TAB ICON) ==-->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!--== GOOGLE FONTS ==-->
    <link href="https://fonts.googleapis.com/css?family=Oswald:700|Source+Sans+Pro:300,400,600,700&amp;display=swap"
        rel="stylesheet">
    <!--== WEB ICON FONTS ==-->
    <link rel="preload" as="font" href="{{ asset('assets/css/icon.woff2') }}" type="font/woff2"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--== CSS FILES ==-->
    <link rel="stylesheet" href="../code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme-color.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
      <script src="{{ asset('assets/js/respond.min.js') }}"></script>
      <![endif]-->
    <!--    Google Analytics Code Starts-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90614514-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-90614514-2');
    </script>
    <!--    Google Analytics Code Ends-->
</head>

<body>
    <!--    Google Ad Sense Code Starts-->
    <!--    Google Ad Sense Code Ends-->
    <!-- Preloader -->
    {{-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> --}}

    {{-- -------------------------- --}}
    <!-- START -->
    {{-- <section>
    <div class="str ind2-home">
        <div class="hom-head" style=" background-image: url({{ asset('assets/images/88129ex2.jpg') }});">
            <div class="hom-top">
                <div class="container">
                    <div class="row">
                        <div class="hom-nav ">
                            <!--MOBILE MENU-->
                            <a href="index.html" class="top-log"><img
                                    src="{{ asset('assets/images/home/16077bizbook-white.png') }}"
                                    style="width: 192px; height: auto;" alt="" class="ic-logo"></a>
                            <div class="menu">
                                <h4>Explore</h4>
                            </div>
                            <div class="pop-menu">
                                <div class="container">
                                    <div class="row">
                                        <i class="material-icons clopme">close</i>
                                        <div class="pmenu-spri">
                                            <ul>
                                                <li><a href="all-category.html" class="act"><img
                                                            src="{{ asset('assets/images/icon/shop.png') }}">All
                                                        Services </a></li>
                                                <li><a href="service-experts/index.html" class="act"><img
                                                            src="{{ asset('assets/images/icon/expert.png') }}">Service
                                                        Experts </a></li>
                                                <li><a href="jobs/index.html" class="act"><img
                                                            src="{{ asset('assets/images/icon/employee.png') }}">Jobs
                                                    </a></li>
                                                <li><a href="news/index.html"><img
                                                            src="{{ asset('assets/images/icon/news.png') }}">News
                                                        &
                                                        Magazines </a></li>
                                                <li><a href="events.html"><img
                                                            src="{{ asset('assets/images/icon/calendar.png') }}">Events
                                                    </a></li>
                                                <li><a href="all-products.html"><img
                                                            src="{{ asset('assets/images/icon/cart.png') }}">Products
                                                    </a></li>
                                                <li><a href="coupons.html"><img
                                                            src="{{ asset('assets/images/icon/coupons.png') }}">Coupon
                                                        & deals </a></li>
                                                <li><a href="blog-posts.html"><img
                                                            src="{{ asset('assets/images/icon/blog1.png') }}">Blogs
                                                    </a></li>
                                                <li><a href="community.html"><img
                                                            src="{{ asset('assets/images/icon/11.png') }}">Community
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="pmenu-cat">
                                            <h4>All Categories</h4>
                                            <input type="text" id="pg-sear" placeholder="Search category">
                                            <ul id="pg-resu">
                                                <li>
                                                    <a href="all-listing/automobiles.html">Automobiles
                                                        -<span>05</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/wedding-halls.html">Wedding halls
                                                        -<span>06</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/spa-and-facial.html">Spa and Facial
                                                        -<span>05</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/pet-shop.html">Pet shop
                                                        -<span>02</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/technology.html">Technology
                                                        -<span>05</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/real-estate.html">Real Estate
                                                        -<span>09</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/sports.html">Sports -<span>00</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/hospitals.html">Hospitals
                                                        -<span>05</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/education.html">Education
                                                        -<span>06</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/transportation.html">Transportation
                                                        -<span>05</span></a>
                                                </li>
                                                <li>
                                                    <a href="all-listing/electricals.html">Electricals
                                                        -<span>05</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dir-home-nav-bot">
                                            <ul>
                                                <li>A few reasons you’ll love Online Business Directory <span>Call
                                                        us on: +01 6214 6548</span></li>
                                                <li><a href="post-your-ads.html"
                                                        class="waves-effect waves-light btn-large"><i
                                                            class="material-icons">font_download</i> Advertise with
                                                        us </a>
                                                </li>
                                                <li><a href="pricing-details.html"
                                                        class="waves-effect waves-light btn-large"> <i
                                                            class="material-icons">store</i> Add your business </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MOBILE MENU-->
                            <div class="top-ser">
                                <form name="filter_form" id="filter_form" class="filter_form">
                                    <ul>
                                        <li class="sr-sea">
                                            <input type="text" autocomplete="off" id="top-select-search"
                                                placeholder="What are you looking for?">
                                            <ul id="tser-res1" class="tser-res tser-res2">
                                                <li>
                                                    <div>
                                                        <h4>Best AC Service Expert near you</h4>
                                                        <span>Service expert, ac service, ac service in new
                                                            york</span>
                                                        <a href="all-service-experts/ac-services.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>New year 2022 celebration started</h4>
                                                        <span>New year 2022, event booking, hotel booking and
                                                            more</span>
                                                        <a href="event/light-music-event-2022.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>Now easy to buy Villas, Plots and Flats</h4>
                                                        <span>New york City</span>
                                                        <a href="all-listing/real-estate.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>Home cleaning services near you</h4>
                                                        <span>Home cleaning, pet control and more</span>
                                                        <a href="all-service-experts/house-cleaning-service.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>Online classes for School Students</h4>
                                                        <span>Schools, university, colleges, online classes, tution
                                                            centers, distance education..</span>
                                                        <a href="listing/niil-institute-of-technology.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>Buy Iphone13 Pro now</h4>
                                                        <span>Iphone 13, 12, 11 and all apple product
                                                            available</span>
                                                        <a href="product/apple-iphone-12--blue--128-gb.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>Software jobs waiting for you</h4>
                                                        <span>Jobs in New york, High pay salary</span>
                                                        <a href="all-jobs/software.html"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div>
                                                        <h4>Spa Center For Womens</h4>
                                                        <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                                        <a href="all-listing/spa-and-facial.html"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sbtn">
                                            <button type="button" class="btn btn-success" id="top_filter_submit"><i
                                                    class="material-icons">&nbsp;</i></button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <ul class="bl">
                                <li>
                                    <a href="pricing-details.html">Add business</a>
                                </li>
                                <li>
                                    <a href="login.html">Sign in</a>
                                </li>
                                <li>
                                    <a href="login3d2e.html?login=register">Create an account</a>
                                </li>
                            </ul>
                            <!--MOBILE MENU-->
                            <div class="mob-menu">
                                <div class="mob-me-ic"><i class="material-icons">menu</i></div>
                                <div class="mob-me-all">
                                    <div class="mob-me-clo"><i class="material-icons">close</i></div>
                                    <div class="mv-bus">
                                        <h4></h4>
                                        <ul>
                                            <li>
                                                <a href="pricing-details.html">Add business</a>
                                            </li>
                                            <li>
                                                <a href="login.html">Sign in</a>
                                            </li>
                                            <li>
                                                <a href="login3d2e.html?login=register">Create an account</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mv-cate">
                                        <h4>All Categories</h4>
                                        <ul>
                                            <li>
                                                <a href="all-listing/automobiles.html">Automobiles</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/wedding-halls.html">Wedding halls</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/spa-and-facial.html">Spa and Facial</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/pet-shop.html">Pet shop</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/technology.html">Technology</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/real-estate.html">Real Estate</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/sports.html">Sports</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/hospitals.html">Hospitals</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/education.html">Education</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/transportation.html">Transportation</a>
                                            </li>
                                            <li>
                                                <a href="all-listing/electricals.html">Electricals</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--END MOBILE MENU-->
                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- ------------------ --}}
    {{-- searchItem --}}
    {{-- <div class="container">
                    <div class="row">
                        <div class="ban-tit">
                            <h1>
                                <b>Find your Local needs</b> Restaurants, cafe's, and bars in New york
                            </h1>
                        </div>
                        <div class="ban-search">
                            <form name="filter_form" id="filter_form" class="filter_form">
                                <ul>
                                    <li class="sr-cit">
                                        <select id="city_check" name="city_check" class="chosen-select">
                                            <option value="">Select City</option>
                                            <option value="48025">Los Angeles</option>
                                            <option value="48026">Chicago</option>
                                            <option value="48027">Houston</option>
                                            <option value="48028">Phoenix</option>
                                            <option value="48024">New York City</option>
                                            <option value="48029">Philadelphia</option>
                                            <option value="48030">San Antonio</option>
                                            <option value="48031">San Diego</option>
                                            <option value="48032">Dallas</option>
                                            <option selected value=""></option>
                                        </select>
                                    </li>
                                    <li class="sr-sea">
                                        <input type="text" autocomplete="off" id="select-search"
                                            placeholder="What are you looking for?" class="search-field">
                                        <ul id="tser-res" class="tser-res tser-res1">
                                            <li>
                                                <div>
                                                    <h4>Best AC Service Expert near you</h4>
                                                    <span>Service expert, ac service, ac service in new york</span>
                                                    <a href="all-service-experts/ac-services.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>New year 2022 celebration started</h4>
                                                    <span>New year 2022, event booking, hotel booking and more</span>
                                                    <a href="event/light-music-event-2022.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Now easy to buy Villas, Plots and Flats</h4>
                                                    <span>New york City</span>
                                                    <a href="all-listing/real-estate.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Home cleaning services near you</h4>
                                                    <span>Home cleaning, pet control and more</span>
                                                    <a href="all-service-experts/house-cleaning-service.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Online classes for School Students</h4>
                                                    <span>Schools, university, colleges, online classes, tution centers,
                                                        distance education..</span>
                                                    <a href="listing/niil-institute-of-technology.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Buy Iphone13 Pro now</h4>
                                                    <span>Iphone 13, 12, 11 and all apple product available</span>
                                                    <a href="product/apple-iphone-12--blue--128-gb.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Software jobs waiting for you</h4>
                                                    <span>Jobs in New york, High pay salary</span>
                                                    <a href="all-jobs/software.html"></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h4>Spa Center For Womens</h4>
                                                    <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                                    <a href="all-listing/spa-and-facial.html"></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sr-btn">
                                        <input type="submit" id="filter_submit" name="filter_submit" value="Search"
                                            class="filter_submit">
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="ban-ql">
                            <ul>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/1.png') }}" alt="">
                                        <h4>24 Million Business</h4>
                                        <p>Choose from a collection of handpicked luxury villas & apartments</p>
                                        <a href="all-category.html">Explore Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/2.png') }}" alt="">
                                        <h4>500+ Service Experts</h4>
                                        <p>Are you looking for the best Service Expert? We make it easy to hire the
                                            right professional
                                        </p>
                                        <a href="service-experts/index.html">Book Expert Now</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/3.png') }}" alt="">
                                        <h4>Find Your Next Job Now</h4>
                                        <p>Search latest job openings online including IT, Sales, Banking, Fresher,
                                            Walk-ins, Part-time & more</p>
                                        <a href="jobs/index-2.html">Find you Job</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/4.png') }}" alt="">
                                        <h4>Sell & Buy Product Online</h4>
                                        <p>Bizbook Online store. Everything you need to sell & buy online.</p>
                                        <a href="all-products.html">Start Selling Online</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="h2-ban-ql">
                            <ul>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/listing.png') }}" alt="">
                                        <h5><span class="count1">11</span>All Services </h5>
                                        <a href="all-category.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/expert.png') }}" alt="">
                                        <h5><span class="count1">11</span>Service Experts </h5>
                                        <a href="service-experts/index.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/employee.png') }}" alt="">
                                        <h5><span class="count1">11</span>Jobs </h5>
                                        <a href="jobs/index.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/shop.png') }}" alt="">
                                        <h5><span class="count1">05</span>Products </h5>
                                        <a href="all-products.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/event.png') }}" alt="">
                                        <h5><span class="count1">09</span>Events </h5>
                                        <a href="events.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/coupons.png') }}" alt="">
                                        <h5><span class="count1">08</span>Coupons </h5>
                                        <a href="coupons.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/blog.png') }}" alt="">
                                        <h5><span class="count1">13</span>Blogs </h5>
                                        <a href="blog-posts.html">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <img src="{{ asset('assets/images/icon/general.png') }}" alt="">
                                        <h5><span class="count1">61</span>Community </h5>
                                        <a href="community.html">&nbsp;</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
    {{-- searchItem  end --}}
    {{-- </div>
</div>
</section> --}}




    {{-- TOpbar endend----------- --}}
    <!-- END -->



    <style>
        .hom-top {
            transition: all 0.5s ease;
            background: none;
            box-shadow: none;
        }

        .top-ser {
            display: none;
        }

        .dmact .top-ser {
            display: block;
        }

        .caro-home {
            margin-top: 90px;
            float: left;
            width: 100%;
        }

        .carousel-item:before {
            background: none;
        }

    </style>
    <!-- START -->
    <section>
        <div class="str">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Popular Services</span> near you</h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>
                    <div class="land-pack">
                        <ul>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/60622ser6.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Spa and Facial <span class="dir-ho-cat">Show All (05 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/spa-and-facial.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/8253813.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Hospitals <span class="dir-ho-cat">Show All (05 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/hospitals.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/930359.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Transportation <span class="dir-ho-cat">Show All (05 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/transportation.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/17259tr1.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Automobiles <span class="dir-ho-cat">Show All (05 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/automobiles.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/909906.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Electricals <span class="dir-ho-cat">Show All (05 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/electricals.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/1792516.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Education <span class="dir-ho-cat">Show All (06 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/education.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/451308.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Sports <span class="dir-ho-cat">Show All (00 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/sports.html" class="land-pack-grid-btn">View all listings</a>
                                </div>
                            </li>
                            <li>
                                <div class="land-pack-grid">
                                    <div class="land-pack-grid-img">
                                        <img src="{{ asset('assets/images/services/5464514.jpg') }}" alt="">
                                    </div>
                                    <div class="land-pack-grid-text">
                                        <h4>Real Estate <span class="dir-ho-cat">Show All (09 )</span>
                                        </h4>
                                    </div>
                                    <a href="all-listing/real-estate.html" class="land-pack-grid-btn">View all
                                        listings</a>
                                </div>
                            </li>
                        </ul>
                        <a href="all-category.html" class="more">View all services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="str">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Explore City</span> Category </h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>
                    <div class="home-city">
                        <ul>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="{{ asset('assets/images/services/95787pexels-asad-photo-maldives-1450363.jpg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img src="{{ asset('assets/images/services/1.html') }}" alt="">
                                        <h4>Real Estate</h4>
                                        <div class="list-rat-all">
                                            <b>4.4</b>
                                            <label class="rat">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                            </label>
                                            <span>5Reviews</span>
                                        </div>
                                        <p>09Listings</p>
                                    </div>
                                    <a href="all-listing/real-estate.html" class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="{{ asset('assets/images/services/27799pexels-pixabay-159823.jpg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img src="{{ asset('assets/images/services/1185pexels-buro-millennial-1438081.jpg') }}"
                                            alt="">
                                        <h4>Education</h4>
                                        <div class="list-rat-all">
                                            <b>3.7</b>
                                            <label class="rat">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons ratstar">star</i>
                                            </label>
                                            <span>3Reviews</span>
                                        </div>
                                        <p>06Listings</p>
                                    </div>
                                    <a href="all-listing/education.html" class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="{{ asset('assets/images/services/8370pexels-photo-263402.jpg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img src="{{ asset('assets/images/services/20356s7.html') }}" alt="">
                                        <h4>Hospitals</h4>
                                        <div class="list-rat-all">
                                            <b>0 Ratings</b>
                                        </div>
                                        <p>05Listings</p>
                                    </div>
                                    <a href="all-listing/hospitals.html" class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="{{ asset('assets/images/services/87731pexels-pixabay-461064.jpg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img src="{{ asset('assets/images/services/88878hangouts-800x391.html') }}"
                                            alt="">
                                        <h4>Technology</h4>
                                        <div class="list-rat-all">
                                            <b>3.0</b>
                                            <label class="rat">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons ratstar">star</i>
                                                <i class="material-icons ratstar">star</i>
                                            </label>
                                            <span>3Reviews</span>
                                        </div>
                                        <p>05Listings</p>
                                    </div>
                                    <a href="all-listing/technology.html" class="fclick">&nbsp;</a>
                                </div>
                            </li>
                            <li>
                                <div class="hcity">
                                    <div>
                                        <img src="{{ asset('assets/images/services/1158326574pexels-photo-3997981.jpg') }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <img src="{{ asset('assets/images/services/4020726574pexels-photo-3997981.jpg') }}"
                                            alt="">
                                        <h4>Spa and Facial</h4>
                                        <div class="list-rat-all">
                                            <b>4.3</b>
                                            <label class="rat">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                            </label>
                                            <span>3Reviews</span>
                                        </div>
                                        <p>05Listings</p>
                                    </div>
                                    <a href="all-listing/spa-and-facial.html" class="fclick">&nbsp;</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="hom-mpop-ser">
            <div class="container">
                <div class="hom-mpop-main">
                    <div class="home-tit">
                        <h2><span>Featured Services</span>
                        </h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>
                    <!-- NEW FEATURE SERVICES -->
                    <div class="hom2-cus-sli">
                        <ul class="multiple-items1">
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/44659pexels-buro-millennial-1438081.jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/mark-plus-online-classes.html">Mark Plus Online Classes</a>
                                        </h4>
                                        <span><a href="#">Education</a></span>
                                    </div>
                                    <a href="listing/mark-plus-online-classes.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/42413rn53-themes.png') }}" alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/rn53-web-deign-services.html">Rn53 Web Deign Services</a>
                                        </h4>
                                        <span><a href="#">Technology</a></span>
                                    </div>
                                    <a href="listing/rn53-web-deign-services.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/42858pexels-caio-67112.jpg') }}" alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/smith-social-media-marketing.html">Smith social media
                                                marketing</a>
                                        </h4>
                                        <label class="rat">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                            <i class="material-icons">star_border</i>
                                            <i class="material-icons">star_border</i>
                                        </label>
                                        <span><a href="#">Technology</a></span>
                                    </div>
                                    <a href="listing/smith-social-media-marketing.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/92173pexels-cottonbro-4480505.jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/car-repair-services--center.html">car repair services
                                                center</a>
                                        </h4>
                                        <label class="rat">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                        </label>
                                        <span><a href="#">Automobiles</a></span>
                                    </div>
                                    <a href="listing/car-repair-services--center.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/6223pexels-andrea-piacquadio-3769007.jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/onlines-bus-booking-with-trip.html">Onlines bus booking
                                                with trip</a>
                                        </h4>
                                        <label class="rat">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                        </label>
                                        <span><a href="#">Transportation</a></span>
                                    </div>
                                    <a href="listing/onlines-bus-booking-with-trip.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/73830pexels-photo-1458457-(2).jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/emiratesh-palace.html">Emiratesh Palace</a>
                                        </h4>
                                        <label class="rat">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                            <i class="material-icons">star_border</i>
                                        </label>
                                        <span><a href="#"></a></span>
                                    </div>
                                    <a href="listing/emiratesh-palace.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/26574pexels-photo-3997981.jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/anna-spa---massage.html">Anna Spa & Massage</a>
                                        </h4>
                                        <span><a href="#">Spa and Facial</a></span>
                                    </div>
                                    <a href="listing/anna-spa---massage.html" class="fclick"></a>
                                </div>
                            </li>
                            <li>
                                <div class="testmo hom4-prop-box">
                                    <img src="{{ asset('assets/images/listings/37577pexels-karolina-grabowska-5240337.jpg') }}"
                                        alt="">
                                    <div>
                                        <h4>
                                            <a href="listing/mia-skin-care.html">Mia Skin Care</a>
                                        </h4>
                                        <label class="rat">
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star</i>
                                            <i class="material-icons">star_border</i>
                                            <i class="material-icons">star_border</i>
                                        </label>
                                        <span><a href="#">Spa and Facial</a></span>
                                    </div>
                                    <a href="listing/mia-skin-care.html" class="fclick"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- END NEW FEATURE SERVICES -->
                </div>
                <div class="hlead-coll">
                    <div class="col-md-6">
                        <div class="hom-cre-acc-left">
                            <h3>What service do you need? <span>BizBook Directory</span>
                            </h3>
                            <p>Tell us more about your requirements so that we can connect you to the right service
                                provider.</p>
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/icon/blog.png') }}" alt="">
                                    <div>
                                        <h5>Tell us more about your requirements</h5>
                                        <p>HI Imagine you have made your presence online through a local online
                                            directory, but your competitors have..</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/icon/shield.png') }}" alt="">
                                    <div>
                                        <h5>We connect with right service provider</h5>
                                        <p>Advertising your business to area specific has many advantages. For local
                                            businessmen, it is an opportunity..</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/icon/general.png') }}" alt="">
                                    <div>
                                        <h5>Happy with our service</h5>
                                        <p>Your local business too needs brand management and image making. As you know
                                            the local market..</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hom-col-req">
                            <div class="log-bor">&nbsp;</div>
                            <span class="udb-inst">Fill the form</span>
                            <h4>What you looking for?</h4>
                            <div id="home_enq_success" class="log" style="display: none;">
                                <p>Your Enquiry Is Submitted Successfully!!!</p>
                            </div>
                            <div id="home_enq_fail" class="log" style="display: none;">
                                <p>Oops!! Something Went Wrong Try Later!!!</p>
                            </div>
                            <div id="home_enq_same" class="log" style="display: none;">
                                <p>You cannot make enquiry on your own listing!!</p>
                            </div>
                            <form name="home_enquiry_form" id="home_enquiry_form" method="post"
                                enctype="multipart/form-data">
                                <input type="hidden" class="form-control" name="listing_id" value="0" placeholder=""
                                    required>
                                <input type="hidden" class="form-control" name="listing_user_id" value="0" placeholder=""
                                    required>
                                <input type="hidden" class="form-control" name="enquiry_sender_id" value=""
                                    placeholder="" required>
                                <input type="hidden" class="form-control" name="enquiry_source" value="Website"
                                    placeholder="" required>
                                <div class="form-group">
                                    <input type="text" name="enquiry_name" value="" required="required"
                                        class="form-control" placeholder="Enter name*">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email*"
                                        required="required" value="" name="enquiry_email"
                                        pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                        title="Invalid email address">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" name="enquiry_mobile"
                                        placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}"
                                        title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required="">
                                </div>
                                <div class="form-group">
                                    <select name="enquiry_category" id="enquiry_category" class="form-control">
                                        <option value="">Select Category</option>
                                        <option value="19">Wedding halls</option>
                                        <option value="17">Pet shop</option>
                                        <option value="16">Technology</option>
                                        <option value="15">Spa and Facial</option>
                                        <option value="10">Real Estate</option>
                                        <option value="8">Sports</option>
                                        <option value="7">Education</option>
                                        <option value="6">Electricals</option>
                                        <option value="5">Automobiles</option>
                                        <option value="3">Transportation</option>
                                        <option value="2">Hospitals</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="enquiry_message"
                                        placeholder="Enter your query or message"></textarea>
                                </div>
                                <input type="hidden" id="source">
                                <button type="submit" id="home_enquiry_submit" name="home_enquiry_submit"
                                    class="btn btn-primary">
                                    Submit Requirements </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="str str-full">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2>
                            <span>Top Service Provider</span> in city
                        </h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>
                    <div class="ho-popu-bod">
                        <!--Top Branding Hotels-->
                        <div class="col-md-4">
                            <div class="hot-page2-hom-pre-head">
                                <h4>Top Branding <span></span></h4>
                            </div>
                            <div class="hot-page2-hom-pre">
                                <ul>
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/69207pexels-nikolaj-erema-297985.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Atlantihs Paradise Island</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>5.0</span>
                                        </div>
                                        <a href="listing/atlantihs-paradise-island.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/49746pexels-pixabay-258154.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>The Westint Excelsior</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>5.0</span>
                                        </div>
                                        <a href="listing/the-westint-excelsior.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/69081pexels-david-guerrero-2945692.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Ranchoh Valencia Resort</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>4.0</span>
                                        </div>
                                        <a href="listing/ranchoh-valencia-resort.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/73830pexels-photo-1458457-(2).jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Emiratesh Palace</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>3.0</span>
                                        </div>
                                        <a href="listing/emiratesh-palace.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/17559pexels-photo-7207834.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Mardana Palace Hotels</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <a href="listing/mardana-palace-hotels.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-page2-hom-pre-head">
                                <h4>Top Branding <span>Automobiles</span></h4>
                            </div>
                            <div class="hot-page2-hom-pre">
                                <ul>
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/91029pexels-andrea-piacquadio-3818903.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Automobile services new jersey</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>3.3</span>
                                        </div>
                                        <a href="listing/automobile--services-new-jersey.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/50258pexels-andrea-piacquadio-3806255-(1).jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Jose Bike Services Center</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>4.0</span>
                                        </div>
                                        <a href="listing/jose-bike-services-center.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/37475pexels-andrea-piacquadio-3823418.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>emergency of multi brand car services</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>4.0</span>
                                        </div>
                                        <a href="listing/emergency-of-multi-brand-car-services.html"
                                            class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/92173pexels-cottonbro-4480505.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>car repair services center</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>5.0</span>
                                        </div>
                                        <a href="listing/car-repair-services--center.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/94923pexels-photo-3806288.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Bread Lee Automobile and Services</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>5.0</span>
                                        </div>
                                        <a href="listing/bread-lee-automobile-and-services.html"
                                            class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="hot-page2-hom-pre-head">
                                <h4>Top Branding <span>Education</span></h4>
                            </div>
                            <div class="hot-page2-hom-pre">
                                <ul>
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/82145pexels-pixabay-267885.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>NIIL Institute of Technology</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>3.0</span>
                                        </div>
                                        <a href="listing/niil-institute-of-technology.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/44659pexels-buro-millennial-1438081.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Mark Plus Online Classes</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <a href="listing/mark-plus-online-classes.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/9594pexels-julia-m-cameron-4145153.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>John smith free online class start now</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>4.0</span>
                                        </div>
                                        <a href="listing/john-smith-free-online-class-start-now.html"
                                            class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/26334pexels-julia-m-cameron-4145355.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>CBZ Online CLasses</h5>
                                            <span>No:2, 4th Avenue, Newyork, USA, Near to Airport</span>
                                        </div>
                                        <div class="hot-page2-hom-pre-3">
                                            <span>4.0</span>
                                        </div>
                                        <a href="listing/cbz-online-classes.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                    <!--LISTINGS-->
                                    <li>
                                        <div class="hot-page2-hom-pre-1"><img
                                                src="{{ asset('assets/images/listings/13740pexels-burst-374820.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="hot-page2-hom-pre-2">
                                            <h5>Online marketing training school</h5>
                                            <span>delhi, india </span>
                                        </div>
                                        <a href="listing/online-marketing-training-school.html" class="fclick"></a>
                                    </li>
                                    <!--LISTINGS-->
                                </ul>
                            </div>
                        </div>
                        <!--End Top Branding Hotels-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <section>
        <div id="demo" class="carousel slide cate-sli caro-home" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/slider/90890557952.jpg') }}" alt="Los Angeles" width="1100"
                        height="500">
                    <a href="demo.html" target="_blank"></a>
                </div>
                <div class="carousel-item ">
                    <img src="{{ asset('assets/images/slider/27459517111.jpg') }}" alt="Los Angeles" width="1100"
                        height="500">
                    <a href="demo.html" target="_blank"></a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
    <!-- START -->
    <section>
        <div class="str count">
            <div class="container">
                <div class="row">
                    <div class="home-tit">
                        <h2><span>Feature Events</span> in city </h2>
                        <p>lacinia viverra lectus. Fusce imperdiet ullamcorper metus eu fringilla.</p>
                    </div>
                    <div class="hom-event">
                        <div class="hom-eve-com hom-eve-lhs">
                            <div class="hom-eve-lhs-1 col-md-4">
                                <div class="eve-box">
                                    <div>
                                        <a href="event/chicago-bike-trails-for-a-long-ride.html">
                                            <img src="{{ asset('assets/images/events/19158pexels-punlob-564107.jpg') }}"
                                                alt="">
                                            <span>Mar <b> 11</b></span>
                                        </a>
                                    </div>
                                    <div>
                                        <h4>
                                            <a href="event/chicago-bike-trails-for-a-long-ride.html">Chicago bike trails
                                                for a long ride</a>
                                        </h4>
                                        <span class="addr">28800 Orchard Lake Road, Suite 180 Farmington
                                            Hills, U.S.A.</span>
                                        <span class="pho">643114512</span>
                                    </div>
                                    <div>
                                        <div class="auth">
                                            <img src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                            <b>Hosted by</b><br>
                                            <h4>Richflayer</h4>
                                            <a target="_blank" href="profile/richflayer.html" class="fclick"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hom-eve-lhs-1 col-md-4">
                                <div class="eve-box">
                                    <div>
                                        <a href="event/light-music-event-2022.html">
                                            <img src="{{ asset('assets/images/events/15315pexels-daniel-nouri-8448535.jpg') }}"
                                                alt="">
                                            <span>Dec <b> 31</b></span>
                                        </a>
                                    </div>
                                    <div>
                                        <h4>
                                            <a href="event/light-music-event-2022.html">Light Music Event 2022</a>
                                        </h4>
                                        <span class="addr">Address: 28800 Orchard Lake Road, Suite 180
                                            Farmington Hills, U.S.A.</span>
                                        <span class="pho">987654122</span>
                                    </div>
                                    <div>
                                        <div class="auth">
                                            <img src="{{ asset('assets/images/user/1.jpg') }}" alt="">
                                            <b>Hosted by</b><br>
                                            <h4>Richflayer</h4>
                                            <a target="_blank" href="profile/richflayer.html" class="fclick"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hom-eve-lhs-2 col-md-4">
                                <ul>
                                    <li>
                                        <div class="eve-box-list">
                                            <img src="{{ asset('assets/images/events/89194pexels-cottonbro-6203476.jpg') }}"
                                                alt="">
                                            <h4 title="Survivor Series (2022)">Survivor Series (2022)</h4>
                                            <p>Event details is simply dummy text of the printing</p>
                                            <span>Mar <b> 17</b></span>
                                            <a href="event/survivor-series--2022.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="eve-box-list">
                                            <img src="{{ asset('assets/images/events/77500pexels-patrick-case-3628912.jpg') }}"
                                                alt="">
                                            <h4 title="Cricket Tournament for Mens">Cricket Tournament for Mens</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing a</p>
                                            <span>Jun <b> 18</b></span>
                                            <a href="event/cricket-tournament-for-mens.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="eve-box-list">
                                            <img src="{{ asset('assets/images/events/6507pexels-mae-gregorio-1776151.jpg') }}"
                                                alt="">
                                            <h4 title="Top Annual  event in new york 2022">Top Annual event in new york
                                                2022</h4>
                                            <p>Event details is simply dummy text of the printing</p>
                                            <span>May <b> 12</b></span>
                                            <a href="event/top-annual--event-in-new-york-2022.html"
                                                class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="eve-box-list">
                                            <img src="{{ asset('assets/images/events/20523pexels-evg-culture-1126993.jpg') }}"
                                                alt="">
                                            <h4 title="Every New York Fashion Week events may 2022">Every New York
                                                Fashion Week events may 2022</h4>
                                            <p>Event details is simply dummy text of the printing</p>
                                            <span>May <b> 03</b></span>
                                            <a href="event/every-new-york-fashion-week-events-may-2022.html"
                                                class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="eve-box-list">
                                            <img src="{{ asset('assets/images/events/4321pexels-helena-lopes-697244.jpg') }}"
                                                alt="">
                                            <h4 title="places to hang out in new york">places to hang out in new york
                                            </h4>
                                            <p>Event details is simply dummy text of the printing</p>
                                            <span>May <b> 17</b></span>
                                            <a href="event/places-to-hang-out-in-new-york.html" class="fclick"></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="eve-box-list">
                                            <img src="{{ asset('assets/images/events/92225pexels-kindel-media-7148439.jpg') }}"
                                                alt="">
                                            <h4 title="beach party in new los angeles">beach party in new los angeles
                                            </h4>
                                            <p>Event details is simply dummy text of the printing</p>
                                            <span>Nov <b> 26</b></span>
                                            <a href="event/beach-party-in-new-los-angeles.html" class="fclick"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="how-wrks">
                        <div class="home-tit">
                            <h2><span>How It Works</span></h2>
                            <p>Explore some of the best tips from around the world from our<br>partners and
                                friends.lacinia viverra lectus.</p>
                        </div>
                        <div class="how-wrks-inn">
                            <ul>
                                <li>
                                    <div>
                                        <span>1</span>
                                        <img src="{{ asset('assets/images/icon/how1.png') }}" alt="">
                                        <h4>Create an account</h4>
                                        <p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from
                                            our partners and friends.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span>2</span>
                                        <img src="{{ asset('assets/images/icon/how2.png') }}" alt="">
                                        <h4>Add your business</h4>
                                        <p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from
                                            our partners and friends.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span>3</span>
                                        <img src="{{ asset('assets/images/icon/how3.png') }}" alt="">
                                        <h4>Get more leads</h4>
                                        <p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from
                                            our partners and friends.</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <span>4</span>
                                        <img src="{{ asset('assets/images/icon/how4.png') }}" alt="">
                                        <h4>Archive goles</h4>
                                        <p>Fusce imperdiet ullamcorper metus eu fringilla. from around the world from
                                            our partners and friends.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mob-app">
                        <div class="lhs">
                            <img src="{{ asset('assets/images/mobile.png') }}" alt="">
                        </div>
                        <div class="rhs">
                            <h2>Looking for the Best Service Provider? <span>Get the App!</span></h2>
                            <ul>
                                <li>HOM-APP-TITFind nearby listings</li>
                                <li>Easy service enquiry</li>
                                <li>Listing reviews and ratings</li>
                                <li>Manage your listing, enquiry and reviews</li>
                            </ul>
                            <span>We'll send you a link, to you below provided email id & open it on your smart phone to
                                download the app</span>
                            <a href="#"><img src="{{ asset('assets/images/gstore.png') }}" alt=""> </a>
                            <a href="#"><img src="{{ asset('assets/images/astore.png') }}" alt=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="hom-ads">
            <div class="container">
                <div class="row">
                    <div class="filt-com lhs-ads">
                        <div class="ads-box">
                            <a href="#">
                                <span>Ad</span>
                                <img src="{{ asset('assets/images/ads/ads2.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <div class="ani-quo">
        <div class="ani-q1">
            <h4>What you looking for?</h4>
            <p>We connect you to service experts.</p>
            <span>Get experts</span>
        </div>
        <div class="ani-q2">
            <img src="{{ asset('assets/images/quote.png') }}" alt="">
        </div>
    </div>
    <!-- END -->
    <!-- START -->
    <span class="btn-ser-need-ani">Help & Support</span>
    <div class="ani-quo-form">
        <i class="material-icons ani-req-clo">close</i>
        <div class="tit">
            <h3>What service do you need? <span>BizBook will help you</span></h3>
        </div>
        <div class="hom-col-req">
            <div id="home_slide_enq_success" class="log" style="display: none;">
                <p>Your Enquiry Is Submitted Successfully!!!</p>
            </div>
            <div id="home_slide_enq_fail" class="log" style="display: none;">
                <p>Oops!! Something Went Wrong Try Later!!!</p>
            </div>
            <div id="home_slide_enq_same" class="log" style="display: none;">
                <p>You cannot make enquiry on your own listing!!</p>
            </div>
            <form name="home_slide_enquiry_form" id="home_slide_enquiry_form" method="post" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="listing_id" value="0" placeholder="" required>
                <input type="hidden" class="form-control" name="listing_user_id" value="0" placeholder="" required>
                <input type="hidden" class="form-control" name="enquiry_sender_id" value="" placeholder="" required>
                <input type="hidden" class="form-control" name="enquiry_source" value="Website" placeholder="" required>
                <div class="form-group">
                    <input type="text" name="enquiry_name" value="" required="required" class="form-control"
                        placeholder="Enter name*">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email*" required="required" value=""
                        name="enquiry_email"
                        pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                        title="Invalid email address">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" value="" name="enquiry_mobile"
                        placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}"
                        title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required="">
                </div>
                <div class="form-group">
                    <select name="enquiry_category" id="enquiry_category" class="form-control chosen-select">
                        <option value="">Select Category</option>
                        <option value="19">Wedding halls</option>
                        <option value="17">Pet shop</option>
                        <option value="16">Technology</option>
                        <option value="15">Spa and Facial</option>
                        <option value="10">Real Estate</option>
                        <option value="8">Sports</option>
                        <option value="7">Education</option>
                        <option value="6">Electricals</option>
                        <option value="5">Automobiles</option>
                        <option value="3">Transportation</option>
                        <option value="2">Hospitals</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="enquiry_message"
                        placeholder="Enter your query or message"></textarea>
                </div>
                <input type="hidden" id="source">
                <button type="submit" id="home_slide_enquiry_submit" name="home_slide_enquiry_submit"
                    class="btn btn-primary">Submit Requirements </button>
            </form>
        </div>
    </div>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-12 bb-text">
                            <h4>List your business for FREE</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour.</p>
                            <a href="pricing-details.html">Add my business <i class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <section class=" wed-hom-footer">
        <div class="container">
            <div class="row foot-supp">
                <h2><span>Free support:</span> +01 5426 24400 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                    rn53themes@gmail.com</h2>
            </div>
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Top Category</h4>
                    <ul>
                        <li><a href="all-listing/technology.html">Technology</a></li>
                        <li><a href="all-listing/spa-and-facial.html">Spa and Facial</a></li>
                        <li><a href="all-listing/real-estate.html">Real Estate</a></li>
                        <li><a href="all-listing/sports.html">Sports</a></li>
                        <li><a href="all-listing/education.html">Education</a></li>
                        <li><a href="all-listing/electricals.html">Electricals</a></li>
                        <li><a href="all-listing/automobiles.html">Automobiles</a></li>
                        <li><a href="all-listing/transportation.html">Transportation</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Trending Category</h4>
                    <ul>
                        <li><a href="all-listing/hospitals.html">Hospitals</a></li>
                        <li><a href="all-listing/index.html"></a></li>
                        <li><a href="all-listing/automobiles.html">Automobiles</a></li>
                        <li><a href="all-listing/index.html"></a></li>
                        <li><a href="all-listing/real-estate.html">Real Estate</a></li>
                        <li><a href="all-listing/sports.html">Sports</a></li>
                        <li><a href="all-listing/education.html">Education</a></li>
                        <li><a href="all-listing/electricals.html">Electricals</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>HELP &amp; SUPPORT</h4>
                    <ul>
                        <li><a href="about.html">About us</a>
                        </li>
                        <li><a href="faq.html">FAQ</a>
                        </li>
                        <li><a href="feedback.html">Feedback</a>
                        </li>
                        <li><a href="contact-us.html">Contact us</a>
                        </li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-of-use.html">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
            <!-- POPULAR TAGS -->
            <div class="row wed-foot-link-pop">
                <div class="col-md-12">
                    <h4>Popular Tags</h4>
                    <ul>
                        <li><a href="http://localhost/bizbook/dashboard">Schools in NewYork</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Real estate in Illunois</a></li>
                        <li><a href="http://localhost/bizbook/dashboard1">Real estate in Chennai1</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Enents in Tailand</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Flat for rent in Melborn</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Schools in NewYork</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Real estate in Illunois</a></li>
                        <li><a href="http://localhost/bizbook/dashboard1">Real estate in Chennai1</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Enents in Tailand</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Flat for rent in Melborn</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Schools in NewYork</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Real estate in Illunois</a></li>
                        <li><a href="http://localhost/bizbook/dashboard1">Real estate in Chennai1</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Enents in Tailand</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Flat for rent in Melborn</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Schools in NewYork</a></li>
                        <li><a href="http://localhost/bizbook/dashboard">Real estate in Illunois</a></li>
                        <li><a href="http://localhost/bizbook/dashboard1">Real estate in Chennai1</a></li>
                    </ul>
                </div>
            </div>
            <!-- POPULAR TAGS -->
            <div class="row wed-foot-link-1">
                <div class="col-md-4">
                    <h4>Get In Touch</h4>
                    <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                    <p>Phone: <a href="tel:+01 5426 24400">+01 5426 24400</a></p>
                    <p>Email: <a href="mailto:rn53themes@gmail.com">rn53themes@gmail.com</a></p>
                </div>
                <div class="col-md-4 fot-app">
                    <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                    <ul>
                        <li><a href="#"><img src="{{ asset('assets/images/gstore.png') }}" alt=""></a>
                        </li>
                        <li><a href="#"><img src="{{ asset('assets/images/astore.png') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 fot-soc">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a target="_blank" href="#"><img src="{{ asset('assets/images/social/1.png') }}" alt=""></a>
                        </li>
                        <li><a target="_blank"
                                href="https://twitter.com/Google?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img
                                    src="images/social/2.png') }}" alt=""></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/Rn53themes-1956793534579530/"><img
                                    src="images/social/3.png') }}" alt=""></a></li>
                        <li><a target="_blank" href="#"><img src="{{ asset('assets/images/social/4.png') }}" alt=""></a>
                        </li>
                        <li><a target="_blank" href="#"><img src="{{ asset('assets/images/social/5.png') }}" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row foot-count">
                <ul>
                    <li><a target="_blank" href="http://www.domainname.au/">Australia</a></li>
                    <li><a target="_blank" href="http://www.domainname.uk/">UK</a></li>
                    <li><a target="_blank" href="http://www.domainname.usa/">USA</a></li>
                    <li><a target="_blank" href="http://www.domainname.in/">India</a></li>
                    <li><a target="_blank" href="http://www.domainname.ge/">Germany</a></li>
                    <li><a target="_blank" href="http://www.domainname.ch/">China</a></li>
                    <li><a target="_blank" href="http://www.domainname.fr/">france</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- START -->
    <section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © 2017-2020 <a href="http://rn53themes.net/" target="_blank">Rn53 Themes</a>. Proudly
                        powered by <a href="https://rn53themes.net/" target="_blank">Rn53Themes.net</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <div class="fqui-menu">
        <ul>
            <li><a href="index.html"><img src="{{ asset('assets/images/icon/home.png') }}">Home</a></li>
            <li><span class="mob-sear"><img src="{{ asset('assets/images/icon/search1.png') }}">Search</span>
            </li>
            <li><a href="all-category.html" class="act"><img
                        src="{{ asset('assets/images/icon/shop.png') }}">Services</a></li>
            <li><a href="service-experts/index.html"><img src="{{ asset('assets/images/icon/expert.png') }}">Service
                    Experts</a></li>
            <li><a href="jobs/index.html"><img src="jobs/images/icon/employee.png') }}">Jobs</a></li>
            <li><a href="events.html"><img src="{{ asset('assets/images/icon/calendar.png') }}">Events</a></li>
            <li><a href="all-products.html"><img src="{{ asset('assets/images/icon/cart.png') }}">Products</a></li>
            <li><a href="coupons.html"><img src="{{ asset('assets/images/icon/coupons.png') }}">Coupons</a></li>
            <li><a href="blog-posts.html"><img src="{{ asset('assets/images/icon/blog1.png') }}">Blogs</a></li>
            <li><a href="community.html"><img src="{{ asset('assets/images/icon/11.png') }}">Community</a></li>
            <li><span class="btn-ser-need-ani"><img src="{{ asset('assets/images/icon/how1.png') }}">Support</span>
            </li>
        </ul>
    </div>
    <!-- END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/select-opt.js') }}"></script>
    <script type="text/javascript">
        var webpage_full_link = 'index.html';
    </script>
    <script type="text/javascript">
        var login_url = 'login927c.html?src=https://bizbookdirectorytemplate.com/';
    </script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom_validation.js') }}"></script>
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 250) {
                $(".hom-top").addClass("dmact");
            } else {
                $(".hom-top").removeClass("dmact");
            }
        });

        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            }]

        });
        //test
        $('.multiple-items2').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            }]

        });

        $('.multiple-items1').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            }]

        });
    </script>
    </body>
    <!-- Mirrored from bizbookdirectorytemplate.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 18:32:32 GMT -->

    </html>
@endsection
