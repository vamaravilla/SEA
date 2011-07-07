<?php

/**
 * CIUDAD form base class.
 *
 * @method CIUDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCIUDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpais'       => new sfWidgetFormInputHidden(),
      'idestado'     => new sfWidgetFormInputHidden(),
      'idciudad'     => new sfWidgetFormInputHidden(),
      'nombreciudad' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idpais'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idpais')), 'empty_value' => $this->getObject()->get('idpais'), 'required' => false)),
      'idestado'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idestado')), 'empty_value' => $this->getObject()->get('idestado'), 'required' => false)),
      'idciudad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idciudad')), 'empty_value' => $this->getObject()->get('idciudad'), 'required' => false)),
      'nombreciudad' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('ciudad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CIUDAD';
  }

}
