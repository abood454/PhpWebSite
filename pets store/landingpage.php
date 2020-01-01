<!DOCTYPE html>
<html>
<head>
	<title>Animals store</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
  <style type="text/css">
    body {
    background: url(https://images.unsplash.com/photo-1573865526739-10659fec78a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=658&q=80);
    background-size: cover;
    background-position: center; 
}

body,
html {
    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
}

h1 {
  font-weight: 700;
  font-size: 5em;
}


.content{
  padding-top: 25%;
  text-align: center;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);
}


hr {
    width: 400px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}
.f{
    margin-top: 15px;
    color:black;
  }
  </style>
<?php session_start(); ?>
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
        <li class="active"><a href="page1.php">Home</a></li>
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


 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Pits store</h1>
 				<h3>The Only Pits Store App</h3>
 				<hr>
 				<a href="page1.php"><button class="btn btn-default btn-lg"><i class="fa fa-paw fa-fw"></i> Get Started!</button></a>
 			</div>
 		</div>
 	</div>
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>
</html>