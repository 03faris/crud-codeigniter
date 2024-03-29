<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>CodeIgniter - Project one</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/core-img/favicon.ico') ?>">

    <!-- >>>>>>>>>>>>>>>> All CSS Files <<<<<<<<<<<<<<<< -->

    <!-- Style css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css') ?>">

    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- preloader start -->
    <!-- <div id="preloader">
        <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
    </div> -->
    <!-- /.end preloader -->

    <!-- >>>>>>>>>>>>>>>> Header Start <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
    <header class="header_area">
        <!-- Header Area Start -->
        <div class="main_header_area animated">
            <div class="container">
                <div class="row">

                    <div class="col-sm-2 col-xs-9">
                        <!-- Logo Area -->
                        <div class="logo_area">
                            <a href="index.html"><img src="assets/img/core-img/logo.png" alt=""></a>
                        </div>
                    </div>

                    <div class="col-sm-10 col-xs-12">
                        <!-- Menu Area Start -->
                        <div class="main_menu_area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current_page_item"><a href="#home">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#work">Project</a></li>
                                        <li><a href="#advisor">Team</a></li>
                                        <li><a href="#price">Price</a></li>
                                        <li><a href="#blog">News</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- >>>>>>>>>>>>>>>> Header End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Welcome Area Start <<<<<<<<<<<<<<<< -->
    <section class="welcome_area" id="home">
        <div class="welcome_slides">
            <!-- Single Slide Start -->
            <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
            <div class="single_slide" style="background-image: url(<?php echo base_url('assets/img/bg-pattern/bg-101.jpg') ?>);">
                <div class="slide_text">
                    <div class="table">
                        <div class="table_cell">
                            <h2 class="font-poiret-one"><?php echo $u->nama ?> <span>Creative &amp; Powerful</span></h2>
                            <h3>If you don't drive your business, you will be driven out of business.</h3>
                            <a class="btn btn-default video_btn" href="https://www.youtube.com/watch?v=hQfNtnKm5nA" role="button" title="Watch this video. It's take 45sec Only.">Play Video <i class="icofont icofont-play-alt-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- Single Slide Start -->
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- >>>>>>>>>>>>>>>>>> Welcome Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>>>> Special Feature Area Start <<<<<<<<<<<<<<<< -->
    <section class="special_feature_area section_padding_100">
        <div class="container">
            <div class="row">
            <?php 
                $no = 1;
                foreach($user as $u){ 
                ?>
                <div class="col-sm-6 col-md-3">
                    <!-- Single Feature Area Start -->
                    <div class="single_feature wow fadeInUp active" data-wow-delay=".2s">
                        <div class="feature_img">
                            <i class="icofont icofont-bank-alt"></i>
                        </div>
                        <!-- Single Feature Image Area End -->
                        
                        <div class="feature_text">
                            <h4><?php echo $u->nama ?></h4>
                            <p><?php echo $u->pekerjaan ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

                <!-- <div class="col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay=".4s">
                        <div class="feature_img">
                            <i class="icofont icofont-idea"></i>
                        </div>
                        <div class="feature_text">
                            <h4>Business Advisor</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, explicabo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay=".6s">
                        <div class="feature_img">
                            <i class="icofont icofont-presentation-alt"></i>
                        </div>
                        <div class="feature_text">
                            <h4>Online Consulting</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, explicabo.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="single_feature wow fadeInUp" data-wow-delay=".8s">
                        <div class="feature_img">
                            <i class="icofont icofont-growth"></i>
                        </div>
                        <div class="feature_text">
                            <h4>Financial Planning</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, explicabo.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Special Feature Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> About Us Area Start <<<<<<<<<<<<<<<< -->
    <section class="about_area section_padding_100" id="about">
        <div class="container">
            <div class="about_us_area">
                <div class="row">
                    <!-- About Us Area -->
                    <div class="col-xs-12 col-md-6">
                        <div class="about_us_thumb wow fadeInRight" data-wow-delay="0.2s">
                            <img src="<?php echo base_url('assets/img/bg-pattern/about-us.jpg') ?>" alt="">
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 wow fadeInUp">
                        <!-- About Us Text Start -->
                        <div class="about_us_text text-right">
                            <h3>About us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto laborum maiores nulla natus a. Aliquid enim dicta veniam eum harum repudiandae doloremque quaerat nobis necessitatibus similique, aut error blanditiis adipisci ab consequatur dolorem ducimus molestiae.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ab eveniet officia nesciunt placeat saepe, voluptas, laborum nam!</p>
                            <a href="#" class="btn">Discover More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Awesome Feature Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Video area start <<<<<<<<<<<<<<<< -->
    <div class="video_area text-center section_padding_200" data-stellar-background-ratio="0.6">
        <!-- Single Speciality Video Area Start -->
        <div class="video_play_area">
            <h3>Introducing About Bizplus</h3>
            <p>Watch this video. It's only take 50sec</p>
            <!-- Video Link -->
            <a href="https://www.youtube.com/watch?v=hQfNtnKm5nA" class="video_btn wow fadeInUp" data-wow-delay="0.2s"><i class="icofont icofont-play"></i></a>
        </div>
    </div>
    <!-- >>>>>>>>>>>>>>>> Video area end <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Why Choose Us Area Start <<<<<<<<<<<<<<<< -->
    <section class="why_choose_us_area section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>our best vision</p>
                        <h3>Why Choose Us</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <!--  Why Choose Text Area Start  -->
                    <div class="why_choose_us_text_area">
                        <div class="single_choose_us">
                            <h4>Award Winning</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores cupiditate vitae.</p>
                            <div class="choose_us_icon">
                                <i class="icofont icofont-award"></i>
                            </div>
                        </div>
                        <div class="single_choose_us">
                            <h4>Awesome Layouts</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores cupiditate vitae.</p>
                            <div class="choose_us_icon">
                                <i class="icofont icofont-layout"></i>
                            </div>
                        </div>
                        <div class="single_choose_us">
                            <h4>Parallax Effect</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores cupiditate vitae.</p>
                            <div class="choose_us_icon">
                                <i class="icofont icofont-molecule"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Why Choose Image Area Start  -->
                <div class="col-md-5 col-md-offset-2">
                    <div class="why_choose_us_image wow fadeInRight" data-wow-delay="0.2s">
                        <img src="<?php echo base_url('assets/img/bg-pattern/why-choose-one.png') ?>" alt="">
                    </div>
                </div>
            </div>

            <div class="row second_part">
                <!--  Why Choose Image Area Start  -->
                <div class="col-md-5">
                    <div class="why_choose_us_image second_area wow fadeInLeft" data-wow-delay="0.4s">
                        <img src="<?php echo base_url('assets/img/bg-pattern/why-choose-two.png') ?>" alt="">
                    </div>
                </div>
                <!--  Why Choose Text Area Start  -->
                <div class="col-md-5 col-md-offset-2">
                    <div class="why_choose_us_text_area second_area">
                        <div class="single_choose_us">
                            <h4>Reatina Ready</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores cupiditate vitae.</p>
                            <div class="choose_us_icon">
                                <i class="icofont icofont-eye-alt"></i>
                            </div>
                        </div>
                        <div class="single_choose_us">
                            <h4>Clean Code</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores cupiditate vitae.</p>
                            <div class="choose_us_icon">
                                <i class="icofont icofont-code-alt"></i>
                            </div>
                        </div>
                        <div class="single_choose_us">
                            <h4>Super Responsive</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde dolores cupiditate vitae.</p>
                            <div class="choose_us_icon">
                                <i class="icofont icofont-responsive"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Why Choose Us Area Start <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Service Details area start <<<<<<<<<<<<<<<< -->
    <div id="service_details_wrapper">
        <!-- Modal-box -->
        <div role="dialog" tabindex="-1" id="service_details" class="modal fade in">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- modal Head start -->
                    <div class="modal_head">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="icofont icofont-close"></i></button>
                    </div>
                    <!-- modal body start -->
                    <div class="modal_body">
                        <div class="modal-product">
                            <!-- Service Details Content Area -->
                            <div class="service_details_content">
                                <!-- Service Details Thumb -->
                                <div class="service_details_thumb">
                                    <img src="<?php echo base_url('assets/img/services-img/service-details.jpg') ?>" alt="">
                                </div>
                                <!-- Service Details Text Area -->
                                <div class="single_part_content">
                                    <h3>Investment Planning</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, illo esse nisi dignissimos laboriosam officiis. Aliquid corporis amet, possimus voluptatem ducimus iste accusantium iusto, eveniet voluptatibus necessitatibus numquam alias distinctio nemo natus accusamus aliquam ea facilis nulla hic cupiditate. In doloremque illo debitis alias iusto, harum quis ad culpa aut suscipit! Ratione labore perspiciatis consequuntur reprehenderit tenetur debitis porro minima.</p>
                                </div>
                                <!-- Service Data Download Area -->
                                <div class="service_data_dl">
                                    <p>Can't Find your best answer. Download our full stories.</p>
                                    <a href="dummy-data/worksheet.pdf" class="pdf_dl" download>Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- >>>>>>>>>>>>>>>> Service Details area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Our Services Area Start <<<<<<<<<<<<<<<< -->
    <section class="what_we_do_area section_padding_100_70" id="service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>our best service</p>
                        <h3>What we do</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_service wow fadeInUp" data-wow-delay=".2s">
                        <!-- Single Service image -->
                        <div class="single_service_img">
                            <img src="<?php echo base_url('assets/img/services-img/service-1.jpg') ?>" alt="">
                        </div>
                        <!-- Single Service title -->
                        <div class="single_service_title">
                            <h4>Investment Planning</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse odit modi, neque laboriosam sed, nam soluta impedit, voluptate reprehenderit enim totam consectetur tempore debitis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#"><h4>Learn More</h4></a>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_service wow fadeInUp" data-wow-delay=".4s">
                        <!-- Single Service image -->
                        <div class="single_service_img">
                            <img src="<?php echo base_url('assets/img/services-img/service-2.jpg') ?>" alt="">
                        </div>
                        <!-- Single Service title -->
                        <div class="single_service_title">
                            <h4>Finance Planning</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse odit modi, neque laboriosam sed, nam soluta impedit, voluptate reprehenderit enim totam consectetur tempore debitis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#"><h4>Learn More</h4></a>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_service wow fadeInUp" data-wow-delay=".6s">
                        <!-- Single Service image -->
                        <div class="single_service_img">
                            <img src="<?php echo base_url('assets/img/services-img/service-3.jpg') ?>" alt="">
                        </div>
                        <!-- Single Service title -->
                        <div class="single_service_title">
                            <h4>Banking Planning</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse odit modi, neque laboriosam sed, nam soluta impedit, voluptate reprehenderit enim totam consectetur tempore debitis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#"><h4>Learn More</h4></a>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_service wow fadeInUp" data-wow-delay=".8s">
                        <!-- Single Service image -->
                        <div class="single_service_img">
                            <img src="<?php echo base_url('assets/img/services-img/service-4.jpg') ?>" alt="">
                        </div>
                        <!-- Single Service title -->
                        <div class="single_service_title">
                            <h4>SME Planning</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse odit modi, neque laboriosam sed, nam soluta impedit, voluptate reprehenderit enim totam consectetur tempore debitis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#"><h4>Learn More</h4></a>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <!-- Single Service image -->
                        <div class="single_service_img">
                            <img src="<?php echo base_url('assets/img/services-img/service-5.jpg') ?>" alt="">
                        </div>
                        <!-- Single Service title -->
                        <div class="single_service_title">
                            <h4>Online Marketing</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse odit modi, neque laboriosam sed, nam soluta impedit, voluptate reprehenderit enim totam consectetur tempore debitis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#"><h4>Learn More</h4></a>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_service wow fadeInUp" data-wow-delay="1.2s">
                        <!-- Single Service image -->
                        <div class="single_service_img">
                            <img src="<?php echo base_url('assets/img/services-img/service-6.jpg') ?>" alt="">
                        </div>
                        <!-- Single Service title -->
                        <div class="single_service_title">
                            <h4>Bank Loan</h4>
                        </div>
                        <!-- Single Service content -->
                        <div class="single_service_content">
                            <div class="table">
                                <div class="table_cell">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse odit modi, neque laboriosam sed, nam soluta impedit, voluptate reprehenderit enim totam consectetur tempore debitis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="learn_more">
                            <a data-target="#service_details" data-toggle="modal" href="#"><h4>Learn More</h4></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Our Services Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Our Speciality Area Start <<<<<<<<<<<<<<<< -->
    <section class="our_speciality_area section_padding_200" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">

                        <div class="col-xs-12">
                            <!-- Section Heading Start -->
                            <div class="section_heading">
                                <p>our best values</p>
                                <h3>Core Features</h3>
                            </div>
                            <!-- Section Heading End -->
                        </div>

                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Super Fast</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Free Delivery</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Friendly Support</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Latest Bootstrap</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Valid HTML5 / CSS3</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Awesome Unique Design</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Cross Browser Compatibility</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Pixel perfect design</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Single Speciality Area Start -->
                        <div class="col-xs-12 col-sm-4">
                            <div class="single_speciality">
                                <div class="single_speciality_icon">
                                    <i class="icofont icofont-ui-check"></i>
                                </div>
                                <div class="single_speciality_text">
                                    <h5>Pixel perfect design</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end. container -->
    </section>
    <!-- >>>>>>>>>>>>>>>> Our Speciality Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Works Details area start <<<<<<<<<<<<<<<< -->
    <div id="works_details_wrapper">
        <!-- Modal-box -->
        <div role="dialog" tabindex="-1" id="works_details" class="modal fade in">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- modal Head start -->
                    <div class="modal_head">
                        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><i class="icofont icofont-close"></i></button>
                    </div>
                    <!-- modal body start -->
                    <div class="modal_body">
                        <!-- single gallery description start -->
                        <section class="single_gallery_area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <!--  Gallery Slider -->
                                        <div class="single_gallary_slider">
                                            <div class="single_slider">
                                                <img src="<?php echo base_url('assets/img/gallery/3.jpg') ?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <!--  Gallery Details Info -->
                                        <div class="single_gallery_item_info">
                                            <!-- Headline -->
                                            <div class="headline">
                                                <h4>We dream of a sustainable economy where SME is the core.</h4>
                                            </div>
                                            <!--  Description -->
                                            <div class="description">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit aliquam hic doloribus dolores minus fugiat totam perspiciatis. Debitis, exercitationem maiores. Possimus eum at hic, reprehenderit similique voluptatibus quibusdam nesciunt necessitatibus.</p>
                                            </div>
                                            <!--   live preview button   -->
                                            <div class="live_preview">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Live Preview</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- >>>>>>>>>>>>>>>> Works Details area end <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Project area start <<<<<<<<<<<<<<<< -->
    <section class="gallery_area section_padding_100 clearfix" id="work">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>what we create</p>
                        <h3>Our latest works</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
        </div>

        <div class="gallery_full_width_images_area clearfix">

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="0.2s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/1.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay=".4s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/2.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay=".6s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/3.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay=".8s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/4.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/7.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.2s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/6.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.4s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/5.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wow fadeInUp" data-wow-delay="1.6s">
                <a data-target="#works_details" data-toggle="modal" href="#">
                    <img src="<?php echo base_url('assets/img/gallery/8.jpg') ?>" alt="">
                    <!-- Single gallery Item hover caption -->
                    <div class="hover_overlay">
                        <div class="table">
                            <div class="table_cell">
                                <div class="gallery_info">
                                    <h5>Creative Work</h5>
                                    <p>Bizplus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Project area end <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Our Advisor Area Start <<<<<<<<<<<<<<<< -->
    <section class="our_advisor_area clearfix section_padding_100" id="advisor">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>our quality team</p>
                        <h3>Creative Advisor</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single advisor profile area start -->
                <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                    <div class="single_advisor_profile">

                        <div class="single_advisor_slide">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img src="<?php echo base_url('assets/img/advisor-img/advisor-1.png') ?>" alt="">
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                                <h4>Tanmoy Islam</h4>
                                <p class="designation">Financial Advisor</p>
                                <div class="about_advisor">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti consectetur commodi, qui esse quod similique atque fugiat nostrum necessitatibus quia doloribus, veritatis, eaque error eos accusamus.</p>
                                </div>
                                <!-- Single advisor social link -->
                                <div class="advisor_social_info">
                                    <div class="social_icon">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-youtube-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_advisor_slide">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img src="<?php echo base_url('assets/img/advisor-img/advisor-2.png') ?>" alt="">
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                                <h4>Black Bold</h4>
                                <p class="designation">Educational Advisor</p>
                                <div class="about_advisor">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti consectetur commodi, qui esse quod similique atque fugiat nostrum necessitatibus quia doloribus, veritatis, eaque error eos accusamus.</p>
                                </div>
                                <!-- Single advisor social link -->
                                <div class="advisor_social_info">
                                    <div class="social_icon">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-youtube-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single_advisor_slide">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img src="<?php echo base_url('assets/img/advisor-img/advisor-3.png') ?>" alt="">
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                                <h4>Lucky Lin</h4>
                                <p class="designation">Business Advisor</p>
                                <div class="about_advisor">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis deleniti consectetur commodi, qui esse quod similique atque fugiat nostrum necessitatibus quia doloribus, veritatis, eaque error eos accusamus.</p>
                                </div>
                                <!-- Single advisor social link -->
                                <div class="advisor_social_info">
                                    <div class="social_icon">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                        <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        <a href="#"><i class="icofont icofont-social-youtube-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Our advisor Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> FAQ Area Start <<<<<<<<<<<<<<<< -->
    <section class="faq_question_area section_padding_100" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>Basic knowledgebase</p>
                        <h3>Frequently asked questions</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="faq_area">
                        <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h5>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How can I apply for a job?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h5>
                                <div id="collapseOne" class="accordion-content collapse">
                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h5>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="two" data-parent="#accordion" data-toggle="collapse" href="#two">Where can I find out about solution?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h5>
                                <div id="two" class="accordion-content collapse">
                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h5>
                                    <a role="button" aria-expanded="true" aria-controls="three" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#three">Who can use the apps? 
                                     <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h5>
                                <div id="three" class="accordion-content collapse">
                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <div class="faq_area two">
                        <div class="accordions" id="accordiontwo" role="tablist" aria-multiselectable="true">

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h5>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="four" data-toggle="collapse" data-parent="#accordiontwo" href="#four">How can I apply for a job?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h5>
                                <div id="four" class="accordion-content collapse">
                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h5>
                                    <a role="button" class="collapsed" aria-expanded="true" aria-controls="five" data-parent="#accordiontwo" data-toggle="collapse" href="#five">Where can I find out about solution?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h5>
                                <div id="five" class="accordion-content collapse">
                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>

                            <!-- single accordian area start -->
                            <div class="panel single-accordion">
                                <h5>
                                    <a role="button" aria-expanded="true" aria-controls="six" class="collapsed" data-parent="#accordiontwo" data-toggle="collapse" href="#six">Who can use the apps? 
                                     <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                    </a>
                                </h5>
                                <div id="six" class="accordion-content collapse">
                                    <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> FAQ Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Price and Plans Area Start <<<<<<<<<<<<<<<< -->
    <div class="price_plan_area section_padding_100_70" id="price">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>Pick your best plan</p>
                        <h3>Price Plan</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>

            <div class="row">
                <!-- Single Price Plan Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_price_plan wow fadeInUp" data-wow-delay=".2s">
                        <div class="price">
                            <h4>$59</h4>
                        </div>
                        <div class="title">
                            <h3 class="font-poiret-one">Startup</h3>
                        </div>
                        <div class="description">
                            <p>Monthly Bandwidth: 100GB</p>
                            <p>Online Space: 5GB</p>
                            <p>Full Support: No</p>
                            <p>No Hidden Fees</p>
                            <p>Video Tuts: 20+</p>
                            <p>Live Class: No</p>
                            <p>Duration: 120 Days</p>
                        </div>
                        <div class="button">
                            <a class="btn btn-default" href="#" role="button">Pick this Plan</a>
                        </div>
                    </div>
                </div>
                <!-- Single Price Plan Area End -->

                <!-- Single Price Plan Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_price_plan wow fadeInUp" data-wow-delay=".4s">
                        <div class="price">
                            <h4>$133</h4>
                        </div>
                        <div class="title">
                            <h3 class="font-poiret-one">Premium</h3>
                        </div>
                        <div class="description">
                            <p>Monthly Bandwidth: 200GB</p>
                            <p>Online Space: 11GB</p>
                            <p>Full Support: No</p>
                            <p>No Hidden Fees</p>
                            <p>Video Tuts: 40+</p>
                            <p>Live Class: No</p>
                            <p>Duration: 240 Days</p>
                        </div>
                        <div class="button">
                            <a class="btn btn-default" href="#" role="button">Pick this Plan</a>
                        </div>
                    </div>
                </div>
                <!-- Single Price Plan Area End -->

                <!-- Single Price Plan Area Start -->
                <div class="col-sm-6 col-md-4">
                    <div class="single_price_plan wow fadeInUp" data-wow-delay=".6s">
                        <div class="price">
                            <h4>$299</h4>
                        </div>
                        <div class="title">
                            <h3 class="font-poiret-one">Pro</h3>
                        </div>
                        <div class="description">
                            <p>Monthly Bandwidth: 500GB</p>
                            <p>Online Space: 30GB</p>
                            <p>Full Support: Yes</p>
                            <p>No Hidden Fees</p>
                            <p>Video Tuts: 100+</p>
                            <p>Live Class: Yes</p>
                            <p>Duration: 360 Days</p>
                        </div>
                        <div class="button">
                            <a class="btn btn-default" href="#" role="button">Pick this Plan</a>
                        </div>
                    </div>
                </div>
                <!-- Single Price Plan Area End -->

            </div>
        </div>
    </div>
    <!-- >>>>>>>>>>>>>>>> Price and Plans Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Timeline Area Start <<<<<<<<<<<<<<<< -->
    <section class="timeline_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>See our timeline</p>
                        <h3>Company History</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="history_timeline_area">

                        <!-- Single Timeline Area Start -->
                        <div class="single_timeline_block even-item clearfix">
                            <div class="timeline_icon">
                                <i class="icofont icofont-industries-alt-3"></i>
                            </div>
                            <div class="timeline_text_content">
                                <h4>Start New Company</h4>
                                <h5>03 Jun 2016</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt numquam fugiat, vitae facere. Provident odio saepe iure, commodi doloribus architecto.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area Start -->
                        <div class="single_timeline_block odd-item clearfix">
                            <div class="timeline_icon">
                                <i class="icofont icofont-award"></i>
                            </div>
                            <div class="timeline_text_content">
                                <h4>Achieve Award</h4>
                                <h5>05 Jan 2015</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt numquam fugiat, vitae facere. Provident odio saepe iure, commodi doloribus architecto.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area Start -->
                        <div class="single_timeline_block even-item clearfix">
                            <div class="timeline_icon">
                                <i class="icofont icofont-people"></i>
                            </div>
                            <div class="timeline_text_content">
                                <h4>Reach 1M Clients</h4>
                                <h5>27 Sep 2014</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt numquam fugiat, vitae facere. Provident odio saepe iure, commodi doloribus architecto.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area Start -->
                        <div class="single_timeline_block odd-item clearfix">
                            <div class="timeline_icon">
                                <i class="icofont icofont-ui-home"></i>
                            </div>
                            <div class="timeline_text_content">
                                <h4>Buy New Office</h4>
                                <h5>09 Aug 2014</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt numquam fugiat, vitae facere. Provident odio saepe iure, commodi doloribus architecto.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area Start -->
                        <div class="single_timeline_block even-item clearfix">
                            <div class="timeline_icon">
                                <i class="icofont icofont-people"></i>
                            </div>
                            <div class="timeline_text_content">
                                <h4>Reach 1k Clients</h4>
                                <h5>21 May 2014</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt numquam fugiat, vitae facere. Provident odio saepe iure, commodi doloribus architecto.</p>
                            </div>
                        </div>

                        <!-- Single Timeline Area Start -->
                        <div class="single_timeline_block odd-item clearfix">
                            <div class="timeline_icon">
                                <i class="icofont icofont-paper-plane"></i>
                            </div>
                            <div class="timeline_text_content">
                                <h4>Start Journey</h4>
                                <h5>14 Feb 2013</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt numquam fugiat, vitae facere. Provident odio saepe iure, commodi doloribus architecto.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Timeline Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Testimonial Area Start <<<<<<<<<<<<<<<< -->
    <div class="testimonial_area section_padding_100" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>we love our clients</p>
                        <h3>Happy Clients</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>

                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="testimonials_area">

                        <div class="testimonials">
                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img src="img/advisor-img/tes-1.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>YASIN ARAFAT</h5>
                                    <h6>CEO &amp; Founder, CreativeRacer</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img src="img/advisor-img/tes-3.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>LIM SARAH</h5>
                                    <h6>CEO &amp; Founder, ClassyFort</h6>
                                </div>
                            </div>

                            <!-- Single testimonial area start  -->
                            <div class="single_testimonial_area">
                                <!-- Single testimonial text  -->
                                <div class="testimonial_text">
                                    <!-- Single testimonial thumb  -->
                                    <div class="testimonial_author_thumb">
                                        <img src="img/advisor-img/tes-2.jpg" alt="">
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iusto voluptatum voluptas soluta, rem! Deserunt sint nam consequatur laborum, aperiam quod, quo impedit ea. Veniam, doloribus, molestias? Architecto, maxime et?</p>
                                </div>
                                <div class="testimonial_author_name">
                                    <h5>RAFIQUL ISLAM</h5>
                                    <h6>Advisor, ClassyFort</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- >>>>>>>>>>>>>>>> Testimonial Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Blog Area Start <<<<<<<<<<<<<<<< -->
    <section class="blog_area section_padding_100_70" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <p>our creative info</p>
                        <h3>latest news</h3>
                    </div>
                    <!-- Section Heading End -->
                </div>
            </div>
            <div class="row">

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".2s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog.jpg" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html"><h4>Headline indicating nature of articles.</h4></a>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                            <a href="single.html">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".4s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog-2.jpg" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html"><h4>Headline indicating nature of articles.</h4></a>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                            <a href="single.html">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- single latest news area start -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="single_latest_news_area wow fadeInUp" data-wow-delay=".6s">
                        <!-- single latest news thumb -->
                        <div class="single_latest_news_img_area">
                            <img src="img/news-img/blog-3.jpg" alt="">
                            <!-- single latest news published date -->
                        </div>
                        <div class="single_latest_news_text_area">
                            <!-- single latest news title -->
                            <div class="news_title">
                                <a href="single.html"><h4>Headline indicating nature of articles.</h4></a>
                            </div>
                            <!-- single latest news excerp -->
                            <div class="news_content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia magni, voluptate! Recusandae deleniti doloribus.</p>
                            </div>
                            <a href="single.html">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- >>>>>>>>>>>>>>>> Blog Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->
    <section class="message_now_area section_padding_100_70" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Message Title -->
                    <div class="message_title">
                        <!-- Section Heading Start -->
                        <div class="section_heading">
                            <p>Drop a line</p>
                            <h3>Message Now</h3>
                        </div>
                    </div>

                    <div class="contact_from">
                        <form action="mail.php" method="post" id="main_contact_form">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="number" id="number" placeholder="Your Number *" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-default">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map_contact_address_area">
        <!-- Map Area Start -->
        <div class="map_area" id="googleMap"></div>
    </div>
    <!-- >>>>>>>>>>>>>>>> Message Now Area Start <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> Footer Area Start <<<<<<<<<<<<<<<< -->
    <footer class="footer_area">
        <!-- Bottom Footer Area Start -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="social_links_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="icofont icofont-social-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="icofont icofont-social-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="icofont icofont-social-youtube-play"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer_bottom">
                            <p>Made with <i class="icofont icofont-heart"></i> by <a href="#">ClassyFort</a></p>
                        </div>
                        <!-- Bottom Footer Copywrite Text Area End -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- >>>>>>>>>>>>>>>> Footer Area End <<<<<<<<<<<<<<<< -->

    <!-- >>>>>>>>>>>>>>>> All jQuery Plugins <<<<<<<<<<<<<<<< -->

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery-2.2.4.min.js') ?>"></script>

    <!-- Bootstrap js -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

    <!-- Owl-carousel js -->
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>

    <!-- Ajax Contact js -->
    <script src="<?php echo base_url('assets/js/ajax-contact.js') ?>"></script>

    <!-- Meanmenu js -->
    <script src="<?php echo base_url('assets/js/meanmenu.js') ?>"></script>

    <!-- Onepage Nav js -->
    <script src="<?php echo base_url('assets/js/jquery.nav.min.js') ?>"></script>

    <!-- Magnific Popup js -->
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>

    <!-- Back to top js -->
    <script src="<?php echo base_url('iassets/js/jquery.scrollUp.js') ?>"></script>

    <!-- jQuery easing js -->
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js') ?>"></script>

    <!-- WOW js -->
    <script src="<?php echo base_url('assets/js/wow.min.js') ?>"></script>

    <!-- parallux js -->
    <script src="<?php echo base_url('assets/js/jquery.stellar.min.js') ?>"></script>

    <!-- Footer Reveal js -->
    <script src="<?php echo base_url('assets/js/footer-reveal.js') ?>"></script>

    <!-- YouTube Video Player js -->
    <script src="<?php echo base_url('iassets/js/YTPlayer.min.js') ?>"></script>

    <!-- GOOGLE MAPS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>

    <!-- GOOGLE ACTIVE JS -->
    <script src="<?php echo base_url('iassets/js/map-active.js') ?>"></script>

    <!-- Active js -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

</body>

</html>