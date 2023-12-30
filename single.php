<?php 
   include("controller.php");
   $ob = new controller; 
   
    $disp_selected_product = $ob->view_selected_product();
    $disp_selected_product1 = $ob->view_selected_product();
   
    $disp_product_category = $disp_selected_product['product_category'];
   $disp_all_product= $ob->disp_category_product($disp_product_category);
   $disp_all_product1= $ob->disp_category_product($disp_product_category);
   
   $page_name= basename($_SERVER['PHP_SELF']);
   $query_string = $_SERVER['QUERY_STRING'];
   
   //to store product in cart
   $ob->add_to_cart();
   
   
   //to insert wishlist
   $ob->add_wishlist();
   ?>
<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html>
   <!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:16 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
      <!-- for-mobile-apps -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta property="og:title" content="Vide" />
      <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
         function hideURLbar(){ window.scrollTo(0,1); } 
      </script>
      <!-- //for-mobile-apps -->
      <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
      <!-- Custom Theme files -->
      <link href="css/style.css" rel='stylesheet' type='text/css' />
      <!-- js -->
      <script src="js/jquery-1.11.1.min.js"></script>
      <!-- //js -->
      <!-- start-smoth-scrolling -->
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
         	$(".scroll").click(function(event){		
         		event.preventDefault();
         		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
      <!--- start-rate---->
      <script src="js/jstarbox.js"></script>
      <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
      <script type="text/javascript">
         jQuery(function() {
         jQuery('.starbox').each(function() {
         	var starbox = jQuery(this);
         		starbox.starbox({
         		average: starbox.attr('data-start-value'),
         		changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
         		ghosting: starbox.hasClass('ghosting'),
         		autoUpdateAverage: starbox.hasClass('autoupdate'),
         		buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
         		stars: starbox.attr('data-star-count') || 5
         		}).bind('starbox-value-changed', function(event, value) {
         		if(starbox.hasClass('random')) {
         		var val = Math.random();
         		starbox.next().text(' '+val);
         		return val;
         		} 
         	})
         });
         });
      </script>
      <!---//End-rate---->

         <!-- rating style start -->
      <style type="text/css">
         * {
  box-sizing: border-box;
}

body {
  /*font-family: Arial;
  margin: 0 auto;  Center website 
  max-width: 800px; /* Max width */
  padding: 20px;*/
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  /* Hide the right column on small screens */
  .right {
    display: none;
  }
}


ADVERTISEMENT

NEW
We just launched
W3Schools videos



      </style>
      <!-- rating style end -->
   </head>
   <body>
      <script src="js/monetization.js" type="text/javascript"></script>
      <script>
         (function(){
         	if(typeof _bsa !== 'undefined' && _bsa) {
           		// format, zoneKey, segment:value, options
           		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
           	}
         })();
      </script>
      <script>
         (function(){
         if(typeof _bsa !== 'undefined' && _bsa) {
         	// format, zoneKey, segment:value, options
         	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
         }
         })();
      </script>
      <script>
         (function(){
         	if(typeof _bsa !== 'undefined' && _bsa) {
           		// format, zoneKey, segment:value, options
           		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
           	}
         })();
      </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-149859901-1');
      </script>
      <script>
         window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
         ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
         ga('require', 'eventTracker');
         ga('require', 'outboundLinkTracker');
         ga('require', 'urlChangeTracker');
         ga('send', 'pageview');
      </script>
      <script async src='js/autotrack.js'></script>
      <meta name="robots" content="noindex">
      <body>
         <link rel="stylesheet" href="assests/css/font-awesome.min.css">
         <!-- New toolbar-->
         <form name="form1" method="post">
            <style>
               * {
               box-sizing: border-box;
               font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
               }
               #w3lDemoBar.w3l-demo-bar {
               top: 0;
               right: 0;
               bottom: 0;
               z-index: 9999;
               padding: 40px 5px;
               padding-top:70px;
               margin-bottom: 70px;
               background: #0D1326;
               border-top-left-radius: 9px;
               border-bottom-left-radius: 9px;
               }
               #w3lDemoBar.w3l-demo-bar a {
               display: block;
               color: #e6ebff;
               text-decoration: none;
               line-height: 24px;
               opacity: .6;
               margin-bottom: 20px;
               text-align: center;
               }
               #w3lDemoBar.w3l-demo-bar span.w3l-icon {
               display: block;
               }
               #w3lDemoBar.w3l-demo-bar a:hover {
               opacity: 1;
               }
               #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
               color: #e6ebff;
               }
               #w3lDemoBar.w3l-demo-bar .responsive-icons {
               margin-top: 30px;
               border-top: 1px solid #41414d;
               padding-top: 40px;
               }
               #w3lDemoBar.w3l-demo-bar .demo-btns {
               border-top: 1px solid #41414d;
               padding-top: 30px;
               }
               #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
               font-size: 26px;
               }
               #w3lDemoBar.w3l-demo-bar .no-margin-bottom{
               margin-bottom:0;
               }
               .toggle-right-sidebar span {
               background: #0D1326;
               width: 50px;
               height: 50px;
               line-height: 50px;
               text-align: center;
               color: #e6ebff;
               border-radius: 50px;
               font-size: 26px;
               cursor: pointer;
               opacity: .5;
               }
               .pull-right {
               float: right;
               position: fixed;
               right: 0px;
               top: 70px;
               width: 90px;
               z-index: 99999;
               text-align: center;
               }
               /* ============================================================
               RIGHT SIDEBAR SECTION
               ============================================================ */
               #right-sidebar {
               width: 90px;
               position: fixed;
               height: 100%;
               z-index: 1000;
               right: 0px;
               top: 0;
               margin-top: 60px;
               -webkit-transition: all .5s ease-in-out;
               -moz-transition: all .5s ease-in-out;
               -o-transition: all .5s ease-in-out;
               transition: all .5s ease-in-out;
               overflow-y: auto;
               }
               /* ============================================================
               RIGHT SIDEBAR TOGGLE SECTION
               ============================================================ */
               .hide-right-bar-notifications {
               margin-right: -300px !important;
               -webkit-transition: all .3s ease-in-out;
               -moz-transition: all .3s ease-in-out;
               -o-transition: all .3s ease-in-out;
               transition: all .3s ease-in-out;
               }
               @media (max-width: 992px) {
               #w3lDemoBar.w3l-demo-bar a.desktop-mode{
               display: none;
               }
               }
               @media (max-width: 767px) {
               #w3lDemoBar.w3l-demo-bar a.tablet-mode{
               display: none;
               }
               }
               @media (max-width: 568px) {
               #w3lDemoBar.w3l-demo-bar a.mobile-mode{
               display: none;
               }
               #w3lDemoBar.w3l-demo-bar .responsive-icons {
               margin-top: 0px;
               border-top: none;
               padding-top: 0px;
               }
               #right-sidebar,.pull-right {
               width: 90px;
               }
               #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
               margin-bottom: 0;
               }
               }
            </style>
            <div class="pull-right toggle-right-sidebar">
               <span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
            </div>
            <div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
               <div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">
                  <div id="w3lDemoBar" class="w3l-demo-bar">
                     <div class="demo-btns">
                        <a href="https://w3layouts.com/?p=">
                        <span class="w3l-icon -back">
                        <span class="fa fa-arrow-left"></span>
                        </span>
                        <span class="w3l-text">Back</span>
                        </a>
                        <a href="https://w3layouts.com/?p=">
                        <span class="w3l-icon -download">
                        <span class="fa fa-download"></span>
                        </span>
                        <span class="w3l-text">Download</span>
                        </a>
                        <a href="https://w3layouts.com/checkout/?add-to-cart=" class="no-margin-bottom-mobile">
                        <span class="w3l-icon -buy">
                        <span class="fa fa-shopping-cart"></span>
                        </span>
                        <span class="w3l-text">Buy</span>
                        </a>
                     </div>
                     <!---<div class="responsive-icons">
                        <a href="#url" class="desktop-mode">
                            <span class="w3l-icon -desktop">
                                <span class="fa fa-desktop"></span>
                            </span>
                        </a>
                        <a href="#url" class="tablet-mode">
                            <span class="w3l-icon -tablet">
                                <span class="fa fa-tablet"></span>
                            </span>
                        </a>
                        <a href="#url" class="mobile-mode no-margin-bottom">
                            <span class="w3l-icon -mobile">
                                <span class="fa fa-mobile"></span>
                            </span>
                        </a>
                        </div>-->
                  </div>
                  <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
                     style="overflow: hidden; outline: none;">
                  </div>
               </div>
            </div>
            </div>
            <a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
            <?php 
               include ("header.php"); ?>
            <!---->
            <!--banner-->
            <div class="banner-top">
               <div class="container">
                  <h3 >Lorem</h3>
                  <h4><a href="index.html">Home</a><label>/</label>Lorem</h4>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <!---728x90--->
<div class="single">
   <div class="container">
      <div class="single-top-main">
         <div class="col-md-5 single-top">
            <div class="single-w3agile">
               <div id="picture-frame">
                  <form method="post" name="form2"> 
                  <img src=" index/<?php echo $disp_selected_product['product_image']; ?>" data-src="index/<?php echo $disp_selected_product['product_image']; ?>" alt="" class="img-responsive"/>
               </div>
               <script src="js/jquery.zoomtoo.js"></script>
               <script>
                  $(function() {
                  	$("#picture-frame").zoomToo({
                  		magnify: 1
                  	});
                  });
               </script>
            </div>
         </div>
         
         <input type="text" name="page_name" value="<?php echo $page_name; ?>" style="display:none ;">
         <input type="text" name="querystr" value="<?php echo $query_string; ?>" style="display:none ;">
            <div class="col-md-7 single-top-left ">
               <div class="single-right">
                  <h3><?php echo $disp_selected_product['product_name']; ?></h3>
                     <style type="text/css">
                     a.hover{
                     color: red;
                     }
                     </style>
                     <input type="text" name="product_id" style="display: none;" value="<?php echo $disp_selected_product['product_id']; ?>">
                     <?php
                        $disp_wishlist = $ob->view_selected_wishlist();
                        if(isset($disp_wishlist['product_id'])==$disp_selected_product['product_id'])
                        {
            	     ?>
                     <button type="submit" name="btn_wishlist" style="border-radius:100px;border: none;"><i class="glyphicon glyphicon-heart" style="top: 4px;font-size: 20px;border: none;color:red;"></i></button>
                     <?php
                        }
                        else
                        {
                     ?>
                     <button type="submit" name="btn_wishlist" style="border-radius:12px;border: none;"><i class="glyphicon glyphicon-heart" style="top: 4px;border: none;color: white;"></i></button>
                     <?php
                        }
                     ?>
                     <div class="pr-single">
                           <p class="reduced "><del><?php echo $disp_selected_product['product_price']; ?></del><?php echo $disp_selected_product['selling_price']; ?></p>
                     </div>
                     <div class="block block-w3">
                         <div class="starbox small ghosting"> </div>
                     </div>
                        <p class="in-pa">
                        <?php if($disp_selected_product['product_size']!="none")
                              {
                        ?>
                                 <div>
                                 <h4>Size:
                                 <select name="choose_size">
                                 <option value="small">Small</option>
                                 <option value="medium">Medium</option>
                                 <option value="L">L</option>
                                 <option value="XL">XL</option>
                                 <option value="XXL">XXL</option>
                                 <option value="XXXL">XXXL</option>
                                 </select>
                                 </h4>
                                 </div>
                        <?php
                              }
                        ?>
                        <?php echo $disp_selected_product['product_desc']; ?>  
                        </p>
                        <ul class="social-top">
                           <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                           <li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
                           <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                           <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
                        </ul>
                        <div class="add add-3">
                           <button type="submit" class="btn btn-danger my-cart-btn my-cart-b" id="addcart" value="" name="btn_add_to_cart" >Add to Cart</button>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                        <div class="clearfix"> </div>
                  </div>

    	</div>

   </div>

</div>
<!-- Add icon library -->

<!-- user rating start -->
<br><br>
<div class="container">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<center>
   
<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
</center>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div style="width:10px;" class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>100</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>

</div>

<!-- user rating end -->

         <!---728x90--->
         <!---->
         <div class="content-top offer-w3agile">
         <div class="container ">
         <div class="spec ">
         <h3>Special Offers</h3>
         <div class="ser-t">
         <b></b>
         <span><i></i></span>
         <b class="line"></b>
         </div>
         </div>
         <div class=" con-w3l wthree-of">
         <?php 
            while($row= mysqli_fetch_array($disp_all_product))
            	{
            		
            		if($row['product_id']!==$disp_selected_product['product_id'])
            		{
            ?>
         <div class="col-md-3 pro-1">
         <div class="col-m">
         <a href="#" data-toggle="modal" data-target="#myModal<?php echo $row['product_id'];?>" class="offer-img">
         <img src="index/<?php echo $row['product_image'];?>" class="img-responsive" alt="" style="height: 250px;width: 350px;">
         <div class="offer"><p><span>Offer</span></p></div>
         </a>
         <div class="mid-1">
         <div class="women">
         <h6><a href="single.php?product_id=<?php echo $row['product_id']; ?>"><?php echo $row['product_name'];?></a></h6>							
         </div>
         <input type="text" name="product" value="<?php echo $row['product_id']; ?>" style="display: none;">
         <div class="mid-2">
         <p ><label><?php echo $row['product_price'];?></label><em class="item_price"><?php echo $row['selling_price'];?></em></p>
         <div class="block">
         <div class="starbox small ghosting"> </div>
         </div>
         <div class="clearfix"></div>
         </div>
         <div class="add">
         <button type="submit" class="btn btn-danger my-cart-btn my-cart-b" id="addcart" value="" name="btn_add_to_cart" >Add to Cart</button>
         </div>
        
         </div>
         
         </div>
         </div>
         <?php
            }
            }?>
         <div class="clearfix"></div>
         </div>
         </div>

         </div>
         </form>
         <!--footer-->
         <!---728x90--->
         <?php
            include("footer.php");
            ?>
         <!-- //footer-->
         <!-- smooth scrolling -->
         <script type="text/javascript">
            $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */								
            $().UItoTop({ easingType: 'easeOutQuart' });
            });
         </script>
         <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
         <!-- //smooth scrolling -->
         <!-- for bootstrap working -->
         <script src="js/bootstrap.js"></script>
         <!-- //for bootstrap working -->
         <script type='text/javascript' src="js/jquery.mycart.js"></script>
         <script type="text/javascript">
            $(function () {
            
              var goToCartIcon = function($addTocartBtn){
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                  top: position.top,
                  left: position.left
                }, 500 , "linear", function() {
                  $image.remove();
                });
              }
            
              $('.my-cart-btn').myCart({
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                affixCartIcon: true,
                checkoutCart: function(products) {
                  $.each(products, function(){
            
                    console.log(this);
                  });
                },
                clickOnAddToCart: function($addTocart){
                  goToCartIcon($addTocart);
                },
                getDiscountPrice: function(products) {
                  var total = 0;
                  $.each(products, function(){
                    total += this.quantity * this.price;
                  });
                  return total * 1;
                }
              });
            
            });
         </script>
         <form>
            <!-- product -->
            <?php 
               while($fetch1= mysqli_fetch_array($disp_all_product1))
               	{
               		if($fetch1['product_id']!==$disp_selected_product1['product_id'])
               		{
               ?>
            <div class="modal fade" id="myModal<?php echo $fetch1['product_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
               <div class="modal-dialog" role="document">
                  <div class="modal-content modal-info">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                     </div>
                     <div class="modal-body modal-spa">
                        <div class="col-md-5 span-2">
                           <div class="item">
                              <img src="index/<?php echo $fetch1['product_image']; ?>" class="img-responsive" alt="">
                           </div>
                        </div>
                        <div class="col-md-7 span-1 ">
                           <h3><?php echo $fetch1['product_name']; ?></h3>
                           <p class="in-para"> There are many variations of passages of Lorem Ipsum.</p>
                           <div class="price_single">
                              <span class="reducedfrom "><del><?php echo $fetch1['product_price']; ?></del><?php echo $fetch1['selling_price']; ?></span>
                              <div class="clearfix"></div>
                           </div>
                           <h4 class="quick">Quick Overview:</h4>
                           <p class="quick_desc"><?php echo $fetch1['product_desc']; ?></p>
                           <div class="add-to">
                              <button class="btn btn-danger my-cart-btn my-cart-btn1 " id="addcart" onclick="load_cart_number();" name="btn_add_to_cart" value="">Add to Cart</button>
                           </div>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php
               }
               }
               	?>
            <script type="text/javascript">
               function load_cart_number()
               {
               
               $(document).ready(function(){
               		$.ajax({
               				var uid=$_SESSION['user_id'];
               				url:"backend.php",
               				type:"post",
               				data:"cart_item="+uid,
               				success:function(result)
               				{
               							$('#showcart').html(response);
               				}
               		});
               });
               }
            </script>
         </form>
   </body>
   <!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:17 GMT -->
</html>