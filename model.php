<?php
include("connection.php") ;
class model extends connect 
{
	function __construct()
	{
		$dbcon  = new parent;
		$this->con = $dbcon->dbconnect();
		return $this;
	}
	//client site
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

	//to add user
	function add_user($name,$email,$password,$mobile,$address,$state,$city,$gender,$path)
	{
		$insert = "insert into user_info(user_name,user_email,user_password,user_mobile,user_address,user_state,user_city,user_gender,user_profile) values('$name','$email','$password','$mobile','$address','$state','$city','$gender','$path')";
		mysqli_query($this->con,$insert);
		
	}

	//to change user profile

	function update_user($user_id,$name,$email,$mobile,$address,$state,$city,$gender)
	{
		 $update = "update user_info set user_name='$name',user_email='$email',user_mobile='$mobile',user_address='$address',user_state='$state',user_city='$city',user_gender='$gender' where user_id='$user_id'";
		mysqli_query($this->con,$update) or die(mysqli_error($this->con));
		
	}

	function update_user_profile($user_id,$name,$email,$mobile,$address,$state,$city,$gender,$path1)
	{
		 $update = "update user_info set user_name='$name',user_email='$email',user_mobile='$mobile',user_address='$address',user_state='$state',user_city='$city',user_gender='$gender',user_profile='$path1' where user_id='$user_id'";
		mysqli_query($this->con,$update) or die(mysqli_error($this->con));
	}
	//FOR USER login
	 function user_login($email,$password)
	{
	 	$select = "select * from user_info where user_email='$email' and user_password='$password' " ;
	 	$result = mysqli_query($this->con,$select);
	 	return $result;

	 }

	 //to display category
	 function view_category()
	{
		$select  = "select * from category";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	
	//to display category wise subcategory
	function disp_subcategory($category_id)
	{
		$select = "select * from subcategory where category_id = '$category_id' " ;
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;
	}

	function view_all_product()
	{
		$select = "select * from product_info,category,subcategory where product_info.product_category=category.category_id and product_info.product_subcategory=subcategory.subcategory_id";
		$result = mysqli_query($this->con,$select);
		return $result;

	}
	function view_selected_product1($product_id)
	{
		$select = "select * from product_info where product_id = '$product_id'";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function view_selected_product($product_id)
	{
		$select = "select * from product_info where product_id = '$product_id'";
		$result = mysqli_query($this->con,$select);
		$disp_selected_product = mysqli_fetch_array($result);
		return $disp_selected_product;
	}
	function disp_category_product($disp_product_category)
	{
		$select = "select * from product_info where product_category = '$disp_product_category'";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function disp_subcategory_product($disp_product_subcategory)
	{
		$select = "select * from product_info where product_subcategory = '$disp_product_subcategory'";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function disp_cart_data($user_id)
	{
		$select = "select * from add_to_cart INNER JOIN product_info ON add_to_cart.product_id = product_info.product_id
		WHERE add_to_cart.user_id='$user_id' ";
		$result = mysqli_query($this->con,$select)or die(mysqli_error($this->con));
		return $result;	
	}
	function get_cart_info($product_id,$user_id)
	{
		$select = "select * from add_to_cart where product_id='$product_id' and user_id='$user_id'";
		$result = mysqli_query($this->con,$select)or die(mysqli_error($this->con));
		return $result;
	}
	function change_qty($txtqty,$cart_id)
	{
		$update= "update add_to_cart set qty='$txtqty' where cart_id = '$cart_id'";
		mysqli_query($this->con,$update);
	}
	function update_data_cart($cart_id,$user_id,$product_id,$ch_qty,$tot_product_price,$discount,$tot_selling_price)
	{
		$update = "update add_to_cart set user_id='$user_id',product_id='$product_id',qty='$ch_qty',size='$product_size',product_price='$tot_product_price',selling_price='$tot_selling_price',discount_price='$discount' where cart_id = '$cart_id'" ;
		mysqli_query($this->con,$update);
	}

	function insert_data_cart($user_id,$product_id,$product_size,$qty,$tot_product_price,$discount,$tot_selling_price)
	{
		$insert = "insert into add_to_cart(user_id,product_id,size,qty,product_price,discount_price,selling_price) values ('$user_id','$product_id','$product_size','$qty','$tot_product_price','$discount','$tot_selling_price')" ;
		mysqli_query($this->con,$insert)or die(mysqli_error($this->con));
	}
	function sum_product_price($user_id)
	{
		$select = "select *,sum(product_price) as total_product_price from add_to_cart where user_id='$user_id'";
        $result = mysqli_query($this->con,$select);
        $disp_total_price= mysqli_fetch_array($result);
        return $disp_total_price;
                  
	}
	function sum_selling_price($user_id)
	{
		$select = "select *,sum(selling_price) as total_selling_price from add_to_cart where user_id='$user_id'";
        $result = mysqli_query($this->con,$select);
        $disp_selling_price= mysqli_fetch_array($result);
        return $disp_selling_price;
        
	}


	function del_cart_item($cart_id)
	{
		$delete = "delete from add_to_cart where cart_id='$cart_id'";
		mysqli_query($this->con,$delete);
	}
	function view_user($user_id)
	{
		$select = "select * from user_info,reg_state,reg_city where reg_state.state_id = user_info.user_state and reg_city.city_id=user_info.user_city and user_info.user_id='$user_id' ";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;
	}
	function save_address($user_id,$name,$email,$mobile,$address,$state,$city,$pincode)
	{
		$insert = "insert into shipping_details(customer_id,cust_name,shipping_address,shipping_mobile,shipping_email,shipping_state,shipping_city,shipping_pincode) values ('$user_id','$name','$address','$mobile','$email','$state','$city','$pincode')";
		mysqli_query($this->con,$insert);
	}

	function view_shipping_info($user_id,$shipping_id)
	{
		$select = "select * from shipping_details,reg_city,reg_state where shipping_details.shipping_state=reg_state.state_id and shipping_details.shipping_city=reg_city.city_id and shipping_details.customer_id='$user_id' and shipping_details.shipping_id='$shipping_id'";
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	function view_shipping_details($user_id)
	{
		$select = "select * from shipping_details,reg_city,reg_state where shipping_details.shipping_state=reg_state.state_id and shipping_details.shipping_city=reg_city.city_id and shipping_details.customer_id='$user_id'";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function edit_shipping_details($shipping_id,$name,$email,$mobile,$address,$state,$city,$pincode)
	{
		 $update = "update shipping_details set cust_name='$name',shipping_address='$address',shipping_mobile='$mobile',shipping_email='$email',shipping_state='$state',shipping_city='$city',shipping_pincode='$pincode' where shipping_id='$shipping_id'";
		mysqli_query($this->con,$update) or die(mysqli_error($this->con));
	}

	function del_shipping_details($shipping_id)
	{
		$delete = "delete from shipping_details where shipping_id = '$shipping_id'";
		mysqli_query($this->con,$delete);
	}
	function add_wishlist($product_id,$user_id)
	{
		$insert = "insert into wishlist_info(product_id,customer_id) values('$product_id','$user_id')";
		mysqli_query($this->con,$insert);
	}
	function view_all_wishlist($user_id)
	{
		$select = "select * from wishlist_info,product_info where product_info.product_id=wishlist_info.product_id and wishlist_info.customer_id='$user_id'";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
	function view_selected_wishlist($product_id,$user_id)
	{
		$select = "select * from wishlist_info where product_id='$product_id' and customer_id='$user_id'";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;

	}
	function delete_item_wishlist($wishlist_id,$product_id)
	{
		$delete = "delete from wishlist_info where wishlist_id='$wishlist_id' and product_id= '$product_id'";
		mysqli_query($this->con,$delete);
	}

	function add_order($order_no,$total_no_of_item,$total_payable)
	{
		$insert = "insert into order_info(order_no,total_no_of_product,total_payable) values('$order_no','$total_no_of_item','$total_payable')" ;
		mysqli_query($this->con,$insert);

	}

	function confirm_order($shipping_id,$user_id,$product_id,$order_no,$order_method,$shipping_charge,$selling_price,$product_qty,$discount,$total_amount,$paid_unpaid)
	{
		$insert = 
		"insert into order_details(customer_id,shipping_id,product_id,order_no,order_method,shipping_charge,selling_price,order_qty,discount_price,total_amount,paid_unpaid) values ('$user_id','$shipping_id','$product_id','$order_no','$order_method','$shipping_charge','$selling_price','$product_qty','$discount','$total_amount','$paid_unpaid')" ;
		mysqli_query($this->con,$insert)or die(mysqli_error($this->con));
		
	}

	function add_payment($order_id,$order_no,$user_id,$order_method)
	{
		$insert="insert into payment_info(order_no,customer_id,payment_method,order_id)values('$order_no','$user_id','$order_method','$order_id')";
		mysqli_query($this->con,$insert)or die(mysqli_error($this->con));
	}

	function change_payment($payment_id,$payment_status,$order_no)
	{
	echo	$update="update payment_info set payment_id='$payment_id',payment_status='$payment_status' where order_no='$order_no' ";
		mysqli_query($this->con,$update) or die(mysqli_error($this->con));
	}		
	

	function sum_total_order_amount($order_no)
	{
		$select = "select *,sum(total_amount) as total_amount from order_details where order_no='$order_no'";
		 $result = mysqli_query($this->con,$select);
        $disp_total_amt= mysqli_fetch_array($result);
        return $disp_total_amt;
	}

	function view_select_no_of_order($user_id,$no_of_record)
	{
		echo $select ="select * from user_info,order_details,product_info,shipping_details where order_details.product_id=product_info.product_id and shipping_details.shipping_id=order_details.shipping_id and user_info.user_id=$user_id order by order_id desc limit $no_of_record ";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;
	}

	function disp_all_order($user_id)
	{
		 $select ="select * from order_details,product_info,shipping_details where order_details.product_id=product_info.product_id and shipping_details.shipping_id=order_details.shipping_id and order_details.customer_id='$user_id' order by order_id desc";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;
	}

	function disp_last_order($user_id)
	{
		 $select = "select * from user_info,order_details,product_info,shipping_details,reg_state,reg_city where order_details.product_id=product_info.product_id and shipping_details.shipping_id=order_details.shipping_id and reg_city.city_id=shipping_details.shipping_city and reg_state.state_id=shipping_details.shipping_state and user_info.user_id='$user_id' order by order_id desc limit 1";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;	
	}


	function disp_order($order_no)
	{
		 echo $select = "select * from order_details,product_info,shipping_details,reg_state,reg_city where order_details.product_id=product_info.product_id and shipping_details.shipping_id=order_details.shipping_id and reg_city.city_id=shipping_details.shipping_city and reg_state.state_id=shipping_details.shipping_state and order_no='$order_no' " ;
		$result = mysqli_query($this->con,$select)or die(mysqli_error($this->con));
		return $result;
	}

	function disp_selected_order($order_id)
	{
		  $select = "select * from order_details,product_info,shipping_details,reg_state,reg_city where order_details.product_id=product_info.product_id and shipping_details.shipping_id=order_details.shipping_id and reg_city.city_id=shipping_details.shipping_city and reg_state.state_id=shipping_details.shipping_state and order_id='$order_id' " ;
		$result = mysqli_query($this->con,$select);
		$disp_data= mysqli_fetch_array($result);
		return $disp_data;
	}
	function disp_select_order($order_id)
	{
		 $select = "select * from order_details,product_info,shipping_details,reg_state,reg_city where order_details.product_id=product_info.product_id and shipping_details.shipping_id=order_details.shipping_id and reg_city.city_id=shipping_details.shipping_city and reg_state.state_id=shipping_details.shipping_state and order_id='$order_id' " ;
		$result = mysqli_query($this->con,$select);
		return $result;
	}

	// function change_order($ch_paid_status,$order_id)
	// {
	// 	$update= "update prder_details set paid/unpaid"
	// }

	function view_order_desc($order_no)
	{
		$select = "select * from order_details where order_no='$order_no' group by product_id ";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;
	}
	function add_track($order_id,$order_no,$order_status)
	{
		$insert = "insert into order_track(order_id,order_no,order_status)values('$order_id','$order_no','$order_status') ";
		mysqli_query($this->con,$insert);

	}
	function disp_order_track($order_id)
	{
		$select = "select * from order_track where order_id='$order_id'";
		$result= mysqli_query($this->con,$select)or die(mysqli_error($this->con));
		return $result;
	}
	function change_order_status($order_id,$ch_status)
	{
		echo $update = "update order_details set order_status='$ch_status' where order_id=$order_id "; 
		mysqli_query($this->con,$update);

	}

	//return order

	function disp_reason()
	{
		$select = "select * from reason_info";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;

	}


	function disp_select_reason($reason_id)
	{
		$select = "select * from reason_info where reason_id='$reason_id'";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;

	}	
	function reason_select_detail($reason_id)
	{
		echo $select = "select * from reason_detail where reason_id='$reason_id'";
		$result = mysqli_query($this->con,$select) or die(mysqli_error($this->con));
		return $result;

	}
	
	function add_return_order($user_id,$product_id,$order_id,$shipping_id,$bank_id,$reason,$reason_detail,$method,$comment,$path)
	{
		$insert = 
		"insert into order_return_exchange(user_id,product_id,order_id,shipping_id,bank_id,reason_id,reason_detail_id,return_method,return_image,comment) values('$user_id','$product_id','$order_id','$shipping_id','$bank_id','$reason','$reason_detail','$method','$path','$comment')";
		mysqli_query($this->con,$insert) or die(mysqli_error($this->con));
	}
	//add user bank detail

	function add_bank($user_id,$bank_name,$ifsc,$acc_no,$branch,$address)
	{
		$insert = "insert into user_bank (user_id,bank_name,bank_ifsc,acc_no,branch,bank_address) values('$user_id','$bank_name','$ifsc','$acc_no','$branch','$address')";
		mysqli_query($this->con,$insert);		
	}

	function view_bank_detail($user_id)
	{
		$select = "select * from user_bank where user_id='$user_id'";
		$result = mysqli_query($this->con,$select);
		// $disp_bank = mysqli_fetch_array($result);
		return $result;
	}

	//cancel order
	function add_cancel_order($user_id,$product_id,$order_id,$order_no,$reason,$detail)
	{
			$insert = 
		"insert into cancel_order(user_id,product_id,order_id,order_no,reason,reason_detail) values('$user_id','$product_id','$order_id','$order_no','$reason','$detail')";
		mysqli_query($this->con,$insert) or die(mysqli_error($this->con));
	}

	//rating /review

	function add_rating($user_id,$product_id,$rating)
	{
		$insert ="insert into rating_info(product_id,customer_id,rating_point) values('$product_id','$user_id','$rating')" ;
		mysqli_query($this->con,$insert) or die(mysqli_error($this->con));
	}

		function add_review($user_id,$product_id,$review)
	{
		$insert ="insert into review_info(product_id,customer_id,review_desc) values('$product_id','$user_id','$review')" ;
		mysqli_query($this->con,$insert) or die(mysqli_error($this->con));
	}
	//offer product

	function count_product()
	{
		$select = "select offer_id ,count(*) as total_offer from `product_info` group by offer_id";
		$result= mysqli_query($this->con,$select);
		return $result;

	}
	function disp_offer_product($offer_id)
	{
		$select ="select * from product_info where offer_id = $offer_id";
		$result = mysqli_query($this->con,$select);
		return $result;
	}
}
?>