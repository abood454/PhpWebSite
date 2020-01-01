<!DOCTYPE html>
<html>
<head>
  <?php
    $mysqli = new mysqli("localhost", "abood", "abood123", "mydb");
    if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    }
    session_start();
    if(isset($_POST["sub"])){

     $name =$_POST["fname"];
     $last=$_POST["lname"];
     $email =$_POST["email"];
     $pass =$_POST["pass"];
      $age =$_POST["age"];
      $phone =$_POST["phone"];
      $sex =$_POST["sex"];
      $query = "SELECT MAX(iduser) FROM user";
         $result = mysqli_query($mysqli,  $query);
        $row = mysqli_fetch_row($result);
       $f =$row[0]+1;
       $sql = "INSERT INTO user (iduser, name,password, email,phone,sex,age)
       VALUES ('".$f."', '".$name."' , '".$pass."','".$email."','".$phone."','".$sex."','".$age."')";
           $result = mysqli_query($mysqli,$sql);

}
     
    
?>
  <title>page 1</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style type="text/css">
    body {
     background: url(https://images.unsplash.com/photo-1564613470220-5fc8b480b13d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60);
    background-size: cover;
    background-position: center;  }


body,
html {
    width: 100%;
    height: 100%;
   }
  
    body { padding-top: 70px; }
.ab{
  padding: 200px ;
}
.form-control{
  width: 300px;

}
#h{
  margin: auto;
  width: 70%;
  padding: 10px;
}
.ab{
  margin: auto;
  width: 70%;
  padding: 10px;
}
.f{
    margin-top: 15px;
  }

</style>

</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only" class= "con">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="landingpage.php">Pits Store</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="page1.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="">My Cart</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            $a= "Welcome, " . $_SESSION['username'] . "!";
            echo "<li class='f'>".$a."</li>";
        ?> 
        <li><a href="logout.php">Log out  <i class="glyphicon glyphicon-share"></i></a></li>
      <?php } else { ?> 
          <li><a href="sign up.php">Signup  <i class="fa fa-user-plus"></i></a></li>
          <li><a href="log in.php">Login  <i class="fa fa-user"></i></a></li>
         <?php }?>
        </ul>
      </div>
    </div>
   </nav>
  
<?php     if(!isset($_POST["sub"])) { ?>

<div class ="ab">

<form action="sign up.php" method="post">
  <div class="form-group">
    <label for="namef">First Name </label>
    <input type="text" class="form-control" id="namef" placeholder="First Name " name="fname">
  </div>
   <div class="form-group">
    <label for="namel">Last Name </label>
    <input type="text" class="form-control" id="namel" placeholder="Last Name " name="lname">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">phone</label>
    <input type="text" class="form-control" id="exampleInputPassword2" placeholder="" name="phone" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password </label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="confirm password" >
  </div>
  <div>
   </div>
   <div class="form-group">
    <label for="Age">Age  </label>
    <input type="number" class="form-control" id="Age" placeholder="Age" name="age" >
  </div>
<div class= "form-group">
    <label for="rr1">Gender</label>
  <label class="checkbox-inline">Male<input type="radio" value="M" name ="sex" id= "rr1"></label>
  <label class="checkbox-inline">Female<input type="radio" value="F" name="sex" id= "rr"> </label>
</div> 
 
  <button type="submit" class="btn btn-default" name="sub">Submit</button>
</form>   
  </div>
<?php } else{ ?>
  <div id ="h">
<div class="jumbotron">
  <h1 class="display-4">Success!</h1>
  <p class="lead"> your registration successful..</p>
  <hr class="my-4">
  <p>start your shoping in psts store!.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="page1.html" role="button">GO</a>
  </p>
</div>
</div>
<?php }?>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

