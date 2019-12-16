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
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				
				
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">my book list</a></li>
				
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>
<!-- Slider -->

	<div class="main_slider" style="background-image:url(additionalpics/searchback.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Find book to dive in.</h6>
						<h1>SEARCH</h1>
						<p id="error" style="color: red"></p>
				        
<div class="container">
	<form method="post" action="books_working.php" onsubmit="return valid()">
  <input type="text" placeholder="Name of the book" id="myInput" name='book_title'>
  <input type="submit" value="Search">
</form>
  <div class="search"></div>
</div>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
    <br>

	
    <br>
    <br>

	
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
						<div class="cr">©2018 All Rights Reserverd. </div>
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
<script>
function autocomplete(inp, arr) {
  var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          b = document.createElement("DIV");
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          b.addEventListener("click", function(e) {
              inp.value = this.getElementsByTagName("input")[0].value;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        currentFocus++;
        addActive(x);
      } else if (e.keyCode == 38) { 
        currentFocus--;
        addActive(x);
      } else if (e.keyCode == 13) {
        e.preventDefault();
        if (currentFocus > -1) {
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}


var books = ["A Game of Thrones","To Kill A Mockingbird","Pride and Prejudice","Harry Potter and the Sorcerers Stone","The Great Gatsby","The Lion, the Witch and the Wardrobe","The Book Thief","Jane Eyre","The Kite Runner","The Hunger Games","Little Women","The Notebook","Percy Jackson and the Lightning Thief","Eleanor and Park","Merchant of Venice","Fifty Shades of Grey","The Fellowship of the Ring","Anna Karenina","The Hound of the Baskervilles","And Then There Were None","The Alchemist","The Da Vinci Code","The Catcher in the Rye","Life of Pi","Becoming","Fahrenheit 451","A Brief History of Time","The Help","The Cat in the Hat","Long Walk To Freedom","The Old Man and the Sea","Interpreter of Maladies","Kane and Abel","Angels and Demons","The Diary of a Young Girl","Who Moved My Cheese?","The Fault in Our Stars","Gone Girl","Twilight","Charlie and the Chocolate Factory","The Hitchhikers Guide to the Galaxy","Me Before You","If I Stay"];

function valid()
{
  var name=document.getElementById("myInput").value;
  var check=0;
  for (var i = 0; i < books.length; i++)
  {
      if(books[i]==name)
      {
        check=1;
        break;
      } 
  }
  if (check==0)
  {
    document.getElementById("error").innerHTML="please enter valid book name";
    return false;
  }
  else
    return true;
} 

/*initiate the autocomplete function on the "myInput" element, and pass along the books array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), books);
</script>
</body>

</html>
