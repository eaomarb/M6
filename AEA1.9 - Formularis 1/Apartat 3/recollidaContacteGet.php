<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <title>Recollida de Contacte</title>
</head>
<body>
    <h1>Recollida de Contacte</h1>

    <?php
    $nom = $_GET["nom"];
    $email = $_GET["email"];
    $assumpte = $_GET["assumpte"];
    $text = $_GET["text"];
    $trobat = $_GET["trobat"];

    echo "<p>Nom i Cognoms: $nom</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Assumpte: $assumpte</p>";
    echo "<p>Text: $text</p>";
    echo "<p>On ens has trobat: $trobat</p>";
    ?>
</body>
</html>
