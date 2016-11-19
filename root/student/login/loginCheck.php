<?php
	$id=$_POST['id'];
	$pwd=$_POST['password'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$query = "select id,name,password,type from account;";
 	$result=mysqli_query($link, $query);
 	$rownum = mysqli_num_rows($result);
 	for($i=0;$i<$rownum;$i++){
 		$row = mysqli_fetch_assoc($result);
 		if($id==$row['id']&&$pwd==$row['password']){
 			setcookie('id',$id);
 			if($row['type']=="teacher")header("location:../teacher/teacher.php?teacher_id=$id&delete=");
 			else header("location:../student/student.php?id=$id&del&course_id");
 		}
 	}	
 	echo "账号或者密码错误，请<a href='login.php'>重新登录<a>";
?>