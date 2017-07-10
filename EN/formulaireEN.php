<?php include("../entete.html"); ?>
<div id="centre">
   <div id="menu"><?php include("menuEN.php"); ?></div>
   <div id="corps">

	<h2>Subscription form</h2>

	<div class='inblock'>
	If you are interested in using our services, please fill this form. <br />
	This is nothing like an engagement, only a reservation. <br />
	If you choosed your program yourself, please add some words to shortly describe it in the 
	appropriate field.<br />
	Formalities will be sent through the post or e-mail, and you can join us directly 
	by phone or e-mail for any information or advice.
	</div>
	
<?php include('_1_traitement.php'); ?>
<?php include('_2_ecriture.php'); ?>

<form id="inscription" method="post" action="formulaireEN.php">

<?php include('_3_scripts.php'); ?>
	
	
<!-- CHAMPS COORDONNEES -->
<fieldset class='coordonnees'><legend>Coordonnees</legend>
   
   
		<!-- madame, monsieur - checkbox -->
	<table><tr>
    <td><input type="radio" name="sexe" value="Madame" id="femme"  
		<?php if (isset($_SESSION['sexe']) && $_SESSION['sexe']=='Madame') 
		{echo "checked=\'checked\'";} ?> />
		<label for="femme">Madam</label></td>
		
    <td><input type="radio" name="sexe" value="Monsieur" id="homme"  
		<?php if (isset($_SESSION['sexe']) && $_SESSION['sexe']=='Monsieur') 
		{echo "checked=\'checked\'";} ?> />
		<label for="homme">Sir</label></td></tr></table>
		
		<!-- nom et prenom -->
    <table>
	<tr><td><label for="nom">Surname</label> : </td>
	<td colspan="3"><input type="text" name="nom" id="nom" tabindex="10" size="70" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['nom'])) {echo 'value=' . $_SESSION['nom'];}
		 else {echo 'value=""';} ?> 
	    /></td></tr> 	
				<?php if (isset($_SESSION['ctrlNom']) && $_SESSION['ctrlNom']==NULL) 
				{echo '<script type="text/javascript">champrouge("nom");</script>' ;} ?>
				
	<tr><td><label for="prenom">First name</label> : </td>
	<td colspan="3"><input type="text" name="prenom" id="prenom" tabindex="20" size="70" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['prenom'])) {echo 'value=' . $_SESSION['prenom'];}
		else {echo 'value=""';}  ?>
	    /></td></tr>
				<?php if (isset($_SESSION['ctrlPrenom']) && $_SESSION['ctrlPrenom']==false) 
				{echo '<script type="text/javascript">champrouge("prenom");</script>' ;} ?>
		
		<!-- adresse e-mail -->
	<tr><td><label for="email">E-mail</label> : </td>
	<td colspan="3"><input type="text" name="email" id="email" tabindex="30" size="70" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['email'])) {echo 'value=' . $_SESSION['email'];}
		else {echo 'value=""';}  ?>
	    /></td></tr>
				<?php if (isset($_SESSION['ctrlEmail']) && $_SESSION['ctrlEmail']==false) 
				{echo '<script type="text/javascript">champrouge("email");</script>' ;} ?>
				
		<!-- adresse postale -->
	<tr><td><label for="adresse">Address</label> : </td>
	<td colspan="3"><input type="text" name="adresse" id="adresse" tabindex="40" size="70" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['adresse'])) {echo 'value=' . $_SESSION['adresse'];}
		else {echo 'value=""';}  ?>
	    /></td></tr>
				<?php if (isset($_SESSION['ctrlAdresse']) && $_SESSION['ctrlAdresse']==false) 
				{echo '<script type="text/javascript">champrouge("adresse");</script>' ;} ?>
				
	<tr><td><label for="codepostal">Postal nr</label> : </td>
	<td><input type="text" name="codepostal" id="codepostal" tabindex="50" size="7" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['codepostal'])) {echo 'value=' . $_SESSION['codepostal'];}
		else {echo 'value=""';}  ?>
	    /></td>
				<?php if (isset($_SESSION['ctrlCodePostal']) && $_SESSION['ctrlCodePostal']==false) 
				{echo '<script type="text/javascript">champrouge("codepostal");</script>' ;} ?>
				
	<td><label for="ville">City</label> : </td>
	<td><input type="text" name="ville" id="ville" tabindex="60" size="43" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['ville'])) {echo 'value=' . $_SESSION['ville'];}
		else {echo 'value=""';}  ?>
	    /></td></tr>
				<?php if (isset($_SESSION['ctrlVille']) && $_SESSION['ctrlVille']==false) 
				{echo '<script type="text/javascript">champrouge("ville");</script>' ;} ?>
				
	<tr><td><label for="pays">Country</label> : </td>
	<td colspan="3"><input type="text" name="pays" id="pays" tabindex="70" size="70" onfocus='champblanc(this.name);' 
		<?php if (isset($_SESSION['pays'])) {echo 'value=' . $_SESSION['pays'];}
		else {echo 'value=""';}  ?>
	    /></td></tr>
				<?php if (isset($_SESSION['ctrlPays']) && $_SESSION['ctrlPays']==false) 
				{echo '<script type="text/javascript">champrouge("pays");</script>' ;} ?>
    </table>
    <div><input class="boutonform" type="button" value="Delete all" onclick="effacecoord()" /></div>
	</fieldset>
 
 
<!-- CHAMPS SERVICES -->
<fieldset><legend>Transfer</legend>
	
	
		<!-- transfert depuis l'aeroport -->
	<table><tr> 
	<td><input type="checkbox" name="transde" id="transde" 
		<?php if(isset($_SESSION['transde'])) {
		if($_SESSION['transde']=="on") {echo "checked=\'checked\'"; } 
		} ?>
	    /></td> 
	<td colspan="8"><label for="transde">I need to be taken at the airport</label></td></tr>
	<tr>
	<td class='alinea'>&nbsp;</td>
	
	<td><label for="transde">Which?</label> : </td>
	<td class='alinea'>&nbsp;</td>
	<td><select name="aeroportarr" id="aeroportarr">
	    <option value='Genève'>Geneva</option>
	    <option value='Zurich'>Zurich</option>
	    <option value='Ne sais pas encore'>I don't know yet</option></select></td>
	<td class='alinea'>&nbsp;</td>
	
	<td><label for="datearr">Planned arrival date <br />(DD.MM.YY)</label> : </td>
	<td class='alinea'>&nbsp;</td>
	<td><input type="text" name="datearr" id="datearr" size="8" maxlength="8" 
		<?php if (isset($_SESSION['datearr'])) {echo 'value=' . $_SESSION['datearr'];}
		 else {echo "value=''";} ?> 
	    /></td></tr></table>
		
		<!-- transfert vers l'aeroport -->
	<table><tr> 
	<td><input type="checkbox" name="transvers" id="transvers"  
		<?php if(isset($_SESSION['transvers'])) {
		if($_SESSION['transvers']=="on") {echo "checked=\'checked\'"; } 
		} ?> 
	    /></td> 
    <td colspan="8"><label for="transvers">I need to be brought to the airport</label></td></tr>
    <tr>
	<td class='alinea'>&nbsp;</td>
	
	<td><label for="transde">Which?</label> : </td>
	<td class='alinea'>&nbsp;</td>
	<td><select name="aeroportdep" id="aeroportdep">
	    <option value='Genève'>Geneva</option>
	    <option value='Zurich'>Zurich</option>
	    <option value='Ne sais pas encore'>I don't know yet</option></select></td>
	<td class='alinea'>&nbsp;</td>
	
	<td><label for="datedep">Planned departure date <br />(DD.MM.YY)</label> : </td>
	<td class='alinea'>&nbsp;</td>
	<td><input type="text" name="datedep" id="datedep" size="8" maxlength="8" 
		<?php if (isset($_SESSION['datedep'])) {echo 'value=' . $_SESSION['datedep'];}
		 else {echo "value=''";} ?> 
	    /></td></tr></table>
		
		<!-- lieu de sejour probable -->
	<table><tr>
	<td>Where are you planning to stay? <br />(Hotel, city,...) </td>
	<td class='alinea'>&nbsp;</td> <td><input type="text" name ="sejour" id="sejour" size="55" 
	<?php if (isset($_SESSION['sejour'])) {echo 'value=' . $_SESSION['sejour'];}
		 else {echo "value=''";} ?> 
		 /></td></tr>
	</table>
	</fieldset>
 
 
<!-- CHAMPS PROGRAMMES -->
<fieldset><legend>Programs</legend>
   
   
		<!-- nombre de personnes -->
	<table><tr>
	<td><label for='nbpersonnes'>How many adults?</label></td><td class='alinea'></td>
	<td><input type='text' name='nbpersonnes' id='nbpersonnes' tabindex='90' size='4' 
		<?php if (isset($_SESSION['nbpersonnes'])) {echo 'value=' . $_SESSION['nbpersonnes'];}
		 else {echo "value=''";} ?> 
		 /></td><td class='alinea'></td>
	<td><label for='nbenfants'>How many children? <br />(less than 14 y.o.)</label></td><td class='alinea'></td>
	<td><input type='text' name='nbenfants' id='nbenfants' tabindex='100' size='4' 
		<?php if (isset($_SESSION['nbenfants'])) {echo 'value=' . $_SESSION['nbenfants'];}
		 else {echo "value=''";} ?> 
		 /></td>
	</tr></table>
	
		<!-- excursion sur demande -->
	<table><tr>
	<td><input type="checkbox" name="exdem" id="exdem" 
		<?php if(isset($_SESSION['exdem'])) {
		if($_SESSION['exdem']=="on") {echo "checked=\'checked\'";} 
		} ?>
	  /></td>
    <td><h3><label for="exdem">Custom excursion</label></h3></td></tr>
	
	<tr> <td class='alinea'>&nbsp;</td> <td>Thanks for adding a short description of your choice :</td></tr>
	<tr> <td class='alinea'>&nbsp;</td> <td><textarea name="description" id="description" rows="3" cols="30" 
		><?php if (isset($_SESSION['description'])) {echo $_SESSION['description'];} ?></textarea></td></tr>
	<tr> <td>&nbsp;</td> </tr> 
	
		<!-- excursions proposees -->
	<tr> <td>&nbsp;</td> <td><h3>Our proposals :</h3></td></tr>
	
	<tr>
	<td><input type="checkbox" name="ex1" id="ex1" 
		<?php if(isset($_SESSION['ex1'])) {
		if($_SESSION['ex1']=="on") {echo "checked=\'checked\'";} 
		} ?>
	  /></td>
    <td><label for="ex1">MONTREUX - Chillon's Castle</label></td></tr>
	
	<tr>
	<td><input type="checkbox" name="ex2" id="ex2" 
		<?php if(isset($_SESSION['ex2'])) {
		if($_SESSION['ex2']=="on") {echo "checked=\'checked\'";} 
		} ?>
	  /></td>
    <td><label for="ex2">GRUYERE - dairy - Giger's museum</label></td></tr>
	
	<tr>
	<td><input type="checkbox" name="ex3" id="ex3" 
		<?php if(isset($_SESSION['ex3'])) {
		if($_SESSION['ex3']=="on") {echo "checked=\'checked\'";} 
		} ?>
	  /></td>  
    <td><label for="ex3">GLACIERS OF THE RHONE - Souvorov's road - Devil's bridge</label></td></tr>
	
	</table>
	
	<div><input class="boutonform" type="button" value="Delete all" onclick="effacechoix()" /></div>
	</fieldset>
 
 
<!-- CHAMP COMMENTAIRES -->
<fieldset><legend>Commentaries</legend>
  	<div><textarea name="commentaires" id="commentaires" rows="5" cols="30" tabindex="200" 
		><?php if (isset($_SESSION['commentaires'])) {echo $_SESSION['commentaires'];} ?> </textarea></div>
	</fieldset>
   
<div>
<input type="hidden" name="issent" value="on" />
<input class="bouton" type="submit" value="Submit"/> <br /><br /></div>
</form>


<!--  METHODE PHP POUR EFFACER LES CHAMPS -->
<!--
<form method="post" action="formulaireFR.php">
   <input type="hidden" name="triggertxt" value="off" />
   <input class="bouton" type="submit" value="Effacer vos coordonnées" />
</form>
<form method="post" action="formulaireFR.php">
   <input type="hidden" name="triggerbox" value="off" />
   <input class="bouton" type="submit" value="Effacer vos choix" />
</form>
<?php unset($_POST['triggertxt']); unset($_POST['triggerbox']); ?> 
-->


<div class='back'><a href='#all'>Back to the top</a></div>
</div></div></div>
<?php include("../pied.html"); ?>