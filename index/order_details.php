<?php 
   include("controller.php");
   $ob= new controller;
   //to view order
   $disp_order = $ob-> view_selected_order();
   $disp_order_amt= $ob->sum_total_order_amount();
   // $disp_data = mysqli_fetch_array($disp_order_amt);
    // //delete order
   // $ob->remove_order();
   
   // echo $order_no = $_SERVER['QUERY_STRING']; 
   //to Change status
   $ob->change_order_status();
   $ob->reject_order_status();
   
   ?>
<!DOCTYPE html>
<html class=" ">
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:29:26 GMT -->
   <head>
      <!-- 
         * @Package: Crest Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Crest Admin Theme.
         -->
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta charset="utf-8" />
      <title>Web Master Admin : Manage Order</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />
      <!-- Favicon -->
      <link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57-precomposed.png">
      <!-- For iPhone -->
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">
      <!-- For iPhone 4 Retina display -->
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">
      <!-- For iPad -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">
      <!-- For iPad Retina display -->
      <!-- CORE CSS FRAMEWORK - START -->
      <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
      <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS FRAMEWORK - END -->
      <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      .
      <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE CSS TEMPLATE - START -->
      <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS TEMPLATE - END -->
      <style type="text/css">
         .form-label
         {
         color: slateblue;
         font-weight: bold;
         }
         .form-control
         {
         border-color:darkcyan;
         }
         input[type=text]
         {
         border-color: darkcyan;
         }
         img
         {
         /*width: 200px;*/
         }
      </style>
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <body class=" ">
      <!-- START TOPBAR --><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <?php 

         // include("top_header.php"); 
         ?>
      <!-- END TOPBAR -->
      <!-- START CONTAINER -->
      <div class="page-container row-fluid container-fluid">
         <!-- SIDEBAR - START -->
         <?php
            include("side_menu.php"); 
            ?>
         <!--  SIDEBAR - END -->
         <!-- START CONTENT -->
         <section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>
               <div class='col-xs-12'>
                  <div class="page-title">
                     <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">order Details</h1>
                        <!-- PAGE HEADING TAG - END -->                            
                     </div>
                     <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                           <li>
                              <a href="index.php"><i class="fa fa-home"></i>Home</a>
                           </li>
                           <li>
                              <a href="ui-profile.php">Social Media</a>
                           </li>
                           <li class="active">
                              <strong>Manage Order</strong>
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <!-- MAIN CONTENT AREA STARTS -->
               <div class="col-lg-12" style="padding-left:1px;">
                  <section class="box nobox ">
                     <div class="content-body">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="uprofile-content row text-center">
                                 <div class="enter_post col-lg-12 ">
                                    <form id="myForm" method="post" enctype="multipart/form-data">
                                       <div class="row">
                                          <div align="right">
                                             <a href="view_order.php" class="btn btn-info btn-icon bottom15 right15"><i class="fa fa-mail-reply" style="font-size:medium;"></i> &nbsp; <span style="font-size: large;">BACK</span></a>
                                          </div>
                                          <!-- //data tables -->
                                          <table class="table table-bordered">
                                             <tr>
                                                <th>Order No:- </th>
                                                <td><?php echo $_REQUEST['order_details'] ?></td>
                                                <th>Order Amount:-</th>
                                                <td><?php echo $disp_order_amt['total_pay'] ?></td>
                                                <th> Payment Method:</th>
                                                <td><?php echo $disp_order_amt['order_method'];?></td>
                                                <th>Email:</th>
                                                <td><?php echo $disp_order_amt['user_email'];?></td>
                                             </tr>
                                             <tr >
                                                <th >Customer Name:</th>
                                                <td><?php echo $disp_order_amt['user_name']; ?></td>
                                                <th>State:</th>
                                                <td><?php echo $disp_order_amt['state_name'];?></td>
                                                <th>City:</th>
                                                <td><?php echo $disp_order_amt['city_name'];?></td>
                                                <th >Mobile NO:</th>
                                                <td ><?php echo $disp_order_amt['user_mobile']; ?></td>
                                             </tr>
                                          <!--    <tr>
                                             </tr> -->
                                             <tr>
                                                <th>Address:</th>
                                                <td><?php echo $disp_order_amt['shipping_address']; ?></td>
                                                <th>Pincode</th>
                                                <td><?php echo $disp_order_amt['shipping_pincode'];?></td>
                                             </tr>
                                          </table>
                                          <div class="content-body">
                                             <div class="row">
                                                <div class="col-xs-12">
                                                   <!-- ********************************************** -->
                                                   <br><br>
                                                   <table class="table table-striped">
                                                      <thead>
                                                         <tr>
                                                            <th>Sr_no.</th>
                                                            <th>Product</th>
                                                            <th>Product_name</th>
                                                            <!-- <th>Sub Name</th> -->
                                                            <th>Stock</th>
                                                            <!-- <th>Article No</th> -->
                                                            <th>Mrp</th>
                                                            <th>Discount</th>
                                                            <th>Price</th>
                                                            <th>Qty</th>
                                                            <th>Total Amount</th>
                                                            <th>Pending</th>
                                                            <th>Confirm</th>
                                                            <th>Packed</th>
                                                            <th>Shipped</th>
                                                            <th>Delievered</th>
                                                            <th>Reject</th>
                                                            <th>Track</th>
                                                            <!-- <th>Transaction ID</th> -->
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <form name="form1" method="post">
                                                            
                                                         <?php 
                                                            while ($row=mysqli_fetch_array($disp_order))
                                                            {
                                                                  $ordid=$row['order_id'];

                                                                  $disp_track= $ob->disp_order_track($ordid);

                                                         ?>

                                                         <tr>
                                    <form  method="post" name="form<?php echo $row['order_id']; ?>">
                                     <input type="text" name="order_no" value="<?php  echo $row['order_no']; ?>"  style="display: none;">
                                    <input type="text" name="order_id" value="<?php echo $row['order_id'];?>" style="display: none;">
                                    <input type="text" name="order_status" value="<?php echo $row['order_status'];?>" style="display: none;">
                                    <td><?php echo $row['order_id'];?></td>
                                    <td ><img src="<?php echo $row['product_image'];?>" height="95" width="95"></td>
                                    <td ><?php echo $row['product_name'];?></td>
                                    <td><?php echo $row['product_qty'];?></td>
                                    <td><?php echo $row['product_price'];?></td>
                                    <td><?php echo $row['discount_price']; ?></td>
                                    <td><?php echo $row['selling_price']; ?></td>
                                    <td><?php echo $row['order_qty']; ?></td>
                                    <td><?php echo $row['total_amount'];?></td>
                                    <td>
                                    <?php if($row['order_status']=="Pending"  )
                                       {
                            
                                        ?>
                                    <button type="submit" name="btn_ch_pending" style="border:none;" disabled="" > <div class="fa-hover "><span data-class="toggle-on">
                                    <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                    </button> 
                                    <?php
                                       }else{
                                          ?>
                                    <button type="submit" name="btn_ch_pending" style="border:none;"> 
                                    <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div><span data-class="toggle-on">
                                    </button>
                                    <?php
                                       }
                                          ?>
                                    </td>
                                    <td>
                                    <?php 
                                    if($row['order_status']=="Confirm" )
                                       {
                                        ?>
                                    <button type="submit" name="btn_ch_confirm" style="border:none;" disabled=""> 
                                    <div class="fa-hover "><span data-class="toggle-on">
                                    <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                    </button>
                                    <?php
                                       }else{
                                          ?>
                                    <button type="submit" name="btn_ch_confirm" style="border:none;" > 
                                    <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div>
                                    </button>
                                    <?php
                                    } 
                                    ?>
                                    </td>
                                    <td>
                                    <?php 
                                       // echo $row['order_status'];
                                       if($row['order_status']=="Packed" )
                                       {
                                        ?>
                                    <button type="submit" name="btn_ch_packed" style="border:none;" disabled="" > <div class="fa-hover "><span data-class="toggle-on">
                                    <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                    </button>
                                    <?php
                                       }else
                                       {
                                       ?>
                                    <button type="submit" name="btn_ch_packed" style="border:none;" >
                                    <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div>
                                    </button>
                                    <?php 
                                       }?>
                                    </td>
                                    <td>
                                    <?php 
                                       // echo $row['order_status'];
                                       if($row['order_status']=="Shipped" )
                                       {
                                        ?>
                                    <button type="submit" name="btn_ch_shipped" style="border:none;" disabled="" >
                                    <div class="fa-hover "><span data-class="toggle-on">
                                    <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                    </button>
                                    <?php
                                       }else{
                                          ?> 
                                    <button type="submit" name="btn_ch_shipped" style="border:none;" >
                                    <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div>
                                    </button>
                                    <?php 
                                       }
                                             ?>
                                    </td>
                                    <td>
                                    <?php 
                                       // echo $row['order_status'];
                                       if($row['order_status']=="Delievered" )
                                       {
                                        ?>
                                    <button type="submit" name="btn_ch_deliever" style="border:none;" disabled="" > <div class="fa-hover "><span data-class="toggle-on">
                                    <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                    </button>
                                    <?php
                                       }else{
                                          ?> 
                                    <button type="submit" name="btn_ch_deliever" style="border:none;" >
                                    <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div>
                                    </button>
                                    <?php 
                                       }
                                             ?>
                                    </td>
                                    <td>
                                    <?php 
                                       // echo $row['order_status'];
                                       if($row['order_status']=="Reject" )
                                       {
                                        ?>
                                    <button type="submit" name="btn_ch_reject" style="border:none;" disabled="" >
                                    <div class="fa-hover "><span data-class="toggle-on">
                                    <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                    </button>
                                    <?php
                                       }else{
                                          ?> 
                                    <button type="submit" name="btn_ch_reject" style="border:none;" >
                                    <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div>
                                    </button>
                                    <?php 
                                       }
                                             ?>
                                    </td>
                                    <td><button data-target="#myModal<?php echo $row['order_id']; ?>" name="btn_track" type="button" data-toggle="modal" class="btn btn-success btn-sm" style="border-radius: 12px;color: red;">Track </button></td>
                                    </tr>
                                    <!-- Modal -->
<?php include("../track.php"); ?>
 <!-- MODAL END -->

                                    </form>
                                    <?php    // code...
                                       
                                    }
                                       ?>

                                    </tbody>
                                    </table>
                                                         </form>
                                    <!--  *********************************************** -->
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- </form> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
      </div>
      </section>
      </div>
      <!-- MAIN CONTENT AREA ENDS-->
      </section>
      </section>
      <!-- END CONTENT -->
      <div class="page-chatapi hideit">
         <div class="search-bar">
            <input type="text" placeholder="Search" class="form-control">
         </div>
         <div class="chat-wrapper">
            <h4 class="group-head">Groups</h4>
            <ul class="group-list list-unstyled">
               <li class="group-row">
                  <div class="group-status available">
                     <i class="fa fa-circle"></i>
                  </div>
                  <div class="group-info">
                     <h4><a href="#">Work</a></h4>
                  </div>
               </li>
               <li class="group-row">
                  <div class="group-status away">
                     <i class="fa fa-circle"></i>
                  </div>
                  <div class="group-info">
                     <h4><a href="#">Friends</a></h4>
                  </div>
               </li>
            </ul>
            <h4 class="group-head">Favourites</h4>
            <ul class="contact-list">
               <li class="user-row " id='chat_user_1' data-user-id='1'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Clarine Vassar</a></h4>
                     <span class="status available" data-status="available"> Available</span>
                  </div>
                  <div class="user-status available">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_2' data-user-id='2'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Brooks Latshaw</a></h4>
                     <span class="status away" data-status="away"> Away</span>
                  </div>
                  <div class="user-status away">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_3' data-user-id='3'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Clementina Brodeur</a></h4>
                     <span class="status busy" data-status="busy"> Busy</span>
                  </div>
                  <div class="user-status busy">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
            </ul>
            <h4 class="group-head">More Contacts</h4>
            <ul class="contact-list">
               <li class="user-row " id='chat_user_4' data-user-id='4'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Carri Busey</a></h4>
                     <span class="status offline" data-status="offline"> Offline</span>
                  </div>
                  <div class="user-status offline">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_5' data-user-id='5'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Melissa Dock</a></h4>
                     <span class="status offline" data-status="offline"> Offline</span>
                  </div>
                  <div class="user-status offline">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_6' data-user-id='6'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Verdell Rea</a></h4>
                     <span class="status available" data-status="available"> Available</span>
                  </div>
                  <div class="user-status available">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_7' data-user-id='7'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Linette Lheureux</a></h4>
                     <span class="status busy" data-status="busy"> Busy</span>
                  </div>
                  <div class="user-status busy">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_8' data-user-id='8'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-3.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Araceli Boatright</a></h4>
                     <span class="status away" data-status="away"> Away</span>
                  </div>
                  <div class="user-status away">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_9' data-user-id='9'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-4.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Clay Peskin</a></h4>
                     <span class="status busy" data-status="busy"> Busy</span>
                  </div>
                  <div class="user-status busy">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_10' data-user-id='10'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-5.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Loni Tindall</a></h4>
                     <span class="status away" data-status="away"> Away</span>
                  </div>
                  <div class="user-status away">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_11' data-user-id='11'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-1.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Tanisha Kimbro</a></h4>
                     <span class="status idle" data-status="idle"> Idle</span>
                  </div>
                  <div class="user-status idle">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
               <li class="user-row " id='chat_user_12' data-user-id='12'>
                  <div class="user-img">
                     <a href="#"><img src="../data/profile/avatar-2.png" alt=""></a>
                  </div>
                  <div class="user-info">
                     <h4><a href="#">Jovita Tisdale</a></h4>
                     <span class="status idle" data-status="idle"> Idle</span>
                  </div>
                  <div class="user-status idle">
                     <i class="fa fa-circle"></i>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="chatapi-windows ">
      </div>
      </div>
      <!-- END CONTAINER -->
      <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
      <!-- CORE JS FRAMEWORK - START --> 
      <script src="../assets/js/jquery-1.12.4.min.js" type="text/javascript"></script> 
      <script src="../assets/js/jquery.easing.min.js" type="text/javascript"></script> 
      <script src="../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
      <script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
      <script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
      <script src="../assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
      <script>window.jQuery || document.write('<script src="../assets/js/jquery-1.12.4.min.js"><\/script>');</script>
      <!-- CORE JS FRAMEWORK - END --> 
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      <script src="../assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
      <script src="validation.js"></script>
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE TEMPLATE JS - START --> 
      <script src="../assets/js/scripts.js" type="text/javascript"></script> 
      <!-- CHANGE STATUS -->
      <!-- END CORE TEMPLATE JS - END --> 
      <!-- General section box modal start -->
      <!-- modal end -->
      <!-- profile Model start -->
      <!-- profile Model end-->
   </body>
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:29:27 GMT -->
</html>
