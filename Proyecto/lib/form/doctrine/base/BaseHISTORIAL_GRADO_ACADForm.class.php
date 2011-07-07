<?php

/**
 * HISTORIAL_GRADO_ACAD form base class.
 *
 * @method HISTORIAL_GRADO_ACAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseHISTORIAL_GRADO_ACADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idhistorialgradoacad' => new sfWidgetFormInputHidden(),
      'anioobtencion'        => new sfWidgetFormInputText(),
      'idacademico'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'), 'add_empty' => false)),
      'idnivelestudio'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NIVEL_ESTUDIO'), 'add_empty' => false)),
      'idtituloacademico'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TITULO_ACADEMICO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idhistorialgradoacad' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idhistorialgradoacad')), 'empty_value' => $this->getObject()->get('idhistorialgradoacad'), 'required' => false)),
      'anioobtencion'        => new sfValidatorInteger(),
      'idacademico'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'))),
      'idnivelestudio'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NIVEL_ESTUDIO'))),
      'idtituloacademico'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TITULO_ACADEMICO'))),
    ));

    $this->widgetSchema->setNameFormat('historial_grado_acad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'HISTORIAL_GRADO_ACAD';
  }

}
