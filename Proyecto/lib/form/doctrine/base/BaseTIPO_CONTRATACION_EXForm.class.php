<?php

/**
 * TIPO_CONTRATACION_EX form base class.
 *
 * @method TIPO_CONTRATACION_EX getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_CONTRATACION_EXForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtipocontratacionex'     => new sfWidgetFormInputHidden(),
      'nombretipocontratacionex' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtipocontratacionex'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtipocontratacionex')), 'empty_value' => $this->getObject()->get('idtipocontratacionex'), 'required' => false)),
      'nombretipocontratacionex' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipo_contratacion_ex[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_CONTRATACION_EX';
  }

}
