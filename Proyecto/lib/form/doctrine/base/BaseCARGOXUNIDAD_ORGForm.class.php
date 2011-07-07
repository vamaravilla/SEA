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
      'idcargo'              => new sfWidgetFormInputHidden(),
      'idunidadorganizativa' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idcargo'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcargo')), 'empty_value' => $this->getObject()->get('idcargo'), 'required' => false)),
      'idunidadorganizativa' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idunidadorganizativa')), 'empty_value' => $this->getObject()->get('idunidadorganizativa'), 'required' => false)),
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
