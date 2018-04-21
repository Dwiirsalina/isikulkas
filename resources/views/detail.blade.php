<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Isikulkas</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="/index">IsiKulkas</a></h1>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		
</div>
<!--content-->
<div class="blog">
	<div class="container">
		
		<div class="col-md-9 ">
		<!--content-->
<div class="single">
		<div class="single-top">
			<img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="{{$gambar}}" alt="" />
				<div class="lone-line wow fadeInLeft " data-wow-delay=".5s">
					<h4>{{ $nama}}</h4>
					<ul style="line-height: 200%;font-size: 16px;font-weight:bold;" class="popular">
						<li>
							JUMLAH BAHAN YANG DIBUTUHKAN :{{ $jumlah }}
						</li>
						<li>
							BAHAN :<br/>
							@foreach($bahan as $data)
								<span style="padding-left:2em">• {{ $data }}<br/></span>
							@endforeach
						</li>
						<li>
							RATING :<br/>
								<span style="padding-left:2em">{{ $rating }}</span>
						</li>
						<li>
							KATEGORI:<br/>
							@foreach($kategori as $data)
								<span style="padding-left:2em">• {{ $data }}<br/></span>
							@endforeach
						</li>
						<li>
							CARA MEMASAK:<br/>
							@foreach($cara as $data)
								<span style="padding-left:2em">{{ $data }}<br/>
								</span>
							@endforeach	
						</li>
						<li>
							ALAT MEMASAK:<br/>
							@foreach($alat as $data)
								<span style="padding-left:2em">• {{ $data }}<br/>
								</span>
							@endforeach
						</li>
					</ul>
				</div>
		</div>
	
</div>
<!---->
<!--//content-->

		</div>
		<div class="col-md-3 categories-grid">
			<div class="search-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h4>Pencarian</h4>
					<div class="search">
					<form>
						<input type="text" placeholder="Pencarian" required="" >
						<input type="submit" value="" >
					</form>
					</div>
			</div>
				<div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h4>Kategori</h4>
					<ul class="popular">
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Breakfast</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Lunch</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dinner</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-menu-right"> </i>Dessert</a></li>
						
					</ul>
				</div>
			</div>
<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
			<div class="clearfix"> </div>
					
			</div>
		</div>
	</div>		
	<!--//footer-->

</body>
</html>

