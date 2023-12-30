<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- <script src="validation.js"></script> -->
	<script type="text/javascript">
		 $(document).ready(function(){
    $('#choose-files').change(function(){
        $("#frames").html('');
        for (var i = 0; i < $(this)[0].files.length; i++) {
            $("#frames").append('<img src="'+window.URL.createObjectURL(this.files[i])+'" width="100px" height="100px"/>');
        }
    });
});
	</script>
</head>
<body>
	  <!-- profile Model start -->
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
    
  <div class="modal fade" id="addimage" role="dialog">
      <div class="modal-dialog modal-lg">
         <!-- Modal content-->
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">ADD IMAGES</h4>
            </div>
            <script type="text/javascript"></script>
               <script src="validation.js"></script>
            <div class="modal-body">
            <form name="loginform" id="loginform" action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                     <div class="form-group">
                        <div class="col-lg-6">
                            <label class="form-label" style="float: left;" >Product Image</label> 
                                <input accept="image/*" type='file' id="choose-files" name="choose-file[]" multiple="" />
                        </div>
                        <div class="col-lg-3">
                            <?php 
                                if(isset($_REQUEST['edit_image']))
                                {
                            ?>
                                <img src="<?php echo @$edit['prod_img_path'];?>" height ="200px" width="200px"/>
                            <?php
                                }
                                else
                                {
                              ?>
                              <div class="col-lg-3">
                           <div class="controls">
                            <div id="frames"></div>
                           </div>
                        </div>
                              <?php      
                                }
                                
                            ?>
                        </div>
                        <div class="col-lg-3">
                           <div class="controls">
                            <div id="frames"></div>
                           </div>
                        </div>
                     </div>
                     
                     <br><br>

            		</div>
            		 <div class="form-group">
                      <div class="col-lg-12">
                          <div class="controls text-center">
                            <?php 
                            if(isset($_REQUEST['edit_image']))
                            {
                            ?>
                            <button type="submit" class="btn btn-warning btn-icon bottom15 right15" name="btn_editimage" data-toggle="modal" data-target="#addimage">
                                                    <i class="fa fa-plus"></i> &nbsp; <span>Edit IMAGES</span>
                                                </button>
                            <?php
                            }
                            else
                            {
                            ?>
                                <button type="submit" class="btn btn-danger btn-icon bottom15 right15" name="btn_addimage" data-toggle="modal" data-target="#addimage">
                                                    <i class="fa fa-plus"></i> &nbsp; <span>ADD IMAGES</span>
                                                </button>
                            <?php
                            }
                            ?>

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

</body>
</html>