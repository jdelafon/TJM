	<!--  EFFACEMENT DES CHAMPS - METHODE PHP - (desactive, voir fond de la page formulaire.php) -->
	
	<?php    $triggertxt='on'; 
	 if(isset($_POST['triggertxt'])) {$triggertxt=$_POST['triggertxt'];}
	     if($triggertxt=='off') {
		unset($_SESSION['nom']); unset($_SESSION['prenom']); unset($_SESSION['email']);
		unset($_SESSION['adresse']); unset($_SESSION['codepostal']); unset($_SESSION['ville']);
		unset($_SESSION['pays']); unset($_SESSION['commentaires']); unset($_SESSION['sexe']);
		unset($_SESSION['aeroportarr']); unset($_SESSION['aeroportdep']); unset($_SESSION['datearr']);
		unset($_SESSION['datedep']); unset($_SESSION['sejour']); unset($_SESSION['description']);
		unset($_SESSION['nbpersonnes']); unset($_SESSION['nbenfants']); }
	     $triggerbox='on'; 
	 if(isset($_POST['triggerbox'])) {$triggerbox=$_POST['triggerbox'];}
	     if($triggerbox=='off') {
		unset($_SESSION['transde']); unset($_SESSION['transvers']); unset($_SESSION['ex1']);
		unset($_SESSION['ex2']); unset($_SESSION['ex3']); unset($_SESSION['exdem']); } ?>
		
	<!--*************EFFACEMENT DES CHAMPS - METHODE JAVASCRIPT************-->
	<!--si on recharge la page, tout revient. Pas besoin de recharger la page pour effacer-->
	
	<script type="text/javascript">
	function effacecoord() 
	{	document.getElementById("inscription").elements["nom"].value = "";
		document.getElementById("inscription").elements["prenom"].value = "";
		document.getElementById("inscription").elements["email"].value = "";
		document.getElementById("inscription").elements["adresse"].value = "";
		document.getElementById("inscription").elements["codepostal"].value = "";
		document.getElementById("inscription").elements["ville"].value = "";
		document.getElementById("inscription").elements["pays"].value = "";
		document.getElementById("inscription").femme.checked = false;
		document.getElementById("inscription").homme.checked = false;	}
	function effacechoix()
	{	document.getElementById("inscription").transde.checked = false;
		document.getElementById("inscription").transvers.checked = false;
		document.getElementById("inscription").elements["aeroportarr"].value = "";
		document.getElementById("inscription").elements["aeroportdep"].value = "";
		document.getElementById("inscription").elements["datearr"].value = "";
		document.getElementById("inscription").elements["datedep"].value = "";
		document.getElementById("inscription").elements["sejour"].value = "";
		document.getElementById("inscription").elements["nbpersonnes"].value = "";
		document.getElementById("inscription").elements["nbenfants"].value = "";
		document.getElementById("inscription").elements["description"].innerHTML = "";
		document.getElementById("inscription").elements["commentaires"].innerHTML = "";
		document.getElementById("inscription").exdem.checked = false;
		document.getElementById("inscription").ex1.checked = false;
		document.getElementById("inscription").ex2.checked = false;	
		document.getElementById("inscription").ex3.checked = false;	}
	</script>
	
	<!--*****************CHAMPS EN ROUGE SI ERREUR*******************-->
	
	<script type="text/javascript">
	function champrouge(elt) {
		var elt = document.getElementById("inscription").elements[elt];
		elt.style.backgroundColor = "red"; 
	}
	function champblanc(elt) {
		var elt = document.getElementById("inscription").elements[elt];
		elt.style.backgroundColor = "white";
	}
	</script>