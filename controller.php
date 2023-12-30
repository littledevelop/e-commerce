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
  	//Operation of user
  
  	//to add user
  	function add_user()
  	{
  
  		if(isset($_REQUEST['btnadduser']))
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
  			$path= "index/user/".$profile;
  
  			move_uploaded_file($tmp_name,$path);
  
  					$ob= new model;
  
  			$ob->add_user($name,$email,$password,$mobile,$address,$state,$city,$gender,$path);
  			header("location:login.php");
  			}else
  			{
  				 $msg= "Please Upload Your Profile";
  				 return $msg;
  			}
  
  		}
  	}
  
  		function edit_user_profile()
  		{
				
				if(isset($_REQUEST['btn_edit']))
  		{
  			$name = $_REQUEST['uname'];
  			$_SESSION['name']= $name; 
  			$email = $_REQUEST['email'];
  			$mobile = $_REQUEST['mobile'];
  			$address = $_REQUEST['address'];
  			$state  = $_REQUEST['state'];
  			$city = $_REQUEST['city'];
  			$gender= $_REQUEST['gender'];
  			
  			$user_id= $_SESSION['user_id'];
  			$ob = new model;

  			//file_upload
  			
  			$disp_user= $ob->view_user($user_id);
  			$disp_user_data = mysqli_fetch_array($disp_user);
  			$disp_profile= $disp_user_data['user_profile'];

  			
  			$profile = $_FILES['profile']['name'];
  			if($profile=="")
  			{

  					$ob->update_user($user_id,$name,$email,$mobile,$address,$state,$city,$gender);
  				
  			}
  			else
  			{
	  			unlink($disp_profile);
  			$tmp_name= $_FILES['profile']['tmp_name'];
 				$path1 = "index/user/".$profile;
  
  			move_uploaded_file($tmp_name,$path1);
  			$ob->update_user_profile($user_id,$name,$email,$mobile,$address,$state,$city,$gender,$path1);

  			}
  			header("location:myaccount.php");
  		}

  		}
  	function user_login()
  	{
  		if(isset($_REQUEST['btnlogin']))
  		{

  			$email= $_REQUEST['email'];
  			$password= $_REQUEST['password'];
  			@$page_name = $_REQUEST['page_name'];
  			@$query_string = $_REQUEST['query_string'];
  			$ob= new model;
  			$check_user=$ob->user_login($email,$password);
  
  			//to check condition
  			if(mysqli_num_rows($check_user)>0)
  			{
  
  				$disp_user = mysqli_fetch_array($check_user);
  				 $_SESSION['user_id'] = $disp_user['user_id'];
  				 $_SESSION['name']= $disp_user['user_name'];
  				if($query_string=="")
  				{
  				header("location:index.php");
  
  				}
  				else
  				{
  				header("location:$query_string");	
  				}
  			}
  			else
  			{
  				$msg = "Email Id and Password are incorrect";
  				return $msg;
  			}
  		}
  	}
  
  	//FOR USER LOGOUT
  	function user_logout()
  	{
  		
  			// echo 'hello';
  			unset($_SESSION['user_id']);
  			header("location:login.php");
  		 
  	}
  	function view_category()
  	{
  		$ob = new model;
  		$result = $ob->view_category();
  		return $result;
  
  	}
  
  	function disp_subcategory($category_id)
  	{
  		$ob = new model;
  		$disp_sub_category = $ob->disp_subcategory($category_id);
  		return $disp_sub_category;
  	}
  
  	//search data
  	// function search_data($txtname)
  	// {
  	// 	$ob= new model;
  	// 	$disp_search_data = $ob->search_data($txtname);
  	// 	return $disp_search_data;
  	// }
  
  	function view_all_product()
  	{
  		$ob= new model;
  		$disp_product= $ob->view_all_product();
  		return $disp_product;
  	}
  
  	function view_selected_product()
  	{
  		if(isset($_REQUEST['product_id']))
  		{
  			$product_id = $_REQUEST['product_id'];
  			$ob = new model; 
  			$disp_selected_product= $ob->view_selected_product($product_id);
  			return $disp_selected_product;
  		}
  	}
  	function disp_category_product($disp_product_category)
  	{
  		$ob = new model;
  		$disp_all_product= $ob->disp_category_product($disp_product_category);
  		return $disp_all_product;
  	}
  	function disp_subcategory_product($subcategory_id)
  	{
  		$ob = new model;
  		$disp_all_product= $ob->disp_subcategory_product($subcategory_id);
  		return $disp_all_product;
  	
  	}
  	function add_to_cart()
  	{
  		if(isset($_REQUEST['btn_add_to_cart']))
  		{
  			 $product_id= $_REQUEST['product_id'];
  			 @$user_id= $_SESSION['user_id'];
  				$ob = new model; 
  			if(isset($_SESSION['user_id']))
  			{

  				//to get the product details from the product table
  			$disp_selected_product= $ob->view_selected_product1($product_id);
  			$disp_product_data= mysqli_fetch_array($disp_selected_product);
  			$selling_price=$disp_product_data['selling_price'];
  			$product_price = $disp_product_data['product_price'];
  			$product_size= $_REQUEST['choose_size'];

  			if(mysqli_num_rows($disp_selected_product)>0)
  			{
  				// echo "hii";
  				//to get the cart data from the add to cart table
  				$result_cart = $ob->get_cart_info($product_id,$user_id);
  				$disp_cart_data= mysqli_fetch_array($result_cart);
  
  				if(mysqli_num_rows($result_cart)>0)
  				{
 
  				$cart_id= $disp_cart_data['cart_id'];

  				$qty1= $disp_cart_data['qty'];
  				$ch_qty= $qty1+1;
  				$tot_product_price = $product_price*$ch_qty;
  				$tot_selling_price = $selling_price*$ch_qty;
  				$discount = $tot_product_price-$tot_selling_price;
  
  				$ob->update_data_cart($cart_id,$user_id,$product_id,$ch_qty,$product_size,$tot_product_price,$discount,$tot_selling_price);
  				}
  				else
  				{	
  
  					// echo "hello";
  				$qty = 1;
  				$tot_product_price = $product_price*$qty;
  				$tot_selling_price = $selling_price*$qty;
  				$discount = $tot_product_price-$tot_selling_price;
  			if($product_size=="")
  			{
  				echo "Please Choose Your Size";
  			}
  			else
  			{
  				
  				$ob->insert_data_cart($user_id,$product_id,$product_size,$qty,$tot_product_price,$discount,$tot_selling_price);
  			}
  
  				}
  				header("location:cart.php");	
  			}
  		}
  		else if(!isset($_SESSION['user_id']))
  		{
  			 $page_name= $_REQUEST['page_name'];
  			 $query_string= $_REQUEST['querystr'];
  			
  			header("location:login.php?$page_name?$query_string");
  		}
  	}
  	
  }
  
  function disp_cart_data()
  	{
  		// $product_id = $_REQUEST['product_id'];
  		 $user_id= $_SESSION['user_id'];
  		$ob= new model;
  		$result =$ob->disp_cart_data($user_id);
  		return $result;
  	}
  	function sum_product_price()
  	{
  		$ob= new model;
  		$user_id = $_SESSION['user_id'];
  		$disp_total_price= $ob->sum_product_price($user_id);
  		return $disp_total_price;
  	}
  	function sum_selling_price()
  	{
  		
  		$ob = new model;
  	 	$user_id = $_SESSION['user_id'];
  	 	$disp_total_amt = $ob->sum_selling_price($user_id);
  		return $disp_total_amt;
  	}
  	function del_cart_item()
  	{
  		if(isset($_REQUEST['delete']))
  		{
  			$query_string = $_REQUEST['querystr'];
  			$cart_id = $_REQUEST['delete'];
  			
  			$ob = new model;
  			$ob->del_cart_item($cart_id);
  			header("location:cart.php");
  		}
  
  	}

  	function change_cart_qty()
  	{
  		$ob = new model;
  		if(isset($_REQUEST['btn_plus']))
  		{
  			$user_id = $_SESSION['user_id'];
  			$product_id = $_REQUEST['product_id'];
  		echo 	$tqty = $_REQUEST['qty'];
echo $txtqty = $tqty + 1 ;
  				 
  				 $disp_selected_product= $ob->view_selected_product1($product_id);
  			$disp_product_data= mysqli_fetch_array($disp_selected_product);
  			$selling_price=$disp_product_data['selling_price'];
  			$product_price = $disp_product_data['product_price'];
  
  			$result_cart = $ob->get_cart_info($product_id,$user_id);
  			$disp_cart_data= mysqli_fetch_array($result_cart);
  
  				if(mysqli_num_rows($result_cart)>0)
  				{
  					$cart_id = $disp_cart_data['cart_id'];
  
  				$total_product_price = $product_price * $txtqty;
  				$total_selling_price = $selling_price * $txtqty;
  				$discount = $total_product_price - $total_selling_price;  
  				$ob->update_data_cart($cart_id,$user_id,$product_id,$txtqty,$total_product_price,$discount,$total_selling_price);
  				}
  				header("location:cart1.php");
  		}
  	 if(isset($_REQUEST['btn_minus'])) 
  		{
  			$user_id = $_SESSION['user_id'];
  			$product_id = $_REQUEST['product_id'];
  		echo	$tqty = $_REQUEST['qty'];
  			echo $txtqty = $tqty - 1 ;
  			 $disp_selected_product= $ob->view_selected_product1($product_id);
  			$disp_product_data= mysqli_fetch_array($disp_selected_product);
  			$selling_price=$disp_product_data['selling_price'];
  			$product_price = $disp_product_data['product_price'];
  
  			$result_cart = $ob->get_cart_info($product_id,$user_id);
  			$disp_cart_data= mysqli_fetch_array($result_cart);
  
  				if(mysqli_num_rows($result_cart)>0)
  				{
  					$cart_id = $disp_cart_data['cart_id'];
  
  				if($txtqty==0)
  				{
  						$ob->del_cart_item($cart_id);
  				}
  				$total_product_price = $product_price * $txtqty;
  				$total_selling_price = $selling_price * $txtqty;
  				$discount = $total_product_price - $total_selling_price;  
  				// update_data_cart($cart_id,$user_id,$product_id,$ch_qty,$tot_product_price,$discount,$tot_selling_price)
  				$ob->update_data_cart($cart_id,$user_id,$product_id,$txtqty,$total_product_price,$discount,$total_selling_price);
  				}

  				header("location:cart.php");
  			}
	}
  	function change_qty()
  	{
  		if(isset($_REQUEST['btn_qty_update']))
  		{
  			// echo "hii";
  			$user_id = $_SESSION['user_id'];
  			echo $product_id = $_REQUEST['product_id'];
  			echo $txtqty = $_REQUEST['qty'];
  			$ob= new model;
  
  			$disp_selected_product= $ob->view_selected_product1($product_id);
  			$disp_product_data= mysqli_fetch_array($disp_selected_product);
  			$selling_price=$disp_product_data['selling_price'];
  			$product_price = $disp_product_data['product_price'];
  
  			$result_cart = $ob->get_cart_info($product_id,$user_id);
  			$disp_cart_data= mysqli_fetch_array($result_cart);
  
  				if(mysqli_num_rows($result_cart)>0)
  				{
  					$cart_id = $disp_cart_data['cart_id'];
  
  				$total_product_price = $product_price * $txtqty;
  				$total_selling_price = $selling_price * $txtqty;
  				$discount = $total_product_price - $total_selling_price;  
  				// update_data_cart($cart_id,$user_id,$product_id,$ch_qty,$tot_product_price,$discount,$tot_selling_price)
  				$ob->update_data_cart($cart_id,$user_id,$product_id,$txtqty,$total_product_price,$discount,$total_selling_price);
  				}
  				header("location:cart.php");
  		}
  	}
  	function view_user()
  	{
  			$user_id= $_SESSION['user_id'];
  			$ob = new model;
  			$disp_user= $ob->view_user($user_id);
  			return $disp_user;
  		
  	}
  	function save_address()
  	{
  		if(isset($_REQUEST['btn_save']))
  		{
  				$page= $_SERVER['PHP_SELF'];
  			$user_id= $_SESSION['user_id'];
  			$name = $_REQUEST['name'];
  			$email = $_REQUEST['email'];
  			$mobile = $_REQUEST['mobile'];
  			$address = $_REQUEST['address'];
  			$state  = $_REQUEST['state'];
  			$city = $_REQUEST['city'];
  			$pincode = $_REQUEST['pincode'];
  
  			$ob= new model;
  			$ob->save_address($user_id,$name,$email,$mobile,$address,$state,$city,$pincode);
  			header("location:$page");
  
  		}
  	}
  	function view_shipping_details()
  	{
  		$user_id = $_SESSION['user_id'];
  		$ob = new model;
  		$disp_address = $ob->view_shipping_details($user_id);
  		return $disp_address;
  	}
  	
  	function edit_shipping_details()
  	{
  		if(isset($_REQUEST['btn_edit']))
  		{
  		echo	$page= $_SERVER['PHP_SELF'];
  		    $shipping_id= $_REQUEST['myshipping_id'];
  			 $name = $_REQUEST['myshipping_name'];
  			$email = $_REQUEST['myshipping_email'];
  			$mobile = $_REQUEST['myshipping_mobile'];
  			$address = $_REQUEST['myshipping_address'];
  			$state  = $_REQUEST['myshipping_state'];
  			$city = $_REQUEST['myshipping_city'];
  			$pincode = $_REQUEST['myshipping_pincode'];
  
  			$ob= new model;
  			$ob->edit_shipping_details($shipping_id,$name,$email,$mobile,$address,$state,$city,$pincode);
  			header("location:$page");		
  		}
  	}

  	function del_shipping_details()
  	{
  		if(isset($_REQUEST['delete']))
  		{
  				$page= $_SERVER['PHP_SELF'];
  			$shipping_id = $_REQUEST['delete'];
  			$ob = new model;
  			$ob->del_shipping_details($shipping_id);
  		header("location:$page");		
  		}
  	}
  	function clear_all()
  	{
  		if(isset($_REQUEST['btn_cancel']))
  		{
  			echo	$page= $_SERVER['PHP_SELF'];
  	header("location:$page");		
  			
  		}
  	}

  	//wishlist
  	function add_wishlist()
  	{
  		if(isset($_REQUEST['btn_wishlist']))
  		{
  			// $product_id = $_REQUEST['wishlist'];
  			$user_id= $_SESSION['user_id'];
				$query_string = $_REQUEST['querystr'];
	  			$product_id = $_REQUEST['product_id'];
  			$ob = new model;
  			$disp_selected_product11 = $ob->view_selected_wishlist($product_id,$user_id);
  			// echo mysqli_num_rows($disp_selected_product11);
  			if(mysqli_num_rows($disp_selected_product11)==0)
  			 {
  			 				$ob->add_wishlist($product_id,$user_id);
  			 }
  			 else 
  			 {
  			 			$disp_select_wishlist= $ob->view_selected_wishlist($product_id,$user_id);
  			 			$disp_wishlist = mysqli_fetch_array($disp_select_wishlist);
  			 			$wishlist_id = $disp_wishlist['wishlist_id'];

  			 			$ob->delete_item_wishlist($wishlist_id,$product_id);
  			 }
  			header("location:single.php?$query_string");
  		}
  	}
  	function view_all_wishlist()
  	{
  		$user_id= $_SESSION['user_id'];
  		$ob = new model;
  		$disp_wishlist = $ob->view_all_wishlist($user_id);
  		return $disp_wishlist;
  	}

  	function view_selected_wishlist()
  	{
  		if(isset($_REQUEST['product_id']))
  		{

			 $product_id = $_REQUEST['product_id'];
  			 @$user_id= $_SESSION['user_id'];
  		$ob = new model;
  		 $disp_wish = $ob->view_selected_wishlist($product_id,$user_id);
  		$disp_wishlist = mysqli_fetch_array($disp_wish);
  		return $disp_wishlist;
  		
  		}
  		
  	}

  	function delete_item_wishlist()
  	{
  		if(isset($_REQUEST['del_wishlist']) && isset($_REQUEST['product_id']))
  		{
  			$wishlist_id = $_REQUEST['del_wishlist'];
  			$product_id= $_REQUEST['product_id'];
  			$ob = new model;
  			$ob->delete_item_wishlist($wishlist_id,$product_id);
  			header("location:wishlist.php");
  		}
  	}
  //order
  	function confirm_order()
  	{
  		if(isset($_REQUEST['btn_confirm']))
  		{
  			$shipping_id = $_REQUEST['ch_shippingaddress'];
  			$user_id = $_SESSION['user_id'];

  			$order_no= rand();
  			$order_method= $_REQUEST['checkout'];
  			$total_payable = $_REQUEST['total_selling_price'];
  			$shipping_charge = $_REQUEST['delievery_charge'];
  			$ob = new model;
  			$result =$ob->disp_cart_data($user_id);
  			if(mysqli_num_rows($result)>0)
  			{
  
  				$txt_captcha= $_REQUEST['code'];
  				$txt_check= $_REQUEST['txtcheck'];
  				if($txt_captcha==$txt_check)
  				{
  
  					while($disp_cart_product = mysqli_fetch_array($result))
  					{
  						$cart_id = $disp_cart_product['cart_id'];
  						
  						$product_id = $disp_cart_product['product_id'];
  						$product_qty= $disp_cart_product['qty'];
  						$selling_price = $disp_cart_product['selling_price'];
  						$discount = $disp_cart_product['discount_price'];
  						 $total_amount = $selling_price * $product_qty;
  						$total_no_of_item= mysqli_num_rows($result);

  						if($order_method=="Cash On Delievery")
  						{
  							$paid_unpaid = "Unpaid";
  						}
  						else
  						{
  							$paid_unpaid="Paid";
  						}

  						$ob->add_order($order_no,$total_no_of_item,$total_payable);
  						$ob->confirm_order($shipping_id,$user_id,$product_id,$order_no,$order_method,$shipping_charge,$selling_price,$product_qty,$discount,$total_amount,$paid_unpaid);

  						$disp_order_desc= $ob->view_order_desc($order_no);

  						//remove data from the add to cart
  							$ob->del_cart_item($cart_id);
  		
  					}
  					while($row= mysqli_fetch_array($disp_order_desc))
  						{

  						 	$ord_no = $row['order_no'];
  						 $order_id= $row['order_id'];
  						 $order_status = $row['order_status'];
  						 	echo $order_id ."<br>";
  						$ob->add_track($order_id,$ord_no,$order_status);
  						if($order_method=="Online Payment")
  						{
  								 $ob->add_payment($order_id,$order_no,$user_id,$order_method);
  								$disp_user= $ob->view_shipping_info($user_id,$shipping_id);
  								$disp_user_data = mysqli_fetch_array($disp_user);
  								echo $user_name= $disp_user_data['cust_name'] ;
  								echo $email= $disp_user_data['shipping_email'];
  								echo $mobile = $disp_user_data['shipping_mobile'];
  								echo $amount =$_REQUEST['total_payable'];

  									//add payment gateway

									$ch = curl_init();

									curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
									curl_setopt($ch, CURLOPT_HEADER, FALSE);
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
									curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
									curl_setopt($ch, CURLOPT_HTTPHEADER,
									            array("X-Api-Key:test_c7352a8c4465da399c6d256dc2e",
									                  "X-Auth-Token:test_b2bb10715b9342138076ee0e415"));
									$payload = Array(
									    'purpose' => 'online_shopping',
									    'amount' => $amount,
									    'phone' => $mobile,
									    'buyer_name' => $user_name,
									    'redirect_url' => 'http://localhost/first%20project/redirect.php',
									    'send_email' => true,
									    'send_sms' => true,
									    'email' =>$email,
									    'allow_repeated_payments' => false
									);
									curl_setopt($ch, CURLOPT_POST, true);
									curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
									$response = curl_exec($ch);
									curl_close($ch); 

									 $response=json_decode($response);

									// echo $response->payment_request->longurl;
								header("location:".$response->payment_request->longurl);

								die();
  						}
  						}

  						header("location:confirm_order.php?order_no=$order_no");
  				}
  				else
 				{
 					$msg = "Invalid COnfirmation Code";
 					return $msg;
 				}
			}
		}
	}


function disp_last_order()
	{
		$user_id= $_SESSION['user_id'];
		$ob= new model;
		$disp_order= $ob->disp_last_order($user_id);
		$result =mysqli_fetch_array($disp_order);
		return $result;

	}

function disp_order()
	{
		if(isset($_REQUEST['order_no']))
		{
			$order_no = $_REQUEST['order_no'];
			$ob= new model;
			$disp_order= $ob->disp_order($order_no);
			return $disp_order;
		}
	}

	function change_payment($payment_id,$payment_status,$order_id)
	{
		echo $order_no= $_SESSION['order_no'];
		echo $payment_id;
		$ob= new model;
		$ob->change_payment($payment_id,$payment_status,$order_id);
		$disp_order= $ob->disp_last_order();
		$result =mysqli_fetch_array($disp_order);
		echo $order_no= $result['order_no'];
		header("location:confirm_order.php?order_no=$order_no");
	}

	function view_select_no_of_order($no_of_record)
	{
			if(isset($_SESSION['user_id']))
			{
					
			$user_id= $_SESSION['user_id'];

			$ob= new model;

			$disp_order= $ob->view_select_no_of_order($user_id,$no_of_record);
			return $disp_order;
			}	
	}

	function disp_all_order()
	{
			if(isset($_SESSION['user_id']))
			{

			$user_id= $_SESSION['user_id'];
			$ob= new model;

			$disp_order= $ob->disp_all_order($user_id);
			return $disp_order;
			}
	}
	
	function sum_total_order_amount()
	{
		if(isset($_REQUEST['order_no']))
		{
			$order_no = $_REQUEST['order_no'];
			$ob= new model;
			$disp_payable= $ob->sum_total_order_amount($order_no);
			return $disp_payable;
		}
	}

	function disp_selected_order()
	{
		if(isset($_REQUEST['return_order']))
		{
		$order_id=  $_REQUEST['return_order'];	
		$ob = new model;
		$disp_order= $ob->disp_selected_order($order_id);
		return $disp_order;
		}
		else if(isset($_REQUEST['cancel_order']))
		{
			$order_id=  $_REQUEST['cancel_order'];	
		$ob = new model;
		$disp_order= $ob->disp_selected_order($order_id);
		return $disp_order;
		}
	}
 	
 	function disp_order_track($order_id)
 	{
 		
 		//	$order_no= $_REQUEST['order_no'];
 			$ob =new model;
 			$disp_track= $ob->disp_order_track($order_id);
 			return $disp_track;
 		
 	}
 	// function change_order($order_id)
 	// {
 	// 	$ob = new model();
 	// 	$disp_select_order = $ob->disp_select_order($order_id);
 	// 	while($disp_order_info = mysqli_fetch_array($disp_select_order))
 	// 	{
 	// 		$order_no = $disp_order_infop['order_no'];
 	// 		$paid_status = $disp_order_info['padi/unpaid'];
 	// 		if($paid_status = 'Unpaid')
 	// 		{
 	// 			$ch_paid_status="Paid";
 	// 		}
 	// 		$ob->change_order($ch_paid_status,$order_id);
 	// 	}
 	// 	header("location:confirm_order.php?order_no=$order_no");

 	// }

 	function change_order_status()
	{
		if(isset($_REQUEST['btn_ch_cancel']))
		{
					 $status = $_REQUEST['order_status'];
				 $order_id = $_REQUEST['order_id'];
				 $order_no= $_REQUEST['order_no'];	
				if($status=="Confirm" )
				{
					$ch_status = "Cancel";
					$ob = new model;		
					$ob->change_order_statusaq;
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:disp_order.php");	
				}
		}

		else if(isset($_REQUEST['btn_ch_return']))
		{
					 $status = $_REQUEST['order_status'];
					 $ch_order= $_REQUEST['ch_order'];

				 $order_id = $_REQUEST['order_id'];

				 $order_no= $_REQUEST['order_no'];	
				if($status=="Delievered" )
				{
					$ch_status = $ch_order;

					$ob = new model;		
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					header("location:disp_order.php");	
				}
		}
	}

	//return the order
	function disp_reason()
	{
		$ob = new model;
		$disp_reason= $ob->disp_reason();
		return $disp_reason;
	}

	function disp_select_reason($reason_id)
	{
		$ob = new model;
		$disp_reason= $ob->disp_select_reason($reason_id);
		return $disp_reason;	
	}

	function reason_select_detail($reason_id)
	{
		$ob= new model;
		$disp_detail= $ob->reason_select_detail($reason_id);
		return $disp_detail;
	}

	function add_return_order()
	{
		if(isset($_REQUEST['btn_ch_return']))
		{
			 $user_id= $_SESSION['user_id'];
			 $product_id= $_REQUEST['product_id'];
			 $order_no= $_REQUEST['order_no'];
		 $order_id = $_REQUEST['order_id'];
		 		$bank_id= $_REQUEST['ch_bank'];
				$shipping_id = $_REQUEST['shipping_id'];
			$reason = $_REQUEST['reason'];
			$reason_detail = $_REQUEST['reason_detail'];			
			 $method = $_REQUEST['ch_order'];
		 	$comment = $_REQUEST['comment'];
			 $status = $_REQUEST['order_status'];
			
			$ob= new model;

		 		$image= $_FILES['image']['name'];
			 	if( $image =='')
			 	{
			 		$msg = "Please Upload IMAGE";
			 	}
			 	else
			 	{
			 		$tmpname= $_FILES['image']['tmp_name'];
			 	$path = "index/product".$image;
			 		move_uploaded_file($tmpname,$path);
			
			 	if($status=="Delievered" )
				{
					 $ch_status = $method;
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);					
				}
				$ob->add_return_order($user_id,$product_id,$order_id,$shipping_id,$bank_id,$reason,$reason_detail,$method,$comment,$path);
				header("location:disp_order.php");
			 	}


		}
	}

	//add bank detail
	function add_bank()
	{
		if(isset($_REQUEST['btn_bank_add']))
		{
			$user_id = $_SESSION['user_id'];
			$bank_name =$_REQUEST['bname'];
			$ifsc = $_REQUEST['bank_ifsc'];
			$acc_no =$_REQUEST['bank_a/c_no']; 
			$branch= $_REQUEST['b_branch'];
			$address = $_REQUEST['bank_address'];

			$ob= new model;
			$ob->add_bank($user_id,$bank_name,$ifsc,$acc_no,$branch,$address);
			header("return_order.php");
				
		}
	}

	function view_bank_detail()
	{
		$ob= new model;
		$user_id = $_SESSION['user_id'];
		$disp_bank_detail = $ob->view_bank_detail($user_id);
		return $disp_bank_detail;
	}

	//cancel order
	function add_cancel_order()
	{
		if(isset($_REQUEST['btn_cancel']))
		{
			$user_id = $_SESSION['user_id'];
			$product_id= $_REQUEST['product_id'];
			$order_id = $_REQUEST['order_id'];
			$order_no= $_REQUEST['order_no'];

			$status = $_REQUEST['order_status'];
			$ob = new model;

			$reason = $_REQUEST['ch_reason'];
			$detail = $_REQUEST['detail'];

			 		if($status=="Confirm" )
					{
					$ch_status = "Cancel";
					$ob->change_order_status($order_id,$ch_status);
					$ob->add_track($order_id,$order_no,$ch_status);	
					}	
			$ob->add_cancel_order($user_id,$product_id,$order_id,$order_no,$reason,$detail);
			header("location:disp_order.php");
		}
	}

	//function add rating/review
	function add_rating_review()
	{
		if(isset($_REQUEST['btn_rating_review']))
		{
			$review= $_REQUEST['review'];
			$rating = $_REQUEST['star'];
			$product_id = $_REQUEST['product_id'];
			$user_id= $_SESSION['user_id'];
			$ob= new model;
			$ob->add_rating($user_id,$product_id,$rating);

			$ob->add_review($user_id,$product_id,$review);
		}


	}

	function view_rating()
	{
		if(isset($_REQUEST['rating']))
		{
			$order_id= $_REQUEST['rating'];
			$ob = new model;
		$disp_order= $ob->disp_selected_order($order_id);
		return $disp_order;
		}
	}

//display offer product
	function count_product()
	{
		$ob= new model;
		$result = $ob->count_product();
		return $result;
	}

	function disp_offer_product($offer_id)
	{
		$ob= new model;
		$result = $ob->disp_offer_product($offer_id);
		return $result;
	}

}
  
  ?>