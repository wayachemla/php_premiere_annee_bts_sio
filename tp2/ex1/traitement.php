<?php
$codesecret = $_POST["codesecret"];
$montant = $_POST["montant"];

echo "<h2>Résultat de l'opération</h2>";

if ($codesecret == "1234") {
    if ($montant > 0 && $montant <= 5000) {
        echo "<p style='color:green;'>Retrait de $montant € accepté. Veuillez récupérer vos billets.</p>";
    } else {
        echo "<p style='color:red;'>Erreur : Le montant doit être compris entre 1 et 5000 €.</p>";
    }
} else {
    echo "<p style='color:red;'>Code secret incorrect.</p>";
}
?>
<a href="index.html">Retour</a>