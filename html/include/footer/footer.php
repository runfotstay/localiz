        <div class="footer4 spacer">
            <div class="container">
                <div class="f4-bottom-bar">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg h1-nav">
                                <a class="navbar-brand" href="#"><img src="<?php echo $result['footer']['img'] ?>" alt="wrapkit" width="50" /></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="ti-menu"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="header1">
                                    <span class="hidden-lg-down"><?php echo $result['footer']['descr'] ?></span>
                                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                        <?php foreach ($result['menu'] as $key => $el) : ?>
                                            <li class="nav-item dropdown mega-dropdown">
                                                <a class="nav-link dropdown-toggle" href="#<?php echo $key?>">
                                                    <?php echo $el?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="/html/assets/node_modules/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="/html/assets/node_modules/popper/dist/popper.min.js"></script>
        <script src="/html/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
        <!-- This is for the animation -->
        <script src="/html/assets/node_modules/aos/dist/aos.js"></script>
        <script src="/html/assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Custom JavaScript -->
        <script src="/html/js/custom.min.js"></script>
        <script src="/html/assets/node_modules/prism/prism.js"></script>
        <script type="text/javascript">
            $('.pre-scroll').perfectScrollbar();
        </script>
    </body>

</html>

