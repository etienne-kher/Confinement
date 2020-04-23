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
	pmort=0;
	pvac=0;
	masque=0;
	respirateur=0;
	decvac=false;
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
		
		xa=setInterval( tp, 1000);
		xb=setInterval( masqueplus, 10000);
		xc=setInterval(prodvac,10000);
		xd=setInterval(vacination,20000)
		xe=setInterval( mort, 30000);
		xf=setInterval( resp, 40000);  
		xg=setInterval(cont,10000);  	
	}
	function tp()
	{
		seconde++;
		console.log(seconde);
		if(scientifique[0]>=25)
		{
			decvac=true;
			//signaler vacin disponible
		}

		if (ptquar <= 0 && pvac > 0) 
		{
			win();
		}
		if(ptquar <= 0 && pvac<=0)
		{
			loser();
		}
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
			ptotal-=dcd;
			ptquar-=dcd;
			respirateur=0;
		}
		else
		{
			respirateur-=coro;
			dcd=0;
		}
		pmort+=dcd;
		window.document.getElementById('ptotal').innerHTML=ptotal;
		window.document.getElementById('pquar').innerHTML=ptquar;
		window.document.getElementById('nbresp').innerHTML=respirateur;
		window.document.getElementById('pmort').innerHTML=pmort;
		
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
	}
	function prodvac()
	{
		if(decvac==true)
		{	
			console.log("vac="+vaccin);
			vaccin=Math.round(0.4*scientifique[0])+vaccin;
			console.log("vac="+vaccin);
			window.document.getElementById('nbvac').innerHTML=vaccin;
		}
	}
	function vacination()
	{
		volont=Math.round(comuniquant[0]*0.6);
		console.log("vol="+volont);
		/*
		vaccin-=volont;
		pvac+=volont;
		pquar-=volont;*/
		if(vaccin>=volont)
		{
			vaccin-=volont;
			pvac+=volont;
			ptquar-=volont;
		}
		else
		{	
			volont=vaccin;
			vaccin=0;
			pvac+=volont;
			ptquar-=volont;

		}	
		window.document.getElementById('nbvac').innerHTML=vaccin;
		window.document.getElementById('pquar').innerHTML=ptquar;
		window.document.getElementById('pvac').innerHTML=pvac;
	}
	function deb()
	{	window.document.getElementById('c-cach').hidden=false;
		window.document.getElementById('c-deb').hidden=true;
		jeu();
	}
	function win()
	{	
		clearInterval(xa);
		clearInterval(xb);
		clearInterval(xc);
		clearInterval(xd);
		clearInterval(xe);
		clearInterval(xf);
		clearInterval(xg);
		score=ptotal;
		window.document.getElementById('c-cach').hidden=true;
		window.document.getElementById('c-win').hidden=false;
		window.document.getElementById('c-score').innerHTML=score;
	}
	function loser()
	{
		window.document.getElementById('c-cach').hidden=true;
		window.document.getElementById('c-los').hidden=false;
	}

