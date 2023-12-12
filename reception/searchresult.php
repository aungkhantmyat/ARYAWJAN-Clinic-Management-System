<?php

$link = mysqli_connect("localhost", "root", "", "testingaq");
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$sql = "select * from appointment where app_doctor = '$doctor' and app_date = '$date'";
$result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title> Result</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<table class = "table">
		<tr>
			<td>app_id</td>
			<td>app_name</td>
			<td>app_phone</td>
			<td>app_email</td>
			<td>app_department</td>
			<td>app_doctor</td>
			<td>app_date</td>
		</tr>
		<?php foreach ($result as $index => $data): ?>
			<tr>
				<td> <?=++$index?></td>
				
				<td> <?=$data['app_name']?></td>
				<td> <?=$data['app_phone']?></td>
				<td> <?=$data['app_email']?></td>
				<td> <?=$data['app_department']?></td>
				<td> <?=$data['app_doctor']?></td>
				<td> <?=$data['app_date']?></td>
			</tr>
		<?php endforeach?>
	</table>

</body>
</html>