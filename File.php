<?php 

class File
{
    public $file;
    public $handle;
    public function __construct($fileName)
    {
        $this->file = "$fileName";
        $this->handle = fopen($this->file, 'a');
    }
    public function append($text)
    {
        fwrite($this->handle, $text);
    }
    public function __destruct()
    {
        fclose($this->handle);
    }
}

?>