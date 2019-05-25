<?php
    require ('./kernel/config.php');
    
    session_start();

    if(!isset($_SESSION["logged"]))
    {
        //recherche du joueur dans la liste
        try
        {
            $trouve = false;

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
    echo "Bienvenue ".$_SESSION["logged"].", vous êtes connecté !";
?>
<form action="index.php" method="post">
    <input id="logout" name="logout" type="hidden" value="logout">
    <input type="submit" value="Logout" />
</form>