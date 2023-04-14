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
            print_r($aids);
            foreach ($aids as $aid) {
                ?>
                <div class="card">
                    <h3 class="card-title"><?= $aid->getTitle() ?></h3>
                    <p class="card-resume"><?= $aid->getResume() ?></p>
                    <p class="card-description"><?= $aid->getDescription() ?></p>
                    <p class="card-organization_type"><?= $aid->getOrganizationType() ?></p>
                </div>
                <?php
            }
        ?>
    </div>
</body>
</html>
