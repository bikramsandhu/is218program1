<?php
// THIS IS HOW YOU PRINT TEXT IN PHP
	echo '"hello world';
	// THIS IS HOW YOU STORE A VALUE IN A VARIABLE
	$myvar = 'Some Text I want to store in a variable';
	echo '<br>';
	// THIS IS THE DIFFERENCE BETWEEN SINGLE QUOTES AND DOUBLE QUOTES
	echo '$myvar';
	echo '<br>';
	// DOUBLE QUOTES PRINT THE VALUE WHILE SINGLE QUOTES PRINT WHAT IS BETWEEN THE QUOTES
	echo"$myvar";


	// THIS IS AM EXAMPLE OF PHP ARRAYS
	$myarray = array();
	$myarray[] = 'some value 1';
	$myarray[] = 'some value 2';
	$myarray[] = 'some value 3';
	// PRINT R IS USED TO VIEW INSIDE OF OBJECTS OR ARRAYS
	print_r($myarray);

	//LETS PUT TWO ARRAYS TOGETHER (NESTED ARRAY)
	$myAssoc = array('value1' => $myarray, 'value2' => $myarray);
	print_r($myAssoc);
?>
