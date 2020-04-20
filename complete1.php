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
<?php
session_start();
$a=$_SESSION["date"];
$b=$_SESSION["vehicle"];
$c=$_SESSION["company"];
$d=$_SESSION["to"];
$e=$_SESSION["material"];
$f=$_SESSION["weight"];
$g=$_SESSION["freight"];
$h=$_SESSION["loading"];
$i=$_SESSION["weighment"];
$j=$_SESSION["unloading"];
$k=$_SESSION["store"];
$l=$_SESSION["other"];
$m=$_SESSION["total"];
$n=$_SESSION["advance"];
$o=$_SESSION["balance"];
$p=$_SESSION["remark"];
$q=$_SESSION["advancetype"];
$r=$_SESSION["mamul"];
$s=$_SESSION["commision"];
$t=$_SESSION["cashmode"];
$z=$_SESSION["sno"];
$u="complete";
$w=$_SESSION["bill"];
$y=0;

	
$conn=mysqli_connect("localhost","root","","umadevi");
if($w='required')
{
	$sqli = "SELECT* FROM invoiceno";
	$resulti = mysqli_query($conn, $sqli);
	$rowi = mysqli_fetch_assoc($resulti);
	$y=$rowi['invoiceno'];
	$y=$y+1;
	$xy=$y-1;
	$q3="UPDATE `invoiceno` SET `invoiceno`='".$y."' WHERE invoiceno='".$xy."'";
	mysqli_query($conn,$q3);
	
}
$q1="UPDATE `main` SET `date`='".$a."',`vehicle`='".$b."',`company`='".$c."',`too`='".$d."',`material`='".$e."',`weight`='".$f."',`freight`=".$g.",`loading`=".$h.",`weighment`=".$i.",`unloading`=".$j.",`store`=".$k.",`other`=".$l.",`total`=".$m.",`advance`=".$n.",`balance`=".$o.",`remark`='".$p."',`advancetype`='".$q."',`mamul`=".$r.",`commision`=".$s.",`cashmode`='".$t."',`status`='complete',`no`='".$y."' WHERE sno=".$z;
mysqli_query($conn,$q1);
$sqli = "SELECT* FROM company WHERE company='".$c."'";
$resulti = mysqli_query($conn, $sqli);
$rowi = mysqli_fetch_assoc($resulti);
$x=$rowi['balance'];
$x=$x-$o;

    
		$q2="UPDATE `company` SET `balance`='".$x."' WHERE company='".$c."'";
		mysqli_query($conn,$q2);
		mysqli_close($conn);

?>
<div class="vertical-align"> 
<center><table><tr><td><h3>The Details have been added succesfully</h3></td></tr></table><center>
<div>
</body>
</html>