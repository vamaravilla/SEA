<?php

/**
 * TIPO_DOC_IDENT form base class.
 *
 * @method TIPO_DOC_IDENT getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTIPO_DOC_IDENTForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtipodocident'     => new sfWidgetFormInputHidden(),
      'nombretipodocident' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idtipodocident'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idtipodocident')), 'empty_value' => $this->getObject()->get('idtipodocident'), 'required' => false)),
      'nombretipodocident' => new sfValidatorString(array('max_length' => 50)),
    ));

    $this->widgetSchema->setNameFormat('tipo_doc_ident[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TIPO_DOC_IDENT';
  }

}
