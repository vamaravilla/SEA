<?php

/**
 * ACADEMICOXMATERIA form base class.
 *
 * @method ACADEMICOXMATERIA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACADEMICOXMATERIAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico'        => new sfWidgetFormInputHidden(),
      'idmateria'          => new sfWidgetFormInputHidden(),
      'cicloimpartido'     => new sfWidgetFormInputText(),
      'aniocicloimpartido' => new sfWidgetFormInputText(),
      'cantumaasignada'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idacademico'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'idmateria'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmateria')), 'empty_value' => $this->getObject()->get('idmateria'), 'required' => false)),
      'cicloimpartido'     => new sfValidatorInteger(),
      'aniocicloimpartido' => new sfValidatorInteger(),
      'cantumaasignada'    => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('academicoxmateria[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACADEMICOXMATERIA';
  }

}
