<?php

/**
 * DEPARTAMENTO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class DEPARTAMENTO extends BaseDEPARTAMENTO
{
    /**
     * Obtiene el nombre del departamento como representación de cadena de
     * caracteres del objeto.
     * @return String Nombre del departamento. 
     */
    public function __toString() {
        return $this->getNombredepartamento();
    }
}
