<?php

$dateFile = 'log-YYYY-MM-DD.txt';
$handle = fopen($dateFile,'a+');
date_default_timezone_set('America/Chicago');
$completeDate = date('Y-m-d h:i:s');
$message = "This is an info message.";
$logLevel;

function logError(){
  $logLevel = "ERROR";
  echo "$logLevel\n, $message \n";
}

if (is_writeable($dateFile)){
  $logLevel = "INFO";
  $completeMessage = "$completeDate $logLevel,\t$message\n";
  echo "Write Complete\n";
}else if (!is_writeable($dateFile)){
  logError();
  echo "There was an Error\n";
}

fwrite($handle,trim(PHP_EOL.$completeMessage).PHP_EOL);
