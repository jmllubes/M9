<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    
    Nom:
    <input type="text" name="nom" id=""><br>
    Text:
    <input type="text" name="text" id=""><br>

    <input type="submit" name="submit" value="Enter">

    </form>
<?php 
session_start();
if(isset($_REQUEST["submit"])){ // Has tocat el botó?
    $nom = $_REQUEST["nom"];
    $text = $_REQUEST["text"];
    $llista = array();
    if (isset($_SESSION["nom"])) {
        for ($i=0; $i < strlen($nom) ; $i++) { 
            # code...
            $_SESSION["nom"][]= $nom[$i];
        }
        $_SESSION["nom"][]="1";
        $llista = explode(" ",$text);
        foreach($llista as $paraula){
            $_SESSION["text"][]= $paraula;
        }
        $_SESSION["text"][]="1";
        echo "<table>
        <tr><th>lletra</th></tr>";
        foreach ($_SESSION["nom"] as $valor) {
            echo "<tr><td>" . $valor . "</td></tr>";
        }
        echo "</table>" . "<br>";
        var_dump($_SESSION["nom"]);
        var_dump($_SESSION["text"]);
    } else {
        $_SESSION["nom"]=array();
        $_SESSION["text"]=[];
        for ($i=0; $i < strlen($nom) ; $i++) { 
            # code...
            $_SESSION["nom"][]= $nom[$i];
        }
        $_SESSION["nom"][]="1";
        $llista = explode(" ",$text);
        foreach($llista as $paraula){
            $_SESSION["text"][]= $paraula;
        }
        $_SESSION["text"][]="1";
        echo "<table>
        <tr><th>lletra</th></tr>";
        foreach ($_SESSION["nom"] as $valor) {
            echo "<tr><td>" . $valor . "</td></tr>";
        }
        echo "</table>" . "<br>";

        var_dump($_SESSION["text"]);
    }
    


    





}

?>

</body>
</html>