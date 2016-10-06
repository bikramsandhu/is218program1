<?php
	$myAssoc['value1'] = array('LinkName' => 'NJIT', 'URL' => 'www.njit.edu');
	$myAssoc['value2'] = array('LinkName' => 'ESPN', 'URL' => 'www.espn.com');
	print_r($myAssoc);

	foreach($myAssoc as $link){
		print_r($link);
	}
	echo '<br>';
	$arr = array(1,2,3,4,5);
	foreach ($arr as $val){
		print_r($val);
	}
	echo '<br><br>';

	class myClass {
		protected $myName;
		public function __construct($myName = 'DEFAULT') {
			$this->$myName;
		}
		public function sayHello($myName){
			echo 'Hello, ' . $myName .'<br>';
		}
	
	}
	$obj = new myClass;
	echo $obj->sayHello('Bikram');


?>
