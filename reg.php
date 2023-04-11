<html>
<body style="background-image: url(img.jpg);background-size: 1900px 900px">
<style>
.heading
{
  color:black;
  padding: 20px;
  text-align: center;
  }
 .topnavbar
{
    background-color: ;
     overflow: auto;   
}
.topnavbar a
{
  float: left;
   color: black;
padding: 10px;

}
.topnavbar a:hover 
{
 background-color: gray;
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
<br><br><br><br><br><br><br><h1>REGISTRATION</h1>
USER NAME <input type="USER NAME" name="a1"><br><br>
PASSWORD <input type="PASSWORD" name="a2"><br><br>
<input type="submit" value="SUBMIT" name="a3"><br><br></body>
</center>
</form>
 <?php
   if(isset($_POST['a3']))
{
        $conn = mysqli_connect("localhost", "root", "", "project");
          
         if($conn == false)
         {
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
             $username= $_POST['a1'];
        $password = $_POST['a2'];
        $sql = "INSERT INTO reg VALUES ('$username','$password')";
        if(mysqli_query($conn, $sql))
{
            echo "<h3>data stored in a database successfully."; 
          }
      else
         {
            echo "ERROR" ;
                
        }
                mysqli_close($conn);
}
        ?>

</body>
</html>