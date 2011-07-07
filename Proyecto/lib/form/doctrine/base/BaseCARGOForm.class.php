<?php

/**
 * CARGO form base class.
 *
 * @method CARGO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCARGOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcargo'          => new sfWidgetFormInputHidden(),
      'nombrecargo'      => new sfWidgetFormInputText(),
      'descripcioncargo' => new sfWidgetFormTextarea(),
      'idtipocargo'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CARGO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idcargo'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcargo')), 'empty_value' => $this->getObject()->get('idcargo'), 'required' => false)),
      'nombrecargo'      => new sfValidatorString(array('max_length' => 50)),
      'descripcioncargo' => new sfValidatorString(array('max_length' => 300, 'required' => false)),
      'idtipocargo'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_CARGO'))),
    ));

    $this->widgetSchema->setNameFormat('cargo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CARGO';
  }

}
