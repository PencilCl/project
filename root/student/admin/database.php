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
<!DOCTYPE html>
<html>
<head>
	<title>学生信息</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function on_click(argument) {
			// body...
			window.location.href="add_student.php";
		}
		function delete_one(argument) {
			// body...
			window.location.href="database.php";
			
		}
		function on_click2(argument) {
			// body...
			console.log(argument);
			if(argument==1)window.location.href="account.php";
			else if(argument==2)window.location.href="choose_course.php";
			else if(argument==3)window.location.href="course.php";
		}
	</script>
	
</head>
<body>
	<nav>
		<form method="post" action="database2.php">
			<input type="text" name="search">
			<input type="submit" name="submit" value="搜索">
			<input type="button" name="add_student" value="添加学生" onclick="on_click(null)">
			<input type="button" name="" value="account" onclick="on_click2(1)">
			<input type="button" name="" value="choose_course" onclick="on_click2(2)">
			<input type="button" name="" value="course" onclick="on_click2(3)">
		</form>
	</nav>
<?php
for($i=0; $i<$rownum; $i++){
	$row = mysqli_fetch_assoc($result);
	?>
	<table border="1" cellpadding="5" width="100%" style="min-width: 800px;">
		<tr>
			<th width="10%">学号</th>
			<th width="10%">姓名</th>
			<th width="10%">性别</th>
			<th width="10%">类型</th>
			<th width="10%">出生日期</th>
			<th width="15%">手机号码</th>
			<th width="15%">QQ号码</th>
			<th width="20%">地址</th>
		</tr>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php if($row['sex']=='m')echo "男"; else echo "女";?></td>
			<td><?php if($row['type']=='teacher')echo "教师"; else echo "学生";?></td>
			<td><?php echo $row['birth']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['QQ']; ?></td>
			<td><?php echo $row['address']; ?></td>
		</tr>
		<tr>
			<th>兴趣爱好</th>
			<td colspan="6"><?php echo $row['interest'] ?></td>
			<td>
				<a href="modify.php?id=<?php echo $row['id'] ?>"><input type="button" name="button"  value="修改"></a>
				<a href="delete_one.php?id=<?php echo $row['id'] ?>"><input type="button" name="button"  value="删除"></a>
			</td>
		</tr>
	</table>
	<br>
<?php } ?>
	
</body>
</html>