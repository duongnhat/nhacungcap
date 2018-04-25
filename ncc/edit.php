<!DOCTYPE html>
<html>
    <head>
        <title>edit ncc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<a href="http://localhost/main.php/">trang chu</a><hr>
		<h2>Nhap vao ma nha cung cap</h2>
	<form method="get">
		<input type="text" style="width: 60px" name="mancc"/>
		<input type="submit" name="tim" value="tim"/><br>
	</form>

<?php
	if (isset($_GET['tim']) || isset($_GET['tao'])){
		$ma=$_GET['mancc'];
		$conn = mysqli_connect('localhost', 'root', '', 'spj') or die ('Không thể kết nối tới database');
		$sql="select * from ncc where ncc.mancc='$ma'";
		$success=mysqli_query($conn,$sql);
		$giaima=mysqli_fetch_assoc($success);
		if($success){
		}
		else{echo 'khong tim thay';}
	}
	if (isset($_GET['tim'])){
?>
	<hr>
	<h1>Sua lai thong tin</h1>
		<form method="get">
			<input type="text" style="width: 60px" name="mancc" value="<?php echo $giaima['mancc']; ?>"/>
			<input type="text" style="width: 60px" name="ten" value="<?php echo $giaima['ten']; ?>"/>
			<input type="number" style="width: 60px" name="heso" value="<?php echo $giaima['heso']; ?>"/>
			<input type="text" style="width: 60px" name="thpho" value="<?php echo $giaima['thpho']; ?>"/>
			<input type="submit" name="tao" value="tao"/><br>
			
		</form>

<?php } 
	?>

<?php 
	if (isset($_GET['tao'])){
		$update="UPDATE ncc SET ncc.mancc='".$_GET['mancc']."',ncc.ten='".$_GET['ten']."',ncc.heso='".$_GET['heso']."',ncc.thpho='".$_GET['thpho']."' WHERE ncc.mancc='".$_GET['mancc']."'";
		$taolai= mysqli_query($conn,$update);
		if($taolai){
			echo 'edit thanh cong';
		}
		else { echo 'edit khong thanh cong';}
	}
?>
    </body>
</html>