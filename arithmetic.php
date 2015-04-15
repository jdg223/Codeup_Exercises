<?php

$a = "hello";
$b = 13;

function add($a,$b,$c) {
		$c = '+';
		return check($a,$b,$c);
}
function subtract($a,$b,$c) {
	$c = '-';
	return check($a,$b,$c);
}

function multiply($a,$b,$c) {
	$c = '*';
	return check($a,$b,$c);
}

function divide($a,$b,$c) {
	$c = '/';

	if($a === 0 || $b === 0){
		echo "There was an error, numbers cannot divide by zero\n";
	}else{
		return check($a,$b,$c);
	}

}

function modulus($a, $b,$c){
	$c = '%';
	return check($a,$b,$c);
}

function check($a,$b,$c){
	if(is_numeric($a) && is_numeric($b) && $c == '+'){
		echo $a + $b.PHP_EOL;
	}else if(is_numeric($a) && is_numeric($b) && $c == '-'){
			echo $a - $b.PHP_EOL;
	}else if(is_numeric($a) && is_numeric($b) && $c == '*'){
			echo $a * $b.PHP_EOL;
	}else if(is_numeric($a) && is_numeric($b) && $c == '/'){
			echo $a / $b.PHP_EOL;
	}else if(!is_numeric($a) || !is_numeric($b)){
		echo "ERROR::the values need to be numeric\n";
	}
}

divide($a,$b,$c);
?>
