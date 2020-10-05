<?require 'users.inc.php';

session_start();

if (!isset($_SESSION['user'])) {
    echo "<h2>Impossible d'accéder à cette page sans être connecté</h2>";
    echo "<a href='index.php'>Revenir à l'accueil</a>"; 
} else {
    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
    $heure_session = $_SESSION['time']; // temps de connexion
    $heure_connexion = strftime('%A %d %B %Y à %H:%M:%S', $heure_session); // met en format fr
    $clientIP = $_SERVER['REMOTE_ADDR']; // recup l'ip du client

    $coffreList = $users[$_SESSION['user']]; // définit un nouveau tableau
    $coffre = array_slice($coffreList, 1, count($coffreList) - 1, true); // supprimer le premier élément (password)

    ?>
<h1>Bonjour <?=$_SESSION['user']?> ! Bienvenue dans votre coffre-fort !</h1>

<i>Vous vous êtes connecté le <?=$heure_connexion?> depuis l'adresse IP <?=$clientIP?>.</i>

<h2>Voici le contenu de votre coffre</h2>
<ul>
    <?foreach ($coffre as $fortune => $montant) {?>
    <li><?=ucfirst($fortune)?> : <?=$montant?></li>
    <?}?>
</ul>

<a href="logout.inc.php">Fermer le coffre (se déconnecter)</a>
<?}