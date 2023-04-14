<?php
// Initialiser les variables à vide
$username = "";
$email = "";
$password = "";
$confirm_password = "";

// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Valider les données envoyées
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);

    // Vérifier si les champs sont remplis
    if(empty($username)){
        $username_err = "Veuillez entrer un nom d'utilisateur.";
    }

    if(empty($email)){
        $email_err = "Veuillez entrer une adresse email.";
    }

    if(empty($password)){
        $password_err = "Veuillez entrer un mot de passe.";
    }

    if(empty($confirm_password)){
        $confirm_password_err = "Veuillez confirmer le mot de passe.";
    }

    // Vérifier si les mots de passe correspondent
    if($password != $confirm_password){
        $confirm_password_err = "Les mots de passe ne correspondent pas.";
    }

    // Si toutes les conditions sont remplies, inscrire l'utilisateur
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        // Insérer les données dans la base de données

        // Rediriger l'utilisateur vers une page de confirmation
        header("location: confirmation.php");
    }
} ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SiginUser</title>
</head>
<body>
    <div class="container">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <p>Creer un compte</p>
          <input type="username" placeholder="UserName"><br>
          <input type="email" placeholder="Email"><br>
          <input type="password" placeholder="Mot de passe"><br>



          <input type="submit" value="Inscription"><br>
        </form>
      
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
      </div>
</body>

<style>

body {
    background: linear-gradient(45deg, #FC466B, #3F5EFB);
    height: 100vh;
    font-family: arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  
  .container {
    position: relative;
  }


  form {
    background: rgba(255, 255, 255, .3);
    padding: 3rem;
    height: 450px;
    border-radius: 20px;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    -moz-backdrop-filter: blur(10px);
    box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
    text-align: center;
  }

  p {
    color: white;
    font-weight: 500;
    opacity: .7;
    font-size: 1.4rem;
    margin-bottom: 60px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  }
    
  a {
    text-decoration: none;
    color: #ddd;
    font-size: 12px;
  }
  
  a:hover {
    text-shadow: 2px 2px 6px #00000040;
  }
  
  a:active {
    text-shadow: none;
  }



  input {
    background: transparent;
    border: none;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    padding: 1rem;
    width: 200px;
    border-radius: 50px;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    -moz-backdrop-filter: blur(5px);
    box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
    color: white;
    font-weight: 500;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
    transition: all .3s;
    margin-bottom: 2em;
  }

  input:hover,
  input[type="email"]:focus,
  input[type="password"]:focus{
    background: rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
  }
      
  input[type="button"] {
    margin-top: 10px;
    width: 150px;
    font-size: 1rem;
    cursor: pointer;
  }
  
  ::placeholder {
    color: #fff;
  }

.drop {
    background: rgba(255, 255, 255, .3);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 10px;
    border-left: 1px solid rgba(255, 255, 255, .3);
    border-top: 1px solid rgba(255, 255, 255, .3);
    box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
    position: absolute;
    transition: all 0.2s ease;
  }

  .drop-1 {
    height: 80px; width: 80px;
    top: -20px; left: -40px;
    z-index: -1;
  }
  
  .drop-2 {
    height: 80px; width: 80px;
    bottom: -30px; right: -10px;
  }
  
  .drop-3 {
    height: 100px; width: 100px;
    bottom: 120px; right: -50px;
    z-index: -1;
  }
  
  .drop-4 {
    height: 120px; width: 120px;
    top: -60px; right: -60px;
  }
  
  .drop-5 {
    height: 60px; width: 60px;
    bottom: 170px; left: 90px;
    z-index: -1;
  }
</style>
</html>

