<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>YnHelp</title>
    <link rel="stylesheet" href="./public/css/home.css" />
    <link rel="stylesheet" href="./public/css/header.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
  </head>
  <body>
    <?php require './public/templates/header.html'; ?>

    <div class="background"></div>
    <div class="container">
      <div class="title">
        <h1><span>YnHelp</span></h1>
      </div>
      <div class="presentation">
        <h5>
          Notre site est dédié aux aides et associations pour soutenir les
          étudiants. Nous sommes là pour vous aider à trouver les ressources
          dont vous avez besoin, que ce soit pour de l'aide financière, du
          soutien psychologique ou de l'orientation professionnelle. Nous
          offrons des informations à jour sur les différentes ressources
          disponibles afin que vous puissiez prendre des décisions éclairées
          pour réussir dans vos études et atteindre vos objectifs académiques et
          personnels.
        </h5>
      </div>
    </div>
    <section>
      <div class="equipe">
        <h1>L'équipe</h1>
      </div>
      <div class="equipe-container">
        <div class="member">
          <div class="alexis"></div>
          <h3>Alexis ROUCHES</h3>
          <p>B1 informatique</p>
        </div>
        <div class="member">
          <div class="chouaib"></div>
          <h3>Chouaib KOUYATI</h3>
          <p>B1 informatique</p>
        </div>
        <div class="member">
          <div class="ozlem"></div>
          <h3>Ozlem CAN</h3>
          <p>B3 cybersécurité</p>
        </div>
        <div class="member">
          <div class="robin"></div>
          <h3>Robin VITTE</h3>
          <p>B3 infra</p>
        </div>
        <div class="member">
          <div class="thomas"></div>
          <h3>Thomas CHAD</h3>
          <p>B2 informatique</p>
        </div>
        <div class="member">
          <div class="johan"></div>
          <h3>Johan ROUSSEAU</h3>
          <p>B3 dev</p>
        </div>
      </div>
    </section>
  </body>
  <?php require './public/templates/footer.html'; ?>
</html>
