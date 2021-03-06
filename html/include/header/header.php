<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <title><?php echo $result['title'] ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="/html/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- This is for the animation CSS -->
    <link href="/html/assets/node_modules/aos/dist/aos.css" rel="stylesheet">
    <link href="/html/assets/node_modules/prism/prism.css" rel="stylesheet">
    <link href="/html/assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css'>
    <!-- This page CSS -->
    <link href="/html/assets/node_modules/owl.carousel/dist/assets/owl.theme.green.css" rel="stylesheet">
    <!-- Custom CSS -->
<!--    <link href="/html/css/services/services.css" rel="stylesheet">-->
<!--    <link href="/html/css/features/features1-10.css" rel="stylesheet">-->
<!--    <link href="/html/css/c2a/c2a.css" rel="stylesheet">-->
<!--    <link href="/html/css/style.css" rel="stylesheet">-->
    <link href="/dist/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="">
    <div class="topbar">
        <div class="header6">
            <div class="container po-relative">
                <nav class="navbar navbar-expand-lg h6-nav-bar">
<!--                    <a href="javascript:void(0)" class="navbar-brand"><img src="--><?php //echo $result['logo']?><!--" alt="wrapkit" /></a>-->
                    <a href="javascript:void(0)" class="navbar-brand"><img src="/assets/images/logo.png" alt="wrapkit" class="logo__localize"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h6-info" aria-controls="h6-info" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                    <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="h6-info">
                        <ul class="navbar-nav ml-auto">
                            <?php foreach ($result['menu'] as $key => $el) : ?>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#<?php echo $key?>">
                                        <?php echo $el?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="act-buttons">
                            <div class="btn-group">
                                <button class="btn btn-success-gradiant font-14 dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $result['changeLang'] ?>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" style="cursor:pointer;" onclick="location.href = '/ru'"><?php echo $result['lang']['ru'] ?></a>
                                    <a class="dropdown-item" style="cursor:pointer;" onclick="location.href = '/en'"><?php echo $result['lang']['en'] ?></a>
                                    <a class="dropdown-item" style="cursor:pointer;" onclick="location.href = '/pl'"><?php echo $result['lang']['pl'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="banner-innerpage" style="background-image:url(/html/assets/images/innerpage/banner-bg.jpg)">
        <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center ">
                <!-- Column -->
                <div class="col-md-6 align-self-center text-center" data-aos="fade-down" data-aos-duration="1200">
                    <h1 class="title"><?php echo $result['banner']['title'] ?></h1>
                    <h6 class="subtitle op-8"><?php echo $result['banner']['sub'] ?></h6>
                    <button type="button" class="btn m-t-30 waves-effect waves-light btn-rounded btn-danger"><?php echo $result['callToAction'] ?></button>
                </div>
                <!-- Column -->
            </div>
        </div>
    </div>