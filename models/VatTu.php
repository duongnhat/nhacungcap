<?php

class VatTu extends CoSoDuLieu{
	
	public function getAllVatTu()
	{
		$this->ketNoi();
		$sql='select * from vattu';
		$this->query($sql);
		$mang=array();
		while($row=$this->assoc()){
			$mang[]=$row;
		}
		
		return $mang;
		
	}
	
	public function getOneVatTu($MaVT)
	{
		$this->ketNoi();
		$sql="select * from vattu where vattu.MaVT='$MaVT'";
		$this->query($sql);
		return $this->assoc();
	}
	public function saveVatTu($vatTu)
	{
		$this->ketNoi();
		$sql="UPDATE vattu SET vattu.MaVT='".$vatTu['0']."',vattu.ten='".$vatTu['1']."',vattu.mau='".$vatTu['2']."',vattu.trluong='".$vatTu['3']."',vattu.thpho='".$vatTu['4']."' WHERE vattu.MaVT='".$vatTu['0']."'";
		return $this->query($sql);
	}
}

