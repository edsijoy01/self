<?php 

$conn = mysql_connect("localhost", "root", "");
mysql_select_db("fabrice", $conn);
//if the login form is submitted
if (isset($_POST['login'])) { // if form has been submitted

//if (!get_magic_quotes_gpc()) {
//$_POST['email'] = addslashes($_POST['email']);
//}

$password = $_POST['psw'];
$username = $_POST['username'];
$check = mysql_query("SELECT * FROM login where username = '$name'")or die(mysql_error());

$info = mysql_fetch_array( $check );

$pass = $info['password'];
$name = $info['username'];


echo "<div class=error>";

//Gives error if user dosen't exist
$check2 = mysql_num_rows($check);

if ($password == $pass && $name == $username){


header("location:adminpage.php");


}

else{

$_SESSION['name'] = $name;
$_SESSION['password'] = $password;
//then redirect them to the members area 

echo '<div align="bottom"><font color=green><font size="+1"></font><br></div>';
echo "<META http-equiv=refresh content=0;URL=homepage.html>";

}

echo "</div>";

}

?>