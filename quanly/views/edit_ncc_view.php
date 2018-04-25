<?php if (!empty($nccObj) && is_array($nccObj)) { ?>
	<hr>
	<h1>Sua lai thong tin</h1>
	<form method="post">
		<input type="text" style="width: 60px" name="mancc" value="<?php echo $nccObj['mancc']; ?>"/>
		<input type="text" style="width: 60px" name="ten" value="<?php echo $nccObj['ten']; ?>"/>
		<input type="number" style="width: 60px" name="heso" value="<?php echo $nccObj['heso']; ?>"/>
		<input type="text" style="width: 60px" name="thpho" value="<?php echo $nccObj['thpho']; ?>"/>
		<input type="submit" name="tao" value="tao"/><br>
		
	</form>
<?php } ?>