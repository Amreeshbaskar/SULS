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
.vertical-align {
	position: absolute;
	top: 55%;
	transform: translateY(-50%);
	left: 400;
	width: 50%;
	box-shadow:0px 0px 5px 0px #888;
	background-color:white;
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
<h1 align="center">Add Vehicle and Company</h1>
<div class="vertical-align"> 
<br>
<form action="addvehicle.php" method="post">
<center><input type="text" name="vehicle"><input type="submit" value="Add Vehicle"><center>
</form>
<br>
<form action="addcompany.php" method="post">
<input type="text" name="company"><input type="submit" value="Add Company">
</form>
</div>
</body>
</html>