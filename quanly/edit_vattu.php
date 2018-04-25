<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");	
$modelVatTu = new VatTu;

// Save ncc
if (isset($_POST['tao'])){
	$vatTu=array($_POST['MaVT'],$_POST['ten'],$_POST['mau'],$_POST['trluong'],$_POST['thpho']);
	
	$result = $modelVatTu->saveVatTu($vatTu);
	if($result){
		echo 'edit thanh cong';
	}
	else { echo 'edit khong thanh cong';}
}

// Display edit form
if (isset($_GET['MaVT'])) {
	$MaVT=$_GET['MaVT'];
	$vatTuObj = $modelVatTu->getOneVatTu($MaVT);
	$viewName = 'views/edit_vattu_view.php';
	include('layout.php');
}
