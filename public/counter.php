<?php

$countMyPage = ("hitcounter.txt");
$myHits = file($countMyPage);
$myHits[0] ++;
$fileOpen = fopen($countMyPage, "w");
fputs($fileOpen, "$myHits[0]");
fclose($fileOpen);
echo $myHits[0];