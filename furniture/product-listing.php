
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
    <!-- <div class="bg-overlay bg-black opacity-2"></div>-->
    
</section>
<!--Banner End-->

<!--main page content-->
<section class="main" id="main">
    <div class="product-listing">
        <div class="container">
            <div class="row">
                <div class="col-12 px-1 col-lg-2 border-right text-sm position-sticky order-2 order-lg-1">
                    <h4><b>Brands</b></h4>
                    <ul class="my-list">
                        
                      
                    <div class="icheck-primary d-inline ">
                        <input type="checkbox" id="brandAll" >
                        <label for="brandAll">
                            ALL
                        </label>
                    </div>
                            <?php 
                $qry = $conn->query("SELECT * FROM brands where status =1 order by name asc");
                while($row=$qry->fetch_assoc()):
                ?>
                            <li class="bordered-list" >
                    <div class="icheck-primary d-inline">
                        <input type="checkbox" id="brand-item-<?php echo $row['id'] ?>" <?php echo in_array($row['id'],$brands) ? "checked" : "" ?> class="brand-item" value="<?php echo $row['id'] ?>">
                        <label for="brand-item-<?php echo $row['id'] ?>">
                                <?php echo $row['name'] ?>
                        </label>
                    </div>
                </li>
                <?php endwhile; ?>
                       
                        
                        
                    </ul>
                </div>
                <div class="col-12 col-lg-9 offset-lg-1  order-1 order-lg-2">

                    <div class="row">
                           
                        <div class="col-12  mt-2 product-content">
                            <p class="sub-heading">Comprehensive range of producrts</p>
                            <h1 class="heading">OUR CATALOGUE</h1>
                        </div>

                          <?php 
                        $where = "";
                        if(count($brands)>0)
                        $where = " and p.brand_id in (".implode(",",$brands).") " ;
                        $products = $conn->query("SELECT p.*,b.name as bname FROM `products` p inner join brands b on p.brand_id = b.id where p.status = 1 {$where} order by rand()");
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
                           <a data-fancybox href="<?php echo validate_image($img) ?>">
                            <div class="furniture-item">
                                <div class="image-holder">
                                    <img src="<?php echo validate_image($img) ?>" alt="team1">
                                </div>
                            <div class="details">
                                <h5 class="team-price text-center "><?php echo $row['bname'] ?> - <?php echo $row['name'] ?></h5>
                                <?php foreach($inv as $k=> $v): ?>
                                <span><b class="team-price text-center ">Ksh <?php echo $v ?></b></span>
                                <?php endforeach; ?>
                            </div>
                                <div class="text text-center">
                                <a class="custom-button" href=".?p=view_product&id=<?php echo md5($row['id']) ?>">Quick View</a>
                            </div>
                               </div>
                             
                           </a>
                        </div>
                       <?php endwhile; ?>
                        <!-- <div class="col-12 col-lg-6">
                            <a data-fancybox href="img/item3.png">
                            <div class="product-item">
                                <div class="image-holder d-flex justify-content-center">
                                    <img src="img/item3.png" alt="team1">
                                </div>
                                <h3 class="team-price text-center ">$299</h3>
                                <p class="text text-center">Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                            </a>
                        </div> -->

                        


                        </div>

                                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main page content end-->


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
            location.href="./?";
        else
            location.href="./?b="+encodeURI(_b);
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