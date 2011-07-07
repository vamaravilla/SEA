<?php

/**
 * VALOR_DATO_ACT form base class.
 *
 * @method VALOR_DATO_ACT getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVALOR_DATO_ACTForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico'     => new sfWidgetFormInputHidden(),
      'idactividad'     => new sfWidgetFormInputHidden(),
      'iddatoactividad' => new sfWidgetFormInputHidden(),
      'valorbooleanact' => new sfWidgetFormInputText(),
      'valorenteroact'  => new sfWidgetFormInputText(),
      'valorrealact'    => new sfWidgetFormInputText(),
      'valorfechaact'   => new sfWidgetFormDate(),
      'valorcadenaact'  => new sfWidgetFormInputText(),
      'idopciondatoact' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('OPCION_DATO_ACT'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'idacademico'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'idactividad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividad')), 'empty_value' => $this->getObject()->get('idactividad'), 'required' => false)),
      'iddatoactividad' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('iddatoactividad')), 'empty_value' => $this->getObject()->get('iddatoactividad'), 'required' => false)),
      'valorbooleanact' => new sfValidatorInteger(array('required' => false)),
      'valorenteroact'  => new sfValidatorInteger(array('required' => false)),
      'valorrealact'    => new sfValidatorInteger(array('required' => false)),
      'valorfechaact'   => new sfValidatorDate(array('required' => false)),
      'valorcadenaact'  => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'idopciondatoact' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('OPCION_DATO_ACT'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('valor_dato_act[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VALOR_DATO_ACT';
  }

}
