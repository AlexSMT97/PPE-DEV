
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">JLS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if ($_GET['page'] == NULL){echo "active";}?>">
        <a class="nav-link" href="./">
          <i class="fa fa-home"></i>
          Accueil
          </a>
      </li>
      <li class="nav-item <?php if ($_GET['page'] == 'commentaire'){echo "active";}?>">
        <a class="nav-link" href="./index.php?page=commentaire">
          <i class="fa fa-comments">
          </i>
          Commentaire
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled <?php if ($_GET['page'] == '???'){echo "active";}?>" href="#">
          <i class="fa fa-hashtag">
            <span class="badge badge-warning">??</span>
          </i>
          En cour...
        </a>
      </li>
      <li class="nav-item dropdown <?php if ($_GET['page'] == '???'){echo "active";}?>">
        <a class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-hashtag">
          </i>
          En cour...
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Jul</a>
          <a class="dropdown-item" href="#">Jul</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Jul</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="./index.php?page=connexion">
          <i class="fa fa-user">
          </i>
          Connexion
        </a>
      </li>
    </ul>
  </div>
</nav>