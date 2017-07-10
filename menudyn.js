
	var adresse = document.location.pathname;
	var indiceDepart = adresse.lastIndexOf('/')+1;
	var indiceFin = adresse.length-6;
	var page = adresse.substring(indiceDepart, indiceFin);
    var img = 'url("../images/boutons/bmenuactive.png")'
    var wid = '125px'
	
switch(page) {
	case 'ind': 
	{document.getElementById('menuaccueil').style.backgroundImage = img;
	 document.getElementById('menuaccueil').style.width = wid;
	 break;}
	case 'accueil': 
	{document.getElementById('menuaccueil').style.backgroundImage = img;
	 document.getElementById('menuaccueil').style.width = wid;
	 break;}
	case 'offres': 
	{document.getElementById('menuoffres').style.backgroundImage = img;
	 document.getElementById('menuoffres').style.width = wid;
	 break;}
	case 'recommand': 
	{document.getElementById('menuoffres').style.backgroundImage = img;
	 document.getElementById('menuoffres').style.width = wid;
	 break;}
	case 'chillon': 
	{document.getElementById('menuoffres').style.backgroundImage = img;
	 document.getElementById('menuoffres').style.width = wid;
	 break;}
	case 'gruyere': 
	{document.getElementById('menuoffres').style.backgroundImage = img;
	 document.getElementById('menuoffres').style.width = wid;
	 break;}
	case 'glacier': 
	{document.getElementById('menuoffres').style.backgroundImage = img;
	 document.getElementById('menuoffres').style.width = wid;
	 break;}
	case 'formulaire': 
	{document.getElementById('menuformulaire').style.backgroundImage = img;
	 document.getElementById('menuformulaire').style.width = wid;
	 break;}
	case 'contact': 
	{document.getElementById('menucontact').style.backgroundImage = img;
	 document.getElementById('menucontact').style.width = wid;
	 break;}
	case 'liens': 
	{document.getElementById('menuliens').style.backgroundImage = img;
	 document.getElementById('menuliens').style.width = wid;
	 break;}
	case 'suisse': 
	{document.getElementById('menusuisse').style.backgroundImage = img;
	 document.getElementById('menusuisse').style.width = wid;
	 break;}
	default: break;
}