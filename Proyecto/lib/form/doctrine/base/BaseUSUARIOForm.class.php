<?php

/**
 * USUARIO form base class.
 *
 * @method USUARIO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUSUARIOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idusuario'          => new sfWidgetFormInputHidden(),
      'nombreusuario'      => new sfWidgetFormInputText(),
      'contraseniausuario' => new sfWidgetFormInputText(),
      'idperfil'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PERFIL'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idusuario'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idusuario')), 'empty_value' => $this->getObject()->get('idusuario'), 'required' => false)),
      'nombreusuario'      => new sfValidatorString(array('max_length' => 50)),
      'contraseniausuario' => new sfValidatorString(array('max_length' => 50)),
      'idperfil'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PERFIL'))),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'USUARIO';
  }

}
