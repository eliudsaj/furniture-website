<?php require_once('../inc/header.php'); ?>
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
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<?php 
$total = 0;
    $qry = $conn->query("SELECT c.*,p.name,i.price,p.id as pid from `cart` c inner join `inventory` i on i.id=c.inventory_id inner join products p on p.id = i.product_id where c.client_id = ".$_settings->userdata('id'));
    while($row= $qry->fetch_assoc()):
        $total += $row['price'] * $row['quantity'];
    endwhile;
?>
<section class="py-5">
    <div class="container">
        <div class="card rounded-0">
            <div class="card-body"></div>
            <h3 class="text-center"><b>Checkout</b></h3>
            <hr class="border-dark">
            <form action="" id="place_order">
                <input type="hidden" name="amount" value="<?php echo $total ?>">
                <input type="hidden" name="payment_method" value="cod">
                <input type="hidden" name="paid" value="0">
                <div class="row row-col-1 justify-content-center">
                    <div class="col-6">
                    <div class="form-group col mb-0">
                    <label for="" class="control-label">Order Type</label>
                    </div>
                    <div class="form-group d-flex pl-2">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input custom-control-input-primary" type="radio" id="customRadio4" name="order_type" value="1" checked="">
                          <label for="customRadio4" class="custom-control-label">For Delivery</label>
                        </div>
                        <div class="custom-control custom-radio ml-3">
                          <input class="custom-control-input custom-control-input-primary custom-control-input-outline" type="radio" id="customRadio5" name="order_type" value="2">
                          <label for="customRadio5" class="custom-control-label">For Pick up</label>
                        </div>
                      </div>
                        <div class="form-group col address-holder">
                            <label for="" class="control-label">Delivery Address</label>
                            <textarea id="" cols="30" rows="3" name="delivery_address" class="form-control" style="resize:none"><?php echo $_settings->userdata('default_delivery_address') ?></textarea>
                        </div>
                        <div class="col">
                            <span><h4><b>Total:</b> <?php echo number_format($total) ?></h4></span>
                        </div>
                        <hr>
                        <div class="col my-3">
                        <h4 class="text-muted">Payment Method</h4>
                            <div class="d-flex w-100 justify-content-between">
                                <button class="btn btn-flat btn-dark">Cash on Delivery</button>
                                <span id="paypal-button"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,
 
        //app's client id's
	client: {
        sandbox:    'AdDNu0ZwC3bqzdjiiQlmQ4BRJsOarwyMVD_L4YQPrQm4ASuBg4bV5ZoH-uveg8K_l9JLCmipuiKt4fxn',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },
 
    commit: true, // Show a 'Pay Now' button
 
    style: {
    	color: 'blue',
    	size: 'small'
    },
 
    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: '<?php echo $total; ?>', 
                        	currency: 'PHP' 
                        }
                    }
                ]
            }
        });
    },
 
    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
    		// //sweetalert for successful transaction
    		// swal('Thank you!', 'Paypal purchase successful.', 'success');
            payment_online()
        });
    },
 
}, '#paypal-button');

function payment_online(){
    $('[name="payment_method"]').val("Online Payment")
    $('[name="paid"]').val(1)
    $('#place_order').submit()
}
$(function(){
    $('[name="order_type"]').change(function(){
        if($(this).val() ==2){
            $('.address-holder').hide('slow')
        }else{
            $('.address-holder').show('slow')
        }
    })
    $('#place_order').submit(function(e){
        e.preventDefault()
        start_loader();
        $.ajax({
            url:'../classes/Master.php?f=place_order',
            method:'POST',
            data:$(this).serialize(),
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("an error occured","error")
                end_loader();
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    alert_toast("Order Successfully placed.","success")
                    setTimeout(function(){
                        location.replace('./')
                    },2000)
                }else{
                    console.log(resp)
                    alert_toast("an error occured","error")
                    end_loader();
                }
            }
        })
    })
})
</script>