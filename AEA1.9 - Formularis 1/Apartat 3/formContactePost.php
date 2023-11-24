<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <title>Formulari de Contacte</title>
</head>
<body>
    <h1>Contacta amb nosaltres</h1>
    <form action="recollidaContactePost.php" method="post">
        <p>
            <label for="nom">Nom i Cognoms:</label>
            <input type="text" name="nom" required>
        </p>
        
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </p>

        <p>
            <label for="assumpte">Assumpte:</label>
            <input type="text" name="assumpte">
        </p>

        <p>
            <label for="text">Text:</label>
            <textarea name="text" required></textarea>
        </p>

        <p>
            <label for="trobat">On ens has trobat:</label>
            <select name="trobat" required>
                <option value="conegut">Conegut</option>
                <option value="web">Web</option>
                <option value="altres">Altres</option>
            </select>
        </p>
        

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
