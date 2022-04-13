@extends('frontend.layouts.app')
@section('content')
<!-- END -->
<!-- START -->
<section class="  eve-deta-pg">
    <div class="container">
        <div class="eve-deta-pg-main">

            <div class="rhs">
                <div class="list-rhs-form pglist-bg pglist-p-com">
                    <div class="quote-pop">
                        <h3>Send enquiry</h3>
                        <div id="blog_detail_enq_success" class="log new-tnk-msg" style="display: none;">
                            <p>Your Enquiry Is Submitted Successfully!!!</p>
                        </div>
                        <div id="blog_detail_enq_same" class="log" style="display: none;">
                            <p>You cannot make enquiry on your own blog!!</p>
                        </div>
                        <div id="blog_detail_enq_fail" class="log" style="display: none;">
                            <p>Oops!! Something Went Wrong Try Later!!!</p>
                        </div>
                        <form method="POST" action="enq.submit" id="blog_detail_enquiry_form">
                            @csrf

                            {{-- <fieldset disabled="disabled">

                                <input type="hidden" class="form-control" name="blog_id" value="49" placeholder=""
                                    required>
                                <input type="hidden" class="form-control" name="listing_user_id" value="327"
                                    placeholder="" required>
                                <input type="hidden" class="form-control" name="enquiry_sender_id" value=""
                                    placeholder="" required>

                                <input type="hidden" class="form-control" name="enquiry_source" value="Website"
                                    placeholder="" required> --}}

                                <div class="form-group ic-user">
                                    <input type="text" name="name" value="" required="required" class="form-control"
                                        placeholder="Enter name*">
                                </div>
                                <div class="form-group ic-eml">
                                    <input type="email" class="form-control" placeholder="Enter email*"
                                        required="required" value="" name="email"
                                        pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                        title="Invalid email address">
                                </div>
                                {{-- <div class="form-group ic-pho">
                                    <input type="text" class="form-control" value="" name="enquiry_mobile"
                                        placeholder="Enter mobile number *" pattern="[7-9]{1}[0-9]{9}"
                                        title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required>
                                </div> --}}
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" name="text"
                                        placeholder="Enter your query or message"></textarea>
                                </div>
                                <input type="hidden" id="source">
                            </fieldset>
                            <button type="submit" name="" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="lhs">
                <div class="img">
                    <img src="{{ url('storage/post/'.$blog->image) }}" alt="hello">
                </div>

            </div>
        </div>
    </div>
</section>
<!--END-->

<!-- START -->
<section class=" eve-deta-body blog-deta-body">
    <div class="container">
        <div class="eve-deta-body-main">
            <div class="lhs">
                <div class="head">
                    <div class="eve-bred-crum">
                        <ul>
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="../blog-posts.html">All Blogs</a></li>
                            <li><a href="#">{{ $blog->title }}</a></li>
                        </ul>
                    </div <h1>{{ $blog->title }}</h1>
                    <div class="blog-bred-post-date">
                        <span class="ic-time">15, Nov 2021</span>

                        @foreach ($blog->cats as $blog_cat)


                        <span class="ic-view">{{$blog_cat->cat_name}}</span>
                        @endforeach

                    </div>
                </div>
                {{ $blog->desc }}
                <div class="list-sh">
                    <span class="share-new" data-toggle="modal" data-target="#sharepop"><i
                            class="material-icons">share</i> Share now</span>
                </div>
            </div>
            <div class="rhs">
                <div class="sec-3">
                    <div class="pro-bad-sml">
                        <img src="../images/user/970813.jpg" alt="">
                        <h4>Richflayer</h4>
                        <b>Joined on 14, Nov 2021</b>
                        <a target="_blank" href="../profile/richflayer.html" class="fclick">&nbsp;</a>
                    </div>
                </div>
                <div class="sec-4">
                    <h4>Other Post</h4>
                    <input type="text" id="pg-sear" placeholder="Search all posts..">
                    <ul id="pg-resu">
                        <li><a href="my-test-blog.html">My test blog</a></li>
                        <li><a href="10-tips-for-happy-life.html">10 Tips for Happy Life</a></li>
                        <li><a href="fat-burner-for-men.html">Fat Burner for Men</a></li>
                        <li><a href="2022-digital-marketing-tips.html">2022 Digital Marketing Tips</a></li>
                        <li><a href="beach-football-for-mens-2022.html">Beach Football for Mens 2022</a></li>
                        <li><a href="italian-fast-food-in-texas.html">Italian fast food in texas</a></li>
                        <li><a href="star-having-fun-at-work-finally.html">Star having fun at work finally</a></li>
                        <li><a href="best-advice-for-you-business.html">Best advice for you business</a></li>
                        <li><a href="find-your-dream-destination.html">Find your dream destination</a></li>
                        <li><a href="stylists-share-their-beauty.html">Stylists share their beauty</a></li>
                        <li><a href="if-your-customer-complain.html">If your customer complain</a></li>
                        <li><a href="../index-2.html">hi post ë and ç2022</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pro-rel-posts">
            <h4>Related Posts</h4>
            <div class="us-ppg-com us-ppg-blog">
                <ul>

                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/14770samuel-regan-asante-sjjhbjhzhas-unsplash-(1).jpg" alt="">
                            </div>
                            <div>
                                <h2>My test blog</h2>
                            </div>
                            <a href="my-test-blog.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/34245pexels-matheus-bertelli-573238.jpg" alt="">
                            </div>
                            <div>
                                <h2>10 Tips for Happy Life</h2>
                            </div>
                            <a href="10-tips-for-happy-life.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/35286pexels-leon-ardho-1552242.jpg" alt="">
                            </div>
                            <div>
                                <h2>Fat Burner for Men</h2>
                            </div>
                            <a href="fat-burner-for-men.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/63774pexels-pixabay-270637.jpg" alt="">
                            </div>
                            <div>
                                <h2>2022 Digital Marketing Tips</h2>
                            </div>
                            <a href="2022-digital-marketing-tips.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/66772pexels-robo-michalec-9390184.jpg" alt="">
                            </div>
                            <div>
                                <h2>Beach Football for Mens 2022</h2>
                            </div>
                            <a href="beach-football-for-mens-2022.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/34358pexels-alexandro-david-1787176.jpg" alt="">
                            </div>
                            <div>
                                <h2>Italian fast food in texas</h2>
                            </div>
                            <a href="italian-fast-food-in-texas.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/9876pexels-elina-fairytale-4833957.jpg" alt="">
                            </div>
                            <div>
                                <h2>Star having fun at work finally</h2>
                            </div>
                            <a href="star-having-fun-at-work-finally.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/40436pexels-andrea-piacquadio-864994-(1).jpg" alt="">
                            </div>
                            <div>
                                <h2>Best advice for you business</h2>
                            </div>
                            <a href="best-advice-for-you-business.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/50060pexels-valeriy-ryasnyanskiy-3840191.jpg" alt="">
                            </div>
                            <div>
                                <h2>Find your dream destination</h2>
                            </div>
                            <a href="find-your-dream-destination.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/74928pexels-juan-mendez-1536619.jpg" alt="">
                            </div>
                            <div>
                                <h2>Stylists share their beauty</h2>
                            </div>
                            <a href="stylists-share-their-beauty.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/84605pexels-moose-photos-1587014.jpg" alt="">
                            </div>
                            <div>
                                <h2>If your customer complain</h2>
                            </div>
                            <a href="if-your-customer-complain.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                    <li>
                        <div class="pro-eve-box">
                            <div>
                                <img src="../images/blogs/536161.jpg" alt="">
                            </div>
                            <div>
                                <h2>hi post ë and ç2022</h2>
                            </div>
                            <a href="hi-post-----and---2022.html" class="fclick">&nbsp;</a>
                        </div>
                    </li>
                </ul>
            </div>
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

<!-- SHARE POPUP -->
<div class="modal fade sharepop" id="sharepop">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Share now</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="text" value="" id="shareurl">
                <div class="shareurltip">
                    <button onclick="shareurl()" onmouseout="shareurlout()">
                        <span class="shareurltxt" id="myTooltip">Copy to clipboard</span>
                        Copy text </button>
                </div>
            </div>

        </div>
    </div>
</div>

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
                        <a href="../pricing-details.html">Add my business <i
                                class="material-icons">arrow_forward</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->
@endsection