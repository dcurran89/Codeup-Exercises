<?php

date_default_timezone_set('America/Chicago');

class Log
{
    public $filename;
    public function logMessage($logLevel, $message)
    {
        // todo - complete this function
        $dateTime = date('Y-m-d H:i:s');
        $date = date('Y-m-d');
        $this->fileName = "log-$date.log";
        $handle = fopen($this->fileName, 'a');
        fwrite($handle, $dateTime . " [" . $logLevel . "] " . $message . PHP_EOL);
        fclose($handle);
    }
    public function logInfo($message){
        $this->logMessage("INFO", $message);
    }
    public function logError($message){
        $this->logMessage("ERROR", $message);
    }
}

?>