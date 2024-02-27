<?php
include_once('conn.php');
if(isset($_POST['update'])){
    $regno = $_POST['reg_number'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $department = $_POST['dpt'];
    $faculity = $_POST['faculity'];
    $sex = $_POST['sex'];
    $class = $_POST['level'];
    $bookname = $_POST['bookname'];
    $bookid = $_POST['bookid'];
    $date = $_POST['date'];
    $sql="UPDATE library SET f_name='$fname',l_name='$lname',department='$department',faculity='$faculity',sex='$sex',class='$class',book_name='$bookname',book_id='$bookid',date='$date' WHERE reg_number='$regno'";
    $query=$conn->exec($sql);
    header('location:view.php');

}
// it is used to fetch regno from select.php
$regno=$_GET['regno'];
// to selecting data from the database using this form that will be edited
$select=$conn->query("SELECT * FROM library Where reg_number='$regno'");
while($row=$select->fetch(PDO::FETCH_ASSOC)){
    $p1=$row['reg_number'];
    $p2=$row['f_name'];
    $p3=$row['l_name'];
    $p4=$row['department'];
    $p5=$row['faculity'];
    $p6=$row['sex'];
    $p7=$row['class'];
    $p8=$row['book_name'];
    $p9=$row['book_id'];
    $p10=$row['date'];
    
}

?>
<!DOCTYPE html>
<html>
	<head>
		
		<title>IPRC KARONGI</title>n
		<style>
			#y{
		height:27px;
		border-radius: 2px;
		color:black;
		background:#efe7eb;
		font-size: 23px;
		font-family:Juice ITC;
		width: 280px;
		border: none;
		text-align: center;
		box-shadow:  3px 2px gray;
     
		
		}
	#y:hover{
			background:#ffffff;
			color:black;
			font-size: 20px;
			font-family:Monotype Corsiva;
			}
			#p{
		height:27px;		border-radius: 0px 50px;
	color:white;
		background:black;
		font-size: 23px;
		font-family:Juice ITC;
		width: 130px;
		border: none;
		
		text-align: center;
		box-shadow:  3px 4px gray;
		
			}
			#p:hover{
			background:white;
			color:black;
			font-size: 20px;
			font-family:Juice ITC;
			}


		</style>
	</head>
	<body background="open-book.jpg">
 <form method="post" action="edit.php">
 <div style="width: 100%; height: 132px; background: #171a60;font-family:Copperplate Gothic Bold;color: white; text-align: center; font-size: 50px; box-shadow: 2px 10px 10px blue;">
               <b style="font-family:Callifornia; font-size:22px; ">Welcome to</b><br><b>LIBRARY INFORMATION MANAGEMENT SYSTEM</b></div><br>             
                  
                      
                      
<center>
<h1 style="font-family: Courier New;color: blue;font-size: 40px;box-shadow: 1px 1px 7px 2px   white;">PLEASE UPDATE INFORMATION </h1>
            <table>
<form action='update' method='get'>
<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Reg_number</b></td><td><input type='text' name='reg_number' value="<?php echo $p1?>" id="y"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">First_Name</b></td><td><input type='text' name='fname' value="<?php echo $p2?>" id="y" required pattern="([a-zA-Z. ]{3,60})"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Last_Name</b></td><td><input type='text' name='lname' value="<?php echo $p3?>" id="y" required pattern="([a-zA-Z. ]{3,60})"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Department</b></td><td><input type='text'name="dpt" value="<?php echo $p4?>" id="y" required pattern="([a-zA-Z. ]{3,60})"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Faculity</b></td><td><input type='text' name='faculity' value="<?php echo $p5?>" id="y" required pattern="([a-zA-Z. ]{2,60})"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Sex</b></td><td><input type='text' name='sex' value="<?php echo $p6?>" id="y" required pattern="([a-zA-Z. ]{4,60})"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Level</b></td><td><input type='text' name='level' value="<?php echo $p7?>" id="y"required=""></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Book_name</b></td><td><input type='text' name='bookname' value="<?php echo $p8?>" id="y" required pattern="([a-zA-Z. ]{4,60})"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Book_id</b></td><td><input type='text' name='bookid' value="<?php echo $p9?>" id="y" required pattern="([0-9. ]{1,10})" maxlength="9"></td></tr>

<tr><td><b style="font-family:Juice ITC;font-size: 20px;color: blue">Date</b></td><td><input type='text' name='date' value="<?php echo $p10?>" id="y"></td></tr>
                   
<tr><td></td><td><input type='submit' value='update' id="p" name="update" >&nbsp;<a href='view.php'><input type="button" value='VIEW' id="p"></a></td></tr>
                                  </form></table>
                                  </center>
	</body>
</html>