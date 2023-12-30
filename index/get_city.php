<?php
include("controller.php");
$state_id= $_REQUEST['state_id'];
$ob = new controller;
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
		?>