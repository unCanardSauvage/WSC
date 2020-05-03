<!doctype html>

<html>

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



    <title>Projet BD</title>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000099;">

  <a class="navbar-brand" href="#">Nos supers héros !</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item">

        <a class="nav-link" href="index.php">Accueil </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="signup.php">Ajouter une personne </a>

      </li>

      <li class="nav-item active">

        <a class="nav-link" href="membre.php">Liste des personnes </a>

      </li>

    </ul>

  </div>

</nav>

<a href="mechant.php" class="btn btn-outline-light my-2 my-sm-0" role="button" >Signaler des personnes dangereuses pour la société civile</a>


<?php

//code afficher les personne inscrite


$bdd = new PDO('mysql:host=localhost;dbname=test;chharset=utf8', root);


$reponse = $bdd->query('SELECT Nom, Prenom, NomP FROM Personne NATURAL JOIN SuperPouvoir');


while ($donnees = $reponse->fetch())

{ 

?>  <div class="card flex-md-row mb-4 shadow-sm h-md-250">
    <div class="card-body d-flex flex-column align-items-start">
      <div class="container">
        <div class="row row-cols-1">
          <div class="col">
          <h3>
          <?php
            echo $donnees['Nom'] ;
          ?>
        </h3>
          </div>
          <div class="col">
            <h3>
          <?php
            echo $donnees['Prenom'];
          ?>
        </h3>
          </div>
          <div class="col">
            <h3>
          <?php
            echo $donnees['NomP'] ;
          ?>
        </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php

}

$reponse->closeCursor(); //*/
//$rep->closeCursor();

?>



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>