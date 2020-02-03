<div class="pricing4 spacer bg-light" id="services">
    <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="title"><?php echo $result['services']['title']?></h2>
                <h6 class="subtitle"><?php echo $result['services']['sub']?></h6>
            </div>
        </div>
        <!-- Row  -->
        <div class="row m-t-40">
            <?php foreach ($result['services']['service']  as $el): ?>
                <div class="col-md-4">
                    <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                        <img class="card-img-top" src="<?php echo $el['img']?>" alt="wrappixel kit">
                        <div class="p-30">
                            <h5 class="font-medium m-b-0"><?php echo $el['text1']?></h5>
                            <h6 class="subtitle font-13"><?php echo $el['text2']?></h6>
                            <ul class="general-listing only-li font-14 m-t-20">
                                <?php foreach ($el['list'] as $item): ?>
                                    <li><i class="fa fa-check-circle text-danger"></i> <?php echo $item?> </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="d-flex m-t-30 align-items-center">
                                <h2 class="price"><?php echo $el['price']?><sup>*</sup><small>/m</small></h2>
                                <div class="ml-auto"><a class="btn btn-info-gradiant" href="#"><?php echo $el['buy']?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
