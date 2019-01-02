<?php
session_start();
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="kontent">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>weapon shop</title>
		<link rel="stylesheet" href="styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Weapon Workshop</a>
        </div>
        <center>
            <div class="navbar-collapse collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li class="active">
                    	<a href="index.php">Home</a>
                    </li>
                    <li><a href="#">Store</a>
                    </li>
                    <li><a href="#">About Us</a>
                    </li>
                    <li><a href="#">Contact</a>            
                </ul>
                 <form class="navbar-form navbar-right" action="includes/login.inc.php" method="post" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="mailuid" placeholder="Username/E-mail...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pwd" placeholder="Password...">
                    </div>
                    <button type="submit" name="login-submit" class="btn btn-default">Log In</button>
                     <a href="signup.php">Sign Up</a>
                     <form action="includes/logout.inc.php" method="post">
                    <button class="btn btn-default" type="submit" name="logout-submit">Log Out</button>
                </form>
                </form>

      <!-- w wersji na gorze dziala, w wersji na dole nie dziala      
<?php
    if (isset($_SESSION['userId'])) {
      echo '  <form action="includes/logout.inc.php" method="post">
                    <button class="btn btn-default" type="submit" name="logout-submit">Log Out</button> ';
    } else {
      echo '  <form class="navbar-form navbar-right" action="includes/login.inc.php" method="post" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="mailuid" placeholder="Username/E-mail...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="pwd" placeholder="Password...">
                    </div>
                    <button type="submit" name="login-submit" class="btn btn-default">Log In</button>
                     <a href="signup.php">Sign Up</a>  ';
    }

  ?> -->
            </div>
        </center>
    </div>
</div>
  
    

  

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4" align="center">Witaj lowco!!</h1>
    <p class="lead">POZNAJ NAJNOWSZE MODELE BRONI DO MORDOWANIA BESTII I INNYCH PASKUDZTW NA ULICACH YHARNAM </p>
  </div>
</div>





	</header>

