<?php

	//recherche du joueur dans la liste

		$trouve = false;
		$bdd = new PDO("mysql:host=sql27.main-hosting.eu;dbname=u907465831_gsb", "u907465831_gsb", "I8T9Qf58Vh2m");
		
		
		$check_prenom = $bdd->query("SELECT * FROM prof WHERE prenom='". $_POST['prenom'] ."'");
		$check_prenom->setFetchMode(PDO::FETCH_OBJ);
		$check_prenom = $check_prenom->fetch();
		if($check_prenom->$_POST['prenom']== NULL)
			{								
				$check_email = $bdd->query("SELECT * FROM prof WHERE mail='". $_POST['email'] ."'");
				$check_email->setFetchMode(PDO::FETCH_OBJ);
				$check_email = $check_email->fetch();
				if($check_email->$_POST['email']== NULL)
					{								
						$check_mdp = $bdd->query("SELECT * FROM prof WHERE motdepasse='". $_POST['mdp'] ."'");
						$check_mdp->setFetchMode(PDO::FETCH_OBJ);
						$check_mdp = $check_mdp->fetch();
						if($check_mdp->$_POST['mdp']== NULL)
							{								
								echo '<div class="alert alert-success" role="alert">
									 cest bon
									</div>';
							}
						else {
							echo'
							<div class="alert alert-danger" role="alert">
							  Maivaise mots de passe
							</div>';
						}
					}
				else {
					echo'
					<div class="alert alert-danger" role="alert">
					  Maivaise email
					</div>';
				}
			}
		else {
			echo'
			<div class="alert alert-danger" role="alert">
			  Mauvais prenom
			</div>';
		}

?>
<link rel="stylesheet" href="./kernel/css/connexion.css">
<form class="form-signin" action="index.php?page=connexion" method="post">
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