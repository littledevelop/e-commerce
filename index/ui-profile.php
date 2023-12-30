<?php 
include("controller.php");
$ob= new controller;
$disp_admin= $ob->view_admin();

   
   //display records of state
   
   $disp_state= $ob->get_state() ;
    
    //to Update Admin Data
    $ob->update_admin(); 

    //to Active /Deactive Account
   $ob->update_status_admin();

   //TO Change Password
   $ob->change_password_admin();

   
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
        <title>Web Master Admin : User Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="../assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

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
                                <!-- PAGE HEADING TAG - START --><h1 class="title">User Profile</h1><!-- PAGE HEADING TAG - END -->                            </div>

                            <div class="pull-right hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.php"><i class="fa fa-home"></i>Home</a>
                                    </li>
                                    <li>
                                        <a href="ui-profile.php">Social Media</a>
                                    </li>
                                    <li class="active">
                                        <strong>User Profile</strong>
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
                                        <div class="jumbotron-center">
                                            <div class="uprofile-image">
                                                <img alt="" src="<?php echo @$disp_admin['admin_profile']; ?>" class="img-responsive" style="width:12%; height: 15%;">
                                                
                                            </div>
                                        </div>
                                    </div> 
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="uprofile-content row text-center">
                                       <div class="enter_post col-xs-12 ">
                                            <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['admin_name'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div><br>
                                             <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['admin_email'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div><br>
                                             <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">Mobile</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['admin_mobile'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div><br>
                                             <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['admin_address'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div><br>
                                             <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">State</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['state_name'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div><br>
                                             <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">City</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['city_name'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div><br>
                                             <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">Gender</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;"><?php echo @$disp_admin['admin_gender'];?></span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                           </div>
                                           <br>
                                          <div class="row">
                                                <div class="col-sm-3"></div>   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="field-1" style="font-size: 20px; font-weight: bold; height: 30px;">Account Status</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <span class="" style="font-size: 20px; font-weight: bold; height: 30px;">
                                                        <a href="ui-profile.php?status=<?php echo $disp_admin['admin_status'];?>&&id=<?php echo $disp_admin['admin_id'];?>" class="btn btn-primary active">
                                                            
                                                           <?php echo @$disp_admin['admin_status'];?>
                                                           </a>
                                                       </span>
                                                </div>
                                                <div class="col-sm-3"></div>
                                           </div>


                                       </div><br><br>
                                         <div class="row">
                                            <div class="col-md-3"></div>
                                         <div class="-col-md-3"><br><br>
                                                <button type="submit" class="btn btn-warning btn-icon bottom15 right15" name="btn_update" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-pencil-square-o"></i> &nbsp; <span>EDIT PROFILE</span>
                                                </button>
                                        </div>
                                        <div class="col-md-3"><br><br>
                                                <button type="submit" class="btn btn-warning btn-icon bottom15 right15" name="btn_update" data-toggle="modal" data-target="#myModal1">
                                                    <i class="fa fa-pencil-square-o"></i> &nbsp; <span>Change Password</span>
                                                </button>
                                        </div>
                                        <div class="col-md-3"></div>
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




            </div>    </div>
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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="../assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 


        <!-- General section box modal start -->
        <!-- modal end -->
        <!-- profile Model start -->
            <?php include("ui-profile-edit.php"); ?>
            <?php include("change_password.php");?>
        <!-- profile Model end-->
    </body>

<!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:29:27 GMT -->
</html>



