<?php

/**
 * MODULO form base class.
 *
 * @method MODULO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMODULOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmodulo'        => new sfWidgetFormInputHidden(),
      'codmodulo'       => new sfWidgetFormInputText(),
      'nombremodulo'    => new sfWidgetFormInputText(),
      'urlmodulo'       => new sfWidgetFormTextarea(),
      'imgmodulo'       => new sfWidgetFormTextarea(),
      'imgsobremodulo'  => new sfWidgetFormTextarea(),
      'imgactivomodulo' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'idmodulo'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmodulo')), 'empty_value' => $this->getObject()->get('idmodulo'), 'required' => false)),
      'codmodulo'       => new sfValidatorString(array('max_length' => 2)),
      'nombremodulo'    => new sfValidatorString(array('max_length' => 100)),
      'urlmodulo'       => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'imgmodulo'       => new sfValidatorString(array('max_length' => 300)),
      'imgsobremodulo'  => new sfValidatorString(array('max_length' => 300)),
      'imgactivomodulo' => new sfValidatorString(array('max_length' => 300)),
    ));

    $this->widgetSchema->setNameFormat('modulo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MODULO';
  }

}
