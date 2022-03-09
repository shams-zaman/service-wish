@extends('frontend.layouts.app')
@section('content')
    <!-- END -->
    <!-- START -->
    <section>
        <div class="all-listing all-listing-pg">
            <!--FILTER ON MOBILE VIEW-->
            <div class="fil-mob fil-mob-act">
                <h4>Listing filters <i class="material-icons">filter_list</i></h4>
            </div>
            <div class="all-list-bre">
                <div class="container sec-all-list-bre">
                    <div class="row">
                        <h1>Hospitals</h1>
                        <ul>
                            <li><a href="../index.html">Home</a></li>
                            <li>
                                <a href="../all-listing.html">All Category</a>
                            </li>
                            <li>
                                <a href="hospitals.html">Hospitals</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 fil-mob-view">
                        <div class="all-filt">
                            <span class="fil-mob-clo"><i class="material-icons">close</i></span>
                            <!--START-->
                            <div class="filt-alist-near">
                                <div class="tit">
                                    <h4>Top Service Providers</h4>
                                </div>

                            </div>
                            <!--END-->
                            <!--START-->
                            <div class="filt-com lhs-search">
                                <form>
                                    <ul>
                                        <li>
                                            <input type="text" id="search" placeholder="Search the service">
                                        </li>
                                        <li>
                                            <input type="submit" value="">
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!--END-->
                            <!--START-->
                            <div class="filt-com lhs-cate">


                            </div>
                            <!--END-->
                            <!--START-->
                            <div class="sub_cat_section filt-com lhs-sub">
                                <h4>Sub category</h4>
                                <ul>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" class="sub_cat_check" name="sub_cat_check" value="19"
                                                id="Community Hospitals" />
                                            <label for="Community Hospitals">Community Hospitals</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" class="sub_cat_check" name="sub_cat_check" value="18"
                                                id="Clinics" />
                                            <label for="Clinics">Clinics</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" class="sub_cat_check" name="sub_cat_check" value="17"
                                                id="Child Hospitals" />
                                            <label for="Child Hospitals">Child Hospitals</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--END-->
                            <!--START-->
                            <div class="filt-com lhs-featu">
                                <h4>Features</h4>
                                <ul>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="trusted"
                                                class="feature_check" id="trusted" />
                                            <label for="trusted">Trusted services provider</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="premium"
                                                class="feature_check" id="premium" />
                                            <label for="premium">Premium services</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="verified"
                                                class="feature_check" id="verified" />
                                            <label for="verified">Verified services</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="trending"
                                                class="feature_check" id="trending" />
                                            <label for="trending">Trending services</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="offers"
                                                class="feature_check" id="offers" />
                                            <label for="offers">Offers and discounts</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="latest"
                                                class="feature_check" id="latest" />
                                            <label for="latest">Latest updated</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="chbox">
                                            <input type="checkbox" name="feature_check" value="likes" class="feature_check"
                                                id="likes" />
                                            <label for="likes">Most likes</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--END-->
                            <!--START-->
                            <div class="filt-com lhs-cate">
                                <h4>Cities</h4>
                                <div class="dropdown">
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
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <!--START-->
                            <div class="filt-com lhs-rati">
                                <h4>Ratings</h4>
                                <ul>
                                    <li>
                                        <div class="rbbox">
                                            <input type="radio" value="5" name="rating_check" class="rating_check"
                                                id="rb1" />
                                            <label for="rb1">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rbbox">
                                            <input type="radio" value="4" name="rating_check" class="rating_check"
                                                id="rb2" />
                                            <label for="rb2">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rbbox">
                                            <input type="radio" value="3" name="rating_check" class="rating_check"
                                                id="rb3" />
                                            <label for="rb3">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rbbox">
                                            <input type="radio" value="2" name="rating_check" class="rating_check"
                                                id="rb4" />
                                            <label for="rb4">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rbbox">
                                            <input type="radio" value="1" name="rating_check" class="rating_check"
                                                id="rb5" />
                                            <label for="rb5">
                                                <i class="material-icons">star</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                                <i class="material-icons">star_border</i>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--END-->
                            <!--START-->
                            <div class="filt-com lhs-ads">
                                <ul>
                                    <li>
                                        <div class="ads-box">
                                            <a href="#">
                                                <span>Ad</span>
                                                <img src="{{ asset('assets/images/ads/ads1.jpg') }}" alt="">
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--END-->
                            <div class="all-list-filt-form">
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
                                    <form name="home_slide_enquiry_form" id="home_slide_enquiry_form" method="post"
                                        enctype="multipart/form-data">
                                        <input type="hidden" class="form-control" name="listing_id" value="0"
                                            placeholder="" required>
                                        <input type="hidden" class="form-control" name="listing_user_id" value="0"
                                            placeholder="" required>
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
                                                title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                                required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="enquiry_message"
                                                placeholder="Enter your query or message"></textarea>
                                        </div>
                                        <input type="hidden" id="source">
                                        <button type="submit" id="home_slide_enquiry_submit"
                                            name="home_slide_enquiry_submit" class="btn btn-primary">Submit
                                            Requirements </button>
                                    </form>
                                </div>
                            </div>
                            <!-- END -->
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="f2">
                            <div class="vfilter">
                                <i class="material-icons ic1 " title="Grid view">apps</i>
                                <i class="material-icons ic2 act" title="List view">format_list_bulleted</i>
                                <i class="material-icons ic3" title="Map view">location_on</i>
                            </div>
                        </div>
                        <!-- LISTING INN FILTER -->
                        <div class="list-filt-v2">
                            <ul>
                                <li>
                                    <div class="chbox">
                                        <input type="checkbox" name="lfv2-all" class="lfv2-all" value="1"
                                            id="lfv2-all" checked="checked" />
                                        <label for="lfv2-all">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="chbox">
                                        <input type="checkbox" name="lfv2-pop" class="lfv2-pop" id="lfv2-pop" />
                                        <label for="lfv2-pop">Popular</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="chbox">
                                        <input type="checkbox" name="lfv2-op" class="lfv2-op" id="lfv2-op" />
                                        <label for="lfv2-op">Open</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="chbox">
                                        <input type="checkbox" name="lfv2-tru" class="lfv2-tru" id="lfv2-tru" />
                                        <label for="lfv2-tru">Verified</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="chbox">
                                        <input type="checkbox" name="lfv2-near" class="lfv2-near" id="lfv2-near" />
                                        <label for="lfv2-near">Nearby</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="chbox">
                                        <input type="checkbox" name="lfv2-off" class="lfv2-off" id="lfv2-off" />
                                        <label for="lfv2-off">Offers</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- END LISTING INN FILTER -->
                        <!--ADS-->
                        <div class="ban-ati-com ads-all-list">
                            <a href="#"><span>Ad</span><img
                                    src="{{ asset('assets/images/ads/59040boat-728x90.html') }}"></a>
                        </div>
                        <!--ADS-->
                        <!-- Loader Image -->
                        <div id="loadingmessage" style="display:none">
                            <div id="loadingmessage1">&nbsp;</div>
                        </div>
                        <!-- Loader Image -->
                        <div class="all-list-sh all-listing-total">
                            <ul class="all-list-wrapper">
                                @foreach ($result as $item)
                                    <li class="all-list-item">
                                        <div class="eve-box">
                                            <!---LISTING IMAGE--->
                                            <div class="al-img">
                                                <span class="open-stat">Open</span>
                                                <a href="../listing/greys-sloan-memorial-hospital.html">
                                                    <img
                                                        src="{{ asset('assets/images/listings/70463pexels-gustavo-fring-3985178.jpg') }}">
                                                </a>
                                            </div>
                                            <!---END LISTING IMAGE--->
                                            <!---LISTING NAME--->
                                            <div class="list-con">
                                                <h4>
                                                    <a
                                                        href="../listing/greys-sloan-memorial-hospital.html">{{ $item->ag_name }}</a>
                                                    <i class="li-veri"><img
                                                            src="{{ asset('assets/images/icon/svg/verified.png') }}"
                                                            title="Verified"></i>
                                                </h4>
                                                <div class="list-rat-all">
                                                    <span>No Reviews Yet</span>
                                                </div>
                                                <span class="addr">No:2, 4th Avenue, Newyork, USA, Near to
                                                    Airport</span>
                                                <span class="pho">876587675 </span>
                                                <span class="mail">johnitsmes@gmail.com </span>
                                                <div class="links">
                                                    <a
                                                        href="../login2aeb.html?src=https://bizbookdirectorytemplate.com/all-listing/hospitals?list=yes">Get
                                                        quote</a>
                                                    <a href="../listing/greys-sloan-memorial-hospital.html">view more</a>
                                                    <a href="Tel:876587675 ">Call Now</a>
                                                    <a href="https://wa.me/987654621" class="what"
                                                        target="_blank">WhatsApp</a>
                                                </div>
                                            </div>
                                            <!---END LISTING NAME--->
                                            <!---SAVE--->
                                            <span class="enq-sav" data-toggle="tooltip"
                                                title="Click to like this listing">
                                                <i class="l-like Animatedheartfunc401 " data-for="0" data-section="1"
                                                    data-num="328" data-item="" data-id='401'><img
                                                        src="{{ asset('assets/images/icon/svg/like.svg') }}"></i></span>
                                            <!---END SAVE--->
                                        </div>
                                    </li>
                                @endforeach
                                <!--  Get Quote Pop up box starts  -->
                                {{-- <section>
                                    <div class="pop-ups pop-quo">
                                        <!-- The Modal -->
                                        <div class="modal fade" id="quote394">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="log-bor">&nbsp;</div>
                                                    <span class="udb-inst">Send enquiry</span>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <!-- Modal Header -->
                                                    <div class="quote-pop">
                                                        <h4>Get quote</h4>
                                                        <div id="enq_success" class="log"
                                                            style="display: none;">
                                                            <p>Your Enquiry Is Submitted Successfully!!!</p>
                                                        </div>
                                                        <div id="enq_fail" class="log" style="display: none;">
                                                            <p>Oops!! Something Went Wrong Try Later!!!</p>
                                                        </div>
                                                        <div id="enq_same" class="log" style="display: none;">
                                                            <p>You cannot make enquiry on your own listing!!</p>
                                                        </div>
                                                        <form method="post" name="all_enquiry_form" id="all_enquiry_form">
                                                            <input type="hidden" class="form-control" name="listing_id"
                                                                value="394" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="listing_user_id" value="328" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_sender_id" value="" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_source" value="Website" placeholder=""
                                                                required>
                                                            <div class="form-group">
                                                                <input type="text" readonly name="enquiry_name" value=""
                                                                    required="required" class="form-control"
                                                                    placeholder="Enter name*">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Enter email*" readonly="readonly" value=""
                                                                    name="enquiry_email"
                                                                    pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                                                    title="Invalid email address" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    readonly="readonly" value="" name="enquiry_mobile"
                                                                    placeholder="Enter mobile number *"
                                                                    pattern="[7-9]{1}[0-9]{9}"
                                                                    title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3"
                                                                    name="enquiry_message"
                                                                    placeholder="Enter your query or message"></textarea>
                                                            </div>
                                                            <input type="hidden" id="source">
                                                            <button type="submit" id="all_enquiry_submit"
                                                                name="enquiry_submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}
                                <!--  Get Quote Pop up box ends  -->
                            </ul>
                            <!--ADS-->
                            <div class="ban-ati-com ads-all-list">
                                <a href="https://themeforest.net/item/bizbook-directory-listings-template/25391222"><span>Ad</span><img
                                        src="{{ asset('assets/images/ads/32207ads.png') }}"></a>
                            </div>
                            <!--ADS-->
                            <div id="all-list-pagination-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="list-map">
            <span id="map-error-box" class="map-error-box" style="display:none;">!!! Oops No Listing with the Selected
                Category</span>
            <div class="list-map-resu map-view" id="map-view"></div>
            <div class="list-map-filt">
                <div class="map-fi-com map-fi-view">
                    <div class="vfilter">
                        <i class="material-icons ic-map-2" title="List view">format_list_bulleted</i>
                        <i class="material-icons ic-map-3 act" title="Map view">layers</i>
                    </div>
                </div>
                <div class="map-fi-com map-fi-cate">
                    <select onChange="SubcategoryFilter1(this.value);" name="cat_check" id="cat_check1"
                        class="cat_check chosen-select ">
                        <option value="">Select Category</option>
                        <option value="automobiles">Automobiles</option>
                        <option value="wedding-halls">Wedding halls</option>
                        <option value="spa-and-facial">Spa and Facial</option>
                        <option value="pet-shop">Pet shop</option>
                        <option value="technology">Technology</option>
                        <option value="real-estate">Real Estate</option>
                        <option value="sports">Sports</option>
                        <option selected value="hospitals">Hospitals</option>
                        <option value="education">Education</option>
                        <option value="transportation">Transportation</option>
                        <option value="electricals">Electricals</option>
                    </select>
                </div>
                <div class="sub_cat_section1 map-fi-com map-fi-subcate">
                    <select name="sub_cat_check" id="sub_cat_check1" class="sub_cat_check">
                        <option value="">Select Sub Category</option>
                        <option value="19">
                            Community Hospitals
                        </option>
                        <option value="18">
                            Clinics
                        </option>
                        <option value="17">
                            Child Hospitals
                        </option>
                    </select>
                </div>
                <div class="map-fi-com map-fi-fea">
                    <select id="city_check1" name="city_check">
                        <option value="">Select City</option>
                        <option value="48024">New York City</option>
                        <option value="48024">New York City</option>
                        <option value="48025">Los Angeles</option>
                        <option value="48028">Phoenix</option>
                        <option value="48029">Philadelphia</option>
                        <option value="48030">San Antonio</option>
                        <option value="48031">San Diego</option>
                        <option value="48032">Dallas</option>
                        <option value="48024">New York City</option>
                        <option value="48028">Phoenix</option>
                        <option value="48031">San Diego</option>
                        <option value="48025">Los Angeles</option>
                        <option value="48025">Los Angeles</option>
                        <option value="48026">Chicago</option>
                        <option value="48027">Houston</option>
                        <option value="48028">Phoenix</option>
                        <option value="48025">Los Angeles</option>
                        <option value="48026">Chicago</option>
                        <option value="48027">Houston</option>
                        <option value="48028">Phoenix</option>
                        <option value="48029">Philadelphia</option>
                        <option value="48030">San Antonio</option>
                        <option value="48031">San Diego</option>
                        <option value="48032">Dallas</option>
                        <option value="48025">Los Angeles</option>
                        <option value="48028">Phoenix</option>
                        <option value="48026">Chicago</option>
                        <option value="48027">Houston</option>
                        <option value="48028">Phoenix</option>
                    </select>
                    <!--END-->
                </div>
                <div class="map-fi-com map-fi-fea">
                    <select id="feature_check1" name="feature_check">
                        <option value="">Select Feature</option>
                        <option value="trusted">Trusted services provider</option>
                        <option value="premium">Premium services</option>
                        <option value="verified">Verified services</option>
                        <option value="trending">Trending services</option>
                        <option value="offers">Offers and discounts</option>
                        <option value="latest">Latest updated</option>
                        <option value="likes">Most likes</option>
                    </select>
                </div>
            </div>
            <script>
                var customLabel = {
                    restaurant: {
                        label: 'R'
                    },
                    bar: {
                        label: 'B'
                    }
                };


                function initMap() {

                    var map = new google.maps.Map(document.getElementById('map-view'), {
                        center: new google.maps.LatLng(NAN, NAN),
                        zoom: 10
                    });
                    var infoWindow = new google.maps.InfoWindow;

                    // Change this depending on the name of your PHP or XML file
                    downloadUrl('../map-view-process.php', function(data) {

                        //        downloadUrl('https://storage.googleapis.com/mapsdevsite/json/mapmarkers2.xml', function(data) {

                        var xml = data.responseXML;

                        if (xml == null) {
                            document.getElementById("map-error-box").style.display = "block";
                        }

                        var markers = xml.documentElement.getElementsByTagName('marker');

                        Array.prototype.forEach.call(markers, function(markerElem) {

                            var id = markerElem.getAttribute('id');
                            var code = markerElem.getAttribute('code');
                            var name = markerElem.getAttribute('name');
                            var slug = markerElem.getAttribute('slug');
                            var address = markerElem.getAttribute('address');
                            var type = markerElem.getAttribute('type');
                            var image = markerElem.getAttribute('image');

                            if (image == null) {
                                image = "hot4.html";
                            } else {
                                image = image;
                            }
                            var point = new google.maps.LatLng(
                                parseFloat(markerElem.getAttribute('lat')),
                                parseFloat(markerElem.getAttribute('lng')));

                            var infowincontent = document.createElement('div');

                            var link = document.createElement('a'); // create the link

                            var url_name = slug.replace(/\s+/g, "-"); //replace the space with hypen on listing name

                            var href_url = 'listing/' + url_name; //new updated URL for listing details

                            link.setAttribute('href', href_url); // set link path


                            //Photo elements starts
                            var elem = document.createElement("img");

                            elem.setAttribute("src", "images/listings/" + image);
                            elem.setAttribute("height", "100");
                            elem.setAttribute("width", "100");
                            elem.setAttribute("alt", name);
                            link.appendChild(elem); // append to link
                            infowincontent.appendChild(link);
                            infowincontent.appendChild(document.createElement('br'));
                            //Photo elements ends


                            //Name elements starts
                            var strong = document.createElement('strong');
                            strong.textContent = name;
                            //                infowincontent.appendChild(strong);
                            link.appendChild(strong); // append to link
                            infowincontent.appendChild(link);
                            infowincontent.appendChild(document.createElement('br'));
                            //Name elements ends

                            //Address elements starts
                            var text = document.createElement('text');
                            text.textContent = address;
                            infowincontent.appendChild(text);
                            //Address elements ends

                            var icon = customLabel[type] || {};
                            var marker = new google.maps.Marker({
                                map: map,
                                position: point,
                                label: icon.label
                            });
                            marker.addListener('click', function() {
                                infoWindow.setContent(infowincontent);
                                infoWindow.open(map, marker);
                            });
                        });
                    });
                }


                function downloadUrl(url, callback) {
                    var request = window.ActiveXObject ?
                        new ActiveXObject('Microsoft.XMLHTTP') :
                        new XMLHttpRequest;

                    request.onreadystatechange = function() {
                        if (request.readyState == 4) {
                            request.onreadystatechange = doNothing;
                            callback(request, request.status);
                        }
                    };

                    request.open('GET.html', url, true);
                    request.send(null);
                }

                function doNothing() {}
            </script>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/popper.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery-ui.js"></script>
            <script>
                $('.ic-map-1').on('click', function() {
                    window.location.href = "hospitalsbeca.html?grid=yes";
                });
                $('.ic-map-2').on('click', function() {
                    window.location.href = "hospitals3f0e.html?list=yes";
                });
            </script>
            <script>
                $('#cat_check1').change(mapListingFilter);
                $('#sub_cat_check1').change(mapListingFilter);
                $('#city_check1').change(mapListingFilter);
                $('#feature_check1').change(mapListingFilter);

                function mapListingFilter() {

                    var mainarray = [];

                    var size = [];
                    $('input[name="scheck"]:checked').each(function() {
                        size.push($(this).val());
                        $('.spansizecls').css('visibility', 'visible');
                    });
                    if (size == '') $('.spansizecls').css('visibility', 'hidden');
                    var size_checklist = "&scheck=" + size;

                    //To get Category values from All listing page starts

                    var cat_check = [];
                    $('#cat_check1 :selected').each(function() {
                        cat_check.push($(this).val());
                    });

                    var cat_checklist = " " + cat_check + "/";

                    //To get Category values from All listing page ends


                    //To get Sub category values from All listing page starts

                    var sub_cat_check = [];
                    $('#sub_cat_check1 :selected').each(function() {
                        sub_cat_check.push($(this).val());

                    });

                    var sub_cat_checklist = "&sub_category=" + sub_cat_check;

                    //To get Sub category values from All listing page ends

                    //To get Feature values from All listing page starts

                    var feature_check = [];
                    $('#feature_check1 :selected').each(function() {
                        //        $('input[name="feature_check"]:checked').each(function(){
                        feature_check.push($(this).val());

                    });

                    var feature_checklist = "&feature=" + feature_check;

                    //To get Feature values from All listing page ends

                    var city_check = [];
                    $('#city_check1 :selected').each(function() {
                        city_check.push($(this).val());

                    });
                    var city_checklist = "&city=" + city_check;


                    //To get Rating values from All listing page starts

                    var rating_check = [];
                    $('#rating_check1 :selected').each(function() {
                        rating_check.push($(this).val());
                    });
                    var rating_checklist = "&rating=" + rating_check;

                    //To get Rating values from All listing page ends


                    var main_string = cat_checklist + sub_cat_checklist + city_checklist + feature_checklist;
                    main_string = main_string.substring(1, main_string.length);

                    window.location.href = "https://bizbookdirectorytemplate.com/all-listing/" + main_string + "&map=yes";

                }
            </script>
            <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlrSJb8Lz-1QfAjTvVbgo_KzG5KSomYGQ&amp;callback=initMap">
            </script>
            <script>
                function SubcategoryFilter1(val) {

                    $(".sub_cat_section1").css("opacity", 0);
                    $.ajax({
                        type: "POST",
                        url: "https://bizbookdirectorytemplate.com/sub_category_map_filter.php",
                        data: 'category_id=' + val,
                        success: function(data) {
                            if (data == null) {
                                $(".sub_cat_section1").remove();
                            } else {
                                $(".sub_cat_section1").html(data);
                                $(".sub_cat_section1").css("opacity", 1);
                            }

                        }
                    });
                }
            </script>
        </div>
    </section>
    <!-- END -->
    <!-- START -->
    <section>
        <div class="list-foot">
            <div class="container sec-all-foot-cat-info">
                <div class="row">
                    <div class="list-foot-abo">
                        <div class="list-rat-all">
                            <h4>Overall rating</h4>
                            <b>0 Ratings</b>
                        </div>
                        <h2>Hospitals</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
