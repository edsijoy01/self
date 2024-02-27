
<?php
include_once('conn.php');

$sql = "SELECT * FROM library";

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
                  
                  
                  
                  
                   </style></head><body>
     <div style='width: 100%; height: 132px; background: #171a60;font-family:Copperplate Gothic Bold; 
                color: white; text-align: center; font-size: 50px; box-shadow: 2px 10px 10px blue;'> 
              <b style='font-family:Callifornia; font-size:22px;'>Welcome to</b><br><b>LIBRARY INFORMATION MANAGEMENT SYSTEM</b></div><br>              
                  
    <form method='post' action='search.php'> 
          <input type='text' name='search' placeholder='Search Reg_Number' id='fab' required=''><input type='submit' value='SEARCH'id='btn' name='cherche'></form>";             
                  
                  
                 
                  
                  
                  echo "<center><h2 style='color:black;font-family:Bookman Old Style;font-size:26px;'>Display Records</h2><table border='1'>";
          echo"<tr style='background:#1a0ef8;color:white;'><th>Reg_Number</th>
                   <th>FirstName</th>
                   <th>LastName</th>
                   <th>Department</th>
                  <th>Faculity</th>
                   <th>Sex</th>
                   <th>Level</th>
                   <th>BookName</th>
                   <th>BookId</th>
                   <th>Date</th><th>Edit</th><th>Delete</th></TR>";
         
    foreach($conn -> query($sql) as $row){
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
        
echo "<td><a href='edit.php? regno=$row[reg_number]' id='p'>Edit </a></td>";
echo"<td><a href='delete.php?regno=$row[reg_number]' on click='return (are you sure you want to delete)' id='pp'>Delete </a></td>";
        echo"</tr>";
                    
                   }
           echo"</table></center><center><b><a style='text-align: center;text-decoration: none;font-family: Informal Roman;font-size: 50px;' href='adminpage.html'>GO BACK</a></b></center></body></html>"; } 
?>

