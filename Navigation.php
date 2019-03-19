<nav>
	<ul id="menu_Nav">
		<li><a id="menu_Nav1" href="page_accueil.php" >Accueil</li>
		<?php
			$req = $bdd->query('SELECT NomJeu FROM jeux');
			$Somme = 0;
			while ($donne=$req -> fetch())
			{
		?>
				<li><a  href="description_Jeux.php?Jeux= <?php echo $Somme; ?>">
				</br>
		<?php 
				echo $donne[0]; 
				++$Somme;
		?>
				<BR>
		<?Php ;

			}
		?>
		</li>
	</ul>
</nav>
	