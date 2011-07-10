<?php

/**
 * dashboard actions.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage dashboard
 * @author     Victor Maravilla
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dashboardActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeCargarPerfil(sfWebRequest $request)
  {
      
        $this->usuario = $this->getUser()->getAttribute('usuario');
        $this->modulos = MODULOTable::obtenerModulosPerfil2($this->usuario->PERFIL);
        
  }
  
  public function executeSalir(sfWebRequest $request)
  {
        $this->getUser()->setAuthenticated(false);
        $this->redirect('user_login');
  }
  
}
