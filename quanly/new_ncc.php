<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");
$newNcc=new CoSoDuLieu;
$viewName = 'views/new_ncc_view.php';
include('layout.php');
if(isset($_POST['tao'])){
	$mancc=$_POST['mancc'];
	$tenncc=$_POST['tenncc'];
	$hesoncc=$_POST['hesoncc'];
	$thphoncc=$_POST['thphoncc'];
	$sql="INSERT INTO ncc(`mancc`,`ten`,`heso`,`thpho`) VALUES ('$mancc','$tenncc','$hesoncc','$thphoncc')";
	$newNcc->ketNoi();
	$success=$newNcc->query($sql);
	echo $success ? 'add thanh cong' : 'loi';
	
}

	
			