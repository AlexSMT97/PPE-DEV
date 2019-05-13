<?php
error_reporting(0);
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

    <title>PPE-DEV</title>
  </head>
  <body>
	<?php 
		if ($_GET['page'] == 'connexion')
		{ 
			require("./module/connexion/connexion.php");
		}
		else 
		{
				include ('./kernel/menu.php');  
				include ('./kernel/slide.php'); 

			if ($_GET == null)
			{
				require("./module/start.php");
			}
			else
			{
				switch($_GET['page'])
				{
					case 'connexion':				require("./module/connexion/connexion.php");				break;
					case 'commentaire':				require("./module/commentaire/commentaire.php");			break;
					case 'bult':					require("./module/bult/bult.php");							break;

					default:					require("./module/start.php");						break;
				}
			}
		}
	?>

    <script src="./kernel/js/jquery-3.3.1.js" ></script>
    <script src="./kernel/js/popper.js"></script>
    <script src="./kernel/js/bootstrap.js"></script>
  </body>
</html>