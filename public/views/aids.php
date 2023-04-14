<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>YnHelp</title>
    <link rel="stylesheet" href="./public/css/header.css"/>
</head>
<body>

<?php require './public/templates/header.html'; ?>


<div style="display: flex; flex-direction: row; margin-top: 200px">
    <?php foreach ($aids as $aid) {
        $pictureName = $aid->getPictureName() == "" ? "default-user.jpg" : $aid->getPictureName() ?>
        <a href="/YnHelp/aids/<?= $aid->getId() ?>" style="margin: 25px">
            <div style="width: 18rem; border: 1px solid black; display: flex; flex-direction: column; padding: 15px">
                <img src="./public/assets/<?= $pictureName ?>" style="padding: 10px 10px 30px; margin-left: 4em"
                     alt="Image de l'article <?= $aid->getTitle() ?>">
                <div>
                    <h5><?= $aid->getTitle() ?></h5>
                    <p style="margin-top: 10px"><?= $aid->getResume() ?></p>
                </div>
            </div>
        </a>
    <?php } ?>
</div>


</body>
<?php require './public/templates/footer.html'; ?>
</html>
