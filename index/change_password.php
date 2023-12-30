<?php
//To Update Admin Profile
?>
<<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title></title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   </head>
   <body>
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
        <!-- profile Model start -->
      <div class="modal fade" id="myModal1" role="dialog">
      <div class="modal-dialog modal-lg">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Change Password</h4>
            </div>
            <div class="modal-body">
            <form name="loginform" id="loginform" action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Old Password</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="password" class="form-control" name="opassword" id="field-1">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">New Password</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="password" class="form-control" name="npassword" id="field-1">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Confirm Password</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="password" class="form-control" name="cpassword" id="field-1" >
                           </div>
                        </div>
                     </div>
               

                     
                  <div class="form-group">
                      <div class="col-lg-12">
                          <div class="controls text-center">
                              <label><?php echo @$msg; ?></label>

                             <br><br>

                                <button type="submit" class="btn btn-primary btn-icon bottom15 right15" name="btn_changepassword" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-edit"></i> &nbsp; <span>Change Password</span>
                                                </button>

                          </div>
                      </div>
                  </div>
            </div>

                     <br>
                     <br>
                  <div class="modal-footer">
                     <button type="button" class="bn btn-default" data-dismiss="modal">Close</button>
                  </div>
               </form>
            </div>
         </div>
         </div>
      </div>

        <!-- profile Model end-->

</html>