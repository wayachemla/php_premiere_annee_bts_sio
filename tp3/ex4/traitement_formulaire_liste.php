<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- en-tete technique-->
<head>
<title>Formulaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<!-- appel de la feuille de style externe -->
 <link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>

<!--corps-->
<body>
<h1>Votre commande</h1>
<?php
// recuperation des variables du formulaire par le tableau associatif $_POST
$marque = $_POST["marque"];
$modele = $_POST["modele"];

	echo "<p>Vous avez choisi un ordinateur de chez $marque</p>";
	echo "<p>Modèle : $modele</p>";
	echo "<p>Malheureusement nous sommes en rupture de stock</p>";
?>

<!-- Formulaire pour demander à être averti -->
<form name="formulaire2" action="confirmation_avertissement.php" method="post">

	<!-- on transmet la marque et le modèle en champs cachés -->
	<input type="hidden" name="marque" value="<?php echo $marque; ?>">
	<input type="hidden" name="modele" value="<?php echo $modele; ?>">

	<fieldset>
	<h4>Souhaitez-vous être averti ?</h4>
		<label><input type="radio" name="avertissement" value="oui"> Je souhaite être averti lorsque ce modèle sera disponible</label>
		<label><input type="radio" name="avertissement" value="non"> Je ne souhaite pas être averti</label>
	</fieldset>

	<div class="envoi">
		<input type="submit" class="envoi" value="Valider" />
	</div>

</form>

</body>
</html>
