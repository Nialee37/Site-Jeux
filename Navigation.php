<nav>
	<ul id="menu_Nav">
		<li><a id="menu_Nav1" href="page_accueil.php" >Accueil</li>
		<?php
			$req = $bdd->query('SELECT NomJeu FROM jeux');
			$Somme = 0;
			while ($donne=$req -> fetch())
			{
		?>
        <li><a class="lienNav" href="description_Jeux.php?Jeux= <?php echo $Somme; ?>">
				<br>
		<?php 
				echo $donne[0]; 
				++$Somme;
		?>
				<br>
		<?Php ;

			}
		?>
            </a>
        </li>
	</ul>
</nav>
	