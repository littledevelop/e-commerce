<?php
include("controller.php");
echo '<pre>';
print_r($_REQUEST);
echo "ID:-".$_GET['payment_id']."<br>";
echo "Status:-" . $_GET['payment_status']."<br>";
echo "Request_id:-".$_GET['payment_request_id']."<br>";
echo "Order ID:-".$_SESSION['order_id']."<br>";
// echo $order_no = $_SESSION['order_no']."<br>";
echo $payment_id=$_GET['payment_id'];
$payment_status= $_GET['payment_status'];
$ob = new controller();

	$disp_order= $ob->disp_last_order();
		
		 $order_no= $disp_order['order_no'];

$ob->change_payment($payment_id,$payment_status,$order_no);

// $ob->change_order($payment_id,$order_id);
?>