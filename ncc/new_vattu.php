<a href="http://localhost/main.php/">trang chu</a>
<?php
	if(isset($_POST['tao'])){
		$MaVT=$_POST['MaVT'];
		$ten=$_POST['ten'];
		$mau=$_POST['mau'];
		$trluong=$_POST['trluong'];
		$thpho=$_POST['thpho'];
		$sql="INSERT INTO vattu(`MaVT`,`ten`,`mau`,`trluong`,`thpho`) VALUES ('$MaVT','$ten','$mau','$trluong','$thpho')";
		$conn = mysqli_connect('localhost', 'root', '', 'spj') or die ('Không thể kết nối tới database');
		$success = mysqli_query($conn, $sql);
		echo $success ? 'add thanh cong' : 'loi';
		
	}
	
		

?>	<form method=post>
		<b>ma vat tu:</b><input type="text" style="width: 60px" name="MaVT"/>
		<b>ten:</b><input type="text" style="width: 60px" name="ten"/>
		<b>mau:</b><input type="text" style="width: 60px" name="mau"/>
		<b>trong luong:</b><input type="text" style="width: 60px" name="trluong"/>
		<b>dia chi:</b><input type="text" style="width: 60px" name="thpho"/>
		<input type="submit" name="tao" value="tao"/>
		<br>
		
	</form>