<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");	
$modelNcc = new NhaCungCap;

// Save ncc
if (isset($_POST['tao'])){
	$nhaCungCap=array($_POST['mancc'],$_POST['ten'],$_POST['heso'],$_POST['thpho']);
	
	$result = $modelNcc->save($nhaCungCap);
	if($result){
		echo 'edit thanh cong';
	}
	else { echo 'edit khong thanh cong';}
}

// Display edit form
if (isset($_GET['mancc'])) {
	$mancc=$_GET['mancc'];
	$nccObj = $modelNcc->getOne($mancc);
	$viewName = 'views/edit_ncc_view.php';
	include('layout.php');
}
