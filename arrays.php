<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $dias=[];
    $mes = array();
    for ($i=0; $i < 30 ; $i++) { 
        $dias[]=$i;
    }
    for ($j=0; $j < 12 ; $j++) { 
        # code... 
        $mes[$j]=$j;
    }

    /*for ($i=0; $i < 30 ; $i++) { 
        echo $dias[$i] . ", ";
    }*/
    foreach($dias as $dia){
        echo $dia . ", ";
    }
    echo "<br><br>";
    for ($j=0; $j < 12 ; $j++) { 
        # code...
        echo $mes[$j] . ", ";
    }





?>
</body>

</html>