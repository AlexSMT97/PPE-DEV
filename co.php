<?php
	//recherche du joueur dans la liste

		$trouve = false;
		$bdd = new PDO("mysql:host=sql27.main-hosting.eu;dbname=u907465831_gsb", "u907465831_gsb", "I8T9Qf58Vh2m");
		
	if ($_SESSION == NULL)
	{
		if($_POST != NULL)
		{
			$check_prenom = $bdd->query("SELECT * FROM prof WHERE prenom='". $_POST['prenom'] ."'");
			$check_prenom->setFetchMode(PDO::FETCH_OBJ);
			$check_prenom = $check_prenom->fetch();
			if($check_prenom != NULL)
				{								
					$check_email = $bdd->query("SELECT * FROM prof WHERE mail='". $_POST['email'] ."'");
					$check_email->setFetchMode(PDO::FETCH_OBJ);
					$check_email = $check_email->fetch();
					if($check_email != NULL)
						{								
							$check_mdp = $bdd->query("SELECT * FROM prof WHERE motdepasse='". $_POST['mdp'] ."'");
							$check_mdp->setFetchMode(PDO::FETCH_OBJ);
							$check_mdp = $check_mdp->fetch();
							if($check_mdp != NULL)
								{		
									$trouve = true;
									$_SESSION["logged"] = $_POST['prenom'];						
									echo '<div class="alert alert-success" role="alert">
										 cest bon
										</div>
							<div class="pageContent">
								<center>
									<h3><span>Bienvenue '. $_POST['prenom'] .'</span></h3><br />
								</center>
								<meta http-equiv="refresh" content="3;url=./index.php" />
							</div>	'
										;
								}
							else {
								echo'
								<div class="alert alert-danger" role="alert">
								  Maivaise mots de passe
								</div>';
								include ('kernel/form_co.php');
							}
						}
					else {
						echo'
						<div class="alert alert-danger" role="alert">
						  Maivaise email
						</div>';
						include ('kernel/form_co.php');
					}
				}
			else {
				echo'
				<div class="alert alert-danger" role="alert">
				  Mauvais prenom
				</div>';
				include ('kernel/form_co.php');
			}
		}
		else
		{
			include ('kernel/form_co.php');
		}
	}
?>
