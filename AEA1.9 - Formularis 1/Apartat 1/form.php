<?php
$nom = $_POST['nom'];
$cognoms = $_POST['cognoms'];
$edat = $_POST['edat'];
$provincies = $_POST['provincies'];
$telefon = $_POST['telefon'];
$color = $_POST['color'];
$cicle = $_POST['cicle'];
$estat = $_POST['estat'];
$estatProfessional = $_POST['estatProfessional'];

$estudiant = isset($_POST['estudiant']) ? 'Estudiant' : '';
$treballador = isset($_POST['treballador']) ? 'Treballador' : '';

echo 'Hola, ' . $nom . ' ' . $cognoms . '.';
echo '<br>';
echo 'Tens ' . $edat . ' anys.';
echo '<br>';
echo 'Ets de la provincia de ' . $provincies . '.';
echo '<br>';
echo 'Telèfon: ' . $telefon . '<br>' . 'Estas cursant el cicle formatiu ' . $cicle;
echo '<br>';
echo 'Color preferit: ' . $color . ' <label style="color: ' . $color . '; background-color: ' . $color . ';">' . $color . '</label>';
echo '<br>';
echo 'Estat civil: ' . $estat;
echo '<br>';
echo "Estat professional: ";
if ($estudiant && $treballador) {
    echo "Estudiant i treballador";
} else {
    echo "$estudiant$treballador";
}
echo "<br>";
?>

<label style="color: #ffff; background-color: #ffff"