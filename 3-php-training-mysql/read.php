<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
  </head>
  <body>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <?php
    include "inc/DBConnection.php";
    include "inc/Boardgame.php";

    $bdd = DBConnection::getInstance()->getConnection();
    $boardgames = $bdd->query('SELECT * FROM boardgames')->fetchAll();
    foreach ($boardgames as $key => $game) {
      $boardgame= new Boardgame($game);
      echo "<br/>";
      echo "Nom du jeu : ";
  
      echo $game[1];
      echo "<br/>";
      echo "<img src='$game[6]'>";
      echo "<br/>";
      echo "Nombre de joueur minimum : ";
      echo $game[2] ;
      echo "<br/>";
  
      echo "Nombre de joueur maximum : ";
      echo $game[3] ;
      echo "<br/>";
  
      echo "Age minimum du joueur : ";
      echo $game[4] ;
      echo "<br/>";
  
      echo "Age maximum du joueur : ";
      echo $game[5];
      echo "<br/>"; 
  
      echo "Image du jeu : ";
      echo $game[6];
      echo "<br/>";
    }
    ?>
  </body>
</html>
