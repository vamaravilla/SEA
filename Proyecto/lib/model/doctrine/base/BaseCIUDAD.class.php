<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CIUDAD', 'doctrine');

/**
 * BaseCIUDAD
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idciudad
 * @property string $nombreciudad
 * @property integer $idestado
 * @property ESTADO $ESTADO
 * @property Doctrine_Collection $ACADEMICO
 * @property Doctrine_Collection $DIRECCION
 * 
 * @method integer             getIdciudad()     Returns the current record's "idciudad" value
 * @method string              getNombreciudad() Returns the current record's "nombreciudad" value
 * @method integer             getIdestado()     Returns the current record's "idestado" value
 * @method ESTADO              getESTADO()       Returns the current record's "ESTADO" value
 * @method Doctrine_Collection getACADEMICO()    Returns the current record's "ACADEMICO" collection
 * @method Doctrine_Collection getDIRECCION()    Returns the current record's "DIRECCION" collection
 * @method CIUDAD              setIdciudad()     Sets the current record's "idciudad" value
 * @method CIUDAD              setNombreciudad() Sets the current record's "nombreciudad" value
 * @method CIUDAD              setIdestado()     Sets the current record's "idestado" value
 * @method CIUDAD              setESTADO()       Sets the current record's "ESTADO" value
 * @method CIUDAD              setACADEMICO()    Sets the current record's "ACADEMICO" collection
 * @method CIUDAD              setDIRECCION()    Sets the current record's "DIRECCION" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCIUDAD extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('CIUDAD');
        $this->hasColumn('idciudad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombreciudad', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('idestado', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ESTADO', array(
             'local' => 'idestado',
             'foreign' => 'idestado'));

        $this->hasMany('ACADEMICO', array(
             'local' => 'idciudad',
             'foreign' => 'idciudadnac'));

        $this->hasMany('DIRECCION', array(
             'local' => 'idciudad',
             'foreign' => 'idciudaddir'));
    }
}