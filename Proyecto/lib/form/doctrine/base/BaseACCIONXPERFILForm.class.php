<?php

/**
 * ACCIONXPERFIL form base class.
 *
 * @method ACCIONXPERFIL getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACCIONXPERFILForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idaccion' => new sfWidgetFormInputHidden(),
      'idperfil' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idaccion' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idaccion')), 'empty_value' => $this->getObject()->get('idaccion'), 'required' => false)),
      'idperfil' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idperfil')), 'empty_value' => $this->getObject()->get('idperfil'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('accionxperfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACCIONXPERFIL';
  }

}
