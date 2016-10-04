<?php
	class html {
		public $html;
		//WE ONLY USE CONSTRUCTOR WHEN WE NEED THE CLASS TO AUTOMATICALLY DO SOMETHING AS SOON AS WE START THE PROGRAM
		public function __construct($html = 'DEFAULT') {
		//IF YOU PUT A PARAMETER ON A CONSTRUCTOR, THIS IS HOW YOU INSTANTIATE YOUR OBJECT
		//IF I DO PASS A VALUE IN THE OBJECT, IT WILL REPLACE THE DEFAULT VALUE
		//I CAN PASS A VALUE IN OR NOT AND I WONT GET AN ERROR
			echo $html;
		}
	}
	class htmlTable extends html {
		protected $table;
		
		public function getTableHTML() {
			//THIS ASSIGNS THE HTML PROPERTY	
			$this->html = 'some table html';
			return $html;
		
		}
	
	}
	//THIS REPLACES THE 'DEFAULT' VALUE
	//$obj = new html('Hello World');

	//INSTANTIATE THE TABLE
	$obj = new htmlTable;

	$html = $obj->getTableHTML();
	echo $obj->html;

?>
