<html>
<body style="background-image: url(img.jpg);background-size: 1900px 900px">
<style>
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
 background-color: LightSteelBlue;
color: white;
}
</style>
<form method="post">
<body>
<div class="heading">
<h1>ONLINE GOLD JEWEL SHOP MANAGEMENT SYSTEM</h1>
<div class="topnavbar">
<br><br>
<a href="home.php">HOME</a>
<a href="reg.php">REGISTRATION</a>
<a href="userlogin.php">USER LOGIN</a>
<a href="admin.php">ADMINISTRATOR</a>
<center>
<div class="heading">
<br><br><br><br><br><br><br><h1>USER LOGIN</h1>
USER NAME <input type="USER NAME" name="b1"><br><br>
PASSWORD <input type="PASSWORD" name="b2"><br><br>
<input type="submit" value="SUBMIT" name="b3"><br><br>
</center>
</form>
 <?php
   if(isset($_POST['b3']))
{
        $conn = mysqli_connect("localhost", "root", "", "project");
          
         if($conn == false)
         {
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        $username= $_POST['b1'];
        $password = $_POST['b2'];
$sql = "SELECT * FROM reg";
$result = mysqli_query($conn, $sql);
   $f=0;
if (mysqli_num_rows($result) > 0)
 {

  while($row = mysqli_fetch_assoc($result))
 {
     $x= $row["username"];
     $y=$row["password"];
 
  if($x==$username && $y==$password)
  {
    $f=1;
   break;
  }
}
}
if($f==1)
  {
     header("Location: view.php");
}
else
{
  echo "<font size=5 color=white>";
echo "Invalid user Name or password";
}

mysqli_close($conn);
}
?>
</body>
</html>
