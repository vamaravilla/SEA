<?php

/**
 * USUARIO form.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class USUARIOForm extends BaseUSUARIOForm
{
  public function configure()
  {
  }
  
  public static function login($user,$password){
      return Doctrine_Query::create()
        ->from('USUARIO u')
	->where('u.nombreusuario = ?', array($user))
        ->andWhere('u.contraseniausuario = ?', $password) // Podrimos usar otro algoritmo, en este caso utilizamos md5
	->fetchOne();
    }
    
}
