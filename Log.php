<?php

date_default_timezone_set('America/Chicago');

class Log
{
    public $filename;
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
        $this->logMessage("INFO", " This is an info message.");
    }
    function logError(){
        $this->logMessage("ERROR", "This is an error message.");
    }
}

?>