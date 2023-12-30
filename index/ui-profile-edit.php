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
      <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">EDIT PROFILE</h4>
            </div>
            <div class="modal-body">
            <form name="loginform" id="loginform" action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Name</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="text" class="form-control" name="name" id="field-1" value="<?php echo @$disp_admin['admin_name'];?>">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Email</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="text" class="form-control" name="email" id="field-1" value="<?php echo @$disp_admin['admin_email'];?>">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Password</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="text" class="form-control" name="password" id="field-1" value="<?php echo @$disp_admin['admin_password'];?>" >
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Mobile</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <input type="text" class="form-control" name="mobile" id="field-1" value="<?php echo @$disp_admin['admin_mobile'];?>" >
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Address</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <textarea class="form-control" name="address"><?php echo @$disp_admin['admin_address'];?></textarea> 
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">State</label>
                        </div>*
                        <div class="col-lg-6">
                           <div class="controls">
                              <select class="form-control input-md m-bot15" name="state" id="get_state"  onchange="get_statewise_city(this.value); ">
                                 <option value="">Select State</option>
                                 <?php
                                 while($row= mysqli_fetch_array($disp_state)) 
                                {
                                    if(@$disp_admin['admin_state']==$row['state_id'])
                                    {
                                ?>
                                    <option value="<?php echo $row['state_id']; ?>" selected=""><?php echo $row['state_name']; ?></option>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                    <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>
                                <?php
                                    }
                                
                                }

                                 ?>
                                
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <label class="form-label" for="field-1" class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">City</label>
                        </div>
                        <div class="col-lg-6">
                           <div class="controls">
                              <select class="form-control input-md m-bot15" name="city" id="get_city" tabindex="7">
                                 <option value="">Select City</option>
                                   <?php
                                                $disp_city=$ob->get_city(@$disp_admin['admin_state']);
                                            
                                    ?>
                                                    <option style='display:none;'>Select City</option>

                                    <?php   
                                             while($row=mysqli_fetch_array($disp_city))
                                                {

                                                    if(@$disp_admin['admin_city']==$row['city_id'])
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
                        </div>
                        <br>
                     </div>
                     <br>
                     <div class="form-group">
                        <div class="col-lg-6">
                           <br>
                           <label for="gender" class="form-label"  class="form-control" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Gender </label><br>
                        </div>
                        <br>
                        <div class="col-lg-6">
                           <br>
                           <input type="radio" tabindex="9" name="gender" class="skin-flat-yellow" data-error="#errnm2" value="male" <?php if( @$disp_admin['admin_gender']=="male") {echo "checked"; }?> >MALE
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <input type="radio" tabindex="10" name="gender" class="skin-flat-yellow" data-error="#errnm2" value="female" <?php if( @$disp_admin['admin_gender']=="female") {echo "checked"; }?> >FEMALE
                           <span id="errnm2"></span>
                        </div>
                     </div>
                     <br>
                      <div class="form-group">
                        <div class="col-lg-6" style="float:left;text-align: center;">
                            <br><br>
                            <label class="form-label" for="formfield10" style="margin:05px 05px 05px 10px;font-size: 20px; font-weight: bold; height: 30px;">Upload File</label>
                            <span class="desc">e.g. "character.jpg"</span>
                        </div>
                        <div class="col-lg-6" style="float: right;">
                            <div class="controls">
                                <input type="file" tabindex="11"  name="profile" >
                                <img src="<?php echo @$disp_admin['admin_profile'];?>"  height="200px" width = "200px">
                            </div>
                        </div>
                     </div>
                  </div>  

                  <div class="form-group">
                      <div class="col-lg-12">
                          <div class="controls text-center">
                                <button type="submit" class="btn btn-success btn-icon bottom15 right15" name="btn_profileupdate" data-toggle="modal" data-target="#myModal">
                                                    <i class="fa fa-edit"></i> &nbsp; <span>EDIT PROFILE</span>
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