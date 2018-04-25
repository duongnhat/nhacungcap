<a href="http://localhost/main.php/">trang chu</a>
<?php
	if(isset($_POST['tao'])){
		$mancc=$_POST['mancc'];
		$tenncc=$_POST['tenncc'];
		$hesoncc=$_POST['hesoncc'];
		$thphoncc=$_POST['thphoncc'];
		$sql="INSERT INTO ncc(`mancc`,`ten`,`heso`,`thpho`) VALUES ('$mancc','$tenncc','$hesoncc','$thphoncc')";
		$conn = mysqli_connect('localhost', 'root', '', 'spj') or die ('Không thể kết nối tới database');
		$success = mysqli_query($conn, $sql);
		echo $success ? 'add thanh cong' : 'loi';
		
	}
	
		

?>	<form method=post>
		<b>ma ncc:</b><input type="number" style="width: 60px" name="mancc"/>
		<b>ten:</b><input type="text" style="width: 60px" name="tenncc"/>
		<b>he so:</b><input type="number" style="width: 60px" name="hesoncc"/>
		<b>dia chi:</b><input type="text" style="width: 60px" name="thphoncc"/>
		<input type="submit" name="tao" value="tao"/>
		<br>
		
	</form>