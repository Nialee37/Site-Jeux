<p class="titreJeux">
	<?php 
		$req = $bdd->query('SELECT * FROM jeux WHERE idJeu='.$Jeux .'');
		while ($donne=$req -> fetch())
			{
				echo $donne['NomJeu'];					
			}
	?>
</p>
			