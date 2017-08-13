<?php 
	class DB {
		private $hostname = 'wa06.zent', 
				$username = 'root',
				$password = '',
				$dbname   = 'newspaper';

		public $conn = NULL;

		public function connect(){
			$this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

			$this->conn->set_charset('utf8');
		}

		//close db
		public function close(){
			if($this->conn){
				$this->conn->close();
			}	
		}

		public function query($sql = null){
			if($this->conn){
				$this->conn->query($sql);
			}
		}

		public function num_rows($sql = null){
			if($this->conn){
				$query = $this->conn->query($sql);

				if($query){
					$row = mysqli_num_rows($query);
					return $row;
				}
			}
		}

		public function fetch_assoc($sql = null, $type){
			if($this->conn)
			{
				$query = $this->conn->query($sql);
				if($query)
				{					
					if($type == 0)
					{
						while($row = $query->fetch_assoc())
						{
							$data[] = $row;
						}
						return $data;
					} 
					else if($type == 1)
					{						
						$data = $query->fetch_assoc();
						return $data;
					}
				}
			}
		}

		public function insert_id(){
			if($this->conn){
				$count = mysqli_insert_id($this->conn);

				$count == 0 ? $count = 1 : '';

				return $count; 
			}
		}

	}
	
 ?>