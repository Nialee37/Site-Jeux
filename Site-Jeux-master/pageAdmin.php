<html>
	<head>
		<title>Page d'acceuil</title>
		<link rel = "stylesheet" type ="text/css"	href ="style_page_admin.css"/>
        <link rel = "stylesheet" type ="text/css"	href ="style_page_web.css"/>
		<link rel = "stylesheet" type ="text/css"	href ="style_Description_Jeux.css"/>
            <?php 
				include "./bande_Haut.php";
			?>	
	</head>
	<body>
		<form name="bddJeux" method="POST">
			<fieldset>
				<legend>Jeux</legend>
                Nom du jeu : <input type="text" name="NomJeu" maxlength="40" placeholder=""><br>
				Categorie du jeu : <input type="text" name="categorie" maxlength="40" placeholder=""><br>
				Prix du jeu : <input type="text" name="prix" maxlength="40" placeholder=""><br>
				Lien d'achat : <input type="text" name="lienJeu" maxlength="40" placeholder=""><br>
				Lien youtube : <input type="text" name="lienYt" maxlength="40" placeholder=""><br>
				<!--Image : <input type="file" name="fichier[]" multiple="multiple"><br><br>-->		  	
				<input type="submit" name="valider" value="Valider">
			</fieldset>
		</form>
		<?php
			if(isset($_POST['valider']))
				{
					if((htmlspecialchars($_POST['NomJeu'] < "")) || (htmlspecialchars($_POST['categorie'] < "")) || (htmlspecialchars($_POST['prix'] < "")) || (htmlspecialchars($_POST['lienJeu'] < "")) || (htmlspecialchars($_POST['lienYt'] < "")) )
						{
							echo 'Veuillez entrer des valeurs correctes !';
						}
					else
						{
						include "./Connection.php";
					 	
  						    $NomJeu = $_POST["NomJeu"];
                            $Categorie = $_POST["categorie"];
                            $Prix = $_POST["prix"];
                            $lienJeu = $_POST["lienJeu"];
                            $lienYt = $_POST["lienYt"];

 			
 					 	 $req = $bdd->prepare('INSERT INTO jeux(NomJeu, CatJeu, PrixJeu, LienJeu, urlYtJeu) VALUES(:NomJeu, :Categorie, :Prix, :lienJeu, :lienYt)');
                            $req->execute(array(
                                'NomJeu' => $NomJeu,
                                'Categorie' => $Categorie,
                                'Prix' => $Prix,
                                'lienJeu' => $lienJeu,
                                'lienYt' => $lienYt,
							 ));
					echo 'Les données on bien était enregistré';					
				}
			}

		?>
	</body>
</html>