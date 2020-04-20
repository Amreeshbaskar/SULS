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
th
{
	color:white;
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
<div class="container">
<form action="verify.php" method="post">
  <h1 align="center">Add Accounts</h1>
  <br>
  <br>
  <table class="table">
    <thead>
      <tr bgcolor="darkolivegreen">
        <th></th>
        <th></th>
      </tr>
    </thead>
	<tbody>
      <tr>
        <td>Date</td>
        <td><input type="date" name="date"></td>
      </tr>    
	  <tr bgcolor="palegreen">
        <td>Vehicle No</td>
        <td><?php 
		echo "<select name='vehicle'>";
		$conn=mysqli_connect("localhost","root","","umadevi");
	$sqli = "SELECT* FROM vehicle";
    $resulti = mysqli_query($conn, $sqli);
	while($rowi = mysqli_fetch_assoc($resulti)) {
		echo "<option value=".$rowi['vehicle'].">".$rowi['vehicle']."<option>";
	}
	echo "</select>";
		?></td>
      </tr>
	        <tr>
        <td>Company</td>
        <td><?php 
		echo "<select name='company'>";
		$conn=mysqli_connect("localhost","root","","umadevi");
	$sqli = "SELECT* FROM company";
    $resulti = mysqli_query($conn, $sqli);
	while($rowi = mysqli_fetch_assoc($resulti)) {
		echo "<option value=".$rowi['company'].">".$rowi['company']."<option>";
	}
	echo "</select>";
		?></td>
      </tr>    
	  <tr bgcolor="palegreen">
        <td>Invoice No</td>
        <td><input type="text" name="invoice"></td>
      </tr>
	  <tr>
        <td>To</td>
        <td><input type="text" name="to"></td>
      </tr>
	        <tr bgcolor="palegreen">
        <td>Material</td>
        <td><input type="text" name="material"></td>
      </tr>    
	  <tr>
        <td>Weight(Ton)</td>
        <td><input type="text" name="weight"></td>
      </tr>
	       <tr bgcolor="palegreen">
        <td>Freight</td>
        <td><input type="text" name="freight" value=0></td>
      </tr>    
	  <tr>
        <td>Loading</td>
        <td><input type="text" name="loading" value=0></td>
      </tr>
	        <tr bgcolor="palegreen">
        <td>Weighment</td>
        <td><input type="text" name="weighment" value=0></td>
      </tr>    
	  <tr >
        <td>Unloading</td>
        <td><input type="text" name="unloading" value=0></td>
      </tr>
	        <tr bgcolor="palegreen">
        <td>Store</td>
        <td><input type="text" name="store" value=0></td>
      </tr>    
	  <tr>
        <td>Other</td>
        <td><input type="text" name="other" value=0></td>
      </tr> 
	  <tr bgcolor="palegreen">
        <td>Advance</td>
        <td><input type="text" name="advance" value=0></td>
      </tr> 
	  <tr>
        <td>Remark</td>
        <td><input type="text" name="remark"></td>
      </tr>
	        <tr bgcolor="palegreen">
        <td>Advance Type</td>
        <td><select name="advancetype">
		<option value="account">Account</option>
		<option value="cash">Cash</option>
		
		</td>
      </tr>    
	  <tr>
        <td>Mamul</td>
        <td><input type="text" name="mamul" value=0></td>
      </tr>
	        <tr bgcolor="palegreen">
        <td>Commision</td>
        <td><input type="text" name="commision" value=0></td>
      </tr>   
	  <tr>
        <td>Cash Mode</td>
        <td><select name="cashmode">
		<option value="pl_account">PL Account</option>
		<option value="pl_cash">PL Cash</option>
		<option value="pr_account">PR Account</option>
		<option value="company_cash">Company Cash</option>
		<option value="company_account">Company Account</option>		
		</td>
      </tr>	  
	  <tr bgcolor="palegreen">
        <td>Bill Status</td>
        <td><select name="bill">
		<option value="required">Required</option>
		<option value="notrequires">Not Required</option>
		
		</td>
      </tr>  
<tr>
<td></td>
<td><input type="submit" value="Continue"></td>
</tr>
</tbody>
</table>
</div>
</form>
</body>
</html>