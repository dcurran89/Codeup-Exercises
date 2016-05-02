<?php
date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message)
{
    // todo - complete this function
    $dateTime = date('Y-m-d H:i:s');
    $date = date('Y-m-d');
    $fileName = "log-$date.log";
    $handle = fopen($fileName, 'a');
    fwrite($handle, $dateTime . " [" . $logLevel . "] " . $message . PHP_EOL);
    fclose($handle);
}

function logInfo(){
    logMessage("INFO", "This is an info message.");
}
function logError(){
    logMessage("ERROR", "This is an error message.");
}

logInfo();
logError();
