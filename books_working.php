<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
  <?php
   global $bookname;
  $bookname=$_POST["book_title"];   //change "book_title" to whatever is the name in form/button
  $bookname=trim($bookname);
  $bookname=stripslashes($bookname);
  ?>
  <title><?php echo $bookname; ?></title>
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
    <div class="container single_product_container">
        
        	<br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
       
        
        
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
if (($result->num_rows) > 0) {
    while($row = $result->fetch_assoc()) {
  if(!strcmp($row["book_name"],$bookname)){
        echo "<h3>" . $row["book_name"]."</h3>". "<br><b>Author</b>: " . $row["book_author"]. "<br><b>Category</b>: "
  .$row["book_genre"]."<br><b>Description</b>: ".$row["book_desciption"]."<br><b>Price</b>: Rs.".$row["book_price"]."<br><b>Ratings</b>: ".$row["book_rating"].
  "<br>"."<a href='".$row["book_link"]."'>Click Here For sample</a>".".<br>";
  
      echo "<form method='post' action='cart.php'>
         <input type='hidden' name='book_title' value='".$row["book_name"]."'>
         <input type='hidden' name='book_price' value='".$row["book_price"]."'>
         <input type='submit'  value='buy now' />
      </form>";
    }
}
} else {
    echo "0 results";
}
$conn->close();
?>
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