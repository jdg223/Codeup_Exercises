<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, 11);

foreach ($things as $key => $answer) {
	if (is_int($answer)) {
		echo "$answer is an integer\n";
	}else if(is_string($answer)){
		echo "$answer is a string\n";
	}elseif (is_bool($answer)) {
		echo "$answer is a bool\n";
	}elseif (is_null($answer)) {
		echo "$answer null is null\n";
	}elseif (is_array($answer)) {
		echo "\$answer is an array whose values are ".implode(",",$answer),"\n";
	}elseif (is_float($answer)) {
		echo "$answer is a float\n";
	}

}

	foreach ($things as $thing => $value) {
		if (is_scalar($value)) {
			echo "$value\n";
		}
	}
 ?>