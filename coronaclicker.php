<!DOCTYPE html>
<html>
<head>
	<title>Confinement Vie Coronaclicker</title> 
	<script type="text/javascript" src="corogame.js" async="true"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
					usine : <span id="nbusine">1</span>
					<b class="primasq"> cout : 50 m</b>
				</section>
				<section onclick="ajouter(hopital)"  id="cl-nbhop" class="hum">
					hopitaux : <span id="nbhop">1</span>
					<b class="primasq"> cout : 100 m</b>
				</section>
				<section onclick="ajouter(laboratoire)"  id="cl-nblab" class="hum">
					laboratoire : <span id="nblab">0</span>
					<b class="primasq"> cout : 300 m</b>
				</section>
				<section onclick="ajouter(servcom)"  id="cl-nbcamp" class="hum">
					campagne de vacination :<span id="nbcamp">0</span>
					<b class="primasq"> cout : 500 m</b>
				</section>			
			</div>
			
		</div>
		<div id="right">
			<b class="c-titre">Personel</b>
			<div id="cz3" class="sous-zone">
				<section onclick="ajouter(travailleur)" id="cl-nbtrav" class="hum">
					travailleurs non confiné : <span id="nbtrav">1</span>
					<b class="primasq"> cout : 1 m</b>
				</section>
				<section onclick="ajouter(medecin)"  id="cl-nbmed" class="hum">
					medecins : <span id="nbmed">1</span>
					<b class="primasq"> cout : 3 m</b>
				</section>
				<section onclick="ajouter(scientifique)" id="cl-nbsci" class="hum">
					scientifiques : <span id="nbsci">0</span>
					<b class="primasq"> cout : 5 m</b>
				</section>
				<section onclick="ajouter(comuniquant)"  id="cl-nbcom" class="hum">
					comuniquants : <span id="nbcom">0</span>
					<b class="primasq"> cout : 10 m</b>
				</section>	
			</div>
			
		</div>
	</div>
</body>
</html>
