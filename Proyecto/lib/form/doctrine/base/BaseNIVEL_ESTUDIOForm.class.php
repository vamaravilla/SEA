<?php

/**
 * NIVEL_ESTUDIO form base class.
 *
 * @method NIVEL_ESTUDIO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNIVEL_ESTUDIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idnivelestudio'     => new sfWidgetFormInputHidden(),
      'nombrenivelestudio' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idnivelestudio'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idnivelestudio')), 'empty_value' => $this->getObject()->get('idnivelestudio'), 'required' => false)),
      'nombrenivelestudio' => new sfValidatorString(array('max_length' => 75)),
    ));

    $this->widgetSchema->setNameFormat('nivel_estudio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NIVEL_ESTUDIO';
  }

}
