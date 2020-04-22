<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="corogame.js" async="true"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="corogame">
		<div id="clickzone">
			<b class="c-titre"></b>
			<div id="cz1" class="sous-zone">
				
				<p>population totale : <span id="ptotal">1000</span></p>
				<p>population en quarentaine : <span id="pquar">998</span></p>
				<p>population hors quarentaine : <span id="pquar">2</span></p>
				<p>masque disponible: <span id="nbmasq">0</span></p>
				<p>respirateur disponible : <span id="nbresp">0</span></p>
				<p>population vacciné : <span id="pvac">0</span></p>
				
			</div>
		</div>
		<div id="mid">
			<b class="c-titre">mid</b>
			<div id="cz2" class="sous-zone">
				<section  id="cl-nbusine" class="hum">
					usine : <span id="nbusine">1</span>
				</section>
				<section id="cl-nbhop" class="hum">
					hopitaux : <span id="nbhop">1</span>
				</section>
				<section  id="cl-nblab" class="hum">
					laboratoire : <span id="nblab">0</span>
				</section>
				<section id="cl-nbcamp" class="hum">
					campagne de vacination :<span id="nbcamp">0</span>
				</section>			
			</div>
			
		</div>
		<div id="right">
			<b class="c-titre">right</b>
			<div id="cz3" class="sous-zone">
				<section id="cl-nbtrav" class="hum">
					travailleurs non confiné : <span id="nbtrav">1</span>
				</section>
				<section id="cl-nbmed" class="hum">
					medecins : <span id="nbmed">1</span>
				</section>
				<section id="cl-nbsci" class="hum">
					scientifiques : <span id="nbsci">0</span>
				</section>
				<section id="cl-nbcom" class="hum">
					comuniquants : <span id="nbcom">0</span>
				</section>	
			</div>
			
		</div>
	</div>
</body>
</html>