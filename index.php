<?php
	require "header.php";
	?>

	<main>
		<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  
  <div class="carousel-inner" align="center">

    <div class="item active">
      <img src="img/saw_cleaver.jpg" alt="SAW CLEAVER" width="350" height="350">
    </div>

    <div class="item">
      <img src="img/ludwig_blade.jpg" alt="LUDWIG HOLY SWORD" width="350" height="350">
    </div>

    <div class="item">
      <img src="img/boom_hammer.jpg" alt="BOOM HAMMER" width="350" height="350">
    </div>

     <div class="item">
      <img src="img/chikage.jpg" alt="KATANA" width="350" height="350">
    </div>

     <div class="item">
      <img src="img/repeating_pistol.jpg" alt="PISTOLET" width="350" height="350">
    </div>

  </div>


  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <?php
    if (isset($_SESSION['userId'])) {
      echo '  <p>You are logged in</p>  ';
    } else {
      echo '  <p> You are not logged in</p>  ';
    }

  ?>
			</main>


<?php
	require "footer.php";
	