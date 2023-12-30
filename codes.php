<?php
include("controller.php");
$ob= new controller;
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/codes.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Big store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Codes :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
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

</head>
<body>
<script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
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
<script async src='../../../../../js/autotrack.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="../../../../../assests/css/font-awesome.min.css">
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
            <span class="w3l-text">Download</span>
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
<?php
include("header.php");
?>  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Codes</h3>
		<h4><a href="index.html">Home</a><label>/</label>Codes</h4>
		<div class="clearfix"> </div>
	</div>
</div>
	<!---728x90--->

<!-- typography -->
<div class="typrography">
	 <div class="container">
			<div class="spec ">
				<h3>Short Codes</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
		<div class="grid_3 grid_4 wow fadeInLeft animated" data-wow-delay=".5s">
		     <h3 class="bars">Headings</h3>
		    <div class="bs-example">
				<div class="mb-60">
						<h1>Heading H1</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita saepe veniam quo consequuntur ad totam rem aliquid voluptates hic eos ullam, sequi nihil necessitatibus beatae perspiciatis perferendis, eveniet at esse vero molestiae debitis distinctio sunt modi. Repellat, eligendi, eius! Veritatis in veniam, tempora tempore ratione provident. Sunt nulla similique voluptates magni labore maxime tempore error sed necessitatibus ab. Quisquam, nisi.</p>
						<h2>Heading H2</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita saepe veniam quo consequuntur ad totam rem aliquid voluptates hic eos ullam, sequi nihil necessitatibus beatae perspiciatis perferendis, eveniet at esse vero molestiae debitis distinctio sunt modi. Repellat, eligendi, eius! Veritatis in veniam, tempora tempore ratione provident. Sunt nulla similique voluptates magni labore maxime tempore error sed necessitatibus ab. Quisquam, nisi.</p>
						<h3>Heading H3</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita saepe veniam quo consequuntur ad totam rem aliquid voluptates hic eos ullam, sequi nihil necessitatibus beatae perspiciatis perferendis, eveniet at esse vero molestiae debitis distinctio sunt modi. Repellat, eligendi, eius! Veritatis in veniam, tempora tempore ratione provident. Sunt nulla similique voluptates magni labore maxime tempore error sed necessitatibus ab. Quisquam, nisi.</p>
						<h4>Heading H4</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita saepe veniam quo consequuntur ad totam rem aliquid voluptates hic eos ullam, sequi nihil necessitatibus beatae perspiciatis perferendis, eveniet at esse vero molestiae debitis distinctio sunt modi. Repellat, eligendi, eius! Veritatis in veniam, tempora tempore ratione provident. Sunt nulla similique voluptates magni labore maxime tempore error sed necessitatibus ab. Quisquam, nisi.</p>
						<h5>Heading H5</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita saepe veniam quo consequuntur ad totam rem aliquid voluptates hic eos ullam, sequi nihil necessitatibus beatae perspiciatis perferendis, eveniet at esse vero molestiae debitis distinctio sunt modi. Repellat, eligendi, eius! Veritatis in veniam, tempora tempore ratione provident. Sunt nulla similique voluptates magni labore maxime tempore error sed necessitatibus ab. Quisquam, nisi.</p>
						<h6>Heading H6</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita saepe veniam quo consequuntur ad totam rem aliquid voluptates hic eos ullam, sequi nihil necessitatibus beatae perspiciatis perferendis, eveniet at esse vero molestiae debitis distinctio sunt modi. Repellat, eligendi, eius! Veritatis in veniam, tempora tempore ratione provident. Sunt nulla similique voluptates magni labore maxime tempore error sed necessitatibus ab. Quisquam, nisi.</p>
				</div>
			</div>
	    </div>
			<!---728x90--->
		  <div class="grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
			<h3 class="bars">Buttons</h3>
			 	  <h1 class="t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h1>
			  <h2 class="t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h2>
			  <h3 class="t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h3>
			  <h4 class="typ1 t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h4>
			  <h5 class="typ1 t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h5>
			  <h6 class="typ1 t-button">
				<a href="#"><span class="label label-default">Default</span></a>
				<a href="#"><span class="label label-primary">Primary</span></a>
				<a href="#"><span class="label label-success">Success</span></a>
				<a href="#"><span class="label label-info">Info</span></a>
				<a href="#"><span class="label label-warning">Warning</span></a>
				<a href="#"><span class="label label-danger">Danger</span></a>
			  </h6>
	      </div>
		  <div class="col-sm-6 col-md-6 col-lg-6 mb-60">
            <h4 class="text-blue title-border mb-30 bars">Alert Boxes</h4>
            <div class="alert alert-success alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Success! Well done its submitted. </div>
            <div class="alert alert-info alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Info! take this info. </div>
            <div class="alert alert-warning alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Warning ! Dont submit this. </div>
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                Error ! Change few things. </div>
          </div>
		  <div class="col-sm-6 col-md-6 col-lg-6 mb-60">
            <h4 class="text-blue title-border mb-30 bars">Tab</h4>            
            <div class="horizontal-tab">
              <ul class="nav nav-tabs">
                <li class=""><a href="#tab1" data-toggle="tab" aria-expanded="false">Tab1</a></li>
                <li class=""><a href="#tab2" data-toggle="tab" aria-expanded="false">Tab2</a></li>
                <li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Tab3</a></li>
                <li class="active"><a href="#tab4" data-toggle="tab" aria-expanded="true">Tab4</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade" id="tab1">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 1 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab2">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 2 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab3">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 3 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane active in" id="tab4">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Tab 4 : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias atque autem fuga similique, mollitia impedit maxime sapiente omnis blanditiis qui iste aliquam, quisquam eos, earum.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ex hic, maiores excepturi, doloribus modi.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  <div class="clearfix"></div>
		  	<!---728x90--->
		  <div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
			 <h3 class="bars">Progress Bars</h3>
			  <div class="tab-content">
				 <div class="tab-pane active" id="domprogress">
					 <div class="progress">    
					      <div class="progress-bar progress-bar-primary" style="width: 20%"></div>
					 </div>
					 <p>Info with <code>progress-bar-info</code> class.</p>
					 <div class="progress">    
						 <div class="progress-bar progress-bar-info" style="width: 60%"></div>
					 </div>
					 <p>Success with <code>progress-bar-success</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-success" style="width: 30%"></div>
					 </div>
					 <p>Warning with <code>progress-bar-warning</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-warning" style="width: 70%"></div>
					 </div>
					 <p>Danger with <code>progress-bar-danger</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-danger" style="width: 50%"></div>
					 </div>
					 <p>Inverse with <code>progress-bar-inverse</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-inverse" style="width: 40%"></div>
					 </div>
					 <p>Inverse with <code>progress-bar-inverse</code> class.</p>
					 <div class="progress">
						 <div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
						 <div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
						 <div class="progress-bar progress-bar-danger" style="width: 10%"><span class="sr-only">10% Complete (danger)</span></div>
					 </div>
				   </div>
			   </div>
		   </div>
		   
		   <div class="grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
			 <h3 class="bars">Pagination</h3>
			 <div class="col-md-6">
				  <nav>
				  <ul class="pagination pagination-lg">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  </ul>
				  </nav>
				  <nav>
				  <ul class="pagination">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  </ul>
				 </nav>
				 <nav>
				   <ul class="pagination pagination-sm">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				  </ul>
				 </nav>				 
			 </div>
			 <div class="col-md-6">
					<ul class="pagination pagination-lg">
									<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
								</ul>
				<nav>
				  <ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				 </ul>
			   </nav>
				 <ul class="pagination pagination-sm">
					<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				</ul>
				</div>
			   <div class="clearfix"> </div>
		 </div>
		  <div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
				<h3 class="bars">Breadcrumbs</h3>
				<ol class="breadcrumb">
					<li class="active">Home</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Library</li>
				</ol>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ol>
			</div>

	   <div class="grid_3 grid_5 wow fadeInRight animated" data-wow-delay=".5s">
			 <h3 class="bars">Badges</h3>
				<div class="col-md-6">
					<p>Add modifier classes to change the appearance of a badge.</p>
					  <table class="table table-bordered">
						<thead>
							<tr>
								<th>Classes</th>
								<th>Badges</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No modifiers</td>
								<td><span class="badge">42</span></td>
							</tr>
							<tr>
								<td><code>.badge-primary</code></td>
								<td><span class="badge badge-primary">1</span></td>
							</tr>
							<tr>
								<td><code>.badge-success</code></td>
								<td><span class="badge badge-success">22</span></td>
							</tr>
							<tr>
								<td><code>.badge-info</code></td>
								<td><span class="badge badge-info">30</span></td>
							</tr>
							<tr>
								<td><code>.badge-warning</code></td>
								<td><span class="badge badge-warning">412</span></td>
							</tr>
							<tr>
								<td><code>.badge-danger</code></td>
								<td><span class="badge badge-danger">999</span></td>
							</tr>
						</tbody>
					  </table>                    
				</div>
				<div class="col-md-6">
				  <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
					<div class="list-group list-group-alternate"> 
						<a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a> 
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a> 
						<a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a> 
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a> 
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a> 
					</div>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
			 <div class="grid_3 grid_5 wow fadeInLeft animated" data-wow-delay=".5s">
				 <h3 class="bars">Tabs</h3>
				   <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
			  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
			  <li role="presentation" class="dropdown">
				<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Dropdown <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
				  <li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">@fat</a></li>
				  <li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">@mdo</a></li>
				</ul>
			  </li>
			</ul>
			<div id="myTabContent" class="tab-content">
			  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			  </div>
			  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
			  </div>
			  <div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
				<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
			  </div>
			  <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
				<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
			  </div>
			</div>
		   </div>
		  </div>
		   <h3 class="bars">Unordered List</h3>
		<ul class="list-group">
		  <li class="list-group-item">Cras justo odio</li>
		  <li class="list-group-item">Dapibus ac facilisis in</li>
		  <li class="list-group-item">Morbi leo risus</li>
		  <li class="list-group-item">Porta ac consectetur ac</li>
		  <li class="list-group-item">Vestibulum at eros</li>
		</ul>
  <h3 class="bars">Ordered List</h3>
		<ol>
			<li class="list-group-item1">Cras justo odio</li>
			<li class="list-group-item1">Dapibus ac facilisis in</li>
			<li class="list-group-item1">Morbi leo risus</li>
			<li class="list-group-item1">Porta ac consectetur ac</li>
			<li class="list-group-item1">Vestibulum at eros</li>
		</ol>
<h3 class="bars">Forms</h3>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">@example.com</span>
</div>

<div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-addon">.00</span>
</div>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
</div>

<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>

<div class="input-group input-group-sm">
  <span class="input-group-addon" id="sizing-addon3">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
</div>

<div class="row">
  <div class="col-lg-6 in-gp-tl">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="checkbox" aria-label="...">
      </span>
      <input type="text" class="form-control" aria-label="...">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6 in-gp-tb">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" aria-label="...">
      </span>
      <input type="text" class="form-control" aria-label="...">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->


		<section id="tables">
          <div class="page-header">
            <h3 class="bars">Tables</h3>
          </div>

          <p>For basic stylinglight padding and only horizontal add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
          <div class="bs-docs-example">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
	<hr class="bs-docs-separator">
          <p>Add any of the following classes to the <code>.table</code> base class.</p>
          <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-8).</p>
          <div class="bs-docs-example">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p>Add borders and rounded corners to the table.</p>
          <div class="bs-docs-example">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@getbootstrap</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
          <div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
		</section>

	</div>
</div>
<!-- //typography -->
<!--footer-->
<?php include("footer.php"); ?>
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

  


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>

<!-- Mirrored from p.w3layouts.com/demos/june-2016/01-06-2016/big_store/web/codes.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 07:02:15 GMT -->
</html>