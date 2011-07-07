<?php

/**
 * ACADEMICO form.
 *
 * @package    SEA-UCA_v1.0
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ACADEMICOForm extends BaseACADEMICOForm
{
    public function configure()
    {
        //Ocultando campos que no puede modificar el usuario
        unset (
            $this['esnacional'],
            $this['esescalafonado'],
            $this['espensionado'],
            $this['esjubilado'],
            $this['idusuario']
        );
      
        //Sustituyendo widgets por otro más adecuados
        $this->widgetSchema['sexoacad'] = new sfWidgetFormChoice(
                array(
                    'choices'   => ACADEMICO::$strSexos,
                    'multiple'  => false,
                    'expanded'  => true,
                )
            );
        //$this->widgetSchema['fechanacimientoacadaux'] = new sfWidgetFormInputText(array(), array('id' => 'fechanacimientoacad',));
        $this->widgetSchema['fechanacimientoacad'] = new seaWidgetFormInputTextDate(array(), array('id' => 'fechanacimientoacad',));
        $this->widgetSchema['usalentes'] = new sfWidgetFormTrilean();
        $this->widgetSchema['poseetransporte'] = new sfWidgetFormTrilean();
        
        //Colocando validadores
        /*
        $this->validatorSchema['fechanacimientoacad']
                = new seaValidatorDate(
                        array(
                            'date_format' => '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/',
                            'min' => '1900-01-01',
                            'max' => date('Y-m-d'),
                        ),
                        array(
                            'bad_format'    => '"%value%" no posee un formato válido (%date_format%).',
                            'max'           => 'La fecha debe ser anterior a %max%.',
                            'min'           => 'La fecha debe ser posterior a %min%.',
                        )
                    );
         * 
         */
        $this->validatorSchema['fechanacimientoacad']
                = new seaValidatorDate(
                        array(
                            'date_format' => '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/',
                            'min' => '1900-01-01',
                            'max' => date('Y-m-d'),
                            'date_format_range_error' => 'd/m/Y',
                        ),
                        array(
                            'bad_format'    => '"%value%" no posee un formato válido (%date_format%).',
                            'max'           => 'La fecha "%value%" debe ser anterior a %max%.',
                            'min'           => 'La fecha "%value%" debe ser posterior a %min%.',
                        )
                    );
        $this->validatorSchema['usalentes'] = new sfValidatorTrilean();
        $this->validatorSchema['poseetransporte'] = new sfValidatorTrilean();
          
        //Colocando etiquetas a los widgets
        $this->widgetSchema->setLabels(
            array(
                'codigoacademico'     => 'Código',
                'primernombreacad'    => 'Primer nombre',
                'segundonombreacad'   => 'Segundo nombre',
                'primerapellidoacad'  => 'Primer apellido',
                'segundoapellidoacad' => 'Segundo apellido',
                'apellidocasadaacad'  => 'Apellido de casada',
                'sexoacad'            => 'Sexo',
                'fechanacimientoacad' => 'Fecha de nacimiento',
                //'esnacional'          => 'Es nacional',
                //'esescalafonado'      => 'Posee escalafón',
                //'espensionado'        => 'Es pensionado',
                //'esjubilado'          => 'Es jubilado',
                'usalentes'           => 'Usa lentes',
                'poseetransporte'     => 'Posee transporte',
                'idmunicipionac'      => 'Municipio de nacimiento',
                'iddeptonac'          => 'Departamento de nacimiento',
                'idpaisnac'           => 'País de nacimiento',
                'idpaisciudadania'    => 'País de ciudadanía',
                'idtiposangre'        => 'Tipo de sangre',
                'idnivelestudio'      => 'Nivel de estudio',
                'idestadocivil'       => 'Estado civil',
                //'idusuario'           => 'Usuario',
            )
        );
        
        //Agregando textos de ayuda a aquellos widgets que se considere necesario
        $this->widgetSchema->setHelps(
            array(
                'codigoacademico'     => 'Código asignado por la UCA',
                //'primernombreacad'    => 'Primer nombre',
                //'segundonombreacad'   => 'Segundo nombre',
                //'primerapellidoacad'  => 'Primer apellido',
                //'segundoapellidoacad' => 'Segundo apellido',
                //'apellidocasadaacad'  => 'Apellido de casada, si el estado civil es casada',
                //'sexoacad'            => 'Sexo',
                //'fechanacimientoacad' => 'Fecha de nacimiento',
                //'esnacional'          => 'Es nacional',
                //'esescalafonado'      => 'Posee escalafón',
                //'espensionado'        => 'Es pensionado',
                //'esjubilado'          => 'Es jubilado',
                //'usalentes'           => 'Usa lentes',
                //'poseetransporte'     => 'Posee transporte',
                //'idmunicipionac'      => 'Municipio de nacimiento',
                //'iddeptonac'          => 'Departamento de nacimiento',
                //'idpaisnac'           => 'País de nacimiento',
                //'idpaisciudadania'    => 'País de ciudadanía',
                //'idtiposangre'        => 'Tipo de sangre',
                //'idnivelestudio'      => 'Nivel de estudio',
                //'idestadocivil'       => 'Estado civil',
                //'idusuario'           => 'Usuario',
            )
        );
        
        
    }

    /*
    public function doSave($con = null)
    {
        //$acdAcademico = $this->getObject();
        //$acdAcademico->setFechanacimientoacad(date('Y-m-d', strtotime($acdAcademico->getFechanacimientoacad_Texto())));
    
        return parent::doSave($con);
    }
    */
}
