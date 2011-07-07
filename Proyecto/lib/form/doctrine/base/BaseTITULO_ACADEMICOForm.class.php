<?php

/**
 * TITULO_ACADEMICO form base class.
 *
 * @method TITULO_ACADEMICO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTITULO_ACADEMICOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtituloacademico'     => new sfWidgetFormInputHidden(),
      'nombretituloacademico' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtituloacademico'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtituloacademico')), 'empty_value' => $this->getObject()->get('idtituloacademico'), 'required' => false)),
      'nombretituloacademico' => new sfValidatorString(array('max_length' => 150)),
    ));

    $this->widgetSchema->setNameFormat('titulo_academico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TITULO_ACADEMICO';
  }

}
