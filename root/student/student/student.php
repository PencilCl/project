<?php
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
	$std_id=$_GET['id'];
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$course_id=$_GET['course_id'];
 	if($_GET['del']==1){
 		$query = "delete from choose_course where std_id = '$std_id' and course_id = '$course_id'" ;
 		mysqli_query($link,$query);
 	}
 	$query = "select * from stdinfo where id = '$std_id'";
 	$result = mysqli_query($link,$query);
 	$row = mysqli_fetch_array($result);
 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>学生界面</title>
</head>
<body>
	<nav>
		<div style="width: 100%;" align="center">
	<table >
		<tr>
			<td>姓名：<?php echo $row['name']; ?></td>
			<td>学号：<?php echo $row['id'];?></td>
			<td><a href="std_modify.php?std_id=<?php echo $std_id;?>">修改个人信息</a></td>
		</tr>
	</table>
	</div>
	</nav>
	

	<table align="center" border="1">
		<caption><h1 align="center">学生选课</h1></caption>
		<tr>
			<th>课程编号</th>
			<th>课程名称</th>
			<th>任教老师</th>
			<th>上课时间</th>
			<th>选课</th>

		</tr>
		<?php
			$query="select * from course;";
		 	$result = mysqli_query($link,$query);
		 	$rownum = mysqli_num_rows($result);
			 for($i=0;$i<$rownum;$i++){
				$row=mysqli_fetch_assoc($result);
		 ?>
		 <tr>
		 	<td><?php echo $row['id'] ?></td>
		 	<td><?php echo $row['name'] ?></td>
		 	<td><?php echo $row['teacher_name'] ?></td>
		 	<td><?php echo $row['time'] ?></td>
		 	<td colspan="2">
		 		<a href="choose_course.php?std_id=<?php echo $std_id;?>&course_id=<?php echo $row['id']?>"><input type="button" name="" value="添加课程"></a>
		 		<!-- <a href="teacher.php?delete=<?php echo $row['id'] ?>&teacher_id=<?php echo $id ?>"><input type="button" name="" value="删除" )"></a> -->
		 	</td>
		 </tr>
		 <?php } ?>
		 
	</table>
	<table align="center" border="1">
		<?php 
			$query="select * from course c,choose_course cc where c.id=cc.course_id and cc.std_id='$std_id';";
			 $result = mysqli_query($link,$query);
			 if($result){
		?>
		<caption><h1 align="center">已选课程</h1></caption>
		<tr>
			<th>课程编号</th>
			<th>课程名称</th>
			<th>任教老师</th>
			<th>上课时间</th>
			<th>选课</th>

		</tr>
		 <?php
				
			 	$rownum = mysqli_num_rows($result);
				 for($i=0;$i<$rownum;$i++){
					$row=mysqli_fetch_assoc($result);
				?>
		 <tr>
		 	<td><?php echo $row['id'] ?></td>
		 	<td><?php echo $row['name'] ?></td>
		 	<td><?php echo $row['teacher_name'] ?></td>
		 	<td><?php echo $row['time'] ?></td>
		 	<td colspan="2">
		 		<a href="student.php?del=1&id=<?php echo $std_id;?>&course_id=<?php echo $row['id']?>"><input type="button" name="" value="退选该课"></a>
		 	</td>
		 </tr>
		 <?php }} ?>
		 
	</table>
</body>
</html>