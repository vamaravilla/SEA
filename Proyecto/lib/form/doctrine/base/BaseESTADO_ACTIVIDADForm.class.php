<?php

/**
 * ESTADO_ACTIVIDAD form base class.
 *
 * @method ESTADO_ACTIVIDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseESTADO_ACTIVIDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idestadoactividad'     => new sfWidgetFormInputHidden(),
      'nombreestadoactividad' => new sfWidgetFormInputText(),
      'permiteedicion'        => new sfWidgetFormInputText(),
      'esestadoinicial'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idestadoactividad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idestadoactividad')), 'empty_value' => $this->getObject()->get('idestadoactividad'), 'required' => false)),
      'nombreestadoactividad' => new sfValidatorString(array('max_length' => 25)),
      'permiteedicion'        => new sfValidatorInteger(array('required' => false)),
      'esestadoinicial'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('estado_actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ESTADO_ACTIVIDAD';
  }

}
