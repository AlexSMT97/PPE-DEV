<?php
    session_start();

    if(isset($_POST["logout"]))
    {
        session_destroy();
    }
?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="./kernel/img/icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./kernel/css/bootstrap.css">
	<link rel="stylesheet" href="./kernel/css/menu.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>PPE-SIO</title>
  </head>
  <body>
<?php
if(!isset($_SESSION["logged"]))
{
	//recherche du joueur dans la liste

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


}

?>


	<?php 
		if ($_GET['page'] == 'connexion')
		{ 
			require("./co.php");
		}
		else 
		{
				include ('kernel/menu.php');  
				include ('kernel/slide.php'); 

			if ($_GET == null)
			{
				require("start.php");
			}
			else
			{
				switch($_GET['page'])
				{
					case 'bulletin':				require("./bulletin.php");				break;
					case 'prof':				require("./prof.php");						break;
					case 'recherche':				require("./recherche.php");				break;

					default:					require("start.php");						break;
				}
			}
		}
	?>

    <script src="./kernel/js/jquery-3.3.1.js" ></script>
    <script src="./kernel/js/popper.js"></script>
    <script src="./kernel/js/bootstrap.js"></script>
  </body>
</html>