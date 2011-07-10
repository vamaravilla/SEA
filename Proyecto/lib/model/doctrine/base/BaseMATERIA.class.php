<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MATERIA', 'doctrine');

/**
 * BaseMATERIA
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idmateria
 * @property string $codigomateria
 * @property string $nombremateria
 * @property integer $cantidaduvmateria
 * @property integer $idunidadorganizativa
 * @property UNIDAD_ORGANIZATIVA $UNIDAD_ORGANIZATIVA
 * @property Doctrine_Collection $ACADEMICOXMATERIA
 * 
 * @method integer             getIdmateria()            Returns the current record's "idmateria" value
 * @method string              getCodigomateria()        Returns the current record's "codigomateria" value
 * @method string              getNombremateria()        Returns the current record's "nombremateria" value
 * @method integer             getCantidaduvmateria()    Returns the current record's "cantidaduvmateria" value
 * @method integer             getIdunidadorganizativa() Returns the current record's "idunidadorganizativa" value
 * @method UNIDAD_ORGANIZATIVA getUNIDADORGANIZATIVA()   Returns the current record's "UNIDAD_ORGANIZATIVA" value
 * @method Doctrine_Collection getACADEMICOXMATERIA()    Returns the current record's "ACADEMICOXMATERIA" collection
 * @method MATERIA             setIdmateria()            Sets the current record's "idmateria" value
 * @method MATERIA             setCodigomateria()        Sets the current record's "codigomateria" value
 * @method MATERIA             setNombremateria()        Sets the current record's "nombremateria" value
 * @method MATERIA             setCantidaduvmateria()    Sets the current record's "cantidaduvmateria" value
 * @method MATERIA             setIdunidadorganizativa() Sets the current record's "idunidadorganizativa" value
 * @method MATERIA             setUNIDADORGANIZATIVA()   Sets the current record's "UNIDAD_ORGANIZATIVA" value
 * @method MATERIA             setACADEMICOXMATERIA()    Sets the current record's "ACADEMICOXMATERIA" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMATERIA extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('MATERIA');
        $this->hasColumn('idmateria', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('codigomateria', 'string', 6, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 6,
             ));
        $this->hasColumn('nombremateria', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('cantidaduvmateria', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
        $this->hasColumn('idunidadorganizativa', 'integer', 4, array(
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
        $this->hasOne('UNIDAD_ORGANIZATIVA', array(
             'local' => 'idunidadorganizativa',
             'foreign' => 'idunidadorganizativa'));

        $this->hasMany('ACADEMICOXMATERIA', array(
             'local' => 'idmateria',
             'foreign' => 'idmateria'));
    }
}