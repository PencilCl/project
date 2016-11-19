<?php
	$username=$_COOKIE['user'];
	$password=$_COOKIE['pwd'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
	$query = "select * from stdinfo;";
 	$result=mysqli_query($link, $query);
 	$rownum = mysqli_num_rows($result);	
?>