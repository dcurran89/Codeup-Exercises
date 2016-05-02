<?php 

require_once 'Log.php';

$log = new Log();

$log->logInfo(" This is an info message.");
$log->logError("This is an error message.");

?>