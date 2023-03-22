<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
 <?php 
$title = "All Product Categories";
$sub_title = "";
if(isset($_GET['c']) && isset($_GET['s'])){
    $cat_qry = $conn->query("SELECT * FROM categories where md5(id) = '{$_GET['c']}'");
    if($cat_qry->num_rows > 0){
        $title = $cat_qry->fetch_assoc()['category'];
    }
 $sub_cat_qry = $conn->query("SELECT * FROM sub_categories where md5(id) = '{$_GET['s']}'");
    if($sub_cat_qry->num_rows > 0){
        $sub_title = $sub_cat_qry->fetch_assoc()['sub_category'];
    }
}
elseif(isset($_GET['c'])){
    $cat_qry = $conn->query("SELECT * FROM categories where md5(id) = '{$_GET['c']}'");
    if($cat_qry->num_rows > 0){
        $title = $cat_qry->fetch_assoc()['category'];
    }
}
elseif(isset($_GET['s'])){
    $sub_cat_qry = $conn->query("SELECT * FROM sub_categories where md5(id) = '{$_GET['s']}'");
    if($sub_cat_qry->num_rows > 0){
        $title = $sub_cat_qry->fetch_assoc()['sub_category'];
    }
}
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
        <?php include('main_nav.php'); ?>
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
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#about-sec">About</a>
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
        
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>


</header>

<!--Banner Start-->
<section class="page-title1">
    <div class="bg-overlay bg-black opacity-2"></div>
   
    
</section>
<!--Banner End-->

<!--main page content-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-2 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-2 justify-content-center">
           
            <?php 
                $whereData = "";
                $categories = $conn->query("SELECT * FROM `categories` where status = 1 order by category asc ");
                while($row = $categories->fetch_assoc()):
                    foreach($row as $k=> $v){
                        $row[$k] = trim(stripslashes($v));
                    }
                    $row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));
            ?>
          <div class="col-12 col-md-4 mb-6 mb-md-2">
                <a href="productS.php?p=products&c=<?php echo md5($row['id']) ?>" class="card category-item text-dark">
                <div class="card-body">
                        <div>
                            <h5 class="fw-bolder border-bottom border-primary"><?php echo $row['category'] ?></h5>
                        </div>
                            <p class="m-0 overflow-auto" style="max-height: 100px;"><?php echo $row['description'] ?></p>
                    </div>
                </a>
                </div>
            <?php endwhile; ?>
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
                <p class="company-about fadeIn">© Beyond 2000<a href="javascript:void(0);">MIBM</a>
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
    <script>
    function _filter(){
        var brands = []
            $('.brand-item:checked').each(function(){
                brands.push($(this).val())
            })
        _b = JSON.stringify(brands)
        var checked = $('.brand-item:checked').length
        var total = $('.brand-item').length
        if(checked == total)
            location.href="?";
        else
            location.href="?b="+encodeURI(_b);
    }
    function check_filter(){
        var checked = $('.brand-item:checked').length
        var total = $('.brand-item').length
        if(checked == total){
            $('#brandAll').attr('checked',true)
        }else{
            $('#brandAll').attr('checked',false)
        }
        if('<?php echo isset($_GET['b']) ?>' == '')
            $('#brandAll,.brand-item').attr('checked',true)
    }
    $(function(){
        check_filter()
        $('#brandAll').change(function(){
            if($(this).is(':checked') == true){
                $('.brand-item').attr('checked',true)
            }else{
                $('.brand-item').attr('checked',false)
            }
            _filter()
        })
        $('.brand-item').change(function(){
            _filter()
        })
    })

</script>

</body>
</html>