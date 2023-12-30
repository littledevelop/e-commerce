<style type="text/css">
  .stepwizard-step p {
    margin-top: 10px; 
    display:inline-block;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: auto;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    left: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 1px;
    height: 100%;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: block;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
  display: block;
}
</style>
<div id="myModal<?php echo $row['order_no'];?>" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Track Details</h3>
      </div>
      <div class="modal-body">
 
        <?php 
           while($finaltrack=mysqli_fetch_array($disp_track))
            {
                         ?>
                         <div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">

            <button type="button" class="btn btn-success btn-sm btn-circle"></button>
                  <p> <?php echo $finaltrack['order_status']; ?> </p>
                  <br>
                  <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $finaltrack['order_track_date']; ?> </p>
 <br><br>
                </div>
              </div>
 </div>

  <!-- </li> -->

                
        <?php 
      }
        
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>

