<?php
class Page {
	private $title='Crime Watch';
	private $metacontent='A website portal to report crimes.';
	private $metakeywords='crime, robbery, gaborone';
	private $heading;
	private $content;   
	
	function __construct($t) {
        $this->title=$t;		
	}
		
	function printIt() {
		include('templates/page.php');
	}
	
	function setTitle($t) {
        $this->title=$t;
	}
		
	function setHeading($h) {
        $this->heading=$h;
	}
		
	function setContent($c) {
        $this->content=$c;
	}
}

?>
