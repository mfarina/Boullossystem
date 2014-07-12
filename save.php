<?php

require 'connect.php';

if(isset($_POST["submit"])) {
		// process search
	$title = $_POST["titel"];
	$content = $_POST["inhalt"];
	
	$save = new Save($title, $content);
	$save->saveContent();
	

}
		
class Save{
	
	protected $title;
	protected $content;
	protected $filePath;
	protected $path;
	protected $date;


	public function __construct($title, $content){
		
		$this->title = $title;
		$this->content = $content;
		
		$this->date = date("d-m-y");
		
		
	}
	
	public function saveContent(){
		/*if(!file_exists($this->path)){
			mkdir($this->path);
		}
		
		file_put_contents($this->filePath, $this->content);*/
		
	}
	
}