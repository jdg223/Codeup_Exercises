<?php
$reportArray = ['employeeID' => array(),'FirstName' => array(),'LastName' => array(),'SalesUnits' => array()];
$finalReport = ['employee6' => array(),
'employee5' => array(),
'employee4' => array(),
'employee3' => array(),
'employee2' => array(),
'employee1' => array(),
'employee0' => array()
];
$report = 'report.txt';
$handle = fopen(trim($report),'r');
$contents = fread($handle,filesize($report));
$contentsOfReport = explode("\n",trim($contents));
$reportName = array_shift($contentsOfReport);
$reportDate = array_shift($contentsOfReport);
$officeName = array_shift($contentsOfReport);
$LineEqual = array_shift($contentsOfReport);
$employeeInformation = array_shift($contentsOfReport);
$lineMultiple = array_shift($contentsOfReport);

foreach ($contentsOfReport as $key => $value) {
  $newArray = explode(",",trim($value));
  array_push($reportArray['employeeID'],$newArray[0]);
  array_push($reportArray['FirstName'],$newArray[1]);
  array_push($reportArray['LastName'],$newArray[2]);
  array_push($reportArray['SalesUnits'],$newArray[3]);
  arsort($reportArray['SalesUnits']);
    arsort($reportArray['employeeID']);
    // krsort($reportArray['FirstName']);
    // krsort($reportArray['LastName']);
}
print_r($reportArray['FirstName']);
print_r($reportArray['LastName']);
print_r($reportArray['SalesUnits']);

$sales = array_keys($reportArray['SalesUnits']);
$first = array_keys($reportArray['FirstName']);
$employee =  array_keys($reportArray['employeeID']);
 $first = $sales;
 $sales = $employee;
for ($i=6; $i >= 0; $i--) {
  $lastName = array_pop($reportArray['LastName']);
  array_unshift($finalReport["employee$i"],$lastName);
  $firstName = array_pop($reportArray['FirstName']);
  array_unshift($finalReport["employee$i"],$firstName);
}

for ($i=0; $i <= 6; $i++) {
array_push($finalReport["employee$i"],$reportArray['SalesUnits'][$i]);
array_unshift($finalReport["employee$i"],$reportArray['employeeID'][$i]);
}


for ($i=0; $i <= 6; $i++) {
  $finalReport["employee$i"] = implode("\t",$finalReport["employee$i"]);
}


print_r($finalReport);
fclose($handle);

 ?>
