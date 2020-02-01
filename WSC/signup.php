<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Je m'engage</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000099;">
  <a class="navbar-brand" href="#">Recrutation de héros !</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="presentation.php">Présentation </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profils
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="membre.php">Liste des inscrits</a>
          <a class="dropdown-item" href="test.php">Ai-je un super pouvoir ?</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <a href="signin.php" class="btn btn-outline-light my-2 my-sm-0" role="button" >Connexion</a>
    </form>
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
$bdd = new PDO('mysql:host=172.24.43.180;dbname=choupavinow;chharset=utf8','choupavinow','aeWoogha3xieDe');
 if (!empty($_POST)) {	 
$rep = $bdd->prepare('INSERT INTO utilisateur (nom ,prenom,email,mot_de_passe,pouvoir) VALUES(?,?,?,?,?)');
$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$email = $_POST['mail'];
$mot_de_passe = $_POST['mdp2'];
/*$genre = $_POST['genre'];
*/$pouvoir =  $_POST['pouvoir'];/*
$date_naissance = $_POST['date'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];*/
$rep->execute(array($nom,$prenom,$email,$mot_de_passe,$pouvoir)); 
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
    <label for="3">Genre</label>
    <select class="form-control" name="genre">
      <option>Non binaire</option>
      <option>Femmelette</option>
      <option>Bonhomme</option>
    </select>
  </div>

  <div class="form-group">
    <label for="4">Pouvoir</label>
    <select class="form-control mr-sm-2" name="pouvoir">
      <option>vitesse super sonique</option>
      <option>force de baleine bleue</option>
      <option>voler (mais que les sacs à main)</option>
      <option>super bond</option>
      <option>vision atypique</option>
      <option>invisibilité</option>
      <option>regénération</option>
      <option>camouflage</option>
      <option>résistance ultra-résistante</option>
      <option>intelligence hippopotomonstrosesquippedaliophobique</option>
      <option>autres...je remplirai le questionnaire, promis</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" placeholder="mon@adresse.electronique"  name="mail" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Date de naissance</label>
    <input type="date" class="form-control" name="date">
  </div>
  

    <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="exampleInputPassword1">Pays</label>
          <input type="pays" class="form-control" placeholder="Ouzbékistan" name="pays">
        </div>
      </div>
      <div class="col">
        <div class="form-group">
          <label for="exampleInputPassword1">ville</label>
          <input type="ville" class="form-control" placeholder="Tachkent" name="ville">
        </div>
      </div>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" placeholder="xxxxxxxxx"name="mdp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirmer le mot de passe</label>
    <input type="password" class="form-control" placeholder="Pour protéger contre les fautes de frappes !" name="mdp2">
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

      <a href="signin.php" class="btn btn-outline-light my-2 my-sm-0" role="button" >Connexion</a>


<a class="nav-link" href="index.php">Se connecter <span class="sr-only(current)"</span> </a>


  <button type="submit" class="btn btn-primary" href="index.php">Confirmer</button>
    <!-- <a class="nav-link" href="index.html"> <span class="sr-only">(current)</span> </a> -->

    <a href="index.php" class="btn btn-primary" role="submit" >Connexion</a>
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