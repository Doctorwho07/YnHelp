<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public/css/header.css" />
    <link rel="stylesheet" href="../public/css/descriptionaids.css" />
    <title>Association</title>
  </head>
  <body>
    <?php require './public/templates/header.html'; ?>
    <div class="article">
      <h1><?= $aid->getTitle(); ?></h1>
      <img src="../public/assets/caf.png" alt="caf" />
      <p><?= $aid->getDescription(); ?></p>
      <p><a href="https://www.google.com/" target="_blank">Source</a></p>
    </div>
  </body>
</html>
