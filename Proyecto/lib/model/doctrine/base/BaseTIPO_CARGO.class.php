<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TIPO_CARGO', 'doctrine');

/**
 * BaseTIPO_CARGO
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idtipocargo
 * @property string $nombretipocargo
 * @property Doctrine_Collection $CARGO
 * 
 * @method integer             getIdtipocargo()     Returns the current record's "idtipocargo" value
 * @method string              getNombretipocargo() Returns the current record's "nombretipocargo" value
 * @method Doctrine_Collection getCARGO()           Returns the current record's "CARGO" collection
 * @method TIPO_CARGO          setIdtipocargo()     Sets the current record's "idtipocargo" value
 * @method TIPO_CARGO          setNombretipocargo() Sets the current record's "nombretipocargo" value
 * @method TIPO_CARGO          setCARGO()           Sets the current record's "CARGO" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTIPO_CARGO extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('TIPO_CARGO');
        $this->hasColumn('idtipocargo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombretipocargo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('CARGO', array(
             'local' => 'idtipocargo',
             'foreign' => 'idtipocargo'));
    }
}