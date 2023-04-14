<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./public/css/login.css" />
	<title>Page de connexion</title>
</head>
<body>
	<h2>Connexion</h2>
	<form action="login.php" method="POST">
		<label for="username">Nom d'utilisateur:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Mot de passe:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="S'inscrire">
		<input type="submit" value="Se connecter">
	</form>
</body>
</html>
