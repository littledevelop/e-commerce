<?php
session_start();
include("model.php");
class controller 
{
	function get_state()
	{
		$ob=new model;
		$result=$ob->get_state();
		return $result;
	}
	function get_city($state_id)
	{
		$ob=new model;
		$disp_city = $ob->get_city($state_id);
		return $disp_city;
	}
	function add_admin()
	{
		if(isset($_REQUEST['signup']))
		{
			$name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			$mobile = $_REQUEST['mobile'];
			$address = $_REQUEST['address'];
			$state  = $_REQUEST['state'];
			$city = $_REQUEST['city'];
			$gender= $_REQUEST['gender'];
			
			//file_upload
			$profile = $_FILES['profile']['name'];
			if($profile!="")
			{
				
			$tmp_name= $_FILES['profile']['tmp_name'];
			$path= "image/".$profile;

			move_uploaded_file($tmp_name, $path);

					$ob= new model;

			$ob->add_admin($name,$email,$password,$mobile,$address,$state,$city,$gender,$path);
			header("location:ui-login.php");
			}

		}
	}

function view_admin()
	{
		$ob = new model;
		$id= $_SESSION['id'] ;
		$disp_admin_data= $ob->view_admin($id);
		return $disp_admin_data;
	}

	function update_admin()
	{
		if(isset($_REQUEST['btn_profileupdate']))
		{

			$ob = new model;
			$id = $_SESSION['id'] ;
			$disp_admin_data= $ob->view_admin($id);
			
			$id= $disp_admin_data['admin_id'];

			$name = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			$mobile = $_REQUEST['mobile'];
			$address = $_REQUEST['address'];
			$state  = $_REQUEST['state'];
			$city = $_REQUEST['city'];
			$gender= $_REQUEST['gender'];
			
			//file_upload
			$profile = $_FILES['profile']['name'];
			
			if($profile=="")
			{
				$ob->update_admin($id,$name,$email,$password,$mobile,$address,$state,$city,$gender);
			}
			else
			{

			$tmp_name= $_FILES['profile']['tmp_name'];
			$path= "image/".$profile;

			move_uploaded_file($tmp_name, $path);

				// $ob= new model;

			$ob->update_admin_profile($id,$name,$email,$password,$mobile,$address,$state,$city,$gender,$path);
			header("location:ui-profile.php");
			}

		}
	}

	function update_status_admin()
	{

		if(isset($_REQUEST['status']) && isset($_REQUEST['id']))
		{
			$status= $_REQUEST['status'];
			$id= $_REQUEST['id'];
			if($status=='Active')
			{
				$update_status= 'Deactive';
			}
			else
			{
				$update_status='Active';
			}
			$ob = new model;
			$ob->update_status_admin($update_status,$id);
			header("location:ui-profile.php");
		}
			
	}

	function admin_login()
	{
		if(isset($_REQUEST['login']))
		{
			$email= $_REQUEST['email'];
			$password= $_REQUEST['password'];

			$ob= new model;
			$check_admin=$ob->admin_login($email,$password);

			//to check condition
			if(mysqli_num_rows($check_admin)>0)
			{

				$disp_admin = mysqli_fetch_array($check_admin);
				echo $_SESSION['id'] = $disp_admin['admin_id'];
				header("location:index.php");
			}
			else
			{
				$msg = "Email Id and Password are incorrect";
				return $msg;
			}
		}
	}

	function admin_logout()
	{
		
			// echo 'hello';
			unset($_SESSION['id']);
			header("location:ui-login.php");
		 }

	function add_category()
	{
		if(isset($_REQUEST['btn_add']))
		{
			$cname= $_REQUEST['category_name'];
			//file upload
			$cimage = $_FILES['choose-file']['name'];
			$tmp_name = $_FILES['choose-file']['tmp_name'];
			$path1= "product/".$cimage;
			move_uploaded_file($tmp_name,$path1);

			$ob = new model;
			$ob->add_category($cname,$path1);
			// echo "Category inserted";
			header("location:manage-category.php");
		}
	}

	function view_category()
	{
		$ob = new model;
		$result = $ob->view_category();
		return $result;

	}

	function remove_category()
	{
		if(isset($_REQUEST['delete']))
		{
			$id= $_REQUEST['delete'];
			$ob =new model;

			//to remove category images from the files
			$disp_category=$ob->disp_selected_category($id);
			$fetch_category = mysqli_fetch_array($disp_category);
			$remove_category = $fetch_category['category_image'];
			unlink($remove_category);

			//to delete category
			$ob->remove_category($id);
			header("location:manage-category.php");
		}
	}

	function edit_category()
	{
		if(isset($_REQUEST['edit']))
		{
			$id= $_REQUEST['edit'];
			$ob = new model;
			$edit_category = $ob->disp_selected_category($id);
			$edit= mysqli_fetch_array($edit_category);
			return $edit;
		}
	}

	function update_category()
	{
		if(isset($_REQUEST['btn_update']))
		{

			$id= $_REQUEST['edit'];
			$ob =new  model;
			//to remove category images from the files
			$disp_category=$ob->disp_selected_category($id);
			$fetch_category = mysqli_fetch_array($disp_category);
			$remove_category = $fetch_category['category_image'];
			unlink($remove_category);

			//to change category

			$cname= $_REQUEST['category_name'];
			//file upload
			$cimage = $_FILES['choose-file']['name'];
			if($cimage=="")
			{
					$ob->update_category($id,$cname);
			}
			else
			{
			$tmp_name = $_FILES['choose-file']['tmp_name'];
			$path1= "product/".$cimage;
			move_uploaded_file($tmp_name,$path1);


			$ob->update_category_image($id,$cname,$path1);

			}
			header("location:manage-category.php");

		}
	}

	function change_category_status()
	{
		if(isset($_REQUEST['status']) && isset($_REQUEST['id']))
		{
			$status= $_REQUEST['status'];
			$id= $_REQUEST['id'];
			if($status=='Active')
			{
				$update_status= 'Deactive';
			}
			else
			{
				$update_status='Active';
			}
			$ob = new model;
			$ob->change_category_status($update_status,$id);
			header("location:manage-category.php");
		}
	}	

	function category_pagination($per_page_record,$total_record,$total_page)
		{
		$ob= new model;
		if(isset($_REQUEST['page']))
		{
			$page = $_REQUEST['page'];
			$start = ($page-1)*$per_page_record;
			$result=$ob->category_pagination($start,$per_page_record);

		}
		else if(isset($_REQUEST['btn_search']))
		{
			$txtname = $_REQUEST['txt_search'];
			$result= $ob->search_data($txtname);

		}
		elseif (isset($_REQUEST['col_name'])&&isset($_REQUEST['order'])) {
			$col_name= $_REQUEST['col_name'];
			$order=$_REQUEST['order'];
			$result=$ob->sort_data($col_name,$order);
		}
		else
		{
			$page=1;
			$start = ($page-1)*$per_page_record;
			$result=$ob->category_pagination($start,$per_page_record);

		}
		return $result;
	}


//sub_Category operation
	function add_sub_category()
	{
		if(isset($_REQUEST['btn_add']))
		{
			$sub_cname= $_REQUEST['subcategory_name'];
			$cid= $_REQUEST['category_id'];

			//file upload
			$sub_cat_image = $_FILES['choose-file']['name'];
			$tmp_name = $_FILES['choose-file']['tmp_name'];
			$path1 = "product/".time().$sub_cat_image;
			move_uploaded_file($tmp_name,$path1);

			$ob = new model;
			$ob->add_sub_category($sub_cname,$cid,$path1);
			// echo "sub Category inserted";
			header("location:manage-subcategory.php");

		}
	}
	function view_sub_category()
	{
		$ob = new model;
		$disp_sub_category= $ob->view_sub_category();
		return $disp_sub_category;
	}

	function edit_sub_category()
	{
		if(isset($_REQUEST['edit']))
		{
			$id= $_REQUEST['edit'];
			$ob = new model;
			$disp_sub_category= $ob->disp_selected_sub_category($id);
			$edit = mysqli_fetch_array($disp_sub_category);
			return $edit;
		}

	}
	function update_sub_category()
	{
		if(isset($_REQUEST['btn_update']))
		{

			$ob =new model;

			 $id= $_REQUEST['edit'];

			// to remove sub category images from the files

			$disp_subcategory= $ob->disp_selected_sub_category($id);
			$fetch_subcategory = mysqli_fetch_array($disp_subcategory);
			 $remove_subcategory = $fetch_subcategory['subcategory_image'];
			unlink($remove_subcategory);

			//to change Sub category
			$sub_cname= $_REQUEST['subcategory_name'];
			$cid= $_REQUEST['category_id'];

			//file upload
			$sub_cat_image = $_FILES['choose-file']['name'];

			if($sub_cat_image="")
			{
				$ob->update_sub_category($id,$cid,$sub_cname);
			}
			else
			{

			$tmp_name = $_FILES['choose-file']['tmp_name'];
			$path1 = "product/".time().$sub_cat_image;
			move_uploaded_file($tmp_name,$path1);


			$ob->update_sub_category_image($id,$cid,$sub_cname,$path1);
			}
			header("location:manage-subcategory.php");

		}
	}
	function remove_sub_category()
	{
		if(isset($_REQUEST['delete']))
		{
			$id= $_REQUEST['delete'];

			$ob= new model;

			//to remove subcategory image
			$disp_sub_category = $ob->disp_selected_sub_category($id);
			$disp_subcategory_image= mysqli_fetch_array($disp_sub_category);
			$remove_subcategory = $disp_subcategory_image['subcategory_image'];
			unlink($remove_subcategory);

			//to remove data
			$ob->remove_sub_category($id);
			header("location:manage-subcategory.php");
				
		}
	}

	function change_sub_category_status()
	{
		if(isset($_REQUEST['status']) and isset($_REQUEST['id']))
		{
			$id= $_REQUEST['id'];
			$status = $_REQUEST['status'];
			if($status=='Active')
			{
				$update_status = "Deactive";
			}
			else
			{
				$update_status = "Active";
			}
			$ob= new model;
			$ob->change_sub_category_status($id,$update_status);
			header("location:manage-subcategory.php");
		}
	}

	function change_password_admin()
	{
		if(isset($_REQUEST['btn_changepassword']))
		{
			$ob= new model;
			
			$id= $_SESSION['id'] ;
			$disp_admin_data= $ob->view_admin($id);

			$password= $disp_admin_data['admin_password'];

			$old_password = $_REQUEST['opassword'];
			
			 $new_password= $_REQUEST['npassword'];

			if($password==$old_password)
			{
				$ob->change_password_admin($new_password,$id);
				header("location:ui-profile.php");

			}
			else
			{
				$msg=  "OLD PASSWORD NOT MATCHED";
			}
		}
	}	

	//SEARCH DATA
	function search_subcategory_data($txtname)
	{
		$ob= new model;
		$disp_search_data = $ob->search_subcategory_data($txtname);
		return $disp_search_data;

	}

	//pagination
	 function pagination($per_page_limit,$total_page,$total_record_no)
	 {
	 		 		$ob = new model;

	 	if(isset($_REQUEST['page']))
	 	{
	 		$page= $_REQUEST['page'];
	 		$start = ($page-1)*$per_page_limit;
	 		$result= $ob->pagination($start,$per_page_limit);
	 		return $result;
	 	}
	 	else
	 	{
	 		$page= 1;
	 		$start= ($page-1)*$per_page_limit;
	 		$result = $ob->pagination($start,$per_page_limit);
	 		return $result;
	 	}
	 }

	//offer operation

	function add_offer_admin()
	{
		if(isset($_REQUEST['btn_add_offer']))
		{
			$id= $_SESSION['id'] ;
			$offer_name= $_REQUEST['offer_name'];
			$offer_price= $_REQUEST['offer_price'];
			$offer_desc= $_REQUEST['product_desc'];
			$offer_percentage= $_REQUEST['offer_percentage'];
			if($offer_percentage!="")
			{
				$offer_price="NULL";
			$ob = new model;
			$ob->add_offer_admin($offer_name,$offer_price,$offer_desc,$offer_percentage);
			}
			header("location:add_offer.php");

		}
	}

	function disp_selected_offer($offer_id)
	{
		$ob = new model;
		$offer_id = $_REQUEST['offer_id'];
		$disp_once_offer = $ob->disp_selected_offer($offer_id);
		return $disp_once_offer;
	}

	function view_offer_admin()
	{
		$ob = new model;
		$disp_offer = $ob->view_offer_admin();
		return $disp_offer;
	}

	function remove_offer()
	{
		if(isset($_REQUEST['delete']))
		{
			$id= $_REQUEST['delete'];
			$ob =new model;

			
			//to delete category
			$ob->remove_offer($id);
			header("location:view-offer.php");
		}
	}

	function edit_offer()
	{
		if(isset($_REQUEST['edit']))
		{
			$id= $_REQUEST['edit'];
			$ob = new model;
			$edit_offer = $ob->disp_selected_offer($id);
			// $edit= mysqli_fetch_array($edit_offer);
			// return $edit;
		}
	}

	function update_offer()
	{
		if(isset($_REQUEST['btn_update_offer']))
		{

			$id= $_REQUEST['edit'];
			$ob =new  model;
			//to remove category images from the files
			$disp_offer=$ob->disp_selected_offer($id);
			// $fetch_offer = mysqli_fetch_array($disp_offer);
		
			//to change category

			$offer_name =$_REQUEST['offer_name'];
			$offer_price = $_REQUEST['offer_price'];
			$offer_desc = $_REQUEST['offer_desc'];
			
			$ob->update_offer($id,$offer_name,$offer_price,$offer_desc);

			
			header("location:view_offer.php");

		}
	}

	function change_offer_status()
	{
		if(isset($_REQUEST['offer_status']) && isset($_REQUEST['offer_id']))
		{
			$status= $_REQUEST['offer_status'];
			$id= $_REQUEST['offer_id'];
			if($status=='Active')
			{
				$update_status= 'Deactive';
			}
			else
			{
				$update_status='Active';
			}
			$ob = new model;
			$ob->change_offer_status($id,$update_status);
			header("location:view_offer.php");
		}
	}

	//Seller Operation

	function add_seller_admin()
	{
		if(isset($_REQUEST['btn_add_seller']))
		{
			$seller_name =$_REQUEST['seller_name'];
			$seller_mobile = $_REQUEST['seller_mobile'];
			$seller_email = $_REQUEST['seller_email'];
			$seller_password = $_REQUEST['seller_password'];
			$seller_address = $_REQUEST['seller_address'];
			$seller_state = $_REQUEST['seller_state'];
			$seller_city = $_REQUEST['seller_city'];

			//file_upload
			$profile = $_FILES['choose-file']['name'];
			if($profile!="")
			{
				
			$tmp_name= $_FILES['choose-file']['tmp_name'];
			$path= "image/".$profile;

			move_uploaded_file($tmp_name, $path);

					$ob= new model;

			$ob->add_seller_admin($seller_name,$seller_email,$seller_password,$seller_mobile,$seller_address,$seller_state,$seller_city,$path);
			header("location:add_seller.php");
			}
		}
	}

	function view_seller_admin()
	{
		$ob = new model;
		$disp_seller = $ob->view_seller_admin();
		return $disp_seller;
	}

	function remove_seller()
	{
		if(isset($_REQUEST['delete']))
		{
			$id= $_REQUEST['delete'];
			$ob =new model;

			//to remove category images from the files
			$disp_seller=$ob->disp_selected_seller($id);
			$fetch_seller = mysqli_fetch_array($disp_seller);
			$remove_seller = $fetch_seller['seller_profile'];
			unlink($remove_seller);

			//to delete category
			$ob->remove_seller($id);
			header("location:view_seller.php");
		}
	}

	function edit_seller()
	{
		if(isset($_REQUEST['edit']))
		{
			$id= $_REQUEST['edit'];
			$ob = new model;
			$edit_seller = $ob->disp_selected_seller($id);
			$edit= mysqli_fetch_array($edit_seller);
			return $edit;
		}
	}

	function update_seller()
	{
		if(isset($_REQUEST['btn_update_seller']))
		{

			$id= $_REQUEST['edit'];
			$ob =new  model;
			//to remove category images from the files
			$disp_seller=$ob->disp_selected_seller($id);
			$fetch_seller = mysqli_fetch_array($disp_seller);
			$remove_seller = $fetch_seller['seller_profile'];
			unlink($remove_seller);

			//to change category

			$seller_name =$_REQUEST['seller_name'];
			$seller_mobile = $_REQUEST['seller_mobile'];
			$seller_email = $_REQUEST['seller_email'];
			$seller_password = $_REQUEST['seller_password'];
			$seller_address = $_REQUEST['seller_address'];
			$seller_state = $_REQUEST['seller_state'];
			$seller_city = $_REQUEST['seller_city'];

			//file upload
			$cimage = $_FILES['choose-file']['name'];
			if($cimage!="")
			{

				$tmp_name = $_FILES['choose-file']['tmp_name'];
				$path1= "product/".$cimage;
				move_uploaded_file($tmp_name,$path1);
				$ob->update_seller_profile($id,$seller_name,$seller_mobile,$seller_email,$seller_password,$seller_address,$seller_state,$seller_city,$path1);

			}
			else
			{
				$ob->update_seller($id,$seller_name,$seller_mobile,$seller_email,$seller_password,$seller_address,$seller_state,$seller_city);
			}
			header("location:view_seller.php");

		}
	}

	function change_seller_status()
	{
		if(isset($_REQUEST['seller_status']) && isset($_REQUEST['seller_id']))
		{
			 $status= $_REQUEST['seller_status'];
			$id= $_REQUEST['seller_id'];
			if($status=='Active')
			{
				$update_status= 'Deactive';
			}
			else
			{
				$update_status='Active';
			}
			$ob = new model;
			$ob->change_seller_status($id,$update_status);
			header("location:view_seller.php");
		}
	}	

	function disp_subcategory($category_id)
	{
		$ob = new model;
		$disp_sub_category = $ob->disp_subcategory($category_id);
		return $disp_sub_category;
	}
	function add_product_admin()
	{
		if(isset($_REQUEST['btn_add']))
		{
			$ob = new model;
			$prod_name= $_REQUEST['product_name'];
			$prod_brand= $_REQUEST['product_brand'];
			$prod_qty= $_REQUEST['qty'];
			$category= $_REQUEST['category'];
			$subcategory= $_REQUEST['subcategory'];
			$prod_price= $_REQUEST['mrp_price'];
			$cost_price= $_REQUEST['cost_price'];
			$discount_price = $_REQUEST['discount_price'];
			$selling_price = $_REQUEST['selling_price'];
			$seller_name = $_REQUEST['seller_name'];
			$offer_name = $_REQUEST['offer_name'];
			$prod_desc = $_REQUEST['product_desc'];



			// $disp_product = $ob->view_product_admin_desc();
			// $fetch_product= mysqli_fetch_array($disp_product);
			// echo $product_id = $fetch_product['product_id'];


			$prod_img = $_FILES['choose-file']['name'];
			$tmp_name = $_FILES['choose-file']['tmp_name'];
			$path = "product/".time().$prod_img;
			move_uploaded_file($tmp_name,$path);

			$disp_offer_data=$ob->view_all_offer_product($offer_name);
			 $result_data= mysqli_fetch_array($disp_offer_data);
			 $result_data['total_offer'];
			 if($result_data['total_offer']>10)
			 {
			 		echo $msg= "Offer is invalid";
			 		return $msg;
			 }
			 else
			 {

			$ob->add_product_admin($prod_name,$prod_brand,$prod_qty,$category,$subcategory,$prod_price,$cost_price,$selling_price,$discount_price,$seller_name,$offer_name,$prod_desc,$path);
			 header("location:view_product.php");
			 }
			 
		}

		
	}

	function view_product_admin()
	{
		$ob = new model;
		$disp_product = $ob->view_product_admin();
		return $disp_product;
	}

	function remove_product()
	{
		if(isset($_REQUEST['delete']))
		{
			$id= $_REQUEST['delete'];
			$ob =new model;

			//to remove category images from the files
			$disp_product=$ob->disp_selected_product($id);
			$fetch_product = mysqli_fetch_array($disp_product);
			$remove_product = $fetch_product['product_profile'];
			unlink($remove_product);

			//to delete category
			$ob->remove_product($id);
			header("location:view_product.php");
		}

	}

	function edit_product()
	{
		if(isset($_REQUEST['edit']))
		{
			$id= $_REQUEST['edit'];
			$ob = new model;
			$edit_product = $ob->disp_selected_product($id);
			
			$edit= mysqli_fetch_array($edit_product);

			return $edit;
			
		}
	}

	function update_product()
	{
		if(isset($_REQUEST['btn_update_product']))
		{

			$id= $_REQUEST['edit'];
			$ob =new  model;
	
			//to change category

			$prod_name= $_REQUEST['product_name'];
			$prod_brand= $_REQUEST['product_brand'];
			$prod_qty= $_REQUEST['qty'];
			$category= $_REQUEST['category'];
			$subcategory= $_REQUEST['subcategory'];
			$prod_price= $_REQUEST['mrp_price'];
			$cost_price= $_REQUEST['cost_price'];
			$discount_price = $_REQUEST['discount_price'];
			$selling_price = $_REQUEST['selling_price'];
			$seller_name = $_REQUEST['seller_name'];
			$offer_name = $_REQUEST['offer_name'];
			$prod_desc = $_REQUEST['product_desc'];

			//file upload
			$prod_img = $_FILES['choose-file']['name'];
			if($prod_img!="")
			{

			$tmp_name = $_FILES['choose-file']['tmp_name'];
			$path = "product/".$prod_img;
			move_uploaded_file($tmp_name,$path);

			$ob->update_product_profile($id,$prod_name,$prod_brand,$prod_qty,$category,$subcategory,$prod_price,$cost_price,$selling_price,$discount_price,$seller_name,$offer_name,$prod_desc,$path);
			}
			else
			{
			$ob->update_product($id,$prod_name,$prod_brand,$prod_qty,$category,$subcategory,$prod_price,$cost_price,$selling_price,$discount_price,$seller_name,$offer_name,$prod_desc);
			}
			header("location:view_product.php");

		}
	}

	function update_status_product_admin()
	{

		if(isset($_REQUEST['product_status']) && isset($_REQUEST['product_id']))
		{
			$status= $_REQUEST['product_status'];
			$id= $_REQUEST['product_id'];
			if($status=='Active')
			{
				$update_status= 'Deactive';
			}
			else
			{
				$update_status='Active';
			}
			$ob = new model;
			$ob->update_status_product_admin($update_status,$id);
			header("location:view_product.php");
		}
			
	}
	//product image gallery

	function view_product_image()
	{
		if(isset($_REQUEST['gallery']))
		{
			$id= $_REQUEST['gallery'];
			$ob  = new model;
			$view = $ob->disp_selected_product($id);
			return $view_image1 = mysqli_fetch_array($view);
			return $view_image1;
		}
	}

	function view_image_gallery()
	{
		if(isset($_REQUEST['gallery']))
		{
			$id= $_REQUEST['gallery'];
			$ob  = new model;

			$view_image= $ob->disp_selected_product_image($id);
			return $view_image;
		}
	}
	function add_product_image()
	{
		if(isset($_REQUEST['btn_addimage']))
		{
			$id = $_REQUEST['gallery'];
			$product_image= $_FILES['choose-file']['name'];
			$i =0 ;
			foreach($product_image as $pimage)
			{
				if($pimage!="")
				{
				$tmp_name = $_FILES['choose-file']['tmp_name'][$i];
				$path = "product/". time().$pimage;
				move_uploaded_file($tmp_name,$path);

					$ob = new model;
				$ob->add_product_image($id,$path);
				$i = $i + 1;
				}


			}
			header("location:product_img_gallery.php?gallery=$id");
		}
	}
	// function edit_product_image($prod_id)
	// {
	// 	if(isset($_REQUEST['edit_image']))
	// 	{
	// 		 echo $image_id= $_REQUEST['edit_image'];
	// 		 echo $prod_id;
	// 		$ob = new model;
			
	// 		$edit_product_images = $ob->edit_selected_product_image($image_id,$prod_id);
	// 		return $edit_product_images;
	// 	}
	// }
	function update_product_image()
	{
		if(isset($_REQUEST['btn_editimage']))
		{
			$image_id = $_REQUEST['image_id'];
			$id = $_REQUEST['gallery'];
			$ob = new model;

			$edit_product_images = $ob->edit_selected_product_image($image_id,$id);
			echo $fetch_image_path = $edit_product_images['prod_img_path'];
			unlink($fetch_image_path);

			$p_image = $_FILES['choose-files']['name'];
			
			if($p_image!=="")
			{
				$tmp_name = $_FILES['choose-files']['tmp_name'];
			$path = "product/".time().$p_image;
			move_uploaded_file($tmp_name,$path);

				$ob->update_product_image($image_id,$id,$path);
			}

			header("location:product_img_gallery.php?gallery=$id");
		}
	}

	function delete_product_img()
	{
		if(isset($_REQUEST['deleteimg'])&& isset($_REQUEST['gallery']))
		{
			$id = $_REQUEST['deleteimg'];

			echo $product_id= $_REQUEST['gallery'];
			$ob = new model;

			echo $edit_product_images = $ob->edit_selected_product_image($id,$product_id);
			echo $fetch_image_path = $edit_product_images['prod_img_path'];
			unlink($fetch_image_path);

			$ob->delete_product_img($id,$product_id);
			header("location:product_img_gallery.php?gallery=$product_id");

		}
	}

	//User Details
	function view_user()
	{
		$ob = new model;
		$disp_user= $ob->view_user();
		return $disp_user;
	}

	function remove_user()
	{
		if(isset($_REQUEST['delete_user']))
		{
			$order_id= $_REQUEST['delete_user'];
			$ob = new model;
			$ob->remove_user($order_id);
			header("location:view_user.php");
		}
	}
	
	function change_user_status()
	{
		if(isset($_REQUEST['user_status']) && isset($_REQUEST['user_id']))
		{
			$status = $_REQUEST['user_status'];
			$user_id= $_REQUEST['user_id'];
			if($status =='Active')
			{
				$change_status = "Deactive";
			}
			else
			{
				$change_status = "Active";
			}
			$ob= new model;
			$ob->change_user_status($user_id,$change_status);
			header("location:view_user.php");
		}
	}

	//wishlist
	function view_wishlist()
	{
		$ob = new model;
		$disp_wishlist= $ob->view_wishlist();
		return $disp_wishlist;
	}

	function remove_wishlist()
	{
		if(isset($_REQUEST['delete_wishlist']))
		{
			$wishlist_id= $_REQUEST['delete_wishlist'];
			$ob = new model;
			$ob->remove_wishlist($wishlist_id);
			header("location:view_wishlist.php");
		}
	}

	function change_wishlist_status()
	{
		if(isset($_REQUEST['wishlist_status']) && isset($_REQUEST['wishlist_id']))
		{
			$status = $_REQUEST['wishlist_status'];
			$wishlist_id= $_REQUEST['wishlist_id'];
			if($status =='Active')
			{
				$change_status = "Deactive";
			}
			else
			{
				$change_status = "Active";
			}
			$ob= new model;
			$ob->change_wishlist_status($wishlist_id,$change_status);
			header("location:view_wishlist.php");
		}
	}
	
	//Order Details
	function view_order()
	{
		$ob = new model;
		$disp_order= $ob->view_order();
		return $disp_order;
	}


	function remove_order()
	{
		if(isset($_REQUEST['delete_order']))
		{
			$order_id= $_REQUEST['delete_order'];
			$ob = new model;
			$ob->remove_order($order_id);
			header("location:view_order.php");
		}
	}

	function view_selected_order()
	{
		if(isset($_REQUEST['order_details']))
		{
			$order_no = $_REQUEST['order_details'];
			$ob =new  model;
			$disp_order_info = $ob->view_selected_order($order_no);
			return $disp_order_info;
		}	
	}
	function sum_total_order_amount()
	{
		if(@isset($_REQUEST['order_details']))
		{
			$order_no = $_REQUEST['order_details'];
			$ob =new  model;
			$disp_order_amt = $ob->sum_total_order_amount($order_no);
			$data = mysqli_fetch_array($disp_order_amt);
			return $data;
		}	
	}

	function change_order_status()
	{
		if(isset($_REQUEST['btn_ch_pending']))
		{
					 $status = $_REQUEST['order_status'];
				 $order_id = $_REQUEST['order_id'];
				 $order_no= $_REQUEST['order_no'];	
				if($status=="Packed" || $status=="Reject" || $status=="Confirm" || $status=="Delievered" || $status=="Shipped")
				{
					$ch_status = "Pending";
					$ob = new model;		
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:order_details.php?order_details=$order_no");	
				}
		}
		else if(isset($_REQUEST['btn_ch_packed']))
		{
					 $status = $_REQUEST['order_status'];
			 $order_id = $_REQUEST['order_id'];
			$order_no= $_REQUEST['order_no'];	
				if($status=="Shipped" || $status=="Reject" || $status=="Confirm" || $status=="Delievered" || $status=="Pending")
				{
					$ch_status = "Packed";
					$ob = new model;		
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:order_details.php?order_details=$order_no");	
				}
		}
		else if(isset($_REQUEST['btn_ch_deliever']))
		{
				$status = $_REQUEST['order_status'];
				 $order_id = $_REQUEST['order_id'];
				 $order_no= $_REQUEST['order_no'];	
				if($status=="Shipped" || $status=="Reject" || $status=="Confirm" || $status=="Packed" || $status=="Pending")
				{
					$ch_status = "Delievered";
					$ch_paid_status = "Paid";

					$ob = new model;		
					$ob->change_order_status_deliever($order_id,$ch_status,$ch_paid_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:order_details.php?order_details=$order_no");	
				}
		}

		else if(isset($_REQUEST['btn_ch_shipped']))
		{
				 $status = $_REQUEST['order_status'];
				 $order_id = $_REQUEST['order_id'];
				$order_no= $_REQUEST['order_no'];	
				if($status=="Packed" || $status=="Reject" || $status=="Confirm" || $status=="Delievered" || $status=="Pending")
				{
					$ch_status = "Shipped";
					$ob = new model;		
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:order_details.php?order_details=$order_no");	
				}
		}
		else if(isset($_REQUEST['btn_ch_confirm']))
		{
			 $status = $_REQUEST['order_status'];
			 $order_id = $_REQUEST['order_id'];
			$order_no= $_REQUEST['order_no'];	
				if($status=="Packed" || $status=="Reject" || $status=="Shipped" || $status=="Delievered" || $status=="Pending")
				{
					$ch_status = "Confirm";
					$ob = new model;		
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:order_details.php?order_details=$order_no");	
				}
		}
	}


	function reject_order_status()
	{
		if(isset($_REQUEST['btn_ch_reject']))
		{
				 $status = $_REQUEST['order_status'];
				$order_id = $_REQUEST['order_id'];
			$order_no= $_REQUEST['order_no'];
			if($status=="Pending" || $status=="Confirm" || $status=="Packed" || $status =="Shipped" || $status=="Delievered")
			{
				$ch_status = "Reject";
			}
			else if ($status=="Reject") 
			{
				$ch_status = "Pending";	
			}
			$ob = new model;
			$ob->change_order_status($order_id,$ch_status);
			$ob->add_track($order_id,$order_no,$ch_status);
			header("location:order_details.php?order_details=$order_no");
		}
	}

 	function disp_order_track($order_no)
 	{
 		
 		//	$order_no= $_REQUEST['order_no'];
 			$ob =new model;
 			$disp_track= $ob->disp_order_track($order_no);
 			return $disp_track;
 		
 	}
 	//order return 
 	function add_reason()
 	{
 		if(isset($_REQUEST['btn_add_reason']))
 		{
 			$text = $_REQUEST['reason_text'];
 			$ob = new model();
 			$ob->add_reason($text);
 			header("location:add_reason.php");
 		}
 	}

 	function view_reason_admin()
	{
		$ob = new model;
		$disp_reason = $ob->view_reason();
		return $disp_reason;
	}

	function view_select_reason()
	{
		if(isset($_REQUEST['reason_id']))
		{
			 $reason_id = $_REQUEST['reason_id'];
			$ob = new model;
			$disp= $ob->view_select_reason($reason_id);
			return $disp;
		}
	}

	function change_reason()
	{
		if(isset($_REQUEST['btn_edit_reason']))
		{
			$reason_id = $_REQUEST['reason_id'];
			$reason = $_REQUEST['reason_text'];
			$ob = new model;
			$ob->change_reason($reason_id,$reason);
			header("location:add_reason.php");
		}
	}

	function delete_reason()
	{
		if(isset($_REQUEST['delete']))
		{
			$reason_id = $_REQUEST['delete'];
			$ob = new model;
			$ob->delete_reason($reason_id);
			header("location:add_reason.php");
		}	
	}

	function change_reason_status()
	{
		if(isset($_REQUEST['reason_status']) && isset($_REQUEST['reason_id']))
		{
			$status = $_REQUEST['reason_status'];
			$reason_id= $_REQUEST['reason_id'];
			if($status =='Active')
			{
				$ch_status = "Deactive";
			}
			else
			{
				$ch_status = "Active";
			}
			$ob= new model;
			$ob->change_reason_status($reason_id,$ch_status);
			header("location:add_reason.php");
		}	
	
		
	}

//reason detail
	function add_reason_detail()
	{
		if(isset($_REQUEST['btn_add_details']))
		{
			echo $reason_id = $_REQUEST['reason_id'];
			$detail = $_REQUEST['detail'];

			$ob = new model;
			$ob->add_reason_detail($reason_id,$detail);
			header("location:reason_details.php?reason_id=$reason_id");
		}
	}

	function view_reason_detail()
	{
		if(isset($_REQUEST['reason_id']))
		{
		
		$ob = new model;
		$reason_id= $_REQUEST['reason_id'];
		$disp_detail = $ob->view_detail($reason_id);
		return $disp_detail;
	}
	}

	function edit_reason_detail()
	{
		if(isset($_REQUEST['edit_detail']))
		{
			$reason_detail_id= $_REQUEST['edit_detail'];
			$ob= new model;
			$disp_detail_edit = $ob->edit_reason_detail($reason_detail_id);
			$edit = mysqli_fetch_array($disp_detail_edit);
			return $edit;
		}
	}

	function change_reason_detail()
	{
		if(isset($_REQUEST['btn_edit_details']))
		{
			$reason_detail_id = $_REQUEST['edit_detail'];
			$detail = $_REQUEST['detail'];
			$reason_id = $_REQUEST['reason_id'];
			$ob= new model;

			$ob->change_reason_detail($reason_id,$detail,$reason_detail_id);
			header("location:reason_details.php?reason_id=$reason_id");


		}
	}

	
	function delete_reason_detail()
	{
		if(isset($_REQUEST['delete_detail']))
		{
			$reason_detail_id= $_REQUEST['delete_detail'];
			$reason_id = $_REQUEST['reason_id'];
			$ob= new model;
			$ob->delete_reason_detail($reason_detail_id);
			header("location:reason_details.php?reason_id=$reason_id");
		}
	}

	function change_detail_status()
	{
		if(isset($_REQUEST['detail_status']) && isset($_REQUEST['detail_id']))
		{
			$status = $_REQUEST['detail_status'];
			$detail_id= $_REQUEST['detail_id'];
			$reason_id= $_REQUEST['reason_id'];
			if($status =='Active')
			{
				$ch_status = "Deactive";
			}
			else
			{
				$ch_status = "Active";
			}
			$ob= new model;
			$ob->change_detail_status($ch_status,$detail_id);
			header("location:reason_details.php?reason_id=$reason_id");
		}	
	}
	
}

?>