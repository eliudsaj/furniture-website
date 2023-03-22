<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
     <meta name="author" content="NGENX solutions limited">
     <!-- description -->
     <meta name="description" content="Beyond2000 offers a full line of office furniture solutions throughout Kenya and EastAfrica. Visit our expansive showrooms to see and touch the latest in quality furniture for your office, always offered at affordable prices. Our in-store, knowledgeable space planning specialists will create office space solutions to meet your vision and your budget.">
     <!-- keywords -->
     <meta name="keywords" content="MIBM, modern furniture, clean, modern furniture design, including innovation, sustainability, functionality, customization, desking, seating,furniture kenya, Beyond 2000, outdoor,partitions, multipurpose, branding, designer, freelancer, masonry, grid, faq">
    <!-- Page Title -->
    <title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link href="<?php echo validate_image($_settings->info('logo')) ?>"  rel="icon">
    <!-- Bundle -->
    <link href="../vendor/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="../vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="../vendor/css/revolution-settings.min.css" rel="stylesheet">
    <link href="../vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="../vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="../vendor/css/wow.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".side_menu" data-offset="90">


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
                        <a class="navbar-brand bg-white logo-with-background" href="../index.php"><img src="<?php echo validate_image($_settings->info('logo')) ?>" ></a>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link wow fadeInUp" href="../index.php#header">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInDown" href="../index.php#about-sec">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInUp" href="../index.php#company-portfolio-section">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInDown" href="../index.php#testimonial-sec">Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInUp" href="../index.php#lastest-blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-block wow fadeInDown" href="../index.php#contact-sec">Contact</a>
                                </li>
                            </ul>
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
            <a class="navbar-brand"><img src="<?php echo validate_image($_settings->info('logo')) ?>" width="100" height="100" class="d-inline-block align-top"  alt="logo"></a>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#company-portfolio-section">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#testimonial-sec">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#lastest-blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#contact-sec">Contact</a>
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

<!--Banner Start-->
<section class="page-title parallax1">
<!--    <div class="bg-overlay bg-black opacity-2"></div>-->
    <div class="container">
        <div class="standalone-content-data">
            <h2 class="hide-cursor">BEYOND 2000</h2>
            <ul class="page-breadcrumb link">
                <li><a href="../index.php"><span class="icon fas fa-home"></span>Home</a></li>
                <li><a href="standalone.php">BEYOND 2000</a></li>
            </ul>
        </div>
    </div>
    <svg id="standalone-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
    </svg>
</section>
<!--Banner End-->

<!--main page content-->
<section class="main" id="main">
    <!-- START HEADING SECTION -->
    <div class="standalone-detail">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center wow slideInUp" data-wow-duration="2s">
                    <p class="sub-heading text-center">The Best Deal You Will Find!</p>
                    <h1 class="heading">BEYOND 2000 FURNITURE</h1>
                    <p class="para_text m-auto">Beyond2000 is focused on providing unsurpassed customer satisfaction as well as practical and professional office solutions to you, our customer. The Beyond name is synonymous with quality, value and unmatched customer service.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- START BLOG CONTENT -->
<div class="blog-content">
    <div class="container">
        <?php 
            $brands = isset($_GET['b']) ? json_decode(urldecode($_GET['b'])) : array();
        ?>
        <?php 
            $where = "";
            if(count($brands) > 0) {
                $where = " AND p.brand_id IN (" . implode(",", $brands) . ") " ;
            }
            $products = $conn->query("SELECT p.*, b.name as bname FROM `blog_posts` p INNER JOIN brands b ON p.brand_id = b.id WHERE p.status = 1 {$where} ORDER BY rand() LIMIT 10");
            $index = 0;
            while($row = $products->fetch_assoc()):
                $upload_path = base_app.'/uploads/blog_'.$row['id'];
                $img = "";
                if(is_dir($upload_path)) {
                    $fileO = scandir($upload_path);
                    if(isset($fileO[2])) {
                        $img = "uploads/blog_".$row['id']."/".$fileO[2];
                    }
                }
                $imagePosition = ($index % 2 == 0) ? 'right' : 'left';
        ?>
        <div class="row standalone-row align-items-center no-gutters">
            <div class="col-lg-6 stand-img-des<?php echo ($imagePosition == 'left') ? '' : ' order-lg-2'; ?>">
                <div class="blog-image wow hover-effect fadeIn<?php echo ($imagePosition == 'left') ? 'Right' : 'Left'; ?>">
                    <img src="<?php echo validate_image($img) ?>" alt="image">
                </div>
            </div>
            <div class="col-lg-6 stand-img-des<?php echo ($imagePosition == 'left') ? '' : ' order-lg-1'; ?>">
                <div class="d-inline-block">
                    <p class="sub-heading text-center"><?php echo $row['sub_heading']; ?></p>
                    <h2 class="gradient-text1"><?php echo $row['title']; ?></h2>
                    <?php 
                        $content = $row['content'];
                        if(strlen($content) > 400) {
                            $content = substr($content, 0, 400);
                            $content = substr($content, 0, strrpos($content, " "))."...";
                        }
                    ?>
                    <p class="para_text"><?php echo $content; ?> </p>
                </div>
                <a  href="blogs.php?p=blogs&id=<?php echo md5($row['id']) ?>" class="btn blue-and-black-btn rounded-pill">View more</a>
            </div>
        </div>
        <?php 
            $index++;
            endwhile;
        ?>
    </div>
</div>
                        <!--content
                        <div class="row standalone-row align-items-center no-gutters">
                            <div class="col-lg-6 order-lg-2">
                                <div class="blog-image wow hover-effect fadeInRight">
                                    <img src="img/work2.jpg" alt="image">
                                </div>
                            </div>
                            <div class="col-lg-6 stand-img-des">
                                <div class="d-inline-block">
                                    <p class="sub-heading text-center">Most flexible one page</p>
                                    <h2 class="gradient-text1">StandAlone Heading</h2>
                                    <p class="para_text">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. </p>
                                </div>
                            </div>
                        </div> -->

                        <!--content-->
                      
                        <!--content-->
                    </div>
                    <!-- END HEADING SECTION -->
                </div>
            </div>
        </div>
</section>
<!--main page content end-->

<!--Footer Start-->
<footer class="footer-style-1 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-6">
                <div class="footer-social text-lg-left">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="fab fa-google-plus-g"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="fab fa-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-6 text-lg-right">
                <p class="company-about fadeIn">© 2020 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<div class="fixed-nav-on-scroll fixed-nav-appear d-none">
    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="logo-fixed-scroll">
                <img src="img/logo-white.png" alt="logo">
            </div>
            <div class="fixed-icon-scroll">
                <a href="javascript:void(0)" id="sidemenu_toggle1"><i class="lni lni-menu"></i></a>
            </div>
        </div>
    </div>
</div>



<!-- vendersJavaScript -->

<script src="../vendor/js/bundle.min.js"></script>
<script src="../vendor/js/jquery.cubeportfolio.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="../vendor/js/parallaxie.min.js"></script>
<script src="../vendor/js/owl.carousel.min.js"></script>
<script src="../vendor/js/wow.min.js"></script>
<script src="../vendor/js/jquery.fancybox.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>