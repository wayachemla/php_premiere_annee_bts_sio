<html>
<head>
<title>DAB</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Exemple de formulaire">
<meta name="keywords" lang="fr" content="html,formulaire,boutons">
<meta name="Author" content="">
<link href="style_formulaire.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
<h4>Contrôle du montant</h4>

<?php
/* récupération des données postées dans le formulaire */
$montant = $_POST["montant"];

if ($montant < 0)
{
    echo "<p>Erreur : le montant ne peut pas être négatif.</p>";
}
else if ($montant > 5000)
{
    echo "<p>Erreur : le montant ne peut pas dépasser 5000 euros.</p>";
}
else
{
    echo "<p>Retrait de $montant euros confirmé.</p>";
}
?>

</body>
</html>
