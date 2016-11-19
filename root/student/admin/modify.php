<?php
	$id=$_GET['id'];
	$username=$_COOKIE['user'];
	$password=$_COOKIE['pwd'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$query = "select * from stdinfo where id = '".$id."';";
 	$result=mysqli_query($link,$query);
 	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>添加学生信息</title>
	<meta charset="utf-8">
	<style type="text/css">

	</style>
</head>
<body>
	<form method="post" action="modify_save.php">
		<table border="1" cellpadding="0" cellspacing="0" style="text-align: center;" align="center">
			<caption>修改学生信息</caption>
			<tr>
				<th>学号</th>
				<td><input type="text" name="id" style="height: 100%;" readonly="true" value="<?php echo $row['id'] ?>"></td>
			</tr>
			<tr>
				<th>姓名</th>
				<td><input type="text" name="name" style="height: 100%;" value="<?php echo $row['name'] ?>"></td>
			</tr>
			<tr>
				<th>性别</th>
				<td>
					<input type="radio" name="sex" value="m" <?php if($row['sex']=='m') echo "checked=\"checked\""; ?>>男
				 	<input type="radio" name="sex" value="f" <?php if($row['sex']!='m') echo "checked=\"checked\""; ?>>女
				</td>
			</tr>
			<tr>
				<th>出生日期</th>
				<td><input type="date" name="birth" value="<?php  echo $row['birth'] ?>" ></td>
			</tr>
			<tr>
				<th>手机号码</th>
				<td><input type="text" name="phone"  value="<?php echo  $row['phone'] ?>" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>QQ号码</th>
				<td><input type="text" name="QQ" value="<?php echo  $row['QQ'] ?>" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>地址</th>
				<td><input type="text" name="address" value="<?php echo  $row['address'] ?>" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>兴趣爱好</th>
				<td><textarea rows="4" name="interest"><?php echo $row['interest'] ?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="" value="确定">
					<input type="reset" name="" value="重置">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>