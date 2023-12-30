<?php 
include("controller.php");

$ob = new controller;

if($_REQUEST['data_event']=="discount_price")
{
    if(isset($_REQUEST['offer_id']))
    {

    $offer_id= $_REQUEST['offer_id'];
    $disp_offer= $ob->disp_selected_offer($offer_id);
  echo  $discount_price= $disp_offer['offer_price'];
    }
}

?>
 