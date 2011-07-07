<?php

/**
 * AVANCE_ACTIVIDAD form base class.
 *
 * @method AVANCE_ACTIVIDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAVANCE_ACTIVIDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico'    => new sfWidgetFormInputHidden(),
      'idactividad'    => new sfWidgetFormInputHidden(),
      'idavanceact'    => new sfWidgetFormInputHidden(),
      'fechainicioav'  => new sfWidgetFormDate(),
      'fechafinav'     => new sfWidgetFormDate(),
      'fechareporteav' => new sfWidgetFormDate(),
      'porcentajeav'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idacademico'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'idactividad'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idactividad')), 'empty_value' => $this->getObject()->get('idactividad'), 'required' => false)),
      'idavanceact'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idavanceact')), 'empty_value' => $this->getObject()->get('idavanceact'), 'required' => false)),
      'fechainicioav'  => new sfValidatorDate(),
      'fechafinav'     => new sfValidatorDate(),
      'fechareporteav' => new sfValidatorDate(),
      'porcentajeav'   => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('avance_actividad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AVANCE_ACTIVIDAD';
  }

}
