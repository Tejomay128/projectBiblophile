<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>BIBLIOPHILE LOGIN, SIGN IN</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <script src="loginvalidate.js"></script>

	  <style type="text/css">
	  	body	{
					background-image: url(additionalpics/signup.jpg);
					background-size:contain;
					
		}
		.btn-1 {
  				background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
		}
		#styles	{
					background-color: white; 
					padding: 50px; 
					border-radius: 25px;
					-webkit-box-shadow: 1px 2px 13px 7px rgba(0,0,0,0.81); 
					box-shadow: 1px 2px 13px 7px rgba(0,0,0,0.81);
		}
		input[type=text] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=text]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		
		input[type=password] {
  							width: 100%;
  							padding: 20px 20px;
  							margin: 8px 0;
  							box-sizing: border-box;
  							border: 1px solid rgb(230, 230, 230);
  							-webkit-transition: 0.5s;
  							transition: 0.5s;
  							outline: none;
		}
		input[type=password]:focus {
  								border: 2px solid rgb(255, 153, 128);
		}
		.container {
  					display: flex;
  					justify-content: center;
  					align-items: center;
  					align-content: center;
  					flex-wrap: wrap;
  					width: 80vw;
  					margin: 0 auto;
  					min-height: 100vh;
  		}
		.btn {
  				width: 100%;
  				flex: 1 1 auto;
  				margin: 10px;
  				padding: 15px;
  				text-align: center;
  				text-transform: uppercase;
  				transition: 0.5s;
  				background-size: 200% auto;
 	 			color: white;
 				/* text-shadow: 0px 0px 10px rgba(0,0,0,0.2);*/
  				box-shadow: 0 0 20px #eee;
  				border-radius: 10px;
 		}
 		.btn:hover {
  				background-position: right center; /* change the direction of the change here */
		}
		.btn-1 {
  				background-image: linear-gradient(to right, #f6d365 0%, #fda085 51%, #f6d365 100%);
		}
		
	  </style>

	</head>

	<!-- <?php error_reporting (E_ALL ^ E_NOTICE); ?> -->


	<body>
	<?php
	if(isset($_POST["login_submit"]))
	{
	  $servername = "localhost";
	  $usrname = "root";
	  $password = "";
	  $dbname = "user_info";

	 
	  $username = $_POST["username"];
	  $pwd = $_POST["pwd"];

	  if(empty($username)) 
	  {
	      $username_err = "*Username is required";
	  } 

	   if(empty($pwd)) 
	  {
	      $pwd_err = "*password is required";
	  } 
	 

	  if(!isset($username_err) && !isset($pwd_err))
	  {                                   // Create connection
	    $conn = mysqli_connect($servername, $usrname, $password, $dbname);
	                                        // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	  }
	    
	    
	    $sql = 'SELECT * FROM userdata WHERE username="'.  $username . '"';
	    $result = mysqli_query($conn,$sql);
		if($rows = mysqli_fetch_assoc($result) )
		{
			if(password_verify($pwd, $rows["passwd"]))
			{
				session_start();
				$_SESSION["username"] = $username;
				
				header("Location: indexphp.php");
				exit();
			}
		
			else
			{
				$message = "Invalid Password!";
			}
		}
		else
		{
			$message = "Invalid username or password!";
		}
	    mysqli_close($conn);
	  }
	}
?>

	<div class="container" >
  	<div class="col-md-3"></div>         <!--page is divided into three parts in 1:2:1 ratio,middle part contains a bootstrap form-->
  	<div class="col-md-6" id="styles">
	    <h2 style="text-align: center; padding-bottom: 10px; color: rgb(64, 64, 64);"><b>WELCOME TO BIBLIOPHILE</b></h2>

	    <div style="color: red;"><?php if($message!="") { echo $message; } ?></div>

	    <form name="signup" action="" method="post" style=" padding: 20px;">   

	     <div class="form-group">		     
		 	<input type="text" class="form-control" placeholder="Your Username" name="username">
		 	<span style="color: red;"><?php echo "$username_err"; ?></span>
		 </div>
		   
	     <div class="form-group">
	        <input type="password" class="form-control" name="pwd" placeholder="Type Password">
	        <span style="color: red;"><?php echo "$pwd_err"; ?></span>
     	</div>
      	
      	<div align="center">
      		<span style="color: red;"><?php echo "$err"; ?></span>
      	<button type="submit" class="btn btn-1" name="login_submit"><b>LOG IN</b></button>
      	</div>
	<br>

      	<div align="center"><p>New to Bibliophile?</p>
		<a href="signuppage.php">Join now</a>
	</div>

    	</form>
  	</div>
  	<div class="col-md-3"></div>
	</div>
		
	</body>
	
</html>