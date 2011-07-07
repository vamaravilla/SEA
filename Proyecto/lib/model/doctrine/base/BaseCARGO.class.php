<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('CARGO', 'doctrine');

/**
 * BaseCARGO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idcargo
 * @property string $nombrecargo
 * @property string $descripcioncargo
 * @property integer $idtipocargo
 * @property TIPO_CARGO $TIPO_CARGO
 * @property Doctrine_Collection $CARGOXUNIDAD_ORG
 * 
 * @method integer             getIdcargo()          Returns the current record's "idcargo" value
 * @method string              getNombrecargo()      Returns the current record's "nombrecargo" value
 * @method string              getDescripcioncargo() Returns the current record's "descripcioncargo" value
 * @method integer             getIdtipocargo()      Returns the current record's "idtipocargo" value
 * @method TIPO_CARGO          getTIPOCARGO()        Returns the current record's "TIPO_CARGO" value
 * @method Doctrine_Collection getCARGOXUNIDADORG()  Returns the current record's "CARGOXUNIDAD_ORG" collection
 * @method CARGO               setIdcargo()          Sets the current record's "idcargo" value
 * @method CARGO               setNombrecargo()      Sets the current record's "nombrecargo" value
 * @method CARGO               setDescripcioncargo() Sets the current record's "descripcioncargo" value
 * @method CARGO               setIdtipocargo()      Sets the current record's "idtipocargo" value
 * @method CARGO               setTIPOCARGO()        Sets the current record's "TIPO_CARGO" value
 * @method CARGO               setCARGOXUNIDADORG()  Sets the current record's "CARGOXUNIDAD_ORG" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCARGO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('CARGO');
        $this->hasColumn('idcargo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombrecargo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('descripcioncargo', 'string', 300, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 300,
             ));
        $this->hasColumn('idtipocargo', 'integer', 4, array(
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
        $this->hasOne('TIPO_CARGO', array(
             'local' => 'idtipocargo',
             'foreign' => 'idtipocargo'));

        $this->hasMany('CARGOXUNIDAD_ORG', array(
             'local' => 'idcargo',
             'foreign' => 'idcargo'));
    }
}