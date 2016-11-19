<?php
	$username=$_POST['user'];
	$password=$_POST['password'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$conn = mysqli_connect($hostname, $username, $password);
	if(mysqli_connect_error()){
		header("location:login3.php");
	}
	else{
		setcookie('user',$username);
		setcookie('pwd',$password);
		header("location:database.php?user=".$username."&pwd=".$password); 	
	} 
?>
