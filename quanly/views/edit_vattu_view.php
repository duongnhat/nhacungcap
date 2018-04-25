<?php if (!empty($vatTuObj) && is_array($vatTuObj)) { ?>
	<hr>
	<h1>Sua lai thong tin</h1>
	<form method="post">
		<input type="text" style="width: 60px" name="MaVT" value="<?php echo $vatTuObj['MaVT']; ?>"/>
		<input type="text" style="width: 60px" name="ten" value="<?php echo $vatTuObj['ten']; ?>"/>
		<input type="text" style="width: 60px" name="mau" value="<?php echo $vatTuObj['mau']; ?>"/>
		<input type="number" style="width: 60px" name="trluong" value="<?php echo $vatTuObj['trluong']; ?>"/>
		<input type="text" style="width: 60px" name="thpho" value="<?php echo $vatTuObj['thpho']; ?>"/>
		<input type="submit" name="tao" value="tao"/><br>
		
	</form>
<?php } ?>