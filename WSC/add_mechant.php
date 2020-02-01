
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

<p>
Fatal error: Uncaught PDOException: SQLSTATE[HY000] [2002] Une tentative de connexion a échoué car le parti connecté n’a pas répondu convenablement au-delà d’une certaine durée ou une connexion établie a échoué car l’hôte de connexion n’a pas répondu. in C:\xampp\htdocs\membre.php:97 Stack trace: #0 C:\xampp\htdocs\membre.php(97): PDO->__construct('mysql:host=172....', 'choupavinow', 'aeWoogha3xieDe') #1 {main} thrown in C:\xampp\htdocs\membre.php on line 97 </p>






<div class="container">

  <div class="row">

    <div class="col-15">

      <p> Je remplis le formulaire suivant :                                         </p>

    </div>

    <div class="col-6">


<form action="signup.php" method="post">





    <div class="row">

      <div class="col">

        <div class="form-group">

          <label for="exampleInputPassword1">Prénom</label>

          <input type="prenom" class="form-control" placeholder="David" name="prenom">

        </div>

      </div>

      <div class="col">

        <div class="form-group">

          <label for="exampleInputPassword1">Nom</label>

          <input type="Nom" class="form-control" placeholder="Lavait" name="nom">

        </div>

      </div>

    </div>




  <div class="form-group">

    <label for="exampleInputEmail1">Lieu</label>

    <input type="Nom" class="form-control" placeholder="madrid"  name="lieu">

    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

  </div>







  <div class="form-group">

    <label for="exampleInputEmail1">Type de crime</label>

    <input type="name" class="form-control" placeholder="consomme fréquemment des pizzas hawaïenne"  name="heure">

  </div>



  <div class="form-group">

    <label for="exampleInputEmail1">Heure</label>

    <input type="name" class="form-control" placeholder="une heure" name="heure">

  </div>

  

  <div class="form-group">

    <label for="exampleInputPassword1">Dangerosité</label>

    <input type="name" class="form-control" placeholder="Risque de consosommation de sushis mangue/fraise" name="date">

  </div>








  <button type="submit" class="btn btn-primary" href="mechant.php">Confirmer</button>

    <!-- <a class="nav-link" href="index.html"> <span class="sr-only">(current)</span> </a> -->



    <a href="mechant.php" class="btn btn-primary" role="submit" >Retour</a>

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













