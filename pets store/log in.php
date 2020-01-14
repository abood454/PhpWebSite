<!DOCTYPE html>
<html>

<head>
  <title>page 1</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style type="text/css">
    body {
      background-color: rgb(192, 192, 192);
    }

    body,
    html {
      width: 100%;
      height: 100%;
    }

    body {
      padding-top: 70px;
      background: url(https://images.unsplash.com/photo-1559835081-a7ea64953f50?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
      background-size: cover;
      background-position: center;
    }

    .ab {
      padding: 200px;
    }

    .f {
      margin-top: 15px;
    }
    h3{
      color: red;
      margin-left:50px;

    }
  </style>
  <?php
  session_start();
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    header("Location:page1.php");

   }
   
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  } else {
  }
  $mysqli = new mysqli("localhost", "abood", "abood123", "mydb");
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  if (isset($_POST["log"])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];
     if($name=="admin"&&$pass=="123"){
      $_SESSION['id'] = $row['iduser'];
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $name;
      header("Location:admin.php");
     }

    $sql = "select * from user where name='" . $name . "' and password='" . $pass . "'";
    $result = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $name;
      $x = "select iduser from user where name='" . $_SESSION['username'] . "'";
      $y = mysqli_query($mysqli, $x);
      if (mysqli_num_rows($y) > 0) echo "string";

      while ($row = mysqli_fetch_assoc($y)) {

        $_SESSION['id'] = $row['iduser'];
      }
      header("Location:page1.php");
      exit();
    } else {
      echo "<h3>Invalid user name/ password</h3>";
    }
  }


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
          <li><a href="">My Cart</a></li>
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


  <div class="ab">

    <form action="log in.php" method="POST">

      <div class="form-group">
        <label for="exampleInputEmail1">user name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" style="width: 300px;" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="width: 300px;" name="pass">
      </div>

      <button type="submit" class="btn btn-default" name="log">log in</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>