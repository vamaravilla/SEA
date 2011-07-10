<?php

/**
 * CIUDAD form base class.
 *
 * @method CIUDAD getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCIUDADForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idciudad'     => new sfWidgetFormInputHidden(),
      'nombreciudad' => new sfWidgetFormInputText(),
      'idestado'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idciudad'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idciudad')), 'empty_value' => $this->getObject()->get('idciudad'), 'required' => false)),
      'nombreciudad' => new sfValidatorString(array('max_length' => 150)),
      'idestado'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO'))),
    ));

    $this->widgetSchema->setNameFormat('ciudad[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CIUDAD';
  }

}
