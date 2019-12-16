<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "user_info";

	$usernamedb = $_POST["username"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$country = $_POST["country"];
	$phone = $_POST["phone"];
	$pwd = $_POST["pwd"];
																			// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
																			// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	

	$sql = "INSERT INTO userdata (username,name, email, country_code, phone_no, passwd)
	VALUES ('$usernamedb','$name', '$email', '$country', '$phone', '$pwd')";

	if (mysqli_query($conn, $sql)) {
	    echo "<h2>Hi! " . $name . "<br>" . " You have successfully signed up to Bibliophile.</h2>" ;
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

?>
