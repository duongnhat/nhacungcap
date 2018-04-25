<?php
	class CoSoDuLieu{
		private $conn;
		private $hostname='localhost';
		private $userhost='root';
		private $pass='';
		private $databasename='spj';
		
		public function ketNoi(){
			if(!$this->conn){
				$this->conn = mysqli_connect($this->hostname,$this->userhost,$this->pass,$this->databasename);
			}
		}
		public function query($sql){
			$this->result = mysqli_query($this->conn,$sql);
			return $this->result;
		}
		public function assoc(){
			$dulieu=mysqli_fetch_assoc($this->result);
			return $dulieu;
		}	
	}