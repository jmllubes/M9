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
            echo $_SESSION["paraula"] . "<br>";

            $_SESSION["lletres_p"][]=$lletra;
            if(strpos($_SESSION["paraula"],$lletra) !== False){
                echo "trobada" . "<br>";
                for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) {
                    if($_SESSION["array_par"][$i] == $lletra){
                        $_SESSION["guions"][$i] = $lletra;
                    }
                }
            }
            else{
                echo "has fallat" . "<br>";
                $_SESSION["intents"] = $_SESSION["intents"] - 1;
            }
            echo "Lletres provades: ";
            foreach ($_SESSION["lletres_p"] as $a) {
                echo $a . ", ";
            }
            echo "<br>";
            foreach ($_SESSION["guions"] as $b) {
                echo $b . " ";
            }
            echo "<br>";
            echo "Et queden " . $_SESSION["intents"] . " intents";

            if($_SESSION["array_par"] == $_SESSION["guions"]){
                echo "Has guanyat!!";
                session_destroy();
            }
            if($_SESSION["intents"] == 0){
                echo "Has perdut!!";
                session_destroy();
            }
        }
        else{
            //generem valor random indicant posicions array
            $_SESSION["random"] = rand(0,9); 
            // Guardem la paraula de la posicio random
            $_SESSION["paraula"] = $paraules[$_SESSION["random"]];
            //Array session que guarda lletres provades
            $_SESSION["lletres_p"]=array(); 
            $_SESSION["array_par"]=array();
            echo $_SESSION["paraula"] . "<br>";
            //Bucle per generar array buit de guions amb mateix tamany que paraula
            for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) { 
                # code...
                $_SESSION["guions"][]= "_";
                $_SESSION["array_par"][]=$_SESSION["paraula"][$i];
            }
            $_SESSION["intents"]=10;
            $_SESSION["lletres_p"][]=$lletra;
            if(strpos($_SESSION["paraula"],$lletra) !== false){
                echo "trobada" . "<br>";
                for ($i=0; $i < strlen($_SESSION["paraula"]) ; $i++) {
                    if($_SESSION["array_par"][$i] == $lletra){
                    
                        $_SESSION["guions"][$i] = $lletra;
                    }
                }
            }
            else{
                echo "has fallat" . "<br>";
                $_SESSION["intents"] = $_SESSION["intents"] - 1;
            }
            echo "Lletres provades: ";
            foreach ($_SESSION["lletres_p"] as $a) {
                echo $a . ", ";
            }
            echo "<br>";
            foreach ($_SESSION["guions"] as $b) {
                echo $b . " ";
            }
            echo "<br>";

            echo "Et queden " . $_SESSION["intents"] . " intents";



            

            
        }

    }
    ?>
</body>
</html>