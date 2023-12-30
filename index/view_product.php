<?php 
   include("controller.php");
   $ob= new controller;
   //to view product
   $disp_product = $ob->view_product_admin();
   
    // //delete product
   $ob->remove_product();
   
   // $order_no = $_SERVER['QUERY_STRING'];
 
   // //to active/deactive status
   $ob->update_status_product_admin();

// $per_page_record = 5;
// $total_page = $ob->view_product_admin();
// echo $disp_total_page = mysqli_num_rows($total_page);
// $total_no_page = $total_page/$per_page_record;


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
      <title>Web Master Admin : product Details</title>
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

      <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

       <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link href="../assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" media="screen"/>


      <link href="../assets/plugins/datatables/css/jquery.dataTables.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="../assets/plugins/datatables/extensions/TableTools/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="../assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="../assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="screen"/>

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
      <!-- START TOPBAR -->
      <?php 
         include("top_header.php"); 
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
                        <h1 class="title">product Details</h1>
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
                              <strong>product Details</strong>
                           </li>
                        </ol>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <!-- MAIN CONTENT AREA STARTS -->
               <div class="col-lg-12">
                  <section class="box nobox ">
                     <div class="content-body">
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="uprofile-content row text-center">
                                 <div class="enter_post col-lg-12 ">
                                    <form id="myForm" method="get" enctype="multipart/form-data">
                                       <div class="row">
                                       <div class="pull-right">
                                        <a href="product_info.php" class="btn btn-info btn-icon bottom15 right15">  <i class="fa fa-plus" style="font-size: x-large;"></i> &nbsp; <span style="font-size: large;">Add product</span></a>
                                       
                                       </div>
                                        <!-- //data tables -->
                  <div class="content-body">
                     <div class="row">
                        <div class="col-lg-12">
                           <!-- ********************************************** -->
                           <table class="table table-striped dt-responsive display" id="example-1">
                              <thead style="display: inline-block;">
                                 <!-- <tr>
                                    <th>
                                      <input type="text" name="txt_search" placeholder="Search"> 
                                       
                                    </th>
                                    <th style="float: right;"><select name="sort"><option>Sort By</option></select></th> 
                                 </tr> -->
                                 <tr>
                                    <th>Gallery</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Status</th>
                                    <th>ID</th>
                                    <th>Profile</th>
                                    <th>category</th>
                                    <th>Subcategory</th>
                                    <th>Product Name</th>
                                    <th>Product Brand</th>
                                    <th>Seller Name</th>
                                    <th>offer Name</th>
                                    <th>Qty</th>
                                    <th>Cost Price</th>
                                    <th>MRP Price</th>
                                    <th>Discount Price</th>
                                    <th>Selling Price</th>
                                    <th>Description</th>
                                   
                                </tr>
                              </thead>
                              <tbody style="display: inline-block;">
                                 <?php 
                                    while ($fetch=mysqli_fetch_array($disp_product))
                                    {

                                    ?>
                                 <tr>
                                    <input type="text" name="order_no" value="<?php  echo $fetch['product_id']; ?>" style="display: none;">
                                      <td>
                                       <a href="product_img_gallery.php?gallery=<?php echo $fetch['product_id'];?>">
                                       <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="picture-o"><i class="fa fa-image" ></i></span></div>
                                       </a>
                                    </td>
                                   
                                    <td>
                                       <a href="product_info.php?edit=<?php echo $fetch['product_id'];?>">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="pencil-square-o"><i class="fa fa-edit" ></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <a href="view_product.php?delete=<?php echo $fetch['product_id'];?>" onclick="return confirm('Are You Sure Want To Remove  product?')">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="trash"><i class="fa fa-trash"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <!-- <div class="col-md-6 bottom15 right15"> -->
                                        <a href="view_product.php?product_status=<?php echo $fetch['product_status'];?>&&product_id=<?php echo $fetch['product_id'];?>">
                                            <?php
                                            
                                            if($fetch['product_status']=='Active')
                                            {
                                            ?>

                                                <div class="fa-hover "><span data-class="toggle-on">
                                                   <i class="fa fa-toggle-on" style="font-size: x-large;color:green;"></i></span></div>
                                            <?php
                                            } 
                                            else if($fetch['product_status']=='Deactive')
                                            {
                                            ?>
                                               <div class="fa-hover  "><span data-class="toggle-off"><i class="fa fa-toggle-off"></i></span></div>
                                            <?php
                                            }
                                            
                                            ?>
                                        </a>
                                       <!-- </div> -->
                                    </td>
                                    <td><?php echo $fetch['product_id'];?></td>
                                    <td><img src="<?php echo $fetch['product_image'];?>" height="50px" width="50px"></td>
                                    <td><?php echo $fetch['category_name'];?></td>
                                    <td><?php echo $fetch['subcategory_name'];?></td>
                                    <td><?php echo $fetch['product_name'];?></td>
                                    <td><?php echo $fetch['product_brand'];?></td>
                                    <td><?php echo $fetch['seller_name'];?></td>
                                    <td><?php echo $fetch['offer_name'];?></td>
                                    <td><?php echo $fetch['product_qty'];?></td>
                                    <td><?php echo $fetch['cost_price'];?></td>
                                    <td><?php echo $fetch['product_price'];?></td>
                                    <td><?php echo $fetch['discount_price'];?></td>
                                    <td><?php echo $fetch['selling_price'];?></td>
                                    <td><?php echo $fetch['product_desc'];?></td>
                                    
                                 </tr>
                                 <?php    // code...
                                    }
                                 ?>

                              
                              </tbody>
                           </table>
                           <!--  *********************************************** -->
                        </div>
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

       <script src="../assets/plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
       

      <script src="../assets/plugins/autosize/autosize.min.js" type="text/javascript"></script>

      <script src="validation.js"></script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->
      <!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE TEMPLATE JS - START --> 
      <script src="../assets/js/scripts.js" type="text/javascript"></script> 

    


      <!-- END CORE TEMPLATE JS - END --> 
      <!-- General section box modal start -->
      <!-- modal end -->
      <!-- profile Model start -->
      <!-- profile Model end-->
   </body>
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:29:27 GMT -->
</html>