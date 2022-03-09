@extends('frontend.layouts.app')
@section('content')
    <!-- START -->
    <section>
        <div class="v3-list-ql">
            <div class="container">
                <div class="row">
                    <div class="v3-list-ql-inn">
                        <ul>
                            <li class="active"><a href="#ld-abo"><i class="material-icons">person</i> About </a>
                            </li>
                            <li><a href="#ld-ser"><i class="material-icons">business_center</i> Services </a>
                            </li>
                            <li><a href="#ld-gal"><i class="material-icons">photo</i> Gallery </a>
                            </li>
                            <li><a href="#ld-off"><i class="material-icons">style</i> Offers </a>
                            </li>
                            <li><a href="#ld-360"><i class="material-icons">camera</i> 360 View </a>
                            </li>
                            <li><a href="#ld-rev"><i class="material-icons">star_half</i> Write Review </a>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#claim"><i
                                        class="material-icons">store</i>Claim business </a>
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
        <div class="list-det-fix">
            <div class="container">
                <div class="row">
                    <div class="list-det-fix-inn">
                        <div class="list-fix-pro">
                            <img src="{{ asset('assets/images/listings/70463pexels-gustavo-fring-3985178.jpg') }}" alt="">
                        </div>
                        <div class="list-fix-tit">
                            <h3>{{ $result->ag_name }}</h3>
                            <p><b>Address:</b> No:2, 4th Avenue, Newyork, USA, Near to Airport</p>
                        </div>
                        <div class="list-fix-btn">
                            <span data-toggle="modal" data-target="#quote" class="pulse">Send an enquiry</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- START -->
    <section>
        <div class="list-bann">
            <img src="{{ asset('assets/images/listing-ban/14944pexels-gustavo-fring-3985159.jpg') }}" alt="">
        </div>
    </section>
    <!-- END -->

    <!-- START -->
    <!--LISTING DETAILS-->
    <section class=" pg-list-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pg-list-1-pro">
                        <img src="{{ asset('assets/images/listings/70463pexels-gustavo-fring-3985178.jpg') }}" alt="">
                        <span class="stat"><i class="material-icons">verified_user</i></span>
                    </div>
                    <div class="pg-list-1-left">
                        <h3>{{ $result->ag_name }}</h3>
                        <div class="list-rat-all">
                            <span>No Reviews Yet</span>
                        </div>

                        <p><b>Address:</b> No:2, 4th Avenue, Newyork, USA, Near to Airport</p>
                        <div class="list-number pag-p1-phone">
                            <ul>
                                <a href="tel:876587675">
                                    <li class="ic-php">876587675 </li>
                                </a>
                                <a href="mailto:johnitsmes@gmail.com">
                                    <li class="ic-mai">johnitsmes@gmail.com </li>
                                </a>
                                <a target="_blank" href="http://www.greys .com/">
                                    <li class="ic-web">www.Greys .com</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="list-ban-btn">
                        <ul>
                            <li>
                                <a href="tel:876587675" class="cta cta-call">Call Now</a>
                            </li>
                            <li><span class="cta cta-like ldelik Animatedheartfunc401 " data-for="0" data-section="1"
                                    data-num="328" data-item="" data-id='401'>
                                    <b class="like-content401">0</b> LIKES</span>
                            </li>
                            <li>
                                <a href="https://wa.me/987654621" class="cta cta-rev">WhatsApp</a>
                            </li>
                            <li>
                                <span data-toggle="modal" data-target="#quote" class="pulse cta cta-get">Get
                                    quote</span>
                            </li>

                            <li><span class="share-new-top" data-toggle="modal" data-target="#sharepop"><i
                                        class="material-icons">share</i></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class=" list-pg-bg">
        <div class="container">
            <div class="row">
                <div class="com-padd">
                    <div id="ld-abo" class="list-pg-lt list-page-com-p">

                        <!--LISTING DETAILS: LEFT PART 1-->
                        <div class="pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti">
                                <h3>
                                    <span>About</span> Greys Sloan Memorial Hospital
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp list-pg-inn-abo">
                                <p>{{ $result->desc }}</p>
                            </div>
                        </div>

                        <!--END LISTING DETAILS: LEFT PART 1-->
                        <!--LISTING DETAILS: LEFT PART 2-->
                        <div id="ld-ser" class="pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti">
                                <h3>
                                    <span>Services</span> Offered
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div class="row pg-list-ser">
                                    <ul>
                                        @foreach ($result->services as $item)
                                            <li class="col-md-3">
                                                <div class="pg-list-ser-p1"><img
                                                        src="{{ asset('assets/images/services/71960pexels-photo-3259629.jpg') }}"
                                                        alt="" />
                                                </div>
                                                <div class="pg-list-ser-p2">
                                                    <h4>{{ $item->title }}</h4>
                                                </div>
                                            </li>
                                        @endforeach



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 2-->

                        <!--LISTING DETAILS: LEFT PART 3-->
                        <div id="ld-gal" class="pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti">
                                <h3>
                                    <span>photo</span> Gallery
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div id="demo" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1" class=""></li>
                                        <li data-target="#demo" data-slide-to="2" class=""></li>
                                        <li data-target="#demo" data-slide-to="3" class=""></li>
                                        <li data-target="#demo" data-slide-to="4" class=""></li>
                                        <li data-target="#demo" data-slide-to="5" class=""></li>
                                    </ul>

                                    <!-- The slideshow -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/images/listings/32983pexels-photo-3259629.jpg') }}"
                                                alt="32983pexels-photo-3259629.jpeg">
                                        </div>
                                        <div class="carousel-item ">
                                            <img src="{{ asset('assets/images/listings/72548pexels-photo-2324837.jpg') }}"
                                                alt="72548pexels-photo-2324837.jpeg">
                                        </div>
                                        <div class="carousel-item ">
                                            <img src="{{ asset('assets/images/listings/68415pexels-photo-1170979.jpg') }}"
                                                alt="68415pexels-photo-1170979.jpeg">
                                        </div>
                                        <div class="carousel-item ">
                                            <img src="{{ asset('assets/images/listings/19109pexels-photo-263337.jpg') }}"
                                                alt="19109pexels-photo-263337.jpeg">
                                        </div>
                                        <div class="carousel-item viki">
                                            <iframe width="1031" height="580"
                                                src="https://www.youtube.com/embed/m8wXm-kDjJE" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="carousel-item viki">
                                            <iframe width="1031" height="580"
                                                src="https://www.youtube.com/embed/93_4_0Dyys8" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 3-->
                        <!--LISTING DETAILS: LEFT PART 4-->
                        <div id="ld-off" class="pglist-bg pglist-off-last pglist-p-com">
                            <div class="pglist-p-com-ti">
                                <h3>
                                    <span>Special</span> Offers
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div class="home-list-pop">
                                    <!--LISTINGS IMAGE-->
                                    <div class="col-md-3"><img
                                            src="{{ asset('assets/images/services/28972pexels-photo-263402.jpg') }}"
                                            alt=""></div>
                                    <!--LISTINGS: CONTENT-->
                                    <div class="col-md-9 home-list-pop-desc inn-list-pop-desc list-room-deta"><a href="#!">
                                            <h3>50% Offer today only</h3>
                                        </a>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout.</p>
                                        <span class="home-list-pop-rat list-rom-pric">$99</span>
                                        <div class="list-enqu-btn">
                                            <ul>
                                                <li>
                                                    <a target="_blank"
                                                        href="https://themeforest.net/item/bizbook-directory-listings-template/25391222?s_rank=1">view
                                                        more</a>
                                                </li>
                                                <li><a href="#!" data-toggle="modal" data-target="#quote">Send
                                                        enquiry</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--END 360 DEGREE MAP: LEFT PART 8-->
                        <div class="pglist-bg pglist-p-com" id="ld-360">
                            <div class="pglist-p-com-ti">
                                <h3>
                                    <span>360 </span> Degree View
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp list-360">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!4v1572752787064!6m8!1m7!1sCAoSLEFGMVFpcE5FUjQ5UzRtckNvYVBldF9XbG5aOWExQnZsVnNaRy1JbTBEZHZV!2m2!1d40.7043249!2d-73.9903695!3f344.45792!4f0!5f0.7820865974627469"
                                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>

                        <div class="list-sh">
                            <span class="share-new" data-toggle="modal" data-target="#sharepop"><i
                                    class="material-icons">share</i> Share now</span>
                        </div>

                        <!--END 360 DEGREE MAP: LEFT PART 8-->


                        <!--LISTING DETAILS: LEFT PART 6-->
                        <span id="Review_Disable">Login And Write Your Review</span>

                        <!--LISTING DETAILS: LEFT PART 6-->
                        <div class="pglist-bg pglist-p-com" style="                                         pointer-events:none; opacity: .5
                                                                                                             " id="ld-rev">
                            <div class="pglist-p-com-ti">
                                <h3>
                                    <span>Write Your</span> Reviews
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div class="list-pg-write-rev">
                                    <form class="col">
                                        <input type="hidden" class="form-control" name="listing_id" value="401">
                                        <input type="hidden" class="form-control" name="listing_user_id" value="328">
                                        <input name="review_user_id" value="" type="hidden">
                                        <p>Writing great reviews may help others discover the places that are just apt
                                            for them. Here are a few tips to write a good review:</p>
                                        <div id="review_success" style="text-align:center;display: none;color: green;">
                                            Thanks for your Review !! Your Review Is Successful!! </div>
                                        <div id="review_fail" style="text-align:center;display: none;color: red;">Oops!!
                                            Something Went Wrong Try Later!!!</div>
                                        <div class="row">
                                            <div>
                                                <fieldset class="rating">
                                                    <input type="radio" id="star5" name="price_rating"
                                                        class="price_rating" value="5" />
                                                    <label class="full" for="star5" title="Awesome"></label>
                                                    <input type="radio" id="star4" name="price_rating"
                                                        class="price_rating" value="4" />
                                                    <label class="full" for="star4" title="Excellent"></label>
                                                    <input type="radio" checked="checked" id="star3" class="price_rating"
                                                        name="price_rating" value="3" />
                                                    <label class="full" for="star3" title="Good"></label>
                                                    <input type="radio" id="star2" name="price_rating"
                                                        class="price_rating" value="2" />
                                                    <label class="full" for="star2" title="Average"></label>
                                                    <input type="radio" id="star1" name="price_rating"
                                                        class="price_rating" value="1" />
                                                    <label class="full" for="star1" title="Poor"></label>
                                                    <input type="radio" id="star0" name="price_rating"
                                                        class="price_rating" value="0" />
                                                    <label class="" for="star0" title="Very Poor"></label>
                                                </fieldset>
                                                <div id="star-value">3 Star</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="review_name" disabled name="review_name" type="text" value="">
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="review_mobile" disabled name="review_mobile" type="text"
                                                    onkeypress="return isNumber(event)" placeholder="Mobile number"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="review_email" disabled name="review_email" type="email"
                                                    placeholder="Email Id" value="">
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="review_city" disabled name="review_city" placeholder="City"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="review_message" disabled placeholder="Write review"
                                                    name="review_message"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" id="" name="" disabled="disabled" readonly="readonly"
                                                    value="You can't review this listing as per your plan !!">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 6-->
                        <!--END LISTING DETAILS: LEFT PART 6-->


                        <!--LISTING DETAILS: LEFT PART 5-->
                        <div class="spa-first-review">Be the First One To Review This Listing!!!</div>

                        <!--END LISTING DETAILS: LEFT PART 5-->

                        <!--ADS-->
                        <div class="ban-ati-com ads-det-page">
                            <a href="https://themeforest.net/item/bizbook-directory-listings-template/25391222"><span>Ad</span><img
                                    src="../assets/images/ads/4414ads2.png"></a>
                        </div>
                        <!--ADS-->

                        <!--RELATED PREMIUM LISTINGS-->
                        <div class="list-det-rel-pre">
                            <h2>Related listings:</h2>
                            <ul>
                                <li>
                                    <div class="land-pack-grid">
                                        <div class="land-pack-grid-img">
                                            <img src="{{ asset('assets/images/listings/78887pexels-andrea-piacquadio-3884090.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="land-pack-grid-text">
                                            <h4>Handys Health Hospital</h4>
                                            <div class="list-rat-all">
                                                <b></b>
                                            </div>
                                        </div>
                                        <a target="_blank" href="handys-health-hospital.html"
                                            class="land-pack-grid-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="land-pack-grid">
                                        <div class="land-pack-grid-img">
                                            <img src="{{ asset('assets/images/listings/85462pexels-klaus-nielsen-6303590.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="land-pack-grid-text">
                                            <h4>Globals Health Hospitals.</h4>
                                            <div class="list-rat-all">
                                                <b></b>
                                            </div>
                                        </div>
                                        <a target="_blank" href="globals-health-hospitals.html"
                                            class="land-pack-grid-btn"></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="land-pack-grid">
                                        <div class="land-pack-grid-img">
                                            <img src="{{ asset('assets/images/listings/74234pexels-thirdman-5327584.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="land-pack-grid-text">
                                            <h4>My Healths Medical Hospital.</h4>
                                            <div class="list-rat-all">
                                                <b></b>
                                            </div>
                                        </div>
                                        <a target="_blank" href="my-healths-medical-hospital.html"
                                            class="land-pack-grid-btn"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--RELATED PREMIUM LISTINGS-->

                    </div>
                    <div class="list-pg-rt">

                        <!--LISTING DETAILS: LEFT PART 9-->
                        <div class="list-rhs-form pglist-bg pglist-p-com">

                            <div class="quote-pop">
                                <h3><span>Get</span> Quote </h3>
                                <div id="detail_enq_success" class="log" style="display: none;">
                                    <p>Your Enquiry Is Submitted Successfully!!!</p>
                                </div>
                                <div id="detail_enq_same" class="log" style="display: none;">
                                    <p>You cannot make enquiry on your own listing!!</p>
                                </div>
                                <div id="detail_enq_fail" class="log" style="display: none;">
                                    <p>Oops!! Something Went Wrong Try Later!!!</p>
                                </div>
                                <form method="post" name="detail_enquiry_form" id="detail_enquiry_form">
                                    <input type="hidden" class="form-control" name="listing_id" value="401"
                                        placeholder="" required>
                                    <input type="hidden" class="form-control" name="listing_user_id" value="328"
                                        placeholder="" required>
                                    <input type="hidden" class="form-control" name="enquiry_sender_id" value=""
                                        placeholder="" required>
                                    <input type="hidden" class="form-control" name="enquiry_source" value="Website"
                                        placeholder="" required>
                                    <div class="form-group ic-user">
                                        <input type="text" name="enquiry_name" value="" required="required"
                                            class="form-control" placeholder="Enter name*">
                                    </div>
                                    <div class="form-group ic-eml">
                                        <input type="email" class="form-control" placeholder="Enter email*"
                                            required="required" value="" name="enquiry_email"
                                            pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                            title="Invalid email address">
                                    </div>
                                    <div class="form-group ic-pho">
                                        <input type="text" class="form-control" value="" name="enquiry_mobile"
                                            placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}"
                                            title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="enquiry_message"
                                            placeholder="Enter your query or message"></textarea>
                                    </div>
                                    <input type="hidden" id="source">
                                    <button disabled="disabled" type="submit" id="detail_enquiry_submit"
                                        name="enquiry_submit" class="btn btn-primary">Login to send enquiry </button>
                                </form>
                            </div>

                        </div>
                        <!--END LISTING DETAILS: LEFT PART 9-->


                        <!--LISTING DETAILS: LEFT PART 7-->
                        <div class="lide-guar pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                <h3>
                                    <span>Claim</span> Listing
                                </h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div class="list-pg-guar">
                                    <ul>
                                        <li>
                                            <div class="list-pg-guar-img"><img
                                                    src="{{ asset('assets/images/icon/g2.png') }}" alt="" />
                                            </div>
                                            <h4>Claim this business</h4>
                                            <span data-toggle="modal" data-target="#claim" class="clim-edit">Suggest
                                                an edit</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 7-->
                        <!--LISTING DETAILS: LEFT PART 8-->
                        <div class="pglist-p3 pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                <h3><span>Our</span> Location </h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div class="list-pg-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1572752768106!5m2!1sen!2sin"
                                        width="600" height="450" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 8-->
                        <!--LISTING DETAILS: LEFT PART 9-->
                        <div class="pglist-p3 pglist-bg pglist-p-com">
                            <div class="pglist-p-com-ti pglist-p-com-ti-right">
                                <h3><span>Company</span> Info</h3>
                            </div>
                            <div class="list-pg-inn-sp">
                                <div class="list-pg-oth-info">
                                    <ul>
                                        <li>Experience <span>20 years</span></li>
                                        <li>Open time <span>8:00 AM</span></li>
                                        <li>Close Time <span>9:00 PM</span></li>
                                        <li>Smoking area <span>yes</span></li>
                                        <li>Parking <span>Yes</span></li>
                                        <li>Since <span>1980</span></li>
                                        <li>Online booking <span>Yes</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 9-->

                        <!--LISTING DETAILS: LEFT PART 7-->
                        <div class="ld-rhs-pro pglist-bg pglist-p-com">
                            <div class="lis-pro-badg">
                                <div>
                                    <span class="rat" alt="User rating">4.2</span>
                                    <span class="by">Created by</span>
                                    <img src="{{ asset('assets/images/user/970813.jpg') }}" alt="">
                                    <h4>John Smith</h4>
                                    <p>Member since Nov 2021</p>
                                </div>
                                <a href="../profile/john-smith.html" class="fclick" target="_blank">&nbsp;</a>
                            </div>
                        </div>
                        <!--END LISTING DETAILS: LEFT PART 7-->

                        <!--ADS-->
                        <div class="ban-ati-com ads-det-page">
                            <a href="#"><span>Ad</span><img
                                    src="{{ asset('assets/images/ads/59040boat-728x90.html') }}"></a>
                        </div>
                        <!--ADS-->
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var x = $(".list-pg-bg").offset().top;
            if (scroll >= x) {
                $(".list-det-fix").addClass("list-det-fix-act");
            } else {
                $(".list-det-fix").removeClass("list-det-fix-act");
            }
        });

        function scrollNav() {
            $('.v3-list-ql-inn a').click(function() {
                //Toggle Class
                $(".active-list").removeClass("active-list");
                $(this).closest('li').addClass("active-list");
                var theClass = $(this).attr("class");
                $('.' + theClass).parent('li').addClass('active-list');
                //Animate
                $('html, body').stop().animate({
                    scrollTop: $($(this).attr('href')).offset().top - 130
                }, 400);
                return false;
            });
            $('.scrollTop a').scrollTop();
        }
        scrollNav();
    </script>
    <script>
        $(document).ready(function() {
            $('input[name="price_rating"]').change(function() {
                if ($('#star0').prop('checked')) {
                    $("#star-value").html('0 Star');
                } else if ($('#star1').prop('checked')) {
                    $("#star-value").html('1 Star');
                } else if ($('#star2').prop('checked')) {
                    $("#star-value").html('2 Star');
                } else if ($('#star3').prop('checked')) {
                    $("#star-value").html('3 Star');
                } else if ($('#star4').prop('checked')) {
                    $("#star-value").html('4 Star');
                } else if ($('#star5').prop('checked')) {
                    $("#star-value").html('5 Star');
                }
            });
        });
    </script>
@endsection
