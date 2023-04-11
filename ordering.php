 <?php
   if(isset($_POST['c9']))
{
        $conn = mysqli_connect("localhost", "root", "", "project");
          
         if($conn == false)
         {
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }
        $name= $_POST['c1'];
        $date = $_POST['c2'];
        $design = $_POST['c3'];
        $quantity = $_POST['c4'];
        $cellnumber = $_POST['c5'];
        $emailaddress = $_POST['c6'];
        $price = $_POST['c7'];
        $amount = $_POST['c8'];
        $a=$quantity*$price;
        $sql ="INSERT INTO userdp VALUES ('$name','$date','$design','$quantity','$cellnumber','$emailaddress','$price','$a')";
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
<h1>ONLINE GOLD JEWEL SHOP MANAGEMENT SYSTEM</h1><br><br>
<div class="topnavbar">
<a href="view.php"><-BACK</a>
<center>
<div class="heading">
<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ORDER APPLICATION</h2>
<br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp NAME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="name" name="c1"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DATE&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="date" name="c2" value="<?php echo $date; ?>"><br><br>
<b>DESIGN MODEL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select id="DESIGN MODEL"name="c3">
<option value="RING">RING</option>
<option value="NECKLACE">NECKLACE</option>
<option value="EARINGS">EARINGS</option>
<option value="NOSE RING">NOSE RING</option>
<option value="LONG CHAIN">LONG CHAIN</option>
<option value="SHORT CHAIN">SHORT CHAIN</option>
<option value="BANGELS">BANGELS</option>
</select id><br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp GRAM &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="c4" value="<?php echo $quantity; ?>"> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CELL NUMBER &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="c5" value="<?php echo $cellnumber; ?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp EMAIL ADDRESS &nbsp&nbsp&nbsp&nbsp&nbsp<input type="emailaddress" name="c6"><br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp PRICE &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="c7" value="3450">&nbsp&nbsp&nbsp&nbsp<br><br>
<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp AMOUNT &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="c8" value="<?php echo $a; ?>">&nbsp&nbsp&nbsp&nbsp<br><br>
<br><input type="submit" value="SUBMIT" name="c9">
</center>
</form>
</body>
</html>
