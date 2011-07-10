<?php

/**
 * actividades actions.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage actividades
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class actividadesActions extends sfActions
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
}
