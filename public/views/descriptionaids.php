<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/header.css" />
    <link rel="stylesheet" href="../public/css/descriptionaids.css" />
    <title>❤️ Association ❤️</title>
  </head>
  <body>
  <?php require './public/templates/header.html'; ?>
  <div class="article"> <h1>
     <p><?= $aid->getTitle(); ?></p>
    <img src="../public/assets/caf.png" alt="caf.pnj">
    <p><?= $aid->getDescription(); ?></p>
    
    <p><a href="https://www.google.com/"target="_blank">Source</a></p>
  </div>
  </h1>
  
  </body>
</html>
