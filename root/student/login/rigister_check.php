<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$pwd1=$_POST['pwd1'];
	$pwd2=$_POST['pwd2'];
	$nick=$_POST['nick'];
	$type=$_POST['type'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$query = "select * from stdinfo;";
 	$result=mysqli_query($link, $query);
 	$rownum = mysqli_num_rows($result);	
 	$flag=0;
 	if($pwd1!=$pwd2){
 		echo "两次密码输入不一致,<a href='register.php'>返回重新注册</a><br>";
 	}
 	for($i=0;$i<$rownum;$i++){
 		$row=mysqli_fetch_assoc($result);
 		if($row['name']==$name&&$row['id']==$id&&$row['type']==$type){
 			$flag=1;
 			break;
 		}
 	}
 	if($flag){
 		$query = "INSERT INTO `account` (`account`, `id`, `name`, `password`,`type`) VALUES ('".$nick."', '".$id."', '".$name."', '".$pwd1."','".$type."');";
 		$res = mysqli_query($link,$query);
 		if($res){
 			header("location:login.php");
 		}
 		else {
 			echo "注册失败，用户名已经被使用,<a href='register.php'>返回重新注册</a>";
 		}
 	}
 	echo "注册失败,<a href='register.php'>返回重新注册</a>";

?>