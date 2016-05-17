<?php

date_default_timezone_set('America/Chicago');

class Log
{
    private $fileName;
    private $handle;
    public $date;
    public $dateTime;

    public function __construct($prefix = 'log')
    {

        $this->dateTime = date('Y-m-d H:i:s');
        $this->date = date('Y-m-d');
        $this->setFileName("$prefix-{$this->date}.log");
        $this->setHandle(fopen($this->fileName, 'a'));
    
    }

    //set for unaccessible properties 
    protected function setFileName($fileName)
    {
        $this->fileName = trim($fileName);
    }
    
    //set for unaccessible properties 
    protected function setHandle($handle)
    {
        $this->handle = $handle;
    }
    //get to read data from the unaccessible properties
    public function getFileName()
    {
        return $this->fileName;
    }
    
    //get to read data from the unaccessible properties
    public function getHandle()
    {
        return $this->handle;
    }

    public function logMessage($logLevel, $message)
    {
        fwrite($this->getHandle(), $this->dateTime . " [" . $logLevel . "] " . $message . PHP_EOL);
    }

    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message)
    {
        $this->logMessage("ERROR", $message);   
    }

    public function __destruct()
    {
        fclose($this->getHandle());   
    }
}

?>