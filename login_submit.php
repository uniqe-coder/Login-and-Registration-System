<?php

session_start();

//header('location:Login.php');

$local = "localhost";
$uname = 'root';
$pwd = '';


$con = mysqli_connect($local, $uname, $pwd);
$con_db = mysqli_select_db($con, 'login_and_register' );
$name = $_POST['user'];
$password = $_POST['password'];
$s = "SELECT * FROM usertable where user = '$name' && password='$password' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num==1) {
	$_SESSION['username'] = $name;
    header('location:home.php');
}
else{
	header('location:login.php');
}

?>