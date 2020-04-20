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
$z=$_POST["sno"];
$conn=mysqli_connect("localhost","root","","umadevi");
	$sqli = "SELECT* FROM main where sno=".$z;
    $resulti = mysqli_query($conn, $sqli);
	$rowi = mysqli_fetch_assoc($resulti);
	$status=$rowi['status'];
	$bill=$rowi['bill'];
	if($status=='complete' and $bill=='required')
	{		
$q1="UPDATE `main` SET `bill`='notrequired' WHERE sno=".$z;
$resulty = mysqli_query($conn, $q1);
require_once 'PHPExcel-1.8/Classes/PHPExcel.php';
$excel=new PHPExcel();
$excel->setActiveSheetIndex(0)
	->setCellValue('A1',$rowi['no'])
	->setCellValue('A2',$rowi['invoice'])
	->setCellValue('A3',$rowi['company'])
	->setCellValue('A4',$rowi['too'])
	->setCellValue('A5',$rowi['vehicle'])
	->setCellValue('A6',$rowi['date'])
	->setCellValue('A7',$rowi['freight'])
	->setCellValue('A8',$rowi['loading'])
	->setCellValue('A9',$rowi['weighment'])
	->setCellValue('A10',$rowi['loading'])
	->setCellValue('A11',$rowi['store'])
	->setCellValue('A12',$rowi['other'])
	->setCellValue('A13',$rowi['total']);
	
	$file=PHPExcel_IOFactory::createWriter($excel,'Excel2007');
	$file->save('billcopy.xlsx');
	echo "<div class='vertical-align'>"; 
echo "<center><table><tr><td><h3>Bill is successfully Generated</h3></td></tr></table><center>";
echo "<div>";
	}
	else
	{
		echo "<script>window.alert('Enter a valid serial number')</script>";
		echo "<br><br><form action='view.php' method='post'><input type='submit' value='Go Back'></form>";
	}
	
	?>
</body>
</html>