<?php 

	class conectar{
		private $servidor="kavfu5f7pido12mr.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
		private $usuario="fjiiof2nsq06cbbk";
		private $password="zjpkegigxonxh36w";
		private $bd="q52divt3e55yjnoo";

		public function conexion(){
			$conexion=mysqli_connect($this->servidor,
									 $this->usuario,
									 $this->password,
									 $this->bd);
			return $conexion;
		}
	}


 ?>