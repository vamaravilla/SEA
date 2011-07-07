<?php

/**
 * TIPO_SANGRE form base class.
 *
 * @method TIPO_SANGRE getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_SANGREForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtiposangre'     => new sfWidgetFormInputHidden(),
      'nombretiposangre' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtiposangre'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtiposangre')), 'empty_value' => $this->getObject()->get('idtiposangre'), 'required' => false)),
      'nombretiposangre' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipo_sangre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_SANGRE';
  }

}
