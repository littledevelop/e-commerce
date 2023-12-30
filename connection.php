<?php
class connect
{

	public function dbconnect()
	{
		$con = mysqli_connect("localhost","root","","ecommerce");
		return $con;
	}
} 
?>