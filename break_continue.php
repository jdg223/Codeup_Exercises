<?php 

for ($i=1; $i < 101; $i++) { 
	if ($i % 2 == 0) {
		echo "This is an even number: "."$i\n";
		continue;
	}else{
		echo "$i\n";
	}
}

for ($i=1; $i < 101; $i++) { 
	if ($i == 10) {
		echo $i.PHP_EOL;
		break;
	}else{
		echo $i.PHP_EOL;
	}
}
 ?>