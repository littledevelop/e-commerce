<?php
include("controller.php");

$ob = new controller;
$category_id = $_REQUEST['category_id'];

$result = $ob->disp_subcategory($category_id);

?>
<option style="display: none;" value="">Select Subcategory</option>
		<?php
		while($fetch=mysqli_fetch_array($result))
		 {
		?>
			<option value="<?php echo $fetch['subcategory_id']; ?>"><?php echo $fetch['subcategory_name']; ?></option>

		<?php
		 } 
		?>