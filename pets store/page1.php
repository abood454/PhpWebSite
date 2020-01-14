<!DOCTYPE html>
<html>

<head>
  <title>page 1</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style type="text/css">
    body {
      padding-top: 70px;
    }

    .f {
      margin-top: 15px;
    }

    /*<a href="Page2.php?category=dogs"*/
  </style>
  <?php session_start(); ?>



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


    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p>
            <center>cats</center>
          </p>
          <a href="itams.php?category=cat"><img src="images/cats.jpg"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p>
            <center>dogs</center>
          </p>
          <a href="itams.php?category=dog"><img src="images/dogs.jpg"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p>
            <center>Hamsters</center>
          </p>
          <a href="itams.php?category=hourse"> <img src="images/hhh.jpg"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p>
            <center>rabbits</center>
          </p>
          <a href="itams.php?category=rabbits"> <img src="images/rabbits.jpg"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p>
            <center>Squirrels</center>
          </p>
          <a href="itams.php?category=Squirrel"> <img src="images/Squirrels.jpg"></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="thumbnail">
          <p>
            <center>birds</center>
          </p>
          <a href="itams.php?category=bird"> <img src="images/birds.jpg"></a>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>