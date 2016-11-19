<!DOCTYPE html>
<html>
<head>
	<title>添加学生信息</title>
	<meta charset="utf-8">
	<style type="text/css">

	</style>
</head>
<body>
	<form method="post" action="add_std.php">
		<table border="1" cellpadding="0" cellspacing="0" style="">
			<caption>请输入学生的信息</caption>
			<tr>
				<th>学号</th>
				<td><input type="text" name="id" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>姓名</th>
				<td><input type="text" name="name" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>性别</th>
				<td>
					<input type="radio" name="sex" value="m" checked="checked">男
				 	<input type="radio" name="sex" value="f">女
				</td>
			</tr>
			<tr>
				<th>出生日期</th>
				<td><input type="date" name="birth" value="1996-12-15" style="border: 0;height: 100%;""></td>
			</tr>
			<tr>
				<th>手机号码</th>
				<td><input type="text" name="phone"  pattern="[0-9]{11}" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>QQ号码</th>
				<td><input type="text" name="QQ" pattern="[0-9]{6,11}" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>地址</th>
				<td><input type="text" name="address" style="height: 100%;"></td>
			</tr>
			<tr>
				<th>兴趣爱好</th>
				<td><textarea rows="4" name="interest" style="border: 0;width: 97%;height: 100%;background:rgba(0,0,0,0);"></textarea></td>
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