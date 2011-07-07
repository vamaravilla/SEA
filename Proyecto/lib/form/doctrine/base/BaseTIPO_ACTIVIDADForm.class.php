<?php

/**
 * TIPO_ACTIVIDAD form base class.
 *
 * @method TIPO_ACTIVIDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_ACTIVIDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtipoactividad'     => new sfWidgetFormInputHidden(),
      'nombretipoactividad' => new sfWidgetFormInputText(),
      'esrequeridoarchivo'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtipoactividad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtipoactividad')), 'empty_value' => $this->getObject()->get('idtipoactividad'), 'required' => false)),
      'nombretipoactividad' => new sfValidatorString(array('max_length' => 50)),
      'esrequeridoarchivo'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tipo_actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_ACTIVIDAD';
  }

}
