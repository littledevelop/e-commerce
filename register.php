
<?php 
include("controller.php");
$ob = new controller; 

//to display state
$disp_state = $ob->get_state(); 

//to add user
$msg = $ob->add_user();


?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:01:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, true);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<!-- <link rel="stylesheet" href="css/assets/css/font-awesome.min.css"> -->
</head>
<body>
<script src="js/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src='js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body>

<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
  label{
    color: red;
  }

.key input[type="text"], .key input[type="password"]{
padding: 23px 10px;    }
}
</style>
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    <div id="w3lDemoBar" class="w3l-demo-bar">
        <div class="demo-btns">
        <a href="https://w3layouts.com/?p=">
            <span class="w3l-icon -back">
                <span class="fa fa-arrow-left"></span>
            </span>
            <span class="w3l-text">Back</span>
        </a>
        <a href="https://w3layouts.com/?p=">
            <span class="w3l-icon -download">
                <span class="fa fa-download"></span>
            </span>
            <span class="w3l-text">Download</span
        </a>
        <a href="https://w3layouts.com/checkout/?add-to-cart=" class="no-margin-bottom-mobile">
            <span class="w3l-icon -buy">
                <span class="fa fa-shopping-cart"></span>
            </span>
            <span class="w3l-text">Buy</span>
        </a>
    </div>
        <!---<div class="responsive-icons">
            <a href="#url" class="desktop-mode">
                <span class="w3l-icon -desktop">
                    <span class="fa fa-desktop"></span>
                </span>
            </a>
            <a href="#url" class="tablet-mode">
                <span class="w3l-icon -tablet">
                    <span class="fa fa-tablet"></span>
                </span>
            </a>
            <a href="#url" class="mobile-mode no-margin-bottom">
                <span class="w3l-icon -mobile">
                    <span class="fa fa-mobile"></span>
                </span>
            </a>
        </div>-->
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<?php include("header.php");?> 
  <!---->

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label></label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>
	<!---728x90--->

<!--login-->

	<div class="login1" style="padding: 1em 0px;">
		<div class="main-agileits" style="width: 60%">
				<div class="form-w3agile form1">
          <div class="row">
            <div class="col-md-12">
              
					<h3>Register</h3>
            
					<form action="#" method="post" id="loginform" enctype="multipart/form-data">
					<div class="row">
           <div class="col-md-6">
              <div class="key">
  							<i class="fa fa-user" aria-hidden="true"></i>
  							<input  type="text"  value="" name="name" data-error="#errname">
                <span id="errname"></span>
  							<div class="clearfix"></div>
  						</div>
          </div>
          <div class="col-md-6">
               
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="" name="email"  placeholder="Enter Your email : " data-error="#erremail">
							<span id="erremail"></span>
              <div class="clearfix"></div>
						</div>
          </div> 
          </div>

          <div class="row">
          <div class="col-md-6">
            		<div class="key">
    							<i class="fa fa-lock" aria-hidden="true"></i>
    							<input   type="password" value="" placeholder="Enter Your password : "  id="pass" name="password" data-error="#errpassword">
                  <span id="errpassword"></span>
    							<div class="clearfix"></div>
    						</div>
            </div>
          <div class="col-md-6">
              
    						<div class="key">
    							<i class="fa fa-lock" aria-hidden="true"></i>
    							<input  type="password" value="" name="cpassword"  placeholder="Enter confirm password : " data-error="#errcpassword">
                  <span id="errcpassword"></span>
    							<div class="clearfix"></div>
    						</div>
            </div>
          </div>

        <div class="row">
          <div class="col-md-6">
            <div class="key">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input  type="text" value="" name="mobile" placeholder="Enter Your mobile : " >
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="key">
              <i class="fa fa-lock" aria-hidden="true"></i> 
              <input style="margin:15px;" type="radio" value="Male" name="gender" data-error="#errgender">Male
              <input style="margin: 5px 14px 20px  52px;"  type="radio" value="Female" data-error="#errgender" name="gender" >Female<br>

                <span id="errgender"></span>
              <div class="clearfix"></div>

            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="key">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <div class="form-group" >
                
              <select name="state" class="form-control" style=" border: none; border-bottom: none;margin:6px;width:90%;" data-error="#errstate" onchange="get_statewise_city(this.value);">
                <option value="">Select State</option>
                <?php
                while($row = mysqli_fetch_array($disp_state)) 
                {
                ?>
                  <option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name'];?></option>
                <?php
                }
                ?>
              </select>
              </div>
              <span id="errstate" ></span>
              <div class="clearfix"></div>
            </div>
            
          </div>
          <div class="col-md-6">
            
             <div class="key">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <div class="form-group">
                
              <select name="city" class="form-control" id="get_city" style="border: none; border-bottom: none;margin:6px;width:90%;" data-error="#errcity">
                <option value="">Select City</option>
              </select>

              </div>
              <span id="errcity" ></span>
              <div class="clearfix"></div>

            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-md-6">
            <div class="key">
              <i class="fa fa-home" aria-hidden="true" >
              </i>
              <div class="form-group">

              <textarea class="form-control" placeholder="Enter Your address : "  style="border: none; border-bottom: none;margin:6.5px;width:85%;height: 35px;" name="address"  data-error="#erraddress"></textarea>
              </div>
              <span id="erraddress"></span>
              <div class="clearfix"></div>
            </div>          </div>
          <div class="col-md-6">
            
            <div class="key">
              <i class="fa fa-user" aria-hidden="true"></i>
              <div class="form-group">
                
             <input type="file" class="form-control" style="border: none; border-bottom: none;margin:6.5px;width:85%;" name="profile" data-error="#errprofile">
              </div>
              <span id="errprofile" ></span>
              <span><?php echo $msg; ?></span>
              <div class="clearfix"></div>
            </div>            
          </div>
        </div>
          
						<input type="submit" value="Submit" name="btnadduser">
					</form>
          </div>
          </div>

				</div>
				
			</div>
		</div>
<!--footer-->
	<!---728x90--->
<?php include("footer.php");?> 
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
      <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
<script src="index/validation1.js"></script>
      
<script src="index/validation.js"></script>

<!-- <div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, 'a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script> -->

	</body>

<!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:01:54 GMT -->
</html>