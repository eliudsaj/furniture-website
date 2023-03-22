<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php 
$brands = isset($_GET['b']) ? json_decode(urldecode($_GET['b'])) : array();
?>
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
    <link href="<?php echo validate_image($_settings->info('logo')) ?>" rel="icon">
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
    <link href="furniture/css/custom.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".side_menu" data-offset="90">


<!--start loader-->

<!--loader end-->

<div id="header"></div>
<header id="home">
    <div class="container">
        <div class="upper-nav">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <div class="contact-info">
                        <span><i class="fa fa-phone"></i> 20-2102710-137</span>
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
       <!-- main nav -->
        <div class="main-nav">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg nav-line">
                        <a class="navbar-brand bg-dark logo-with-background" href="../index.php"><img ssrc="<?php echo validate_image($_settings->info('logo')) ?>"></a>
                        <form class="form-inline" id="search-form">
                          <div class="input-group">
                             <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                              <div class="input-group-append">
                              <button class="btn btn-outline-light btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                         </form>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link wow fadeInUp" href="../index.php#header">Home</a>
                                </li>
                                
                        <?php 
                            $cat_qry = $conn->query("SELECT * FROM categories where status = 1  limit 5"); 
                            $count_cats =$conn->query("SELECT * FROM categories where status = 1 ")->num_rows;
                               while($crow = $cat_qry->fetch_assoc()):
                                     $sub_qry = $conn->query("SELECT * FROM sub_categories where status = 1 and parent_id = '{$crow['id']}'");
                                      if($sub_qry->num_rows <= 0):
                         ?>
                                   <li class="nav-item"><a class="nav-link d-block wow fadeInUp" aria-current="page" href="productS.php?p=products&c=<?php echo md5($row['id']) ?>"><?php echo $crow['category'] ?></a></li>
                        
                        <?php else: ?>
                        <li class="nav-item dropdown">
                          <a class="nav-link text-dark dropdown-toggle" id="navbarDropdown<?php echo $crow['id'] ?>" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><?php echo $crow['category'] ?></a>
                            <ul class="dropdown-menu  p-0" aria-labelledby="navbarDropdown<?php echo $crow['id'] ?>">
                              <?php while($srow = $sub_qry->fetch_assoc()): ?>
                                <li><a class="dropdown-item border-bottom" href="products.php?p=products&c=<?php echo md5($crow['id']) ?>&s=<?php echo md5($srow['id']) ?>"><?php echo $srow['sub_category'] ?></a></li>
                            <?php endwhile; ?>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php endwhile; ?>
                        <?php if($count_cats > 5): ?>
                        <li class="nav-item"><a class="nav-link d-block wow fadeInDown" href="view_categories.php">All categories</a></li>
                                
                        <?php endif; ?>
                        
                    </ul>
                      <div class="d-flex align-items-center">
                      <?php if(!isset($_SESSION['userdata']['id'])): ?>
                        <button class="btn btn-outline-dark ml-2" id="login-btn" type="button">Login</button>
                        <?php else: ?>
                        <a class="text-dark mr-2 nav-link text-white" href="../?p=cart">
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
                        
                            <a href="../?p=my_account" class="text-dark  nav-link text-white"><b> Hi, <?php echo $_settings->userdata('firstname')?>!</b></a>
                            <a href="logout.php" class="text-dark  nav-link text-white"><i class="fa fa-sign-out-alt"></i></a>
                        <?php endif; ?>
                    </div>
                          
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    <!--Side Menu Button-->
        
    </div>
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
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about-sec">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#company-portfolio-section">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#testimonial-sec">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#lastest-blog">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact-sec">Contact</a>
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
        
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>


</header>

<!--Banner Start-->
<section class="page-title1">
    <!-- <div class="bg-overlay bg-black opacity-2"></div>-->
    <div class="container">
        <div class="standalone-content-data">
            <h2 class="hide-cursor">Beyond 2000 Furniture</h2>
            <ul class="page-breadcrumb link">
                <li><a href="../index.php"><span class="icon fas fa-home"></span>Home</a></li>
                <li><a href="view_categories.php">All Categories</a></li>
                <li><a href="standalone.html">Outdoor</a></li>
            </ul>
        </div>
    </div>
   <svg id="standalone-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
    </svg>
</section>
<!--Banner End-->