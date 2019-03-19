<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<link rel = "stylesheet" type ="text/css"	href ="style_page_web.css"/>
		<link rel = "stylesheet" type ="text/css"	href ="style_Description_Jeux.css"/>
	</head>
	<body>
		<header>
			<?php 
				include "./bande_Haut.php";
			?>	
		</header>
		<section>
			<?php
     			include "./Connection.php";
     			$Jeux = $_GET['Jeux'] + 0;
			?>
			<?php
				include "./Titre.php";
			?>

			<p class="image">
			<?php
			echo '<img src="ImageJeux/Jeux' . substr('0' . $Jeux,-2) . '" alt=""/>';
			?>							
			</p>			
			<p>
			<?php
     			include "./description.php";
			?>
			</p>
		</section>
	</body>
	<sidebar>
  		<div>
     		<?php
     		include "./Navigation.php";
     		?>
 
		</div>
	</sidebar>
</html>
