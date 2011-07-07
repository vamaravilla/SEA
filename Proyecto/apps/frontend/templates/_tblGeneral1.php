<!--
    @param $arrCampos array         Arreglo cuyas llaves son los nombres de los campos que
                                    se mostrarán en la tabla, y cuyos valores son los encabezados
                                    de las columnas.
    @param $arrObjetos array        Arreglo de los objetos que se desplegarán en la tabla.
    @param $strCampoEnlace string   Nombre del campo que se utilizará como enlace a
                                    la página donde se desplegará el objeto individual.
    @param $strRuta string          Nombre de la ruta hacia la que se irá para desplegar
                                    los datos del objeto individual.
    @param $strDistintivo string    Nombre del campo distintivo que se mostrará en la ruta.
    @param $strNombrePlural string  Nombre en plural del objeto que se muestra en la tabla.
    @param $sdpPaginador sfDoctrinePager    Paginador de Doctrine usado para obtener los objetos
                                            listados en la tabla.
    @param $strRutaEditar bool      Ruta usada para editar el objeto.
    @param $strRutaEliminar bool    Ruta usada para eliminar el objeto.
-->
<?php $strUrlImg = sfConfig::get('app_url_imagenes'); ?>
<table class="tabla_datos" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <?php foreach($arrCampos as $strEncabezado){ ?>
                <th><?php echo $strEncabezado ?></th>
            <?php
                }
                if (!is_null($strRutaEditar))
                {
            ?>
            <th></th>
            <?php
                }
                if (!is_null($strRutaEliminar))
                {
            ?>
            <th></th>
            <?php
                }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
            $cont = 0;
            foreach($arrObjetos as $objObjeto){
        ?>
        <tr class="<?php echo fmod($cont, 2) ? 'par' : 'impar'; ?>">
            <?php foreach($arrCampos as $i => $strEncabezado){ ?>
                <td>
                    <?php
                        if ($i == $strCampoEnlace)
                        {
                            echo link_to($objObjeto->obtenerDato($i), $strRuta, array('pk' => $objObjeto->getPrimaryKey(), 'distintivo' => $objObjeto->obtenerDato($strDistintivo)));
                        }
                        else
                        {
                            echo $objObjeto->obtenerDato($i);
                        }
                    ?>
                </td>
            <?php
                }
                if (!is_null($strRutaEditar))
                {
            ?>
                <td class="boton">
                    <a href="<?php echo url_for($strRutaEditar, array('pk' => $objObjeto->getPrimaryKey(), 'distintivo' => $objObjeto->obtenerDato($strDistintivo))); ?>">
                        <img src="<?php echo $strUrlImg ?>/botones/editar.png" />
                    </a>   
                </td>
            <?php
                }
                if (!is_null($strRutaEliminar))
                {
            ?>
                <td class="boton">
                    <a href="<?php echo url_for($strRutaEliminar, array('pk' => $objObjeto->getPrimaryKey(), 'distintivo' => $objObjeto->obtenerDato($strDistintivo))); ?>">
                        <img src="<?php echo $strUrlImg ?>/botones/eliminar.png" />
                    </a>
                </td>
            <?php
                }
            ?>
        </tr>
        <?php
                $cont++;
            }
        ?>
    </tbody>
</table>
<br />
<div class="tabla_pie">
    <div class="paginacion_desc">
        <strong><?php echo count($sdpPaginador) ?></strong> <?php echo $strNombrePlural ?> encontrados
        
        <?php
            if ($sdpPaginador->haveToPaginate())
            {
        ?>
                - p&aacute;gina <strong><?php echo $sdpPaginador->getPage() ?>/
                <?php echo $sdpPaginador->getLastPage() ?></strong>
        <?php
            }
        ?>
    </div>
    <div class="paginacion">
        <?php
        if ($sdpPaginador->haveToPaginate()){
        ?>
            <!-- Paginador - Ir a primera página -->
            <a href="<?php echo url_for('ficha_listar_academicos', array('pag' => 1)) ?>">
                <img src="<?php echo $strUrlImg ?>/botones/primero.png" />
            </a>

            <!-- Paginador - Ir a página anterior -->
            <a href="<?php echo url_for('ficha_listar_academicos', array('pag' => $sdpPaginador->getPreviousPage())) ?>">
                <img src="<?php echo $strUrlImg ?>/botones/anterior.png" />
            </a>

            <!-- Paginador - lista de páginas -->
            <?php
                $pgnPagActual = $sdpPaginador->getpage();
                foreach ($sdpPaginador->getLinks() as $intPagina){
                    if ($intPagina == $pgnPagActual)
                    {
                        echo $intPagina;
                    }
                    else
                    {
            ?>
                        <a href="<?php echo url_for('ficha_listar_academicos', array('pag' => $intPagina)) ?>">
                            <?php echo $intPagina ?>
                        </a>
            <?php
                    }
                }
            ?>

            <!-- Paginador - Ir a página siguiente -->
            <a href="<?php echo url_for('ficha_listar_academicos', array('pag' => $sdpPaginador->getNextPage())) ?>">
                <img src="<?php echo $strUrlImg ?>/botones/siguiente.png" />
            </a>

            <!-- Paginador - Ir a última página -->
            <a href="<?php echo url_for('ficha_listar_academicos', array('pag' => $sdpPaginador->getLastPage())) ?>">
                <img src="<?php echo $strUrlImg ?>/botones/ultimo.png" />
            </a>
            <?php
            }
            ?>
    </div>
</div>
