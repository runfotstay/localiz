<?php
/**
 * Получаем текующуй язык из урла
 */
$lang = end(explode('.', $_SERVER["SERVER_NAME"]));

switch ($lang) {
    case 'lo':
        $result = include 'langs/ru/cont.php';
        break;
    case 'en':
        $result = include 'langs/en/cont.php';
        break;
    default:
        echo '404';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="html/css/bootstrap.min.css">
    <link rel="stylesheet" href="html/css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="html/css/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="html/css/leaflet.ie.css" />
    <![endif]-->
    <link rel="stylesheet" href="html/css/main.css">
    
    <script src="html/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><p><?php echo $result['logo']?></p></li>
                <?php foreach ($result['menu'] as $el):?>
                <li class="active">
                    <a href="index.html"><?php echo $el ?></a>
                </li>
                <?php endforeach;?>
            </ul>
        </nav>
    </div>
</div>

<!-- Homepage Slider -->
<div class="homepage-slider">
    <div id="sequence">
        <ul class="sequence-canvas">
            <!-- Slide 1 -->
           
            <?php foreach ($result['slide'] as $el):?>
                <li class="bg4">
                    <!-- Slide Title -->
                    <h2 class="title"><?php echo $el['h1'] ?></h2>
                    <!-- Slide Text -->
                    <h3 class="subtitle"><?php echo $el['h2'] ?></h3>
                    <!-- Slide Image -->
                    <img class="slide-img" src="img/homepage-slider/slide1.png" alt="Slide 1" />
                </li>
            <?php endforeach;?>
            <!-- End Slide 1 -->
        </ul>
        <div class="sequence-pagination-wrapper">
            <ul class="sequence-pagination">
                <li>1</li>
                <li>2</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Press Coverage -->
<div class="section">
    <div class="container">
        <div class="row">
            <?php foreach ($result['article'] as $el):?>
                <div class="col-md-4 col-sm-6">
                <div class="in-press press-wired">
                    <a href="#"><?php echo $el['text'] ?></a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- Press Coverage -->

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Our Latest Work</h3>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
                    </div>
                </div>
            </div>
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Navigate</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li><a href="page-blog-posts.html">Blog</a></li>
                    <li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
                    <li><a href="page-products-3-columns.html">eShop</a></li>
                    <li><a href="page-services-3-columns.html">Services</a></li>
                    <li><a href="page-pricing.html">Pricing</a></li>
                    <li><a href="page-faq.html">FAQ</a></li>
                </ul>
            </div>
            
            <div class="col-footer col-md-4 col-xs-6">
                <h3>Contacts</h3>
                <p class="contact-us-details">
                    <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                    <b>Phone:</b> +44 123 654321<br/>
                    <b>Fax:</b> +44 123 654321<br/>
                    <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
                <h3>Stay Connected</h3>
                <ul class="footer-stay-connected no-list-style">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="googleplus"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="html/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="html/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="html/js/jquery.fitvids.js"></script>
<script src="html/js/jquery.sequence-min.js"></script>
<script src="html/js/jquery.bxslider.js"></script>
<script src="html/js/main-menu.js"></script>
<script src="html/js/template.js"></script>

</body>
</html>