<?
require 'users.inc.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffre fort</title>
</head>

<body>
    <h1>Le coffre-fort</h1>

    <p>Pour accéder à votre coffre-fort, veuillez d'abord vous authentifier : </p>
 
    <form method="POST">
        <input type="text" name="user" placeholder="utilisateur">
        <input type="password" name="password" placeholder="mot de passe">
        <input type="submit" value="Se connecter">
    </form>
    <hr>
</body>