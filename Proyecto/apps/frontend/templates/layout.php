<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <?php use_helper('JavascriptBase') ?>
        <?php echo javascript_tag('window.onload = function(){'); ?>
    </head>

    <body>
        <div id="fondo_fijo"></div>
        <div id="contenedor_principal">
            <div id="contenedor_superior" class="fondo_gris1">
                <div id="contenedor_menu" class="contenido_centrado">
                    <div id="nombreusr"><?php include_slot("nombreUsuario") ?>
                    </div>
                    <div id="menu">
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                                <td class="izq"></td>
                                <td class="centro">

                                    <!-- Menú principal - Inicio -->
                                    <ul id="menu_lista">
                                        <?php include_slot("menuPrincipal") ?>
                                    </ul>
                                    <!-- Menú principal - Fin -->

                                </td>
                                <td class="der"></td>
                            </tr>
                        </table>
                    </div>

                    <!-- Submenú - Inicio -->
                    <?php include_slot('submenu'); ?>
                    <!-- Submenú - Fin -->
                </div>
            </div>
            <div id="contenedor_resto">
                <div id="contenedor_medio">
                    <div id="bloque_cabeza">
                        <div id="cabeza" class="contenido_centrado"></div>
                    </div>
                    <div id="bloque_cuerpo">
                        <div id="contenedor_cuerpo" class="contenido_centrado">

                            <!-- Área de trabajo - Inicio -->
                            <div id="area_trabajo">
                                <?php echo $sf_content; ?>
                            </div>
                            <!-- Área de trabajo - Fin -->

                        </div>
                    </div>
                </div>
                <div id="contenedor_inferior" class="fondo_azul1">
                    <div id="pie" class="contenido_centrado">
						Universidad Centroamericana &quot;Jos&eacute; Sime&oacute;n Ca&ntilde;as&quot;. El Salvador, a&ntilde;o 2011.
                        <br />Sitio web desarrollado 100&#037; con software libre.
                        <br />Potenciado por <a href="http://www.symfony-project.org/"><img src="<?php echo sfConfig::get('app_url_imagenes') ?>/logos/symfony.png" border="0" /></a> y <a href="http://www.doctrine-project.org/"><img src="<?php echo sfConfig::get('app_url_imagenes') ?>/logos/doctrine.png" border="0" /></a>
                        <br /><br />
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php echo javascript_tag('}'); ?>
</html>
