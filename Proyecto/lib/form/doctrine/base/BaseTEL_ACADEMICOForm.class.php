<?php

/**
 * TEL_ACADEMICO form base class.
 *
 * @method TEL_ACADEMICO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTEL_ACADEMICOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtelacademico'   => new sfWidgetFormInputHidden(),
      'numtelacademico'  => new sfWidgetFormInputText(),
      'tipotelacademico' => new sfWidgetFormInputText(),
      'idacademico'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idtelacademico'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtelacademico')), 'empty_value' => $this->getObject()->get('idtelacademico'), 'required' => false)),
      'numtelacademico'  => new sfValidatorString(array('max_length' => 25)),
      'tipotelacademico' => new sfValidatorInteger(),
      'idacademico'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'))),
    ));

    $this->widgetSchema->setNameFormat('tel_academico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TEL_ACADEMICO';
  }

}
