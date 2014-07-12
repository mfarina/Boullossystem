<?php
$file = $_GET['news'];
$show = new ShowContent($file);
$show->show();

class ShowContent{

	protected $file;


	public function __construct($file) {
		$this->file = $file;
		
	}
	
	public function show(){
		$content = file_get_contents($this->file.".txt");
		echo "<h1>".pathinfo($this->file, PATHINFO_FILENAME)."</h1>";
		echo "<pre>".$content."</pre>";
		
	}
	
}
