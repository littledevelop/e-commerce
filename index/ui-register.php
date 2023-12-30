<?php
   include("controller.php");
   
   $ob = new controller;
   
   //display records of state
   
   $disp_state= $ob->get_state() ;

   //insert Admin

   $ob->add_admin();
   ?>
<!DOCTYPE html>
<html class=" ">
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:31:26 GMT -->
   <head>
      <!-- 
         * @Package: Crest Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Crest Admin Theme.
         -->
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <meta charset="utf-8" />
      <title>Web Master Admin : Registration Page</title>
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
      <!-- <link href="../assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/> -->
      <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS FRAMEWORK - END -->
      <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - START --> 
      <link href="../assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen"/>
      <!-- HEADER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE CSS TEMPLATE - START -->
      <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
      <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
      <!-- CORE CSS TEMPLATE - END -->
      
   </head>
   <!-- END HEAD -->
   <!-- BEGIN BODY -->
   <body class=" login_page" style="background-color: rgb(199 199 169 / 83%);background-image: none;">
      <div class="container-fluid">
         <div class="register-wrapper row">
            <div id="register" class="login loginpage col-lg-offset-4 col-md-offset-3 col-sm-offset-3 col-xs-offset-0 col-xs-12 col-sm-6 col-lg-4">
               <h1><a href="#" title="Registration" tabindex="">Admin</a></h1>
               <form name="loginform" id="loginform" action="" method="post" enctype="multipart/form-data">
                  <p>
                  <div class="form-group">
                     <label class="form-label">Name</label>
                     <span class="desc">e.g. "anything"</span>
                     <input type="text" tabindex="1" name="name" id="user_login" class="input" value="" size="20" /></label>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label">Email</label>
                     <span class="desc">e.g. "some@example.com"</span>
                     <input type="text" tabindex="2" name="email" id="user_login2" class="input" value="" size="20" /></label>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label">Password</label>
                     <span class="desc">e.g. "hello123"</span>
                     <input type="password" tabindex="3" name="password" id="pass" class="input" value="" size="20" /></label>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label">Confirm Password</label>
                     <span class="desc">e.g. "hello123"</span>
                     <input type="password" tabindex="4" name="cpassword" id="user_pass2" class="input" value="" size="20" /></label>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label" for="address">Address</label>
                     <span class="desc" >e.g. "This text area field auto grows"</span>
                     <textarea class="form-control autogrow input" tabindex="5" cols="5" name="address" id="address" placeholder="This textarea will grow in size with new lines." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 50px;"></textarea>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label" for="state">State</label>
                     <select class="form-control input-lg m-bot15" id="get_state" tabindex="6" name="state" onchange="get_statewise_city(this.value);">
                        <option value="">Select State</option>
                        <?php
                           while($row=mysqli_fetch_array($disp_state))
                           {
                           ?>
                        <option value="<?php echo $row['state_id']; ?>"><?php  echo $row['state_name']; ?></option>
                        <?php
                           }
                           ?>
                     </select>
                  </div>
                  </p>    
                  <p>
                  <div class="form-group">
                     <label class="form-label" for="city">City</label>
                     <select class="form-control input-lg m-bot15" name="city" id="get_city" tabindex="7">
                        <option value="">Select City</option>
                     </select>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label" for="field-1">Phone</label>
                     <span class="desc">e.g. "+91 9898 811 634"</span>
                     <input type="text" class="form-control" name="mobile"  tabindex="8" data-mask="+99 9999 999 999" >
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label for="gender">Gender<br>
                     <input type="radio" tabindex="9" name="gender" class="skin-flat-yellow" data-error="#errnm2" value="male" >MALE
                     <input type="radio" tabindex="10" name="gender" class="skin-flat-yellow" data-error="#errnm2" value="female" >FEMALE
                     <span id="errnm2"></span>
                     </label>
                  </div>
                  </p>
                  <p>
                  <div class="form-group">
                     <label class="form-label" for="formfield10">Upload File</label>
                     <span class="desc">e.g. "character.jpg"</span>
                     <div class="controls">
                        <input type="file" tabindex="11"  name="profile" >
                     </div>
                  </div>  
                  </p>
                  <p class="forgetmenot">
                  <div class="form-group">
                     <label class="icheck-label form-label" for="rememberme">
                     <input name="rememberme" type="checkbox" tabindex="12" id="rememberme" data-error="#errnm1" value="forever" class="icheck-minimal-yellow" checked>
                     I agree to terms to conditions
                     <span id="errnm1"></span>
                     </label>
                  </div>
                  </p>
                  
                  <p>
                      <div tabindex="13"></div>
                  
                  </p>
                  <p class="submit">
                     <input type="submit" name="signup" id="wp-submit"  tabindex="14" class="btn btn-accent btn-block btn-lg" value="Sign Up" />
                  </p>
               </form>
              
            </div>
         </div>
      </div>
      <!-- MAIN CONTENT AREA ENDS -->
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
      <script src="../assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
      <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
      <!-- CORE TEMPLATE JS - START --> 
      <script src="../assets/js/scripts.js" type="text/javascript"></script> 
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
      <script src="validation1.js"></script>
      <script src="validation.js"></script>
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
   <!-- Mirrored from jaybabani.com/crest-admin/demo/app/ui-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 12:31:26 GMT -->

   <style type="text/css">
.loginpage form label{
             color: rgb(54 28 157) /*#ffffff*/;

         font-weight: bold;
      }
      .form-group .desc{
         color: #670d64;
      }
   </style>
</html>