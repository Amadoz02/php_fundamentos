<?php
//calcular el total a pagar en un montallantas, 
//cada llanta vale 800 si se compra menos de 5 llantas y 
//700 si son 5 o mas
$valorLLanta=800;
$cantLLantas=4;
if ($cantLLantas<5){
    $pago=$cantLLantas*800;
    echo "cada una de las $cantLLantas llantas tiene u valor de: 
    800 dll un total de {$pago} dolares";
}else{
    $pago=$cantLLantas*700;
    echo "cada una de las $cantLLantas llamtas tiene u valor de: 
    800 dll. Osea un total de {$pago} dolares";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//determinar si un alumno aproeba o desaprueba
//aprueba si prom de 3 calificaciones es mayor o igail a 3.0
//menos de 3.0 reprueba
$nota1=1;
$nota2=1;
$nota3=1;
$promNotas=($nota1+$nota2+$nota3)/3;
if($promNotas<3.0){
    echo "usted perdio el semestre con una promedio de $promNotas";
}else{
    echo "usted paso el semestre con una promedio de $promNotas";

}
echo "<br>";
echo "<br>";
echo "<br>";
//operador terniario :false ; ?true;
$resultado=0;
echo ($nota1>$nota2)?$resultado=$nota1*$nota2:$resultado=$nota1%$nota2;
echo "<br>";
echo "<br>";
if ($nota1>$nota2 && $nota1>$nota3){
    echo "$nota1 es mayor que $nota2 y  $nota3";
}elseif($nota2>$nota1 && $nota2>$nota3){
    echo "$nota2 es mayor que $nota1 y  $nota3";
}else{
    echo "$nota3 es mayor que $nota2 y  $nota1";
}
echo "<br>";
echo "<br>";
if(True){
    if($nota1>$nota3 && $nota1>$nota2){
        echo "$nota1 es mayor que $nota2 y  $nota3";
    }elseif($nota2>$nota1){
        if($nota2>$nota3){
            echo "$nota2 es mayor que $nota1 y  $nota3";
        }
    }elseif($nota3>$nota1){
            if($nota3>$nota2){
                echo "$nota3 es mayor que $nota2 y  $nota1";
            }
    }else{
        echo "todos los numero son iguales  $nota1 == $nota1 == $nota1";
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$dia=7;

if ($dia==1){
    echo"hoy es lunes";
}elseif ($dia==2){
    echo"hoy es martes";

}elseif ($dia==3){
    echo"hoy es miercoles";

}elseif ($dia==4){
    echo"hoy es jueves";

}elseif ($dia==5){
    echo"hoy es viernes";

}elseif ($dia==6){
    echo"hoy es sabado";

}elseif ($dia==7){
    echo"hoy es domingo";

}else{
    echo"numero incorrecto";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

switch($dia){
    case 1:
        echo"hoy es lunes";
        break;
    case 2:
        echo"hoy es martes";
        break;
    case 3: 
        echo"hoy es miercoles";
        break;
    case 4:
        echo"hoy es jueves";
        break;
    case 5:
        echo"hoy es virnes";
    case 6:
        echo"hoy es sabado";
        break;
    case 7:
        echo"hoy es domingo";
        break;
    default:
    echo"numero incorrecto";
    break;
}