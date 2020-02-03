<div class="bg-light spacer feature1" id="portfolio">
    <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center">
            <div class="col-md-7 text-center">
                <h2 class="title"><?php echo $result['portfolio']['title'] ?></h2>
                <h6 class="subtitle"><?php echo $result['portfolio']['sub'] ?></h6>
            </div>
        </div>
        <!-- Row  -->
        <div class="row m-t-40">
            <!-- Column -->
            <?php foreach ($result['portfolio']['work'] as $el): ?>
                <div class="col-md-4 wrap-feature1-box">
                    <div class="card card-shadow" data-aos="fade-right" data-aos-duration="1200">
                        <div class="card-body text-center">
                            <div class="icon-space"><img src="<?php echo $el['img'] ?>" alt="wrapkit" /></div>
                            <h5 class="font-medium"><?php echo $el['title'] ?></h5>
                            <p class="m-t-20"><?php echo $el['sub'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>