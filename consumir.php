<?php

//URL PARA LEER
$url       = "https://raw.githubusercontent.com/TatyMaybeth/SOA/master/examen.json";

//VARIABLE PARA LEER EL ARCHIVO
$miVar     = file_get_contents($url);
//VARIABLE PARA DECODIFICAR EL JSON Y PARA SER LEIDO POR PHP
$decodjson = json_decode($miVar);

echo "Informacion JSON desde la url";
echo "<br>";

foreach ($decodjson as $p) 
  {
    echo "id: ".$id = $p->id;
    echo "<br>";
    echo "cliente: ".$cliente = $p->cliente;
    echo "<br>";
    echo "placa: ".$placa=$p->vehiculo->placa;
    echo "<br>";
    
  }
?>