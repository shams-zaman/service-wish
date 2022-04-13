@extends('frontend.layouts.app')
@section('content')
<!-- END -->
<!-- START -->
<section class=" blog-head">
    <div class="container">
        <div class="blog-head-inn">
            <h1>Blog posts</h1>
            <p>Here submit your blogs and make your own audiance.</p>
        </div>
        <div class="ban-search">
            <form>
                <ul>
                    <li class="sr-sea">
                        <input type="text" id="blog-search" class="autocomplete" placeholder="Search blog posts...">
                    </li>
                </ul>
            </form>
        </div>
        <div class="blog-sli">
            <ul class="multiple-items1">
                @foreach ($blogs as $blog)
                <li>
                    <div class="blog-sli-box">
                        <div class="lhs">
                            <img src="{{ asset('assets/images/blogs/71944pexels-inchs-7848900.jpg') }}" alt="">
                        </div>

                        <div class="rhs">
                            <span class="hig">Top posts</span>
                            <h4>{{ $blog->title }}</h4>
                            <div class="sli-desc">
                                <p>{{ $blog->desc }}</p>
                            </div>
                            <div class="auth">
                                <img src="{{ asset('assets/images/user/970813.jpg') }}" alt="">
                                <b>Posted by</b><br>
                                <h6>Richflayer</h6>
                            </div>
                        </div>
                        <a href="blog/trip-your-first-solo-adventure.html" class="fclick"></a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--END-->

<!-- START -->
<section class=" blog-body">
    <div class="container">
        <div class="us-ppg-com us-ppg-blog">
            <ul id="intseres" class="blog-wrapper">
                @foreach ($blogs as $blog)
                <li class="blog-item">
                    <div class="pro-eve-box">
                        <div>
                            <img src="{{ url('storage/post/'.$blog->image) }}" alt="">
                        </div>
                        <div>
                            <h2>{{ $blog->title }}</h2>
                            <span class="ic-time">04, Feb 2022</span>
                            <span class="ic-view">19</span>
                        </div>
                        <a href="{{ route('showblogitem', $blog->slug) }}" class="fclick">
                            &nbsp;</a>
                    </div>
                </li>
                @endforeach


            </ul>
        </div>

    </div>
</section>
<!--END-->

<section>
    <div class="pop-ups pop-quo">
        <!-- The Modal -->
        <div class="modal fade" id="quote">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- Modal Header -->
                    <div class="quote-pop">
                        <h4>Get quote</h4>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter name*" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email*"
                                    pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                    title="Invalid email address" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter mobile number *"
                                    pattern="[7-9]{1}[0-9]{9}"
                                    title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"
                                    placeholder="Enter your query or message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="log-bor">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="blog-pagination-container"></div>
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
                                src="{{ asset('assets/images/social/2.png') }}" alt=""></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/Rn53themes-1956793534579530/"><img
                                src="{{ asset('assets/images/social/3.png') }}" alt=""></a></li>
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
        <li><a href="all-category.html" class="act"><img src="{{ asset('assets/images/icon/shop.png') }}">Services</a>
        </li>
        <li><a href="service-experts/index.html"><img src="{{ asset('assets/images/icon/expert.png') }}">Service
                Experts</a></li>
        <li><a href="jobs/index.html"><img src="{{ asset('assets/jobs/images/icon/employee.png') }}">Jobs</a></li>
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
<script type="text/javascript">
    var webpage_full_link = 'index.html';
</script>
<script type="text/javascript">
    var login_url = 'loginf737.html?src=https://bizbookdirectorytemplate.com/blog-posts';
</script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/jquery.simplePagination.min.js') }}"></script>
<script>
    var items = $(".blog-wrapper .blog-item");
    var numItems = items.length;
    var perPage = 12;

    items.slice(perPage).hide();

    $('#blog-pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
            $("html, body").animate({
                scrollTop: 0
            }, "fast");
            return false;
        }
    });
    $('.multiple-items1').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false
            }
        }]

    });
</script>
</body>


<!-- Mirrored from bizbookdirectorytemplate.com/blog-posts by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2022 18:35:04 GMT -->

</html>
@endsection