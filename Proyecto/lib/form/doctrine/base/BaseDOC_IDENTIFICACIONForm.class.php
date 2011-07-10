<?php

/**
 * DOC_IDENTIFICACION form base class.
 *
 * @method DOC_IDENTIFICACION getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDOC_IDENTIFICACIONForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'iddocident'     => new sfWidgetFormInputHidden(),
      'numerodocident' => new sfWidgetFormInputText(),
      'fechaextension' => new sfWidgetFormDate(),
      'lugarextension' => new sfWidgetFormInputText(),
      'idtipodocident' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_DOC_IDENT'), 'add_empty' => false)),
      'idacademico'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'iddocident'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddocident')), 'empty_value' => $this->getObject()->get('iddocident'), 'required' => false)),
      'numerodocident' => new sfValidatorString(array('max_length' => 25)),
      'fechaextension' => new sfValidatorDate(array('required' => false)),
      'lugarextension' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'idtipodocident' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_DOC_IDENT'))),
      'idacademico'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ACADEMICO'))),
    ));

    $this->widgetSchema->setNameFormat('doc_identificacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DOC_IDENTIFICACION';
  }

}
