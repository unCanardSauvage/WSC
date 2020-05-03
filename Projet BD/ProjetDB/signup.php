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

      <li class="nav-item active">

        <a class="nav-link" href="signup.php">Ajouter une personne </a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="membre.php">Liste des personnes </a>

      </li>

    </ul>

  </div>

</nav>









<div class="container">

  <div class="row">

    <div class="col-15">

      <p> Je remplis le formulaire suivant :                                         </p>

    </div>

    <div class="col-6">

      

<?php
//,genre,pouvoir,mail,date,pays,ville,mdp

//,$genre,$pouvoir,$mail,$date,$pays,$ville

$bdd = new PDO('mysql:host=localhost;dbname=test;chharset=utf8', root);
 
if (!empty($_POST)) {   

$rep = $bdd->prepare('INSERT INTO personne (Nom,Prenom, idPouvoir) VALUES(?,?,?)');

$rep2 = $bdd->prepare('SELECT idPouvoir FROM SuperPouvoir WHERE NomP = (NomP) VALUES(?)');

$Nom = $_POST['nom']; 

$Prenom = $_POST['prenom']; 

$NomP =  $_POST['pouvoir'];

//$NomP = 'Force de baleine bleue';


$rep2->execute(array($NomP));

 echo $NomP;

$rep->execute(array($Nom,$Prenom,$NomP)); 

 } 
?>

<form action="signup.php" method="post">





    <div class="row">

      <div class="col">

        <div class="form-group">

          <label for="exampleInputPassword1">Prénom</label>

          <input type="prenom" class="form-control" placeholder="Georgette" name="prenom">

        </div>

      </div>

      <div class="col">

        <div class="form-group">

          <label for="exampleInputPassword1">Nom</label>

          <input type="Nom" class="form-control" placeholder="de la Courge du Lamberion de Givors" name="nom">

        </div>

      </div>

    </div>




  <div class="form-group">

    <label for="4">Pouvoir</label>

    <select class="form-control mr-sm-2" name="pouvoir">

      <option value="1">Pouvoir de l araignée</option>

      <option value="2">Contrôle des champs magnétique</option>

      <option value="3">Super sérum</option>

      <option value="4">Vitesse super sonique</option>

      <option value="5">Force de baleine bleue</option>

      <option value="6">Voler (mais que les sacs à main)</option>

      <option value="7">Super bond</option>

      <option value="8">Vision atypique (myopie sévère)</option>

      <option value="9">Invisibilité</option>

      <option value="10">Regénération</option>

      <option value="11">Camouflage</option>

      <option value="12">Résistance ultra-résistante</option>

      <option value="14">Intelligence Hippopotomonstrosesquippedaliophobique</option>

      <option value="NULL">Aucun</option>

    </select>

  </div>


<div class="form-group">

    <div class="form-check">

      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>

      <label class="form-check-label" for="invalidCheck">

        Conditions d'utilisation

      </label>

      <div class="invalid-feedback">

        You must agree before submitting.

      </div>

    </div>

  </div>



<a class="nav-link" href="condition.php"> prendre connaissance des conditions d'utilisation <span class="sr-only(current)"</span> </a>


  <p> Cliquer sur Confirmer pour envoyer le formulaire puis sur Retour afin de revenir sur la page d'accueil.</p>


  <button type="submit" class="btn btn-primary" href="index.php">Confirmer</button>

    <!-- <a class="nav-link" href="index.html"> <span class="sr-only">(current)</span> </a> -->



    <a href="index.php" class="btn btn-primary" role="submit" >Retour</a>

  </form>


    </div>

    <div class="col-15">

      </div>

    </div>

  </div>

</div>









    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>