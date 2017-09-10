<?php
	$motor = array("ninja <br>", "warior <br>", "king kobra ");
	rsort($motor);
	
	for ($x=0; $x<3; $x++){
		echo $motor[$x];
	}
?>