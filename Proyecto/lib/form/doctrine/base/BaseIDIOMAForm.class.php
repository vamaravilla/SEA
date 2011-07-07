<?php

/**
 * IDIOMA form base class.
 *
 * @method IDIOMA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseIDIOMAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ididioma'        => new sfWidgetFormInputHidden(),
      'codisoidioma'    => new sfWidgetFormInputText(),
      'nombreisoidioma' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ididioma'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ididioma')), 'empty_value' => $this->getObject()->get('ididioma'), 'required' => false)),
      'codisoidioma'    => new sfValidatorString(array('max_length' => 2)),
      'nombreisoidioma' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('idioma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'IDIOMA';
  }

}
