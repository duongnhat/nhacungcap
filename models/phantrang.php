<?php
class PhanTrang extends CoSoDuLieu{
	public function get($page, $dataName, $itemPerPage) 
	{
		$offSet = ($page-1) * $itemPerPage;
		$modelList = $this->getAll($dataName, $offSet, $itemPerPage);
		return $modelList;
	}
	public function layTongCot($columnName, $dataName){
		$this->KetNoi();
		$sql="SELECT COUNT(".$columnName.") FROM ".$dataName;
		$this->query($sql);
		return $this->assoc();
	}
	public function demDong($columnName, $dataName){
		$this->ketNoi();
		$sql="select count(".$columnName.") as tong from ".$dataName;
		$this->query($sql);
		$soDong=$this->assoc();
		return $soDong;
	}
	public function getAll($dataName, $offSet, $itemPerPage)
	{
		$this->ketNoi();
		$sql="select * from ".$dataName." limit ".$offSet.",".$itemPerPage;
		$this->query($sql);
		$mang=array();
		while($row=$this->assoc()){
			$mang[]=$row;
		}
		
		return $mang;
		
	}
}


