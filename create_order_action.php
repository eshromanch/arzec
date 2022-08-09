<?php require_once("config.php"); ?>
<?php include("header.php"); ?>

<?php 
  if(isset($_SESSION["authen"])){
    if(isset($_POST["post"])){
   
      $output_dir_product_image = "image/uploads/";
      $RandomNum   = time();
  
      $product_image = str_replace(' ','-',strtolower($_FILES['image']['name']));

      if($product_image == TRUE ){
        $NewImageNameImage = $RandomNum.'-'.$product_image;
      }
      else{
        $NewImageNameImage = $product_image;
      }
      move_uploaded_file($_FILES["image"]["tmp_name"],$output_dir_product_image .$NewImageNameImage);


      $sellist1 = $_POST["sellist1"];
      $sellist2 = $_POST["sellist2"];
      $model = $_POST["model"];

      $sql = "INSERT INTO orders(image,type,mobile_name,model)
            VALUES('$NewImageNameImage', '$sellist1', '$sellist2', '$model')";
      if (mysqli_query($con, $sql)) {
              $message = "Order Done!";
              echo "<script type='text/javascript'>alert('$message');</script>";
              header("refresh:1; url=create_order.php");

          } else {
              $message = "Error: " . $sql . "<br/>" . mysqli_error($con);
              echo "<script type='text/javascript'>alert('$message');</script>";
              header("refresh:1; url=create_order.php");
          }
    }
  }
?>
