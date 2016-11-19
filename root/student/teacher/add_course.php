<?php
	$id=$_GET['teacher_id'];
	$username='student';
	$password='1234';
	$hostname = "localhost"; //主机名,可以用IP代替
	$database = "student"; //数据库名
 	$link = mysqli_connect($hostname, $username, $password,$database);
 	mysqli_query($link,"set names 'utf8'");
 	$times=$_GET['times'];
 
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
	<form  action="save_course.php?teacher_id=<?php echo $id ?>&times=<?php echo $times?>" method="post">
		<table align="center" border="1">
		<caption style="font-size: 20px;">请填写要添加课程的具体信息</caption>
			<tr>
				<th>课程编号</th>
				<td><input type="text" name="course_id"></td>
			</tr>
			<tr>
				<th>课程名称</th>
				<td><input type="text" name="course_name"></td>
			</tr>
			<tr>
				<th>地点</th>
				<td>
					<input type="text" name="location" value="">
				</td>
			</tr>
			<tr>
				<th>上课时间</th>
				<td>
					每周上课次数
					<select name="times_select" onchange="set_course_time(this.value)">
					  <option value="1" <?php if($times=='1')echo "selected='selected'"?>>1</option>
					  <option value="2" <?php if($times=='2')echo "selected='selected'"?>>2</option>
					  <option value="3" <?php if($times=='3')echo "selected='selected'"?>>3</option>
					  <option value="4" <?php if($times=='4')echo "selected='selected'"?>>4</option>
					</select>
				</td>
			</tr>
			<?php for($i=0;$i<$times;$i++){ ?>
				<tr>
					<th>时间段：<?php echo ($i+1)?></th>
					<td>
						星期
					<select name="week_select_<?php echo $i ?>"">
					  <option value="一" >一</option>
					  <option value="二" >二</option>
					  <option value="三" >三</option>
					  <option value="四" >四</option>
					  <option value="五" >五</option>
					</select>
						&nbsp;&nbsp;
						第
					<select name="course_time_select_<?php echo $i ?>"">
					  <option value="1、2" >1、2</option>
					  <option value="3、4" >3、4</option>
					  <option value="5、6" >5、6</option>
					  <option value="7、8" >7、8</option>
					  <option value="9、10" >9、10</option>
					  <option value="11、12" >11、12</option>
					</select>
						节
					</td>
				</tr>
			<?php } ?>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="发布课程">
					<input type="reset" name="">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>