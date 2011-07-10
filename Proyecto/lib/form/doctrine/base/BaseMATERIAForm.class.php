<?php

/**
 * MATERIA form base class.
 *
 * @method MATERIA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMATERIAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmateria'            => new sfWidgetFormInputHidden(),
      'codigomateria'        => new sfWidgetFormInputText(),
      'nombremateria'        => new sfWidgetFormInputText(),
      'cantidaduvmateria'    => new sfWidgetFormInputText(),
      'idunidadorganizativa' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UNIDAD_ORGANIZATIVA'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idmateria'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmateria')), 'empty_value' => $this->getObject()->get('idmateria'), 'required' => false)),
      'codigomateria'        => new sfValidatorString(array('max_length' => 6)),
      'nombremateria'        => new sfValidatorString(array('max_length' => 150)),
      'cantidaduvmateria'    => new sfValidatorInteger(),
      'idunidadorganizativa' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UNIDAD_ORGANIZATIVA'))),
    ));

    $this->widgetSchema->setNameFormat('materia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MATERIA';
  }

}
