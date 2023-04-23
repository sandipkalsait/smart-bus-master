<?php 
date_default_timezone_set('Asia/Kolkata');
ini_set('display_errors', 1);
// error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// path of the log file where errors need to be logged 
$log_file = "../../logs/log-file.log";
  
// setting error logging to be active 
ini_set("log_errors", TRUE);  

  
// setting the logging file in php.ini 
ini_set('error_log', $log_file); 
?>