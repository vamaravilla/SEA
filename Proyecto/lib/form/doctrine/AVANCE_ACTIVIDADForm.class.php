<?php

/**
 * AVANCE_ACTIVIDAD form.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AVANCE_ACTIVIDADForm extends BaseAVANCE_ACTIVIDADForm
{
    public function configure()
    {
        //Seleccionando los campos que no se mostrarán
        unset($this['fechareporteav']);
        if ($this->getOption('mostrar_observaciones'))
        {
            unset($this['observacionavance']);
        }
        
        if (!$aacAvance = $this->getObject())
        {
            throw new InvalidArgumentException('Debe proporcionarse un avance de actividad');
        }
        
        //Adecuando widgets
        $this->widgetSchema['nombreavance'] = new sfWidgetFormInputText();
        
        //Caso especial: Widget para subir archivos
        if ($aacAvance->ACTIVIDAD->TIPO_ACTIVIDAD->getEsRequeridoArchivo())
        {
            $this->widgetSchema['archivoavance'] = new sfWidgetFormInputFile();
            $this->validatorSchema['logo']
                = new sfValidatorFile(array(
                        'required'   => false,
                        'path'       => sfConfig::get('sf_upload_dir').'/archivos',
                        //'mime_types' => 'web_images',
                    ));
        }
        else
        {
            unset($this['archivoavance']);
        }
        
        //Colocando etiquetas a los widgets
        $this->widgetSchema->setLabels(
            array(
                //'idavance'             => '',
                //'idactividad'          => '',
                'nombreavance'         => 'Nombre del avance',
                'descripcionavance'    => 'Descripción',
                'fechainicioav'        => 'Fecha de inicio',
                'fechafinav'           => 'Fecha de finalización',
                //'fechareporteav'       => new sfValidatorDate(),
                //'ciclorealizacion'     => '',
                //'aniociclorealizacion' => '',
                'porcentajeavance'     => 'Porcentaje de avance',
                'archivoavance'        => 'Archivo adjunto',
                'cantumaasignada'      => 'UMAs a asignar',
                'observacionavance'    => 'Observaciones',
            )
        );
        
        //Colocando textos de ayuda
        $this->widgetSchema->setHelps(
                array(
                    'porcentajeavance'     => 'Porcentaje de avance de la actividad hasta el momento',
                )
            );
        
        //Inicializando campos
        
        $avnAvance = $this->getObject();
        if ($avnAvan->isNew() && ($eacEstadoinicial = ESTADO_ACTIVIDADTable::getInstance()->findOneByEsestadoinicial(true)))
        {
            $this->widgetSchema['idestadoactividad']->addOption('default', $eacEstadoinicial);
        }
    }
}
