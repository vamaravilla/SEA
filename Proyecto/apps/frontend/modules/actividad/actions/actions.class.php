<?php

/**
 * actividad actions.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage actividad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class actividadActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request)
    {
        $this->forward('default', 'module');
    }

    public function executeMostrarActividad()
    {
        $this->actActividad = $this->getRoute()->getObject();
        $this->forward404Unless($this->actActividad);
    }
    
    public function executeNuevaActividad()
    {
        $this->frmActividad = new ACTIVIDADForm();
    }
    
    public function executeCrearActividad(sfWebRequest $swrRequest)
    {
        $this->frmActividad = new ACTIVIDADForm();
        $this->procesarFormulario($swrRequest, $this->frmActividad);
        $this->setTemplate('nuevaActividad');
        
    }
    
    public function executeListarActividades(sfWebRequest $swrRequest)
    {
        $acttActividades = ACTIVIDADTable::getInstance();
        $this->sdpPaginador
                = new sfDoctrinePager
                    (
                        'ACADEMICO',
                        sfConfig::get('app_max_items_lista')
                    );
        $arrParamFiltro = new $swrRequest->getParameter('paramfiltro');
        $this->sdpPaginador->setQuery($acttActividades->obtenerConsultaActividades($arrParamFiltro));
        $this->sdpPaginador->setPage($swrRequest->getParameter('pag', 1));
        $this->sdpPaginador->init();
    }
  
    public function executeListarAvances(sfWebRequest $swrRequest)
    {
        $acttActividades = ACTIVIDADTable::getInstance();
        $this->sdpPaginador
                = new sfDoctrinePager
                    (
                        'ACADEMICO',
                        sfConfig::get('app_max_items_lista')
                    );
        $arrParamFiltro = new $swrRequest->getParameter('paramfiltro');
        $this->sdpPaginador->setQuery($acttActividades->obtenerConsultaAvances($arrParamFiltro));
        $this->sdpPaginador->setPage($swrRequest->getParameter('pag', 1));
        $this->sdpPaginador->init();
    }
    
    public function procesarFormulario(sfWebRequest $swrRequest, sfForm $sfFormulario)
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
}
