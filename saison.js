
    #<!--<script type="text/javascript" src="../saison.js"></script>	-->
    #
    #<img id="bann_img" src="../images/bannieres/>
    #   <?php
	#	if( (isset($_SESSION['bann_form']) && $_SESSION['bann_form'] != "") || isset($_POST['bann_form'])) 
	#		{if (isset($_POST['bann_form'])) {$_SESSION['bann_form']=$_POST['bann_form'];}
	#		 $saison=$_SESSION['bann_form'];
	#		 switch ($saison) 
	#		 {	case "saison1": 
	#			case "saison2": 
	#				echo "ban_vevey_800.png"; break;
	#			case "saison3": 
	#				echo "ban_moritz_800.png"; break;
	#			case "saison4": 
	#				echo "ban_choex_800.png"; break;
	#		 }
	#		} 
	#	else {echo "ban_moritz_800.png";}
	#	?> " alt="banniereTJM" onclick="change_saison();"/>

function change_saison() {	

		var alea;
		var nbre_images = 4;
		var form, image;

		alea = Math.random();
		image = document.getElementById('bann_img');
		form = document.getElementById('skritii');

		if(alea > 0/nbre_images && alea <= 1/nbre_images)
		{
			image.src = "../images/bannieres/ban_daviaz_800.png";
			form.elements["bann_form"].value = "saison1";
		}
		else if(alea > 1/nbre_images && alea <= 2/nbre_images)
		{
			image.src = "../images/bannieres/ban_vevey_800.jpg";
			form.elements["bann_form"].value = "saison2";
		}
		else if(alea > 2/nbre_images && alea <= 3/nbre_images)
		{
			image.src = "../images/bannieres/ban_moritz_800.jpg"; 
			form.elements["bann_form"].value = "saison3";
		}
		else if(alea > 3/nbre_images && alea <= 4/nbre_images)
		{
			image.src = "../images/bannieres/ban_choex_800.jpg"; 
			form.elements["bann_form"].value = "saison4";
		}
		document.forms["skritii"].submit();
} //end of the function
		
		
//CHANGE LE RESTE EN CONSEQUENCE
var image = document.getElementById('bann_img');
var fond = document.getElementById('all');
var path = "http://localhost/TJM/images/";

if(image.src == path+"bannieres/ban_daviaz_800.png")
{
fond.style.backgroundImage = 'url(\"'+path+'colonnes_daviaz.png\")' ;
}
else if(image.src == path+"bannieres/ban_vevey_800.png")
{
fond.style.backgroundImage = 'url(\"'+path+'colonnes_vevey.png\")' ;
}
else if(image.src == path+"bannieres/ban_moritz_800.png")
{
fond.style.backgroundImage = 'url(\"'+path+'colonnes_moritz.png\")' ;
}
else if(image.src == path+"bannieres/ban_choex_800.png")
{
fond.style.backgroundImage = 'url(\"'+path+'colonnes_choex.png\")' ;
}
