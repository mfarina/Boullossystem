<?php

//$con = new ConnectToDB();

//$con->connect();

class ConnectToDB{
	
  protected $db;
  private  $db_host="127.0.0.1";
  private  $db_name="test";
  private  $db_username="root";
  private  $db_password="";

	public function __construct() {
		
	}

	protected function connect(){
		// Connect to database
		$db = new mysqli($this->db_host, $this->db_name, $this->db_password, $this->db_name);

		if($db->connect_errno) {
			// Check connection
			die('Sorry, we are having some problems.');
		}
		
	}
	
	public function init(){
		
	}
	
		public function saveContent(){
		/*if(!file_exists($this->path)){
			mkdir($this->path);
		}
		
		file_put_contents($this->filePath, $this->content);*/
		parent::connect();
		$dataToSave = "INSERT INTO neu_tb ( title, content, date) VALUES ('$this->title', '$this->content', '$name', '$this->date')";
		$dataToSave = mysqli_query(parent::$db, $dataToSave);
		
		
	}
	
	
}