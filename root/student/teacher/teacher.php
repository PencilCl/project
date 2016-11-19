<?php
	$id=$_GET['teacher_id'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$query = "select name from account where id = '$id'";
 	$result = mysqli_query($link,$query);
 	$row = mysqli_fetch_array($result);
 
 	$teacher_name=$row[0];
 	$del_id=$_GET['delete'];
 	if($del_id!=null){
 		$query="delete from course where id = '$del_id'; ";
 		mysqli_query($link,$query);
 	}
 	$query="select * from course;";
 	$result = mysqli_query($link,$query);
 	$rownum = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>教师管理页面</title>
</head>
<body>
	<nav>
		<table align="center">
			<tr>
				<td>账户ID：<?php echo $id?></td>
				<td>名称：<?php echo $teacher_name ?></td>
				<td><a href="add_course.php?teacher_id=<?php echo $id ?>&times=2">添加课程</a></td>
			</tr>
		</table>
	</nav>
	<table align="center" border="1">
		<tr>
			<th>课程编号</th>
			<th>课程名称</th>
			<th>任教老师</th>
			<th>上课时间</th>
			<th>改动</th>

		</tr>
		<?php for($i=0;$i<$rownum;$i++){
				$row=mysqli_fetch_assoc($result);
		 ?>
		 <tr>
		 	<td><?php echo $row['id'] ?></td>
		 	<td><?php echo $row['name'] ?></td>
		 	<td><?php echo $row['teacher_name'] ?></td>
		 	<td><?php echo $row['time'] ?></td>
		 	<td colspan="2">
		 		<a href="#"><input type="button" name="" value="修改"></a>
		 		<a href="teacher.php?delete=<?php echo $row['id'] ?>&teacher_id=<?php echo $id ?>"><input type="button" name="" value="删除" )"></a>
		 	</td>
		 </tr>
		 <?php } ?>
	</table>
</body>
</html>