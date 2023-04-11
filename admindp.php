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
 background-color:skyblue;
color: blue;
}
</style>
<form method="post">
<body>
<div class="heading">
<h1>ONLINE GOLD JEWEL SHOP MANAGEMENT SYSTEM</h1><br><br><br>
<div class="topnavbar">
<a href="view.php"><-BACK</a>
<center>
<div class="heading">
<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspORDER APPLICATION</h2>
<br><br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CELL NUMBER &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="cellnumber"name="c1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<br><input type="submit" value="SUBMIT" name="c2">
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
$sql = "SELECT * FROM admindp where cellno='$s' ";
$result = mysqli_query($conn, $sql);
echo "<center>";
 echo "<table border=3>";
 echo "<tr>";
echo "<th> NAME</th>";
echo "<th> CELL NUMBER</th>";
echo "<th> BUY DATE</th>";
echo "<th> DESIGN</th>";
echo "<th> GRAM</th>";
echo "<th> STATUS</th>";
echo "</tr>";
echo "<font size=20 color=yellow>";
if (mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_assoc($result))
 {
  echo "<td>".$row["name"]."</td>"."<td>".$row["cellno"]."</td>"."<td>".$row["buydate"]."</td>"."<td>".$row["design"]."</td>"."<td>".$row["quantity"]."</td>"."<td>".$row["status"]."</td>";
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