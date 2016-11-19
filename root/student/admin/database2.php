<?php
	$username=$_COOKIE['user'];
	$password=$_COOKIE['pwd'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$search=$_POST['search'];
	$query = "select * from stdinfo where name like '%".$search."%'";
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
			window.location.href="http://www.szu.edu.cn";
		}
	</script>
		<form method="post" action="database2.php">
			<input type="text" name="search">
			<input type="submit" name="submit" value="搜索">
			<a href="database.php"><input type="button" name="" value="返回"></a>
		</form>
		
</head>
<body>
	
<?php
for($i=0; $i<$rownum; $i++){
	$row = mysqli_fetch_assoc($result);?>
	<table border="1" cellpadding="5" width="100%" style="min-width: 800px;">
		<tr>
			<th width="10%">学号</th>
			<th width="10%">姓名</th>
			<th width="10%">性别</th>
			<th width="15%">出生日期</th>
			<th width="15%">手机号码</th>
			<th width="15%">QQ号码</th>
			<th width="25%">地址</th>
		</tr>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php if($row['sex']=='m')echo "男"; else echo "女";?></td>
			<td><?php echo $row['birth']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['QQ']; ?></td>
			<td><?php echo $row['address']; ?></td>
		</tr>
		<tr>
			<th>兴趣爱好</th>
			<td colspan="5"><?php echo $row['interest'] ?></td>
			<td>
				<input type="button" name="button" onclick="on_click(null)" value="修改">
				<input type="button" name="button" onclick="on_click(null)" value="删除">
			</td>
		</tr>
	</table>
	<br>
<?php } ?>
	
</body>
</html>