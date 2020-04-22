<?php
	session_start();
	if(!isset($_SESSION['login']) || !isset($_SESSION['password'])){}
	else
	{
		header('Location: index.php');
	}
	require "fonctions/function_co_ins.php";
	$var = new connexion_inscription;
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css"/>
		<title>Inscription</title>
	</head>
	
	<body>
		<header>
			
		</header>
		
		<main>
			<section>
				<form method="post">
					<fieldset>
						<legend>INSCRIPTION</legend>
						<input type="text" name="login" placeholder="LOGIN"/>
						<input type="mail" name="email" placeholder="E-MAIL"/>
						<input type="text" name="prenom" placeholder="PRENOM"/>
						<input type="text" name="nom" placeholder="NOM"/>
						<input type="password" name="passe" placeholder="MOT DE PASSE"/>
						<input type="password" name="passe2" placeholder="CONFIRMATION MOT DE PASSE"/>
						<input type="submit" value="INSCRIPTION" name="inscription"/>
						<input type="submit" value="CONNEXION" name="connexion"/>
					</fieldset>
				</form>
				<?php
					$var->inscription();
				?>
			</section>
		</main>
			
		<footer>
			
		</footer>
	</body>
</html>