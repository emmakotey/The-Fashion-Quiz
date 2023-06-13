<?php

$hostname = "127.0.0.1";
$dbname = "hospital";
$username = "root";
$password = "";
$login = mysqli_connect($hostname, $username, $password) or trigger_error(mysqli_error(),E_USER_ERROR); 
$data = mysqli_select_db($login, 'hospital');
if(!$data){
die("No database Selected");
}



$email =$_POST['email'];
$password= $_POST['password'];

$sql= "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result=mysqli_query($login, $sql);
	
	if(!$sql){
		mysqli_error();
	}

?>

