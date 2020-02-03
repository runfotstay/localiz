<div class="contact3 spacer" id="contact_us">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="row m-0">
                    <div class="col-lg-7">
                        <div class="card-shadow" data-aos="flip-left" data-aos-duration="1200"> <img src="<?php echo $result['contact_us']['img']?>" alt="wrapkit" class="img-responsive"> </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-box m-l-30">
                            <h1 class="title font-light m-t-10"><?php echo $result['contact_us']['title']?></h1>
                            <form class="m-t-30" data-aos="fade-left" data-aos-duration="1200">
                                <div class="row">
                                    <?php foreach ($result['contact_us']['form'] as $el): ?>
                                        <div class="col-lg-12">
                                            <div class="form-group m-t-10">
                                                <input class="form-control" type="text" placeholder="<?php echo $el ?>"> </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-info-gradiant btn-md m-t-20 btn-arrow"><span> <?php echo $result['contact_us']['submit']?>
                                                <i class="ti-arrow-right"></i></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12">
                                <div class="card m-t-40">
                                    <div class="col-lg-12">
                                        <div class="card m-t-40">
                                            <div class="row">
                                                <?php foreach ($result['contact_us']['info'] as $img => $el): ?>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card-body d-flex no-block c-detail p-l-0">
                                                        <div class="m-r-20 align-self-center"> <img src="<?php echo $img ?>" alt="wrapkit"> </div>
                                                        <div class="">
                                                            <?php foreach ($el as $key => $item): ?>
                                                            <<?php echo $key ?> class="font-medium"><?php echo $item ?></<?php echo $key ?>>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
