<center><h1>Buscar actividades</h1></center>
<br />
<?php
$arrCampos
    = array
        (
            'id'            => 'No.',
            'nombre'        => 'Nombre de actividad',
        );

include_partial('global/tblGeneral1',
    array(
        'arrObjetos'        => $sdpPaginador->getResults(),
        'arrCampos'         => $arrCampos,
        'strRuta'           => 'actividad_mostrar_publico',
        'strDistintivo'     => 'id',
        'strCampoEnlace'    => 'nombre',
        'sdpPaginador'      => $sdpPaginador,
        'strNombrePlural'   => 'actividades',
        'strRutaEditar'     => 'actividad_editar_publico',
        'strRutaEliminar'   => 'actividad_editar_publico',
        'strRutaCrear'      => 'actividad_crear'
    )
) 
?>
