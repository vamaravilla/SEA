<?php use_stylesheets_for_form($formulario) ?>
<?php use_javascripts_for_form($formulario) ?>

<center>
    <?php
        if (!$formulario->getObject()->isNew())
        {
    ?>
    <h1>Nueva Actividad</h1>
    <?php
        }
        else
        {
    ?>
    <h1>Editar Actividad</h1>
    <?php
        }
    ?>
    <br />
    <?php echo form_tag($rutaAceptar,  array('name' => $formulario->getName(), 'multipart' => $multipart)); ?>
        <?php
            if (!$formulario->getObject()->isNew())
            {
                echo tag('input', array('type' => 'hidden', 'name' => 'sf_method', 'value' => 'put'));
            }
            echo tag('input', array('type' => 'hidden', 'name' => 'propio', 'value' => $intPropio));
        ?>
        <table cellpadding="0" cellspacing="0" border="0">
            <tfoot>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Aceptar" class="boton" />
                        <?php echo button_to('Cancelar', $rutaCancelar, array('class' => 'boton')); ?>
                    </td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td class="grupo_datos" colspan="2"><h2>Datos generales</h2></td>
                </tr>
                <?php echo $formulario ?>
            </tbody>
        </table>
    </form>
</center>
