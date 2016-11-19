<!DOCTYPE html>
<html>
<head>
	<title>学生信息中心</title>
	<meta charset="utf-8">
</head>
<body style="text-align: center;">
	<h1>学生信息中心</h1>
	<form action="loginCheck.php" method="post">
		<table align="center">
			<tr>
				<td>账号：</td>
				<td><input type="text" name="id" placeholder="学号" value=""></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="password" value="" style="margin-right: 0;"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<input type="submit" name="submit" value="登录">
					<a href="register.php" style="text-decoration-line: none;"><input type="button" name="register" value="注册"></a>
				</td>
			</tr>
		</table>
		
	</form>
	<a href="../admin/login.php">管理者登录</a>
</body>
</html>