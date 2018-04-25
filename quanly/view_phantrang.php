<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");
$phanTrang=new PhanTrang;
$soCot=$phanTrang->layTongCot();
$soTrang=ceil($soCot['tong']/2);
$trang = isset($_GET['trang']) ? $_GET['trang'] : 1;
$sql="SELECT * FROM ncc LIMIT " .(($trang-1)*2). ",2";
echo $sql;
$phanTrang->query($sql);
$thongTin=array();
while($row=$phanTrang->assoc()){
	$thongTin[]=$row;
}
$viewName = 'views/view_ncc_view.php';
include('layout.php');
