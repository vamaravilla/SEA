<?php

/**
 * HISTORIAL_CARGO form base class.
 *
 * @method HISTORIAL_CARGO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHISTORIAL_CARGOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idhistorialcargo'     => new sfWidgetFormInputHidden(),
      'fechainicio'          => new sfWidgetFormDate(),
      'fechafin'             => new sfWidgetFormDate(),
      'idacademico'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'), 'add_empty' => false)),
      'idcargo'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CARGOXUNIDAD_ORG'), 'add_empty' => false)),
      'idunidadorganizativa' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CARGOXUNIDAD_ORG_4'), 'add_empty' => false)),
      'idtipocontratacion'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CONTRATACION'), 'add_empty' => false)),
      'idtipocontratacionex' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CONTRATACION_EX'), 'add_empty' => false)),
      'idtiempocontratacion' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIEMPO_CONTRATACION'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idhistorialcargo'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idhistorialcargo')), 'empty_value' => $this->getObject()->get('idhistorialcargo'), 'required' => false)),
      'fechainicio'          => new sfValidatorDate(),
      'fechafin'             => new sfValidatorDate(array('required' => false)),
      'idacademico'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'))),
      'idcargo'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CARGOXUNIDAD_ORG'))),
      'idunidadorganizativa' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CARGOXUNIDAD_ORG_4'))),
      'idtipocontratacion'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CONTRATACION'))),
      'idtipocontratacionex' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CONTRATACION_EX'))),
      'idtiempocontratacion' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIEMPO_CONTRATACION'))),
    ));

    $this->widgetSchema->setNameFormat('historial_cargo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HISTORIAL_CARGO';
  }

}
