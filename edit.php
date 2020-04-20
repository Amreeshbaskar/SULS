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
<form action="edit1.php" method="post">
  <h1 align="center">Edit Accounts</h1>
  <?php
$conn=mysqli_connect("localhost","root","","umadevi");
	$sqli = "SELECT* FROM main where status='incomplete'";
    $resulti = mysqli_query($conn, $sqli);
		echo "<div class='container'>";
	  echo "<table class='table'>";
    echo "<thead>";
      echo "<tr bgcolor='grey'>";
       echo " <th>Sno</th>";
       echo " <th>Vehicle</th>";
        echo "<th>Company</th>";
		echo "<th>Place</th>";
		echo "<th>Date</th>";
      echo "</tr>";
    echo "</thead>";
	echo "<tbody>";
	$var=0;

    while($rowi = mysqli_fetch_assoc($resulti)) {
		if($var==0)
		{			
	  echo "<tr >";
	  echo "<td>".$rowi['sno']."</td><td>" . $rowi['vehicle']. "</td><td> " . $rowi['company']. "</td><td>" . $rowi['too']. "</td><td>" . $rowi['date']. "</td>";
      echo "</tr>";
	  $var=1;
		}
		else
		{			
	  echo "<tr bgcolor=palegreen>";
	  echo "<td>".$rowi['sno']."</td><td>" . $rowi['vehicle']. "</td><td> " . $rowi['company']. "</td><td>" . $rowi['too']. "<td></td>" . $rowi['date']. "</td>";
      echo "</tr>";
	  $var=0;
		}
	}
	  
?>
<br><br>

<tr><td></td><td>Enter the sno : </td><td><input type="text" name="sno"></td><td><input type="submit" value="Click to continue"></td>

</tbody>
</table>
</div>
</form>
</body>

</html>