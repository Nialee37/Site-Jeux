<ul class="serie-info">
<?php
	$ChaineLibelles="Catégorie :,Prix :,Lien d'achat :,Lien youtube :";
	$ChaineChamps="CatJeu,PrixJeu,LienJeu,urlYtJeu";

	$Libelle=explode(',',$ChaineLibelles);
	$champ=explode(',',$ChaineChamps);
    
	for ($a = 0; $a < sizeof($Libelle); $a++) {
		?>
		<li>
        
        
			<label><?php echo $Libelle[$a]?></label>
        
			<?php 
                echo '<span class="style-serie">';
        
				$req = $bdd->query('SELECT * FROM jeux WHERE idJeu='.$Jeux.'');
				while ($donne=$req -> fetch())
					{
                    
                        if ($champ[$a] == "LienJeu" || $champ[$a] == "urlYtJeu")
                        { 
                        }
                        else
                        {
                            echo $donne[$champ[$a]];                            
                        }
                    
                    
                    
                        if($champ[$a] == "LienJeu")
                            {
                                //echo $donne[$champ[$a]];
                                echo "<a class='lien' href='$donne[LienJeu]' target='_blank'>$donne[LienJeu]</a>"; 
                            }
                        if($champ[$a] == "urlYtJeu" )
                            {
                                echo "<a class='lien' href='$donne[urlYtJeu]' target='_blank'>$donne[urlYtJeu]</a>"; 
                            }
                    }
			echo '</span>';
			?>		
		</li>
	<?php } ?>
</ul>
