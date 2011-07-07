<?php

/**
 * CATEGORIA_UMA form base class.
 *
 * @method CATEGORIA_UMA getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCATEGORIA_UMAForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idcategoriauma'          => new sfWidgetFormInputHidden(),
      'numnivelcategoriauma'    => new sfWidgetFormInputText(),
      'nombrecategoriauma'      => new sfWidgetFormInputText(),
      'descripcioncategoriauma' => new sfWidgetFormTextarea(),
      'idcategoriaumasup'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idcategoriauma'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idcategoriauma')), 'empty_value' => $this->getObject()->get('idcategoriauma'), 'required' => false)),
      'numnivelcategoriauma'    => new sfValidatorInteger(),
      'nombrecategoriauma'      => new sfValidatorString(array('max_length' => 150)),
      'descripcioncategoriauma' => new sfValidatorString(array('required' => false)),
      'idcategoriaumasup'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('categoria_uma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CATEGORIA_UMA';
  }

}
