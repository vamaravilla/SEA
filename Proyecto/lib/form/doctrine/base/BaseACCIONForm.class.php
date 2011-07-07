<?php

/**
 * ACCION form base class.
 *
 * @method ACCION getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACCIONForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmodulo'     => new sfWidgetFormInputHidden(),
      'idaccion'     => new sfWidgetFormInputHidden(),
      'codaccion'    => new sfWidgetFormInputText(),
      'nombreaccion' => new sfWidgetFormInputText(),
      'urlaccion'    => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'idmodulo'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmodulo')), 'empty_value' => $this->getObject()->get('idmodulo'), 'required' => false)),
      'idaccion'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idaccion')), 'empty_value' => $this->getObject()->get('idaccion'), 'required' => false)),
      'codaccion'    => new sfValidatorString(array('max_length' => 5)),
      'nombreaccion' => new sfValidatorString(array('max_length' => 100)),
      'urlaccion'    => new sfValidatorString(array('max_length' => 300, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('accion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACCION';
  }

}
