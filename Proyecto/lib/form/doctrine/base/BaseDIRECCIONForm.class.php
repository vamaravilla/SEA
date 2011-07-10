<?php

/**
 * DIRECCION form base class.
 *
 * @method DIRECCION getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDIRECCIONForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddireccion'  => new sfWidgetFormInputHidden(),
      'contenidodir' => new sfWidgetFormInputText(),
      'idciudaddir'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD'), 'add_empty' => false)),
      'idacademico'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'iddireccion'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddireccion')), 'empty_value' => $this->getObject()->get('iddireccion'), 'required' => false)),
      'contenidodir' => new sfValidatorString(array('max_length' => 200)),
      'idciudaddir'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD'))),
      'idacademico'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'))),
    ));

    $this->widgetSchema->setNameFormat('direccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DIRECCION';
  }

}
