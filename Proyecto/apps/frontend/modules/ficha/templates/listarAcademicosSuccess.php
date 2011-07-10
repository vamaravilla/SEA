<center><h1>Buscar acad&eacute;micos</h1></center>
<br />
<?php

$arrCampos
    = array
        (
            'codigo'            => 'Código',
            'apellidonombre'    => 'Apellido, Nombre',
        );
        
include_partial('global/tblGeneral1',
    array(
        'arrObjetos'        => $sdpPaginador->getResults(),
        'arrCampos'         => $arrCampos,
        'strRuta'           => 'ficha_mostrar_publico',
        'strDistintivo'     => 'codigo',
        'strCampoEnlace'    => 'apellidonombre',
        'sdpPaginador'      => $sdpPaginador,
        'strNombrePlural'   => 'académicos',
        'strRutaEditar'     => 'ficha_editar_publico',
        'strRutaEliminar'   => 'ficha_editar_publico',
        'strRutaCrear'      => 'ficha_crear'
    )
) 
?>
