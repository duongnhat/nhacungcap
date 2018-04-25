<?php
//include ("models/CoSoDuLieu.php");
class NhaCungCap extends CoSoDuLieu{
	
	public function getAll($offset,$limit)
	{
		$this->ketNoi();
		$sql="select * from ncc limit ".$offset.",".$limit;
		$this->query($sql);
		$mang=array();
		while($row=$this->assoc()){
			$mang[]=$row;
		}
		
		return $mang;
		
	}
	public function demDong(){
		$this->ketNoi();
		$sql="select count(ncc.mancc) as tong from ncc";
		$this->query($sql);
		$soDong=$this->assoc();
		return $soDong;
	}
	
	public function getOne($mancc)
	{
		$this->ketNoi();
		$sql="select * from ncc where ncc.mancc='$mancc'";
		$this->query($sql);
		return $this->assoc();
	}
	public function save($nhaCungCap)
	{
		$this->ketNoi();
		$sql="UPDATE ncc SET ncc.mancc='".$nhaCungCap['0']."',ncc.ten='".$nhaCungCap['1']."',ncc.heso='".$nhaCungCap['2']."',ncc.thpho='".$nhaCungCap['3']."' WHERE ncc.mancc='".$nhaCungCap['0']."'";
		return $this->query($sql);
	}
	public function layTongCot(){
		$this->KetNoi();
		$sql='SELECT COUNT(ncc.mancc) FROM ncc';
		$this->query($sql);
		return $this->assoc();
	}
}
