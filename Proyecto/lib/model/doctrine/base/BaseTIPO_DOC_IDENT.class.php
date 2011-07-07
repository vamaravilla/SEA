<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('TIPO_DOC_IDENT', 'doctrine');

/**
 * BaseTIPO_DOC_IDENT
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idtipodocident
 * @property string $nombretipodocident
 * @property Doctrine_Collection $DOC_IDENTIFICACION
 * 
 * @method integer             getIdtipodocident()     Returns the current record's "idtipodocident" value
 * @method string              getNombretipodocident() Returns the current record's "nombretipodocident" value
 * @method Doctrine_Collection getDOCIDENTIFICACION()  Returns the current record's "DOC_IDENTIFICACION" collection
 * @method TIPO_DOC_IDENT      setIdtipodocident()     Sets the current record's "idtipodocident" value
 * @method TIPO_DOC_IDENT      setNombretipodocident() Sets the current record's "nombretipodocident" value
 * @method TIPO_DOC_IDENT      setDOCIDENTIFICACION()  Sets the current record's "DOC_IDENTIFICACION" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTIPO_DOC_IDENT extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('TIPO_DOC_IDENT');
        $this->hasColumn('idtipodocident', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombretipodocident', 'string', 50, array(
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
        $this->hasMany('DOC_IDENTIFICACION', array(
             'local' => 'idtipodocident',
             'foreign' => 'idtipodocident'));
    }
}