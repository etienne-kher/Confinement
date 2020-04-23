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
	->hopital (1 = 20 medecin production +respirateur)
	->laboratoire( augmente production masque*1.1  1= 10sc )
	->service comunication(1 persone vaciné toute les 30 s)
	



*/

	seconde=0;
	ptotal=1000;
	ptquar=998
	

	masque=0;
	respirateur=0;
	vaccin=0;

	maxbat=20;

	travailleur=[1,1,"nbtrav","p"];
	medecin=[1,3,"nbmed","p"];
	scientifique=[0,5,"nbsci","p"];
	comuniquant=[0,10,"nbcom","p"];

	usine=[1,50,"nbusine","b"];
	hopital=[1,100,"nbhop","b"];
	laboratoire=[0,300,"nblab","b"];
	servcom=[0,500,"nbcamp","b"];
	
	coro=0;
	//geris=0;
	
	function jeu() 
	{
		
		setInterval( tp, 1000);
		setInterval( masqueplus, 10000);
		setInterval( mort, 30000);
		setInterval( resp, 40000);  
		setInterval(cont,10000);  	
	}
	function tp()
	{
		this.seconde++;
		console.log(seconde);
	}
	function masqueplus()
	{	
		masque=masque+travailleur[0];
		window.document.getElementById('nbmasq').innerHTML=masque;
		console.log(masque);
	}
	function mort()
	{
		
		if(coro>=respirateur)
		{	
			dcd=coro-respirateur;
			console.log("dcd="+dcd);
			ptotal-=dcd;
			ptquar-=dcd;
			respirateur=0;
		}
		else
		{
			respirateur-=coro;
		}
		window.document.getElementById('ptotal').innerHTML=ptotal;
		window.document.getElementById('pquar').innerHTML=ptquar;
		window.document.getElementById('nbresp').innerHTML=respirateur;
		
	}

	function resp()
	{
		respirateur=respirateur+Math.round(1*(medecin[0]*0.75));
		window.document.getElementById('nbresp').innerHTML=respirateur;
	}
	function cont()
	{
		coro++;
	}

	function ajouter(x)
	{
		if (x[3]=="p") 
			{
				switch(x[2])
				{
					case 'nbtrav':
    				bat=usine[0];
    				break;
    				case 'nbmed':
    				bat=hopital[0];
    				break;
    				case 'nbsci':
    				bat=laboratoire[0];
    				break;
    				case 'nbcom':
    				bat=servcom[0];
    				break;
				}
				if(masque>=x[1] && x[0]<maxbat*bat)
				{	masque-=x[1];
					x[0]++;
					window.document.getElementById('nbmasq').innerHTML=masque;
					window.document.getElementById(x[2]).innerHTML=x[0];
					ptquar--;
					window.document.getElementById('pquar').innerHTML=ptquar;
				}
			}
			else
			{
				if(masque>=x[1])
				{
					masque-=x[1];
					x[0]++;
					window.document.getElementById('nbmasq').innerHTML=masque;
					window.document.getElementById(x[2]).innerHTML=x[0];
				}
			}	
	/*
		switch(x[2])
		{
			case 'nbtrav':
    		bat=usine[0];
    		break;
    		case 'nbmed':
    		bat=hopital[0];
    		break;
    		case 'nbsci':
    		bat=laboratoire[0];
    		break;
    		case 'nbcom':
    		bat=servcom[0];
    		break;
		}
		if(masque>=x[1]&& x[0]<maxbat*bat)
		{
			masque-=x[1];
			x[0]++;
			window.document.getElementById('nbmasq').innerHTML=masque;
			window.document.getElementById(x[2]).innerHTML=x[0];
			if (x[3]=="p") 
			{	
				ptquar--;
				window.document.getElementById('pquar').innerHTML=ptquar;
			}

		}
	*/}

jeu();