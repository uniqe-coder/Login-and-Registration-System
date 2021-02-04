<?php

session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<!--Bootsrap 4 CDN-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="container">
	<a class="logout" href="logout.php"> Log Out </a>
<?php

  echo "<h1>Welcome ".$_SESSION['username']."<h1>";


?>
</div>
</body>
</html>