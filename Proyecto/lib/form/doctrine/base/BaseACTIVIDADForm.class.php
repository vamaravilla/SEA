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
      'idactividad'          => new sfWidgetFormInputHidden(),
      'nombreactividad'      => new sfWidgetFormTextarea(),
      'descripcionactividad' => new sfWidgetFormTextarea(),
      'observacionactividad' => new sfWidgetFormTextarea(),
      'idtipoactividad'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ACTIVIDAD'), 'add_empty' => false)),
      'idacademico'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idactividad'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividad')), 'empty_value' => $this->getObject()->get('idactividad'), 'required' => false)),
      'nombreactividad'      => new sfValidatorString(array('max_length' => 300)),
      'descripcionactividad' => new sfValidatorString(array('required' => false)),
      'observacionactividad' => new sfValidatorString(array('required' => false)),
      'idtipoactividad'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_ACTIVIDAD'))),
      'idacademico'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'))),
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
