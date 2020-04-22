<?php

session_start();

if (isset($_GET['deco'])) {
    session_destroy();
}

switch ($_SERVER['REQUEST_URI']) {
    case '/Confinement/index.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/accueil.jpg);
            }
            </style>";
    break;
        
    case '/Confinement/coronaclicker.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/jeux.jpg);
            }
            </style>";
    break;

    case '/Confinement/kitchen.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/cuisine.jpg);
            }
            </style>";
    break;

    case '/Confinement/origami.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/origami.jpg);
            }
            </style>";
    break;

    case '/Confinement/discussion.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/comm.jpg);
            }
            </style>";
    break;

    case '/Confinement/connection.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/connection.jpg);
            }
            </style>";
    break;

    case '/Confinement/profil.php':
        echo "<style type=\"text/css\">
            .header {
                background-image: url(images/profil.jpg);
            }
            </style>";
    break;

}

?>

<section class="header sectionhead">

<img class="imglogohead imagelogo2" src="images/logo.png">

</section>

<header>
<nav class="navigationhead">
    <a href="index.php">Accueil</a>
    <a href="coronaclicker.php">CoronaClicker</a>
    <a href="kitchen.php">Kitchen</a>
    <?php
                if(!isset($_SESSION['login']))
                { 
            ?>
    <a href="connection.php">Sign In/Sign Up</a>

    <?php
                }
                else
                {
            ?>
    <a href="discussion.php">Discussion</a>
    <a href="profil.php">Modifier le profil</a>
    <a href="index.php?deco=true">Deconnexion</a>
    <?php
                }
            ?>
  </nav>
</header>