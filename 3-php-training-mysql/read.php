<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeux de société</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <h1>Liste des jeux de société</h1>
    <!-- Afficher la liste des jeux -->
    <?php
    include "inc/DBConnection.php";
    include "inc/Boardgame.php";
    $bdd = DBConnection::getInstance()->getConnection();

    $boardgames = $bdd->query('SELECT * FROM boardgames')->fetchAll();

    foreach ($boardgames as $key => $game) 
    {
      $boardgame= new Boardgame($game);
  
      $html = " 

      <div class='card' style='width: 18rem;'>

      <img class='card-img-top' src='$game[6]' alt='Card image cap'>

      <div class='card-body'>

      <h5 class='card-title'>$game[1]</h5>

      <p class='card-text'>Nombre de joueur Minimum : $game[2]</p>
      <p class='card-text'>Nombre de joueur Maximum : $game[3]</p>
      <p class='card-text'>Age du joueur Minimum : $game[4]</p>
      <p class='card-text'>Age du joueur Minimum : $game[5]</p>


      </div>
      </div>
      ";

      echo $html;
    }
  
    ?>
  </body>
</html>
