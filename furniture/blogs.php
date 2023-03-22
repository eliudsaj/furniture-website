<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="NGENX solutions limited">
    <!-- description -->
    <meta name="description" content="Beyond2000 offers a full line of office furniture solutions throughout Kenya and EastAfrica. Visit our expansive showrooms to see and touch the latest in quality furniture for your office, always offered at affordable prices. Our in-store, knowledgeable space planning specialists will create office space solutions to meet your vision and your budget.">
    <!-- keywords -->
    <meta name="keywords" content="MIBM, modern furniture, clean, modern furniture design, including innovation, sustainability, functionality, customization, desking, seating,furniture kenya, Beyond 2000, outdoor,partitions, multipurpose, branding, designer, freelancer, masonry, grid, faq">
    <!-- Page Title -->
    <title><?php echo $_settings->info('title') != false ? $_settings->info('title').' | ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="stylesheet" href="../vendor/css/jquery.fancybox.min.css">
    <!-- Favicon -->
    <link href="<?php echo validate_image($_settings->info('logo')) ?>"  rel="icon">
    <!-- Bundle -->
    <link rel="stylesheet" href="../vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="../vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="../blog/css/animate.min.css">
    <link rel="stylesheet" href="../blog/css/line-awesome.min.css">
    <link rel="stylesheet" href="../blog/css/mediaelementplayer.css">
    <link rel="stylesheet" href="../blog/css/mejs-controls.svg">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="../blog/css/style.css">
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

<body data-spy=" " data-target=".navbar" data-offset="150">

<!--start loader-->

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


<div id="page_content">

    <!--HEADER IMAGE-->
    <section id="search">
        <div class="container">
            <div class="row pt-lg-5">
            <?php 
                $brands = isset($_GET['b']) ? json_decode(urldecode($_GET['b'])) : array();
            ?>
            <?php 
                $where = "";
                if(count($brands) > 0) {
                    $where = " AND p.brand_id IN (" . implode(",", $brands) . ") " ;
                }
                $products = $conn->query("SELECT p.*, b.name as bname FROM `blog_posts` p INNER JOIN brands b ON p.brand_id = b.id WHERE md5(p.id) = '{$_GET['id']}'");
                while($row = $products->fetch_assoc()):
                    $upload_path = base_app.'/uploads/blog_'.$row['id'];
                    $img = "";
                    if(is_dir($upload_path)) {
                        $fileO = scandir($upload_path);
                        if(isset($fileO[2])) {
                            $img = "uploads/blog_".$row['id']."/".$fileO[2];
                        }
                    }
            ?>
           
                <div class="col-sm-12 col-ms-8 col-lg-8">
                    <div class="d-inline-block">
                        <p class="sub-heading text-center"><?php echo $row['sub_heading']; ?></p>
                        <h2 class="gradient-text1"><?php echo $row['title']; ?></h2>
                        <p class="para_text"><?php echo $row['content']; ?> </p>
                    </div>

                    <div class="blogN_images">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 pr-md-1 pr-lg-1">
                                <img class="image_blogS" src="img/blog-detail2.jpg" alt="">
                                </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 pl-md-1 pl-lg-1 padding_blog-img"><img class="image_blogS" src="img/blog-detail1.jpg" alt=""></div>
                            <div class="col-12 pt-2"> <img src="<?php echo validate_image($img) ?>" alt="image"></div>
                        </div>
                    </div>
                    <div class="horizontal-line mt-5"></div>

                    <div class="written">
                        <div class="written_outerbox mt-5 display">
                            <img class="written_img" src="img/comment_img.png" alt="">
                            <div class="written_text">
                                <p class="date text-black">WRITTEN BY</p>
                                <h1 class="sub-heading text-center"><?php echo $row['author']; ?></h1>
                                <p class="sub-heading text-center"><?php echo $row['sub_heading']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php 
                endwhile;
                    ?>
                    <div class="comment">
                        <div class="comment_write">
                            <div class="icon_comment">
                                <i class="far fa-user user_icon"></i>

                                <div class="icon_text">
                                    <h1 class="main_written font">Eliud k</h1>
                                    <p class="date margin_days text-black">20 days ago</p>
                                </div>
                            </div>
                            <p class="sub-heading mt-1">Your furniture is unique and stylish Guaranteeing transformation of office.Thank You</p>
                        </div>

                        <h1 class="comment_text text-black mt-6 mb-5">Write a comment</h1>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" required id="Name" name="Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email" required id="email" name="email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <span class="message-error error"></span>
                                        <textarea class="form-control" rows="5" required id="comment" placeholder="Comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn black-and-black-btn rounded-pill w-100 contact_btn" id="submit_btn">SUBMIT REQUEST</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4 order-2 order-md-1 margin_small">
                    <div class="search_outerbox">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-search" type="button"><i class="fa fa-search fa-fw"></i></button>
                        </span>
                        </div>
                    </div>

                    <section id="topics">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pr-0 pl-0">
                                    <div class="topic_outerbox mt-4">
                                        <h2>Topics</h2>
                                          <?php 
            $products = $conn->query("SELECT * from blog_posts ");
            while($row = $products->fetch_assoc()):
                $upload_path = base_app.'/uploads/product_'.$row['id'];
                $img = "";
                if(is_dir($upload_path)){
                    $fileO = scandir($upload_path);
                    if(isset($fileO[2]))
                        $img = "uploads/product_".$row['id']."/".$fileO[2];
                    // var_dump($fileO);
                }
                $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$row['id']);
                $_inv = array();
                foreach($row as $k=> $v){
                    $row[$k] = trim(stripslashes($v));
                }
                while($ir = $inventory->fetch_assoc()){
                    $_inv[] = number_format($ir['price']);
                }
        ?>
                                        <div class="inner-box">
                                            <ul class="sub-heading">
                                                <li><a href="#"><?php echo $row['title']; ?></a></li>
                                                
                                            </ul>
                                            
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="sale_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pr-0 pl-0 pt-4">
                                    <img class="sale_img" src="img/banner-bottom.jpg" alt="advertisment image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  START FOOTER SECTION  -->
    <section id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="footer_ul">
                        <li class="footer_list"><i class="lab la-facebook-f"></i></li>
                        <li class="footer_list"><i class="lab la-twitter"></i></li>
                        <li class="footer_list"><i class="lab la-google-plus"></i></li>
                        <li class="footer_list"><i class="lab la-linkedin-in"></i></li>
                        <li class="footer_list"><i class="lab la-instagram"></i></li>
                        <li class="footer_list"><i class="las la-envelope"></i></li>
                    </ul>
                    <p class="info footer_text"><i class="far fa-copyright"></i>Beyond 2000.</p>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JavaScript -->
<script src="../vendor/js/bundle.min.js"></script>

<!-- Plugin Js -->
<script src="../vendor/js/jquery.fancybox.min.js"></script>
<script src="../vendor/js/owl.carousel.min.js"></script>
<script src="../vendor/js/jquery.cubeportfolio.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="../vendor/js/jquery.themepunch.tools.min.js"></script>
<script src="../vendor/js/jquery.themepunch.revolution.min.js"></script>

<!-- custom script -->
<script src="../blog/js/mediaelement-and-player.min.js"></script>
<script src="../blog/js/wow.min.js"></script>
<script src="../blog/js/script.js"></script>
</body>
</html>