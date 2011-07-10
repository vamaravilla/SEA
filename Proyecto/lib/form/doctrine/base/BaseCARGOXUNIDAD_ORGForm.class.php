<?php

/**
 * CARGOXUNIDAD_ORG form base class.
 *
 * @method CARGOXUNIDAD_ORG getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCARGOXUNIDAD_ORGForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcargoxunidadorg'    => new sfWidgetFormInputHidden(),
      'idcargo'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CARGO'), 'add_empty' => false)),
      'idunidadorganizativa' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UNIDAD_ORGANIZATIVA'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idcargoxunidadorg'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcargoxunidadorg')), 'empty_value' => $this->getObject()->get('idcargoxunidadorg'), 'required' => false)),
      'idcargo'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CARGO'))),
      'idunidadorganizativa' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UNIDAD_ORGANIZATIVA'))),
    ));

    $this->widgetSchema->setNameFormat('cargoxunidad_org[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CARGOXUNIDAD_ORG';
  }

}
