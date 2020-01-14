<!DOCTYPE html>
<html>
 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<head>
	<title>My Blog</title>
</head>
<body>
<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);

.ee {
  width: 80%;
  border: 20px solid #bdc3c7;
  font-family: 'Source Sans Pro', sans-serif;
  padding: 20px;
  margin: 100px auto;
  max-width: 700px;
}

.post {
  margin-bottom: 20px;
}


.quote{
  border-left: 5px solid #bdc3c7;
  padding-left: 5px;
}

h2 {
  font-size: 2.0rem;
  font-weight: bold;
  color: #2c3e50;
}

hr{
    border: 0;
    height: 0;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}
.f {
      margin-top: 15px;
    }

</style>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic|Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
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
          <?php
            session_start();

          if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
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
  <div class= "ee">
<div class="post">
	 	<h2>Tamtam Pets Store</h2>

	<p class="quote">
	Tamtam  is the only online pets store in the middle east, we are characterized by having the best types of pets with a high level of care and health.	</p>

	<p> Now we  have six types of pets (cats, rabbits, dogs, birds, squirrels, and hamsters).</p>
	<hr>
</div>

<!-- <hr> -->

<div class="post">

	<p class="quote">
		We are happy for any new ideas to develop our services for you
You can contact us via e-mail tamtam@yahoo.com
Or by phone number 0832323 
Or you can visit our offices in Amman, Mecca Street, Building No. 9	</p>
<img src="https://images.unsplash.com/photo-1523890764080-79571198db34?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
	
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>