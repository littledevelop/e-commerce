<?php
include("connection.php");
class model extends connect
{
	private $con;
	public function __construct()
	{
		$dbcon = new parent;
		$this->con = $dbcon->dbconnect();
		return $this;
	}
	function get_state()
	{
		$select = "select * from reg_state";
		$disp_state= mysqli_query($this->con,$select);
		return $disp_state;
	}
	function get_city($state_id)
	{
		$select = "select * from reg_city where state_id='$state_id'";
		$disp_city = mysqli_query($this->con,$select);
		return $disp_city;
	}

	function add_admin($name,$email,$password,$mobile,$address,$state,$city,$gender,$path)
	{
		$insert = "insert into admin_info(admin_name,admin_email,admin_password,admin_mobile,admin_address,admin_state,admin_city,admin_gender,admin_profile) values('$name','$email','$password','$mobile','$address','$state','$city','$gender','$path')";
		mysqli_query($this->con,$insert);
		
	}

	function admin_login($email,$password)
	{
		$select = "select * from admin_info where admin_email='$email' and admin_password='$password'"; 
		$check_admin= mysqli_query($this->con,$select);
		return $check_admin ;
	}

	function add_category($cname,$cpath)
	{
		$insert= "insert into category(category_name,category_image) values ('$cname','$cpath')";
		mysqli_query($this->con,$insert);

	}
	function view_category()
	{
		$select  = "select * from category";
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	function disp_selected_category($id)
	{
		$select= "select * from category where category_id= '$id'";
		$disp_category= mysqli_query($this->con,$select);
		return $disp_category;
	}

	function remove_category($id)
	{
		$delete= "delete from category where category_id='$id'";
		mysqli_query($this->con,$delete);
	}
	function update_category($id,$cname)
	{
			$update= "update category set category_name='$cname' where category_id='$id'";
		mysqli_query($this->con,$update);

	}
	function update_category_image($id,$cname,$path1)
	{		
		$update= "update category set category_name='$cname',category_image='$path1' where category_id='$id'";
		mysqli_query($this->con,$update);

	}

	function change_category_status($update_status,$id)
	{
		$update= "update category set category_status='$update_status' where category_id='$id'";
		mysqli_query($this->con,$update);	
	}

	function add_sub_category($sub_cname,$cid,$path1)
	{
		$insert="insert into subcategory(category_id,subcategory_name,subcategory_image)values('$cid','$sub_cname','$path1')";
		mysqli_query($this->con,$insert);
	
	} 
	function view_sub_category()
	{
		$select ="select * from category,subcategory where category.category_id=subcategory.category_id";

		$result= mysqli_query($this->con,$select);
		return $result;
	}

	function disp_selected_sub_category($id)
	{
	   	// $select = "select * from category,subcategory where category.category_id = subcategory.category_id and subcategory.subcategory_id='$id' ";
		$select= "select * from category INNER JOIN subcategory ON category.category_id = subcategory.category_id
		WHERE subcategory.subcategory_id='$id' " ;


		$result = mysqli_query($this->con,$select)or die(mysqli_error($this->con));
		return $result;

	}
	function update_sub_category($id,$cid,$sub_cname)
	{
		 $update= "update subcategory set category_id='$cid',subcategory_name='$sub_cname' where subcategory_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));

	}
	function update_sub_category_image($id,$cid,$sub_cname,$path1)
	{
		 $update= "update subcategory set category_id='$cid',subcategory_name='$sub_cname',subcategory_image='$path1' where subcategory_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));

	}
	function remove_sub_category($id)
	{
		$delete = "delete from subcategory where subcategory_id='$id' ";
		mysqli_query($this->con,$delete);
	}

	function change_sub_category_status($id,$update_status)
	{
		$update = "update subcategory set subcategory_status='$update_status' where subcategory_id='$id'";
		mysqli_query($this->con,$update);
	}

	//SEARCH DATA
	function search_data($txtname)
	{
		$select = "select * from category where category_name like '$txtname%'" ;
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function search_subcategory_data($txtname)
	{
		$select = "select * from category INNER JOIN subcategory ON category.category_id = subcategory.category_id where subcategory_name like '$txtname%'" ;
		$result = mysqli_query($this->con,$select);
		return $result;

	}
	function sort_data($col_name,$order)
	{
	$select = "select * from category order by $col_name $order" ;
		$result = mysqli_query($this->con,$select);
		return $result;	
	}

	function view_admin($id)
	{
		$select = "select * from admin_info,reg_city,reg_state where admin_info.admin_state=reg_state.state_id and admin_info.admin_city=reg_city.city_id and admin_id='$id' ";
		$disp_admin= mysqli_query($this->con,$select);
		$disp_admin_data= mysqli_fetch_array($disp_admin);
		return $disp_admin_data;
	}
	// function change_admin($admin_id)
	// {
	// 	$select = "select * from admin_info,reg_city,reg_state where admin_info.admin_state=reg_state.state_id and admin_info.admin_city=reg_city.city_id and admin_id='$admin_id' ";
	// 	$admin_data= mysqli_query($this->con,$select);
	// 	$edit= mysqli_fetch_array($disp_admin);
	// 	return $edit;
	// }

	function update_admin_profile($id,$name,$email,$password,$mobile,$address,$state,$city,$gender,$path)
	{
		$update = "update admin_info set admin_name='$name',admin_email='$email',admin_password='$password',admin_address='$address',admin_state='$state',admin_city='$city',admin_gender='$gender',admin_mobile='$mobile',admin_profile='$path' where admin_id= '$id'" ;
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));
	}
	
	function update_admin($id,$name,$email,$password,$mobile,$address,$state,$city,$gender)
	{
		$update = "update admin_info set admin_name='$name',admin_email='$email',admin_password='$password',admin_address='$address',admin_state='$state',admin_city='$city',admin_gender='$gender',admin_mobile='$mobile' where admin_id= '$id'" ;
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));
	}
	
	function update_status_admin($update_status,$id)
	{
		$update = "update admin_info set admin_status='$update_status' where admin_id='$id'";
		mysqli_query($this->con,$update);
	}

	function change_password_admin($new_password,$id)
	{

		$update = "update admin_info set admin_password='$new_password' where admin_id='$id'";
		mysqli_query($this->con,$update) or die(mysqli_error($this->con));

	}

	//offer Operation
	function add_offer_admin($offer_name,$offer_price,$offer_desc,$offer_percentage)
	{
		$insert = " insert into offer_info(offer_name,offer_price,offer_desc,offer_percentage) values ('$offer_name','$offer_price','$offer_desc','$offer_percentage')"; 
		mysqli_query($this->con,$insert)or die(mysqli_error($this->con));
	}

	function disp_selected_offer($offer_id)
	{
		$select = "select * from offer_info where offer_id='$offer_id'" ;
		$result= mysqli_query($this->con,$select);
		$fetch_offer = mysqli_fetch_array($result);
		return $fetch_offer;
	}

	function view_offer_admin()
	{
		$select = "select * from offer_info";
		$disp_offer= mysqli_query($this->con,$select);
		return $disp_offer;
	}



	function remove_offer($id)
	{
		$delete = "delete from offer_info where offer_id='$id' ";
		mysqli_query($this->con,$delete);
	}

	function update_offer($id,$offer_name,$offer_price,$offer_desc)
	{
		 $update= "update offer_info set offer_name='$offer_name',offer_price='$offer_price',offer_desc='$offer_desc' where offer_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));

	}

	function change_offer_status($id,$update_status)
	{
		echo $update = "update offer_info set offer_status='$update_status' where offer_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con)) or die(mysqli_error($this->con));
	}

	//seller Operation

	function add_seller_admin($seller_name,$seller_email,$seller_password,$seller_mobile,$seller_address,$seller_state,$seller_city,$path)
	{
		$insert = "insert into seller_info(seller_name,seller_email,seller_password,seller_mobile,seller_address,seller_state,seller_city,seller_profile) values('$seller_name','$seller_email','$seller_password','$seller_mobile','$seller_address','$seller_state','$seller_city','$path')";
		mysqli_query($this->con,$insert);
		

	}
	function view_seller_admin()
	{
		$select = "select * from seller_info ,reg_city,reg_state where seller_info.seller_state=reg_state.state_id and seller_info.seller_city=reg_city.city_id ";
		$disp_seller= mysqli_query($this->con,$select);
		return $disp_seller;
	}
	function disp_selected_seller($id)
	{
		$select = "select * from seller_info where seller_id='$id' ";
		$disp_selected_seller= mysqli_query($this->con,$select);
		return $disp_selected_seller;
	}

	function remove_seller($id)
	{
		$delete = "delete from seller_info where seller_id='$id' ";
		mysqli_query($this->con,$delete);
	}

	function update_seller_profile($id,$seller_name,$seller_mobile,$seller_email,$seller_password,$seller_address,$seller_state,$seller_city,$path1)
	{
		 $update= "update seller_info set seller_name='$seller_name',seller_email='$seller_email',seller_password='$seller_password',seller_mobile='$seller_mobile',seller_address='$seller_address',seller_state='$seller_state',seller_city='$seller_city',seller_profile='$path1' where seller_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));

	}

	function update_seller($id,$seller_name,$seller_mobile,$seller_email,$seller_password,$seller_address,$seller_state,$seller_city)
	{
		$update= "update seller_info set seller_name='$seller_name',seller_email='$seller_email',seller_password='$seller_password',seller_mobile='$seller_mobile',seller_address='$seller_address',seller_state='$seller_state',seller_city='$seller_city' where seller_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));
	}

	function change_seller_status($id,$update_status)
	{
		 $update = "update seller_info set seller_status='$update_status' where seller_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));
	}
	function view_product_admin_desc()
	{
		$select = "select * from product_info order by product_id desc"	;
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;

	}

	//Product 

	function disp_subcategory($category_id)
	{
		$select = "select * from subcategory where category_id = '$category_id' " ;
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;
	}

	function view_all_offer_product($offer_id)
	{
		$select = "select count(*) as total_offer from product_info,seller_info,offer_info,category,subcategory where product_info.seller_id=seller_info.seller_id and product_info.offer_id=offer_info.offer_id and product_info.product_category = category.category_id and product_info.product_subcategory=subcategory.subcategory_id and offer_info.offer_id='$offer_id' order by product_id";
		$result = mysqli_query($this->con,$select);
		return $result;	
	}

	function add_product_admin($prod_name,$prod_brand,$prod_qty,$category,$subcategory,$prod_price,$cost_price,$selling_price,$discount_price,$seller_name,$offer_name,$prod_desc,$path)
	{
		$insert = "insert into product_info(product_name,product_brand,product_qty,product_category,product_subcategory,product_price,cost_price,selling_price,discount_price,seller_id,offer_id,product_desc,product_image) values('$prod_name','$prod_brand','$prod_qty','$category','$subcategory','$prod_price','$cost_price','$selling_price','$discount_price','$seller_name','$offer_name','$prod_desc','$path')";
		mysqli_query($this->con,$insert);
	}

	
	function view_product_admin()
	{
		$select = "select * from product_info,seller_info,offer_info,category,subcategory where product_info.seller_id=seller_info.seller_id and product_info.offer_id=offer_info.offer_id and product_info.product_category = category.category_id and product_info.product_subcategory=subcategory.subcategory_id order by product_id";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function disp_selected_product($id)
	{
			$select = "select * from product_info,seller_info,offer_info,category,subcategory where product_info.seller_id=seller_info.seller_id and product_info.offer_id=offer_info.offer_id and product_info.product_category = category.category_id and product_info.product_subcategory=subcategory.subcategory_id and product_id='$id' ";
		$result = mysqli_query($this->con,$select);
		return $result;	
	}
	function remove_product($id)
	{
		$delete = "delete from product_info where product_id='$id' ";
		mysqli_query($this->con,$delete);
		
	}
	function update_product_profile($id,$prod_name,$prod_brand,$prod_qty,$category,$subcategory,$prod_price,$cost_price,$selling_price,$discount_price,$seller_name,$offer_name,$prod_desc,$path)
	{
		$update = "update product_info set product_name='$prod_name',product_brand='$prod_brand',product_qty='$prod_qty',product_category='$category',product_subcategory='$subcategory',product_price='$prod_price',cost_price='$cost_price',selling_price='$selling_price',discount_price='$discount_price',seller_id='$seller_name',offer_id='$offer_name',product_desc='$prod_desc',product_image='$path' where product_id='$id'";
		mysqli_query($this->con,$update);
	}

	function update_product($id,$prod_name,$prod_brand,$prod_qty,$category,$subcategory,$prod_price,$cost_price,$selling_price,$discount_price,$seller_name,$offer_name,$prod_desc)
	{
		$update = "update product_info set product_name='$prod_name',product_brand='$prod_brand',product_qty='$prod_qty',product_category='$category',product_subcategory='$subcategory',product_price='$prod_price',cost_price='$cost_price',selling_price='$selling_price',discount_price='$discount_price',seller_id='$seller_name',offer_id='$offer_name',product_desc='$prod_desc' where product_id='$id' ";
		mysqli_query($this->con,$update);	
	}
	function update_status_product_admin($update_status,$id)
	{
		$update = "update product_info set product_status='$update_status' where product_id='$id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));
	}


	//product image 
	function add_product_image($product_id,$path)
	{
		$insert = "insert into product_image(product_id,prod_img_path)values('$product_id','$path')";
		mysqli_query($this->con,$insert) or die(mysqli_error($this->con));
	}

	
	function disp_selected_product_image($prod_id)
	{
		$select = "select * from product_image where product_id='$prod_id' ";
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	function edit_selected_product_image($image_id,$prod_id)
	{
		$select = "select * from product_image where product_id='$prod_id' and  prod_img_id='$image_id'" ;
		$result = mysqli_query($this->con,$select);
		$edit= mysqli_fetch_array($result);
		return $edit;
	}
	function update_product_image($image_id,$product_id,$path)
	{
		echo $update = "update product_image set prod_img_path='$path' where product_id= '$product_id' and prod_img_id = '$image_id' ";
		mysqli_query($this->con,$update);
	}

	function delete_product_img($id)
	{
		$delete = "delete from product_image where prod_img_id='$id' ";
		mysqli_query($this->con,$delete);
	}
 	function pagination($start,$per_page_limit)
	{
	 	$select = "select * from category,subcategory where category.category_id=subcategory.category_id order by subcategory_id desc limit $start,$per_page_limit ";
	 	$result = mysqli_query($this->con,$select);
	 	return $result;
	}

	function category_pagination($start,$per_page_record)
	{
		$select = "select * from category order by category_id desc limit $start,$per_page_record ";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	//User Details
	function view_user()
	{
		$select = "select * from user_info";
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	function remove_user($user_id)
	{
		$delete = "delete from user_info where user_id= '$user_id'";
		mysqli_query($this->con,$delete);
	}	

	function change_user_status($user_id,$change_status)
	{
		$update = "update user_info set user_status = '$change_status' where user_id='$user_id'";
		mysqli_query($this->con,$update);
	}

	//wishlist Details

	function view_wishlist()
	{
		$select = "select * from wishlist_info,user_info,product_info where user_info.user_id=wishlist_info.customer_id and wishlist_info.product_id=product_info.product_id";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function view_selected_wishlist($product_id,$user_id)
	{
		$select = "select * from wishlist_info where product_id='$product_id' and customer_id='$user_id'";
		$result = mysqli_query($this->con,$select);
		
		return $result;
	}

	function remove_wishlist($wishlist_id)
	{
		$delete = "delete from wishlist_info where wishlist_id= '$wishlist_id'";
		mysqli_query($this->con,$delete);
	}	

	function change_wishlist_status($wishlist_id,$change_status)
	{
		$update = "update wishlist_info set wishlist_status = '$change_status' where wishlist_id='$wishlist_id'";
		mysqli_query($this->con,$update);
	}

	//order details
	function view_order()
	{
		$select = "select *,sum(total_amount) as total_pay from order_details,product_info,user_info where order_details.product_id = product_info.product_id and user_info.user_id = order_details.customer_id GROUP by order_no";
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	function remove_order($order_id)
	{
		$delete = "delete from order_details where order_id= '$order_id'";
		mysqli_query($this->con,$delete);
	}	

	function view_selected_order($order_no)
	{
 		$select = "select * from order_details,product_info,user_info where order_details.product_id = product_info.product_id and user_info.user_id = order_details.customer_id and order_details.order_no= $order_no";
		$result = mysqli_query($this->con,$select);
		return $result;	
	}

	function sum_total_order_amount($order_no)
	{
		$select = "select *,sum(total_amount) as total_pay from order_details,product_info,user_info,shipping_details,reg_state,reg_city where order_details.product_id = product_info.product_id and user_info.user_id = order_details.customer_id and shipping_details.shipping_id= order_details.shipping_id and shipping_details.shipping_state=reg_state.state_id and shipping_details.shipping_city=reg_city.city_id and order_details.order_no= $order_no";
		$result = mysqli_query($this->con,$select);
		// $data = mysqli_fetch_array($result);
		return $result;		
	}

	function change_order_status($order_id,$ch_status)
	{
		$update = "update order_details set order_status='$ch_status' where order_id=$order_id "; 
		mysqli_query($this->con,$update);
	
	}
	function change_order_status_deliever($order_id,$ch_status,$ch_paid_status)
	{
		echo $update = "update order_details set order_status='$ch_status',paid_unpaid='$ch_paid_status' where order_id=$order_id "; 
		mysqli_query($this->con,$update);

	}
		function add_track($order_id,$order_no,$order_status)
	{
		$insert = "insert into order_track(order_id,order_no,order_status)values('$order_id','$order_no','$order_status')";
		mysqli_query($this->con,$insert);

	}
	
		function disp_order_track($order_id)
	{
	echo 	$select = "select * from order_track where order_id='$order_id'";
		$result= mysqli_query($this->con,$select)or die(mysqli_error($this->con));
		return $result;
	}	 
	//order return
	function add_reason($text)
	{
		$insert = "insert into reason_info(reason_text)values('$text')";
		mysqli_query($this->con,$insert);

	}
	function view_reason()
	{
		$select = "select * from reason_info";
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	function view_select_reason($reason_id)
	{
	  $select = "select * from reason_info where reason_id = '$reason_id'";
		$result= mysqli_query($this->con,$select);
		$disp_reason = mysqli_fetch_array($result);
		return $disp_reason;
	}

	function change_reason($reason_id,$reason)
	{
		echo $update= "update reason_info set reason_text='$reason' where reason_id = '$reason_id'";
		mysqli_query($this->con,$update) or die(mysqli_error($this->con));
	}
	function delete_reason($reason_id)
	{
		$delete = "delete from reason_info where reason_id='$reason_id'";
		mysqli_query($this->con,$delete);
	}
	function change_reason_status($reason_id,$ch_status)
	{
		$update= "update reason_info set reason_status='$ch_status' where reason_id='$reason_id'";
		mysqli_query($this->con,$update);
	}
	//reason detail
	function add_reason_detail($reason_id,$reason_detail)
	{
		$insert = "insert into reason_detail(reason_id,reason_detail_text)values('$reason_id','$reason_detail')";
		mysqli_query($this->con,$insert) or die(mysqli_error($this->con));
		
	}
	function view_detail($reason_id)
	{
		$select = "select * from reason_detail where reason_id= $reason_id";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function edit_reason_detail($reason_detail_id)
	{
		$select = "select * from reason_detail where reas_detail_id= $reason_detail_id";
		$result = mysqli_query($this->con,$select);
		return $result;	
	}
	function change_reason_detail($reason_id,$detail,$reason_detail_id)
	{
		$update = "update reason_detail set reason_id='$reason_id',reason_detail_text='$detail' where reas_detail_id= '$reason_detail_id'";
		mysqli_query($this->con,$update);

	}
	function delete_reason_detail($reason_detail_id)
	{
		$delete = "delete from reason_detail where reas_detail_id = '$reason_detail_id'";
		mysqli_query ($this->con,$delete);
	}
	function change_detail_status($ch_status,$detail_id)
	{
		echo $update = "update reason_detail set reason_detail_status='$ch_status' where reas_detail_id= '$detail_id'";
		mysqli_query($this->con,$update)or die(mysqli_error($this->con));
	}
}
?>
