<table border="1px" cellspacing="0px" width="100%">
	<tr>
		<th rowspan="1">mancc</th>
		<th rowspan="1">ten</th>
		<th rowspan="1">heso</th>
		<th rowspan="1">thpho</th>
		<th>&nbsp;</th>
	</tr>
	<?php
	
	foreach($mang as $row){	
		?>
		<tr>
			<td><?php echo $row['mancc']; ?></td>
			<td><?php echo $row['ten']; ?></td>
			<td><?php echo $row['heso']; ?></td>
			<td><?php echo $row['thpho']; ?></td>
			<td><a href="<?php echo $_baseUrl . 'edit_ncc.php?mancc='. $row['mancc']; ?>">Edit</a></td>
		</tr>
		
		<?php
	} ?>
</table>