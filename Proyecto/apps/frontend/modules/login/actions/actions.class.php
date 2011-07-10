<?php

/**
 * login actions.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage login
 * @author     Victor Maravilla
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loginActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndexLogin(sfWebRequest $request)
  {
     $this->form = new LoginForm();
     //$this->getUser()->setAuthenticated(false);
     
               
     if($request->isMethod("post")){
        $this->form->bind($request->getParameter("login"));
 
        if($this->form->isValid()){
           if(!$user = USUARIOTable::login($this->form->getValue("usuario"), $this->form->getValue("contraseña"))){
               // No hemos conseguido loguear al usuario
               // Redirigimos de nuevo al login con un mensaje de error
               $this->getUser()->setFlash("error", "Datos incorrectos");
               $this->redirect("@user_login");
           }else{
               // Logueamos
               $this->getUser()->setAuthenticated(true);
               $this->getUser()->setAttribute("usuario",$user);
 
               // Comprobamos si tiene referer, si no, le llevamos a la homepage
               $url = $this->getUser()->getAttribute("referer",false)?:"@homepage";
               $this->getUser()->setAttribute("referer", false);
               $this->redirect($url);
           }
        }
    }
  }
}
