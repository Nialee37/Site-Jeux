<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Systeme de connexion</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel = "stylesheet" type ="text/css"	href ="style_page_web.css"/>
</head>
<body>
    <header>
			<?php 
				include "./bande_Haut.php";
			?>	
    </header>
  <div class="header">
  	<h2>Connexion</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nom de compte</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Mot de passe</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Connexion</button>
  	</div>
  	<p>
  		Pas encore de compte ? <a href="register.php">Créer un compte</a>
  	</p>
  </form>
</body>
</html>
