<?php 
	session_start();

	if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body>
		<h1>Welcome home page!</h1>
		<h6>registration done</h6>
		
		<a href="logout.php"> logout </a>
</body>
</html>

<?php } else{

	echo "invalid request";
} ?>