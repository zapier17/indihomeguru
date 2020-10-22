<?php
defined('BASEPATH');
?><!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Komunitas Indihome Guru</title>

	<!-- Styles -->
    <link href="<?php echo ('https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/fontawesome-all.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/swiper.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.png') ?>">
	
</head> 

<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?php echo base_url('#') ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#header') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#services') ?>">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#activity') ?>">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#pricing') ?>">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('index.php/login/index') ?>">Join Us</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('index.php/register/index') ?>">Sign Up</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#request') ?>">Request</a>
                </li>
 -->
                <!-- Dropdown Menu -->          
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="<?php echo base_url('#about') ?>" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('terms-conditions.html') ?>"><span class="item-text">Terms Conditions</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="<?php echo base_url('privacy-policy.html') ?>"><span class="item-text">Privacy Policy</span></a>
                    </div>
                </li> -->
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="<?php echo base_url('#contact') ?>">Contact</a>
                </li>
            </ul>
            <!-- <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="<?php echo base_url('#your-link') ?>">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="<?php echo base_url('#your-link') ?>">
                        <i class="fas fa-circle fa-stack-2x twitter"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span> -->
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1><span class="turquoise">Indihome Guru</span> Komunitas Untuk Negeri dan Anak Bangsa</h1>
                            <p class="p-large">By Indihome Telkom Indonesia</p>
                            <a class="btn-solid-lg page-scroll" href="<?php echo base_url('#about') ?>">Mulai</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/header-teamwork.svg') ?>" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Details 1 -->
    <div id="about" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Indihome Guru</h2>
                        <p align="justify">Didukung koneksi internet stabil yang mencakup seluruh wilayah di Indonesia, semua guru dan dosen dari jenjang TK, SD, SMP, SMA/SMK sederajat, hingga perguruan tinggi dapat mengakses fasilitas internet dengan lancar. 

                        Selain itu, tersedia juga channel-channel TV interaktif yang seru, serta bebas telepon rumah 100 menit untuk menghubungi kerabat terdekat.

                        Dapatkan juga bebas akses aplikasi IndiHome Study yang berisi materi mata pelajaran, latihan soal dan berbagai konten menarik lainnya.</p>
                        <!-- <a class="btn-solid-reg popup-with-move-anim" href="<?php echo base_url('#details-lightbox-1') ?>">LIGHTBOX</a> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 cards-1">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/1.png') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Features</h2>
                    <p class="p-heading p-large">Fitur fitur yang kami tawarkan di Komunitas Indihome Guru antara lain</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('assets/images/services-icon-1.svg') ?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Forum Tanya Jawab</h4>
                            <p>Forum tanya jawab dari Guru oleh Guru dan untuk Guru berdasarkan Jenjang Pendidikan mulai dari tingkat TK, SD, SMP, dan SMA</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('assets/images/services-icon-2.svg') ?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Sharing Materi</h4>
                            <p>Materi yang dapat disharing oleh Guru untuk kelancaran kegiatan belajar-mengajar. Selain itu dibekali dengan materi dari Indihome Study sebagai bahan ajar dan tugas kepada pada siswa.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="<?php echo base_url('assets/images/services-icon-3.svg') ?>" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Komunitas Sesuai Bidang</h4>
                            <p>Komunitas sesuai bidang dari guru serta dapat saling bertukar pemikiran dalam pendidikan berbasis online saat ini.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="activity" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 cards-1">
                    <h2>Our Activities</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Sosialisasi </br> KIGP JABBODETABEK</h2>
                        <p align="justify"> Pelaksanaan open booth KIGP Jabbodetabek di SMA Global Mandiri bertepatan dengan kegiatan pembagian raport yang mereka lakukan secara drive-thru, unit DSW melakukan pembagian merchandise untuk para orang tua siswa.</p>
                        <!-- <a class="btn-solid-reg popup-with-move-anim" href="<?php echo base_url('#details-lightbox-1') ?>">LIGHTBOX</a> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 cards-1">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/act12.jpeg') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/act2.jpeg') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Sosialisasi </br>Produk Digital</h2>
                        <p align="justify"> Kami melakukan sosialisasi kepada Sales Force untuk ikut menyebarluaskan adanya komunitas IndihomeGuru bagi tiap-tiap pelanggan yang ingin berlangganan</p>
                        <!-- <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Basically we'll teach you step by step what you need to do</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">In order to develop your company and reach new heights</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-check"></i>
                                <div class="media-body">Everyone will be pleased from stakeholders to employees</div>
                            </li>
                        </ul> -->
                        <!-- <a class="btn-solid-reg popup-with-move-anim" href="<?php echo base_url('#details-lightbox-2') ?>">LIGHTBOX</a> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->

    <!-- Details Lightboxes -->
    <!-- Details Lightbox 1 -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/details-lightbox-1.svg') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Design And Plan</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="<?php echo base_url('#request') ?>">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="<?php echo base_url('#screenshots') ?>">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 1 -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/details-lightbox-2.svg') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Search To Optimize</h3>
                    <hr>
                    <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">List building framework</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Easy database browsing</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">User administration</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Automate user signup</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Quick formatting tools</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">Fast email checking</div>
                        </li>
                    </ul>
                    <a class="btn-solid-reg mfp-close page-scroll" href="<?php echo base_url('#request') ?>">REQUEST</a> <a class="btn-outline-reg mfp-close as-button" href="<?php echo base_url('#screenshots') ?>">BACK</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->


    <!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Promo</h2>
                    <p class="p-heading p-large">Promo Indihome berbasis Komunitas Guru dengan harga yang terjangkau</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">STARTER</div>
                            <div class="card-subtitle">2P Connectivity</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">Rp</span><span class="value">225.000</span>
                                <div class="frequency">Monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4>10 Mbps</h4></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4> 100 Menit Telepon </h4></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4> IndiHome Study</h4></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body"><h4> 95 Channel TV </h4></div>
                                </li>
                                <!--<li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>-->
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="<?php echo base_url('#request') ?>">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <!-- <div class="card">
                        <div class="card-body">
                            <div class="card-title">MEDIUM</div>
                            <div class="card-subtitle">Very appropriate for the short term</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">Rp</span><span class="value">200k</span>
                                <div class="frequency">monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Improve Your Email Marketing</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">User And Admin Rights Control</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">List Building And Cleaning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">Collected Data Management</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-times"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="<?php echo base_url('#request') ?>">REQUEST</a>
                            </div>
                        </div>
                    </div>--> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
                    <div class="card">
                        <div class="label">
                            <p class="best-value">Best Value</p>
                        </div>
                        <div class="card-body">
                            <div class="card-title">COMPLETE</div>
                            <div class="card-subtitle">3P Connectivity</div>
                            <hr class="cell-divide-hr">
                            <div class="price">
                                <span class="currency">Rp</span><span class="value">350.000</span>
                                <div class="frequency">Monthly</div>
                            </div>
                            <hr class="cell-divide-hr">
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4>10 Mbps</h4></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4>100 Menit Telepon </h4></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4> IndiHome Study</h4></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-check"></i><div class="media-body"><h4> 95 Channel TV </h4></div>
                                </li>
                                <!--<li class="media">
                                    <i class="fas fa-check"></i><div class="media-body">More Planning And Evaluation</div>
                                </li>-->
                            </ul>
                            <div class="button-wrapper">
                                <a class="btn-solid-reg page-scroll" href="<?php echo base_url('#request') ?>">REQUEST</a>
                            </div>
                        </div>
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->


    <!-- Testimonials -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/testimonials-2-men-talking.svg') ?>" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Testimoni</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="<?php echo base_url('assets/images/testimonial-1.svg') ?>" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Saya sangat terbantu dengan adanya komunitas guru di Indihome guru.</p>
                                            <p class="testimonial-author">Alika - Guru SD</p>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="<?php echo base_url('assets/images/testimonial-2.svg') ?>" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Komunitas Guru Indihome benar-benar membantu pekerjaan saya, dan saya juga jadi banyak kenalan baru dari sini!</p>
                                            <p class="testimonial-author">Aini - Guru Bimbel</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="<?php echo base_url('assets/images/testimonial-3.svg') ?>" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Sangat bermanfaat untuk saya dan murid-murid sekolah saya.</p>
                                            <p class="testimonial-author">Anto - Kepala Sekolah</p>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->


    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Follow US On</h2>
                    <p class="p-heading p-large"></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/IG.png') ?>" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong>Wifiid_Jaktim</strong></p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/Twitter.png') ?>" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>Wifiid_Jaktim</strong></p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="<?php echo base_url('assets/images/YT.png') ?>" alt="alternative">
                        </div> <!-- end of image wrapper -->
                        <p class="p-large"><strong>WIFI ID JAKTIM</strong></p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Kalau ada pertanyaan, yuk kontak kami!</li>
                        <li><i class="fas fa-map-marker-alt"></i>Telkom Landmark Tower, 39-nd floor Jl. Jendral Gatot Subroto, Mampang Prapatan Jakarta</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="<?php echo base_url('tel:147') ?>">147</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="<?php echo base_url('mailto:office@evolo.com') ?>">customercare@telkom.co.id</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="<?php echo ('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2538729786747!2d106.81598431471681!3d-6.230224295490124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f158843078e3%3A0xce64d3c98a332ab0!2sThe%20Telkom%20Hub!5e0!3m2!1sid!2sid!4v1602297279658!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"') ?>" allowfullscreen></iframe>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <p>Perkembangan era komunikasi terus berlanjut, untuk itu sangat perlu bagi kita mengikuti arus informasi dengan baik dan tepat. Kami mampu menjadi media yang dapat memfasilitasi setiap inovasi baru untuk Komunitas maupun berita menarik lainnya!</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    	
    <!-- Scripts -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> <!-- Bootstrap framework -->
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js') ?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?php echo base_url('assets/js/swiper.min.js') ?>"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.js') ?>"></script> <!-- Magnific Popup for lightboxes -->
    <script src="<?php echo base_url('assets/js/validator.min.js') ?>"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script> <!-- Custom scripts -->
</body>
</html>

