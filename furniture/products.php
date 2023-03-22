<?php require_once('../config.php'); ?>
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
    <link href="../vendor/css/bundle.min.css" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="../vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="../vendor/css/revolution-settings.min.css" rel="stylesheet">
    <link href="../vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="../vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="../vendor/css/wow.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
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

 </div>
</header>

<!--Banner Start-->
<section class="page-title1">
    <div class="bg-overlay bg-black opacity-2"></div>
   <svg id="standalone-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100"/>
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0"/>
    </svg>
    
</section>
<!--Banner End-->

<!--main page content-->
<section class="main" id="main">
    <div class="container-fluid row">
        <?php if(isset($_GET['c'])): ?>
        <div class="col-md-3 border-right mb-1 pb-3">
            <h3><b>Sub Categories</b></h3>
            <div class="list-group">
                <a href="products.php?p=products&c=<?php echo $_GET['c'] ?>" class="list-group-item <?php echo !isset($_GET['s']) ? "active" : "" ?>">All</a>
                <?php 
                $sub_cat = $conn->query("SELECT * FROM `sub_categories` where md5(parent_id) =  '{$_GET['c']}' ");
                while($row = $sub_cat->fetch_assoc()):
                ?>
                    <a href="products.php?p=products&c=<?php echo $_GET['c'] ?>&s=<?php echo md5($row['id']) ?>" class="list-group-item  <?php echo isset($_GET['s']) && $_GET['s'] == md5($row['id']) ? "active" : "" ?>"><?php echo $row['sub_category'] ?></a>
                <?php endwhile; ?>
            </div>
            <hr>
        </div>
        <?php endif; ?>
        <div class="<?php echo isset($_GET['c'])? 'col-md-9': 'col-lg-10 offset-md-1' ?>">
            <div class="container-fluid p-0">
                <?php if(isset($_GET['search'])): ?>
                    <h4 class="text-center py-5"><b>Search Results for '<?php echo $_GET['search'] ?>'</b></h4>
                <?php endif; ?>
            

                    <div class="row">
                    
                    <?php 
                        $whereData = "";
                        if(isset($_GET['search']))
                            $whereData = " and (p.name LIKE '%{$_GET['search']}%' or b.name LIKE '%{$_GET['search']}%' or p.specs LIKE '%{$_GET['search']}%')";
                        elseif(isset($_GET['c']) && isset($_GET['s']))
                            $whereData = " and (md5(category_id) = '{$_GET['c']}' and md5(sub_category_id) = '{$_GET['s']}')";
                        elseif(isset($_GET['c']) && !isset($_GET['s']))
                            $whereData = " and md5(category_id) = '{$_GET['c']}' ";
                        elseif(isset($_GET['s']) && !isset($_GET['c']))
                            $whereData = " and md5(sub_category_id) = '{$_GET['s']}' ";
                        $products = $conn->query("SELECT p.*,b.name as bname,b.description FROM `products` p inner join brands b on p.brand_id = b.id where p.status = 1 {$whereData} order by rand() ");
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
                
                    <div class="col-12 col-lg-3 mb-2">
                           <a href="view_product.php?p=view_product&id=<?php echo md5($row['id']) ?>">
                            <div class="furniture-item">
                             <div class="image-holder d-flex justify-content-center">
                                    <img src="<?php echo validate_image($img) ?>" alt="team1">
                                </div>
                                 <?php foreach($inv as $k=> $v): ?>
                                <h3 class="team-price text-center text-dark w-100"><?php echo $v ?></h3>
                                <?php endforeach; ?>
                                <p class="text text-center text-dark">Product: <?php echo $row['bname'] ?> </p>
                            </div>
                            </a>    
                    </div>
                    <?php endwhile; ?>
                    <?php 
                        if($products->num_rows <= 0){
                            echo "<h4 class='text-center'><b>No Product Listed.<br>Try our Advanced Search. If you still can't find what you're looking for, please call us at 20-2102710-137 or send us an Email - we will get it for you.</b></h4>";
                        }
                    ?>
                </div>
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