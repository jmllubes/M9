<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php



?>
    <form action="resultats.php" method="post">

        Nom:
        <input type="text" name="nom" id="" placeholder="Introdueix el teu nom"><br><br>
        Cognoms:
        <input type="text" name="cognoms" id=""><br><br>
        Data de naixement:
        <input type="date" name="data" id=""><br><br>
        DNI:
        <input type="text" name="dni" id=""><br><br>
        Contrasenya:
        <input type="password" name="password" id=""><br><br>
        Sexe: <br>
        Home<input type="radio" name="sexe" id="" value="home"><br>
        Dona<input type="radio" name="sexe" id="" value="dona"><br><br>

        Triar el curs: <br>
        DAM <input type="checkbox" name="DAM" id="" value="DAM"><br>
        ARI <input type="checkbox" name="ARI" id="" value="ARI"><br>
        STI <input type="checkbox" name="STI" id="" value="STI"><br><br>

        Població: <br>
        <select name="poblacio" id="" >
            <option value=""></option>
            <option value="Mollerussa">Mollerussa city</option>
            <option value="Golmés">Golmés</option>
            <option value="Balaguer">Balaguer</option>
            <option value="Palau">Palau</option>
            <option value="Bellpuig">Bellpuig</option>
        </select>
        <br><br>

        <textarea name="descripcio" id="" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Insertar">


    </form>

</body>

</html>