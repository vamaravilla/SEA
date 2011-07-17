<?php

/**
 * ficha actions.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage ficha
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fichaActions extends sfActions
{
    
    /*
    public function executeIndex()   //No pongo el request porque no se necesita
    {
        //$this->forward('default', 'module');
        $this->getUser()->setAuthenticated(true);
        $this->getUser()->addCredential('user');
        $this->getUser()->setAttribute('idUsuario', 1, 'user');
    }
    */

    public function executeMostrarFicha(sfWebRequest $swrRequest)
    {
        //return $this->renderText('Hola mundo');
        $objPk = $swrRequest->getParameter('pk');
        $this->intPropio = $swrRequest->getParameter('propio', 0);
        $this->acdAcademico = $this->obtenerAcademico($objPk, $this->intPropio);
        $this->forward404Unless($this->acdAcademico);
        
        //Código para que dependiendo del usuario, lo que se muestre sea poco o mucho
    }
  
    public function executeEditarFicha(sfWebRequest $swrRequest)
    {
        //$this->getUser()->setCulture('es_MX');
        $objPk = $swrRequest->getParameter('pk');
        $this->intPropio = $swrRequest->getParameter('propio', 0);
        //$acdAcademico = $this->obtenerAcademico($objPk, $this->intPropio);
        $acdAcademico = $this->getRoute()->getObject();
        $this->forward404Unless($acdAcademico);
        $this->formulario = new ACADEMICOForm($acdAcademico);
    }
  
    public function executeActualizarFicha(sfWebRequest $swrRequest)
    {
        $acadAcademico = $this->getRoute()->getObject();
        $this->formulario = new ACADEMICOForm($acadAcademico);
        $this->procesarFormularioFicha($swrRequest, $this->formulario);
        $this->setTemplate('editar');
    }
    
    public function obtenerAcademico($objPk, $intPropio)
    {
        $acdAcademico = null;
        if (is_null($objPk))
        {
            if ($intPropio != 0)
            {
                $usrUsuario = $this->getUser()->getAttribute('usuario');
                $this->idUsuario = $usrUsuario->getIdusuario();
                $acdAcademico = ACADEMICOTable::getInstance()->findOneByIdusuario($usrUsuario->getIdusuario()); //$usrUsuario->getIdusuario());
            }
            else
            {
                $acdAcademico = $this->getRoute()->getObject();
            }
        }
        else
        {
            $acdAcademico = ACADEMICOTable::getInstance()->find($objPk);
        }
        return $acdAcademico;
    }
    
    public function procesarFormularioFicha(sfWebRequest $swrRequest, sfForm $sfFormulario)
    {
        $sfFormulario->bind(
                $swrRequest->getParameter($sfFormulario->getName()),
                $swrRequest->getFiles($sfFormulario->getName())
            );
        
        if ($sfFormulario->isValid())
        {
            $acadAcademico = $sfFormulario->save();
            $intPropio = $swrRequest->getParameter('propio',0);
            $this->getUser()->setFlash('aviso', 'Información guardada exitosamente');
            if ($intPropio == 0)
            {
                $this->redirect('ficha_mostrar_publico', array('sf_subject' => $acadAcademico, 'distintivo' => $acadAcademico->getCodigoacademico(),));
            }
            else
            {
                $this->redirect('ficha_mostrar_privado', array('propio' => $intPropio));
            }
        }
    }
    
    public function executeListarAcademicos(sfWebRequest $swrRequest)
    {
        $acdtAcademicos = ACADEMICOTable::getInstance();
        $this->sdpPaginador
                = new sfDoctrinePager
                    (
                        'ACADEMICO',
                        sfConfig::get('app_max_items_lista')
                    );
        $this->sdpPaginador->setQuery($acdtAcademicos->obtenerConsultaAcademicos());
        $this->sdpPaginador->setPage($swrRequest->getParameter('pag', 1));
        $this->sdpPaginador->init();
    }
}
