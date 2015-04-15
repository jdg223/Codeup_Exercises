<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function checkSetOrEmpty($variable_name){
  $variable_name = $variable_name;
  if (isset($variable_name)) {
    echo "$variable_name is SET\n";
  }else if (empty($variable_name)) {
    echo "$variable_name is EMPTY\n";
  }
  if(is_array($variable_name)){
    echo serialize($variable_name);
    print_r(unserialize(Serialize($variable_name)));
  }

}
checkSetOrEmpty($array);
// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results
