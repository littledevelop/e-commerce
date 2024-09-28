<?php
// session_start();
include("controller.php");
$ob= new controller;

 if(!isset($_SESSION['id']))
{
    header("location:ui-login.php");
}
?>
<!DOCTYPE html>
<html class=" ">
    
<!-- Mirrored from jaybabani.com/crest-admin/demo/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:27:14 GMT -->
<head>
        <!-- 
         * @Package: Crest Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Crest Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Web Master Admin : Dashboard</title>
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


        <link href="../assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/>

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
                <section class="wrapper main-wrapper row" >

                    <div class='col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <!-- PAGE HEADING TAG - START --><h1 class="title">Dashboard</h1><!-- PAGE HEADING TAG - END -->                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- MAIN CONTENT AREA STARTS -->
                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Guest / Registered</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="chart-container">
                                            <div class="" style="height:200px" id="user_type"></div>
                                        </div>
                                    </div>      
                                </div> <!-- End .row -->
                            </div>
                        </section></div>

                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Platforms Used</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="chart-container">
                                            <div class="" style="height:200px" id="platform_type_dates"></div>
                                        </div>
                                    </div>      
                                </div> <!-- End .row -->
                            </div>
                        </section></div>

                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Browsers Used</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="chart-container">
                                            <div class="" style="height:200px" id="browser_type"></div>
                                        </div>


                                    </div>      
                                </div> <!-- End .row -->
                            </div>
                        </section></div>

                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Site Referrals</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="chart-container">
                                            <div class="chart has-fixed-height" style="height:200px" id="scatter_chart"></div>
                                        </div>
                                    </div>      
                                </div> <!-- End .row -->
                            </div>
                        </section></div>

                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Today Visitors</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="chart-container">
                                            <div class="chart has-fixed-height" style="height:200px" id="page_views_today"></div>
                                        </div>
                                    </div>      
                                </div> <!-- End .row -->
                            </div>
                        </section></div>


                    <div class="col-xs-12 col-md-6 col-lg-6">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Server Load</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="chart-container">
                                            <div class="chart has-fixed-height" style="height:200px" id="gauge_chart"></div>
                                        </div>
                                    </div>      
                                </div> <!-- End .row -->
                            </div>
                        </section></div>


                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <section class="box nobox marginBottom0">
                            <div class="content-body">    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-xs-12">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                                            <div class="stats">
                                                <h4><strong>45%</strong></h4>
                                                <span>New Orders</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-12">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-shopping-cart icon-md icon-rounded icon-accent'></i>
                                            <div class="stats">
                                                <h4><strong>243</strong></h4>
                                                <span>New Products</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-12">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-dollar icon-md icon-rounded icon-purple'></i>
                                            <div class="stats">
                                                <h4><strong>$3424</strong></h4>
                                                <span>Profit Today</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-xs-12">
                                        <div class="r4_counter db_box">
                                            <i class='pull-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                            <div class="stats">
                                                <h4><strong>1433</strong></h4>
                                                <span>New Users</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- End .row -->    
                            </div>
                        </section></div>


                    <div class="col-xs-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Visitor's Statistics</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-xs-12">
                                        <div class="wid-vectormap">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-9">
                                                    <figure>
                                                        <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>        
                                                    </figure>
                                                </div>
                                                <div class="map_progress col-xs-12 col-sm-3">
                                                    <h4>Unique Visitors</h4>
                                                    <span class='text-muted'><small>Last Week Rise by 62%</small></span>
                                                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>
                                                    <br>
                                                    <h4>Registrations</h4>
                                                    <span class='text-muted'><small>Up by 57% last 7 days</small></span>
                                                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>
                                                    <br>
                                                    <h4>Direct Sales</h4>
                                                    <span class='text-muted'><small>Last Month Rise by 22%</small></span>
                                                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </div> <!-- End .row -->

                            </div>
                        </section></div>


                    <!-- MAIN CONTENT AREA ENDS -->
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

        <script src="../assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="../assets/js/dashboard.js" type="text/javascript"></script>
        <script src="../assets/plugins/echarts/echarts-custom-for-dashboard.js" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="../assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 


        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

<!-- Mirrored from jaybabani.com/crest-admin/demo/app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:29:12 GMT -->
</html>



