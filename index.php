

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
        <title>Accueil</title>
    </head>

    <body id="body_index">
     
        <?php include "header.php"; ?>
    
	    <section id="section_index">

            <?php
               
                if(isset($_SESSION['login']))
                { 
                     $connexion = mysqli_connect('localhost','root','','rush');
                     $sql = "SELECT login FROM utilisateurs WHERE id = '".$_SESSION['id']."'";
                     $query = mysqli_query($connexion,$sql);

                echo "<h1 id='h1_acc'>Salut, ".$_SESSION['login']." ! Tu peux maintenant acceder au fil de discussion !</h1>";
                
                }

                else {
                echo "<h1 id='h1_acc'>Tu cherches désespérément à vaincre l'ennuie pendant ce confinement ? Tu es au bon endroit !</h1>";
                }

            ?>

		
		
    </section>
    <?php include "footer.php"; ?>
</body>
</html>