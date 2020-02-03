<style>
    #banner2 {
        max-height: 800px;
    .w-50 {
        width: 50%;
    }
    .form-row {
        margin: 0;
    }
    label.font-12 {
        font-size: 12px;
        font-weight: 500;
        margin-bottom: 5px;
    }
    input[type=text] {
        color: $bodytext;
        font-weight: 300;
        text-overflow: ellipsis;
    }
    button {
        cursor: pointer;
        border-radius: 0;
    }
    .date label {
        cursor: pointer;
        margin: 0;
    }
    }

    @media (max-width: 370px) {
        #banner2 {
        .left,
        .right {
            padding: 25px;
        }
    }
    }

    @media (max-width: 320px) {
        #banner2 {
        .left,
        .right {
            padding: 25px 15px;
        }
    }
    }
</style>
<div class="bg-light" id="order">
    <section>
        <div id="banner2" class="banner spacer" style="background-image:url(<?php echo $result['order']['img']?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-5" data-aos="fade-up" data-aos-duration="1500">
                        <h2 class="title text-white font-semibold text-uppercase"><?php echo $result['order']['title']?></h2>
                        <div class="bg-white">
                            <div class="form-row b-b">
                                <?php foreach ($result['order']['form'] as $el): ?>
                                    <div class="p-30 left b-r w-50">
                                        <label class="text-inverse font-12 text-uppercase"><?php echo $el?></label>
                                        <input type="text" class="b-0 p-0 font-14 form-control" placeholder="<?php echo $el?>" />
                                    </div>
                                <?php endforeach; ?>
                            <div class="form-row b-b p-30 po-relative">
                                <label class="text-inverse font-12 text-uppercase"><?php echo $result['order']['booking']?></label>
                                <div class="input-group date">
                                    <input type="text" class="b-0 p-0 font-14 form-control" id="dp" placeholder="Select the Appointment Date" />
                                    <label class="" for="dp"><i class="fa fa-calendar"></i></label>
                                </div>
                            </div>
                            <div class="form-row b-b p-30">
                                <label class="text-inverse font-12 text-uppercase"><?php echo $result['order']['message']?></label>
                                <textarea col="1" row="1" class="b-0 font-light p-0 font-14 form-control" placeholder="Write Down the Message"></textarea>
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