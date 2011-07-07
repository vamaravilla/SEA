<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FrmColeccionDatosActividad
 *
 * @author guille
 */
class FrmColeccionDatosActividad extends sfForm {
    //put your code here
    
    public function configure()
    {
        if (!$arrDatosActividad = $this->getOption('datos_actividad'))
        {
            throw new InvalidArgumentException('Debe proporcionarse una lista de datos de actividad');
        }
        if (!$actActividad = $this->getOption('actividad'))
        {
            throw new InvalidArgumentException('Debe proporcionarse una actividad');
        }
        foreach ($arrDatosActividad as $i => $daDatoAct)
        {
            $vdaBalorDatoAct = new VALOR_DATO_ACT();
            $vdaBalorDatoAct->ACTIVIDAD = $actActividad;
            $vdaBalorDatoAct->DATO_ACTIVIDAD = $daDatoAct;
            
            $frmValorDatoAct = new VALOR_DATO_ACTForm();
            
            $this->embedForm($i, $frmValorDatoAct);
        }
    }
}

?>
