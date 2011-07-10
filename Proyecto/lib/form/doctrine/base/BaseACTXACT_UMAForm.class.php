<?php

/**
 * ACTXACT_UMA form base class.
 *
 * @method ACTXACT_UMA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACTXACT_UMAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idactividadumasup' => new sfWidgetFormInputHidden(),
      'idactividaduma'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idactividadumasup' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividadumasup')), 'empty_value' => $this->getObject()->get('idactividadumasup'), 'required' => false)),
      'idactividaduma'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividaduma')), 'empty_value' => $this->getObject()->get('idactividaduma'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actxact_uma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACTXACT_UMA';
  }

}
