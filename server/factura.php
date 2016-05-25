<?php

include("connection.php");
if($_GET["idpedido"] == "" || is_null($_GET["idpedido"])||empty($_GET["idpedido"])){
  http_response_code(500);
  die;
}else{
  $idPedido = $_GET["idpedido"];
}
$link = mysql_connect("localhost", $connection['user'], $connection['password']) or die('No se pudo conectar' . mysql_error());

mysql_query("SET NAMES 'utf8'");

mysql_select_db('shop') or die('No se pudo seleccionar la base de datos');
$queryPedido = <<<query
SELECT * FROM pedido where idpedido = $idPedido;
query;

$queryLineasPedido = <<<query
SELECT linea_pedido.idarticulo,
linea_pedido.unidad,
linea_pedido.precio,
linea_pedido.precioTotal,
 articulo.nombre FROM pedido,linea_pedido, articulo
   WHERE pedido.idpedido = linea_pedido.idpedido
    AND
     pedido.idpedido = $idPedido
      AND linea_pedido.idarticulo = articulo.idarticulo;
query;
$resultSetPedido = mysql_query($queryPedido) or die("Consulta fallida: ".mysql_error());
$resultSetLineasPedido = mysql_query($queryLineasPedido) or die("Consulta fallida: ".mysql_error());

$i=0;
while($row = mysql_fetch_assoc($resultSetLineasPedido)){
  $lineasPedido[$i] = array('nombre'=>$row['nombre'],'idarticulo'=>$row["idarticulo"],'unidad'=>$row['unidad'],'precio'=>$row["precio"],'precioTotal'=>$row['precioTotal']);
  $i++;
}

$row = mysql_fetch_assoc($resultSetPedido);
$datosPedido = array('idpedido'=>$row["idpedido"],'fecha'=>$row["fecha"],'total'=>$row["total"],'dni'=>$row["dni"]);


$pedido = array('datos'=>$datosPedido,'articulos'=>$lineasPedido);

echo json_encode($pedido);


?>
