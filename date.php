<?php

$fdate=new DateTime("1981-11-03");
$ldate=new DateTime("2013-09-04");
$a=$fdate->diff($ldate);
echo "different:"."year".$a->y."moth".$a->m."day".$a->d;
?>