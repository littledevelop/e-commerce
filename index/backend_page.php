<?php 
include("controller.php");

$ob = new controller;

//to count discount price
if(@$_REQUEST['data_event']=="discount_price")
{
    if(isset($_REQUEST['offer_id']))
    {

    $offer_id= $_REQUEST['offer_id'];
    $disp_offer= $ob->disp_selected_offer($offer_id);
  echo  $discount_price= $disp_offer['offer_price'];
    }
}


//to display state wise city


if(@$_REQUEST['data_event']=="state_city")
{
  if(isset($_REQUEST['state_id']))
  {

  $state_id= $_REQUEST['state_id'];
$disp_city = $ob->get_city($state_id);
?>
<option style="display: none;" value="">Select City</option>
    <?php
    while($fetch=mysqli_fetch_array($disp_city))
     {
    ?>
      <option value="<?php echo $fetch['city_id']; ?>"><?php echo $fetch['city_name']; ?></option>
  <?php 
     } 
  }
}


?>
