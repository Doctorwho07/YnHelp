<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/aids.css" />
    <title>Cartes d'articles</title>
</head>
<body>
    <div class="container">
        <?php
                foreach ($aids as $aid) {
                    ?>
                    <div class="card">
                        <h1>TEST</h1>
                        <h3 class="card-title"><?= $aid->getTitle() ?></h3>
                        <p class="card-resume"><?= $aid->getResume() ?></p>
                        <p class="card-description"><?= $aid->getDescription() ?></p>
                    </div>
                    <?php
                    }
        ?>
    </div>
</body>
</html>
