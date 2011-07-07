<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('DIRECCION', 'doctrine');

/**
 * BaseDIRECCION
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idacademico
 * @property integer $iddireccion
 * @property string $contenidodir
 * @property integer $idmunicipiodir
 * @property integer $iddeptodir
 * @property integer $idpaisdir
 * @property PAIS $PAIS
 * @property ACADEMICO $ACADEMICO
 * @property DEPARTAMENTO $DEPARTAMENTO
 * @property MUNICIPIO $MUNICIPIO
 * 
 * @method integer      getIdacademico()    Returns the current record's "idacademico" value
 * @method integer      getIddireccion()    Returns the current record's "iddireccion" value
 * @method string       getContenidodir()   Returns the current record's "contenidodir" value
 * @method integer      getIdmunicipiodir() Returns the current record's "idmunicipiodir" value
 * @method integer      getIddeptodir()     Returns the current record's "iddeptodir" value
 * @method integer      getIdpaisdir()      Returns the current record's "idpaisdir" value
 * @method PAIS         getPAIS()           Returns the current record's "PAIS" value
 * @method ACADEMICO    getACADEMICO()      Returns the current record's "ACADEMICO" value
 * @method DEPARTAMENTO getDEPARTAMENTO()   Returns the current record's "DEPARTAMENTO" value
 * @method MUNICIPIO    getMUNICIPIO()      Returns the current record's "MUNICIPIO" value
 * @method DIRECCION    setIdacademico()    Sets the current record's "idacademico" value
 * @method DIRECCION    setIddireccion()    Sets the current record's "iddireccion" value
 * @method DIRECCION    setContenidodir()   Sets the current record's "contenidodir" value
 * @method DIRECCION    setIdmunicipiodir() Sets the current record's "idmunicipiodir" value
 * @method DIRECCION    setIddeptodir()     Sets the current record's "iddeptodir" value
 * @method DIRECCION    setIdpaisdir()      Sets the current record's "idpaisdir" value
 * @method DIRECCION    setPAIS()           Sets the current record's "PAIS" value
 * @method DIRECCION    setACADEMICO()      Sets the current record's "ACADEMICO" value
 * @method DIRECCION    setDEPARTAMENTO()   Sets the current record's "DEPARTAMENTO" value
 * @method DIRECCION    setMUNICIPIO()      Sets the current record's "MUNICIPIO" value
 * 
 * @package    SEA-UCA_v1.0
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDIRECCION extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('DIRECCION');
        $this->hasColumn('idacademico', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iddireccion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('contenidodir', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('idmunicipiodir', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('iddeptodir', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => true,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('idpaisdir', 'integer', 4, array(
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
        $this->hasOne('PAIS', array(
             'local' => 'idpaisdir',
             'foreign' => 'idpais'));

        $this->hasOne('ACADEMICO', array(
             'local' => 'idacademico',
             'foreign' => 'idacademico'));

        $this->hasOne('DEPARTAMENTO', array(
             'local' => 'iddeptodir',
             'foreign' => 'iddepartamento'));

        $this->hasOne('MUNICIPIO', array(
             'local' => 'idmunicipiodir',
             'foreign' => 'idmunicipio'));
    }
}