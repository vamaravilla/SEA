<?php

/**
 * PERFIL form base class.
 *
 * @method PERFIL getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePERFILForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idperfil'     => new sfWidgetFormInputHidden(),
      'nombreperfil' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idperfil'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idperfil')), 'empty_value' => $this->getObject()->get('idperfil'), 'required' => false)),
      'nombreperfil' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('perfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PERFIL';
  }

}
