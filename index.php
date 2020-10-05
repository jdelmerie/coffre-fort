<?
session_start();
require 'users.inc.php';
require 'login.inc.php';

// correspond à ce que saisit l'user
$user = $_POST['user'] ?? '';
$password = $_POST['password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // verif si ce qu'il a saisi correspond aux données login
    if (empty($user) || !array_key_exists($user, $users)) {
        echo "Impossible de vous identifier. Merci de réessayer.";
    } else if (empty($password) || $password != $users[$user]['password']) {
        echo "Impossible de vous identifier. Merci de réessayer.";
    } else {
        session_start();

        // tout est bon donc connexion
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        $_SESSION['time'] = time();

        // redirection sur la page correpondante à l'user
        header('location: coffre-fort.php');
    }
} 

// msg de déconnexion 
if (isset($_GET['message']) && $_GET['message'] == 'logout'){
    echo "Merci pour votre visite ! A bientôt !";
}

?>

</html>
