<?php
	$username=$_COOKIE['user'];
	$password=$_COOKIE['pwd'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$id=$_POST['id'];
 	$name=$_POST['name'];
 	$sex=$_POST['sex'];
 	$birth=$_POST['birth'];
 	$phone=$_POST['phone'];
 	$QQ=$_POST['QQ'];
 	$address=$_POST['address'];
 	$interest=$_POST['interest'];
 	$query="INSERT INTO `stdinfo` (`id`, `name`, `sex`, `birth`, `phone`, `address`, `QQ`, `interest`) VALUES ('".$id."', '".$name."', '".$sex."', '".$birth."', ".$phone.", '".$address."', ".$QQ.", '".$interest."');";
 	$result=mysqli_query($link,$query);
 	if($result)echo "插入成功<a href='database.php'>返回查看学生信息</a> ";
	else echo "插入失败<a href='add_student.php'>重新添加学生信息</a> ";
?>