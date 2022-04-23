<?php
    include_once ('front/include/header.php');
?>

 <!-- start carousel & search -->

<section id="search_slider">
    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <div class="search_donor">
                    <div class="heading_search">
                        <h4>Donor Search Option</h4>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">District</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Choose...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Blood Group</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Choose...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block serach_donor">Search Donor</button>
                    </form>
                </div>
            </div> <!-- Search Option end -->


            <div class="col-md-8">
                <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true" data-autoplaytimeout="17000">

                    <div class="slider_item_container" data-bg_img="assets/front/images/home_1_slider_1.jpg" data-bg_color="#555555" data-bg_opacity="0.0">
                        <div class="item">
                            <div class="slider-content">
                                <div class="container text-left">
                                    <div class="row">
                                        <div class="slider-bg">
                                            <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">

                                                <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    YOUR BLOOD
                                                    <br>
                                                    CAN BRING SMILE
                                                    <br />
                                                </h2>
                                                <!-- <a href="index.html#" class="btn btn-theme margin-top-24">Donate Now</a>
                                                <a href="index.html#" class="btn btn-theme btn-theme-invert margin-top-24">CALL : 411-009-872-333</a> -->
                                            </div>
                                        </div> <!-- end .col-sm-12  -->
                                    </div> <!-- end .row  -->
                                </div><!-- end .container -->
                            </div> <!--  end .slider-content -->
                        </div> <!-- end .item  -->
                    </div> <!-- end .slider_item_container  -->

                    <div class="slider_item_container" data-bg_img="assets/front/images/home_1_slider_2.jpg" data-bg_color="#555555" data-bg_opacity="0.0" >
                        <div class="item">
                            <div class="slider-content">
                                <div class="container text-left">
                                    <div class="row">
                                        <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">
                                            <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">

                                                <h3>Donate blood,save life !</h3>
                                                <h2>
                                                    DONATE BLOOD
                                                    <br>
                                                    AND INSPIRES OTHERS.
                                                </h2>
                                                <!-- <a href="index.html#" class="btn btn-theme margin-top-24">Donate Now</a> -->
                                            </div>
                                        </div> <!-- end .col-sm-12  -->
                                    </div> <!-- end .row  -->
                                </div><!-- end .container -->
                            </div> <!--  end .slider-content -->
                        </div> <!-- end .item  -->
                    </div> <!-- end .slider_item_container  -->

                </div> <!-- end .slider_1  -->
            </div>

        </div> <!-- end .slider-wrap.  -->

    </div>
</section>

<!-- end carousel & search -->


<section id="search_donor_option_reg">
    <div class="container">
        <div class="row wow fadeIn">
            <div class="col-md-4">
                <div class="reg">
                    <div class="reg_text"><h4>আপনার প্রোফাইলে লগইন করুন</h4> </div>
                    <div class="reg_button">
                        <button type="button" class="btn btn_check">Check you can</button>
                    </div>
                </div>
            </div> <!-- Search Option end -->

            <div class="col-md-4">
                <div class="reg">
                    <div class="reg_text"><h4>রক্তদাতা হিসাবে রেজিস্ট্রেশন করুন</h4> </div>
                    <div class="reg_button">
                        <button type="button" class="btn btn_check">Check you can</button>
                    </div>
                </div>
            </div><!-- Reg end -->

            <div class="col-md-4">
                <div class="reg">
                    <div class="reg_text"><h4>রক্তদানের তারিখ আপডেট করুন</h4> </div>
                    <div class="reg_button">
                        <button type="button" class="btn btn_check">Check you can</button>
                    </div>
                </div>
            </div><!-- Reg  end -->
        </div>
    </div>
</section><!-- search donor option reg End-->

<!-- all_blood End -->



<?php
include_once ('front/include/footer.php');
?>