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
    <input type="submit" name="reset" value="Reset">
    </form>
    <?php
    session_start();
    if(isset($_REQUEST["reset"])){
        session_destroy();
    }
    if(isset($_REQUEST["submit"])){ //Has tocat el botó?
        $paraules= ["hola","que","tal","persona","cosa","taula","papa","mama","casa","nen"];
        $lletra = $_REQUEST["lletra"];
        if (isset($_SESSION['random'])){ //Tens la variable session?
            echo "entra aqui";
            $_SESSION["lletres_p"][]=$lletra;
            if(strpos($lletra, $_SESSION["paraula"]) !== false){
                echo "trobada";
                for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) {
                    if($_SESSION["array_par"][$i] == $lletra){
                        $_SESSION["guions"][$i] = $lletra;
                    }
                }
            }
            else{
                echo "has fallat";
                $_SESSION["intents"] = $_SESSION["intents"] - 1;
            }
            echo "Lletres provades: ";
            foreach ($_SESSION["lletres_p"] as $a) {
                echo $a . ", ";
            }
            foreach ($_SESSION["guions"] as $b) {
                echo $b . " ";
            }
            echo "Et queden " . $_SESSION["intents"] . " intents";
        }
        else{
            //generem valor random indicant posicions array
            $_SESSION["random"] = rand(0,9); 
            // Guardem la paraula de la posicio random
            $_SESSION["paraula"] = $paraules[$_SESSION["random"]];
            //Array session que guarda lletres provades
            $_SESSION["lletres_p"]=array(); 
            $_SESSION["array_par"]=array();
            //Bucle per generar array buit de guions amb mateix tamany que paraula
            for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) { 
                # code...
                $_SESSION["guions"][]= "_";
                $_SESSION["array_par"][]=$_SESSION["paraula"][$i];
            }
            $_SESSION["intents"]=10;
            $_SESSION["lletres_p"][]=$lletra;
            if(strpos($lletra, $_SESSION["paraula"]) !== false){
                echo "trobada";
                for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) {
                    if($_SESSION["array_par"][$i] == $lletra){
                        $_SESSION["guions"][$i] = $lletra;
                    }
                }
            }
            else{
                echo "has fallat";
                $_SESSION["intents"] = $_SESSION["intents"] - 1;
            }
            echo "Lletres provades: ";
            foreach ($a as $_SESSION["lletres_p"]) {
                echo $a . ", ";
            }
            foreach ($b as $_SESSION["guions"]) {
                echo $b . " ";
            }
            echo "Et queden " . $_SESSION["intents"] . " intents";


            

            
        }

    }
    ?>
</body>
</html>