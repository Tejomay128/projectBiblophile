<!DOCTYPE html>
<html>
<head>
	<?php
	 global $bookname;
	$bookname="A Game of Thrones";		//change "book_title" to whatever is the name in form/button
	$bookname=trim($bookname);
	$bookname=stripslashes($bookname);
	?>
	<title><?php echo $bookname; ?></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<? php
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if (($result->num_rows) > 0) {
    while($row = $result->fetch_assoc()) {
	if(!strcmp($row["book_name"],$bookname)){
        echo "<h3>" . $row["book_name"]."</h3>". "<br>Author:" . $row["book_author"]. "<br>Category:"
	.$row["book_genre"]."<br>Description: ".$row["book_desciption"]."<br>Price:".$row["book_price"]."<br>Ratings:".$row["book_rating"].
	"<br>"."<a href='".$row["book_link"]."'>Click Here For sample</a>".".<br>";
    }
}
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>