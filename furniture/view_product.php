
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themesindustry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="Furniture, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
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


</header>

<!--Banner Start-->
<section class="page-title1">
    <div class="bg-overlay bg-black opacity-2"></div>
    
</section>
<!--Banner End-->
<?php 
 $products = $conn->query("SELECT p.*,b.description,b.name as bname FROM `products` p inner join brands b on p.brand_id = b.id where md5(p.id) = '{$_GET['id']}' ");
 if($products->num_rows > 0){
     foreach($products->fetch_assoc() as $k => $v){
         $$k= stripslashes($v);
     }
    $upload_path = base_app.'/uploads/product_'.$id;
    $img = "";
    if(is_dir($upload_path)){
        $fileO = scandir($upload_path);
        if(isset($fileO[2]))
            $img = "uploads/product_".$id."/".$fileO[2];
        // var_dump($fileO);
    }
    $inventory = $conn->query("SELECT * FROM inventory where product_id = ".$id);
    $inv = array();
    while($ir = $inventory->fetch_assoc()){
        $inv[] = $ir;
    }
 }
?>
<!--main page content-->
<section class="py-5">
    <div class="container">
        <div class="col-12">

                <div class="product-body">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb text-center text-lg-left">
                            <li class="breadcrumb-item"><a href="product-listing.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="view_categories.php">Categories</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="productS.php?p=products&c=<?php echo md5($row['id']) ?>">Products</a></li>
                            <li class="breadcrumb-item"><a class="active" href="javascript:void(0)"><?php echo $bname ?></a></li>
                        </ol>
                    </nav>
                    <div class="pro-detail-sec row">
                        <div class="col-12">
                            <h4 class="pro-heading text-center text-lg-left">Beyond 2000 Furniture</h4>
                            <p class="pro-text text-center text-lg-left">The Best Deal You Will Find!</p>
                        </div>
                    </div>
        <div class="row">
            <div class="col-md-6">
                
                <img class="card-img-top mb-5 mb-md-0 border border-dark" loading="lazy" id="display-img" src="<?php echo validate_image($img) ?>" alt="..." />
                <div class="mt-2 row gx-2 gx-lg-3 row-cols-4 row-cols-md-3 row-cols-xl-4 justify-content-start">
                    <?php 
                        foreach($fileO as $k => $img):
                            if(in_array($img,array('.','..')))
                                continue;
                    ?>
                    <div class="col">
                        <a href="javascript:void(0)" class="view-image <?php echo $k == 2 ? "active":'' ?>"><img src="<?php echo validate_image('uploads/product_'.$id.'/'.$img) ?>" loading="lazy"  class="img-thumbnail" alt=""></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6 ">
                <!-- <div class="small mb-1">SKU: BST-498</div> -->
                <h1 class="display-5 fw-bolder border-bottom border-primary pb-1"><?php echo $name ?></h1>
                <p class="m-0"><small>Category: <?php echo $bname ?></small></p>
                <div class="fs-5 mb-5">
                &#8369; <span id="price"><b>Price: </b>Ksh <?php echo number_format($inv[0]['price']) ?></span>
                <br>
                <span><small><b>Available Stock:</b> <span id="avail"><?php echo $inv[0]['quantity'] ?></span></small></span>
                </div>
                <form action="" id="add-cart">
                <div class="d-flex">
                    <input type="hidden" name="price" value="<?php echo $inv[0]['price'] ?>">
                    <input type="hidden" name="inventory_id" value="<?php echo $inv[0]['id'] ?>">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" name="quantity" />
                    <button class="btn btn-transparent-purple btn-medium" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
                </form>
                <p class="lead"><?php echo stripslashes(html_entity_decode($specs)) ?></p>
                
            </div>
                             <!-- side bar 
                                 <aside class="col-md-4">
                                    <div class="sidebar_widget">
                                        <div class="widget_heading">
                                        <h5><i class="fa fa-shopping-cart" aria-hidden="true"></i>PLACE AN ORDER</h5>
                                        </div>
                                        <form method="post">
                                        <div class="form-group">
                                            <label>Full Name:</label>
                                            <input type="text" class="form-control" name="fullname" placeholder="Enter your full name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number:</label>
                                            <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Delivery Address:</label>
                                            <textarea rows="4" class="form-control" name="address" placeholder="Enter your delivery address" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name:</label>
                                            <input type="text" class="form-control" name="productname" placeholder="Enter the product name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity:</label>
                                            <input type="number" class="form-control" name="quantity" placeholder="Enter the quantity" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Additional Information:</label>
                                            <textarea rows="4" class="form-control" name="additional" placeholder="Enter any additional information"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn"  name="submit" value="Order Now">
                                        </div>
                                        </form>
                                    </div>
                                </aside>-->

                       <div class="col-12 mt-4 mb-4">
                            <div class="row no-gutters product-all-details">

                                <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                                    <li class="col-4 nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional Information</a>
                                    </li>
                                    <li class="col-4 nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Customer Reviews  (2)</a>
                                    </li>
                                </ul>
                                <div class="col-12 tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p class="product-tab-description text-center text-lg-left"><?php echo stripslashes(html_entity_decode($description)) ?>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">First</th>
                                                        <th scope="col">Last</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Alex</td>
                                                        <td>Thorn</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade reviews" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                        <div class="media">
                                            <div class="row no-gutter">
                                                <div class="col-12 col-lg-2 p-0">

                                                    <div class="row no-gutters">
                                                        <div class="col-12 d-flex  justify-content-center">
                                                            <img src="img/user.jpg" alt="Generic placeholder image">
                                                        </div>
                                                        <div class="col-12 d-flex mt-2 justify-content-center">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-10 p-0">
                                                    <div class="media-body">
                                                        <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                        <h5 class="mb-2 text-center text-lg-left">Media heading</h5>
                                                        <p class="text-center text-lg-left">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="row no-gutter">
                                                <div class="col-12 col-lg-2 p-0">

                                                    <div class="row no-gutters">
                                                        <div class="col-12 d-flex  justify-content-center">
                                                            <img src="img/user2.jpg" alt="Generic placeholder image">
                                                        </div>
                                                        <div class="col-12 d-flex mt-2 justify-content-center">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-lg-10 p-0">
                                                    <div class="media-body ">
                                                        <span class="text-center text-lg-left d-block">27 Aug 2017</span>
                                                        <h5 class="mb-2 text-center text-lg-left">Media heading</h5>
                                                        <p class="text-center text-lg-left">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row pl-2 pr-2">
                                            <div class="col-12 d-flex mb-4 mt-3">
                                                <h5 class="text-nowrap">Add Review</h5>
                                                <hr class="w-100 ml-5"/>
                                            </div>
                                            <div class="col-12">
                                                <form class="getin_form border-form" id="register">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="text" class="form-control"  placeholder="Name*" required="" id="registerName">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="form-group bottom35">
                                                                <input type="email" class="form-control" placeholder="Email*" required="" id="registerEmail">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-lg-2 text-center text-lg-left">
                                                            <h5 class="text-nowrap">Your Rating</h5>
                                                        </div>
                                                        <div class="col-12 col-lg-10 text-center text-lg-left">
                                                            <ul class="user-rating">
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star-filled"></i></a></li>
                                                                <li><a href="#"><i class="lni-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <!--                                                                            <label for="comment">Your Rating:</label>-->
                                                                <textarea class="form-control textareaclass" rows="5" id="comment" placeholder="Your Review"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-3">
                                                            <div class="form-group d-flex justify-content-center d-lg-block">
                                                                <button class="text-center btn green-color-yellow-gradient-btn">Add Review</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php 
            $products = $conn->query("SELECT p.*,b.name as bname FROM `products` p inner join brands b on p.brand_id = b.id where p.status = 1 and (p.category_id = '{$category_id}' or p.sub_category_id = '{$sub_category_id}') and p.id !='{$id}' order by rand() limit 4 ");
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
            <div class="col mb-5">
                <a class="card product-item text-dark" href=".?p=view_product&id=<?php echo md5($row['id']) ?>">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo validate_image($img) ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php echo $row['name'] ?></h5>
                            <!-- Product price-->
                            <?php foreach($_inv as $k=> $v): ?>
                                <span><b>Price: </b>Ksh <?php echo $v ?></span>
                            <?php endforeach; ?>
                            <p class="m-0"><small>Brand: <?php echo $row['bname'] ?></small></p>
                            
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
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
<script>
    var inv = $.parseJSON('<?php echo json_encode($inv) ?>');
    $(function(){
        $('.view-image').click(function(){
            var _img = $(this).find('img').attr('src');
            $('#display-img').attr('src',_img);
            $('.view-image').removeClass("active")
            $(this).addClass("active")
        })
        $('.p-size').click(function(){
            var k = $(this).attr('data-id');
            $('.p-size').removeClass("active")
            $(this).addClass("active")
            $('#price').text(inv[k].price)
            $('[name="price"]').val(inv[k].price)
            $('#avail').text(inv[k].quantity)
            $('[name="inventory_id"]').val(inv[k].id)

        })

        $('#add-cart').submit(function(e){
            e.preventDefault();
            if('<?php echo $_settings->userdata('id') ?>' <= 0){
                 window.location.href = "login.php";
                return false;
            }
            start_loader();
            $.ajax({
                url:'../classes/Master.php?f=add_to_cart',
                data:$(this).serialize(),
                method:'POST',
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status=='success'){
                        alert_toast("Product added to cart.",'success')
                        $('#cart-count').text(resp.cart_count)
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                    }
                    end_loader();
                }
            })
        })
    })
</script>

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