<html>
<head>
<title>Lorry and crane service</title>
  <!-- Add Bootstrap Links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
.button:hover 
{
  background-color: black;
}
button
{
  background-color: #008000;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
header
{
  background-color: #008000;
  top: 30;
}
.mduimage 
{
  position: absolute;
  transform: translateY(-50%);
  top:60;
  left: 300;
  box-shadow:0px 0px 5px 0px #888;
}
</style>
</head>
<body background="nm.png">
<div class="mduimage">
<img src="headd.png" align="middle" height="100" width="1000"><br>
</div>
<br><br><br><br><br><br>
<header>
<button class="button" type="button" onclick="window.location.href='homee.php'">Home</button>
<button class="button" type="button" onclick="window.location.href='add.php'">Add Accounts</button>
<button class="button" type="button" onclick="window.location.href='edit.php'">Edit Accounts</button>
<button class="button" type="button" onclick="window.location.href='view.php'">View</button>
<button class="button" type="button" onclick="window.location.href='cb.php'">Company Balance</button>
<button class="button" type="button" onclick="window.location.href='add1.php'">Add Vehicle and company name</button>
</header>

<?php
$z=$_POST["sno"];
$conn=mysqli_connect("localhost","root","","umadevi");
	$sqli = "SELECT* FROM main where sno=".$z;
    $resulti = mysqli_query($conn, $sqli);
	$rowi = mysqli_fetch_assoc($resulti);
	if($rowi['status']=='incomplete')
	{
		echo "<form action='verify1.php' method='post'>";
echo "<div class='container'>";
  echo "<h1 align='center'>Edit Accounts</h1>";
  echo "<br> <br>";
  echo "<table class='table'>";
    echo "<thead>";
      echo "<tr bgcolor='darkolivegreen'>";
        echo "<th></th>";
     echo"   <th></th>";
      echo"</tr>";
    echo "</thead>";
	echo "<tbody>";
    echo "<tr>";
      echo " <td>Date</td>";
       echo "<td>".$rowi['date']."</td>";
      echo "</tr>";    
	  echo "<tr bgcolor='palegreen'>";
        echo "<td>Vehicle No</td>";
        echo "<td>".$rowi['vehicle']."</td>";
      echo "</tr>";
    echo "<tr>";
      echo " <td>Company</td>";
       echo "<td>".$rowi['company']."</td>";
      echo "</tr>";  
 echo "<tr bgcolor='palegreen'>";
        echo "<td>Invoice No</td>";
        echo "<td>".$rowi['invoice']."</td>";
      echo "</tr>";	  
	  echo "<tr>";
        echo "<td>To</td>";
        echo "<td>".$rowi['too']."</td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Material</td>";
       echo "<td>".$rowi['material']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Weight</td>";
        echo "<td>".$rowi['weight']."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Freight</td>";
       echo "<td><input type='text' value='".$rowi['freight']."' name='freight'></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Loading</td>";
        echo "<td><input type='text' value='".$rowi['loading']."' name='loading'></td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Weighment</td>";
       echo "<td><input type='text' value='".$rowi['weighment']."' name='weighment'></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Unloading</td>";
        echo "<td><input type='text' value='".$rowi['unloading']."' name='unloading'></td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Store</td>";
      echo "<td><input type='text' value='".$rowi['store']."' name='store'></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Other</td>";
       echo "<td><input type='text' value='".$rowi['other']."' name='other'></td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Total</td>";
       echo "<td>".$rowi['total']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Advance</td>";
        echo "<td>".$rowi['advance']."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Balance To pay</td>";
       echo "<td></td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Remark</td>";
        echo "<td><input type='text' value='".$rowi['remark']."' name='remark'></td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Advance Type</td>";
       echo "<td>".$rowi['advancetype']."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Mamul</td>";
        echo "<td>".$rowi['mamul']."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Commision</td>";
       echo "<td><input type='text' value='".$rowi['commision']."' name='commision'></td>";
      echo "</tr>";  
	  echo "<tr>";
        echo "<td>Cash Mode</td>";
        echo "<td>".$rowi['cashmode']."</td>";
      echo "</tr>";
	  echo "<tr  bgcolor='palegreen'>";
      echo " <td>Bill Status</td>";
       echo "<td>".$rowi['bill']."</td>";
      echo "</tr>"; 
	  	  session_start();
	  $_SESSION['date']=$rowi['date'];
	  $_SESSION['vehicle']=$rowi['vehicle'];
	  $_SESSION['company']=$rowi['company'];
	  $_SESSION['to']=$rowi['too'];
	  $_SESSION['material']=$rowi['material'];
	  $_SESSION['weight']=$rowi['weight'];
	  $_SESSION['advance']=$rowi['advance'];
	  $_SESSION['advancetype']=$rowi['advancetype'];
	  $_SESSION['mamul']=$rowi['mamul'];
	  $_SESSION['cashmode']=$rowi['cashmode']; 	
	  $_SESSION['sno']=$z;
	  $_SESSION['bill']=$rowi['bill'];
	
	echo "<tr><td></td><td><input type='submit' value='continue'>"; 
  	 echo " </tbody>";
  echo "</table>";
echo "</div>";
echo "</form>";
	}
	else
	{
		echo "<script>window.alert('Enter a valid serial number')</script>";
		echo "<br><br><form action='edit.php' method='post'><input type='submit' value='Go Back'></form>";
	}
?>

</body>
</html>