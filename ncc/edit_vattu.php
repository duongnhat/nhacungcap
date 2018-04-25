<!DOCTYPE html>
<html>
    <head>
        <title>edit vat tu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<a href="http://localhost/main.php/">trang chu</a><hr>
		<h2>Nhap vao ma vat tu</h2>
	<form method=get>
		<input type="text" style="width: 60px" name="MaVT"/>
		<input type="submit" name="tim" value="tim"/><br>
		

<?php
	if (isset($_GET['tim']) || isset($_GET['tao'])){
		$ma=$_GET['MaVT'];
		$conn = mysqli_connect('localhost', 'root', '', 'spj') or die ('Không thể kết nối tới database');
		$sql="select * from vattu where vattu.MaVT='$ma'";
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
			<input type="text" style="width: 60px" name="MaVT" value="<?php echo $giaima['MaVT']; ?>"/>
			<input type="text" style="width: 60px" name="ten" value="<?php echo $giaima['ten']; ?>"/>
			<input type="text" style="width: 60px" name="mau" value="<?php echo $giaima['mau']; ?>"/>
			<input type="text" style="width: 60px" name="trluong" value="<?php echo $giaima['trluong']; ?>"/>
			<input type="text" style="width: 60px" name="thpho" value="<?php echo $giaima['thpho']; ?>"/>
			<input type="submit" name="tao" value="tao"/><br>
			
		</form>

<?php } 
	?>

<?php 
	if (isset($_GET['tao'])){
		$update="UPDATE vattu SET vattu.MaVT='".$_GET['MaVT']."',vattu.ten='".$_GET['ten']."',vattu.mau='".$_GET['mau']."',vattu.trluong='".$_GET['trluong']."',vattu.thpho='".$_GET['thpho']."' WHERE vattu.MaVT='".$_GET['MaVT']."'";
		$taolai= mysqli_query($conn,$update);
		if($taolai){
			echo '     edit thanh cong';
		}
		else { echo '     edit khong thanh cong';}
	}
?>
    </body>
</html>