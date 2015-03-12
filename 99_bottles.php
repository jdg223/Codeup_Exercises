<?php 

// play on MacOS Terminal

for($i = 99; $i >= -2; $i--){ 
	$minus = $i - 1;
	
switch ($i){
	 case 2:
	 	echo "$i bottles of beer on the wall, $i bottles of beer take one down pass it around, $minus bottle of beer on the wall\n";
		`say -v Tom "$i bottles of beer on the wall, $i bottles of beer take one down pass it around, 
		$minus bottle of beer on the wall"`;
	 	continue;
	 case 1:
	 	echo "$i bottle of beer on the wall, $i bottle of beer take one down pass it around, 0 bott...wait there's no more beer\n";
		`say -v Tom "$i bottle of beer on the wall, $i bottle of beer take one down pass it around, 0 bawtt......wait theres no more beer"`;
	 	continue;
	 case 0:
	 	echo "Bartender looks up and says...\n";
	 	`say -v Tom "bartender looks up and says..."`.`say -v Alex "time to pay"`;
	 	continue;
	 case -1:
	 	echo "You look to your left then your right...\n";
	 	`say -v Tom "you look to your left then your right...
	 	and in the blink of an eye you jolt towards the door but before you can make it out you trip 
	 	over a chair fall face first onto the floor and get knocked out"`;
	 	continue;
	 case -2:
	 	echo "The next morning you wake up only to find out that you are locked in a jail cell\n";
	 	`say -v Tom "The next morning you wake up only to find out that you are locked in a 
	 	jail cell..."`.`say -v Hysterical "ha ha ha..."`.`say -v Tom "sucks for you buddy...don't drop the soap"`;
	 	continue;
	 default:
	 	echo "$i bottles of beer on the wall, $i bottles of beer take one down pass it around, $minus bottles of beer on the wall\n";
		`say -v Tom "$i bottles of beer on the wall, $i bottles of beer take one down pass it around, 
		$minus bottles of beer on the wall"`;
	 	continue;
	}
}



 ?>