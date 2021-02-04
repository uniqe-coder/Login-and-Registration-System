<?php

session_start();

header('location:Login.php');

$local = "localhost";
$uname = 'root';
$pwd = '';


$con = mysqli_connect($local, $uname, $pwd);
$con_db = mysqli_select_db($con, 'login_and_register' );
$name = $_POST['user'];
$password = $_POST['password'];
$s = "SELECT * FROM usertable where user = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num==1) {
    echo "Already User exists";
}
else{
    $register = " INSERT into usertable (user, password) values ( '$name', '$password' ) ";
     mysqli_query($con, $register);
     echo "Registration successfull";
}

?>
