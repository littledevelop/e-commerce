<?php 
   include("controller.php");
   $ob = new controller; 
   //  $query_string= $_SERVER['QUERY_STRING'];
   
   
   //to display state
   $disp_state= $ob->get_state();
   
   
   //cart information 
    $cart_data= $ob->disp_cart_data();   
   
   
   //to disp user
   $disp_user_address = $ob->view_user();
   $user_add= mysqli_fetch_array($disp_user_address);
   
   //to save Address
   $ob->save_address();
   
   //to show shipping details
   $disp_address= $ob->view_shipping_details();
   
   //change shippind address
   
   $ob->edit_shipping_details();
   
   //to delete shipping address
   $ob->del_shipping_details();
   //cancel
   $ob->clear_all();
   
   $ob->confirm_order();  
   
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
            @med-ia (max-width: 767px) {
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
         <!---->
         <!--banner-->
         <div class="banner-top">
            <div class="container-fluid">
               <h3 >Shipping </h3>
               <h4><a href="index.php">Home</a><label>/</label>Shipping</h4>
               <div class="clearfix"> </div>
            </div>
         </div>
         <input type="text" name="querystr" value="<?php echo $query_string; ?>" style="display: none;">
         <!---728x90--->
         <br><br>
         <form name="form1" method="post">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-6" style="overflow:visible;display: flex;background: --color-white-bg;border-radius: 2px; box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 20%);flex-grow: 3;" >
                     <div class="row">
                        <div class="kic ">
                           <h3> Billing Address</h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-12">
         <h3 style="color:blue;font-family: cursive; "><u>Choose Your Shipping Address</u></h3>
         <br>

          <div class="col-lg-12">
         <h2><a href="#addnew" class="btn btn-info" data-toggle="collapse">Add New Address</a></h2>
         <br>
         <div id="addnew" class="collapse">
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input1">First Name <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Full Name:"  name="name"  type="text" size="80px;">
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Mobile <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Mobile Number"  name="mobile"  type="text">  
         </div>
         <br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Email <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Address" name="email"   type="text">  
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Pincode <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Pincode" name="pincode"  type="text">  
         </div>
         <br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">State <span class="checkout__input--label__star">*</span></label>
         <select class="form-control" name="state" onchange="get_statewise_city(this.value);">
         <option>Select State</option>
         <?php 
         $display_state =$ob->get_state();
            while($fetch_state= mysqli_fetch_array($display_state))
            {
            ?>
         <option value="<?php echo $fetch_state['state_id']; ?>" ><?php echo $fetch_state['state_name']; ?></option>
         <?php
            }
            ?>
         </select>
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">City <span class="checkout__input--label__star">*</span></label>
         <select class="form-control" id="get_city" name="city">
         <option>Select City</option>
         </select>
         </div>
         <br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Address <span class="checkout__input--label__star">*</span></label>
         <textarea class="form-control" placeholder="Enter Your Billing Address" name="address" cols="6" rows="2"> </textarea>
         </div>
         <br><br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <input type="submit" name="btn_save" value="Save Address" class="btn btn-danger"><br>
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <input type="submit" name="btn_cancel" value="Cancel" class="btn btn-primary"><br>
         </div>
         </div>
        
                           <?php
                              if(mysqli_num_rows($disp_address)>0)
                              {
                              while($disp_shipping = mysqli_fetch_array($disp_address))
                              {
                              
                                 $user_id= $_SESSION['user_id'];
                              
                              ?>
         <form name="form<?php echo $disp_shipping['shipping_id']; ?>" method="post">
         <input type="text" name="myshipping_id" value="<?php echo $disp_shipping['shipping_id']; ?>" style="display: none;">
         <p>
         <br>
         <input type="radio" name="ch_shippingaddress" value="<?php echo $disp_shipping['shipping_id']; ?>">
         <?php echo $disp_shipping['cust_name']; ?></p>
         <p><?php echo $disp_shipping['shipping_address'];?></p>
         <p><?php echo $disp_shipping['state_name'];?></p>
         <p><?php echo $disp_shipping['city_name'];?></p>
         <p><?php echo $disp_shipping['shipping_pincode'];?></p>
         <p><?php echo $disp_shipping['shipping_mobile'];?></p>
         <p><?php echo $disp_shipping['shipping_email'];?>
         <a href="#demo<?php echo $disp_shipping['shipping_id']; ?>" class="fa fa-edit" data-toggle="collapse" style="font-size: 20px;color: blue;font-weight: bold;"></a>
          <a href="shipping.php?delete=<?php echo $disp_shipping['shipping_id']; ?>" class="" style="font-size: 20px;color: blue;font-weight: bold;" onclick="Confirm('Are You Sure Want to delete?;' )"><span class="fa fa-trash">delete</span></a></p> 
         <div id="demo<?php echo $disp_shipping['shipping_id']; ?>" class="collapse">
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input1">Name <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Full Name:" value="<?php echo $disp_shipping['cust_name'];?>" name="myshipping_name"  type="text" size="80px;">
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Mobile <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Mobile Number" value="<?php echo $disp_shipping['shipping_mobile'];?>" name="myshipping_mobile"  type="text">  
         </div>
         <br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Email <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Address" name="myshipping_email" value="<?php echo $disp_shipping['shipping_email'];?>"  type="text">  
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Pincode <span class="checkout__input--label__star">*</span></label>
         <input class="form-control" placeholder="Enter Your Pincode" name="myshipping_pincode" value="<?php echo $disp_shipping['shipping_pincode'];?>" type="text">  
         </div>
         <br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">State <span class="checkout__input--label__star">*</span></label>
         <select class="form-control" name="myshipping_state" onchange="get_statewise_city(this.value);">
         <option>Select State</option>
         <?php
         $fetch_data = $ob->get_state(); 
            while($fetch_state= mysqli_fetch_array($fetch_data))
            {
                     if($fetch_state['state_id']==$disp_shipping['shipping_state'])
                     {
            ?>
         <option value="<?php echo $fetch_state['state_id']; ?>" selected=""><?php echo $fetch_state['state_name']; ?></option>
         <?php
            }
            else
            {
            ?>
         <option value="<?php echo $fetch_state['state_id']; ?>"><?php echo $fetch_state['state_name']; ?></option>
         <?php
            }
            }
            ?>
         </select>
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">City <span class="checkout__input--label__star">*</span></label>
         <select class="form-control get_city1" id="" name="myshipping_city">
         <option>Select City</option>
         <?php
            $display_city_data = $ob->get_city($disp_shipping['shipping_state']);
            ?>
         <option style="display: none;">Select City</option>
         <?php
            while($row= mysqli_fetch_array($display_city_data))
            {
                  if($row['city_id']==$disp_shipping['shipping_city'])
                  {
            ?>
         <option value="<?php echo $row['city_id']; ?>" selected=""><?php echo $row['city_name']; ?></option>
         <?php      
            }
            else
            {
            ?>
         <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
         <?php
            }
            } 
            ?>
         </select>
         </div>
         <br><br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <label class="" for="input4">Address <span class="checkout__input--label__star">*</span></label>
         <textarea class="form-control" placeholder="Enter Your Billing Address" name="myshipping_address" cols="6" rows="2"><?php echo $disp_shipping['shipping_address']; ?> </textarea>
         </div>
         <br><br>
         <div class="col-lg-6 col-md-6 mb-20">
         <input type="submit" name="btn_edit" value="Update Address" class="btn btn-danger">
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <input type="submit" name="btn_cancel" value="Cancel" class="btn btn-primary">
         </div>
         <br>
         </div>                     
         </form>
         <?php }
            }?> 
         </div>
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <br>  <a href="index.php" style="color:red; font-family:cursive;"><img src="image/shop.jpg" height="40" width="40">Continue To Shopping</a>
         <div class="clearfix"></div>
         </div>
         <div class="col-lg-6 col-md-6 mb-20">
         <br><a href="cart.php" style="color:red; font-family:cursive;"><img src="image/cart.jpg" height="35" width="35">Return To Cart</a>
         <div class="clearfix"></div><br><br>
         </div>
         </div>
         </div>
         <div class="col-lg-1" style="width:0%">
         </div>
         <?php
            if(mysqli_num_rows($cart_data)>0)
            {
             ?>
         <div class="col-lg-4" style="overflow:visible;background: --color-white-bg;border-radius: 2px; box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 20%);flex-grow: 3;" >
         <div class="kic ">
         <h3 style="color:red; font-family:cursive;"> <u>Order Summery</u></h3>
         <div class="clearfix"></div>
         </div>
         <div class="kic ">
         <h4 style="color:blue; font-family:cursive;"><u> Price Details </u></h4>
         <div class="clearfix"></div>
         </div>
         <div class="row">
         <div class="col-lg-6">
         <?php
            //to count total selling price
               $count_selling_price = $ob->sum_selling_price();
              $disp_total_selling_price = $count_selling_price['total_selling_price'];
            
              //to count total product price 
              
              $count_product_price = $ob->sum_product_price();
              $disp_total_product_price = $count_product_price['total_product_price'];
            
              ?>
         <br><h4><?php  echo  "Price(Items-". mysqli_num_rows($cart_data).")"; ?> </h4><br>
         <br><h4>Delievery Charge:</h4>
         <br><br><h4 style="font-weight: bold;">Total Amount</h4><br><br>
         </div>
         <div class="col-lg-6">
         <br>
         <h4>
         <input type="text" name="total_selling_price" value="<?php  echo  $disp_total_selling_price; ?> " style="border: none;">
         </h4>
         <?php 
            // To Count Delievery Charge Fees
                if($disp_total_selling_price>1000)
                {
                   $delievery_charge= "Free";
                }else
                {
                  $delievery_charge = "60₹";
                 }
              ?>
         <br><br>
         <h4><input type="text" name="delievery_charge" value="<?php  echo  $delievery_charge; ?> " style="border: none;"></h4>
         <br><br>
        <h4><input type="text" name="total_payable" value="<?php  echo  $disp_total_selling_price; ?> " style="font-weight: bold;border: none;"></h4>
         </div>
         </div>
         <div class="col-lg-12">
         <input type="radio" name="checkout" value="Cash On Delievery" style="color:red; font-family:cursive;">&nbsp;Cash On Delievery<img src="image/cod_img.png" height="25" width="25"><br><br>
         <input type="radio" name="checkout" value="Online Payment" style="color:red; font-family:cursive;">&nbsp;Online Payment<img src="image/mobile-payment.png" height="25" width="25">


         <div class="clearfix"></div>
         </div>
         <div class="col-lg-12 text-center">
         <br> <a href="#checkconfirm" class="btn btn-info" data-toggle="collapse">Confirm</a></h2>

         <div id="checkconfirm" class="collapse">
         <div class="row">
         <div class="col-lg-6 col-md-6 mb-20">
         
         <br>
         <i><input type="text" readonly="" name="code"  value="<?php echo rand(1000,9999); ?>" style="border: none;background-color: yellow;font-family: Brush Script MT   
            ;text-decoration:line-through blue;text-align: center;"></i>
         <br><br>
         <input class="form-control"   name="txtcheck"  type="text" size="80px;">  
         </div>
         <div class="col-lg-6 ">
         <br><br>
         <input type="submit" name="btn_confirm" value="Submit">
         <br>
         <label><?php  echo @$msg;?></label>
         </div>
         </div>
         </div>
         </div>
         <div class="clearfix"></div>
         <br><br><br>
         </div>
         <?php
            }?>                        
         </div>
         </div>
         </div>
         </div>
         </form>
         <br><br>
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
         <script src="index/validation1.js"></script>
         <script src="index/validation.js"></script>
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
         <!-- product -->
   </body>
   <!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:17 GMT -->
</html>