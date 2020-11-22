<?php
            session_start();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <ul id="menu-deroulant">
            <li><a href="index.php">Accueil</a></li>
            <?php
            if (isset($_SESSION['isconnected']) && $_SESSION['isconnected'] === true) {
                echo <<<HTML
            <li><a href="profil.php">Profil</a>
            <li><a href="commentaire.php">Commentaire</a></li>

            HTML;
            
            }
            ?>
            <li><a href="livre-or.php">Livre d'or</a></li>
        </ul>
    </header>
    <main>

<?php

$bdd = mysqli_connect('localhost', 'root', '', 'livreor');// je me connecte a ma bdd

var_dump($_SESSION);

$sql_pseudo = "SELECT u.login, c.date, c.commentaire FROM utilisateurs AS u 
INNER JOIN commentaires AS c WHERE c.id_utilisateur = u.id ORDER BY c.date DESC";
$sql_result = mysqli_query($bdd,$sql_pseudo);


echo "<table style='border: 1px black solid'>";
while($commentaire_display = mysqli_fetch_assoc($sql_result)){

    echo "<tr style='border: 1px black solid'><td style='border: 1px black solid'>". htmlspecialchars($commentaire_display['login']) . "</td><td>" . htmlspecialchars($commentaire_display['date']) . "</td><td>" . htmlspecialchars($commentaire_display['commentaire']) . "</td></tr>";
}
var_dump($_SESSION);
echo "</table>";
?>

    </main>

    <?php



    if (isset($_SESSION['isconnected']) && $_SESSION['isconnected'] === true) {
        echo "<footer>";
        echo "<p> Bonjour " . $_SESSION['utilisateur'] . "</p>";
        echo " <form method=post>";
        echo " <input type='submit' name='disconnect' value='déconnexion'>";
        echo " </form>";
        echo '</footer>';
        if (isset($_POST['disconnect'])) {
            session_destroy();
            header("Location: index.php");
        }
    } else {
        echo <<<HTML
        <footer>
        <ul id="menu-deroulant" class="foot">
            <li><a href="inscription.php">Inscription</a>
            <li><a href="connexion.php">Connexion</a>
        </ul>
        </footer>  
        HTML;
    }
    ?>
</body>

</html>