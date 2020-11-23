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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
    <main id="main_index">
        <h1>Bienvenue</h1>

        <div class="cadre">
            <video class="video" controls width="820" height="405" loop>
                <source src="images/rick-astley-never-gonna-give-you-up-short-roll.mp4" type="video/mp4">
                Your browser does not support the video tag or the file format of this video. <a href="http://www.webestools.com/">http://www.webestools.com/</a>
            </video>
            <div class="text">
                <p>Never Gonna Give You Up est une chanson du chanteur Rick Astley tiré de son premier album Whenever You Need Somebody (1987). Son clip est devenu la base d'un phénomène Internet au début des années 2000, le rickroll.
                    <br /> Sortie : 1987<br />
                    Auteur : Mike Stock, Matt Aitken, Pete Waterman<br />
                    Label : PWL et RCA</p>
            </div>
        </div>

    </main>
    <?php
   
    if (isset($_SESSION['isconnected']) && $_SESSION['isconnected'] === true) 
    {
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
    } 
    else 
    {
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