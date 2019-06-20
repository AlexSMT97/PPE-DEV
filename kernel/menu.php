<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">PPE-SIO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($_GET['page'] == NULL){echo "active";}?>">
        <a class="nav-link" href="index.php">
          <i class="fa fa-home"></i>
          Accueil
          </a>
      </li>
	<?php 
		if ($_SESSION == true)
		{
			echo '
				  <li class="nav-item">
					<a class="nav-link ';
			if ($_GET['page'] == 'bult'){echo "active";} 
			echo '" href="./kernel/img/dab.png">
            <i class="fa fa-hashtag">
            <span class="badge badge-danger">11</span>
					  </i>
					  Bulletin
					</a>
				  </li>';
			}
    ?>
 <?php 
		if ($_SESSION == true)
		{
			echo '
				  <li class="nav-item">
					<a class="nav-link ';
			if ($_GET['page'] == 'bult'){echo "active";} 
			echo '" href="https://www.youtube.com/watch?v=X6MxGJ7qxck">
            <i class="fa fa-hashtag">
            <span class="badge badge-danger">12</span>
					  </i>
					  Bulletin (Solution 2)
					</a>
				  </li>';
			}
    ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=bulletin">
          <i class="fa fa-search">
            <span class="badge badge-danger">11</span>
          </i>
          Recherche
        </a>
      </li>
    </ul>
	<?php 
		if ($_SESSION == false)
		{
			echo '
				<ul class="navbar-nav ">
				  <li class="nav-item">
					<a class="nav-link" href="./index.php?page=connexion">
					  <i class="fa fa-user">
					  </i>
					  Connexion
					</a>
				  </li>
				</ul>';
		}
		else 
		{
			echo '
				<ul class="navbar-nav ">
				  <li class="nav-item">
					<a class="nav-link" href="./index.php">
					  <i class="fa fa-user">
					  </i>
					  Déconnexion
					</a>
				  </li>
				</ul>';
		}
    ?>
  </div>
</nav>
