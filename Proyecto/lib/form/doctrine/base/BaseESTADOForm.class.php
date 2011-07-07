<?php

/**
 * ESTADO form base class.
 *
 * @method ESTADO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseESTADOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpais'       => new sfWidgetFormInputHidden(),
      'idestado'     => new sfWidgetFormInputHidden(),
      'nombreestado' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idpais'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idpais')), 'empty_value' => $this->getObject()->get('idpais'), 'required' => false)),
      'idestado'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idestado')), 'empty_value' => $this->getObject()->get('idestado'), 'required' => false)),
      'nombreestado' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('estado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ESTADO';
  }

}
