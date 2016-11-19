<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		注册页面
	</title>
</head>
<body style="text-align: center;">
	<h1>填写注册信息</h1>
	<form method="post" action="rigister_check.php">
		<table align="center">
			<tr>
				<td>账号：</td>
				<td><input type="text" name="id" placeholder="请输入学号" value="" ></td>
			</tr>
			<tr>
				<td>姓名：</td>
				<td><input type="text" name="name" placeholder="请输入姓名" value="" ></td>
			</tr>
			<tr>
				<td>昵称</td>
				<td><input type="text" name="nick" placeholder="请输入昵称" value="" ></td>
			</tr>
			<tr>
				<td>账号类型</td>
				<td>
					<input type="radio" name="type" value="student" checked="checked">学生
					<input type="radio" name="type" value="teacher" >教师
				</td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="pwd1"></td>
			</tr>
			<tr>
				<td>确认密码：</td>
				<td><input type="password" name="pwd2"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="提交">
					<input type="reset" name="reset" value="重置">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>