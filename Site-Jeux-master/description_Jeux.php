<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<link rel = "stylesheet" type ="text/css"	href ="style_page_web.css"/>
		<link rel = "stylesheet" type ="text/css"	href ="style_Description_Jeux.css"/>
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        
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
