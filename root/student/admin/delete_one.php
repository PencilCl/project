<?php
	$id=$_GET['id'];
	$username=$_COOKIE['user'];
	$password=$_COOKIE['pwd'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
	$query = "delete from stdinfo where id = '".$id."';";
 	mysqli_query($link, $query);
 	header("location:database.php");
?>