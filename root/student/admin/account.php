<?php
	$username=$_COOKIE['user'];
	$password=$_COOKIE['pwd'];
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
	$query = "select * from account;";
 	$result=mysqli_query($link, $query);
 	$rownum = mysqli_num_rows($result);	
?>
<!DOCTYPE html>
<html>
<head>
	<title>account表</title>
	<meta charset="utf-8">
</head>
<body>
	<form style="text-align: center;">
		<table align="center" border="1">
			<caption>表：account</caption>
			<tr>
				<th>account</th>
				<th>id</th>
				<th>name</th>
				<th>type</th>
				<th>password</th>
			</tr>
			<?php for($i=0;$i<$rownum;$i++){ 
				$row=mysqli_fetch_array($result);
				?>
				<tr>
					<td><?php echo $row['account']; ?></td>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['type']; ?></td>
					<td><?php echo $row['password']; ?></td>
				</tr>

			<?php }?>
		</table>
	</form>
</body>
</html>