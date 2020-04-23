<?php
 	
   

?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap"
        rel="stylesheet">
    <title>Confinement Vie</title>
</head>

<body id="body-profil">
    <?php include "header.php";  
     require "fonctions/function_profil.php";
     $var = new profile;
     $connexion = mysqli_connect('localhost','root','','rush');
     $sql = "SELECT * FROM utilisateurs WHERE id='".$_SESSION['id']."'";
     $query = mysqli_query($connexion,$sql);
     $data = mysqli_fetch_assoc($query);
    ?>
    <main id="main-profil">
        <form id="form-profil" method="post">

        
         
            <label class="label-profil">Login :</label>
            <input type="text" name="login" value="<?php echo $data['login'] ?>" placeholder="Login" class="input-profil" />

            <label class="label-profil">Email :</label>
            <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Email" class="input-profil" />

            <label class="label-profil">Prénom :</label>
            <input type="text" name="prenom" value="<?php echo $data['prenom'] ?>" placeholder="Prénom" class="input-profil" />

            <label class="label-profil">Nom :</label>
            <input type="text" name="nom" value="<?php echo $data['nom'] ?>" placeholder="Nom" class="input-profil" />

            <label class="label-profil">Mot de passe :</label>
            <input type="password" name="passe"  placeholder="MOT DE PASSE " class="input-profil" />

            <label class="label-profil">Mot de passe | CONFIRMATION :</label>
            <input type="password" name="passe2"  placeholder="CONFIRMATION DE MOT DE PASSE" class="input-profil" />


            <input type="submit" name="modifier_profil" value="MODIFIER" class="input-profil" />
            <?php
			$var->modif_profil($data['login'], $data['email'], $data['prenom'], $data['nom'], $data['password']);
		?>

        </form>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>