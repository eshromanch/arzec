<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ARZEC FACTORY</title>
    <style>
      body {
            margin: 30px;
        }
        .navbar {
    margin-bottom: 0;
    background-color: #333;;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Arial, Helvetica, sans-serif ;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
    font-family: Arial, Helvetica, sans-serif ;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
    font-family: Arial, Helvetica, sans-serif ;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }

</style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="profile.php">Profile</a></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="create_order.php">Create Order</a></li>
  <li><a class="active" href="allorder.php">All Orders</a></li>
  <li><a href="payment.php">Payment</a></li>
  <li><a href="about.php">About Us</a></li>
 <li style="float:right"><a class="active" href="#logout">Log Out</a></li>

 
</ul>
</div>
  </div>
</nav>
</body>
</html>