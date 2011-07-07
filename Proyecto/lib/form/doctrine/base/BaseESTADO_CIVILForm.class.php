<?php

/**
 * ESTADO_CIVIL form base class.
 *
 * @method ESTADO_CIVIL getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseESTADO_CIVILForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idestadocivil'     => new sfWidgetFormInputHidden(),
      'nombreestadocivil' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idestadocivil'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idestadocivil')), 'empty_value' => $this->getObject()->get('idestadocivil'), 'required' => false)),
      'nombreestadocivil' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('estado_civil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ESTADO_CIVIL';
  }

}
