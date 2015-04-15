<?php
require_once "./Auth.php"; 
 class log{
 		public $filename = '';	
 		public $handle = '';
 		public function __construct($prefix = 'log'){
 		$this->filename = $prefix.'-'.date("Y-m-d-s").'-.log';
 		$this->handle = fopen($this->filename,'a+');
}


function logMessage($logLevel,$message){
		$string = date("Y-m-d-s").'-'.$logLevel.'-'.$message;
		fwrite($this->handle,$string.PHP_EOL);
	}
function info($message){
		$this ->logMessage("INFO",$message);
	}
function error($message){
		$this ->logMessage("Error",$message);
	}

 	function __destruct(){
 		echo PHP_EOL."The file has ended and the script has closed".PHP_EOL;
		fclose($this->handle);
	}

}

$log = new Log();
$log->info()
 ?>
