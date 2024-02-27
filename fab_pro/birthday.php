<?php
$fab= new datetime("1998-09-09");
$fab2= new DateTime("2021-07-02");
$out=$fab->diff($fab2);
echo "Different:".$out->y."year".$out->m."month".$out->d."day";
?>