<?php 
   include("controller.php");
   $ob = new controller; 
   
   //to display selected order
   $disp_order= $ob->disp_selected_order();
   
   //to select display reason 
   $disp_reason = $ob->disp_reason();
   // $ob->return_order();
   
   //add bank detail 
   $ob->add_bank();

   //disp bank detail
$disp_bank = $ob->view_bank_detail();

//to add return order
$ob->add_return_order();
   
     //view user
   $disp_user = $ob->view_user();
   
   $disp_user_data = mysqli_fetch_array($disp_user);
  
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
      <style type="text/css">
         .file-upload {
         background-color: #ffffff;
         width: 600px;
         margin: 0 auto;
         padding: 20px;
         }
         .file-upload-btn {
         width: 100%;
         margin: 0;
         color: #fff;
         background: #1FB264;
         border: none;
         padding: 10px;
         border-radius: 4px;
         border-bottom: 4px solid #15824B;
         transition: all .2s ease;
         outline: none;
         text-transform: uppercase;
         font-weight: 700;
         }
         .file-upload-btn:hover {
         background: #1AA059;
         color: #ffffff;
         transition: all .2s ease;
         cursor: pointer;
         }
         .file-upload-btn:active {
         border: 0;
         transition: all .2s ease;
         }
         .file-upload-content {
         display: none;
         text-align: center;
         }
         .file-upload-input {
         position: absolute;
         margin: 0;
         padding: 0;
         width: 100%;
         height: 100%;
         outline: none;
         opacity: 0;
         cursor: pointer;
         }
         .image-upload-wrap {
         margin-top: 20px;
         border: 4px dashed #1FB264;
         position: relative;
         }
         .image-dropping,
         .image-upload-wrap:hover {
         background-color: #1FB264;
         border: 4px dashed #ffffff;
         }
         .image-title-wrap {
         padding: 0 15px 15px 15px;
         color: #222;
         }
         .drag-text {
         text-align: center;
         }
         .drag-text h3 {
         font-weight: 100;
         text-transform: uppercase;
         color: #15824B;
         padding: 60px 0;
         }
         .file-upload-image {
         max-height: 200px;
         max-width: 200px;
         margin: auto;
         padding: 20px;
         }
         .remove-image {
         width: 200px;
         margin: 0;
         color: #fff;
         background: #cd4535;
         border: none;
         padding: 10px;
         border-radius: 4px;
         border-bottom: 4px solid #b02818;
         transition: all .2s ease;
         outline: none;
         text-transform: uppercase;
         font-weight: 700;
         }
         .remove-image:hover {
         background: #c13b2a;
         color: #ffffff;
         transition: all .2s ease;
         cursor: pointer;
         }
         .remove-image:active {
         border: 0;
         transition: all .2s ease;
         }
      </style>
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
               <h3 >Return Order </h3>
               <h4><a href="index.php">Home</a><label>/</label>Return Order</h4>
               <div class="clearfix"> </div>
            </div>
         </div>
         <!-- <input type="text" name="querystr" value="<?php echo $query_string; ?>" style="display: none;"> -->
         <!---728x90--->
         <br><br>
            <div class="container-fluid">
            <div class="row">
               <div class="col-lg-2">
                    <div class="well">
                     <div id="picture-frame" >
                        <img src="<?php echo $disp_user_data['user_profile']; ?>"  alt="" class="img-responsive" style="height:100px;width: 100px;">
                           <b><?php echo "HELLO ". $disp_user_data['user_name'];?></b>
                        </div>
                  </div>
                  <div class="well" style="font-size: 25px;">
                     <h4><a href="myaccount.php"><div class="fa-hover"><span data-class="certificate"><i class="fa fa-certificate">&nbsp;&nbsp;Profile</i></span></div>
                     </a></h4><br>
                     <h4><a href="disp_order.php"><div class="fa-hover"><span data-class="certificate"><i class="fa fa-certificate">&nbsp;&nbsp;My Order</i></span></div>
                     </a></h4><br>
                     <h4><a href="manage_shipping.php"><div class="fa-hover"><span data-class="certificate"><i class="fa fa-certificate">&nbsp;&nbsp;Manage Address</i></span></div>
                     </a></h4><br>
                  </div>
               </div>
               <div class="col-lg-6" style="overflow:visible;display:flex;background:--color-white-bg;border-radius:2px;box-shadow:2px 2px 2px 2px rgb(0 0 0 / 20%);flex-grow: 3;">
                  <div class="row">
                     <div class="kic ">
                          <a href="disp_order.php" class="btn btn-danger btn-lg" style="width: 15%;float:right;">Back</a>
                        <h3>Return Order</h3>
                        <div class="clearfix"></div>
                     </div>
                     <br>
         <!-- <div class="col-lg-6"> -->
         <form name="form1" method="post" enctype="multipart/form-data">
         <!-- Order status -->
         <input type="text" name="order_status" value="<?php echo $disp_order['order_status']; ?>" style="display: none;">
         <!-- //product id -->
         <input type="text" name="product_id" value="<?php echo $disp_order['product_id'];  ?>" style="display: none;">
          <!-- order_id -->
          <input type="text" name="order_id" value="<?php echo $disp_order['order_id'];  ?>" style="display: none;">

          <!-- shipping_id -->
         <input type="text" name="shipping_id" value="<?php echo $disp_order['shipping_id'];  ?>" style="display: none;">          

         <!-- /div> -->
         <div class="col-lg-12 single-right" style="font-size:18px;font-weight: bold;">
            <div class="row"> 
               <div class="col-lg-4">
         <img src="index/<?php echo $disp_order['product_image'];  ?>"   alt="" class="img-responsive" height="95" width="95"/>
                  
               </div>
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-lg-3">
                     <?php echo $disp_order['product_name']; ?> <br>          
                        <?php if($disp_order['product_size']!="none")
                          {
                            echo "Size:-". $disp_order['product_size']; 
                          }?>
                     </div>
                     <div class="col-lg-3">
                        QTY :-<?php echo $disp_order['order_qty']; ?>
                     </div>
                     <div class="col-lg-3">
                        <del><?php echo $disp_order['product_price']; ?></del><?php echo  $disp_order['selling_price']; ?><i class="fa fa-inr"></i>
                     </div>
                     <div class="col-lg-3">
                        
                     <?php echo $disp_order['total_amount']; ?>
                     </div>
                  </div>
               </div>
            </div>
         <br>
         </div>
         <div class="single-right" style="float:left;margin: 25px;" >
         <h4>Please Select Reason for Return Order:</h4>
         <select name="reason" class="form-control" onchange="get_reason_detail(this.value);">
         <option value="">Select Reason</option>
         <?php 
            while($fetch_reason= mysqli_fetch_array($disp_reason))
            {
            ?>
         <option value="<?php echo $fetch_reason['reason_id']; ?>"><?php echo $fetch_reason['reason_text']; ?></option>
         <?php
            }
            ?>
         </select>
         <div class="clearfix"></div>
         </div>
         <div class="row">
         <div class="single-right" style="float:left;margin: 35px;" >
         <h4>Please Select Reason Detail for Return Order:</h4>
         <select name="reason_detail" id="reason_detail" class="form-control" >
         <option value="">Select Reason detail</option>
         </select>
         <br>
         <div class="clearfix"></div>
         </div> 
         </div>
         <!-- <h4> &nbsp; &nbsp;<input type="radio" name="ch_image" > &nbsp;Upload a return product</h4> -->
         <div> <?php echo @$msg; ?></div>
         <div class="single-right">
         <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         <div class="file-upload">
         <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
         <div class="image-upload-wrap">
         <input class="file-upload-input"  name="image" type='file' onchange="readURL(this);" accept="image/*" />
         <div class="drag-text">
         <h3>Drag and drop a file or select add Image</h3>
         </div>
         </div>
         <div class="file-upload-content">
         <img class="file-upload-image" src="#" alt="your image" />
         <div class="image-title-wrap">
         <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
         </div>
         </div>
         </div>
         </div>
         <br>
         <table class="table" style="font-size: 17px;border:none;">
            <caption> <h4  style="font-weight: bold;float: left;color: purple;">&nbsp;What Do You Want to?</h4></caption>
              <tr>
                <th> Return Order</th>
                <th><input type="radio" name="ch_order" value="Return" ></th>
              </tr>
              <tr>
                <th>Exchange Order</th>
                <th><input type="radio" name="ch_order" value="Exachange" ></th>
              </tr>
            </table>
            <div class="well">
               
            <h4><label style="Color:dark pink;">Additional Comment</label></h4><br>
            <div class="textarea active-pink-textarea-2">
               <textarea id="form17" class="textarea " name="comment" cols="90" rows="2"></textarea>
            </div>
            </div>
            <center>
               
            <input type="submit" name="btn_ch_return" value="Submit" class="btn btn-info btn-lg ">
            </center>
            <br><br>
         </div>
         </div>
         <div class="col-lg-1" style="width:0%">
         </div>
         <div class="col-lg-3" style="overflow:visible;background: --color-white-bg;border-radius: 2px; box-shadow: 2px 2px 2px 2px rgb(0 0 0 / 20%);flex-grow: 3;" >
         <div class="kic ">
         <h3>Summery</h3>
         <div class="clearfix"></div>
         </div> 
         <table class="table" style="border:none;font-size: 19px;">
         <tr>
         <th>Order_No:</th>
         <td><input type="text" name="order_no" value="<?php echo $disp_order['order_no']; ?>" style="border: none;"></td>
         </tr>
         <tr>
         <th>Shipping Name:</th>
         <td><?php echo $disp_order['cust_name']; ?></td>
         </tr>
         <tr>
         <th>Shipping Address: </th>
         <td><?php echo $disp_order['shipping_address']?>.<br>
         <?php echo $disp_order['state_name']."&nbsp;".$disp_order['city_name']."-".$disp_order['shipping_pincode']; ; ?></td>
         </tr>
         <tr>
         <th>Contact Information:</th>
         <td><?php echo $disp_order['shipping_email']."<br>".$disp_order['shipping_mobile']; ;?></td>
         </tr>
         <tr>
         <th>Shipping Charge:</th>
         <td><?php echo $disp_order['shipping_charge'] ;?></td>
         </tr>
         <tr>
         <th>Payment:</th>
         <td><?php echo $disp_order['order_method'] ?></td>
         </tr>

         </table>


         <div>
            <h2>Bank Details</h2>
            <?php while($row_bank = mysqli_fetch_array($disp_bank))
            {
               ?>
         
            <h4>
            <input type="radio" value="<?php echo $row_bank['bank_id']; ?>" name="ch_bank">
               Bank Name:- <?php echo $row_bank['bank_name'];?> <br>
               &nbsp;&nbsp;&nbsp;Address:- <?php echo $row_bank['bank_address'];?> <br>
               &nbsp;&nbsp;Branch :- <?php echo $row_bank['branch'];?> <br>
               &nbsp;&nbsp;Account_no :- <?php echo $row_bank['acc_no'];?><br><br>
            </h4>
             <?php 
            } ?>
</form>
         </div>
            <br>
         <button type="button" data-toggle="modal" data-target="#bankdetail" class="btn btn-success"> ADD BANK DETAILS </button><br><br>
         <!-- MODEL START -->
         <div id="bankdetail" class="modal fade" role="dialog">
         <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
         <div class="modal-header">
         <h3 class="modal-title">Bank Details</h3>


         <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
         <form name="form2" class="return_order" method="post">
         <table class="table" style="font-size: 18px;">
         <tr>
         <th>Bank Name:</th>
         <td><input type="text" name="bname"></td>
         </tr>
          <tr>
         <th>Bank Address:</th>
         <td><textarea cols="30" rows="4" name="bank_address"></textarea></td>
         </tr>
          <tr>
         <th>Bank Branch:</th>
         <td><input type="text" name="b_branch"></td>
         </tr>
         <tr>
         <th>Bank IFSC-CODE:</th>
         <td><input type="text" name="bank_ifsc"></td>
         </tr>
         <tr>
         <th>Account Number:</th>
         <td><input type="text" name="bank_a/c_no"></td>
         </tr>
         <tr>
         <th colspan="2"><button type="submit" name="btn_bank_add" id="submit" class="btn btn-info">ADD BANK DETAIL</button></th>
         </tr>
         </table>
         </form>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
         </div>
         </div>
         <!-- model end -->
         </div>
         </div>
         <div class="row">
         <div class="col-lg-7">
         </div>
         </div>
         <div class="col-lg-1">
         </div>
         <div class="col-lg-4">
         </div>
         </div>
         </form>
         <br><br>
         <!-- footer -->
         <!-- -728x90 -->
         <?php
            include("footer.php");
            ?>
         <!-- //footer -->
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
         <script type="text/javascript">
            function readURL(input) {
            if (input.files && input.files[0]) {
            
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('.image-upload-wrap').hide();
            
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();
            
            $('.image-title').html(input.files[0].name);
            };
            
            reader.readAsDataURL(input.files[0]);
            
            } else {
            removeUpload();
            }
            }
            
            function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
            }
            $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
            });
            
         </script>
   </body>
   <!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/single.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:17 GMT
</html>