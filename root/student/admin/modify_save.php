<?php
	$id=$_POST['id'];
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
 	$query="UPDATE `stdinfo` SET `name` = '".$name."', `sex` = '".$sex."', `birth` = '".$birth."', `phone` = '".$phone."', `address` = '".$address."', `QQ` = '".$QQ."', `interest` = '".$interest."' WHERE `stdinfo`.`id` = '".$id."';";
 	$result=mysqli_query($link,$query);
 	if($result)echo "修改成功<a href='database.php'>返回查看学生信息</a> ";
 	else echo "QAQ修改失败，<a href='modify?id=".$id."'>重新修改</a>";
 ?>