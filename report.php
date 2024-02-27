<?php
include_once('conn.php');
if(isset($_POST['rep']))
{
$power=$_POST['fab'];
}
$sql = "SELECT * FROM library WHERE date='$power'";

	
	foreach($conn->query($sql) as $row)
	{
		
			
		
        $q=$row['date'];
	
	}
	if($power== $q){
$sql = "SELECT * FROM library WHERE date='$power'";
if($sql){
	echo"<html><head><style>
                   #p{ 
		height:23px; 
		border-radius:2px; 
		color:white; 
	background:#007bff; 
		font-size: 18px;
		font-family:Times New Roman; 
		width: 180px; 
		border: none; 
		 
    text-decoration: none;

		 
			}
                  		#pp{ 
		height:27px; 
		border-radius:2px; 
		color:white; 
		background:red; 
		font-size: 18px; 
		font-family:Times New Roman; 
		width: 180px; 
		border: none; 
		text-decoration: none; 
		text-align: center; 
	 
                
                 }
                             #btn{ 
		height:35px; 
		border-radius: 5px; 
		color:white; 
		background:#1a0ef8; 
		font-size: 27px; 
		font-family: Juice ITC; 
		width: 127px; 
		border: none; 
                margin-left: 40px; 
		 
		text-align: center; 
		box-shadow:  3px 2px black; 
		 
			} 
			#btn:hover{ 
                            background:white; 
			color:red; 
			font-size: 27px; 
			font-family:Juice ITC;	 
			} 
			                        #fab{ 
              height:35px; 
		border-radius: 17px; 
		color:  blue; 
		background:white; 
		font-size: 23px; 
		font-family:Juice ITC; 
		width: 310px; 
		border: none; 
                margin-right: -33px; 
		 
		text-align: center; 
		box-shadow: 2px 6px 10px blue; 
         
                        } 
                        #fab:hover{ 
                        border-radius: 20px; 
                        background:#ffffff; 
			color:  blue; 
			font-size: 20px; 
			font-family:Monotype Corsiva; 
                              
                        }
                  
                  
                  
                  
</style></head><body><div style='width: 100%; height: 132px; background: #171a60;font-family:Copperplate Gothic Bold; 
                color: white; text-align: center; font-size: 50px; box-shadow: 2px 10px 10px blue;'> 
              <b style='font-family:Callifornia; font-size:22px;'>Welcome to</b><br><b>LIBRARY INFORMATION MANAGEMENT SYSTEM</b></div><br><br><br>   
<center> 
              
<img src='rp_logo.PNG' width='867px' height='100px' margin-bottom='-20px'>           
  <u><h2>REPORT OF THE DAY</u></h2></center>                
 <center><table border='1'>";
   
                


    echo "<tr>
            <th> Reg_number </th>
            <th> First name </th>
            <th> Last name </th>
            <th> Department </th> 
            <th>Faculity</th> 
            <th> sex</th>         
            <th> Level &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th> Book_Name</th>
            <th> Book_Id</th>
            <th> Date</th>
            
          </tr>";
	
	foreach($conn->query($sql) as $row)
	{
		
echo "<tr>";
        echo "<td>" . $row['reg_number'] . "</td>";
        
        echo "<td>" . $row['f_name'] . "</td>";
        echo "<td>" . $row['l_name'] . "</td>";
        echo "<td>" .$row['department']."</td>";
        echo "<td>" .$row['faculity']."</td>";
        echo "<td>" .$row['sex']."</td>";
        echo "<td>" .$row['class']."</td>";
        echo "<td>" .$row['book_name']."</td>";
        echo "<td>" .$row['book_id']."</td>";
        echo "<td>" .$row['date']."</td>";
        
	}
	echo"</table><input type='button' onclick='window.print()' value='Print'><br><br><br><b><a style='text-align: center;text-decoration: none;font-family: Informal Roman;font-size: 50px;' href='adminpage.html'>GO BACK</a></b></center></body>";
   }
   }
  
 else{
 	
 	echo"empty";
 }
?>