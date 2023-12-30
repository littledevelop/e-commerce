<?php
include("controller.php");
$ob= new controller;
$per_page_record=4; 
   $total_result= $ob->view_category();
   $total_record= mysqli_num_rows($total_result);
   $total_page= ceil($total_record/$per_page_record);

if($_REQUEST['data_event']=="pagination")
{
	if(isset($_REQUEST['total_page_no']))
	{
			$result=$ob->category_pagination($per_page_record,$total_record,$total_page);
			
			  
                                    while ($fetch=mysqli_fetch_array($result))
                                    {
                                    ?>
                                 <tr id="pagination_div">
                                    <td><img src="<?php echo $fetch['category_image'];?>" height="60" width="60"></td>
                                    <td><?php echo $fetch['category_name'];?></td>
                                    <td>
                                       <a href="manage-category.php?edit=<?php echo $fetch['category_id'];?>">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="pencil-square-o"><i class="fa fa-edit" style="font-size:x-large;"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <a href="manage-category.php?delete=<?php echo $fetch['category_id'];?>" onclick="return confirm('Are You Sure Want To Remove Category?')">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="trash"><i class="fa fa-trash" style="font-size: x-large;"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <!-- <div class="col-md-6 bottom15 right15"> -->
                                        <a href="manage-category.php?status=<?php echo $fetch['category_status'];?>&&id=<?php echo $fetch['category_id'];?>">
                                            <?php
                                            if($fetch['category_status']=='Active')
                                            {
                                            ?>

                                                <input type="submit" class="btn btn-primary active" value="<?php echo $fetch['category_status']?> ">
                                            <?php
                                            } 
                                            else if($fetch['category_status']=='Deactive')
                                            {
                                            ?>
                                                <input type="submit" class="btn btn-warning active" value="<?php echo $fetch['category_status']?> " >
                                            <?php
                                            }
                                            ?>
                                        </a>
                                       <!-- </div> -->
                                    </td>
                                 </tr>
                                 <?php    // code...
                                    }
                                    ?>	
	}
}
?>
