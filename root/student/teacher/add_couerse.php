<?php
	$id=$_GET['teacher_id'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		添加课程
	</title>
	<script type="text/javascript">
		function set_course_time(argument) {
			// body...
			console.log(argument);
			 window.location.href="add_course.php?teacher_id=<?php echo $id ?>&times="+argument; 
		}
	</script>
</head>
<body>
	<form>
		<table>
			<tr>
				<th>课程编号</th>
				<td><input type="text" name="course_id"></td>
			</tr>
			<tr>
				<th>课程名称</th>
				<td><input type="text" name="course_name"></td>
			</tr>
			<tr>
				<th>任课老师</th>
				<td><input type="text" name="" value="" readonly="true"></td>
			</tr>
			<tr>
				<th>上课时间</th>
				<td>
					每周上课次数
					<select name="times_select" onchange="set_course_time(this.value)">
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					</select>
				</td>
				<?php 
					//$times= 
				?>
			</tr>
		</table>
	</form>
</body>
</html>