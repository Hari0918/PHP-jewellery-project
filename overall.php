<html>
<style>
 table,tr,th
{
 background-color: skyblue;
 color: black;
 font-size: 20px;
}
.heading
{
  color:black;
  padding: 20px;
  text-align: center;
  }
.topnavbar a
{
  float: left;
   color: black;
padding: 10px;
}
.topnavbar a:hover 
{
 background-color: blue;
color: black;
}
</style>
<body style="background-image: url(img.jpg);background-size: 1900px 900px">
<form method="post">
<body>
<div class="heading">
<h1>ONLINE GOLD JEWEL SHOP MANAGEMENT SYSTEM</h1>
</div>
<div class="topnavbar">
<a href="adminpg.php"><-BACK</a>
<br><br>
<center>
<font color="black">
<h2>OVER ALL ORDER</h2>	
</center>
</form>
<?php
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn =mysqli_connect($servername,$username,$password,$dbname);
$sql = "SELECT * FROM  userdp";
$result = mysqli_query($conn, $sql);
echo "<center>";
echo "<table border=3>";
echo "<tr>";
echo "<th> NAME</th>";
echo "<th> DATE</th>";
echo "<th> DESIGN MODEL</th>";
echo "<th> QUANTITY</th>";
echo "<th> CELL NUMBER</th>";
echo "<th> EMAIL ADDRESS</th>";
echo "<th> PRICE</th>";
echo "<th> AMOUNT</th>";
echo "</tr>";
echo "</center>";
echo "<font size=15 color=red>";
  if (mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
{
  echo "<td>".$row["name"]."</td>"."<td>".$row["date"]."</td>"."<td>".$row["design"]."</td>"."<td>".$row["quantity"]."</td>"."<td>".$row["cellnumber"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["price"]."</td>"."<td>".$row["amount"]."</td>";
  echo "</tr>";  
}
}
  else
{
  echo "0 results";
}
  mysqli_close($conn);
}
?>
</body>
</html>