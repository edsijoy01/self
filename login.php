<?php

if(isset($_POST['login']))
{
	$q=$_POST['username'];
	$ew=$_POST['psw'];
	}
	if($q=="fabrice" && $ew=="rwanda"){
		header('location:adminpage.html');
		
	}
	else{
		
	include("index.html");
	echo"<center>INCORRECT USERNAME OR PASSWORD";
	
}

?>