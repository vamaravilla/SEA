<?php

/**
 * ACTIVIDAD form.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ACTIVIDADForm extends BaseACTIVIDADForm
{
  public function configure()
  {
      $this->widgetSchema['nombreactividad'] = new sfWidgetFormInputText();
      if ($this->getOption('mostrar_observaciones') == true)
      {
          unset($this['observacionactividad']);
      }
      $actActividad = $this->getObject();
      if ($this->getObject()->isNew() && ($eacEstadoinicial = ESTADO_ACTIVIDADTable::getInstance()->findOneByEsestadoinicial(true)))
      {
          $this->widgetSchema['idestadoactividad']->addOption('default', $eacEstadoinicial);
      }
  }
}
