<?php
	session_start();
	if ($_SESSION['status']!="login"){
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tampilan</title>
</head>
<body>
	<h1>Anda berhasil login</h1>
	<a href="index.php">logout</a>
</body>
</html>