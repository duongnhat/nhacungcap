<!DOCTYPE html>
<html>
	<head>
		<title>du lieu</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<table border="1px" cellspacing="0px" width="100%">
			<tr>
				<th rowspan="1">mancc</th>
				<th rowspan="1">ten</th>
				<th rowspan="1">heso</th>
				<th rowspan="1">thpho</th>
				<th>&nbsp;</th>
			</tr>
			
		
		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'spj') or die ('Không thể kết nối tới database');
		
		$sql='select * from ncc';
		
		$result = mysqli_query($conn, $sql);
		if (!$result){
			die ('Câu truy vấn bị sai');
		}
		while ($row = mysqli_fetch_assoc($result)){
			
			?>
			<tr>
				<td><?php echo $row['mancc']; ?></td>
				<td><?php echo $row['ten']; ?></td>
				<td><?php echo $row['heso']; ?></td>
				<td><?php echo $row['thpho']; ?></td>
				<td><a href="http://localhost/main.php?editncc=1&tim=tim&mancc=<?php echo $row['mancc']; ?>">Edit</a></td>
			</tr>
			
			<?php
		}
		?><a href="http://localhost/main.php/">trang  &nbsp;&nbsp; chu</a><hr>
		</table>
	</body>
</html>

