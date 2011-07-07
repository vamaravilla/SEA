<?php

/**
 * TIPO_CONTRATACION form base class.
 *
 * @method TIPO_CONTRATACION getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_CONTRATACIONForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtipocontratacion'     => new sfWidgetFormInputHidden(),
      'nombretipocontratacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtipocontratacion'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtipocontratacion')), 'empty_value' => $this->getObject()->get('idtipocontratacion'), 'required' => false)),
      'nombretipocontratacion' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipo_contratacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_CONTRATACION';
  }

}
