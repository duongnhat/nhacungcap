<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");
$newVatTu=new CoSoDuLieu;
$viewName = 'views/new_vattu_view.php';
include('layout.php');
if(isset($_POST['tao'])){
	$MaVT=$_POST['MaVT'];
	$ten=$_POST['ten'];
	$mau=$_POST['mau'];
	$trluong=$_POST['trluong'];
	$thpho=$_POST['thpho'];
	$sql="INSERT INTO vattu(`MaVT`,`ten`,`mau`,`trluong`,`thpho`) VALUES ('$MaVT','$ten','$mau','$trluong','$thpho')";
	$newVatTu->ketNoi();
	$success=$newVatTu->query($sql);
	echo $success ? 'add thanh cong' : 'loi';
	
}

	