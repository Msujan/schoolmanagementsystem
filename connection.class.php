<?php
	//connection.class.php
	class Connection
	{
		private $host;
		private $user;
		private $pwd;
		private $db;
		
		//public
		public $sql;
		public $connection;
		public $data=array();
		public $numRows;
		public $affectedRows;
		public $error;
		
		//constructor
		public function __construct( $db='learn',$h='localhost', $u='root', $p='root')
		{
			$this->host=$h;
			$this->user=$u;
			$this->pwd=$p;
			$this->db=$db;
			//connecct to database
			$this->connection=mysqli_connect($this->host,$this->user,$this->pwd,$this->db)
					or
					die($this->error=mysqli_error($this->connection));
					//echo"connetction established";
		}
		
		//destructor
		public function __destruct()
		{
			@mysqli_close($this->connection);
		}
	}//class ends
?>
		
		