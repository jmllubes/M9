<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="random.php" method="post">
        <?php
        session_start();
 ?>
        <input type="text" name="numero" id="" placeholder="Introdueix un valor entre 1 i 10">
        <br><br>
        <input type="submit" name="submit" value="Comprova">
        <br><br>
        <?php 
        


if(isset($_REQUEST["submit"])){ //Has tocat el botó¿?
    if (isset($_SESSION['random'])){ //Tens creada la variable session random?
        $valor = $_REQUEST["numero"];
        echo "Ja tinc creada la variable session" . "<br>";
        if($_SESSION["random"] == $valor){ //Comparem valor random amb valor introduït
            echo "FELICITATS! HO HAS ENDEVINAT!";
            session_destroy();
        }
        else{
            echo "ETS UN PERDEDOR, el nombre era " . $_SESSION["random"];
        }
    }
    else{ //No tinc creada la variable session
        $_SESSION["random"] = rand(1,10);
        echo "Primera vegada que creo la variable session" . "<br>";
        $valor = $_REQUEST["numero"];
        if($_SESSION["random"] == $valor){ //Comparem valor random amb valor introduït
            echo "FELICITATS! HO HAS ENDEVINAT!";
            session_destroy();

        }
        else{
            echo "ETS UN PERDEDOR, el nombre era " . $_SESSION["random"];
        }

    }

    
}
?>
    </form>
</body>

</html>