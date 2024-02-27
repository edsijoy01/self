<?php
include_once('conn.php');

$regno=$_GET['regno'];
$sql="DELETE FROM library WHERE reg_number='$regno'";
$query=$conn->exec($sql);
 
echo"<center><b><a style=\"text-align: center;text-decoration: none;font-family: Informal Roman;font-size: 50px;color:red;\" href=''>records already deleted successful!!!!</a></b><br><b><a style='text-align: center;text-decoration: none;font-family: Informal Roman;font-size: 50px;' href='adminpage.html'>GO BACK</a></b></center>";

?>