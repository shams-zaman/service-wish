<div>

    {{-- serarch --}}
    {{-- <div class="col col-md-6 col-lg-3 offset-lg-3 col-xl-4">
                            <div class="input-group">

                                <input wire:model.debounce.300ms="search" type="text" class="form-control"
                                    id="exampleInputIconLeft" placeholder="Search Users" aria-label="Search"
                                    aria-describedby="basic-addon2">
                            </div>
                        </div> --}}
    <div class=" container all-list-sh all-listing-total">
        <ul class="all-list-wrapper">
            @foreach ($results as $item)
                <li id="clist" class=" clist all-list-item">
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
                                <a href="../listing/greys-sloan-memorial-hospital.html">{{ $item->ag_name }}</a>
                                <i class="li-veri"><img src="{{ asset('assets/images/icon/svg/verified.png') }}"
                                        title="Verified"></i>
                            </h4>
                            <div class="list-rat-all">
                                <span>No Reviews Yet</span>
                            </div>
                            <span class="addr">{{ $item->address }}</span>
                            <span class="pho">876587675 </span>
                            <span class="mail">johnitsmes@gmail.com </span>
                            <div class="links">
                                <a
                                    href="../login2aeb.html?src=https://bizbookdirectorytemplate.com/all-listing/hospitals?list=yes">Get
                                    quote</a>
                                <a href="../listing/greys-sloan-memorial-hospital.html">view more</a>
                                <a href="Tel:876587675 ">Call Now</a>
                                <a href="https://wa.me/987654621" class="what" target="_blank">WhatsApp</a>
                            </div>
                        </div>
                        <!---END LISTING NAME--->
                        <!---SAVE--->
                        <span class="enq-sav" data-toggle="tooltip" title="Click to like this listing">
                            <i class="l-like Animatedheartfunc401 " data-for="0" data-section="1" data-num="328"
                                data-item="" data-id='401'><img
                                    src="{{ asset('assets/images/icon/svg/like.svg') }}"></i></span>
                        <!---END SAVE--->
                    </div>
                </li>
            @endforeach
            {{ $results->links('pagination_links') }}

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

        <!--ADS-->

        {{-- {{ $result->links() }} --}}
        {{-- <ul>
                                <li id="clist" class="active"><span class="current prev">«</span></li>
                                <li class="active"><span class="current">1</span></li>
                                <li class="active"><span class="current next">»</span></li>
                            </ul> --}}

    </div>


</div>
