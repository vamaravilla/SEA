<?php

/**
 * OPCION_DATO_ACT form base class.
 *
 * @method OPCION_DATO_ACT getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOPCION_DATO_ACTForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idopciondatoact'     => new sfWidgetFormInputHidden(),
      'nombreopciondatoact' => new sfWidgetFormTextarea(),
      'iddatoactividad'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DATO_ACTIVIDAD'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idopciondatoact'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idopciondatoact')), 'empty_value' => $this->getObject()->get('idopciondatoact'), 'required' => false)),
      'nombreopciondatoact' => new sfValidatorString(array('max_length' => 300)),
      'iddatoactividad'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DATO_ACTIVIDAD'))),
    ));

    $this->widgetSchema->setNameFormat('opcion_dato_act[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OPCION_DATO_ACT';
  }

}
