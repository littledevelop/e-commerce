*<?php 
$select_menu_category=$ob->view_category();

?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<?php 
					// echo @$_SESSION['user_id'];
					 if(@$_SESSION['user_id']==''){
						?>

					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
						<?php
					 }else
					 {
					?>
					<li><a href="logout.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
					<?php
					 }
					?>

					<?php
						if(@$_SESSION['user_id']==''){
						?>

					
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<?php 
					}else
					 {
					 	?>

					 	<a href="myaccount.php"><?php echo "<b>Welcome " . $_SESSION['name'] . "</b>";?></a>
					 	<?php
					 }

					?>
					<li><a href="disp_order.php" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				</ul>		
			</div>
			
			<div class="header-ri">
				<!-- <ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	 -->
			</div>
		
			<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li ><a href="index.php" class="hyper "><span>Home</span></a></li>	
							<?php 
							while($select_menu_category1=mysqli_fetch_array($select_menu_category))
							{
							?>	
							<li  class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span><?php
								 echo $select_menu_category1['category_name']; ?><b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<?php 
											$category_id = $select_menu_category1['category_id'];
											$select_menu_subcategory=$ob->disp_subcategory($category_id);
											while($select_menu_subcategory1=mysqli_fetch_array($select_menu_subcategory))
											{
											?>	
																							
												<li><a href="product_list.php?subcat_id=<?php echo $select_menu_subcategory1['subcategory_id']; ?>&&cat_id=<?php echo $select_menu_category1['category_id'];?>">
													<i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $select_menu_subcategory1['subcategory_name']; ?></a></li>
											<?php
										}
											?>
											</ul>

										</div>
										<div class="col-sm-3 w3l">
											<a href="product_list.php?cat_id=<?php echo $select_menu_category1['category_id'];?>&&subcat_id=<?php echo $select_menu_subcategory1['subcategory_id']; ?>"><img src="index/<?php echo $select_menu_category1['category_image']; ?>" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>

							</li>
							<?php 
							}
							?>
							<li><a href="codes.php" class="hyper"> <span>Codes</span></a></li>
							<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
					<a href="cart.php"><span class="fa fa-shopping-cart " style="color:green;cursor: pointer;font-size: 24px;" id="showcart" ><span class="badge badge-notify "  ></span></span></a>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>