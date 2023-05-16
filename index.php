<?php   

function dividir (int $numero1, int $numero2) : void {
    echo $numero1 / $numero2;
}
try {
    dividir (10,0);
} catch (Exception $exception){
    echo $exception->getMessage ();
}

//function dividir (int $   numero1, int $numero2) : float {
//    return $numero1 / $numero2;
//}

dividir (10,0);
echo "<br>";
echo "Todo funcionó correctamente";