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
      'idaccion'     => new sfWidgetFormInputHidden(),
      'codaccion'    => new sfWidgetFormInputText(),
      'nombreaccion' => new sfWidgetFormInputText(),
      'urlaccion'    => new sfWidgetFormTextarea(),
      'idmodulo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MODULO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idaccion'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idaccion')), 'empty_value' => $this->getObject()->get('idaccion'), 'required' => false)),
      'codaccion'    => new sfValidatorString(array('max_length' => 5)),
      'nombreaccion' => new sfValidatorString(array('max_length' => 100)),
      'urlaccion'    => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'idmodulo'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MODULO'))),
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
