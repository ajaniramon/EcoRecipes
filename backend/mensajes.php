<?php
/**
 * Mensajes particulares a la aplicaci�n
 * Variables globales:
 * - vector $g_mensajesParticulares
 * $Revision: 1.2 $
 */

//Variable de mensajes particulares de la aplicaci�n.
global $g_mensajesParticulares;
$g_mensajesParticulares = array(
	'APL-1'=>array('descCorta'=>'ATENCI�N: APLICACI�N EN PRUEBAS.','descLarga'=>'Acabas de entrar en una aplicaci�n en pruebas. Est� basada en la versi�n inestable de gvHIDRA, por lo que puede contener errores. <br/><br/>El equipo gvHIDRA','tipo'=>'ALERTA'),
	'APL-2'=>array('descCorta'=>'Categoría no seleccionada.','descLarga'=>'Es necesario seleccionar una categoria.','tipo'=>'ALERTA'),
	'APL-3'=>array('descCorta'=>'Nombre de categoría no introducido.','descLarga'=>'Es necesario introducir un nombre para la categoría.','tipo'=>'ALERTA'),
	'APL-4'=>array('descCorta'=>'El cliente seleccionado tiene pedidos asociados.','descLarga'=>'El sistema no permite esta operación.','tipo'=>'ALERTA'),
	'APL-5'=>array('descCorta'=>'El artículo seleccionado figura en uno o más pedidos.','descLarga'=>'El sistema no permite esta operación.','tipo'=>'ALERTA'),
	'APL-6'=>array('descCorta'=>'La categoría seleccionada tiene artículos.','descLarga'=>'El sistema no permite esta operación.','tipo'=>'ALERTA'),
	
);

?>