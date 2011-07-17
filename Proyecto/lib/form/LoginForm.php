<?php

/**
 * Description of LoginForm
 *
 * @author Victor Maravilla
 */
class LoginForm extends BaseForm
{
  public function configure()
  {
    parent::configure();
 
    $this->setWidgets(array(
      'usuario' => new sfWidgetFormInput(),
      'contraseña'  => new sfWidgetFormInputPassword(),
    ));    
 
    $this->setValidators(array(
      'usuario' => new sfValidatorString(array('required'=>true), array('required'=>'El nombre de usuario es obligatorio')),
      'contraseña'  => new sfValidatorString(array('required'=>true), array('required'=>'Escriba su contraseña')),
    ));
 
    $this->widgetSchema->setNameFormat('login[%s]');
    $this->widgetSchema->setFormFormatterName('table');
 
  }
 
}
