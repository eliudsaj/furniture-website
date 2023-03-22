<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Meta Tags -->
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
     <!-- Author -->
     <meta name="author" content="Themes Industry">
     <!-- description -->
     <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
     <!-- keywords -->
     <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
     <!-- Page Title -->
     <title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>">
    <!-- Bundle -->
    <link href="vendor/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="vendor/css/revolution-settings.min.css" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="vendor/css/wow.css" rel="stylesheet">
    <link href="furniture/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!--start loader-->
<div class="loader center-block">
    <div class="loader-spinner"></div>
</div>
<!--loader end-->

<div id="header"></div>
<header id="home">
    <div class="container">
        <div class="upper-nav">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <div class="contact-info">
                        <span><i class="fa fa-phone"></i> 20-2102710-13</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="contact-social-icons d-flex justify-content-end align-items-center">
                        <ul class="upper-social-icons">
                            <li><a href="#" class="facebook-text-hvr"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter-text-hvr"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin-text-hvr"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="instagrams-text-hvr"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg nav-line">
                        <a class="navbar-brand bg-white logo-with-background" href="index.php"><img src="<?php echo validate_image($_settings->info('logo')) ?>" width="100" height="50" class="d-inline-block align-top" alt="" loading="lazy"></a>
                        
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link wow fadeInUp scroll" href="#banner">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInDown scroll" href="#about-sec">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInUp scroll" href="#company-portfolio-section">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInDown scroll" href="#testimonial-sec">Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInUp scroll" href="#lastest-blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInDown scroll" href="#contact-sec">Contact</a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center">
                      <?php if(!isset($_SESSION['userdata']['id'])): ?>
                        <button class="btn btn-outline-dark ml-2" id="login-btn" type="button">Login</button>
                        <?php else: ?>
                        <a class="text-dark mr-2 nav-link text-white" href="furniture/?p=cart">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill" id="cart-count">
                              <?php 
                              if(isset($_SESSION['userdata']['id'])):
                                $count = $conn->query("SELECT SUM(quantity) as items from `cart` where client_id =".$_settings->userdata('id'))->fetch_assoc()['items'];
                                echo ($count > 0 ? $count : 0);
                              else:
                                echo "0";
                              endif;
                              ?>
                            </span>
                        </a>
                        
                            <a href="furniture/?p=my_account" class="text-dark  nav-link text-white"><b> Hi, <?php echo $_settings->userdata('firstname')?>!</b></a>
                            <a href="furniture/logout.php" class="text-dark  nav-link text-white"><i class="fa fa-sign-out-alt"></i></a>
                        <?php endif; ?>
                    </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Side Menu Button-->
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <i class="lni lni-menu"></i>
    </a>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <a class="navbar-brand"><img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="logo"></a>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#banner">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll1" href="#about-sec">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#company-portfolio-section">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#testimonial-sec">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#lastest-blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#contact-sec">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100 d-flex justify-content-center">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a> </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
            </div>
        </div>
        <svg class="separator__svg" id="site-mmenu-svg" width="100%"  viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M 100 100 V 10 L 0 100"/>
            <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
        </svg>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<div class="banner" id="banner">

    <div class="image-holder2">
        <img src="furniture/img/lamb.png"  class="wow bounceInDown header-image-1" data-wow-duration="1.5s" data-wow-delay="1.2s" alt="sofa">
    </div>

    <div class="container-fluid">
        <div class="row banner-row">
            <div class="col-12 d-flex justify-content-center align-items-center text-center">
                <div class="banner-text-left wow fadeInLeft"><br>
                    <h1>BEYOND 2000</h1>
                    <p>Transform your space with Beyond 2000 Funiture</p>
                    <a href="furniture/" class="btn blue-and-black-btn rounded-pill">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <svg id="banner_svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
    </svg>
    <div class="image-holder1">
    <img src="furniture/img/header-image1.png"  class="wow slideInLeft header-image-1" data-wow-duration=".8s"  data-wow-delay="1s" alt="sofa">
    </div>

    <div class="map-item map-item1 wow fadeIn" data-wow-delay="1s">
        <a class="marker marker1" href="#marker1"></a>

        <aside id="marker1" class="map-popup">
            <h3 class="popup-title">Customer Care</h3>
            <p>Please feel free to contact a representative nearest you: Find Local Store or use our Web APP, to discuss any of the items on our website.</p>
            <a class="btn" href="#">Find Out More</a>
        </aside>
    </div>

    <div class="map-item map-item2 wow fadeIn" data-wow-delay="1.5s">
        <a class="marker marker2" href="#marker2"></a>

        <aside id="marker2" class="map-popup">
            <h3 class="popup-title">Office Furnishing</h3>
            <p>Beyond2000 Furnishings offers complimentary space planning services. Stop by our your local showroom and speak to one of our sales professionals. Ask about our on-site estimates within our store's local service area, space planning and large volume discounts. We are here to help</p>
            <a class="btn" href="#">Find Out More</a>
        </aside>
    </div>

    <div class="map-item map-item3 wow fadeIn" data-wow-delay="2s">
        <a class="marker marker3" href="#marker3"></a>
        <aside id="marker3" class="map-popup">
            <h3 class="popup-title">Furniture Delivery</h3>
            <p>We offer Free delivery within Nairobi.</p>
            <a class="btn" href="#">Find Out More</a>
        </aside>
    </div>

    <div class="map-item map-item4 wow fadeIn" data-wow-delay="2.5s">
        <a class="marker marker4" href="#marker4"></a>
        <aside id="marker4" class="map-popup">
            <h3 class="popup-title">Beyond 2000</h3>
            <p>Beyond2000 is focused on providing unsurpassed customer satisfaction as well as practical and professional office solutions to you, our customer.</p>
            <a class="btn" href="#">Find Out More</a>
        </aside>
    </div>

    <div class="map-item map-item5 wow fadeIn" data-wow-delay="3s">
        <a class="marker marker5" href="#marker5"></a>
        <aside id="marker5" class="map-popup">
            <h3 class="popup-title">Contact Us</h3>
            <p>Address: Address: P.O. Box 46667-00100 GPO Nairobi ,Kenya.<br>
                                 Cellphone: 0736 354 198<br>
                                 Phone: +254-20-2102711-14/16.<br>
                                  Fax: +254-20-2251358 /2102708<br>
                                 Email: msales@munshiram.com</p>
            <a class="btn" href="#">Find Out More</a>
        </aside>
    </div>

</div>

<!--About sec Start-->
<section class="about-sec padding-bottom padding-top bg-1" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left wow fadeInLeft" data-wow-delay=".2s">
                <div class="heading-area">
                    <span class="sub-heading">Established since 1977.</span>
                    <h4 class="heading">About</h4>
                    <p class="text mt-2"><small>
                        The company was first established as a trading house representing the local as well as international brands of office products.MIBM Limited was established in 1977 and incorporated in 1980. It focuses mainly on three divisions namely Office Furniture, Office Equipment and automation. MIBM Limited manufactures wooden and metallic office /institutional furniture under the registered BEYOND 2000 trademark. We also import high quality office chairs and assemble them as finished products. Our products are designed to fit and meet customer's choice and reliability. With technology advancing our chairs meet comfort ergonomically through back support and healthy seating.</small>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center text-center text-lg-left  wow fadeInRight" data-wow-delay=".2s">
                <div class="detail-area">
                    <h4 class="heading">Vision</h4>
                    <p class="text"><small>
                        To be the best furniture manufacturers in Kenya of desking, chairs and cabinets designed with the best functionality, quality and affordable pricing..</small>
                    </p>
                    <h4 class="heading">Mission Statement</h4>
                    <p class="text"><small>
                        To provide comprehensive supply solutions of high quality products to our customers competitively and strive to become market leaders of good service</small>
                    </p>
                    <h4 class="heading">History and Market Presence</h4>
                    <p class="text mt-2"><small>
                        Beyond2000 oparates as a registered trademark under MIBM for manufacture of wooden and metallic office /institutional furniture.We are in position to offer you quality products, comfort, expert experience and professionalism that goes into designing your space whether an office, your home or an interior space to be decorated. We offer services and products in office Equipment, Technology Automation and Furniture Manufacturing both in kenya and with a branch network all over East Africa.</small>
                    </p>
                </div>
            </div>
        </div>
        <div class="row features padding-top">
            <div class="col-12 col-lg-4 text-center wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-card">
                   <span>01.</span>
                    <h4 class="feature-heading">Outdoor Furniture</h4>
                    <p class="text">Enjoy complee peace of mind with after sales services<br>With Beyond 2000 Furniture, you can enjoy complete peace of mind that your furniture is taken care of. our after sales services including repairs,fitting and assembly ensures that you have a hassle-free experience</p>
                </div>
            </div>
            <div class="col-12 col-lg-4 text-center wow fadeInUp" data-wow-delay=".5s">
                <div class="feature-card">
                    <span>02.</span>
                    <h4 class="feature-heading">Office Furniture</h4>
                    <p class="text">Transform Your Office with Beyond 2000 Furniture<br>Experience the highest quality furniture built for durability and comfort. Our range of office furniture and home ittings are designed to last for years to come</p>
                    <a href="#about-sec" class="btn btn-large btn-rounded white-tran-black-btn-solid-border scroll">Shop Now</a>
                </div>
                
            </div>
            <div class="col-12 col-lg-4 text-center wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-card">
                    <span>03.</span>
                    <h4 class="feature-heading">Home Furniture</h4>
                    <p class="text">We are in position to offer you quality products, comfort, expert experience and professionalism that goes into designing your space or an interior space to be decorated</p>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!--About sec End-->

<!--Skill section start-->
<section class="skill-sec" id="skill-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 text-center text-lg-left">
                <div class="skill-details">
                    <h2 class="title">We have furniture <span>Expertise In following areas.</span> </h2>
                </div>
                <div class="skill-bars">
                    <ul class="text-left list-unstyled">
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInLeft">
                            <h6>Designing</h6>
                            <div class="progress bar" data-width="100%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"> <span>100%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInLeft" data-wow-delay=".5s">
                            <h6>Space Planning</h6>
                            <div class="progress bar" data-width="100%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"><span>100%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInLeft" data-wow-delay=".6s">
                            <h6>Custom Furniture</h6>
                            <div class="progress bar" data-width="100%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"><span>100%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInLeft" data-wow-delay=".7s">
                            <h6>Manufacturing</h6>
                            <div class="progress bar" data-width="100%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar"><span>100%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="furniture/index.php" class="btn btn-large btn-rounded white-tran-black-btn">Shop Now</a>
            </div>
            <div class="col-12 col-lg-6 text-center position-relative">
                <div class="skill-img-area">
                    <div class="skill-image-heading">
                        <h4>55 Years</h4>
                        <span>In furniture market</span>
                    </div>
                </div>
                <div class="skill-img-holder wow slideInRight parallax" data-wow-delay=".5s">
                    <img src="furniture/img/chair.png" alt="chair">
                </div>
            </div>
        </div>
    </div>
    <svg class="separator__svg" id="skill-footer-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
</section>
<!-- Skill section start-->

<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                    <h1 class="heading">Awesome</h1>
                    <h1 class="heading">Furniture Design</h1>
                </div>
                <div class="col-md-12 pt-5">
                    <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
                       
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> ALL</div>
                        <div data-filter=".web" class="cbp-filter-item">SEATING</div>
                        <div data-filter=".logo" class="cbp-filter-item">OUTDOOR</div>
                        <div data-filter=".mobile" class="cbp-filter-item">PARTITIONING</div>
                        <div data-filter=".development" class="cbp-filter-item">DESKS & WORKSTATIONS</div>
                        
                        
                    </div>
                    <!--<div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
                        
                    </div> -->

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                        <div class="cbp-item web logo">
                            <a href="furniture/img/SF-08.jpg" class="cbp-caption cbp-lightbox" data-title="Beyond 2000<br>The Best Deal You Will Find!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="furniture/img/SF-08.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Comfortable Chair</h4>
                                        <p class="p-hover-des">Comfortable Modern Chairs</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item mobile web">
                            <a href="furniture/img/bn1.jpg" class="cbp-caption cbp-lightbox" data-title="Beyond 2000<br>The Best Deal You Will Find!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="furniture/img/glass-partitions.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Partitions</h4>
                                        <p class="p-hover-des">Modern Partitions</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item print logo development web mobile">
                            <a href="furniture/img/outdoor.JPG" class="cbp-caption cbp-lightbox" data-title="Beyond 2000<br>The Best Deal You Will Find!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="furniture/img/outdoor.JPG" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Comfortable Lounge Chairs</h4>
                                        <p class="p-hover-des">Lounge Chairs With Wooden Work</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item logo development">
                            <a href="furniture/img/desk.jpg" class="cbp-caption cbp-lightbox" data-title="Beyond 2000<br>The Best Deal You Will Find!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="furniture/img/desk.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Desks & Workstations</h4>
                                        <p class="p-hover-des">Modern Desks & Workstations</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div id="js-loadMore-lightbox-gallery" class="cbp-l-loadMore-button text-data wow fadeInUp" data-wow-delay="650ms">
                        <div class="row portfolio-foot-detail text-data-inner">
                            <div class="col-7 col-lg-4 offset-lg-6 text-left pl-4">
                                <span class="p-text">We've Completed More Than</span>
                                <h4 class="p-num">530</h4>
                                <span class="p-text">Projects for Our amazing Clients</span>
                            </div>
                            <div class="col-5 col-lg-2 d-flex justify-content-end align-items-center"><a href="furniture/" class="btn blue-and-black-btn rounded-pill"> ALL FURNITURE </a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->

<!--brands section start-->


<section class="section" id="brand">
    <div class="container">
        <h4 class="heading text-center text-lg-left">Our Partners</h4>
        <!--Partner Slider-->
        <div class="clients-logo-wrapper text-center row" id="wrap">
        <?php 
            $patners = array(
            array('name' => 'Brand 1', 'image' => 'brand1.jpg'),
            array('name' => 'Brand 2', 'image' => 'brand2.png'),
            array('name' => 'Brand 3', 'image' => 'brand3.png'),
            array('name' => 'Brand 4', 'image' => 'brand4.png'),
            array('name' => 'Brand 5', 'image' => 'brand5.jpg'),
            array('name' => 'Brand 6', 'image' => 'brand6.PNG'),
            // add more brands here
            );
            
            foreach ($patners as $patner) {
                echo '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6"><img style="object-fit:contain" alt="' . $patner['name'] . '" src="furniture/img/brands/' . $patner['image'] . '"></div>';
            }
        ?>
        </div>
    </div>
</section>

<!--brands section end-->

<!--testimonial section start-->
<section class="testimonial-sec padding-top position-relative" id="testimonial-sec">

    <div class="container">
        <div class="testimonial-area">
            <div class="row">
                 <!--<div class="col-12 col-lg-6">
                    <div class="testimonial-carousel">
                        <div class="testimonial-box owl-carousel owl-theme">
                            <?php
                                //connect to the database

                                //fetch testimonials data
                                $sql = "SELECT * FROM testimonials";
                                $result = mysqli_query($conn, $sql);

                                //display testimonials
                                if(mysqli_num_rows($result) > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo '<div class="item text-center wow fadeInUp">';
                                        echo '<div class="icon-holder">';
                                        echo '<i class="fas fa-quote-right"></i>';
                                        echo '</div>';
                                        echo '<p class="text">'.$row['content'].'</p>';
                                        echo '<div class="img-holder">';
                                        echo '<img src="'.$row['image'].'">';
                                        echo '</div>';
                                        echo '<h4 class="user-name">'.$row['name'].'</h4>';
                                        echo '</div>';
                                    }
                                }

                                //close connectio
                            ?>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 col-lg-6">
                    <div class="testimonial-carousel">
                        <div class="testimonial-box owl-carousel owl-theme">
                            <div class="item text-center wow fadeInUp">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="text">
                                    I was looking for a unique piece of furniture to add to my collection, and I found it at this store. They had a great selection of vintage and antique furniture, and the prices were very reasonable. The staff was also very knowledgeable and helpful in answering all of my questions. I will definitely be returning to this store in the future.
                                </p>
                                <div class="img-holder">
                                    <img src="furniture/img/test1.jpg">
                                </div>
                                <h4 class="user-name">Sara Williams</h4>
                            </div>
                            <div class="item text-center wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon-holder">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <p class="text">
                                    I recently purchased a beautiful dining table and chairs from this furniture store, and I couldn't be happier with my purchase. The quality of the furniture is exceptional and the customer service was top-notch. I highly recommend this store to anyone looking for high-quality furniture."


                                </p>
                                <div class="img-holder">
                                    <img src="furniture/img/test2.jpg">
                                </div>
                                <h4 class="user-name">Julia Miltese</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 position-relative text-center">
                    <div class="testimonial-img-area">
                        <div class="testimonial-title">
                            <h1 class="heading">We make sure <span>Customer Satisfaction</span></h1>
                        </div>
                        <div class="test-img-holder wow slideInRight" data-wow-delay=".3s">
                            <img src="furniture/img/blog%20(1).jpg" alt="table"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="separator__svg" id="testimonial-foot-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
</section>
<!--testimonial section end-->

<!--team section start-->
<section class="team-section" id="team-section">
  <div class="container position-relative">
    <div class="row">
      <div class="col-12 col-lg-12 text-center">
        <div class="team-details">
          <h6 class="sub-title main-color">Comprehensive range of products.</h6>
          <h2 class="title">Delivering Worldwide <span>Trending Products</span></h2>
        </div>
      </div>
      <div class="col-12 col-lg-12 team-member-area">
        <div class="testimonial-team owl-carousel owl-theme">
          <?php 
          $brands = isset($_GET['b']) ? json_decode(urldecode($_GET['b'])) : array();
          ?>
          <?php 
          $where = "";
          if(count($brands)>0)
          $where = " and p.brand_id in (".implode(",",$brands).") " ;
          $products = $conn->query("SELECT p.*,b.name as bname,b.description FROM `products` p inner join brands b on p.brand_id = b.id where p.status = 1 {$where} group by bname");
          while($row = $products->fetch_assoc()):
            $upload_path = base_app.'/uploads/product_'.$row['id'];
            $img = "";
            if(is_dir($upload_path)){
              $fileO = scandir($upload_path);
              if(isset($fileO[2]))
              $img = "uploads/product_".$row['id']."/".$fileO[2];
              // var_dump($fileO);
            }
            foreach($row as $k=> $v){
              $row[$k] = trim(stripslashes($v));
            }
            $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
            $inv = array();
            while($ir = $inventory->fetch_assoc()){
              $inv[] = number_format($ir['price']);
            }
          ?>
          <div class="item text-center wow fadeInUp">
 
    <div class="image-holder furniture-image-holder">
      <img src="<?php echo validate_image($img) ?>" alt="<?php echo $row['name'] ?>" class="img-fluid furniture-image">
    </div>
    <div class="product-details">
        <h4 class="product-name"><?php echo $row['bname'] ?></h4>
        <p class="product-price"><?php echo $row['description'] ?></p>
    </div>

  <div class="buttons">
    <!--<a href="furniture/product-listing.php?id=<?php echo $row['id'] ?>" class="btn blue-and-black-btn rounded-pill">View More</a>-->
   <!-- <a href="#" class="btn btn-outline-primary btn-sm shop-now-btn">Shop Now</a> -->
  </div>
</div>

          <?php endwhile; ?>          
        </div>
      </div>
    </div>
    <a class='circle' id="team-circle-left"><i class="lni lni-chevron-left"></i></a>
    <a class='circle' id="team-circle-right"><i class="lni lni-chevron-right"></i></a>
      <div class="col-12 d-flex justify-content-center align-items-center text-center">
  <a href="furniture/" class="btn blue-and-black-btn rounded-pill">Shop Now</a>
</div>
    </div>

</section>

<!--team section start-->

<!--Lastest Blog section start-->
<section class="lastest-blog" id="lastest-blog">

    <div class="container position-relative">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="blog-content slider-detail wow fadeInDown">
                    <div class="slider-slide">
                        <h1>From Our Blog </h1>
                        <h1>Craftsmanship is an Art</h1>
                        <p>In a world where technology is rapidly advancing, there is something to be said about the art of craftsmanship. The art of creating something with your own two hands is a skill that is often undervalued in today's society. It's a skill that requires patience, dedication, and a passion for creating something that is not only beautiful but functional as well...</p>
                        <a href="furniture/standalone.php" class="btn btn-large btn-rounded white-tran-black-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 position-relative">
                <div class="blog-img wow fadeInRight" data-wow-delay=".3s">
                    <img src="furniture/img/sales_rep.jpg">
                </div>
            </div>
        </div>
    </div>

    <svg class="separator__svg" id="blog-foot-svg" width="100%" height="200" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0"/>
    </svg>
</section>
<!--Lastest Blog section start-->

<!--Contact section start-->
<section class="contact-sec" id="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h4 class="heading text-center text-lg-left">Get In Touch</h4>
                <form class="row contact-form wow fadeInLeft" id="contact-form-data">
                    <div class="col-sm-12" id="result"></div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="userName" placeholder="Your Name" class="form-control">
                        <input type="email" name="userEmail" placeholder="Email Address *" class="form-control">
                        <input type="text" name="userSubject" placeholder="Subject" class="form-control">
                    </div>
                    <div class="col-12 col-md-7">
                        <textarea class="form-control" name="userMessage" rows="6" placeholder="Your Message"></textarea>
                    </div>
                    <div class="col-12">
                        <a href="javascript:void(0);" class="btn black-and-black-btn rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <b>Send Message</b>
                        </a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5 text-center text-lg-left position-relative">
                <div class="contact-details wow fadeInRight">
                    <h4 class="heading">Our Location</h4>
                    <p class="text">
                        Our customer service team is available to assist you with any inquiries you may have.
                    </p>
                    <ul>
                        <li><i aria-hidden="true" class="fas fa-map-marker-alt"></i> Punch Towers, National Park East Gate Road, off Mombasa Road </li>
                        <li><i aria-hidden="true" class="fas fa-phone-volume"></i>
                            <span>20-2102711-14</span>
                          
                        </li>
                        <li><i aria-hidden="true" class="fas fa-paper-plane"></i>msales@munshiram.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact section end-->

<!--Footer Start-->
<footer class="footer-style-1">

    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-6">
                <div class="footer-social text-center text-lg-left ">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-6 text-center text-lg-right">
                <p class="company-about fadeIn">© Beyond 200 <a href="javascript:void(0);">MIBM</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->





</body>
<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/jquery.fancybox.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/parallaxie.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<!--custom js-->
<script src="vendor/js/contact_us.js"></script>
<script src="furniture/js/script.js"></script>


</html>