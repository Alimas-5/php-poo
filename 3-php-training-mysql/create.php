<?php
include "inc/DBConnection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter un jeu de société</title>
</head>
<body>
	<?php
		if('POST' == $_SERVER['REQUEST_METHOD']) {
			
			try{
				$name = $_POST['name'];
				$players_min = $_POST['player_min'];
				$players_max = $_POST['player_max'];
				$age_min = $_POST['age_min'];
				$age_max = $_POST['age_max'];
				$picture = $_POST['picture'];
				
                $sql = "INSERT INTO boardgames (name, players_min, players_max, age_min, age_max, picture) 
						VALUES('$name','$players_min','$players_max','$age_min','$age_max','$picture')";
                $bdd = DBConnection::getInstance()->getConnection();
                $bdd->prepare($sql);
				$bdd->execute(array(':name' => $name,':player_min' => $players_min,':player_max' => $players_max,':age_min' => $age_min,':age_max' => $age_max,':picture' => $picture));
                echo 'Entrée ajoutée dans la table';
			}
			
			catch(PDOException $e){
				echo "Erreur : " . $e->getMessage();
			  }
		}
	?>
	<a href="./read.php">Liste des jeux</a>
	<h1>Ajouter un jeu de société</h1>
	<form action="#" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>
		<div>
			<label for="min_age">Min Age</label>
			<input type="number" name="min_age" value="">
		</div>
		<div>
			<label for="max_age">Max Age</label>
			<input type="number" name="max_age" value="">
		</div>
		<div>
			<label for="min_players">Min Players</label>
			<input type="number" name="min_players" value="">
		</div>
		<div>
            <label for="max_players">Max Players</label>
            <input type="number" name="max_players" value="">
        </div>
		<div>
			<label for="picture">URL of a picture</label>
			<input type="text" name="picture" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
