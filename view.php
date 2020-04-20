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

<div class="container">
  <h1 align="center">View Accounts</h1>
  <br>
  <br>
  <form action="filter3.php" method="post">
  <table class="table">
    <thead>
      <tr bgcolor="grey">
		<th>Company Name(Billing Purpose)</th>   
<th></th>	<th></th>	
      </tr>
    </thead>
	<tbody>
      <tr>
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
<tr>  
<td><input type="submit"></td>	
<td></td>	
</tr>
	  	  </tbody>
  </table>
  </form>
  <form action="filter.php" method="post">
  <table class="table">
    <thead>
      <tr bgcolor="grey">
		<th>From</th>
		<th>To</th>
        <th>Company Name(Weekly Accounts)</th>        
      </tr>
    </thead>
	<tbody>
      <tr>
        <td><input type="date" name="from"></td>
		<td><input type="date" name="to"></td>
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
<tr>
<td><input type="submit"></td>	  
<td></td>	
<td></td>	
</tr>
	  	  </tbody>
  </table>
  </form>
  <form action="filter1.php" method="post">
    <table class="table">
    <thead>
      <tr bgcolor="grey">
        <th>Vehicle number</th>
      </tr>
    </thead>
	<tbody>
      <tr>		
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
<td><input type="submit"></td>		
</tr>
</tbody>
  </table>
  </form>
  <form action="filter2.php" method="post">
    <table class="table">
    <thead>
      <tr bgcolor="grey">
		<th>From</th>
		<th>To</th>        
      </tr>
    </thead>
	<tbody>
      <tr>
        <td><input type="date" name="from"></td>
		<td><input type="date" name="to"></td>
      </tr>  
<tr>
<td><input type="submit"></td>	  
<td></td>	
</tr>
	  	  </tbody>
  </table>
  </form>
</div>
</body>
</html>