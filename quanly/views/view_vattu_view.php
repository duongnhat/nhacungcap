
<table border="1px" cellspacing="0px" width="100%">
	<tr>
		<th rowspan="1">Ma Vat Tu</th>
		<th rowspan="1">ten</th>
		<th rowspan="1">mau</th>
		<th rowspan="1">trong luong</th>
		<th rowspan="1">thpho</th>
		<th>&nbsp;</th>
	</tr>
	<?php
	foreach($mang as $row){	
		?>
		<tr>
			<td><?php echo $row['MaVT']; ?></td>
			<td><?php echo $row['ten']; ?></td>
			<td><?php echo $row['mau']; ?></td>
			<td><?php echo $row['trluong']; ?></td>
			<td><?php echo $row['thpho']; ?></td>
			<td><a href="<?php echo $_baseUrl . 'edit_vattu.php?MaVT='. $row['MaVT']; ?>">Edit</a></td>
		</tr>
		
		<?php
	} ?>
</table>