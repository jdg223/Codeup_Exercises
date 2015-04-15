<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$girlName = 'Tina';

$guyName = 'Dean';

function search_query($names,$array){
  foreach ($array as $value) {
    if ($names == $value){
      echo "True\n";
    }else{
      null;
    }
  }
}

function array_compare($name,$array1,$array2){
   $result1 = array_search($name,$array1);
   $result2 = array_search($name,$array2);

    if ($name == $result1 || $result2){
      $found = 'true';
      echo $found;
    }else{
      null;
      }

}

array_compare($girlName,$names,$compare);
