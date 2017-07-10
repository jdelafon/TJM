<!--**************************TRAITEMENT***********************************-->
<!--***********************************************************************-->

<?php //***********GESTION D'ERREURS*************//
if (isset($_POST['issent'])) {
	$errmsg = "The following fields have to be filled :<br/><br/>";
	$message = $errmsg;
	$controle = false;
	
	// COORDONNEES
	
			//?? foreach($_POST as $index => $valeur) {$$_SESSION['$index'] = htmlspecialchars(stripslashes(trim($valeur)));}
	if(isset($_POST['sexe'])) {
		$_SESSION['sexe'] = htmlspecialchars($_POST['sexe']); $_SESSION['sexe']=true;}
	else {$errmsg.= "Madam // Sir<br />";  $_SESSION['sexe']=false;}
	if(empty($_POST['nom'])) 
		{$errmsg.= "Your surname<br />"; $_SESSION['nom'] = NULL; $_SESSION['ctrlNom']=false;}
	else {$_SESSION['nom'] = htmlspecialchars($_POST['nom']); $_SESSION['ctrlNom']=true;}
	if(empty($_POST['prenom'])) 
		{$errmsg.= "Your first name<br />"; $_SESSION['prenom'] = NULL; $_SESSION['ctrlPrenom']=false;}
	else {$_SESSION['prenom'] = htmlspecialchars($_POST['prenom']); $_SESSION['ctrlPrenom']=true;}
	if (isset($_POST['email']))
	{
	 if(empty($_POST['email'])) 
		{$errmsg.= 'Your e-mail<br />'; $_SESSION['email'] = NULL; $_SESSION['ctrlEmail']=false;}
	 else {
	    if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
			{$errmsg.= 'The format of your e-mail is not valid !<br />';  
			$_SESSION['email'] = NULL; $_SESSION['ctrlEmail']=false;}
		else{$_SESSION['email'] = htmlspecialchars($_POST['email']); $_SESSION['ctrlEmail']=true;}
	 }
	}
	if(empty($_POST['adresse'])) 
		{$errmsg.= "Your address<br />"; $_SESSION['adresse'] = NULL; $_SESSION['ctrlAdresse']=false;}
	else {$_SESSION['adresse'] = htmlspecialchars($_POST['adresse']); $_SESSION['ctrlAdresse']=true;}
	if(empty($_POST['codepostal'])) 
		{$errmsg.= "Your postal nr<br />"; $_SESSION['codepostal'] = NULL; $_SESSION['ctrlCodePostal']=false;}
	else {$_SESSION['codepostal'] = htmlspecialchars($_POST['codepostal']); $_SESSION['ctrlCodePostal']=true;}
	if(empty($_POST['ville'])) 
		{$errmsg.= "Your city<br />"; $_SESSION['ville'] = NULL; $_SESSION['ctrlVille']=false;}
	else {$_SESSION['ville'] = htmlspecialchars($_POST['ville']); $_SESSION['ctrlVille']=true;}
	if(empty($_POST['pays'])) 
		{$errmsg.= "Your country<br />"; $_SESSION['pays'] = NULL; $_SESSION['ctrlPays']=false;}
	else {$_SESSION['pays'] = htmlspecialchars($_POST['pays']); $_SESSION['ctrlPays']=true;}
	
	// SERVICES
	
	if(isset($_POST['transde'])) {
		$_SESSION['transde'] = htmlspecialchars($_POST['transde']); }
		else {$_SESSION['transde'] = "off";}
	if(empty($_POST['datearr'])) {$_SESSION['datearr'] = NULL;}
		else {$_SESSION['datearr'] = htmlspecialchars($_POST['datearr']); }
	if(isset($_POST['transvers'])) {
		$_SESSION['transvers'] = htmlspecialchars($_POST['transvers']); }
		else {$_SESSION['transvers'] = "off";}
	if(empty($_POST['datedep'])) {$_SESSION['datedep'] = NULL;}
		else {$_SESSION['datedep'] = htmlspecialchars($_POST['datedep']); }
	if(empty($_POST['aeroportarr'])) {$_SESSION['aeroportarr'] = NULL; }
		else {$_SESSION['aeroportarr'] = htmlspecialchars($_POST['aeroportarr']); }
	if(empty($_POST['aeroportdep'])) {$_SESSION['aeroportdep'] = NULL; }
		else {$_SESSION['aeroportdep'] = htmlspecialchars($_POST['aeroportdep']); }
	if(empty($_POST['sejour'])) {$_SESSION['sejour'] = NULL;}
		else {$_SESSION['sejour'] = htmlspecialchars($_POST['sejour']);}
		
	// PROGRAMMES
	
	if(empty($_POST['nbpersonnes'])) {$_SESSION['nbpersonnes'] = NULL;}
		else {$_SESSION['nbpersonnes'] = htmlspecialchars($_POST['nbpersonnes']);}
	if(empty($_POST['nbenfants'])) {$_SESSION['nbenfants'] = NULL;}
		else {$_SESSION['nbenfants'] = htmlspecialchars($_POST['nbenfants']);}
	if(isset($_POST['exdem'])) {
		$_SESSION['exdem'] = htmlspecialchars($_POST['exdem']); }
		else {$_SESSION['exdem'] = "off";}
	if(isset($_POST['description'])) {
		$_SESSION['description'] = nl2br(htmlspecialchars($_POST['description'])); }
	if(isset($_POST['ex1'])) {
		$_SESSION['ex1'] = htmlspecialchars($_POST['ex1']); }
		else {$_SESSION['ex1'] = "off";}
	if(isset($_POST['ex2'])) {
		$_SESSION['ex2'] = htmlspecialchars($_POST['ex2']); }
		else {$_SESSION['ex2'] = "off";}
	if(isset($_POST['ex3'])) {
		$_SESSION['ex3'] = htmlspecialchars($_POST['ex3']); }
		else {$_SESSION['ex3'] = "off";}
	if(isset($_POST['commentaires'])) {
		$_SESSION['commentaires'] = nl2br(htmlspecialchars($_POST['commentaires'])); }
		
	// CONTROLE
	
   if (strlen($errmsg) > strlen($message)) {$controle=false;}
   else {$controle=true;}

    // AFFICHAGE DU MESSAGE DE CONFIRMATION/D'ERREUR
	  
   if ($controle==false) {echo "<div class='inblock'>"."<h3>".$errmsg."</h3>"."</div>"; }
   if ($controle==true) {
	echo "<div class='inblock'>";
    echo "<h3>The form has been sent</h3>";
	echo "We will answer to you as soon as possible at the address ".$_SESSION['email']."<br />";
	echo "</div>"; 
	}
}