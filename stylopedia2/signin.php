<?php
<html>
<body>

$con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM user WHERE username=" . $_GET["username"] . "AND password=" . $_GET["password"]);
$count = 0;
$success = false;
while($row = mysqli_fetch_array($result)) {
  $count++;
}
if ($count == 1) {
	$success = true;
	header( "Location: index.php" );
}
else {
	$_SESSION['err']="The username you entered is not in database. ";
	echo"lolla"; exit;
	header( "Location: login.php" );
}

mysqli_close($con);

</body>
</html>
?>