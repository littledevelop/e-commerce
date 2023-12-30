<?php
   include("controller.php");
   $ob = new controller;
   $ob->add_category();
   
   //view category 
   $result = $ob->view_category();
   
   //delete category
   $ob->remove_category();
   
   //before edit disp category
   $edit= $ob->edit_category();
   
   //to change category
   $ob->update_category();

   //to active/deactive status
   $ob->change_category_status();

   $per_page_record=4; 
   $total_result= $ob->view_category();
   $total_record= mysqli_num_rows($total_result);
   $total_page= ceil($total_record/$per_page_record);

   $result = $ob->category_pagination($per_page_record,$total_record,$total_page);
   if(!isset($_REQUEST['page']))
   {
      $page=1;
   }
   ?>

<!DOCTYPE html>
<html class=" ">
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:37:10 GMT -->
   <head>
      <!-- 
         * @Package: Crest Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Crest Admin Theme.
         -->
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta charset="utf-8" />
      <title>Web Master Admin : Manage Category</title>
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
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/plugins/calendar/fullcalendar.css" rel="stylesheet" type="text/css" media="screen"/>
      <link href="../assets/plugins/icheck/skins/minimal/minimal.css" rel="stylesheet" type="text/css" media="screen"/>
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
            <section class="wrapper main-wrapper row">
               <div class='col-xs-12'>
                  <div class="page-title">
                     <div class="" style="text-align: center;">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">MANAGE CATEGORY</h1>
                        <!-- PAGE HEADING TAG - END -->                           
                     </div>
                  </div>
               </div>

               <div class="clearfix"></div>
               <!-- MAIN CONTENT AREA STARTS -->
               <div class="content-body">
                  <div class="row">
                     <div class="col-md-8 col-sm-9 col-xs-10">
                        <form name="form1" id="category_form" method="post" action="" enctype="multipart/form-data" >
                           <div class="row">
                           <div class="col-lg-4"> 
                              <!-- <div class="form-group"> -->
                                 <label class="form-label" >Category Name</label>
                           
                              <div class="controls"> 
                                 <input type="text" class="form-control" placeholder="Category Name" class="form-control" name="category_name" value="<?php echo @$edit['category_name']; ?>">
                              </div>
                              <!-- </div> -->
                           
                           </div>
                           <div class="col-lg-8">
                              <div class="row">
                                 <div class="col-lg-4" style="padding: 29px 10px;" > 
                     
                                    <input type="file" accept="image/*"  id="imgInp" name="choose-file" />
                                    <label for="choose-file">Choose File</label>
                                 </div>

                                 <div class="col-lg-4">
                                  <img id="blah" src="#" alt="your image" / height="200px" width="">
                                 </div>

                                 <div class="col-lg-4">
                                    
                                 <?php
                                    if(isset($_REQUEST['edit']))
                                    {
                                    ?>
                                       <img src="<?php echo @$edit['category_image']; ?>" width="250px" height="250px">
                                 <?php
                                    }
                                    ?>
                                 </div>
                              </div>
                           </div>

                        </div>
                                 <?php
                                 if(isset($_REQUEST['edit']))
                                 {
                                 ?>
                                 <button type="submit" class="btn btn-warning btn-icon bottom15 right15" name="btn_update">
                                 <i class="fa fa-edit"></i> &nbsp; <span>Update CATEGORY</span>
                                 </button>
                              <?php
                                 }
                                 else
                                 {
                                 ?>
                              <button type="submit" class="btn btn-success btn-icon bottom15 right15" name="btn_add">
                              <i class="fa fa-car"></i> &nbsp; <span>ADD CATEGORY</span>
                              </button>
                              <?php
                                 }
                                 ?>
                        </form>
                        </div>
                     </div>
                  </div>
                  <!-- //data tables -->
                  <div class="content-body">
                     <div class="row">
                        <div class="col-md-8 col-sm-9 col-xs-10">
                           <form name="form2" method="post">
                              
                           <div class="row">
                              <div class="col-md-6">
                                 
                           <input type="text" name="txt_search" placeholder="Search">
                           <input type="submit" name="btn_search" value="SEARCH" class="btn btn-primary">
                              </div>
                              <div class="col-md-6">
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="content-body">
                     <div class="row">
                        <div class="col-xs-12">
                           <!-- ********************************************** -->
                           <table class="table table-striped" id="example2" >
                              <thead>
                                 <tr>
                                    <th>Category Profile</th>
                                    <th>Category Name <a href="manage-category.php?col_name=category_name&&order=asc">A</a>/<a href="manage-category.php?col_name=category_name&&order=desc">D</a></th>
                                    <th>Edit</th>
                                    <th>Remove</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    while ($fetch=mysqli_fetch_array($result))
                                    {
                                    ?>
                                 <tr>
                                    <td><img src="<?php echo $fetch['category_image'];?>" height="60" width="60"></td>
                                    <td><?php echo $fetch['category_name'];?></td>
                                    <td>
                                       <a href="manage-category.php?edit=<?php echo $fetch['category_id'];?>">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="pencil-square-o"><i class="fa fa-edit" style="font-size:x-large;"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <a href="manage-category.php?delete=<?php echo $fetch['category_id'];?>" onclick="return confirm('Are You Sure Want To Remove Category?')">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="trash"><i class="fa fa-trash" style="font-size: x-large;"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <!-- <div class="col-md-6 bottom15 right15"> -->
                                        <a href="manage-category.php?status=<?php echo $fetch['category_status'];?>&&id=<?php echo $fetch['category_id'];?>">
                                            <?php
                                            if($fetch['category_status']=='Active')
                                            {
                                            ?>

                                                <input type="submit" class="btn btn-primary active" value="<?php echo $fetch['category_status']?> ">
                                            <?php
                                            } 
                                            else if($fetch['category_status']=='Deactive')
                                            {
                                            ?>
                                                <input type="submit" class="btn btn-warning active" value="<?php echo $fetch['category_status']?> " >
                                            <?php
                                            }
                                            ?>
                                        </a>
                                       <!-- </div> -->
                                    </td>
                                 </tr>
                                 <?php    // code...
                                    }
                                    ?>
                                    <tr style="padding: 8px;">
                                       <td colspan="6">
                                        <nav class="page navigation example mt-5" style="float: right;" >
                              <ul class="pagination justify-content-center">
                                 <?php
                                 @$page= $_REQUEST['page'];
                                 $prev = $page-1;
                                 $next= $page+1;
                                 if($page>1)
                                 {
                                 ?>
                                 
                                 <li class="page-item"><a href="manage-category.php?page=<?php echo $prev; ?>">Prev</a></li>
                                 <li class="page-item"><a href="manage-category.php?page=1">First</a></li>

                                 <?php
                                 }
                                    for($i=1;$i<=$total_page;$i++)
                                    {
                                 ?>
                                 <li class="page-item <?php if($page==$i) {echo "active"; } ?> "><a class="page-link" href="manage-category.php?page=<?php echo $i;?>"><?php echo $i; ?></a></li>
                                 <?php
                                    }
                                    if($page<$total_page)
                                    {
                                    ?>

                                    <li class="page-item"><a href="manage-category.php?page=<?php echo $next; ?>">Next</a></li>
                                 <li class="page-item"><a href="manage-category.php?page=<?php echo $total_page ; ?>">Last</a></li>

                                    <?php
                                    }
                                  ?>
                              </ul>
                           </nav>  
                                       </td>
                                    </tr>
                              </tbody>
                           </table>
                           <!--  *********************************************** -->
                           
                        </div>
                     </div>
                           </form>
                  </div>
                  <!-- MAIN CONTENT AREA ENDS -->
            </section>
         </section>
         <!-- END CONTENT -->
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
      <script src="validation.js"></script>

      <script type="text/javascript">
        



      </script>
      <script src="../assets/plugins/calendar/moment.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/calendar/fullcalendar.min.js" type="text/javascript"></script>
      <script src="../assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
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
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:37:12 GMT -->
</html>