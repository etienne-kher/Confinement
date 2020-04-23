<?php

    $link= mysqli_connect("127.0.0.1", "root", "", "rush");

    $query= mysqli_query($link, "SELECT message, date, login FROM `messages` INNER JOIN `utilisateurs` on messages.id_utilisateur = utilisateurs.id WHERE mode = 'serie' order by date desc");
    $resultatserie= mysqli_fetch_all($query, MYSQLI_ASSOC);

    $query= mysqli_query($link, "SELECT message, date, login FROM `messages` INNER JOIN `utilisateurs` on messages.id_utilisateur = utilisateurs.id WHERE mode = 'musique' order by date desc");
    $resultatmusique= mysqli_fetch_all($query, MYSQLI_ASSOC);

    $query= mysqli_query($link, "SELECT message, date, login FROM `messages` INNER JOIN `utilisateurs` on messages.id_utilisateur = utilisateurs.id WHERE mode = 'film' order by date desc");
    $resultatfilm= mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">

</head>
<body class="fil">

<?php include('header.php'); ?>

<section class="position">
    <details>
        <summary>
            SERIES
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
        </summary>
        <?php foreach($resultatserie as $commentairesserie): ?>
                <div>
                    <p class="appinter plus">Posté le <?=$commentairesserie['date']?> par <?=$commentairesserie['login']?> :</p>
                    <p class="appinter encore"><?=$commentairesserie['message']?></p>
                </div>
            <?php endforeach; ?>
    </details>

    <details>
        <summary>
            MUSIQUE
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
        </summary>
        <?php foreach($resultatmusique as $commentairesmusique): ?>
                <div>
                    <p class="appinter plus">Posté le <?=$commentairesmusique['date']?> par <?=$commentairesmusique['login']?> :</p>
                    <p class="appinter encore"><?=$commentairesmusique['message']?></p>
                </div>
                <?php endforeach; ?>
    </details>

    <details>
        <summary>
            FILMS
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" /></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" /></svg>
        </summary>
        <?php foreach($resultatfilm as $commentairesfilm): ?>
                <div >
                    <p class="appinter plus">Posté le <?=$commentairesfilm['date']?> par <?=$commentairesfilm['login']?> :</p>
                    <p class="appinter encore"><?=$commentairesfilm['message']?></p>
                </div>
                <?php endforeach; ?>
    </details>

    </section>
	<?php include('form.php'); ?>
		</br>
		</br>
<?php include('footer.php'); ?>
</body>
</html>