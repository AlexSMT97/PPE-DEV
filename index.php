<?php
    session_start();

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/png" href="./kernel/img/icon3.png" />

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
					case 'bulletin':				require("./bulletin.php");				break;
					case 'recherche':				require("./recherche.php");				break;
					case 'deco':				require("./deco.php");				break;
					case 'e4':					require("./e4.php");				break;
					case 'e6':					require("./e6.php");				break;

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