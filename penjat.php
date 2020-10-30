<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="penjat.php" method="post">
    <input type="text" name="lletra" placeholder="Introdueix una lletra" id=""><br>
    <input type="submit" name="submit" value="Prova">
    </form>
    <?php
    if(isset($_REQUEST["submit"])){ //Has tocat el botó?
        $paraules= ["hola","que","tal","persona","cosa","taula","papa","mama","casa","nen"];
        if (isset($_SESSION['random'])){ //Tens la variable session?

        }
        else{
            //generem valor random indicant posicions array
            $_SESSION["random"] = rand(0,9); 
            // Guardem la paraula de la posicio random
            $_SESSION["paraula"] = $paraules[$_SESSION["random"]];
            //Array session que guarda lletres provades
            $_SESSION["lletres_p"]=array(); 
            //Bucle per generar array buit de guions amb mateix tamany que paraula
            for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) { 
                # code...
                $_SESSION["guions"][]= "_";
            }
            $_SESSION["intents"]=10;
            

            
        }

    }
    ?>
</body>
</html>