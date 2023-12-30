<?php 
   include("controller.php");
   $ob = new controller;
   echo "hii"."<br>";
   if(@isset($_REQUEST['cart_item']))
   {
      $user_id= $_REQUEST['cart_item'];
      $ob = new model;
      $disp_cart= $ob->disp_cart_data($user_id);
      echo $no_of_data = mysqli_num_rows($disp_cart);
   
   }
   
   if(@isset($_REQUEST['new_reason_id']))
   {
     $reason_id= $_REQUEST['new_reason_id'];
     $disp_reason_detail = $ob->reason_select_detail($reason_id);
   ?>
<option style="display:none;" value="">Select Reason Detail</option>
<?php
   while ($row_detail = mysqli_fetch_array($disp_reason_detail)) 
   {
   ?>
<option value="<?php echo $row_detail['reas_detail_id']; ?>"><?php echo $row_detail['reason_detail_text']; ?></option>
<?php  // code...
   }
   }
   
  //to display selected no of order 
   if(@isset($_REQUEST['no_of_order']))
   {
   $user_id = $_SESSION['user_id'];
      echo $no_of_order= $_REQUEST['no_of_order'];
   // $disp_order= $ob->disp_all_order();
   
   // $no_of_record =  mysqli_num_rows($disp_order);
   if($no_of_order=="all")
   {
     $display1= $ob->disp_all_order();
     // echo mysqli_num_rows($display);
   }
   else
   {
   $display1 = $ob->view_select_no_of_order($no_of_order);
   }
   }
   ?>
<option style="display:none;" value="">Select Want to View Order</option>
<div id="disp_order_data">
                     <?php
                        
                        while($row1 = mysqli_fetch_array($display1))
                        {
                           // print_r($row1);
                        $ordid=$row1['order_id'];
                           $disp_track= $ob->disp_order_track($ordid);
                     ?>
                     <form method="post" name="form<?php echo $row1['order_id']; ?>">
                     <div class="row">
                        <div class="col-md-3 single-top-left" >
                           <div class="row">
                              <input type="text" name="order_no" value="<?php  echo $row1['order_no']; ?>"  style="display: none;">
                              <input type="text" name="order_id" value="<?php echo $row1['order_id'];?>" style="display: none;">
                              <input type="text" name="order_status" value="<?php echo $row1['order_status'];?>" style="display: none;">
                              <div id="" >
                                 <img src="index/<?php echo $row1['product_image'];  ?>"   alt="" class="img-responsive" height="95" width="95"/>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-6 single-top ">
                           <div class="single-right">
                           <h4><b><?php echo $row1['product_name']; ?></b></h4>
                              <div class="pr-single">
                                 <p class="reduced " style="font-weight:bold;">QTY <?php echo $row1['order_qty']; ?></p>
                              </div>
                              <input type="text" name="order_no" value="<?php echo $row1['order_no']; ?>" style="display: none;">
                              <p class="reduced " style="font-weight:bold;"><del><?php echo $row1['product_price']; ?></del><?php echo  $row1['selling_price']; ?><i class="fa fa-inr"></i></p>
                              <br>
                              <div class="clearfix"> </div>
                           </div>
                           <div class="clearfix"> </div>
                        </div>

                        <div class="col-md-3 single-top-right"  style="float: right;">
                           <div class="single-right">
                              <h4> <b> <?php echo "₹".$row1['total_amount']; ?></b></h4>
                              <br>
                              <button data-target="#myModal<?php echo $row1['order_id']; ?>" name="btn_track" type="button" data-toggle="modal" class="btn btn-success btn-sm" >Track Order</button>
                              <br><br>
                              <a href="rating_review.php?rating=<?php echo $row1['order_id'];?>" class="">Rate And Review Product</a>
                                 <?php if($row1['order_status']=="Confirm") 
                                 {
                                 ?>
                                    <a href="cancel_order.php?cancel_order=<?php echo $row1['order_id']; ?>">Cancel Order</a>
                                 <?php
                                 }
                                 elseif ($row1['order_status']=="Delievered" ) 
                                 {
                                    $date = date("Y-m-d", strtotime('+1 days'));
                                    if($row1['order_entry_date']==$date)
                                    {      
                                 ?>
                                    <a href="return_order.php?return_order=<?php echo $row1['order_id']; ?>">Return/Exchange Order</a>
                                 <?php
                                    } 
                                 }
                                 ?>
                              <div class="clearfix"> </div>
                           </div>
                        </div>
                    </div>
                        <!-- Modal -->
                     <?php
                     include("track.php");
                     ?>
                  </form>
                  <?php
                      }
                      ?>
                        <!-- MODAL END -->
</div>
<!-- ?> -->