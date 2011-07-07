<?php

/**
 * CONTACTO_EMER form base class.
 *
 * @method CONTACTO_EMER getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCONTACTO_EMERForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico'         => new sfWidgetFormInputHidden(),
      'idcontactoemer'      => new sfWidgetFormInputHidden(),
      'nombrecontactoemer'  => new sfWidgetFormInputText(),
      'numtelcontactoemer'  => new sfWidgetFormInputText(),
      'tipotelcontactoemer' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idacademico'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'idcontactoemer'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcontactoemer')), 'empty_value' => $this->getObject()->get('idcontactoemer'), 'required' => false)),
      'nombrecontactoemer'  => new sfValidatorString(array('max_length' => 150)),
      'numtelcontactoemer'  => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'tipotelcontactoemer' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('contacto_emer[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CONTACTO_EMER';
  }

}
