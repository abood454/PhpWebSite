<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<style>
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
 if (isset($_POST["sub"])) {
    session_start(); 
    $g=$_POST['sub'];
 $sql ="update type set price='" . $_POST[ $_POST['sub']] . "' where idtype ='" . $_POST['sub'] . "' ";
 $result = $mysqli->query($sql);
 }
 if ($mysqli->connect_error) {
 die("Connection failed: " . $mysqli->connect_error);
 }
 $sql ="select typename,price,img,idtype from type order by category_id";
 $result = $mysqli->query($sql);
?>
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
         
        </ul>
        <ul class="nav navbar-nav navbar-right">  
          <li><a href="logout.php">Log out <i class="glyphicon glyphicon-share"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <form action="admin.php" method="post">
    <div class="container">
<div class="row">
  <?php while($row = $result->fetch_assoc()) { ?>
  <div class="col-lg-4 col-sm-6">
    <div class="thumbnail">
      <p><center><?php echo $row["typename"]; ?></center></p>
      <img src=<?php echo $row['img'] ?>><h4> <?php echo $row["price"] ?>JD</h4>
      <center><input type="number" name=<?php echo  $row['idtype'];?> ></center>
     <center><button type="hidden" name="sub"class="btn btn-success" value =<?php echo $row['idtype'];  ?> >change</button></center>


    </div>
  </div>
  <?php } ?>
</div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</html>