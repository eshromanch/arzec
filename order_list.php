<?php require_once("header.php"); ?>
<?php require_once("config.php"); ?>
<br>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Print Type</th>
      <th scope="col">Mobile Name</th>
      <th scope="col">Model</th>
    </tr>
  </thead>
  <?php
$sql = "SELECT * FROM `orders`";
$result=$con->query($sql);
while($row = mysqli_fetch_assoc($result))
{
    $image = $row["image"];
    $type = $row["type"];
    $mobile_name = $row["mobile_name"];
    $model = $row["model"];
    $dir = "image/uploads/";

?>
  <tbody>
    <tr>
      <th scope="row"><img src="<?php  echo $dir. $image ;?>" alt="<?php  echo $dir. $image ;?>" width="300" height="300"></img></th>
      <td><?php echo $type ?></td>
      <td><?php echo $mobile_name ?></td>
      <td><?php echo $model ?></td>
    </tr>
  </tbody>
<?php
}
?>
</table>

</body>
</html>