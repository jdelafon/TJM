<?php
$replFR = array('RU' => 'FR', 'EN' => 'FR');
$replRU = array('FR' => 'RU', 'EN' => 'RU');
$replEN = array('FR' => 'EN', 'RU' => 'EN');
//change aussi bien dans le nom du fichier que dans le chemin ../FR/***FR.php -> ../RU/***RU.php
?>
<table><tr>
<td>
	<a href="<?php echo strtr($_SERVER['SCRIPT_NAME'], $replFR) ?> ">
	<acronym title='Français'><img src="../images/drapeaux/FR.png" alt=" Français" /></acronym></a>
</td>
<td>
	<a href="<?php echo strtr($_SERVER['SCRIPT_NAME'], $replRU) ?> ">
	<acronym title='Русский'><img src="../images/drapeaux/RU.png" alt=" Русский" /></acronym></a>
</td>
<td>
	<a href="<?php echo strtr($_SERVER['SCRIPT_NAME'], $replEN) ?> ">
	<acronym title='English'><img src="../images/drapeaux/EN.png" alt=" English" /></acronym></a>
</td></tr></table>