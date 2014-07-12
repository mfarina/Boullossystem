<?php

$getTitle = new GetNews();
$getTitle->getTitle();

class GetNews{
	
	protected $newsTitle;
	protected $newsContent;
	protected $path;


	public function __construct() {
		$this->path = "news/".date('d-m-y')."/";
	}
	
	public function getTitle(){
		foreach (new DirectoryIterator($this->path) as $file){
			if($file->isDot()){ 
				continue;
			}
			echo '<h4><a href="showContent.php?news='.$this->path.pathinfo($file, PATHINFO_FILENAME).'">'.pathinfo($file, PATHINFO_FILENAME).'</a></h4>';
			//echo $this->path["basename"]."<br />";
		}
	}
	
}