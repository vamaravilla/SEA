<?php

/**
 * VALOR_DATO_ACT form.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VALOR_DATO_ACTForm extends BaseVALOR_DATO_ACTForm
{
    public function configure()
    {
        if (!$vdaValorDatoAct = $this->getObject())
        {
            throw new InvalidArgumentException('Debe proporcionarse una valor de datos de actividad');
        }
        if (!$daDatoAct = $vdaValorDatoAct->DATO_ACTIVIDAD)
        {
            throw new InvalidArgumentException('Debe proporcionarse una valor de datos de actividad');
        }
        
        $boolEsRequerido = $daDatoAct->getEsrequerido();
                
        switch($daDatoAct)
        {
            case 1: //Booleano
                $this->widgetSchema['valorbooleanact']
                    = new sfWidgetFormTrilean(array('permite_nulo' => $boolEsRequerido));
                $this->validatorSchema['valorbooleanact']
                        = new sfValidatorTrilean(array('permite_nulo' => $boolEsRequerido));
                break;
            case 2: //Entero
                $this->validatorSchema['valorenteroact']
                    = new sfValidatorInteger(array('required' => $boolEsRequerido));
                $this->useFields(array('valorenteroact'));
                break;
            case 3: //Real
                $this->useFields(array('valorrealact'));
                $this->validatorSchema['valorrealact']
                    = new sfValidatorNumber(array('required' => $boolEsRequerido));
                break;
            case 4: //Cadena
                $this->useFields(array('valorcadenaact'));
                break;
            case 5: //Fecha
                $this->widgetSchema['valorfechaact']
                    = new seaWidgetFormInputTextDate();
                $this->validatorSchema['valorfechaact']
                    = new seaValidatorDate(array(), array('id' => 'valorfechaact',));
                $this->useFields(array('valorfechaact'));
                break;
            case 6: //Lista de opciones
                $this->useFields(array('idopciondatoact'));
                break;
        }
    }
}
