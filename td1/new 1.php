<ul>
	<li><a href="?message=Hi">En Anglais</a></li>
	<li><a href="?message=Salut">En Français</a></li>
	<li><a href="?">Par défaut</a></li>
</ul>
<?php
$message = $_GET['message']??"Bonjour";
$qui=$_GET['qui']??'Tout le monde !';
$color=$_GET['bgColor']??'white';
$bgColor='#ffffff';
$fontSize='14px';
extract($_GET);
?>

<form method="get" action="new 1.php">
	<fieldset>
		<legend>Message :</legend>
		<input type="text" name="message" value="<?=$message?>" placeholder="Saisir un message">
		<input type="text" name="qui" value="<?=$qui?>" placeholder="Saisir à qui?">
	</fieldset>
	<fieldset>
		<legend>Styles :</legend>
		<input type="color" name="color" value="<?$color?>">
		<input type="color" name="bgColor" value="<?$bgColor?>">
	</fieldset>
	<button type="submit">Valider</button>
</form>

<h1><?=$message?></h1>

<p style="color: <?=$color?>;background-color:<?=$bgColor?>;font-size?>"><?=$qui?></p>