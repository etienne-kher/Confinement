<?php
	
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
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js" async='true'></script>
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
        <script type="text/javascript" src="script.js" async='true'></script>
		<title>Connexion</title>
	</head>
	
	<body id="bodyconnexion">
	
		<?php include "header.php"; ?>
		
			
		<main>
			<section>
			<div class="overlay">
				<form id="form_connexion" method="post">
					<div class="con">
						<header class="head-form">
							<h2>Log In</h2>
							<p id="p_headerco">Connecte-toi pour pouvoir acceder au fil de discussion</p>
						</header>
						<br>
						<div class="field-set">
								<span class="input-item">
								<i class="fa fa-user-circle"></i>
								</span>
								<input class="form-input" id="txt-input" type="text" name="login" placeholder="LOGIN">
							<br>
							<span class="input-item">
								<i class="fa fa-key"></i>
							</span>
							<input class="form-input" type="password" placeholder="MOT DE PASSE" id="pwd"  name="passe">
							<span>
								<i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"><img src="images/passe.png" width="17px"></i>
							</span>
							<br>
							<input id="connexion_submit" class="button_connexion" type="submit" value="CONNEXION" name="Connexion" class="log-in">  
						</div>
						<div class="other">
							<input type="submit" class="button_connexion" value="INSCRIPTION" name="inscription" class="btn submits sign-up"></input>
							<i class="fa fa-user-plus" aria-hidden="true"></i>
						</div>
						
					</div>
				</form>
			</div>
				<?php
					$var->connexion();
				?>
			</section>
		</main>
			
		<?php include "footer.php"; ?>
	</body>
</html>


