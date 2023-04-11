<html>
<body style="background-image: url(img.jpg);background-size: 1900px 900px">
<style>
table,tr,th
{
 background-color: skyblue;
 color: black;
 font-size: 20px;
}
.heading
{
  color:white;
  padding: 20px;
  text-align: center;
  }
.topnavbar a
{
  float: left;
   color: white;
padding: 10px;

}
.topnavbar a:hover 
{
 background-color:skyblue;
color: blue;
}
</style>
<form method="post">
<body>
<div class="heading">
<h1>ONLINE GOLD JEWEL SHOP MANAGEMENT SYSTEM</h1><br><br><br><br><br><br><br><br>
<center>
<h2>DATEWISE ORDER</h2><br><br>
<b>CELL NUMBER <input type="cellnumber"name="c1"><br>
<br><input type="submit" value="SUBMIT" name="c2"><br><br>
</center>
</form>
<?php
 if(isset($_POST['c2']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn =mysqli_connect($servername,$username,$password,$dbname);
if (!$conn)
 {
  die("Connection failed: " . mysqli_connect_error());
}
$s= $_POST['c1']; 
$sql = "SELECT * FROM userdp where cellnumber='$s' ";
$result = mysqli_query($conn, $sql);
echo "<center>";
 echo "<table border=3>";
 echo "<tr>";
echo "<th> NAME</th>";
echo "<th> DATE</th>";
echo "<th> DESIGN MODEL</th>";
echo "<th> GRAM</th>";
echo "<th> CELL NUMBER</th>";
echo "<th> EMAIL ADDRESS</th>";
echo "<th> PRICE</th>";
echo "<th> AMOUNT</th>";
echo "</tr>";
echo "<font size=20 color=yellow>";
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