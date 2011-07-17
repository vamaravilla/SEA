<?php if ($sf_user->hasFlash('aviso')): ?>
<div class="flash flash_exito"><div class="exito"><?php echo $sf_user->getFlash('aviso') ?></div></div>
<?php endif ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="flash flash_error"><div class="exito"><?php echo $sf_user->getFlash('error') ?></div></div>
<?php endif ?>
<center>
    <table id="gen_form" width="100%">
        <thead>
            <tr>
                <td colspan="2"><center><h1>Ficha de acad&eacute;mico <?php echo $idUsuario ?></h1></center></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="grupo_datos" colspan="2"><h2>Datos generales</h2></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">C&oacute;digo de empleado:</td>
                <td><?php echo $acdAcademico->getCodigoAcademico() ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Nombres:</td>
                <td><?php echo sprintf('%s %s', $acdAcademico->getPrimerNombreAcad(), $acdAcademico->getSegundoNombreAcad()); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Apellidos:</td>
                <td><?php echo sprintf('%s %s', $acdAcademico->getPrimerApellidoAcad(), $acdAcademico->getSegundoApellidoAcad()); ?></td>
            </tr>
            <?php if ($acdAcademico->getSexoAcad() == true){ ?>
            <tr>
                <td class="campo_nombre ancho1">Apellido de casada:</td>
                <td><?php echo $acdAcademico->getApellidoCasadaAcad(); ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td class="campo_nombre ancho1">Sexo:</td>
                <td><?php echo $acdAcademico->getSexoacad_Texto(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Fecha de nacimiento:</td>
                <td><?php echo $acdAcademico->getFechaNacimientoAcad_Texto(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Es escalafonado:</td>
                <td><?php echo $acdAcademico->getEsescalafonado_Texto(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Es pensionado:</td>
                <td><?php echo $acdAcademico->getEspensionado_Texto(); ?></td>
            </tr>
            <tr>
                <td class="campo_nombre ancho1">Usa lentes:</td>
                <td><?php echo $acdAcademico->getUsalentes_Texto(); ?></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php echo link_to('Editar datos personales', 'ficha_editar_privado', array('sf_subject' => $acdAcademico)); ?>
                </td>
            </tr>
        </tfoot>
    </table>
</center>