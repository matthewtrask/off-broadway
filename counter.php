<?php

$countMyPage = ("hitcounter.txt");
$myHits = file($countMyPage);
$hits[0] ++;
$fileOpen = fopen($countMyPage, "w");
fputs($fileOpen, "$hits[0]");
fclose($fileOpen);
echo $hits[0];