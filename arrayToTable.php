<?php 
	$assoc = array("inv1"=>"pencils","inv2"=>"pens","inv3"=>"erasers","inv4"=>"markers");
	foreach($associativeArray as $index => $value){
		$rows .= "
			<tr>
				echo <td>$index</td>
				echo <td>$value</td>
			</tr>
		";
	}

	print "
		<table>
			<tr>
				<th>#</th>
				<th>value</th>							
			</tr>
			$rows
		</table>
		";
?>
