<?php

/**
 * TIPO_CARGO form base class.
 *
 * @method TIPO_CARGO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_CARGOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtipocargo'     => new sfWidgetFormInputHidden(),
      'nombretipocargo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtipocargo'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtipocargo')), 'empty_value' => $this->getObject()->get('idtipocargo'), 'required' => false)),
      'nombretipocargo' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipo_cargo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_CARGO';
  }

}
