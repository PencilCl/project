<?php
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$std_id=$_GET['std_id'];
 	$course_id=$_GET['course_id'];
 	$query = "select * from choose_course where std_id = '$std_id' and course_id = '$course_id'";
 	$result = mysqli_query($link,$query);
 	print_r($result->num_rows);
 	if($result->num_rows==0){

 		$query = "insert into choose_course value ('$std_id','$course_id')";
 		$result = mysqli_query($link,$query);
 		if($result)echo "选课成功";
 	}
 	header("location:student.php?id=$std_id&del=0&course_id=0");
 ?>