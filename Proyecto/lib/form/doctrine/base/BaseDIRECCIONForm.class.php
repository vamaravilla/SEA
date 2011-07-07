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
      'idacademico'  => new sfWidgetFormInputHidden(),
      'iddireccion'  => new sfWidgetFormInputHidden(),
      'contenidodir' => new sfWidgetFormInputText(),
      'idpaisdir'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD_3'), 'add_empty' => false)),
      'idestadodir'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD_2'), 'add_empty' => false)),
      'idciudaddir'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idacademico'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'iddireccion'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddireccion')), 'empty_value' => $this->getObject()->get('iddireccion'), 'required' => false)),
      'contenidodir' => new sfValidatorString(array('max_length' => 200)),
      'idpaisdir'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD_3'))),
      'idestadodir'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD_2'))),
      'idciudaddir'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CIUDAD'))),
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
