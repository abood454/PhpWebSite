<!DOCTYPE html>
<html>
<head>
	<title>cat</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style type="text/css">
    body { padding-top: 70px; }
    img {
      padding-bottom: 10px;
    }
  .f{
    margin-top: 15px;
  }
  </style>
  <?php 
   $mysqli = new mysqli("localhost", "abood", "abood123", "mydb");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    }
    session_start(); 
    $sql ="select typename,price,img,idtype from type where category_id='".$_GET["category"]."'";
    $result = $mysqli->query($sql);
  ?>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only" class="con">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="landingpage.php">Pets Store</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="page1.html">Home</a></li>
          <li><a href="about-us.php">About</a></li>
          <li><a href="cart1.php">My Cart</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            $a = "Welcome, " . $_SESSION['username'] . "!";
            echo "<li class='f'>" . $a . "</li>";
          ?>
            <li><a href="page1.php">Log out <i class="glyphicon glyphicon-share"></i></a></li>
          <?php } else { ?>
            <li><a href="sign up.php">Signup <i class="fa fa-user-plus"></i></a></li>
            <li><a href="log in.php">Login <i class="fa fa-user"></i></a></li>
          <?php } ?>

        </ul>
      </div>
    </div>
  </nav>



  <div class="container">


    <div class="row">
      <?php while($row = $result->fetch_assoc()) { ?>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p><center><?php echo $row["typename"]; ?></center></p>
          <img src=<?php echo $row['img'] ?>><h4> <?php echo $row["price"] ?>JD</h4>
         <center><form method="post" action="addtocart.php"><button type="hidden" name="id"class="btn btn-success" value =<?php echo $row['idtype']; ?>  >Add to cart</button></form></center>
    <center><form method="post" action="details.php">  <button type="hidden" name="id" class="btn btn-danger"value =<?php echo $row['idtype']; ?> > Details </button></form></center>

        </div>
      </div>
   <?php } ?>
  </div>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

