<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>YnHelp</title>
    <link rel="stylesheet" href="./public/css/home.css" />
    <link rel="stylesheet" href="./public/css/user.css" />
    <link rel="stylesheet" href="./public/css/header.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
  </head>
  <body>
    <?php require './public/templates/header.php'; ?>

    <div class="background"></div>
    <div class="container">
      <div class="window">
        <div class="userinfo">
          <div class="abc">
          <div class="picture"></div>
          <a href="/ynHelp/disconnected">Déconnexion</a>
          </div>
          <h3><?= $user->getUsername() ?></h3>
          <h3><?= $user->getEmail() ?></h3>
          <h3><a href="/ynHelp/passforget" style="color: white">Mot de passe oublié</a></h3>
        </div>
        <div class="separator"></div>
        <div class="articles"></div>
      </div>
    </div>
  </body>
  <?php require './public/templates/footer.html'; ?>
</html>
