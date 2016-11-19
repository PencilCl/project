<?php
	$id=$_POST['id'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; ///数据库名
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
 	if($result)echo "修改成功<a href='student.php?id=$id&del=0&course_id=0'>返回继续选课</a> ";
 	else echo "QAQ修改失败，<a href='std_modify.php?id=".$id."'>重新修改</a>";
 ?>