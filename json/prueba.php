<?php

/*imagen 
nombre
precio
colores
stock
nuevo*/

$producto = [];
$c=0;
for ($i=0; $i < 12; $i++) { 
    $c++;
    if (rand(1,10) > 3){
         $stock = true;
    }else{
         $stock = false;
    }
    if (rand(0,10) > 5){
        $nuevo = true;
   }else{
        $nuevo = false;
   }
    $producto[] = [
        "ubicacion" => "img/PRODUCTOS/TIENDA/img$c.jpg",
        "nombre" => "img$c" ,
        "precio" => rand(500,10000),
        "color" => ["naranja" => '#bb8a01', "Negro" => "#000" ],
        "stock" => $stock,
        "nuevo" => $nuevo
    ];
}
file_put_contents("../json/tienda.json",json_encode($producto));
$producto2 = json_decode(file_get_contents("../json/tienda.json"), true);

echo("<pre>"); var_dump($producto2); echo("</pre>");
?>
