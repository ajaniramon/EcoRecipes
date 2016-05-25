<?php
    $comportamientoVentana= new IgepPantalla();

    $panel = new IgepPanel('Debugger',"smty_datosTabla","smty_datosFicha");
    $panel->activarModo("fil","estado_fil");
    $panel->activarModo("lis","estado_lis");
    $comportamientoVentana->agregarPanel($panel);

    $s->display('Debugger/p_Debugger.tpl');
?>