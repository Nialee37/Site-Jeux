<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>JVF</title>
		<link rel = "stylesheet" type ="text/css"	href ="style_Tome.css"/>
	</head>
	<body>
		<header>
			<p class="titre"><img src="Images\titre.jpg" alt""/></p>	
		</header>
		<section>
			<?php					
					$bdd = new PDO('mysql:host=localhost;dbname=bddjeux;charset=utf8', 'root', '');
					$Jeux = $_GET['Jeux'] + 1;
					 ?>

			<p class="image">
			<?php
			echo '<img src="ImageJeux/Jeux' . substr('0' . $Jeux,-2) . '" alt=""/>';
			?>							
			</p>
			<p>
				<span class="titreBd">
				<?php 
						$req = $bdd->query('SELECT * FROM jeux WHERE idJeu='.$Jeux .'');
						while ($donne=$req -> fetch())
							{
								echo $donne['NomJeu'];					
							}
				?>
				</span>
			</p>
			<p>
				<ul class="serie-info">
					<?php
						$ChaineLibelles="Catégorie :,Prix :,Lien d'achat :,Lien youtube :";
						$ChaineChamps="CatJeu,PrixJeu,LienJeu,urlYtJeu";
						//$ChaineClasses="style-serie,style-serie,style-serie,style-serie";

						$Libelle=explode(',',$ChaineLibelles);
						$champ=explode(',',$ChaineChamps);
						//$Classe=explode(',',$ChaineClasses);
						$Classe ="style-serie";
						for ($a = 0; $a < sizeof($Libelle); $a++) {
					?>
					<li>
						<label><?php echo $Libelle[$a]?></label>				
						<?php echo '<span class="'.$Classe[$a] . '">';
							$req = $bdd->query('SELECT * FROM jeux WHERE idJeu='.$Jeux.'');
							while ($donne=$req -> fetch())
								{
									echo $donne[$champ[$a]]; 
								}
						?>
						</span>
					</li>
					<?php } ?>

				</ul>
				<!--<p class="resume">
				<?php
					$req = $bdd->query('SELECT * FROM Jeux WHERE idJeu='.$Jeux.'');
					while ($donne=$req -> fetch())
						{
							echo $donne['Resume'];	

						}
				?>-->							
				</p>
			</p>
		</section>
	</body>
	<sidebar>
  		<div>
     		<nav>
        		<ul id="menu">
        		 	<li><a id="menu1" href="page_accueil.php" >Accueil</li>
            		<?php
						$req = $bdd->query('SELECT TitreBd FROM bd');
						$Somme = 0;
						while ($donne=$req -> fetch())
						{
							?><li
							><a  href="description_tome.php?Tome= <?php echo $Somme; ?>">
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
 
		</div>
	</sidebar>
</html>
