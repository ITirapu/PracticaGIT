<?php include "cabecera.php";
$calculo = 0;
$mensaje = "";
$contador1 = 1;
$contador2 = 1;
$contador3 = 1;
include "helper/funciones.php";
$aleatorio = rand(1,10);
for($contador1;$contador1 <= $aleatorio ;$contador1++){
    if($contador1 == 1){
        $mensaje .= "<tr><th style=>x</th>";
        for($contador3;$contador3 <= 10;$contador3++){
        
        $mensaje .= "<th>{$contador3}</th>"; 
        }
        $mensaje .= "</tr>";
    }
    $clase = esPar($contador1);
    $mensaje .= "<tr><td class='$clase'>{$contador1}</td>";
    for($contador2;$contador2 <= 10;$contador2++){
    $calculo = $contador1*$contador2;
    $div3 = esDivisible3($calculo);
    $mensaje .= "<td class='$clase . $div3'>{$calculo}</td>";
    }
    $mensaje .= "</tr>";    
    $contador2 = 1;
}
echo "<h3>Generando botones</h3>\n";
echo "<h2>tabla del numero {$aleatorio}</h2>";
echo "<table style='Border: 1px solid green'>";
echo $mensaje;
echo "</table>";
include "pie.php";
?>