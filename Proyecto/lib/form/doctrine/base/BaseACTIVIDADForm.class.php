<?php

/**
 * ACTIVIDAD form base class.
 *
 * @method ACTIVIDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACTIVIDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico'          => new sfWidgetFormInputHidden(),
      'idactividad'          => new sfWidgetFormInputHidden(),
      'nombreactividad'      => new sfWidgetFormTextarea(),
      'fechainicioactividad' => new sfWidgetFormDate(),
      'fechafinactividad'    => new sfWidgetFormDate(),
      'fechareporteact'      => new sfWidgetFormDate(),
      'cantumaasignada'      => new sfWidgetFormInputText(),
      'ciclorealizacion'     => new sfWidgetFormInputText(),
      'aniociclorealizacion' => new sfWidgetFormInputText(),
      'porcentajeavanceact'  => new sfWidgetFormInputText(),
      'observacionactividad' => new sfWidgetFormTextarea(),
      'archivoactividad'     => new sfWidgetFormTextarea(),
      'idtipoactividad'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ACTIVIDAD'), 'add_empty' => false)),
      'idestadoactividad'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO_ACTIVIDAD'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idacademico'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'idactividad'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividad')), 'empty_value' => $this->getObject()->get('idactividad'), 'required' => false)),
      'nombreactividad'      => new sfValidatorString(array('max_length' => 300)),
      'fechainicioactividad' => new sfValidatorDate(),
      'fechafinactividad'    => new sfValidatorDate(),
      'fechareporteact'      => new sfValidatorDate(),
      'cantumaasignada'      => new sfValidatorNumber(array('required' => false)),
      'ciclorealizacion'     => new sfValidatorInteger(),
      'aniociclorealizacion' => new sfValidatorInteger(),
      'porcentajeavanceact'  => new sfValidatorInteger(),
      'observacionactividad' => new sfValidatorString(array('required' => false)),
      'archivoactividad'     => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'idtipoactividad'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ACTIVIDAD'))),
      'idestadoactividad'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO_ACTIVIDAD'))),
    ));

    $this->widgetSchema->setNameFormat('actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACTIVIDAD';
  }

}
