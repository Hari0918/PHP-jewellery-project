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
<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp USER STATUS</h2>
<br><br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CUSTOMER NAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="name" name="c1">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CELL NUMBER &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="cellnumber"name="c2"><br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp BUY DATE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="date"name="c3"><br><br>
<b>DESIGN MODEL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select id="DESIGN MODEL"name="c4">
<option value="RING">RING</option>
<option value="NECKLACE">NECKLACE</option>
<option value="EARINGS">EARINGS</option>
<option value="NOSE RING">NOSE RING</option>
<option value="LONG CHAIN">LONG CHAIN</option>
<option value="SHORT CHAIN">SHORT CHAIN</option>
<option value="BANGELS">BANGELS</option>
</select id><br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp GRAM &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="QUANTITY"name="c5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp STATUS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="STATUS"name="c6">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<br><input type="submit" value="SUBMIT" name="c7">
</center>
</form>
 <?php
   if(isset($_POST['c7']))
{
        $conn = mysqli_connect("localhost", "root", "", "project");
          
         if($conn == false)
         {
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        $name= $_POST['c1'];
        $cellno = $_POST['c2'];
        $buydate = $_POST['c3'];
        $model = $_POST['c4'];
        $quantity = $_POST['c5'];
        $status = $_POST['c6'];
        $sql = "INSERT INTO admindp VALUES ('$name','$cellno','$buydate','$model','$quantity','$status')";
        if(mysqli_query($conn, $sql))
{
            echo "<h3>data stored in a database successfully"; 
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