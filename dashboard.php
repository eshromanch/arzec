<?php require_once("header.php"); ?>
<?php require_once("config.php"); ?>

<br>
<br>
<h1 class="heading">Dashboard</h1>

<div class="flex-container">
<?php 
$query = "SELECT * FROM orders";

$result = mysqli_query($con,$query);
$rowcount=mysqli_num_rows($result);

?>
  <div class="box1">Total Orders<?php 
  if (isset($_SESSION["authen"])){
    if($_SESSION["admin"]){
    echo " : ". $rowcount ;
    } 
  }
   ?></div>
  <div class="box2">Orders Under Process</div>
  <div class="box3">Total Due Amount</div>

</div>


</body>
</html>
 
