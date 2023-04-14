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
        $fake = [
            [
                "id" => 1,
                "resume" => "Ceci est le résumé de l'article 1",
                "description" => "Ceci est la description de l'article 1",
                "title" => "cecie est le titre de l'article 1",
                "id_organization_type" => [
                    "id" => 1,
                    "label" => "aides"
                ]
            ], [
                "id" => 2,
                "resume" => "Ceci est le résumé de l'article 2",
                "description" => "Ceci est la description de l'article 2",
                "title" => "cecie est le titre de l'article 2",
                "id_organization_type" => [
                    "id" => 2,
                    "label" => "association"
                ]
            ], [
                "id" => 3,
                "resume" => "Ceci est le résumé de l'article 3",
                "description" => "Ceci est la description de l'article 3",
                "title" => "cecie est le titre de l'article 3",
                "id_organization_type" => [
                    "id" => 1,
                    "label" => "aides"
                ]
            ]
        ];

        foreach ($fake as $article) {
            echo '<div class="card">';
            echo '<div class="card-title">' . htmlspecialchars($article["title"]) . '</div>';
            echo '<div class="card-resume">' . htmlspecialchars($article["resume"]) . '</div>';
            echo '<div class="card-description">' . htmlspecialchars($article["description"]) . '</div>';
            echo '<div class="card-organization">Type d\'organisation: ' . htmlspecialchars($article["id_organization_type"]["label"]) . '</div>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html> 
