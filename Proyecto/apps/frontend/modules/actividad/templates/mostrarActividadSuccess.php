<?php if ($sf_user->hasFlash('aviso')): ?>
<div class="flash flash_aviso"><?php echo $sf_user->getFlash('aviso')
?></div>
<?php endif ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="flash flash_error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif ?>
<center>
    <table id="mostrar_registro" width="100%">
        <thead>
            <tr>
                <td colspan="2"><center><h1>Actividad</h1></center></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="grupo_datos" colspan="2"><h2>Datos generales</h2></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Nombre:</td>
                <td><?php echo $actActividad->getNombreactividad() ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Tipo de actividad::</td>
                <td><?php echo $actActividad->TIPO_ACTIVIDAD; ?></td>
            </tr>
<?php
if (count($actActividad->AVANCE_ACTIVIDAD) == 1)
{
?>
            <tr>
                <td class="campo_nombre ancho1">Estado:</td>
                <td><?php echo $actActividad->AVANCE_ACTIVIDAD->ESTADO_ACTIVIDAD; ?></td>
            </tr>
<?php
}
?>
            <tr>
                <td class="campo_nombre ancho1">Descripci&oacute;n:</td>
                <td><?php echo $actActividad->getDescripcionactividad(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1" colspan="2"></td>
            </tr>
<?php
if (count($actActividad->AVANCE_ACTIVIDAD) > 1)
{
?>
            <tr>
                <td class="grupo_datos" colspan="2"><h2>Avances</h2></td>
            </tr>
            <tr>
                <td colspan="2">
<?php
    $arrCampos
        = array
            (
                'id'                => 'No.',
                'nombreavance'      => 'Avance',
                'fechainicio'       => 'Inicio',
                'fechafin'          => 'Finalización',
                'fechareporte'      => 'Reportado el',
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
    );
?>

                </td>
            </tr>
<?php
}
else
{
    $avnAvance = $actActividad->AVANCE_ACTIVIDAD;
?>
            <tr>
                <td class="campo_nombre ancho1">Ciclo de realización:</td>
                <td><?php echo sprintf('%s-%s', $avnAvance->getCiclorealizacion(),$avnAvance->getAniociclorealizacion()); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Fecha de inicio:</td>
                <td><?php echo $avnAvance->getFechainicioav(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Fecha de finalización:</td>
                <td><?php echo $avnAvance->getFechafinav(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Actividad reportada el:</td>
                <td><?php echo $avnAvance->getFechareporteav(); ?></td>
            </tr>
<?php
}
?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php echo link_to('Editar datos personales', 'ficha_editar_privado', array('sf_subject' => $acdAcademico, 'propio' => $intPropio,)); ?>
                </td>
            </tr>
        </tfoot>
    </table>
</center>