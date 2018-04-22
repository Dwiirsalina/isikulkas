<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>IsiKulkas, The only way to maximize the foodstuffs</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" type="image/png" href="images/IsiKulkas.png"/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
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
<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
 <div class="header">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span><img src="images/IsiKulkas.png" alt=""/>IsiKulkas</span></a></h1>
		</div>

			<div class="search-container">
			    <form action="/action_page.php">
			      <input type="text" placeholder="Search.." name="search">
			      <button type="submit"><i class="fa fa-search"></i></button>
			    </form>
			</div>
<!-- 		<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="typo.html">Codes</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div> -->
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		<div class="banner">
			<p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Let us help you to maximize the use of foodstuffs.</p>
			<label></label>
			<h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Welcome To IsiKulkas</h4>
			<a class="scroll down" href="#content-down"><img src="images/down.png" alt=""></a>
		</div>
</div>
<!--content-->
<div class="content" id="content-down">
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>KULKAS</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Bahan di kulkas anda</span>

				
				<!-- <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				</div> -->

				<!-- misahin baris -->
				<!-- <div class="clearfix"> </div> -->
				<!-- <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms"> -->
			      	<form method="POST" action="{{ url('/') }}">
			      		@csrf
						<div class="box" style="margin-right: 0;margin-left: 20%;">
							<!-- <table style="border-collapse: separate; border-spacing: 30px"> -->
							<div class="col-md-4" style="display: inline-block">
								<h3 style="font-size: 30px">Sayuran</h3>
								<input type="checkbox" name="bahan[]" value="tahu" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("tahu",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Tahu</h4>
								<input type="checkbox" name="bahan[]" value="tempe" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("tempe",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Tempe</h4>
								<input type="checkbox" name="bahan[]" value="daun bawang" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("daun bawang",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Daun bawang</h4>
								<input type="checkbox" name="bahan[]" value="kentang" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("kentang",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Kentang</h4>
							</div>
						

							<div class="col-md-4">
								<h3 style="font-size: 30px">Daging/Telur</h3>
								<input type="checkbox" name="bahan[]" value="daging ayam" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("daging ayam",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Daging Ayam</h4>
								<input type="checkbox" name="bahan[]" value="daging sapi" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("daging sapi",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Daging Sapi</h4>
								<input type="checkbox" name="bahan[]" value="cumi" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("cumi",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Cumi</h4>
								<input type="checkbox" name="bahan[]" value="telur" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("telur",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Telur</h4>
							</div>


							<div class="col-md-4">
								<h3 style="font-size: 30px">Bumbu</h3>
								<input type="checkbox" name="bahan[]" value="bawang merah" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("bawang merah",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Bawang Merah</h4>
								<input type="checkbox" name="bahan[]" value="bawang putih" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("bawang putih",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Bawang Putih</h4>
								<input type="checkbox" name="bahan[]" value="garam" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("garam",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Garam</h4>
								<input type="checkbox" name="bahan[]" value="gula" style="float: left;" <?php if(isset($_POST['bahan']))if(in_array("gula",$_POST['bahan'])) echo "checked='checked'"; ?>><h4 style="font-size: 20px">Gula</h4>
							</div>
						</div>
						<button type="submit" class="btn btn-warning btn-sml" style="width: 100%; margin-top: 20px;"><span class="glyphicon glyphicon-ok-sign"></span>Cari</button>
					</form>
				<!-- </div> -->
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
			<div class="content-mid">
				<div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					@if(isset($resep))
					@foreach($resep as $data)
					<div 
					class="col-md-4 menu-bottom1">
						<div class="btm-right">
							<a href="/detail/{{ $data[0]['id'] }}">
								<img style="height: 300px; width: 100%" src="{{ $data[0]['imageUrl'] }}"  alt="" class="img-responsive">
								<div class="captn">
									<h2 style="color: white">{{ $data[0]['nama_masakan'] }}</h2>
									<p>Kesesuaian: {{ $data[1] }}/{{ $data[0]['jumlah_bahan_masakan'] }}</p>				
								</div>
							</a>						
						</div>
					</div>	
					@endforeach
					@endif
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Kekinian</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Menu pilihan</span>
				</div>
				<div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-bottom">
				<div class="news-bot">
					<div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
										<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
									</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item1">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-bot">
					<div class="col-md-6 news-bottom1">
						<a href="single.html">
							<div class="content-item content-item2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item3">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			
			</div>
		</div>
	</div>
<!--//news-->
</div>
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>					
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>
					
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>		
	<!--//footer-->
</body>
</html>