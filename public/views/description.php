<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>YnHelp</title>
    <link rel="stylesheet" href="../public/css/descriptionaids.css"/>
    <link rel="stylesheet" href="./public/css/home.css"/>
</head>
<body>
<?php require './public/templates/header.php'; ?>

<div class="article">
    <h1>
        <p><?= $aid->getTitle(); ?></p>
    </h1>
    <img src="<?= '../public/assets/' . $aid->getPictureName() ?>" alt="caf.pnj"/>
    <p><?= $aid->getDescription(); ?></p>
    <p><a href="<?= $aid->getSource(); ?>" target="_blank">Source</a></p>
</div>

</body>
<?php require './public/templates/footer.html'; ?>
</html>
