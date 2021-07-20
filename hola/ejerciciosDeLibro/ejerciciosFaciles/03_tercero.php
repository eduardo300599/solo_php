<?php

function suma($n1, $n2)
{
    $resultado = $n1+$n2;

    return $resultado;
}


$resul = suma(8,5);

if($resul > 12)
{
    echo "el resultado es mayor a 12";
}else{
    echo "el resultado es menor o igual";
}



