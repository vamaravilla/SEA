<?php

/**
 * PAIS form base class.
 *
 * @method PAIS getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePAISForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpais'        => new sfWidgetFormInputHidden(),
      'codigoisopais' => new sfWidgetFormInputText(),
      'nombreisopais' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idpais'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idpais')), 'empty_value' => $this->getObject()->get('idpais'), 'required' => false)),
      'codigoisopais' => new sfValidatorString(array('max_length' => 2)),
      'nombreisopais' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('pais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PAIS';
  }

}
