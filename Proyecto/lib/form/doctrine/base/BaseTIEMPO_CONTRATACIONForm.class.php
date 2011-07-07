<?php

/**
 * TIEMPO_CONTRATACION form base class.
 *
 * @method TIEMPO_CONTRATACION getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIEMPO_CONTRATACIONForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtiempocontratacion'     => new sfWidgetFormInputHidden(),
      'nombretiempocontratacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtiempocontratacion'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtiempocontratacion')), 'empty_value' => $this->getObject()->get('idtiempocontratacion'), 'required' => false)),
      'nombretiempocontratacion' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tiempo_contratacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIEMPO_CONTRATACION';
  }

}
