<!DOCTYPE html>
<html>
	<head>
		<title>du lieu</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<table border="1px" cellspacing="0px" width="100%">
			<tr>
				<th rowspan="1">ma vat tu</th>
				<th rowspan="1">ten vat tu</th>
				<th rowspan="1">mau</th>
				<th rowspan="1">trong luong</th>
				<th rowspan="1">thanh pho</th>
			</tr>
			
		
		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'spj') or die ('Không thể kết nối tới database');
		
		$sql='select * from vattu';
		
		$result = mysqli_query($conn, $sql);
		if (!$result){
			die ('Câu truy vấn bị sai');
		}
		while ($row = mysqli_fetch_assoc($result)){
			
			?>
			<tr>
				<td><?php echo $row['MaVT']; ?></td>
				<td><?php echo $row['ten']; ?></td>
				<td><?php echo $row['mau']; ?></td>
				<td><?php echo $row['trluong']; ?></td>
				<td><?php echo $row['thpho']; ?></td>
			</tr>
			
			<?php
		}
		?><a href="http://localhost/main.php/">trang chu</a><hr>
		</table>
	</body>
</html>

