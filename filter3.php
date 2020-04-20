<html>
<head>
<title>Lorry and crane service</title>
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

$a=$_POST['company'];
$conn=mysqli_connect("localhost","root","","umadevi");
	$sqli = "SELECT sno,date,vehicle,company,invoice,too,material,weight,freight,loading,weighment,unloading,store,other,total,advance,balance,remark,advancetype,mamul,commision,cashmode,bill,no FROM main WHERE company='".$a."' and bill='required' and status='complete'";
    $resulti = mysqli_query($conn, $sqli);
	echo "<center>";
echo "<div class='container'>";
 echo " <h1 align='center'>View Accounts</h1>";
  echo "<table class='table'>";
    echo "<thead>";
      echo "<tr bgcolor='grey'>";
	  echo "<th>sno</th>";
		echo "<th>Date</th>";
		echo "<th>Vehicle</th>";
        echo "<th>Company Name</th>";
		echo "<th>Invoice No</th>";
        echo "<th>To</th>";
        echo "<th>Material</th>";
		echo "<th>Weight</th>";
		echo "<th>Freight</th>";
		echo "<th>Loading</th>";
		echo "<th>Weighment</th>";
		echo "<th>Unloading</th>";
		echo "<th>Store</th>";
		echo "<th>Other</th>";
		echo "<th>Total</th>";
		echo "<th>Advance</th>";
		echo "<th>Balance</th>";
		echo "<th>Remark</th>";
		echo "<th>Advance Type</th>";
		echo "<th>Mamul</th>";
		echo "<th>Commission</th>";
		echo "<th>Cashmode</th>";
		echo "<th>Bill Status</th>";
		echo "<th>No</th>";
      echo "</tr>";
    echo "</thead>";
	echo "<tbody>";

   while($rowi = mysqli_fetch_assoc($resulti)) {			
	  echo "<tr >";
	  echo "<td>" . $rowi['sno']. "</td><td>".$rowi['date']."</td><td>" . $rowi['vehicle']. "</td><td> " . $rowi['company']. "</td><td> " . $rowi['invoice']. "</td><td>" . $rowi['too']. "</td><td>" . $rowi['material']. "</td><td>" . $rowi['weight']. "</td><td>" . $rowi['freight']. "</td><td>" . $rowi['loading']. "</td><td>" . $rowi['weighment']. "</td><td>" . $rowi['unloading']. "</td><td>" . $rowi['store']. "</td><td>" . $rowi['other']. "</td><td>" . $rowi['total']. "</td><td>" . $rowi['advance']. "</td><td>" . $rowi['balance']. "</td><td>" . $rowi['remark']. "</td><td>" . $rowi['advancetype']. "</td><td>" . $rowi['mamul']. "</td><td>" . $rowi['commision']. "</td><td>" . $rowi['cashmode']. "</td><td>" . $rowi['bill']. "</td><td>" . $rowi['no']. "</td>";
      echo "</tr>";
	
	}
echo "<br><br></tbody></table>";
echo "</div>";
echo "<center>";

?>
<form action="print.php" method="post">
<center><b>Enter the Serial No<b><input type="text" name="sno"><input type="submit" value="Click to Take Print">
<center>
</form>
</body>
</html>