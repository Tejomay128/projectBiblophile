<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>BIBLIOPHILE</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p class="top_nav_left">Welcome, <?php echo $_SESSION["username"]; ?> </p>

					</div>
					
					
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#"><span>BIBLIO</span>PHILE</a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="indexphp.php">home</a></li>
								
                                <li><a href="searchbar.php">Search</a></li>
								
								<li><a href="contact.html">contact</a></li>
								<li><a href="logout.php">logout</a></li>
							</ul>
							
							
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(additionalpics/back.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h2>A Website For Book Lovers</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
    <br>

	<!-- Banner -->

	<div class="banner">
		<div class="container">
            <!-- row onw -->
			<div class="row">
				<div class="col-md-4">
				                        <div class="banner_item align-items-center" style="background-image:url(genre/photography.jpg)"> 
						<div class="banner_category">
							<a href="cat_autobiography.php">AUTOBIOGRAPHY</a>
						</div>
					</div>
                                                           
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/classic.jpg)">
						<div class="banner_category">
							<a href="cat_classic.php">classic</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/children.jpg)">
						<div class="banner_category">
							<a href="cat_children.php">children</a>
						</div>
					</div>
				</div>
			</div>
            <br>
            <br>
            <!-- row two -->
            <div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/fantasy.jpg)">
						<div class="banner_category">
							<a href="cat_fantasy.php">fantasy</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/fiction.jpg)">
						<div class="banner_category">
							<a href="cat_fiction.php">fiction</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/historicalfiction.jpg)">
						<div class="banner_category">
							<a href="cat_histfict.php">historical fiction</a>
						</div>
					</div>
				</div>
			</div>
            <br>
            <br>
             <!-- row three -->
            <div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/mystery.jpg)">
						<div class="banner_category">
							<a href="cat_mystery.php">mystery</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/nonfiction.jpg)">
						<div class="banner_category">
							<a href="cat_nonfiction.php">non fiction</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/romance.jpg)">
						<div class="banner_category">
							<a href="cat_romance.php">romance</a>
						</div>
					</div>
				</div>
			</div>
            <br>
            <br>
             <!-- row four -->
            <div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/science.jpg)">
						<div class="banner_category">
							<a href="cat_science.php">science</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/sciencefiction.jpg)">
						<div class="banner_category">
							<a href="cat_scifi.php">science fiction</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(genre/youngadult.jpg)">
						<div class="banner_category">
							<a href="cat_youngadult.php">young adult</a>
						</div>
					</div>
				</div>
			</div>
            
		</div>
	</div>
    <br>
    <br>

	
	<!-- Book of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="additionalpics/back'.jpg"SS alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Book Of The Week</h2>
                            <h3>Pride and Prejudice</h3>
                            <h5>-novel by Jane Austen</h5>
                            <p>Sparks fly when spirited Elizabeth Bennet meets single, rich, and proud Mr. Darcy. But Mr. Darcy reluctantly finds himself falling in love with a woman beneath his class. Can each overcome their own pride and prejudice?</p>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
	

	
					

	<!-- NEW AUTHORS -->

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>NEW AUTHORS</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(Newauthor/Anthony%20Doerr.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title"> Anthony Doerr </h4>
							<span class="blog_meta">All the Light we cannot see</span>
							<a class="blog_more" href="http://anthonydoerr.com/">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(Newauthor/Suzanne%20Collins%20Wrote%20A%20Touching%20Letter%20Saying%20Goodbye%20To%20The%20_Hunger%20Games_%20Series.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Suzanne Collins </h4>
							<span class="blog_meta">The Hunger Games </span>
							<a class="blog_more" href="http://www.suzannecollinsbooks.com/">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(Newauthor/5%20Sfaturi%20pentru%20scris%20de%20la%20Graeme%20Simsion%20_%20Hyperliteratura.png)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Graeme Simsion</h4>
							<span class="blog_meta">The Rosie Project</span>
							<a class="blog_more" href="https://graemesimsion.com/">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Read anywhere</h6>
							<p>easily available e-books </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>pay safe</h6>
							<p>digital payment </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>responsive </h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>anytime</h6>
							<p>duh</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						
                        <p><i><span>“A reader lives a thousand lives before he dies . . . The man who never reads lives only one.”</span> – George R.R. Martin</i></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2019 Project-Bibliophile
?>
<!DOCTYPE html> </div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
