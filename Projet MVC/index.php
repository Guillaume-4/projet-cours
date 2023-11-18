<?php
require_once('config/config.php');
require_once('app/controller/AuthController.php');
require_once('app/models/UserModel.php');

$controller = new AuthController();

// Ajoutez la logique pour déterminer quelle action effectuer (afficher le formulaire de connexion, d'inscription, etc.)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <header>
        <a href="/app/views/login.php">Login</a>
    </header>
    <h1>Bienvenue sur le projet VMC</h1>
</body>
</html>