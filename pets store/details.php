<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <title></title>
</head>
<?php
session_start();
$mysqli = new mysqli("localhost", "abood", "abood123", "mydb");
$sql = "select typename,price,img,category_id,age from type where idtype ='" . $_POST['id'] . "'";
$result = $mysqli->query($sql);
?>

<body>
  <style type="text/css">
    body {
      padding-top: 100px;
    }

    .mohammad {
      padding-left: 200px;
    }

    .f {
      margin-top: 15px;
    }
  </style>
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
          <li class="active"><a href="page1.php">Home</a></li>
          <li><a href="about-us.php">About</a></li>
          <li><a href="cart1.php">My Cart</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            $a = "Welcome, " . $_SESSION['username'] . "!";
            echo "<li class='f'>" . $a . "</li>";
          ?>
            <li><a href="logout.php">Log out <i class="glyphicon glyphicon-share"></i></a></li>
          <?php } else { ?>
            <li><a href="sign up.php">Signup <i class="fa fa-user-plus"></i></a></li>
            <li><a href="log in.php">Login <i class="fa fa-user"></i></a></li>
          <?php } ?>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container">

    <div class="thumbnail">
      <center>
        <?php
        while ($row = $result->fetch_assoc()) { ?>

          <h4><strong> price: <?php echo $row['price']; ?> jd</strong> </h4>
          <h4><strong> kind : <?php echo $row['typename']; ?></strong></h4>
          <h4> <strong>Age : <?php echo $row['age']; ?> month </strong> </h4>

      </center>
      <img src=<?php echo $row['img']; ?>>
      <center>
        <form method="post" action="addtocart.php"><button type="hidden" name="id" class="btn btn-success" value=<?php echo  $_POST['id']; ?>>Add to cart</button></form>
      </center>

    <?php } ?>
    </div>
  </div>
  </div>
  </div>




</body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>