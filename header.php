<?php require_once("config.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <title>ARZEC FACTORY</title>
<style>
    body {
          margin: 30px;
    }

    .flex-container {
      display: flex;
      flex-wrap: nowrap;
      background-color: white;
    }



    .heading{
        text-align: center; 
        font-family: Arial, Helvetica, sans-serif ;
        color: #333;
    }
    .box1 {
      border: 1px blue solid;
      background-color: white;
      width: 20%;
      margin: 80px;
      text-align: center;
      line-height:120px;
      font-size: 25px;
      font-family: Arial, Helvetica, sans-serif ;
      color:blue ;
    }
    .box2 {
      border: 1px green solid;
      background-color: white;
      width: 20%;
      margin: 80px;
      text-align: center;
      line-height:120px;
      font-size: 25px;
      font-family: Arial, Helvetica, sans-serif ;
      color:green ;
    }
    .box3 {
      border: 1px red solid;
      background-color: white;
      width: 20%;
      margin: 80px;
      text-align: center;
      line-height:120px;
      font-size: 25px;
      font-family: Arial, Helvetica, sans-serif ;
      color:red ;
    }

</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="index.php">Arzec Factory</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link nav-color" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php
            if (isset($_SESSION["authen"] )){
               if ($_SESSION["authen"] || $_SESSION["admin"]){
              $username = $_SESSION["username"];
        ?>	
      <li class="nav-item">
        <a class="nav-link nav-color" href="create_order.php">Create Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-color" href="dashboard.php">Dashboard</a>
      </li>
      <?php
               }
            }
      if (isset($_SESSION["authen"] )){
        if ( $_SESSION["admin"]){

      ?>
      <li class="nav-item">
        <a class="nav-link nav-color" href="order_list.php">Order List</a>
      </li>
      <?php
        }
      }
      ?>
      <li class="nav-item">
        <a class="nav-link nav-color" href="payment.php">Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-color" href="about.php">About Us</a>
      </li>
      
      
      <li class="nav-item dropdown">
        <?php
            if (isset($_SESSION["authen"] )){
               if ($_SESSION["authen"] || $_SESSION["admin"]){
              $username = $_SESSION["username"];

          // }
        ?>		
            <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $username; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin: 0;padding: 0;">
              
                <div class="dropdown-divider" style="margin: 0;"></div>
              <form method="post" action="logout.php"><button type="submit"class="nav-link nav-color" style="border: 0;background: #f8f9fa;text-align: center;width: 100%;" name="logout">Logout</button>
              </form>
            </div>

            <?php
          
          
              } else { ?>
                <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item nav-color" href="register.php">Sign In</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item nav-color" href="register.php">Sign Up</a>
                </div>
            <?php  } ?>
            <?php
              
              
              } else { ?>
                <a class="nav-link nav-color dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item nav-color" href="register.php">Sign In</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item nav-color" href="register.php">Sign Up</a>
                </div>
            <?php  } ?>
      </li>
    </ul>
  </div>
  </div>
</nav>

<!--Navbar Ends -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
