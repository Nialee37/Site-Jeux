<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Les Jeux</title>
		<link rel = "stylesheet" type ="text/css"	href ="style_page_web.css"/>
	</head>
	<body>
		<header>
			<p class="titre"><img src="Images\titre.jpg" alt""/></p>
		</header>
		<section class="image">
		<?php
		$compte = 0;
		echo '<ul>';
		if($dossier = opendir('./ImageJeux'))
			{
			while(false !== ($fichier = readdir($dossier)))
				{
				if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
					{									
					echo '<a href="description_Jeux.php?Jeux=' .$compte .'"><img src="ImageJeux/' . $fichier . '" alt=""/>';
					echo '&nbsp';

						if(($compte % 2) == 1)
						{
							echo '</br></br>';					
						}
					$compte++;
					} 
 
				}
			echo '</ul><br />'; 
			closedir($dossier);
		}
		else
		{
			echo 'Le dossier n\' a pas pu être ouvert';
		}
		?>	
		</section>	
	</body>	
</html>