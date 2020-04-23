<!DOCTYPE html>
<html>
<head>
	<title>Confinement Vie Coronaclicker</title> 
	<script type="text/javascript" src="corogame.js" async="true"></script>
	<link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<main id="c-main">
	<h1 id="c-title">Coronaclicker</h1>
	<div id="c-deb">
		
	</div>
	<div id="c-cach" hidden="true">
	<div id="corogame">
		<div id="clickzone">
			<b class="c-titre">Statistique</b>
			<div id="cz1" class="sous-zone">
				
				<p>Population totale : <span id="ptotal">1000</span></p>
				<p>Population en quarentaine : <span id="pquar">998</span></p>
				<p>Population morte : <span id="pmort">0</span></p>
				<p>Masque disponible: <span id="nbmasq">0</span></p>
				<p>Respirateur disponible : <span id="nbresp">0</span></p>
				<p>Vaccin : <span id="nbvac">0</span></p>
				<p>Population vacciné : <span id="pvac">0</span></p>
				
			</div>
		</div>
		<div id="mid">
			<b class="c-titre">Batiment</b>
			<div id="cz2" class="sous-zone">
				<section onclick="ajouter(usine)"  id="cl-nbusine" class="hum">
					<div class="c-secin"><img src="images/c-usin"><b class="primasq"> cout : 50 m</b></div>
					<div class="c-secin">Usine : <span id="nbusine" class="c-numb">1</span></div>	
				</section>
				<section onclick="ajouter(hopital)"  id="cl-nbhop" class="hum">
					<div class="c-secin"><img src="images/c-hopi"><b class="primasq"> cout : 100 m</b></div>
					<div class="c-secin">Centre medicaux : <span id="nbhop" class="c-numb">1</span></div>
					
				</section>
				<section onclick="ajouter(laboratoire)"  id="cl-nblab" class="hum">
					<div class="c-secin"><img src="images/c-labo"><b class="primasq"> cout : 300 m</b></div>
					<div class="c-secin">Laboratoire : <span id="nblab" class="c-numb">0</span></div>
					
				</section>
				<section onclick="ajouter(servcom)"  id="cl-nbcamp" class="hum">
					<div class="c-secin"><img src="images/c-prop"><b class="primasq"> cout : 500 m</b></div>
					<div class="c-secin">Campagne de vacination :<span id="nbcamp" class="c-numb">0</span></div>
					
				</section>			
			</div>
			
		</div>
		<div id="right">
			<b class="c-titre">Personel</b>
			<div id="cz3" class="sous-zone">
				<section onclick="ajouter(travailleur)" id="cl-nbtrav" class="hum">
					<div class="c-secin"><img src="images/c-trav.png" ><b class="primasq"> cout : 1 m</b></div>
					<div class="c-secin">Travailleurs non confiné  <span id="nbtrav" class="c-numb">1</span></div>
					
				</section>
				<section onclick="ajouter(medecin)"  id="cl-nbmed" class="hum">
					<div class="c-secin"><img src="images/c-doct.png" ><b class="primasq"> cout : 3 m</b></div>
					<div class="c-secin">Medecins  <span id="nbmed" class="c-numb">1</span></div>
					
				</section>
				<section onclick="ajouter(scientifique)" id="cl-nbsci" class="hum">
					<div class="c-secin"><img src="images/c-cher.png" ><b class="primasq"> cout : 5 m</b></div>
					<div class="c-secin">Scientifiques  <span id="nbsci" class="c-numb">0</span></div>
					
				</section>
				<section onclick="ajouter(comuniquant)"  id="cl-nbcom" class="hum">
					<div class="c-secin"><img src="images/c-jour.png" ><b class="primasq"> cout : 10 m</b></div>
					<div class="c-secin">Comuniquants  <span id="nbcom" class="c-numb">0</span></div>
					
				</section>	
			</div>
			
		</div>
	</div>
	<div>
</main>	
</body>
</html>
