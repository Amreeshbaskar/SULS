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
<form>
<?php
 session_start();
$a=$_SESSION["date"];
$b=$_SESSION["vehicle"];
$c=$_SESSION["company"];
$d=$_SESSION["to"];
$e=$_SESSION["material"];
$f=$_SESSION["weight"];
$g=$_POST["freight"];
$h=$_POST["loading"];
$i=$_POST["weighment"];
$j=$_POST["unloading"];
$k=$_POST["store"];
$l=$_POST["other"];
$m=$g+$h+$i+$j+$k+$l;
$n=$_SESSION["advance"];
$o=$m-$n;
$p=$_POST["remark"];
$q=$_SESSION["advancetype"];
$r=$_SESSION["mamul"];
$s=$_POST["commision"];
$t=$_SESSION["cashmode"];
$v=$_SESSION["invoice"];
$w=$_SESSION["bill"];
echo "<div class='container'>";
  echo "<h1 align='center'>Add Accounts</h1>";
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
       echo "<td>".$a."</td>";
      echo "</tr>";    
	  echo "<tr bgcolor='palegreen'>";
        echo "<td>Vehicle No</td>";
        echo "<td>".$b."</td>";
      echo "</tr>";
    echo "<tr>";
      echo " <td>Company</td>";
       echo "<td>".$c."</td>";
      echo "</tr>";  
echo "<tr bgcolor='palegreen'>";
        echo "<td>Invoice No</td>";
        echo "<td>".$v."</td>";
      echo "</tr>";	  
	  echo "<tr>";
        echo "<td>To</td>";
        echo "<td>".$d."</td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Material</td>";
       echo "<td>".$e."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Weight</td>";
        echo "<td>".$f."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Freight</td>";
       echo "<td>".$g."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Loading</td>";
        echo "<td>".$h."</td>";
      echo "</tr>";
	     echo "<tr  bgcolor='palegreen'>";
      echo " <td>Weighment</td>";
       echo "<td>".$i."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Unloading</td>";
        echo "<td>".$j."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Store</td>";
       echo "<td>".$k."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Other</td>";
        echo "<td>".$l."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Total</td>";
       echo "<td>".$m."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Advance</td>";
        echo "<td>".$n."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Balance To pay</td>";
       echo "<td>".$o."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Remark</td>";
        echo "<td>".$p."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Advance Type</td>";
       echo "<td>".$q."</td>";
      echo "</tr>";    
	  echo "<tr>";
        echo "<td>Mamul</td>";
        echo "<td>".$r."</td>";
      echo "</tr>";
	      echo "<tr  bgcolor='palegreen'>";
      echo " <td>Commision</td>";
       echo "<td>".$s."</td>";
      echo "</tr>";  
	  echo "<tr 	>";
        echo "<td>Cash Mode</td>";
        echo "<td>".$t."</td>";
      echo "</tr>";
	  echo "<tr  bgcolor='palegreen'>";
      echo " <td>Bill Status</td>";
       echo "<td>".$w."</td>";
      echo "</tr>"; 
	  $_SESSION['date']=$a;
	  $_SESSION['vehicle']=$b;
	  $_SESSION['company']=$c;
	  $_SESSION['to']=$d;
	  $_SESSION['material']=$e;
	  $_SESSION['weight']=$f;
	  $_SESSION['freight']=$g;
	  $_SESSION['loading']=$h;
	  $_SESSION['weighment']=$i;
	  $_SESSION['unloading']=$j;
	  $_SESSION['store']=$k;
	  $_SESSION['other']=$l;
	  $_SESSION['total']=$m;
	  $_SESSION['advance']=$n;
	  $_SESSION['balance']=$o;
	  $_SESSION['remark']=$p;
	  $_SESSION['advancetype']=$q;
	  $_SESSION['mamul']=$r;
	  $_SESSION['commision']=$s;
	  $_SESSION['cashmode']=$t;
	  $_SESSION['invoice']=$v;
	  $_SESSION["bill"]=$w;
?>
<tr><td></td><td><button class="button" type="button" onclick="window.location.href='incomplete1.php'">Save</button>
<button class="button" type="button" onclick="window.location.href='complete1.php'">Confirm</button></td></tr>
  	  </tbody>
  </table>;
</div>
</form>
</body>
</html>