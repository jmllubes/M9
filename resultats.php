<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
        $nom = $_REQUEST["nom"];
        $cognoms = $_REQUEST["cognoms"];
        $DNI = $_REQUEST["dni"];
        $data = $_REQUEST["data"];
        $password = $_REQUEST["password"];
        $sexe = $_REQUEST["sexe"];
        echo "Benvingut/da  $nom  esperem que estiguis bé!";
        $curs = "";

        $valors = array();

        if(isset($_REQUEST["DAM"])){
            $curs = $_REQUEST["DAM"];
            
        }
        if(isset($_REQUEST["ARI"])){
            $curs = $curs . " " . $_REQUEST["ARI"];
            
        }
        if(isset($_REQUEST["STI"])){
            $curs = $curs . " " . $_REQUEST["STI"];
            
        }

    $poblacio = $_REQUEST["poblacio"];
    $valors = ["nom" => $nom,"cognoms" =>$cognoms,
    "curs" => $curs,"data" => $data,"DNI" =>$DNI,
    "contrasenya" =>$password,"poblacio" =>$poblacio,"sexe"=>$sexe];

        if(isset($_SESSION["nom"])){
            $_SESSION["nom"][]=$nom;
            $_SESSION['cognoms'][]=$cognoms;
            $_SESSION['curs'][]=$curs;
            $_SESSION['data'][]=$data;
            $_SESSION['DNI'][]=$DNI;
            $_SESSION['contrasenya'][]=$password;
            $_SESSION['poblacio'][]=$poblacio;
            $_SESSION['sexe'][]=$sexe;
        }
        else{
            $_SESSION["nom"]=[];
            $_SESSION['cognoms']=[];
            $_SESSION['curs']=[];
            $_SESSION['data']=[];
            $_SESSION['DNI']=[];
            $_SESSION['contrasenya']=[];
            $_SESSION['poblacio']=[];
            $_SESSION['sexe']=[];
            $_SESSION["nom"][]=$nom;
            $_SESSION['cognoms'][]=$cognoms;
            $_SESSION['curs'][]=$curs;
            $_SESSION['data'][]=$data;
            $_SESSION['DNI'][]=$DNI;
            $_SESSION['contrasenya'][]=$password;
            $_SESSION['poblacio'][]=$poblacio;
            $_SESSION['sexe'][]=$sexe;

        }

        

    ?>
    <br><br>

    <?php
    echo "    <table>
    <tr>
    <th>Nom</th>
    <th>Cognoms</th>
    <th>DNI</th>
    <th>Data</th>
    <th>Password</th>
    <th>Sexe</th>
    <th>Curs</th>
    <th>Poblacio</th>
    </tr>";

    for ($i=0; $i < count($_SESSION["nom"]); $i++) { 
        echo "
            <tr>
            <td>". $_SESSION['nom'][$i] ."</td>
            <td> ". $_SESSION['cognoms'][$i] ." </td>
            <td>". $_SESSION['DNI'][$i] ."</td>
            <td> ". $_SESSION['data'][$i] ."</td>
            <td> ". $_SESSION['contrasenya'][$i] ."</td>
            <td> ". $_SESSION['sexe'][$i] ."</td>
            <td> ". $_SESSION['curs'][$i] ."  </td>
            <td> ". $_SESSION['poblacio'][$i] ."  </td>
            </tr>
            ";
    }
echo "</table>";



foreach($valors as $a => $b){
    echo "El " . $a . " es " . $b . "<br>";
}

echo "<br>";echo "<br>";


?>

<button><a href="formulari.php">Formulari</a></button>
<br><br>
<form action="resultats.php" method="post">
<input type="submit" name="reset" value="Reset">
</form>
<?php
if(isset($_REQUEST["reset"])){ //comprovar si he clicat botó reset
    session_destroy();
    header("Location: formulari.php");
}
?>
</body>

</html>