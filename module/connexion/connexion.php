<link rel="stylesheet" href="./kernel/css/connexion.css">
<form class="form-signin" action="./module/prof.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
    <p>TEXT DU SEIGNEUR</p>
  </div>

  <div class="form-label-group">
    <input type="email" name='mailconnect' id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
    <label for="inputEmail">Email</label>
  </div>

  <div class="form-label-group">
    <input type="password" name='mdpconnect' id="inputPassword" class="form-control" placeholder="Password" required="">
    <label for="inputPassword">Mots de passe</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name='submit'>Connexion</button>
</form>