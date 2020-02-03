
<div class="bg-light">
    <section id="order">
        <div id="banner2" class="banner spacer" style="background-image:url(<?php echo $result['order']['img']?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                        <h2 class="title text-white font-semibold text-uppercase"><?php echo $result['order']['title']?></h2>
                        <div class="bg-white">
                            <div class="form-row b-b">
                                <div class="p-30 left b-r w-50">
                                    <label class="text-inverse font-12 text-uppercase"><?php $result['order']['form']['name']?></label>
                                    <input type="text" class="b-0 p-0 font-14 form-control" placeholder="Your First Name">
                                </div>
                                <div class="p-30 right w-50">
                                    <label class="text-inverse font-12 text-uppercase"><?php $result['order']['form']['last_name']?></label>
                                    <input type="text" class="b-0 p-0 font-14 form-control" placeholder="Your Last Name">
                                </div>
                            </div>
                            <div class="form-row b-b p-30">
                                <label class="text-inverse font-12 text-uppercase"><?php $result['order']['form']['mail']?></label>
                                <input type="text" class="b-0 p-0 font-14 form-control" placeholder="Enter your Email Address">
                            </div>
                            <div class="form-row b-b p-30">
                                <label class="text-inverse font-12 text-uppercase"><?php $result['order']['form']['tel']?></label>
                                <input type="text" class="b-0 p-0 font-14 form-control" placeholder="Enter your Phone Number">
                            </div>
                            <div class="form-row b-b p-30 po-relative">
                                <label class="text-inverse font-12 text-uppercase"><?php echo $result['order']['booking']?></label>
                                <div class="input-group date">
                                    <input type="text" class="b-0 p-0 font-14 form-control" id="dp" placeholder="Select the Appointment Date">
                                    <label class="" for="dp"><i class="fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-row b-b p-30">
                                <label class="text-inverse font-12 text-uppercase"><?php echo $result['order']['message']?></label>
                                <textarea class="b-0 font-light p-0 font-14 form-control" placeholder="Write Down the Message"></textarea>
                            </div>
                            <div>
                                <button class="m-0 b-0 p-t-30 p-b-30 font-14 font-semibold bg-danger-gradiant btn btn-block btn-arrow text-center text-white text-uppercase">
                                    <span><?php echo $result['order']['button']?> <i class="ti-arrow-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
