<?php
    session_start();

    if(!isset($_SESSION["logged"]))
    {
        //recherche du joueur dans la liste
        try
        {
            $trouve = false;
            $bdd = new PDO("mysql:host=sql27.main-hosting.eu;dbname=u907465831_gsb", "u907465831_gsb", "I8T9Qf58Vh2m");
            $req = $bdd->query('SELECT * FROM prof');
            while ($donnees = $req->fetch())
            {
                if($donnees['prenom'] == $_POST['prenom'] && $donnees['motdepasse'] == $_POST['mdp'] && $donnees['mail'] == $_POST['email'])
                {
                    $trouve = true;
                    $_SESSION["logged"] = $_POST['prenom'];
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
    echo "Bonjour ".$_SESSION["logged"].", vous êtes connecté !";
?>
<form action="index.php" method="post">
    <input id="logout" name="logout" type="hidden" value="logout">
    <input type="submit" value="Logout" />
</form>
    <li class="nav-item">
        <a class="nav-link" href="./kernel/img/Dab.png">
          <i class="fa fa-hashtag">
            <span class="badge badge-danger">1</span>
          </i>
          Bulletin (Solution 2)
        </a>
      </li>