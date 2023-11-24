<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <title>Recollida Producte</title>
</head>
<body>
    <h1>Recollida Producte</h1>
    
    <?php
    $nom = $_GET["nom"];
    $marca = $_GET["marca"];
    $preuSenseIVA = $_GET["preu"];
    $iva = $_GET["iva"];
    $disponibilitat = $_GET["disponibilitat"];

    $preuAmbIVA = $preuSenseIVA + ($preuSenseIVA * ($iva / 100));

    echo "<p>Nom del producte: $nom</p>";
    echo "<p>Marca: $marca</p>";
    echo "<p>Preu unitari sense IVA: " . $preuSenseIVA . "€</p>";
    echo "<p>Disponibilitat: $disponibilitat unitats</p>";
    echo "<p>Preu total sense IVA: " . $preuSenseIVA*$disponibilitat . "€</p>";
    echo "<p>Tipus d'IVA: $iva</p>";
    echo "<p>Preu unitari amb IVA: " . $preuAmbIVA . "€</p>";
    echo "<p>Preu total amb IVA: " . $preuAmbIVA*$disponibilitat . "€</p";
    ?>
</body>
</html>
