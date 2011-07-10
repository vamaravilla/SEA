<?php

/**
 * DATO_ACTIVIDAD form base class.
 *
 * @method DATO_ACTIVIDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDATO_ACTIVIDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddatoactividad'     => new sfWidgetFormInputHidden(),
      'nombredatoactividad' => new sfWidgetFormInputText(),
      'esrequerido'         => new sfWidgetFormInputText(),
      'tipodatoact'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iddatoactividad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddatoactividad')), 'empty_value' => $this->getObject()->get('iddatoactividad'), 'required' => false)),
      'nombredatoactividad' => new sfValidatorString(array('max_length' => 150)),
      'esrequerido'         => new sfValidatorInteger(),
      'tipodatoact'         => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('dato_actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DATO_ACTIVIDAD';
  }

}
