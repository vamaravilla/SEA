<?php

/**
 * TIPOXDATO_ACT form base class.
 *
 * @method TIPOXDATO_ACT getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPOXDATO_ACTForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtipoactividad' => new sfWidgetFormInputHidden(),
      'iddatoactividad' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idtipoactividad' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtipoactividad')), 'empty_value' => $this->getObject()->get('idtipoactividad'), 'required' => false)),
      'iddatoactividad' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddatoactividad')), 'empty_value' => $this->getObject()->get('iddatoactividad'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipoxdato_act[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPOXDATO_ACT';
  }

}
