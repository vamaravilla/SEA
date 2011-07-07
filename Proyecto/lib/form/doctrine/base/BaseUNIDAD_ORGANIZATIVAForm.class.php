<?php

/**
 * UNIDAD_ORGANIZATIVA form base class.
 *
 * @method UNIDAD_ORGANIZATIVA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUNIDAD_ORGANIZATIVAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idunidadorganizativa'     => new sfWidgetFormInputHidden(),
      'nombreunidadorganizativa' => new sfWidgetFormInputText(),
      'esdepartamento'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idunidadorganizativa'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idunidadorganizativa')), 'empty_value' => $this->getObject()->get('idunidadorganizativa'), 'required' => false)),
      'nombreunidadorganizativa' => new sfValidatorString(array('max_length' => 150)),
      'esdepartamento'           => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('unidad_organizativa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UNIDAD_ORGANIZATIVA';
  }

}
