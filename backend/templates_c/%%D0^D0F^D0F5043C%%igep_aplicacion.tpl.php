<?php /* Smarty version 2.6.14, created on 2016-04-06 16:23:51
         compiled from igep_aplicacion.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'CWVentana', 'igep_aplicacion.tpl', 1, false),array('function', 'CWPantallaEntrada', 'igep_aplicacion.tpl', 2, false),)), $this); ?>
<?php $this->_tag_stack[] = array('CWVentana', array('tipoAviso' => $this->_tpl_vars['smty_tipoAviso'],'titulo' => $this->_tpl_vars['smty_tituloApl'],'codAviso' => $this->_tpl_vars['smty_codError'],'descBreve' => $this->_tpl_vars['smty_descBreve'],'textoAviso' => $this->_tpl_vars['smty_textoAviso'],'onLoad' => $this->_tpl_vars['smty_jsOnLoad'],'onUnload' => $this->_tpl_vars['smty_jsOnUnload'],'iconOut' => "glyphicon-log-out",'iconHome' => "glyphicon-home")); $_block_repeat=true;smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo smarty_function_CWPantallaEntrada(array('usuario' => $this->_tpl_vars['smty_usuario'],'nomApl' => $this->_tpl_vars['smty_aplicacion'],'codApl' => $this->_tpl_vars['smty_codaplic'],'version' => $this->_tpl_vars['smty_version'],'gvhidraversion' => $this->_tpl_vars['smty_gvHidraVersion'],'ubicacion' => $this->_tpl_vars['smty_ubicacion']), $this);?>
			
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_CWVentana($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>