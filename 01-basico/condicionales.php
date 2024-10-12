<?php

/**
 * if(expresion){
 * codigo a ejecutar
 * }
 * 

 */
$edad=17;
if ($edad>=18){
    echo"hola";
}elseif($edad>14){

    echo "aun eres legal";
}
?>
<div> <?php if ($edad<=18): ?>
        <h1>hola bebe</h1>
    <?php endif; ?>
</div>;
<?php
//realizar un programa donde se pida un num si es par deir que es par
?>
<form action="condiciones.php" method="get">
    <input type="text" name="num">
</form>
<?php
$number=8;
if(($number%2)==0){
    echo $number." numero es par";
}
echo"<br>";
//en un almacen se hace un 20% de descuento, cuya cumpra sea mayor de 100 dollars. cuanto pagara cada persona por su compra
$compra=1000;
if($compra>100){
    echo "usted debe pagar: ".$compra*0.8;
}