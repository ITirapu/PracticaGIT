<?php 
$resultado = "";
$catalogo = array('lenteja_Pardina' =>array('precio' => 4.48, 'stock' => 356),'garbanzo' =>array('precio' => 4.52, 'stock' => 364),'guisantes' =>array('precio' => 7.99, 'stock' => 81),'azukis' =>array('precio' => 4.40, 'stock' => 329),'lenteja_roja' =>array('precio' => 3.80, 'stock' => 340));
$nombre;
$precio;
$cantidad;
$calculo = 0;
ksort($catalogo);
foreach ($catalogo as $key => $fila){
    $resultado .= "<div class='legumbre' id='{$key}'>";
    $resultado .= "<img src='img/{$key}.jpg' alt='{$key}' width='60px' height='60px'>";
    $nombre = strtoupper($key);
    $precio = $catalogo[$key]['precio'];
    $cantidad = $catalogo[$key]['stock'];
    $resultado .= "<p>El precio/Kg de {$nombre} es de {$precio} y hay una cantidad en la tienda {$cantidad}kg</p></div>";
    $calculo = $calculo + $precio * $cantidad;
}
$resultado .= "<p>Dinero en tienda = {$calculo}</p>";

include "views/vista_resultado.php";
?>