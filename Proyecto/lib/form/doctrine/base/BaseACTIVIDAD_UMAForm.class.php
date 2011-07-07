<?php

/**
 * ACTIVIDAD_UMA form base class.
 *
 * @method ACTIVIDAD_UMA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACTIVIDAD_UMAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcategoriauma'     => new sfWidgetFormInputHidden(),
      'idactividaduma'     => new sfWidgetFormInputHidden(),
      'nombreactividaduma' => new sfWidgetFormTextarea(),
      'cantidadumadef'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcategoriauma'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcategoriauma')), 'empty_value' => $this->getObject()->get('idcategoriauma'), 'required' => false)),
      'idactividaduma'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividaduma')), 'empty_value' => $this->getObject()->get('idactividaduma'), 'required' => false)),
      'nombreactividaduma' => new sfValidatorString(array('max_length' => 300)),
      'cantidadumadef'     => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('actividad_uma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACTIVIDAD_UMA';
  }

}
