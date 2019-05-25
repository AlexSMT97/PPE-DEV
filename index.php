<?php
    session_start();

    if(isset($_POST["logout"]))
    {
        session_destroy();   
    }

    if(isset($_SESSION["logged"]))
    {
        header("Location:prof.php");   
    }
?>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./kernel/css/bootstrap.css">
	<link rel="stylesheet" href="./kernel/css/menu.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>PPE-SIO</title>
  </head>
  <body>
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
					case 'connexion':				require("./co.php");				break;
					case 'commentaire':				require("./module/commentaire/commentaire.php");				break;
					case 'prof':				require("./prof.php");				break;

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