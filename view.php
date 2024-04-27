<?php
//open file to write
$fp = fopen("cv.txt", "r+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
?>

