<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/aids.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />

    <title>Cartes d'articles</title>
</head>
<body>
    <div class="container">
        <?php
            foreach ($aids as $aid) {
                
                    ?>
                        <div class="card"> 
                            <a1 href="/YnHelp/aids/<?= $aid->getId() ?>">
                            <h4 class="card-title"><?= $aid->getTitle() ?></h3>
                            <p1 class="card-resume"><?= $aid->getResume() ?></p1>
                            <p1 class="card-description"><?= $aid->getDescription() ?></p1>
                            <div class="card-image-container">
                        <?php   
                            $pictureName = $aid->getPictureName() == "" ? "default-user.jpg" : $aid->getPictureName() 
                        ?>
                            <img class="card-picture" src="./public/assets/<?= $pictureName ?>" alt="Image de l'article">
                            </div>
                        </div>
                    </a1>
                    <?php
            }
        ?>
    </div>
</body>
<?php require './public/templates/footer.html'; ?>
</html>
