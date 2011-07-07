<?php

/**
 * MUNICIPIO form base class.
 *
 * @method MUNICIPIO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMUNICIPIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmunicipio'     => new sfWidgetFormInputHidden(),
      'nombremunicipio' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idmunicipio'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmunicipio')), 'empty_value' => $this->getObject()->get('idmunicipio'), 'required' => false)),
      'nombremunicipio' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('municipio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MUNICIPIO';
  }

}
