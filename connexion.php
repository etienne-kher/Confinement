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
		<title>Connexion</title>
	</head>
	
	<body>
		<header>
			
		</header>
			
		<main>
			<section>
				<form method="post">
					<fieldset>
						<legend>CONNEXION</legend>
						<input type="text" name="login" placeholder="LOGIN"/>
						<input type="password" name="passe" placeholder="MOT DE PASSE"/>
						<input type="submit" value="CONNEXION" name="Connexion"/>
						<input type="submit" value="INSCRIPTION" name="inscription" />
					</fieldset>
				</form>
				<?php
					$var->connexion();
				?>
			</section>
		</main>
			
		<footer>
			
		</footer>
	</body>
</html>