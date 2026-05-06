<?php
$prix_base = 40; // Coupe + Brushing
$couleur = $_POST["couleur"] ?? "non";
$soin = $_POST["soin"] ?? "non";

$total = $prix_base;

if ($couleur == "oui") {
    $total += 30;
    if ($soin == "oui") {
        $total += 10;
    }
}

echo "<h3>Total à payer : $total €</h3>";
?>