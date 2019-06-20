<?php
    if(isset($_POST["logout"]))
    {
        session_destroy();   
    }

    if(isset($_SESSION["logged"]))
    {
        header("Location:index.php");   
    }
?>
<link rel="stylesheet" href="./kernel/css/connexion.css">
<form class="form-signin" action="index.php" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
    <p></p>
  </div>

  <div class="form-label-group">
    <input type="text" name="prenom" id="prenom" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Prénom</label>
  </div>

  <div class="form-label-group">
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="mdp" id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Mots de passe</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Connexion</button>
</form>