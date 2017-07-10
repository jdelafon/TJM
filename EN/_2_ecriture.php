<!-- les <br> s'affichent dans le mail-->

<?php if (isset($_POST['issent'])) {
	
	
    // ENVOI PAR E-MAIL
	
	 
	define('MAIL_DESTINATAIRE','tania@tjm-delafontaine.ch');
	define('MAIL_SUJET','Inscription de '. $_SESSION['email'].'');
	
			//Préparation de l'entête du mail:
	$mail_entete = "MIME-Version: 1.0\r\n";
	$mail_entete .= "From: {$_SESSION['nom']} " . "<{$_SESSION['email']}>\r\n";
	$mail_entete .= "Reply-To: ".$_SESSION['email']."\r\n";
	$mail_entete .= 'Content-Type: text/plain; charset="UTF-8"';
	$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
	$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";

			// préparation du corps du mail
	$mail_corps = "Session ID: ".session_id()."\n\n";
	$mail_corps .= "Message de : \n"
		.$_SESSION['sexe']." ".$_SESSION['prenom']." ".$_SESSION['nom']."\n"
		.$_SESSION['adresse']."\n"
		.$_SESSION['codepostal']." ". $_SESSION['ville']."\n".$_SESSION['pays']."\n\n";
	
	$mail_corps .= "SERVICES: \n";
	if($_SESSION['transde']=='on') {
		$mail_corps .= "Transfert de l'aeroport: oui, depuis ".$_SESSION['aeroportarr']
		.", le ".$_SESSION['datearr']." \n"; }
		else {$mail_corps .= "Transfert de l'aeroport: non \n";}
	if($_SESSION['transvers']=='on') {
		$mail_corps .= "Transfert vers l'aeroport: oui, vers ".$_SESSION['aeroportdep']
		. ", le ". $_SESSION['datedep']. " \n"; }
		else {$mail_corps .= "Transfert vers l'aeroport: non \n";}
	if(isset($_SESSION['sejour'])) {
		$mail_corps .= "Sejournera probablement a ".$_SESSION['sejour']. " \n\n";}
	
	$mail_corps .= "PROGRAMMES: \n";
	$mail_corps .= "Pour ".$_SESSION['nbpersonnes']." adultes et ". $_SESSION['nbenfants']." enfants\n";
	if($_SESSION['exdem']=='on') {
		$mail_corps .= "# Excursion sur demande :\n"; 
		$mail_corps .= $_SESSION['description']."\n";}
	if($_SESSION['ex1']=='on') {
		$mail_corps .= "# Montreux-Chillon\n"; }
	if($_SESSION['ex2']=='on') {
		$mail_corps .= "# Gruyere\n"; }
	if($_SESSION['ex3']=='on') {
		$mail_corps .= "# Glacier\n"; }
	
	$mail_corps .= "\n COMMENTAIRES: \n". $_SESSION['commentaires']. "\n";

	// envoi du mail
	if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) 
	{echo '';} 
	 else {echo 'Une erreur est survenue lors de l\'envoi du formulaire par email';}

	} ?>