/*
	but du jeu:
	sortire la population du confinement 10000
	le virus->infecte( 1 persone tout les 30s //si pas mis en quarentaine *2)

	moyen de lutter contre le virus
	->masque(sort de la quarentaine la population)
	->respirateur(permet de reduire le nb de mort)
	->vacin(remplace les respirateur quand il est crée )


	->travailleur non confiné(produis des masques et argent  30s=1masque par travailleur)
	->medecin(reduit le nombre de mort dans la quarentaine) si les medecin sont assez nombreux creation d'un laboratoire 
	->si les scientifique sont asser nombreux-> vaccin
	->comuniquant	(repende le vacin )

	
	->usine(1= 10 travailleur)
	->hopital (1 = 20 medecin)
	->laboratoire( augmente production masque*1.1  1= 10sc )
	->service comunication(1 persone vaciné toute les 30 s)
	



*/

	seconde=0;
	ptotal=1000;
	ptquar=998
	
	masque=0;
	respirateur=0;
	vaccin=0;

	travailleur=1;
	medecin=1;
	scientifique=0;
	comuniquant=0;

	usine=1;
	hopital=1
	laboratoire=0;
	servcom=0;
	
	coro=0;
	//geris=0;
	
	function jeu() 
	{
		
		setInterval( tp, 1000);
		setInterval( masqueplus, 10000);
		setInterval( mort, 30000);
		setInterval( resp, 40000);  
		setInterval(cont,20000);  	
	}
	function tp()
	{
		this.seconde++;
		console.log(seconde);
	}
	function masqueplus()
	{	
		masque=masque+travailleur;
		window.document.getElementById('nbmasq').innerHTML=masque;
		console.log(masque);
	}
	function mort()
	{
		if(coro>=respirateur)
		{	
			dcd=coro-respirateur;
			ptotal=-dcd;

			ptquar=-dcd;
		}
				window.document.getElementById('ptotal').innerHTML=ptotal;
		ptquar--;
		window.document.getElementById('pquar').innerHTML=ptquar;
	}

	function resp()
	{
		respirateur++;
		window.document.getElementById('nbresp').innerHTML=respirateur;
	}
	function cont()
	{
		coro++;
	}


jeu();