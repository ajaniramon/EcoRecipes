<?php
/* gvHIDRA. Herramienta Integral de Desarrollo Rápido de Aplicaciones de la Generalitat Valenciana
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
*  Av. Blasco Ibáñez, 50
*  46010 VALENCIA
*  SPAIN
*  +34 96386 24 83
*  gvhidra@gva.es
*  www.gvhidra.org
*
*/

/**
* Clase Manejadora Debugger
* 
* Creada con Genaro: generador de código de gvHIDRA
* 
* @autor genaro
* @version 2.0
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License v.2
*/

class Debugger extends gvHidraForm_DB
{
	public function __construct() {

		//Recogemos dsn de conexion
		$conf = ConfigFramework::getConfig();
		$g_dsn = $conf->getDSN('g_dsn');

		$nombreTablas= array('tcmn_errlog');
		parent::__construct($g_dsn, $nombreTablas);

		/************************ QUERYs ************************/
		
		//Consulta del modo de trabajo LIS
		$str_select = "SELECT iderror as \"lis_iderror\", aplicacion as \"lis_aplicacion\", modulo as \"lis_modulo\", version as \"lis_version\", usuario as \"lis_usuario\", fecha as \"lis_fecha\", tipo as \"lis_tipo\", mensaje as \"lis_mensaje\" FROM tcmn_errlog";
		$this->setSelectForSearchQuery($str_select);
		
		//Where del modo de trabajo LIS
		//$this->setWhereForSearchQuery('');
		
		//Order del modo de trabajo LIS
		$this->setOrderByForSearchQuery('1');

		/************************ END QUERYs ************************/


		/************************ MATCHINGs ************************/

		//Seccion de matching: asociacion campos TPL y campos BD

		//Modo de trabajo FIL
		$this->addMatching("fil_iderror","iderror","tcmn_errlog");
		$this->addMatching("fil_aplicacion","aplicacion","tcmn_errlog");
		$this->addMatching("fil_modulo","modulo","tcmn_errlog");
		$this->addMatching("fil_version","version","tcmn_errlog");
		$this->addMatching("fil_usuario","usuario","tcmn_errlog");
		$this->addMatching("fil_fecha","fecha","tcmn_errlog");
		$this->addMatching("fil_tipo","tipo","tcmn_errlog");
		$this->addMatching("fil_mensaje","mensaje","tcmn_errlog");

		//Modo de trabajo LIS
		$this->addMatching("lis_iderror","iderror","tcmn_errlog");
		$this->addMatching("lis_aplicacion","aplicacion","tcmn_errlog");
		$this->addMatching("lis_modulo","modulo","tcmn_errlog");
		$this->addMatching("lis_version","version","tcmn_errlog");
		$this->addMatching("lis_usuario","usuario","tcmn_errlog");
		$this->addMatching("lis_fecha","fecha","tcmn_errlog");
		$this->addMatching("lis_tipo","tipo","tcmn_errlog");
		$this->addMatching("lis_mensaje","mensaje","tcmn_errlog");

		/************************ END MATCHINGs ************************/

		
		/************************ TYPEs ************************/
	
		//Fechas: gvHidraDate type
		$fecha = new gvHidraDatetime(false);
		$fecha->setCalendar(false);
		$this->addFieldType('fil_fecha',$fecha);
		$fecha = new gvHidraDatetime(true);
		$fecha->setCalendar(false);
		$fecha->setRequired(true);
		$this->addFieldType('lis_fecha',$fecha);


		//Strings: gvHidraString type
		$string = new gvHidraString(false, 100);
		$this->addFieldType('fil_aplicacion',$string);
		$string = new gvHidraString(false, 100);
		$string->setRequired(true);
		$this->addFieldType('lis_aplicacion',$string);
		
		$string = new gvHidraString(false, 50);
		$this->addFieldType('fil_modulo',$string);
		$this->addFieldType('lis_modulo',$string);
		
		$string = new gvHidraString(false, 50);
		$this->addFieldType('fil_version',$string);
		$string = new gvHidraString(false, 50);
		$string->setRequired(true);
		$this->addFieldType('lis_version',$string);
		
		$string = new gvHidraString(false, 50);
		$this->addFieldType('fil_usuario',$string);
		$string = new gvHidraString(false, 50);
		$string->setRequired(true);
		$this->addFieldType('lis_usuario',$string);
		
		$string = new gvHidraString(false, 50);
		$this->addFieldType('fil_tipo',$string);
		$string = new gvHidraString(false, 50);
		$string->setRequired(true);
		$this->addFieldType('lis_tipo',$string);
		

		//Integers: gvHidraInteger type
		$int = new gvHidraInteger(false, 4);
		$this->addFieldType('fil_iderror',$int);
		$int = new gvHidraInteger(true, 4);
		$int->setRequired(true);
		$this->addFieldType('lis_iderror',$int);
		

		//Floats: gvHidraFloat type

		/************************ END TYPEs ************************/
				
		/************************ COMPONENTS ************************/
		
		//Declaracion de Listas y WindowSelection
		//La definición debe estar en el AppMainWindow.php

		/************************ END COMPONENTS ************************/						
		
		//Mantener los valores del modo de trabajo FIL tras la busqueda
		$this->keepFilterValuesAfterSearch(true);

		//Mostrar todos los resultados despues de insertar
		$this->showOnlyNewRecordsAfterInsert(false);

	}//End construct
	
	/************************ CRUD METHODs ************************/

	/**
	* metodo preBuscar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la busqueda. Por ejemplo:
	* - Incluir condiciones de filtrado.
	* - Cancelar la accion de buscar. 
	*/	
	public function preBuscar($objDatos) {
		
		return 0;
	}

	/**
	* metodo postBuscar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar los datos obtenidos. Por ejemplo:
	* - Completar la informacion obtenida.
	* - Cambiar el color de las filas dependiendo de su valor
	*/	
	public function postBuscar($objDatos) {
		
		return 0;
	}

	/**
	* metodo preInsertar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar los datos a insertar. Por ejemplo:
	* - Calcular el valor de una secuencia.
	* - Cancelar la acción de insercion.
	*/		
	public function preInsertar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo postInsertar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para completar la operacion de insercion. Por ejemplo:
	* - Insertar en una segunda tabla.
	*/		
	public function postInsertar($objDatos) {
		
		return 0;
	}

	/**
	* metodo preModificar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la operacion de actualizacion. Por ejemplo:
	* - Calcular valores derivados.
	* - Cancelar la acción de actualizacion.
	*/
	public function preModificar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo postModificar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para completar la operacion de actulizacion. Por ejemplo:
	* - Actualizar en una segunda tabla
	*/	
	public function postModificar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo preBorrar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para parametrizar la operacion de borrado. Por ejemplo:
	* - Cancelar la acción de borrado.
	*/	
	public function preBorrar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo postBorrar
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica para completar la operacion de borrado. Por ejemplo:
	* - Borrar en una segunda tabla
	*/	
	public function postBorrar($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo preNuevo
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui los valores por defecto antes de insertar.
	*/	
	public function preNuevo($objDatos) {
		
		return 0;
	}
	
	/**
	* metodo preIniciarVentana
	* 
	* @access public
	* @param object $objDatos
	* 
	* Incorpore aqui la logica a ejecutar cuando entra en la ventana. Por ejemplo:
	* - Puede comprobar que el usuario tiene los permisos necesarios.
	*/	
	public function preIniciarVentana($objDatos) {
		
		return 0;
	}
	
	/************************ END CRUD METHODs ************************/
	
	/**
	* metodo accionesParticulares
	* 
	* @access public
	* @param string $str_accion
	* @param object $objDatos
	* 
	* Incorpore aqui la logica de sus acciones particulares. 
	* -En el parametro $str_accion aparece el id de la accion.
	* -En el parametro $objDatos esta la informacion de la peticion. Recuerde que debe fijar la operacion
	* con el metodo setOperacion.
	*/	
	public function accionesParticulares($str_accion, $objDatos) {
        
		throw new Exception('Se ha intentado ejecutar la acción '.$str_accion.' y no está programada.');        
    }
	
}//End Debugger

?>