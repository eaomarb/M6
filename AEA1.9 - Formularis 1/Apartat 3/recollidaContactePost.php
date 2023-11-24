<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <title>Recollida de Contacte</title>
</head>
<body>
    <h1>Recollida de Contacte</h1>

    <?php
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $assumpte = $_POST['assumpte'];
        $text = $_POST['text'];
        $trobat = $_POST['trobat'];

        echo "<p>Nom i Cognoms: $nom</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Assumpte: $assumpte</p>";
        echo "<p>Text: $text</p>";
        echo "<p>On ens has trobat: $trobat</p>";
    ?>
</body>
</html>
