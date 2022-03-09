@extends('frontend.layouts.app')

@section('content')
    <!-- END -->
    <style>
        .hom2-cus-sli ul {
            position: relative;
            overflow: hidden;
            padding: 20px 20px 0
        }

        .slick-arrow {
            width: 50px;
            height: 50px;
            border-radius: 50px;
            background: #fff;
            border: 1px solid #ededed;
            color: #ffffff03;
            position: absolute;
            z-index: 9;
            top: 38%
        }

        .slick-arrow:before {
            content: 'chevron_left';
            font-size: 27px;
            top: 4px;
            left: 9px
        }

        .slick-prev {
            left: 14px
        }

        .slick-next {
            right: 14px
        }

        .slick-next:before {
            content: 'chevron_right';
            font-size: 27px
        }

    </style>

    <!-- START -->
    <section>
        <div class="all-listing all-jobs all-serexp">
            <!--FILTER ON MOBILE VIEW-->
            <div class="fil-mob fil-mob-act">
                <h4>Listing filters <i class="material-icons">filter_list</i></h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 fil-mob-view">
                        <!--- START --->
                        <div class="filt-com">
                            <div class="job-alert">
                                <h5>Are looking for Service Expert?</h5>
                                <p>We will help you to arrage best Service Expert.</p>
                                <a href="#" data-toggle="modal" data-target="#allexpfrm">Send your queries</a>
                            </div>
                        </div>
                        <!--- END --->
                        <!--- START --->
                        <div class="filt-com lhs-cate">
                            <h4>Categories</h4>
                            <div class="form-group">
                                <select name="cat_check" id="cat_check" class="cat_check chosen-select">
                                    <option value="">Select Category</option>
                                    <option selected value="plumbers">Plumbers</option>
                                    <option value="ac-services">AC Services</option>
                                    <option value="led-tv-services">LED Tv Services</option>
                                    <option value="electrical-service">Electrical service</option>
                                    <option value="car-service">Car service</option>
                                    <option value="house-cleaning-service">House Cleaning service</option>
                                    <option value="bike-service">Bike service</option>
                                    <option value="pest-control-service">Pest control service</option>
                                    <option value="home-restoration-services">Home restoration services</option>
                                    <option value="house-decoration-services">House Decoration Services</option>
                                    <option value="laptop-service">Laptop service</option>
                                </select>
                            </div>
                        </div>
                        <!--- END --->
                        <!--- START --->
                        <div class="filt-com lhs-loc">
                            <h4>Location</h4>
                            <div class="form-group">
                                <select class="city_check chosen-select" name="city_check" id="city_check">
                                    <option value="">Select City</option>
                                    <option value="1">Los Angeles</option>
                                    <option value="2">Chicago</option>
                                    <option value="4">New york</option>
                                    <option value="7">Phoenix</option>
                                </select>
                            </div>
                        </div>
                        <!--- END --->

                        <!--- START --->
                        <div class="filt-com lhs-rati lhs-avail">
                            <h4>Availability</h4>
                            <ul>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="3" name="expert_avail" class="availability_check"
                                            id="avail1" checked />
                                        <label for="avail1">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="0" name="expert_avail" class="availability_check"
                                            id="avail2" checked />
                                        <label for="avail2">Available</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="1" name="expert_avail" class="availability_check"
                                            id="avail3" />
                                        <label for="avail3">Busy</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="2" name="expert_avail" class="availability_check"
                                            id="avail4" />
                                        <label for="avail4">Closed today</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--- END --->

                        <!--- START --->
                        <div class="filt-com lhs-rati lhs-ver">
                            <h4>Verified</h4>
                            <ul>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="1" name="expert_veri" class="expert_veri" id="exver1"
                                            checked />
                                        <label for="exver1">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="2" name="expert_veri" class="expert_veri"
                                            id="exver2" />
                                        <label for="exver2">Verified experts</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--- END --->

                        <!--- START --->
                        <div class="filt-com lhs-rati">
                            <h4>Rating</h4>
                            <ul>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="0" name="expert_rat" class="rating_check" id="exrat6"
                                            checked />
                                        <label for="exrat6">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="5" name="expert_rat" class="rating_check"
                                            id="exrat1" />
                                        <label for="exrat1">5 Star</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="4" name="expert_rat" class="rating_check"
                                            id="exrat2" />
                                        <label for="exrat2">4 Star</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="3" name="expert_rat" class="rating_check"
                                            id="exrat3" />
                                        <label for="exrat3">3 Star</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="2" name="expert_rat" class="rating_check"
                                            id="exrat4" />
                                        <label for="exrat4">2 Star</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="1" name="expert_rat" class="rating_check"
                                            id="exrat5" />
                                        <label for="exrat5">1 Star</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--- END --->
                        <!--- START --->
                        <div class="filt-com lhs-rati lhs-ver">
                            <h4>Services Done</h4>
                            <ul>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="0" name="expert_ser_cou" class="expert_ser_cou"
                                            id="exsercou1" checked />
                                        <label for="exsercou1">All</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="2" name="expert_ser_cou" class="expert_ser_cou"
                                            id="exsercou2" />
                                        <label for="exsercou2">High - Low</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="rbbox">
                                        <input type="radio" value="1" name="expert_ser_cou" class="expert_ser_cou"
                                            id="exsercou3" />
                                        <label for="exsercou3">Low - High</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--- END --->
                    </div>
                    <div class="col-md-9">
                        <div class="job-ser-cnt">Showing 03 Service Experts</div>
                        <div class="job-list">
                            <ul>
                                <li>
                                    <div class="job-box">
                                        <div class="job-box-img">
                                            <img src="{{ asset('assets/images/devs/1.jpg') }}" alt="">
                                        </div>
                                        <div class="ser-exp-ave" title="User currently available">
                                            <span class="ser-avail-yes"></span>
                                        </div>
                                        <div class="job-days">
                                            <span class="ver"><i class="material-icons"
                                                    title="Verified expert">verified_user</i></span>
                                            <span class="rat" title="User rating 5 out of">1.0</span>
                                        </div>
                                        <div class="job-box-con">
                                            <h4>Richflayer</h4>
                                            <span>0 Services Done</span>
                                            <span>10 yearsExp.</span>
                                        </div>
                                        <div class="job-box-apl">
                                            <span class="job-box-cta" data-toggle="modal" data-target="#expfrm26">Contact
                                                me</span>
                                            <a href="../service-expert/richflayer.html" class="serexp-cta-more">More
                                                details</a>
                                        </div>
                                    </div>
                                </li>
                                <!--  Quick View box starts  -->
                                <!-- START -->
                                <section>
                                    <div class="pop-ups pop-quo">
                                        <!-- The Modal -->
                                        <div class="modal fade" id="expfrm26">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="log-bor">&nbsp;</div>
                                                    <span class="udb-inst">Contact</span>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <!-- Modal Header -->
                                                    <div class="quote-pop">
                                                        <div id="expert_pop_enq_success" class="log"
                                                            style="display: none;">
                                                            <p>Your Enquiry Is Submitted Successfully!!!</p>
                                                        </div>
                                                        <div id="expert_pop_enq_same" class="log"
                                                            style="display: none;">
                                                            <p>You cannot make enquiry on your own Service!!</p>
                                                        </div>
                                                        <div id="expert_pop_enq_fail" class="log"
                                                            style="display: none;">
                                                            <p>Oops!! Something Went Wrong Try Later!!!</p>
                                                        </div>
                                                        <div class="ser-exp-wel">Hey <b>Richflayer</b></div>
                                                        <form method="post" name="expert_all_enquiry_form"
                                                            id="expert_all_enquiry_form">
                                                            <input type="hidden" class="form-control" name="expert_id"
                                                                value="26" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="expert_user_id" value="327" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_sender_id" value="" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_source" value="Website" placeholder=""
                                                                required>
                                                            <div class="form-group">
                                                                <input type="text" name="enquiry_name" value=""
                                                                    required="required" class="form-control"
                                                                    placeholder="Enter name*">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Enter email*" required="required" value=""
                                                                    name="enquiry_email"
                                                                    pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                                                    title="Invalid email address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value=""
                                                                    name="enquiry_mobile"
                                                                    placeholder="Enter mobile number *"
                                                                    pattern="[7-9]{1}[0-9]{9}"
                                                                    title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="chosen-select" required="required"
                                                                    name="enquiry_category">
                                                                    <option value="">Select Category</option>
                                                                    <option value="27">Plumbers</option>
                                                                    <option value="23">AC Services</option>
                                                                    <option value="24">LED Tv Services</option>
                                                                    <option value="26">Electrical service</option>
                                                                    <option value="25">Car service</option>
                                                                    <option value="28">House Cleaning service</option>
                                                                    <option value="29">Bike service</option>
                                                                    <option value="30">Pest control service</option>
                                                                    <option value="31">Home restoration services</option>
                                                                    <option value="32">House Decoration Services</option>
                                                                    <option value="33">Laptop service</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 serex-date">
                                                                <input type="text" class="form-control datepicker"
                                                                    name="enquiry_date" placeholder="Preferred Date">
                                                            </div>
                                                            <div class="form-group col-md-6 serex-time">
                                                                <select class="chosen-select" name="enquiry_time">
                                                                    <option value="">Preferred Time</option>
                                                                    <option value="8:00 AM">8:00 AM</option>
                                                                    <option value="9:00 AM">9:00 AM</option>
                                                                    <option value="10:00 AM">10:00 AM</option>
                                                                    <option value="11:00 AM">11:00 AM</option>
                                                                    <option value="12:00 PM">12:00 PM</option>
                                                                    <option value="1:00 PM">1:00 PM</option>
                                                                    <option value="2:00 PM">2:00 PM</option>
                                                                    <option value="3:00 PM">3:00 PM</option>
                                                                    <option value="4:00 PM">4:00 PM</option>
                                                                    <option value="5:00 PM">5:00 PM</option>
                                                                    <option value="6:00 PM">6:00 PM</option>
                                                                    <option value="7:00 PM">7:00 PM</option>
                                                                    <option value="8:00 PM">8:00 PM</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="enquiry_location"
                                                                    id="enquiry_location"
                                                                    placeholder="Enter your Location"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="enquiry_message"
                                                                    id="enquiry_message"
                                                                    placeholder="Enter your query or message"></textarea>
                                                            </div>
                                                            <input type="hidden" name="" id="source">
                                                            <button disabled="disabled" type="submit"
                                                                id="expert_all_enquiry_submit"
                                                                name="expert_all_enquiry_submit" class="btn btn-primary">
                                                                Log In To Submit </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- END -->
                                <!--  Quick View box ends  -->
                                <li>
                                    <div class="job-box">
                                        <div class="job-box-img">
                                            <img src="{{ asset('assets/images/devs/2.jpg') }}" alt="">
                                        </div>
                                        <div class="ser-exp-ave" title="User currently available">
                                            <span class="ser-avail-yes"></span>
                                        </div>
                                        <div class="job-days">
                                            <span class="ver"><i class="material-icons"
                                                    title="Verified expert">verified_user</i></span>
                                            <span class="rat" title="User rating 5 out of">1.0</span>
                                        </div>
                                        <div class="job-box-con">
                                            <h4>Brandon David</h4>
                                            <span>0 Services Done</span>
                                            <span>0 yearsExp.</span>
                                        </div>
                                        <div class="job-box-apl">
                                            <span class="job-box-cta" data-toggle="modal"
                                                data-target="#expfrm13">Contact me</span>
                                            <a href="../service-expert/brandon-david.html" class="serexp-cta-more">More
                                                details</a>
                                        </div>
                                    </div>
                                </li>
                                <!--  Quick View box starts  -->
                                <!-- START -->
                                <section>
                                    <div class="pop-ups pop-quo">
                                        <!-- The Modal -->
                                        <div class="modal fade" id="expfrm13">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="log-bor">&nbsp;</div>
                                                    <span class="udb-inst">Contact</span>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <!-- Modal Header -->
                                                    <div class="quote-pop">
                                                        <div id="expert_pop_enq_success" class="log"
                                                            style="display: none;">
                                                            <p>Your Enquiry Is Submitted Successfully!!!</p>
                                                        </div>
                                                        <div id="expert_pop_enq_same" class="log"
                                                            style="display: none;">
                                                            <p>You cannot make enquiry on your own Service!!</p>
                                                        </div>
                                                        <div id="expert_pop_enq_fail" class="log"
                                                            style="display: none;">
                                                            <p>Oops!! Something Went Wrong Try Later!!!</p>
                                                        </div>
                                                        <div class="ser-exp-wel">Hey <b>Brandon David</b></div>
                                                        <form method="post" name="expert_all_enquiry_form"
                                                            id="expert_all_enquiry_form">
                                                            <input type="hidden" class="form-control" name="expert_id"
                                                                value="13" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="expert_user_id" value="335" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_sender_id" value="" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_source" value="Website" placeholder=""
                                                                required>
                                                            <div class="form-group">
                                                                <input type="text" name="enquiry_name" value=""
                                                                    required="required" class="form-control"
                                                                    placeholder="Enter name*">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Enter email*" required="required" value=""
                                                                    name="enquiry_email"
                                                                    pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                                                    title="Invalid email address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value=""
                                                                    name="enquiry_mobile"
                                                                    placeholder="Enter mobile number *"
                                                                    pattern="[7-9]{1}[0-9]{9}"
                                                                    title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="chosen-select" required="required"
                                                                    name="enquiry_category">
                                                                    <option value="">Select Category</option>
                                                                    <option value="27">Plumbers</option>
                                                                    <option value="23">AC Services</option>
                                                                    <option value="24">LED Tv Services</option>
                                                                    <option value="26">Electrical service</option>
                                                                    <option value="25">Car service</option>
                                                                    <option value="28">House Cleaning service</option>
                                                                    <option value="29">Bike service</option>
                                                                    <option value="30">Pest control service</option>
                                                                    <option value="31">Home restoration services</option>
                                                                    <option value="32">House Decoration Services</option>
                                                                    <option value="33">Laptop service</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 serex-date">
                                                                <input type="text" class="form-control datepicker"
                                                                    name="enquiry_date" placeholder="Preferred Date">
                                                            </div>
                                                            <div class="form-group col-md-6 serex-time">
                                                                <select class="chosen-select" name="enquiry_time">
                                                                    <option value="">Preferred Time</option>
                                                                    <option value="9:00 AM">9:00 AM</option>
                                                                    <option value="10:00 AM">10:00 AM</option>
                                                                    <option value="11:00 AM">11:00 AM</option>
                                                                    <option value="12:00 PM">12:00 PM</option>
                                                                    <option value="1:00 PM">1:00 PM</option>
                                                                    <option value="2:00 PM">2:00 PM</option>
                                                                    <option value="3:00 PM">3:00 PM</option>
                                                                    <option value="4:00 PM">4:00 PM</option>
                                                                    <option value="5:00 PM">5:00 PM</option>
                                                                    <option value="6:00 PM">6:00 PM</option>
                                                                    <option value="7:00 PM">7:00 PM</option>
                                                                    <option value="8:00 PM">8:00 PM</option>
                                                                    <option value="9:00 PM">9:00 PM</option>
                                                                    <option value="10:00 PM">10:00 PM</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="enquiry_location"
                                                                    id="enquiry_location"
                                                                    placeholder="Enter your Location"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="enquiry_message"
                                                                    id="enquiry_message"
                                                                    placeholder="Enter your query or message"></textarea>
                                                            </div>
                                                            <input type="hidden" name="" id="source">
                                                            <button disabled="disabled" type="submit"
                                                                id="expert_all_enquiry_submit"
                                                                name="expert_all_enquiry_submit" class="btn btn-primary">
                                                                Log In To Submit </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- END -->
                                <!--  Quick View box ends  -->
                                <li>
                                    <div class="job-box">
                                        <div class="job-box-img">
                                            <img src="../service-experts/images/services/67415pexels-photo-8486927.jpg"
                                                alt="">
                                        </div>
                                        <div class="ser-exp-ave" title="User currently available">
                                            <span class="ser-avail-yes"></span>
                                        </div>
                                        <div class="job-days">
                                            <span class="ver"><i class="material-icons"
                                                    title="Verified expert">verified_user</i></span>
                                            <span class="rat" title="User rating 5 out of">1.0</span>
                                        </div>
                                        <div class="job-box-con">
                                            <h4>Tyler Joseph</h4>
                                            <span>0 Services Done</span>
                                            <span>6 yearsExp.</span>
                                        </div>
                                        <div class="job-box-apl">
                                            <span class="job-box-cta" data-toggle="modal"
                                                data-target="#expfrm11">Contact me</span>
                                            <a href="../service-expert/tyler-joseph.html" class="serexp-cta-more">More
                                                details</a>
                                        </div>
                                    </div>
                                </li>
                                <!--  Quick View box starts  -->
                                <!-- START -->
                                <section>
                                    <div class="pop-ups pop-quo">
                                        <!-- The Modal -->
                                        <div class="modal fade" id="expfrm11">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="log-bor">&nbsp;</div>
                                                    <span class="udb-inst">Contact</span>
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <!-- Modal Header -->
                                                    <div class="quote-pop">
                                                        <div id="expert_pop_enq_success" class="log"
                                                            style="display: none;">
                                                            <p>Your Enquiry Is Submitted Successfully!!!</p>
                                                        </div>
                                                        <div id="expert_pop_enq_same" class="log"
                                                            style="display: none;">
                                                            <p>You cannot make enquiry on your own Service!!</p>
                                                        </div>
                                                        <div id="expert_pop_enq_fail" class="log"
                                                            style="display: none;">
                                                            <p>Oops!! Something Went Wrong Try Later!!!</p>
                                                        </div>
                                                        <div class="ser-exp-wel">Hey <b>Tyler Joseph</b></div>
                                                        <form method="post" name="expert_all_enquiry_form"
                                                            id="expert_all_enquiry_form">
                                                            <input type="hidden" class="form-control" name="expert_id"
                                                                value="11" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="expert_user_id" value="334" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_sender_id" value="" placeholder="" required>
                                                            <input type="hidden" class="form-control"
                                                                name="enquiry_source" value="Website" placeholder=""
                                                                required>
                                                            <div class="form-group">
                                                                <input type="text" name="enquiry_name" value=""
                                                                    required="required" class="form-control"
                                                                    placeholder="Enter name*">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Enter email*" required="required" value=""
                                                                    name="enquiry_email"
                                                                    pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                                                    title="Invalid email address">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" value=""
                                                                    name="enquiry_mobile"
                                                                    placeholder="Enter mobile number *"
                                                                    pattern="[7-9]{1}[0-9]{9}"
                                                                    title="Phone number starting with 7-9 and remaining 9 digit with 0-9"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="chosen-select" required="required"
                                                                    name="enquiry_category">
                                                                    <option value="">Select Category</option>
                                                                    <option value="27">Plumbers</option>
                                                                    <option value="23">AC Services</option>
                                                                    <option value="24">LED Tv Services</option>
                                                                    <option value="26">Electrical service</option>
                                                                    <option value="25">Car service</option>
                                                                    <option value="28">House Cleaning service</option>
                                                                    <option value="29">Bike service</option>
                                                                    <option value="30">Pest control service</option>
                                                                    <option value="31">Home restoration services</option>
                                                                    <option value="32">House Decoration Services</option>
                                                                    <option value="33">Laptop service</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 serex-date">
                                                                <input type="text" class="form-control datepicker"
                                                                    name="enquiry_date" placeholder="Preferred Date">
                                                            </div>
                                                            <div class="form-group col-md-6 serex-time">
                                                                <select class="chosen-select" name="enquiry_time">
                                                                    <option value="">Preferred Time</option>
                                                                    <option value="6:00 AM">6:00 AM</option>
                                                                    <option value="7:00 AM">7:00 AM</option>
                                                                    <option value="8:00 AM">8:00 AM</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="enquiry_location"
                                                                    id="enquiry_location"
                                                                    placeholder="Enter your Location"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="enquiry_message"
                                                                    id="enquiry_message"
                                                                    placeholder="Enter your query or message"></textarea>
                                                            </div>
                                                            <input type="hidden" name="" id="source">
                                                            <button disabled="disabled" type="submit"
                                                                id="expert_all_enquiry_submit"
                                                                name="expert_all_enquiry_submit" class="btn btn-primary">
                                                                Log In To Submit </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- END -->
                                <!--  Quick View box ends  -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Quick View box starts  -->
    <!-- START -->
    <section>
        <div class="pop-ups pop-quo">
            <!-- The Modal -->
            <div class="modal fade" id="allexpfrm">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="log-bor">&nbsp;</div>
                        <span class="udb-inst">Contact</span>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- Modal Header -->
                        <div class="quote-pop">
                            <div id="expert_pop_enq_common_success" class="log" style="display: none;">
                                <p>Your Enquiry Is Submitted Successfully!!!</p>
                            </div>
                            <div id="expert_pop_enq_common_same" class="log" style="display: none;">
                                <p>You cannot make enquiry on your own Service!!</p>
                            </div>
                            <div id="expert_pop_enq_common_fail" class="log" style="display: none;">
                                <p>Oops!! Something Went Wrong Try Later!!!</p>
                            </div>
                            <div class="ser-exp-wel">You can post your enquiry here. We will find best service providers
                                for you!!!</div>
                            <form method="post" name="expert_all_enquiry_common_form" id="expert_all_enquiry_common_form">
                                <input type="hidden" class="form-control" name="general_id" value="1" placeholder=""
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
                                        title="Phone number starting with 7-9 and remaining 9 digit with 0-9" required>
                                </div>
                                <div class="form-group">
                                    <select class="chosen-select" required="required" name="enquiry_category">
                                        <option value="">Select Category</option>
                                        <option value="27">Plumbers</option>
                                        <option value="23">AC Services</option>
                                        <option value="24">LED Tv Services</option>
                                        <option value="26">Electrical service</option>
                                        <option value="25">Car service</option>
                                        <option value="28">House Cleaning service</option>
                                        <option value="29">Bike service</option>
                                        <option value="30">Pest control service</option>
                                        <option value="31">Home restoration services</option>
                                        <option value="32">House Decoration Services</option>
                                        <option value="33">Laptop service</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 serex-date">
                                    <input type="text" class="form-control datepicker" name="enquiry_date"
                                        placeholder="Preferred Date">
                                </div>
                                <div class="form-group col-md-6 serex-time">
                                    <select class="chosen-select" name="enquiry_time">
                                        <option value="">Preferred Time</option>
                                        <option value="6:00 AM">6:00 AM</option>
                                        <option value="7:00 AM">7:00 AM</option>
                                        <option value="8:00 AM">8:00 AM</option>
                                        <option value="9:00 AM">9:00 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="12:00 PM">12:00 PM</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                        <option value="7:00 PM">7:00 PM</option>
                                        <option value="8:00 PM">8:00 PM</option>
                                        <option value="9:00 PM">9:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="enquiry_location" id="enquiry_location"
                                        placeholder="Enter your Location"></textarea>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="enquiry_message" id="enquiry_message"
                                        placeholder="Enter your query or message"></textarea>
                                </div>
                                <input type="hidden" name="" id="source">
                                <button disabled="disabled" type="submit" id="expert_all_enquiry_common_submit"
                                    name="expert_all_enquiry_common_submit" class="btn btn-primary"> Log In To Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->
    <!--  Quick View box ends  -->

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
                            <a href="../pricing-details.html">Add my business <i
                                    class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
