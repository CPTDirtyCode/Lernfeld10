<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Abrechnung Sonnenhof-Küche</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Daten speichern
$gericht1 = "Gemüse-Lasagne";
$anzahl1 = 18;
$preis1 = 7.50;

$gericht2 = "Hähnchen mit Reis";
$anzahl2 = 24;
$preis2 = 8.20;

$gericht3 = "Kartoffelsuppe";
$anzahl3 = 13;
$preis3 = 6.40;

// Kosten berechnen
$gesamt1 = $anzahl1 * $preis1;
$gesamt2 = $anzahl2 * $preis2;
$gesamt3 = $anzahl3 * $preis3;

// Gesamtsummen
$anzahlGesamt = $anzahl1 + $anzahl2 + $anzahl3;
$kostenGesamt = $gesamt1 + $gesamt2 + $gesamt3;
?>

<h1>Abrechnung der Sonnenhof-Küche</h1>

<table>
    <tr>
        <th>Gericht</th>
        <th>Portionen</th>
        <th>Einzelpreis</th>
        <th>Gesamtpreis</th>
    </tr>

    <tr>
        <td><?php echo $gericht1; ?></td>
        <td><?php echo $anzahl1; ?></td>
        <td><?php echo number_format($preis1, 2, ",", "."); ?> €</td>
        <td><?php echo number_format($gesamt1, 2, ",", "."); ?> €</td>
    </tr>

    <tr>
        <td><?php echo $gericht2; ?></td>
        <td><?php echo $anzahl2; ?></td>
        <td><?php echo number_format($preis2, 2, ",", "."); ?> €</td>
        <td><?php echo number_format($gesamt2, 2, ",", "."); ?> €</td>
    </tr>

    <tr>
        <td><?php echo $gericht3; ?></td>
        <td><?php echo $anzahl3; ?></td>
        <td><?php echo number_format($preis3, 2, ",", "."); ?> €</td>
        <td><?php echo number_format($gesamt3, 2, ",", "."); ?> €</td>
    </tr>

    <tr class="gesamt">
        <td>Gesamt</td>
        <td><?php echo $anzahlGesamt; ?></td>
        <td></td>
        <td><?php echo number_format($kostenGesamt, 2, ",", "."); ?> €</td>
    </tr>
</table>

</body>
</html>