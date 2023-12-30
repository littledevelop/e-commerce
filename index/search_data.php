<?php
include("controller.php");

$ob = new controller;

if(@$_REQUEST['text']!='')

{ 
  echo $txtname=$_REQUEST['text'];
  $ob = new controller;
  $disp_search_data= $ob->search_subcategory_data($txtname);
?>
 <thead>
                                 <tr>
                                    <th>Sub Category Profile</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Edit</th>
                                    <th>Remove</th>
                                    <th>Status</th>
                                 </tr>
                              </thead>
                              <tbody id="display">
                                 <?php 
                                    while ($fetch=mysqli_fetch_array($disp_search_data))
                                    {

                                    ?>
                                 <tr >
                                    <td><img src="<?php echo $fetch['subcategory_image'];?>" height="60" width="60"></td>
                                    <td><?php echo $fetch['category_name'];?></td>
                                    <td><?php echo $fetch['subcategory_name'];?></td>
                                    <td>
                                       <a href="manage-subcategory.php?edit=<?php echo $fetch['subcategory_id'];?>">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="pencil-square-o"><i class="fa fa-edit" style="font-size:x-large;"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <a href="manage-subcategory.php?delete=<?php echo $fetch['subcategory_id'];?>" onclick="return confirm('Are You Sure Want To Remove Sub Category?')">
                                          <div class="fa-hover col-md-4 col-sm-6 col-xs-12"><span data-class="trash"><i class="fa fa-trash" style="font-size: x-large;"></i></span></div>
                                       </a>
                                    </td>
                                    <td>
                                       <!-- <div class="col-md-6 bottom15 right15"> -->
                                        <a href="manage-subcategory.php?status=<?php echo $fetch['subcategory_status'];?>&&id=<?php echo $fetch['subcategory_id'];?>">
                                            <?php
                                            if($fetch['subcategory_status']=='Active')
                                            {
                                            ?>

                                                <input type="submit" class="btn btn-primary active" value="<?php echo $fetch['subcategory_status']?> ">
                                            <?php
                                            } 
                                            else if($fetch['subcategory_status']=='Deactive')
                                            {
                                            ?>
                                                <input type="submit" class="btn btn-warning active" value="<?php echo $fetch['subcategory_status']?> " >
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
                              </tbody>
                            
<?php
}


?>

