<?php
$file=fopen("demo.txt","r");
echo fread($file,filesize('demo.txt'));
fclose($file);
?>