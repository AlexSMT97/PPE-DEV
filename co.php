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
<html>
    <head>
        <title>Mon Jeu</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./kernel/css/bootstrap.css">
	    <link rel="stylesheet" href="./kernel/css/menu.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    </head>
    <body>
        <section>
        <h3>Connexion</h3>
            <br />
            <br />
            <form action="prof.php" method="post">
                <input type="text" name="prenom" id="prenom" placeholder="Prénom" />
                <br />
                <br />
                <input type="text" name="email" id="email" placeholder="Adresse email" />
                <br />
                <br />
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
                <br />
                <br />
                <input type="submit" value="Login" />
            </form>
        </section>
<?php        
    include ('kernel/menu.php');  
	include ('kernel/slide.php'); 
?>
    <script src="./kernel/js/jquery-3.3.1.js" ></script>
    <script src="./kernel/js/popper.js"></script>
    <script src="./kernel/js/bootstrap.js"></script>

    </body>
</html>