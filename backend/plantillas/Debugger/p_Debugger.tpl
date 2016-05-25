{CWVentana tipoAviso=$smty_tipoAviso  codAviso=$smty_codError  descBreve = $smty_descBreve  textoAviso=$smty_textoAviso onLoad=$smty_jsOnLoad}
{CWBarra usuario=$smty_usuario codigo=$smty_codigo customTitle=$smty_customTitle modal=$smty_modal iconOut="glyphicon glyphicon-log-out" iconHome="glyphicon glyphicon-home" iconInfo="glyphicon glyphicon-info-sign"}
	{CWMenuLayer name="$smty_nombre" cadenaMenu="$smty_cadenaMenu"}	
{/CWBarra}
{CWMarcoPanel conPestanyas="true"}

<!--*********** PANEL fil ******************-->
	{CWPanel id="fil" action="buscar" method="post" estado="$estado_fil" claseManejadora="Debugger"}
		{CWBarraSupPanel titulo="Mantenimiento de Debugger"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" iconCSS="glyphicon glyphicon-plus" titulo="Insertar Debugger" funcion="insertar" actuaSobre="ficha" action="Debugger__nuevo"}
			{CWBotonTooltip imagen="04" iconCSS="glyphicon glyphicon-refresh" titulo="Limpiar campos" funcion="limpiar" actuaSobre="ficha"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWFicha}
				<table class="text" cellspacing="4" cellpadding="4" border="0">
					<tr>
						<td>{CWCampoTexto textoAsociado="Iderror" nombre="fil_iderror" size="4" editable="true" visible="true" value=$defaultData_Debugger.fil_iderror dataType=$dataType_Debugger.fil_iderror}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Aplicacion" nombre="fil_aplicacion" size="100" editable="true" visible="true" value=$defaultData_Debugger.fil_aplicacion dataType=$dataType_Debugger.fil_aplicacion}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Modulo" nombre="fil_modulo" size="50" editable="true" visible="true" value=$defaultData_Debugger.fil_modulo dataType=$dataType_Debugger.fil_modulo}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Version" nombre="fil_version" size="50" editable="true" visible="true" value=$defaultData_Debugger.fil_version dataType=$dataType_Debugger.fil_version}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Usuario" nombre="fil_usuario" size="50" editable="true" visible="true" value=$defaultData_Debugger.fil_usuario dataType=$dataType_Debugger.fil_usuario}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Fecha" nombre="fil_fecha" size="0" editable="true" visible="true" value=$defaultData_Debugger.fil_fecha dataType=$dataType_Debugger.fil_fecha}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Tipo" nombre="fil_tipo" size="50" editable="true" visible="true" value=$defaultData_Debugger.fil_tipo dataType=$dataType_Debugger.fil_tipo}</td>
					</tr>
					<tr>
						<td>{CWCampoTexto textoAsociado="Mensaje" nombre="fil_mensaje" size="0" editable="true" visible="true" value=$defaultData_Debugger.fil_mensaje dataType=$dataType_Debugger.fil_mensaje}</td>
					</tr>
				</table>
				<br/>
			{/CWFicha}
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="50" iconCSS="glyphicon glyphicon-search" texto="Buscar" class="button" accion="buscar" mostrarEspera="true"}
		{/CWBarraInfPanel}						
	{/CWPanel}

<!-- ****************** PANEL lis ***********************-->
	{CWPanel id="lis" tipoComprobacion="envio" action="operarBD" method="post" estado="$estado_lis" claseManejadora="Debugger"}
		{CWBarraSupPanel titulo="Listado de Debugger"}
			{CWBotonTooltip imagen="01" iconCSS="glyphicon glyphicon-plus" titulo="Insertar Debugger" funcion="insertar" actuaSobre="tabla"  action="Debugger__nuevo"}
			{CWBotonTooltip imagen="02" iconCSS="glyphicon glyphicon-edit" titulo="Modificar Debugger" funcion="modificar" actuaSobre="tabla"}
			{CWBotonTooltip imagen="03" iconCSS="glyphicon glyphicon-minus" titulo="Eliminar Debugger" funcion="eliminar" actuaSobre="tabla"}
		{/CWBarraSupPanel}
		{CWContenedor}
			{CWTabla conCheck="true" conCheckTodos="true" id="Tabla1" numFilasPantalla="10" datos=$smty_datosTabla}
				{CWFila tipoListado="false"}
					{CWCampoTexto textoAsociado="Iderror" nombre="lis_iderror" size="4" editable="true" visible="true" value=$defaultData_Debugger.lis_iderror dataType=$dataType_Debugger.lis_iderror}
					{CWCampoTexto textoAsociado="Aplicacion" nombre="lis_aplicacion" size="100" editable="true" visible="true" value=$defaultData_Debugger.lis_aplicacion dataType=$dataType_Debugger.lis_aplicacion}
					{CWCampoTexto textoAsociado="Modulo" nombre="lis_modulo" size="50" editable="true" visible="true" value=$defaultData_Debugger.lis_modulo dataType=$dataType_Debugger.lis_modulo}
					{CWCampoTexto textoAsociado="Version" nombre="lis_version" size="50" editable="true" visible="true" value=$defaultData_Debugger.lis_version dataType=$dataType_Debugger.lis_version}
					{CWCampoTexto textoAsociado="Usuario" nombre="lis_usuario" size="50" editable="true" visible="true" value=$defaultData_Debugger.lis_usuario dataType=$dataType_Debugger.lis_usuario}
					{CWCampoTexto textoAsociado="Fecha" nombre="lis_fecha" size="0" editable="true" visible="true" value=$defaultData_Debugger.lis_fecha dataType=$dataType_Debugger.lis_fecha}
					{CWCampoTexto textoAsociado="Tipo" nombre="lis_tipo" size="50" editable="true" visible="true" value=$defaultData_Debugger.lis_tipo dataType=$dataType_Debugger.lis_tipo}
					{CWCampoTexto textoAsociado="Mensaje" nombre="lis_mensaje" size="0" editable="true" visible="true" value=$defaultData_Debugger.lis_mensaje dataType=$dataType_Debugger.lis_mensaje}
				{/CWFila}				
				{CWPaginador enlacesVisibles="3" iconCSS="true"}
			{/CWTabla}			
		{/CWContenedor}
		{CWBarraInfPanel}
			{CWBoton imagen="41" iconCSS="glyphicon glyphicon-ok" texto="Guardar" class="button" accion="guardar"}
			{CWBoton imagen="42" iconCSS="glyphicon glyphicon-remove" texto="Cancelar" class="button" accion="cancelar"}			
		{/CWBarraInfPanel}						
	{/CWPanel}	

<!-- ****************** PESTANYAS ************************-->
	{CWContenedorPestanyas}
		{CWPestanya tipo="fil" estado=$estado_fil}		
		{CWPestanya tipo="lis" estado=$estado_lis}
	{/CWContenedorPestanyas}
{/CWMarcoPanel}
{/CWVentana}