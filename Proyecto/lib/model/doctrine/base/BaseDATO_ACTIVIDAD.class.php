<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DATO_ACTIVIDAD', 'doctrine');

/**
 * BaseDATO_ACTIVIDAD
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $iddatoactividad
 * @property string $nombredatoactividad
 * @property integer $esrequerido
 * @property integer $tipodatoact
 * @property Doctrine_Collection $OPCION_DATO_ACT
 * @property Doctrine_Collection $TIPOXDATO_ACT
 * @property Doctrine_Collection $VALOR_DATO_ACT
 * 
 * @method integer             getIddatoactividad()     Returns the current record's "iddatoactividad" value
 * @method string              getNombredatoactividad() Returns the current record's "nombredatoactividad" value
 * @method integer             getEsrequerido()         Returns the current record's "esrequerido" value
 * @method integer             getTipodatoact()         Returns the current record's "tipodatoact" value
 * @method Doctrine_Collection getOPCIONDATOACT()       Returns the current record's "OPCION_DATO_ACT" collection
 * @method Doctrine_Collection getTIPOXDATOACT()        Returns the current record's "TIPOXDATO_ACT" collection
 * @method Doctrine_Collection getVALORDATOACT()        Returns the current record's "VALOR_DATO_ACT" collection
 * @method DATO_ACTIVIDAD      setIddatoactividad()     Sets the current record's "iddatoactividad" value
 * @method DATO_ACTIVIDAD      setNombredatoactividad() Sets the current record's "nombredatoactividad" value
 * @method DATO_ACTIVIDAD      setEsrequerido()         Sets the current record's "esrequerido" value
 * @method DATO_ACTIVIDAD      setTipodatoact()         Sets the current record's "tipodatoact" value
 * @method DATO_ACTIVIDAD      setOPCIONDATOACT()       Sets the current record's "OPCION_DATO_ACT" collection
 * @method DATO_ACTIVIDAD      setTIPOXDATOACT()        Sets the current record's "TIPOXDATO_ACT" collection
 * @method DATO_ACTIVIDAD      setVALORDATOACT()        Sets the current record's "VALOR_DATO_ACT" collection
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDATO_ACTIVIDAD extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('DATO_ACTIVIDAD');
        $this->hasColumn('iddatoactividad', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombredatoactividad', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('esrequerido', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('tipodatoact', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('OPCION_DATO_ACT', array(
             'local' => 'iddatoactividad',
             'foreign' => 'iddatoactividad'));

        $this->hasMany('TIPOXDATO_ACT', array(
             'local' => 'iddatoactividad',
             'foreign' => 'iddatoactividad'));

        $this->hasMany('VALOR_DATO_ACT', array(
             'local' => 'iddatoactividad',
             'foreign' => 'iddatoactividad'));
    }
}