<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $tablica = array();

    for($i=1; $i <= 20; $i++) {
        $liczba = rand(1,20);
        array_push($tablica, $liczba);
        if($i%2!=1) { 
        print_r("Liczba parzysta $i \n");
        } else {
        print_r("liczba nieparzysta $i \n"); }
    }
         
        
    
    
    $srednia = 0;
    if(count($tablica)) {
        $srednia = array_sum($tablica) / count($tablica);
    }
    print_r("srednia liczb to $srednia");

    $suma = array_sum($tablica);
    print_r("suma liczb to $summa");
?>
</body>
</html>