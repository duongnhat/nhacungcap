<?php
$_baseUrl = 'http://localhost/quanly/';
include ("../models/library.php");
$columnName="ncc.mancc";
$dataName="ncc";	
$itemPerPage=3;	
$modelNcc = new PhanTrang;
$soHang=$modelNcc->demDong($columnName,$dataName);
$soTrang=ceil($soHang['tong']/$itemPerPage);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$mang = $modelNcc->get($page, $dataName, $itemPerPage);
$viewName = ('views/view_ncc_view.php');
include ("layout.php");
echo "<br/>"."Page ".$_GET['page'];
echo "<p align='center'>";
if($page>1 & $page<=$soTrang){
	echo "<td><a href=".$_baseUrl . "view_ncc.php/?page=". ($page-1).">"."Prev"."</a></td>"."--";
}
for($i=1;$i<=$soTrang;$i++){
	echo "<td><a href=".$_baseUrl . "view_ncc.php/?page=". $i.">".$i."</a></td>"."  ";
}
if($soTrang>$page & $page>=1){
	echo "--"."<td><a href=".$_baseUrl . "view_ncc.php/?page=". ($page+1).">"."Next"."</a></td>";
}
echo "</p>";

