<!-- Part para cargar el menu principal-->
<?php slot('menuPrincipal')   ?>

<?php  foreach($modulos as $modulo){ ?>
<!-- Ítem 1 - Inicio -->
<li class="m1_sup item" >
    <a href="#nogo">
        <div class="<?php echo $modulo->codmodulo; ?>" onclick="mostrarAcciones('<?php echo $modulo->codmodulo; ?>')" >
            <div class="sup_nombre_tam1 m1_oculto sup_item_nombre">
                <div class="vert_medio1"><div class="vert_medio2"><div class="vert_medio3"><?php echo $modulo->nombremodulo; ?></div></div></div>
            </div>
        </div>
    </a>

    <!-- Submenú o descripción -->
    <div class="m1_sub m1_oculto sup_item_sub">
        <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td class="esquina esquina_arr_izq"></td>
                <td class="medio_fondo"></td>
                <td class="esquina esquina_arr_der"></td>
            </tr>
            <tr>
                <td class="medio_fondo"></td>
                <td class="medio_fondo medio_lista">
                <?php echo $modulo->descripcionmodulo; ?>
                </td>
                <td class="medio_fondo"></td>
            </tr>
            <tr>
                <td class="esquina esquina_aba_izq"></td>
                <td class="medio_fondo"></td>
                <td class="esquina esquina_aba_der"></td>
            </tr>
        </table>
    </div>
</li>
<!-- Ítem x - Fin -->
<?php } ?>

<?php end_slot(); ?>

<!--Slot para cargar las acciones-->
<?php slot('submenu') ?>

<?php
use_helper('jQuery');
?>

                        <div id="submenu" class="fondo_azul2">
                        <div id="cabeza_submenu"></div>
                        <div id="cuerpo_submenu">
                            <h1>
                            <div id="titulo_modulo"></div>
                            </h1>
                            <br />
                            
                            <div class="seccion">
                            Acciones
                            </div>
                                <div id="resumen" class="">  
                                    En esta sección usted visualizará la lista de acciones que podrá realizar.
                                </div>
                            <?php foreach($modulos as $modulo){ 
                                $accAcciones = ACCIONTable::getInstance()->obtenerAccionesPorModuloYPerfil($modulo, $usuario->PERFIL);
                            ?>
                                <div id="accion_<?php echo $modulo->codmodulo; ?>" style="display:none;">  
                                    <ul>
                                        <?php foreach($accAcciones as $accion){ ?>
                                        <?php if($accion->codaccion < 20){ ?>
                                        <li><?php 
                                                echo jq_link_to_remote($accion->getNombreaccion(), 
                                                      array('update' => 'area_trabajo',
                                                            'url' => $accion->getUrlaccion(),
                                                            'type' => 'synchronous',
                                                            'method'=> 'get',
                                                            'loading' => jq_visual_effect('fadeIn',  '#indicador'),
                                                            'complete'=> jq_visual_effect('fadeOut', '#indicador')
                                             )); ?>
                                        </li>
                                        <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                            <br/>
                            <div class="seccion">
                            Reportes
                            </div>
                               <div id="resumenRep">  
                                    En esta sección usted visualizará la lista de reportes.
                              </div>
                            <?php foreach($modulos as $modulo){
                                $accAcciones = ACCIONTable::getInstance()->obtenerAccionesPorModuloYPerfil($modulo, $usuario->PERFIL);    
                            ?>
                                <div id="reporte_<?php echo $modulo->codmodulo; ?>" style="display:none;">  
                                    <ul>
                                        <?php foreach($accAcciones as $accion){ ?>
                                        <?php if($accion->codaccion == 30){ ?>
                                        <li><?php 
                                                echo jq_link_to_remote($accion->getNombreaccion(), 
                                                      array('update' => 'area_trabajo',
                                                            'url' => $accion->getUrlaccion(),
                                                            'type' => 'synchronous',
                                                            'method'=> 'get',
                                                            'loading' => jq_visual_effect('fadeIn',  '#indicador'),
                                                            'complete'=> jq_visual_effect('fadeOut', '#indicador')
                                             )); ?>
                                        </li>
                                        <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            <?php } ?>
                            <br />
                        </div>
                        <div id="pie_submenu"></div>
                    </div>
    
<?php end_slot(); ?>

    
   
<!--Slot para cargar el nombre de usuario y logout-->
<?php slot('nombreUsuario') ?>
    <?php echo $usuario->nombreusuario; ?>
    (<?php echo $usuario->PERFIL->nombreperfil; ?>)
    - <b><?php echo link_to('Salir', 'user_salir') ?>
    </b>
<?php end_slot(); ?>

<!--Contenido del área de trabajo (sf_content)-->
<center>
	<h1>Sistema de Expedientes de acad&eacute;micos</h1>
	<hr/>
</center>
<p>
    Bienvenido al <b>Sistema de Expedientes de Acad&eacute;micos</b> de la
    <b>Universidad Centroamericana &quot;Jos&eacute; Sime&oacute;n Ca&ntilde;as&quot;</b>.
    Este sistema ha sido desarrollado con el objetivo de brindar a los acad&eacute;micos
    un medio centralizado en el que pueda...
</p>

<p>
    Esta &aacute;rea central es el <b>&aacute;rea de trabajo</b>, que es la parte
    donde se desplegar&aacute;n toda la informaci&oacute;n, formularios y reportes
    que componen las distintas secciones de este sitio web, por lo que es el &aacute;rea
    de principal inter&eacute;s para los usuarios.
</p>
