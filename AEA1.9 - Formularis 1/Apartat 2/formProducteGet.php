<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <title>Formulari de producte</title>
</head>
<body>
    <h1>Formulari de producte</h1>
    <form action="recollidaProducteGet.php" method="get">
        <p>
            <label for="nom">Nom del producte:</label>
            <input type="text" name="nom" required>
        </p>

        <p>
            <label for="marca">Marca:</label>
            <select name="marca" required>
                <option value="Nestlé">Nestlé</option>
                <option value="Gillette">Gillette</option>
                <option value="Finish">Finish</option>
            </select>
        </p>

        <p>
            <label for="preu">Preu sense IVA:</label>
            <input type="number" name="preu" step=".01" required>
        </p>

        <p>
            <label>Tipus d'IVA:</label>
            <input type="radio" name="iva" value="4%" required> 4%
            <input type="radio" name="iva" value="8%"> 8%
            <input type="radio" name="iva" value="21%"> 21%
        </p>

        <p>
            <label for="disponibilitat">Disponibilitat:</label>
            <input type="number" name="disponibilitat" required>
        </p>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
