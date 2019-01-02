<?php
	require "header.php";
	?>

	<main>
			<div class="container" style="margin-top:50px">
  <div class="row">
    <div class="col-md-4">
    	<h1>REJESTRACJA!!</h1>
		<form class="form-signup" action="includes/signup.inc.php" method="post">
			<input type="text" name="uid" placeholder="Username"><br>
			<input type="text" name="mail" placeholder="Email"><br>
			<input type="password" name="pwd" placeholder="PASSWORD"><br>
			<input type="password" name="pwd-confirm" placeholder="CONFIRM PASSWORD"><br>
			<button class="btn btn-default" type="submit" name="signup-submit">Sign up</button>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-8 col-xs-12">
      <p></p>
      <p></p>
    </div>
    <div class="col-md-4 col-lg-4 col-sm-8 col-xs-12">
      <p><strong>TYLKO</strong> dzieki rejestracji bedziesz mogl przegladac najnowsze modele broni!!!</p>
      <p>Nie zwlekaj ani <em>chwili</em> dluzej!!!</p> 
    </div>
  </div>
</div>
	</main>


<?php
	require "footer.php";
	

