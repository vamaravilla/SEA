<?php

/**
 * ACADEMICO form base class.
 *
 * @method ACADEMICO getObject() Returns the current form's model object
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseACADEMICOForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idacademico'         => new sfWidgetFormInputHidden(),
      'codigoacademico'     => new sfWidgetFormInputText(),
      'primernombreacad'    => new sfWidgetFormInputText(),
      'segundonombreacad'   => new sfWidgetFormInputText(),
      'primerapellidoacad'  => new sfWidgetFormInputText(),
      'segundoapellidoacad' => new sfWidgetFormInputText(),
      'apellidocasadaacad'  => new sfWidgetFormInputText(),
      'sexoacad'            => new sfWidgetFormInputText(),
      'fechanacimientoacad' => new sfWidgetFormDate(),
      'esnacional'          => new sfWidgetFormInputText(),
      'esescalafonado'      => new sfWidgetFormInputText(),
      'espensionado'        => new sfWidgetFormInputText(),
      'esjubilado'          => new sfWidgetFormInputText(),
      'usalentes'           => new sfWidgetFormInputText(),
      'poseetransporte'     => new sfWidgetFormInputText(),
      'idmunicipionac'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MUNICIPIO'), 'add_empty' => false)),
      'iddeptonac'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DEPARTAMENTO'), 'add_empty' => false)),
      'idpaisnac'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PAIS'), 'add_empty' => false)),
      'idpaisciudadania'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PAIS_7'), 'add_empty' => false)),
      'idtiposangre'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_SANGRE'), 'add_empty' => true)),
      'idnivelestudio'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NIVEL_ESTUDIO'), 'add_empty' => false)),
      'idestadocivil'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO_CIVIL'), 'add_empty' => false)),
      'idusuario'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idacademico'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idacademico')), 'empty_value' => $this->getObject()->get('idacademico'), 'required' => false)),
      'codigoacademico'     => new sfValidatorString(array('max_length' => 8)),
      'primernombreacad'    => new sfValidatorString(array('max_length' => 75)),
      'segundonombreacad'   => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'primerapellidoacad'  => new sfValidatorString(array('max_length' => 75)),
      'segundoapellidoacad' => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'apellidocasadaacad'  => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'sexoacad'            => new sfValidatorInteger(),
      'fechanacimientoacad' => new sfValidatorDate(),
      'esnacional'          => new sfValidatorInteger(),
      'esescalafonado'      => new sfValidatorInteger(array('required' => false)),
      'espensionado'        => new sfValidatorInteger(array('required' => false)),
      'esjubilado'          => new sfValidatorInteger(array('required' => false)),
      'usalentes'           => new sfValidatorInteger(array('required' => false)),
      'poseetransporte'     => new sfValidatorInteger(array('required' => false)),
      'idmunicipionac'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MUNICIPIO'))),
      'iddeptonac'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DEPARTAMENTO'))),
      'idpaisnac'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PAIS'))),
      'idpaisciudadania'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PAIS_7'))),
      'idtiposangre'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TIPO_SANGRE'), 'required' => false)),
      'idnivelestudio'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NIVEL_ESTUDIO'))),
      'idestadocivil'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ESTADO_CIVIL'))),
      'idusuario'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('USUARIO'))),
    ));

    $this->widgetSchema->setNameFormat('academico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ACADEMICO';
  }

}
