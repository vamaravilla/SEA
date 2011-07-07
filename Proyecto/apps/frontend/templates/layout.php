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
					<div id="menu">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td class="izq"></td>
								<td class="centro">

<!-- Menú principal - Inicio -->
<ul id="menu_lista">

	<!-- Ítem 1 - Inicio -->
	<li class="m1_sup item">
		<a href="#nogo">
			<div class="item3">
				<div class="sup_nombre_tam1 m1_oculto sup_item_nombre">
					<div class="vert_medio1"><div class="vert_medio2"><div class="vert_medio3">Asignaci&oacute;n de UMAs</div></div></div>
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
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat volutpat arcu, eget suscipit diam pharetra sed.
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
	<!-- Ítem 1 - Fin -->

	<!-- Ítem 2 - Inicio -->
	<li class="m1_sup item">
		<a href="#nogo">
			<div class="item2">
				<div class="sup_nombre_tam1 m1_oculto sup_item_nombre">
					<div class="vert_medio1"><div class="vert_medio2"><div class="vert_medio3">Actividades acad&eacute;micas</div></div></div>
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
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat volutpat arcu, eget suscipit diam pharetra sed.
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
	<!-- Ítem 2 - Fin -->

	<!-- Ítem 3 - Inicio -->
	<li class="m1_sup item">
		<a href="#nogo">
			<div class="item1">
				<div class="sup_nombre_tam1 m1_oculto sup_item_nombre">
					<div class="vert_medio1"><div class="vert_medio2"><div class="vert_medio3">Informaci&oacute;n personal</div></div></div>
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
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat volutpat arcu, eget suscipit diam pharetra sed.
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
	<!-- Ítem 3 - Fin -->
</ul>
<!-- Menú principal - Fin -->

								</td>
								<td class="der"></td>
							</tr>
						</table>
					</div>
				
<!-- Submenú - Inicio -->
<div id="submenu" class="fondo_azul2">
	<div id="cabeza_submenu"></div>
	<div id="cuerpo_submenu">
		<h1>Submen&uacute;</h1>
		<br />
		<div class="seccion">
			Acciones
		</div>
		<ul id="lista_acciones">
			<li><?php echo link_to('Ver ficha personal', 'ficha_mostrar_privado', array('propio' => 1,)); ?></li>
			<li><?php echo link_to('Ver listado de académicos', 'ficha_listar_academicos') ?></li>
			<li><a href="#nogo">Acci&oacute;n 3</a></li>
			<li><a href="#nogo">Acci&oacute;n 4</a></li>
		</ul>
		<br/>
		<div class="seccion">
			Reportes
		</div>
		<ul id="lista_reportes">
			<li><a href="#nogo">Reporte 1</a></li>
			<li><a href="#nogo">Reporte 2</a></li>
			<li><a href="#nogo">Reporte 3</a></li>
			<li><a href="#nogo">Reporte 4</a></li>
		</ul>
		<br />
	</div>
	<div id="pie_submenu"></div>
</div>
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
