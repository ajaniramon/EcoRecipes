<?php
/* gvHIDRA. Herramienta Integral de Desarrollo R�pido de Aplicaciones de la Generalitat Valenciana
*
* Copyright (C) 2006 Generalitat Valenciana.
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the GNU General Public License
* as published by the Free Software Foundation; either version 2
* of the License, or (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
*
* For more information, contact:
*
*  Generalitat Valenciana
*  Conselleria d'Infraestructures i Transport
*  Av. Blasco Ib��ez, 50
*  46010 VALENCIA
*  SPAIN
*  +34 96386 24 83
*  gvhidra@gva.es
*  www.gvpontis.gva.es
*
*/

/**
* Fichero con todos los includes SPAGUTI (despu�s del sesi�n start)
* 
* package igep
*/
//Clases de Smarty
include_once('igep/smarty.php');

//Config de CS
$customDirname = ConfigFramework::getCustomDirName();
include_once ('custom/'.$customDirname.'/include.php');
?>
