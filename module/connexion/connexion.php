<link rel="stylesheet" href="./kernel/css/connexion.css">
<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = '". $_POST['mailconnect'] ."' AND motdepasse = '". $_POST['mdpconnect'] ."'");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<form class="form-signin" method="POST" action="index.php?page=connexion">
  <div class="text-center mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
    <p>TEXT DU SEIGNEUR</p>
  </div>

  <div class="form-label-group">
    <input type="email" id="inputEmail" class="form-control" name="mailconnect" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" name="mdpconnect" placeholder="Password" required="">
    <label for="inputPassword">Mots de passe</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="formconnexion" type="submit">Connexion</button>
</form>
<?php
    if(isset($erreur)) 
	{
        echo '<font color="red">'.$erreur."</font>";
    }
?>