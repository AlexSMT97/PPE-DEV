<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=test-ppe', 'root', '');

    session_start();

    if(!isset($_SESSION["logged"]))
    {
        //recherche du joueur dans la liste
        try
        {
            $trouve = false;
            $req = $bdd->query('SELECT * FROM players');
            while ($donnees = $req->fetch())
            {
                if($donnees['nickname'] == $_POST['pseudo'] && $donnees['password'] == $_POST['mdp'])
                {
                    $trouve = true;
                    $_SESSION["logged"] = $_POST['pseudo'];
                }
            }

            if(!$trouve)
            {
                header("Location:index.php");
            }
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    }
    echo "Bienvenue ".$_SESSION["logged"].", vous êtes connecté !";
?>
<link rel="stylesheet" href="./kernel/css/connexion.css">
<form class="form-signin" action="index.php" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
    <p>TEXT DU SEIGNEUR</p>
  </div>

  <div class="form-label-group">
    <input type="email" name='mailconnect' id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" name='mdpconnect' id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Mots de passe</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Connexion</button>
</form>