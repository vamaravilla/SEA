<?php

/**
 * ACADEMICOXIDIOMA form base class.
 *
 * @method ACADEMICOXIDIOMA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACADEMICOXIDIOMAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico' => new sfWidgetFormInputHidden(),
      'ididioma'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idacademico' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'ididioma'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ididioma')), 'empty_value' => $this->getObject()->get('ididioma'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('academicoxidioma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACADEMICOXIDIOMA';
  }

}
