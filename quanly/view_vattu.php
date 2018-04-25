<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");
$columnName="vattu.MaVT";
$dataName="vattu";	
$itemPerPage=3;
$modelVatTu = new PhanTrang;
$soHang=$modelVatTu->demDong($columnName,$dataName);
$soTrang=ceil($soHang['tong']/$itemPerPage);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$mang = $modelVatTu->get($page, $dataName, $itemPerPage);
$viewName = 'views/view_vattu_view.php';
include('layout.php');
echo "<br/>"."Page ".$_GET['page'];
echo "<p align='center'>";
if($page>1 & $page<=$soTrang){
	echo "<td><a href=".$_baseUrl . "view_vattu.php/?page=". ($page-1).">"."Prev"."</a></td>"."--";
}
for($i=1;$i<=$soTrang;$i++){
	echo "<td><a href=".$_baseUrl . "view_vattu.php/?page=". $i.">".$i."</a></td>"."  ";
}
if($soTrang>$page & $page>=1){
	echo "--"."<td><a href=".$_baseUrl . "view_vattu.php/?page=". ($page+1).">"."Next"."</a></td>";
}
echo "</p>";
