<?php

//$con = new ConnectToDB();

//$con->connect();

class ConnectToDB{
	
  protected $db;
  private  $db_host="127.0.0.1";
  private  $db_name="test";
  private  $db_username="root";
  private  $db_password="";
  protected $data;

	public function __construct($data) {
		
		$this->data = $data;
		
		
	}

	protected function connect(){
		// Connect to database
		$this->db = new mysqli($this->db_host, $this->db_name, $this->db_password, $this->db_name);

		if($this->db->connect_errno) {
			// Check connection
			die('Sorry, we are having some problems.');
		}
		
	}
	
	public function init(){
		$this->connect();
		
	}
	
		public function saveContent(){
			
			$this->data = mysqli_query($this->db, $this->data);
			mysqli_close($this->db);
			return $this->data;
	}
	
	
	
	
}