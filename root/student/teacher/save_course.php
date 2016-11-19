<?php
	$teacher_id=$_GET['teacher_id'];
	$times=$_GET['times'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$query = "select name from account where id = '$teacher_id'";
 	$result = mysqli_query($link,$query);
 	$row = mysqli_fetch_array($result);
 	$teacher_name=$row[0];
 	$course_id=$_POST['course_id'];
 	$course_name=$_POST['course_name'];
 	$location=$_POST['location'];
 	$course_time="";
 	for($i=0;$i<$times;$i++){
 		if($i>0&&$i<$times)$course_time.=";";
 		$course_time.="星期".$_POST["week_select_".$i].$_POST['course_time_select_'.$i]."节";
 	}
 	$query="INSERT INTO `course` (`id`, `name`, `teacher_id`, `teacher_name`, `time`, `location`) VALUES ('$course_id', '$course_name', '$teacher_id', '$teacher_name', '$course_time', '$location');";
 	$result = mysqli_query($link,$query);
 	if($result)echo "添加课程成功，<a href='add_course.php?teacher_id=$teacher_id&times=2'>继续添加</a>
 		<a href='teacher.php?delete=&teacher_id=$teacher_id'>返回查看</a>";
 	else echo "fail";
?>