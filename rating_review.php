<?php 
include("controller.php");
   $ob = new controller; 
   // $query_string= $_SERVER['QUERY_STRING'];
      //view user
   $disp_user = $ob->view_user();
   
   $disp_user_data = mysqli_fetch_array($disp_user);
 

   $disp_order= $ob->view_rating();
   
     //to add rating
   $ob->add_rating_review();
 


   //disp order track
   
   if(!isset($_SESSION['user_id']))
   {
   header("location:login.php");
   }   
   
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
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
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
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

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
     
     <!-- rating style start-->


<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400);
div.stars{
  width: 270px;
  display: inline-block;
}
 
input.star{
  display: none;
}
 
label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}
 
input.star:checked ~ label.star:before {
  content:'\f005';
  color: #FD4;
  transition: all .25s;
}
 
 
input.star-5:checked ~ label.star:before {
  color:#FE7;
  text-shadow: 0 0 20px #952;
}
 
input.star-1:checked ~ label.star:before {
  text-shadow: 0 0 20px #952;
  color: #F62;
}
 
label.star:hover{
  transform: rotate(-15deg) scale(1.3);
}
 
label.star:before{
  content:'\f006';
  font-family: FontAwesome;
}
 
.rev-box{
  overflow: hidden;
  height: 0;
  width: 25%;
  transition: all .25s;
}
 
textarea.review{
  /*background: #222;*/
  border: 1.5px solid;
  width: 50%;
  max-width: 50%;
  height: 100px;
  padding: 10px;
  box-sizing: border-box;
  color: #222;
}
 
label.review{
  display: block;
  transition:opacity .25s;
}
 
input.star:checked ~ .rev-box{
  height: 125px;
  overflow: visible;
}

</style>
     <!-- Rating style end -->
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
                     <span class="w3l-i*con -buy">
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
         <a href="offer.php"><img src="images/download.png" class="img-head" alt=""></a>
         <?php 
            include("header.php"); ?>
         <!--banner-->
         <div class="banner-top">
            <div class="container-fluid">
               <h3 >MY CART</h3>
               <h4><a href="index.php">Home</a><label>/</label>Profile</h4>
               <div class="clearfix"> </div>
            </div>
         </div>
         <input type="text" name="querystr" value="<?php echo $query_string; ?>" style="display: none;">
         <!---728x90--->
         <br><br>
         <style type="text/css">
            .well{
               background-color: white;
               border-color: 1px solid #c1c1c1;
               overflow:visible;background:--color-white-bg;border-radius: 2px;box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 20%);flex-grow: 3;
            }
         </style>
            <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3" >
                  <div class="well">
                           
                     <div id="picture-frame" >
                        <img src="<?php echo $disp_user_data['user_profile']; ?>"  alt="" class="img-responsive" style="height:100px;width:100px;">
                           <b><?php echo "HELLO ". $disp_user_data['user_name'];?></b>
                        </div>
                        
                           
                  </div>
                  <div class="well" style="font-size: 25px;">
                     <h4><a href="myaccount.php"><div class="fa-hover"><span data-class="certificate"><i class="fa fa-certificate">&nbsp;&nbsp;Profile</i></span></div>
                     </a></h4>
                     <br>

                     <h4><a href="disp_order.php"><div class="fa-hover"><span data-class="certificate"><i class="fa fa-certificate">&nbsp;&nbsp;My Order</i></span></div>
                     </a></h4>
                     <br>
                      <h4><a href="manage_shipping.php"><div class="fa-hover"><span data-class="certificate"><i class="fa fa-certificate">&nbsp;&nbsp;Manage Address</i></span></div> 
                     </a></h4>
                   <br>
                  </div>
                    
                   </div>
               
               
               <div class="col-lg-1" style="width:0%"> </div>
               <div class="col-lg-8" style="overflow:visible;background: --color-white-bg;border-radius: 2px; box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 20%);flex-grow: 3;" >
                <h3>Order Details</h3>
                <br><br>
                <div id="disp_order_data">
                           <form name="form1" method="post">
                  <?php
                  $disp_order =$ob->view_rating();
                   ?>
                       <!-- <form method="post" name=form<?php echo $disp_order['order_id']; ?>> -->
                          
                                
                        <div class="row">
                           
                  <div class="col-md-3 single-top-left" >
                     <div class="row">
                        <div id="" >
                           <img src="index/<?php echo $disp_order['product_image'];  ?>"   alt="" class="img-responsive" height="95" width="95"/>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 single-top ">
                     <div class="single-right">
                        <h4><b><?php echo $disp_order['product_name']; ?></h4>
                        <div class="pr-single">
                           <?php
                              // echo $disp_order['shipping_address']; ?>
                           <p class="reduced " style="font-weight:bold;">QTY <?php echo $disp_order['order_qty']; ?></p>
                        </div>
                        <input type="text" name="order_no" value="<?php echo $disp_order['order_no']; ?>" style="display: none;">
                     <p class="reduced " style="font-weight:bold;"><del><?php echo $disp_order['product_price']; ?></del><?php echo  $disp_order['selling_price']; ?><i class="fa fa-inr"></i></p>
                        <h4 style="font-weight:bold;color:red "><?php
                         // echo $disp_order['order_status'];?>
                          <!-- on -->
                          <?php 
                        // echo $disp_order['order_entry_date']; ?></h4>
                     <br>
                     <div class="clearfix"> </div>
                     </div>
                  </div>

                  	<div class="col-md-3 single-top-right"  style="float: right;">
                     <div class="single-right">
                        <h4><b> <?php echo "₹".$disp_order['total_amount']; ?></b></h4>
                     <div class="clearfix"> </div>
                     </div>
					</div>

                       </form>
                           <!-- End Div -->
                </div>
                <br></b>
					<div class="col-md-3 single-top-right" style="float:left">
					<h4>	Rate this Product</h4>
					<div class="stars">
					<form action="" method="post">
                         <input type="text" name="product_id" value="<?php  echo $disp_order['product_id']; ?>"  style="display: none;">
					  <input class="star star-5" id="star-5" value="5" type="radio" name="star"/>
					  <label class="star star-5" for="star-5"></label>
					  <input class="star star-4" id="star-4" value="4" type="radio" name="star"/>
					  <label class="star star-4" for="star-4"></label>
					  <input class="star star-3" id="star-3" value="3" type="radio" name="star"/>
					  <label class="star star-3" for="star-3"></label>
					  <input class="star star-2" id="star-2" value="2" type="radio" name="star"/>
					  <label class="star star-2" for="star-2"></label>
					  <input class="star star-1" id="star-1" value="1" type="radio" name="star"/>
					  <label class="star star-1" for="star-1"></label>
					</div>
         		</div>
					<div class="" style="">
					<br><br><br><br><br><br>
					<br>
					<h4>Review this Product</h4><br>
						<textarea name="review" class="review" cols="5" rows="4">Description</textarea>	
					</div>
						<br>
					</div>

					<div>
						<h4>Customer Name:</h4><br>
						<input type="text" name="uname" class="form-control" style="width:50%;" value="<?php  echo $_SESSION['name']; ?>">
						<br>
					</div>

					<input type="submit" name="btn_rating_review" class="btn btn-info" value="Submit">
					<br><br>
               </div>
			</form> 
               </div>
         <!--  -->
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
         <script src="index/validation.js"></script>
         <!-- product -->
   </body>
   <!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:17 GMT -->
</html>