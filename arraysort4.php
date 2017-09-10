<?php
	$numbers = array("11", "12 ", "13 ", "14 ", "15 ", "16 ");
	rsort($numbers);
	
	for ($x=0; $x<6; $x++){
		echo $numbers[$x];
	}
?>