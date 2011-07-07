<?php

/**
 * DEPARTAMENTO form base class.
 *
 * @method DEPARTAMENTO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDEPARTAMENTOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddepartamento'     => new sfWidgetFormInputHidden(),
      'nombredepartamento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'iddepartamento'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddepartamento')), 'empty_value' => $this->getObject()->get('iddepartamento'), 'required' => false)),
      'nombredepartamento' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('departamento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DEPARTAMENTO';
  }

}
