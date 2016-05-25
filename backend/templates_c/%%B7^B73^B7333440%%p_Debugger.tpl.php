<?php /* Smarty version 2.6.14, created on 2016-05-24 17:50:24
         compiled from Debugger/p_Debugger.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'Debugger/p_Debugger.tpl', 1, false),array('block', 'CWBarra', 'Debugger/p_Debugger.tpl', 2, false),array('block', 'CWMarcoPanel', 'Debugger/p_Debugger.tpl', 5, false),array('block', 'CWPanel', 'Debugger/p_Debugger.tpl', 8, false),array('block', 'CWBarraSupPanel', 'Debugger/p_Debugger.tpl', 9, false),array('block', 'CWContenedor', 'Debugger/p_Debugger.tpl', 13, false),array('block', 'CWFicha', 'Debugger/p_Debugger.tpl', 14, false),array('block', 'CWBarraInfPanel', 'Debugger/p_Debugger.tpl', 44, false),array('block', 'CWTabla', 'Debugger/p_Debugger.tpl', 57, false),array('block', 'CWFila', 'Debugger/p_Debugger.tpl', 58, false),array('block', 'CWContenedorPestanyas', 'Debugger/p_Debugger.tpl', 78, false),array('function', 'CWMenuLayer', 'Debugger/p_Debugger.tpl', 3, false),array('function', 'CWBotonTooltip', 'Debugger/p_Debugger.tpl', 10, false),array('function', 'CWCampoTexto', 'Debugger/p_Debugger.tpl', 17, false),array('function', 'CWBoton', 'Debugger/p_Debugger.tpl', 45, false),array('function', 'CWPaginador', 'Debugger/p_Debugger.tpl', 68, false),array('function', 'CWPestanya', 'Debugger/p_Debugger.tpl', 79, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'])); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  $this->_tag_stack[] = array('CWBarra', array('usuario' => $this->_tpl_vars['smty_usuario'],'codigo' => $this->_tpl_vars['smty_codigo'],'customTitle' => $this->_tpl_vars['smty_customTitle'],'modal' => $this->_tpl_vars['smty_modal'],'iconOut' => "glyphicon glyphicon-log-out",'iconHome' => "glyphicon glyphicon-home",'iconInfo' => "glyphicon glyphicon-info-sign")); $_block_repeat=true;smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo smarty_function_CWMenuLayer(array('name' => ($this->_tpl_vars['smty_nombre']),'cadenaMenu' => ($this->_tpl_vars['smty_cadenaMenu'])), $this);?>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarra($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_tag_stack[] = array('CWMarcoPanel', array('conPestanyas' => 'true')); $_block_repeat=true;smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<!--*********** PANEL fil ******************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'fil','action' => 'buscar','method' => 'post','estado' => ($this->_tpl_vars['estado_fil']),'claseManejadora' => 'Debugger')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Mantenimiento de Debugger')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar Debugger','funcion' => 'insertar','actuaSobre' => 'ficha','action' => 'Debugger__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '04','iconCSS' => "glyphicon glyphicon-refresh",'titulo' => 'Limpiar campos','funcion' => 'limpiar','actuaSobre' => 'ficha'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWFicha', array()); $_block_repeat=true;smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Iderror','nombre' => 'fil_iderror','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_iderror'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_iderror']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Aplicacion','nombre' => 'fil_aplicacion','size' => '100','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_aplicacion'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_aplicacion']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Modulo','nombre' => 'fil_modulo','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_modulo'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_modulo']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Version','nombre' => 'fil_version','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_version'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_version']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Usuario','nombre' => 'fil_usuario','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_usuario'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_usuario']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha','nombre' => 'fil_fecha','size' => '0','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_fecha'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_fecha']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Tipo','nombre' => 'fil_tipo','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_tipo'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_tipo']), $this);?>
</td>
					</tr>
					<tr>
						<td><?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Mensaje','nombre' => 'fil_mensaje','size' => '0','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['fil_mensaje'],'dataType' => $this->_tpl_vars['dataType_Debugger']['fil_mensaje']), $this);?>
</td>
					</tr>
				</table>
				<br/>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFicha($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '50','iconCSS' => "glyphicon glyphicon-search",'texto' => 'Buscar','class' => 'button','accion' => 'buscar','mostrarEspera' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<!-- ****************** PANEL lis ***********************-->
	<?php $this->_tag_stack[] = array('CWPanel', array('id' => 'lis','tipoComprobacion' => 'envio','action' => 'operarBD','method' => 'post','estado' => ($this->_tpl_vars['estado_lis']),'claseManejadora' => 'Debugger')); $_block_repeat=true;smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('CWBarraSupPanel', array('titulo' => 'Listado de Debugger')); $_block_repeat=true;smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '01','iconCSS' => "glyphicon glyphicon-plus",'titulo' => 'Insertar Debugger','funcion' => 'insertar','actuaSobre' => 'tabla','action' => 'Debugger__nuevo'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '02','iconCSS' => "glyphicon glyphicon-edit",'titulo' => 'Modificar Debugger','funcion' => 'modificar','actuaSobre' => 'tabla'), $this);?>

			<?php echo smarty_function_CWBotonTooltip(array('imagen' => '03','iconCSS' => "glyphicon glyphicon-minus",'titulo' => 'Eliminar Debugger','funcion' => 'eliminar','actuaSobre' => 'tabla'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraSupPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWContenedor', array()); $_block_repeat=true;smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('CWTabla', array('conCheck' => 'true','conCheckTodos' => 'true','id' => 'Tabla1','numFilasPantalla' => '10','datos' => $this->_tpl_vars['smty_datosTabla'])); $_block_repeat=true;smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $this->_tag_stack[] = array('CWFila', array('tipoListado' => 'false')); $_block_repeat=true;smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Iderror','nombre' => 'lis_iderror','size' => '4','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_iderror'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_iderror']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Aplicacion','nombre' => 'lis_aplicacion','size' => '100','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_aplicacion'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_aplicacion']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Modulo','nombre' => 'lis_modulo','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_modulo'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_modulo']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Version','nombre' => 'lis_version','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_version'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_version']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Usuario','nombre' => 'lis_usuario','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_usuario'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_usuario']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Fecha','nombre' => 'lis_fecha','size' => '0','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_fecha'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_fecha']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Tipo','nombre' => 'lis_tipo','size' => '50','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_tipo'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_tipo']), $this);?>

					<?php echo smarty_function_CWCampoTexto(array('textoAsociado' => 'Mensaje','nombre' => 'lis_mensaje','size' => '0','editable' => 'true','visible' => 'true','value' => $this->_tpl_vars['defaultData_Debugger']['lis_mensaje'],'dataType' => $this->_tpl_vars['dataType_Debugger']['lis_mensaje']), $this);?>

				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWFila($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>				
				<?php echo smarty_function_CWPaginador(array('enlacesVisibles' => '3','iconCSS' => 'true'), $this);?>

			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWTabla($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>			
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedor($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('CWBarraInfPanel', array()); $_block_repeat=true;smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo smarty_function_CWBoton(array('imagen' => '41','iconCSS' => "glyphicon glyphicon-ok",'texto' => 'Guardar','class' => 'button','accion' => 'guardar'), $this);?>

			<?php echo smarty_function_CWBoton(array('imagen' => '42','iconCSS' => "glyphicon glyphicon-remove",'texto' => 'Cancelar','class' => 'button','accion' => 'cancelar'), $this);?>
			
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWBarraInfPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>						
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	

<!-- ****************** PESTANYAS ************************-->
	<?php $this->_tag_stack[] = array('CWContenedorPestanyas', array()); $_block_repeat=true;smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo smarty_function_CWPestanya(array('tipo' => 'fil','estado' => $this->_tpl_vars['estado_fil']), $this);?>
		
		<?php echo smarty_function_CWPestanya(array('tipo' => 'lis','estado' => $this->_tpl_vars['estado_lis']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWContenedorPestanyas($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWMarcoPanel($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>