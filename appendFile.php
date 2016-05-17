<?php 

require_once 'File.php';

$file = new File('file.txt');

$file->append("Hello Joshua!" . PHP_EOL);

?>
