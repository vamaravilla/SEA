DROP SCHEMA `bdsea`;

/*CREACION DE LA BASE DE DATOS*/
CREATE SCHEMA `bdsea`;

/*DEFINICION DE LA BASE DE DATOS A USAR*/
USE `bdsea`;

/*USANDO EL MOTOR DE DATOS INNODB POR DEFECTO*/
SET storage_engine=INNODB;

/*CREACION DE TABLAS 1:N, N:1*/

CREATE TABLE `bdsea`.`ACADEMICO` (
  idAcademico INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idAcademico),
  codigoAcademico VARCHAR(8) NOT NULL,
  primerNombreAcad VARCHAR(75) NOT NULL,
  segundoNombreAcad VARCHAR(75) NULL,
  primerApellidoAcad VARCHAR(75) NOT NULL,
  segundoApellidoAcad VARCHAR(75) NULL,
  apellidoCasadaAcad VARCHAR(75) NULL,
  sexoAcad BOOLEAN NOT NULL,
  fechaNacimientoAcad DATE NOT NULL, 
  esNacional BOOLEAN NOT NULL,
  esEscalafonado BOOLEAN NULL,#Se cambio a null debido a que no se implementara el modulo relacionado
  esPensionado BOOLEAN NULL,
  esJubilado BOOLEAN NULL,
  usaLentes BOOLEAN NULL, #Revisar anulidad de campos tipo bandera
  poseeTransporte BOOLEAN NULL,
  idCiudadNac INT UNSIGNED NOT NULL,#Verificado v5
  idPaisCiudadania INT UNSIGNED NOT NULL,
  idTipoSangre INT UNSIGNED NULL,#No se tiene este dato en todos los casos
  idNivelEstudio INT UNSIGNED NOT NULL,
  idEstadoCivil INT UNSIGNED NOT NULL,
  idUsuario INT UNSIGNED NOT NULL
);

CREATE TABLE `bdsea`.`CIUDAD`(#Modificado v5
  idCiudad INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idCiudad),
  nombreCiudad VARCHAR(150) NOT NULL,
  idEstado INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`ESTADO`(#Modificado v5
  idEstado INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idEstado),
  nombreEstado VARCHAR(150) NOT NULL,
  idPais INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`PAIS`(
  idPais INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idPais),
  codigoIsoPais CHAR(2) NOT NULL,
  nombreIsoPais VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`TIPO_SANGRE`(
  idTipoSangre INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTipoSangre),
  nombreTipoSangre VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`NIVEL_ESTUDIO`( 
  idNivelEstudio INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idNivelEstudio),
  nombreNivelEstudio VARCHAR(75) NOT NULL
);

CREATE TABLE `bdsea`.`ESTADO_CIVIL`(
  idEstadoCivil INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idEstadoCivil),
  nombreEstadoCivil VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`USUARIO`(
  idUsuario INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idUsuario),
  nombreUsuario VARCHAR(50) NOT NULL,
  contraseniaUsuario VARCHAR(50) NOT NULL,
  idPerfil INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`PERFIL`(
  idPerfil INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idPerfil),
  nombrePerfil VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`IDIOMA`(
  idIdioma INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idIdioma),
  codIsoIdioma CHAR(2) NOT NULL,
  nombreIsoIdioma VARCHAR(50) NOT NULL 
);

CREATE TABLE `bdsea`.`DIRECCION`(#Modificada v5
  idDireccion INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idDireccion),#Recordar que el campo autoincremental debe ir primero en la PK
  contenidoDir VARCHAR(200) NOT NULL, 
  idCiudadDir INT UNSIGNED NOT NULL,#FK  
  idAcademico INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`TEL_ACADEMICO`(#Modificado v5
  idTelAcademico INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTelAcademico),
  numTelAcademico VARCHAR(25) NOT NULL, #por caso de extranjeros
  tipoTelAcademico INT NOT NULL, #Valores:1=fijo,2=celular,3=fax
  idAcademico INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`DOC_IDENTIFICACION`(
  idDocIdent INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idDocIdent),
  numeroDocIdent VARCHAR(25) NOT NULL,
  fechaExtension DATE NULL, 
  lugarExtension VARCHAR(150) NULL, 
  idTipoDocIdent INT UNSIGNED NOT NULL,#FK
  idAcademico INT UNSIGNED NOT NULL#FK
);

CREATE TABLE `bdsea`.`TIPO_DOC_IDENT`(
  idTipoDocIdent INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTipoDocIdent),
  nombreTipoDocIdent VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`CONTACTO_EMER`(
  idContactoEmer INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idContactoEmer),
  nombreContactoEmer VARCHAR(150) NOT NULL, 
  numTelContactoEmer VARCHAR(25) NULL, #por caso de extranjeros
  tipoTelContactoEmer INT NOT NULL, #Valores:1=fijo,2=celular,3=fax
  idAcademico INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`MODULO`( #Modificado v5
  idModulo INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idModulo),
  codModulo CHAR(2) NOT NULL, 
  nombreModulo VARCHAR(100) NOT NULL,
  descripcionModulo TEXT NOT NULL,
  urlModulo VARCHAR(300) NULL, 
  imgModulo VARCHAR(300) NOT NULL,
  imgSobreModulo VARCHAR(300) NOT NULL,
  imgActivoModulo VARCHAR(300) NOT NULL
  );
  
CREATE TABLE `bdsea`.`ACCION`(
  idAccion INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idAccion),
  codAccion CHAR(5) NOT NULL, 
  nombreAccion VARCHAR(100) NOT NULL, 
  urlAccion VARCHAR(300) NULL,
  idModulo INT UNSIGNED NOT NULL #FK
  );
  
 CREATE TABLE `bdsea`.`ACTIVIDAD`( #Modificada v5
  idActividad INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idActividad),
  nombreActividad VARCHAR(300) NOT NULL, 
  descripcionActividad TEXT NULL, #Agregado v4 
  observacionActividad TEXT NULL,
  idTipoActividad INT UNSIGNED NOT NULL, #FK
  idAcademico INT UNSIGNED NOT NULL #FK
  );

CREATE TABLE `bdsea`.`TIPO_ACTIVIDAD`(
  idTipoActividad INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTipoActividad),
  nombreTipoActividad VARCHAR(50) NOT NULL,
  esRequeridoArchivo BOOLEAN NOT NULL #CAMPO AGREGADO
);

CREATE TABLE `bdsea`.`ESTADO_ACTIVIDAD`(
  idEstadoActividad INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idEstadoActividad),
  nombreEstadoActividad VARCHAR(25) NOT NULL,
  permiteEdicion BOOLEAN NOT NULL DEFAULT FALSE,
  esEstadoInicial BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE `bdsea`.`OPCION_DATO_ACT`(
  idOpcionDatoAct INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idOpcionDatoAct),
  nombreOpcionDatoAct VARCHAR(300) NOT NULL,
  idDatoActividad INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`DATO_ACTIVIDAD`( #Modificada v5
  idDatoActividad INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idDatoActividad),
  nombreDatoActividad VARCHAR(150) NOT NULL,
  esRequerido BOOLEAN NOT NULL, #Preguntar sobre restriccion default
  tipoDatoAct SMALLINT NOT NULL #Valores:0=booleano,1=entero,2=real,3=cadena,4=fecha,5=lista de opciones   
);

CREATE TABLE `bdsea`.`TIPO_CONTRATACION`(
  idTipoContratacion INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTipoContratacion),
  nombreTipoContratacion VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`TIPO_CONTRATACION_EX`(
  idTipoContratacionEx INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTipoContratacionEx),
  nombreTipoContratacionEx VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`TIEMPO_CONTRATACION`(
  idTiempoContratacion INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTiempoContratacion),
  nombreTiempoContratacion VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`UNIDAD_ORGANIZATIVA`(
  idUnidadOrganizativa INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idUnidadOrganizativa),
  nombreUnidadOrganizativa VARCHAR(150) NOT NULL,
  esDepartamento BOOLEAN NOT NULL
);

CREATE TABLE `bdsea`.`TIPO_CARGO`(
  idTipoCargo INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTipoCargo),
  nombreTipoCargo VARCHAR(50) NOT NULL
);

CREATE TABLE `bdsea`.`CARGO`(
  idCargo INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idCargo),
  nombreCargo VARCHAR(50) NOT NULL,
  descripcionCargo VARCHAR(300) NULL,
  idTipoCargo INT UNSIGNED NOT NULL #FK
);

CREATE TABLE `bdsea`.`HISTORIAL_CARGO`( #Modificado v5
  idHistorialCargo INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY (idHistorialCargo),
  fechaInicio DATE NOT NULL,
  fechaFin DATE NULL,
  idAcademico INT UNSIGNED NOT NULL,#FK
  idCargoxUnidadOrg INT UNSIGNED NOT NULL,#FK 
  idTipoContratacion INT UNSIGNED NOT NULL,#FK
  idTipoContratacionEx INT UNSIGNED NOT NULL,#FK
  idTiempoContratacion INT UNSIGNED NOT NULL#FK
 ); 

CREATE TABLE `bdsea`.`TITULO_ACADEMICO`(
  idTituloAcademico INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idTituloAcademico),
  nombreTituloAcademico VARCHAR(150) NOT NULL
);

CREATE TABLE `bdsea`.`HISTORIAL_GRADO_ACAD`(
  idHistorialGradoAcad INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY (idHistorialGradoAcad),
  anioObtencion INT NOT NULL,
  idAcademico INT UNSIGNED NOT NULL,#FK
  idNivelEstudio INT UNSIGNED NOT NULL,#FK
  idTituloAcademico INT UNSIGNED NOT NULL#FK
 ); 

/**********NUEVAS TABLAS***********************/

CREATE  TABLE `bdsea`.`ACTIVIDAD_UMA`( #Modificada v5
  idActividadUMA INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idActividadUMA),
  nombreActividadUMA VARCHAR(300) NOT NULL, 
  descripcionActividadUMA TEXT NULL, #Agregado v4
  cantidadUMADef DECIMAL(2) NULL, #Segun doc hay algunas actividades que no tienen 
  idCategoriaUMA INT UNSIGNED NOT NULL #FK
); 

CREATE TABLE `bdsea`.`CATEGORIA_UMA`( 
  idCategoriaUMA INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY (idCategoriaUMA),
  numNivelCategoriaUMA SMALLINT NOT NULL, 
  nombreCategoriaUMA VARCHAR(150) NOT NULL, 
  descripcionCategoriaUMA TEXT NULL , 
  idCategoriaUMASup INT UNSIGNED NOT NULL #FK
 ); 
  
CREATE TABLE `bdsea`.`MATERIA`(#Modificado v5
  idMateria INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY (idMateria),
  codigoMateria CHAR(6) NOT NULL,#Según consulta de horarios de clases
  nombreMateria VARCHAR(150) NOT NULL, 
  cantidadUVMateria SMALLINT NOT NULL,
  idUnidadOrganizativa INT UNSIGNED NOT NULL #FK
);
  
CREATE TABLE `bdsea`.`AVANCE_ACTIVIDAD`(#Modificado v5 
  idAvance INT UNSIGNED NOT NULL AUTO_INCREMENT, #Modificado v4
  PRIMARY KEY (idAvance),
  nombreAvance VARCHAR(300) NOT NULL, #Agregado v4
  descripcionAvance TEXT NULL, #Agregado v4
  fechaInicioAv DATE NOT NULL, 
  fechaFinAv DATE NOT NULL, 
  fechaReporteAv DATE NOT NULL, 
  cicloRealizacion INT NOT NULL, #Agregado v4
  anioCicloRealizacion INT NOT NULL, #Agregado v4
  porcentajeAvance DECIMAL(2) NOT NULL, #Modificado v4
  archivoAvance VARCHAR(500) NULL, #Agregado v4 
  cantUMAAsignada DECIMAL(2) NULL, #Agregado v4
  observacionAvance TEXT NULL, #Agregado v4
  idActividad INT UNSIGNED NOT NULL, #FK
  idEstadoActividad INT UNSIGNED NOT NULL #FK
);
  
/*****************************CREACION DE TABLAS N:N*/

CREATE TABLE `bdsea`.`ACADEMICOXIDIOMA`(
  idAcademico INT UNSIGNED NOT NULL, #PK,FK
  idIdioma INT UNSIGNED NOT NULL #PK,FK
);

CREATE TABLE `bdsea`.`ACCIONXPERFIL`( #Modificada v5
  idAccion INT UNSIGNED NOT NULL, #PK,FK
  idPerfil INT UNSIGNED NOT NULL #PK,FK
);

CREATE TABLE `bdsea`.`VALOR_DATO_ACT`( #Modificado v5
  idValorDatoAct INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (idValorDatoAct),
  valorBooleanAct BOOLEAN NULL,
  valorEnteroAct INT NULL,
  valorRealAct FLOAT NULL, 
  valorFechaAct DATE NULL,
  valorCadenaAct VARCHAR(75) NULL,
  idActividad INT UNSIGNED NOT NULL, #FK
  idDatoActividad INT UNSIGNED NOT NULL, #FK
  idOpcionDatoAct INT UNSIGNED NULL #FK 
); 
 
 CREATE TABLE `bdsea`.`TIPOXDATO_ACT`(
  idTipoActividad INT UNSIGNED NOT NULL, #PK,FK 
  idDatoActividad INT UNSIGNED NOT NULL #PK,FK
);

 CREATE TABLE `bdsea`.`CARGOXUNIDAD_ORG`(#Modificado v5
  idCargoxUnidadOrg INT UNSIGNED NOT NULL AUTO_INCREMENT,#PK 
  PRIMARY KEY (idCargoxUnidadOrg),
  idCargo INT UNSIGNED NOT NULL, #FK 
  idUnidadOrganizativa INT UNSIGNED NOT NULL #FK
);

/**********NUEVAS TABLAS***********************/

CREATE  TABLE `bdsea`.`ACTXACT_UMA`( #Modificada v5
  idActividadUMASup INT UNSIGNED NOT NULL, #PK,FK
  idActividadUMA INT UNSIGNED NOT NULL #PK,FK
);

CREATE  TABLE `bdsea`.`ACADEMICOXMATERIA`( #Modificado v5
  idAcademico INT UNSIGNED NOT NULL, #PK,FK
  idMateria INT UNSIGNED NOT NULL, #PK,FK
  cicloImpartido INT NOT NULL, 
  anioCicloImpartido INT NOT NULL, 
  cantUMAAsignada DECIMAL(2) NULL
 );
 
/*************************CREACION DE LAS LLAVES PRIMARIAS( TABLAS N:N)***************/

ALTER TABLE `bdsea`.`ACADEMICOXIDIOMA`
  ADD CONSTRAINT PK_ACADEMICOXIDIOMA PRIMARY KEY (idAcademico,idIdioma);

ALTER TABLE `bdsea`.`ACCIONXPERFIL` #Modificada v5
  ADD CONSTRAINT PK_ACCIONXPERFIL PRIMARY KEY (idAccion,idPerfil);
  
ALTER TABLE `bdsea`.`TIPOXDATO_ACT`
  ADD CONSTRAINT PK_TIPOXDATO_ACT PRIMARY KEY (idTipoActividad,idDatoActividad);
    
ALTER TABLE `bdsea`.`ACTXACT_UMA`
  ADD CONSTRAINT PK_ACTXACT_UMA PRIMARY KEY (idActividadUMASup,idActividadUMA); 

ALTER TABLE `bdsea`.`ACADEMICOXMATERIA`#Modificado v5
  ADD CONSTRAINT PK_ACADEMICOXMATERIA PRIMARY KEY (idAcademico,idMateria); 

/********************************* RELACIONES DE N:N*********************************/

/*TABLA ACADEMICOXIDIOMA - 2 FK*/

ALTER TABLE `bdsea`.`ACADEMICOXIDIOMA`
  ADD CONSTRAINT FK_ACADEMICOXIDIOMA_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICOXIDIOMA`
  ADD CONSTRAINT FK_ACADEMICOXIDIOMA_IDIOMA FOREIGN KEY (idIdioma)
  REFERENCES `bdsea`.`IDIOMA` (idIdioma)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
/*TABLA ACCIONXPERFIL - 2 FK*/

ALTER TABLE `bdsea`.`ACCIONXPERFIL` #Modificada v5
  ADD CONSTRAINT FK_ACCIONXPERFIL_ACCION FOREIGN KEY (idAccion)
  REFERENCES `bdsea`.`ACCION` (idAccion)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACCIONXPERFIL`
  ADD CONSTRAINT FK_ACCIONXPERFIL_PERFIL FOREIGN KEY (idPerfil)
  REFERENCES `bdsea`.`PERFIL` (idPerfil)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
/*TABLA VALOR_DATO_ACT - 3 FK*/  #Modificado v5

ALTER TABLE `bdsea`.`VALOR_DATO_ACT`
  ADD CONSTRAINT FK_VALOR_DATO_ACT_ACTIVIDAD FOREIGN KEY (idActividad)
  REFERENCES `bdsea`.`ACTIVIDAD` (idActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`VALOR_DATO_ACT`
  ADD CONSTRAINT FK_VALOR_DATO_ACT_DATO_ACTIVIDAD FOREIGN KEY (idDatoActividad)
  REFERENCES `bdsea`.`DATO_ACTIVIDAD` (idDatoActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
ALTER TABLE `bdsea`.`VALOR_DATO_ACT`
  ADD CONSTRAINT FK_VALOR_DATO_ACT_OPCION_DATO_ACT FOREIGN KEY (idOpcionDatoAct)
  REFERENCES `bdsea`.`OPCION_DATO_ACT` (idOpcionDatoAct)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
/*TABLA TIPOXDATO_ACT - 2 FK*/

ALTER TABLE `bdsea`.`TIPOXDATO_ACT`
  ADD CONSTRAINT FK_TIPOXDATO_ACT_TIPO_ACTIVIDAD FOREIGN KEY (idTipoActividad)
  REFERENCES `bdsea`.`TIPO_ACTIVIDAD` (idTipoActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`TIPOXDATO_ACT`
  ADD CONSTRAINT FK_TIPOXDATO_ACT_DATO_ACTIVIDAD FOREIGN KEY (idDatoActividad)
  REFERENCES `bdsea`.`DATO_ACTIVIDAD` (idDatoActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 

/*TABLA CARGOXUNIDAD_ORG - 2 FK*/  #Verificado v5

ALTER TABLE `bdsea`.`CARGOXUNIDAD_ORG`
  ADD CONSTRAINT FK_CARGOXUNIDAD_ORG_CARGO FOREIGN KEY (idCargo)
  REFERENCES `bdsea`.`CARGO`(idCargo)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`CARGOXUNIDAD_ORG`
  ADD CONSTRAINT FK_CARGOXUNIDAD_ORG_UNIDAD_ORGANIZATIVA FOREIGN KEY (idUnidadOrganizativa)
  REFERENCES `bdsea`.`UNIDAD_ORGANIZATIVA` (idUnidadOrganizativa)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
/***********NUEVAS RELACIONES****************/  
    
/*TABLA ACADEMICOXMATERIA - 2 FK*/

ALTER TABLE `bdsea`.`ACADEMICOXMATERIA`
  ADD CONSTRAINT FK_ACADEMICOXMATERIA_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICOXMATERIA` #Modificado v5
  ADD CONSTRAINT FK_ACADEMICOXMATERIA_MATERIA FOREIGN KEY (idMateria)
  REFERENCES `bdsea`.`MATERIA` (idMateria)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
/*TABLA ACTXACT_UMA- 2 FK*/

ALTER TABLE `bdsea`.`ACTXACT_UMA`
  ADD CONSTRAINT FK_ACTXACT_UMA_ACTIVIDAD_UMA1 FOREIGN KEY (idActividadUMASup)
  REFERENCES `bdsea`.`ACTIVIDAD_UMA` (idActividadUMA)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACTXACT_UMA`
  ADD CONSTRAINT FK_ACTXACT_UMA_ACTIVIDAD_UMA2 FOREIGN KEY (idActividadUMA)
  REFERENCES `bdsea`.`ACTIVIDAD_UMA` (idActividadUMA)
  ON DELETE NO ACTION ON UPDATE NO ACTION;   
  
/************************************ RELACIONES DE 1:N, N:1 ************************/

#TABLA ACADEMICO - 6 FK *****

ALTER TABLE `bdsea`.`ACADEMICO` #Verificada v5
  ADD CONSTRAINT FK_ACADEMICO_CIUDAD FOREIGN KEY (idCiudadNac)
  REFERENCES `bdsea`.`CIUDAD` (idCiudad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICO`
  ADD CONSTRAINT FK_ACADEMICO_PAIS FOREIGN KEY (idPaisCiudadania)
  REFERENCES `bdsea`.`PAIS` (idPais)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICO`
  ADD CONSTRAINT FK_ACADEMICO_TIPO_SANGRE FOREIGN KEY (idTipoSangre)
  REFERENCES `bdsea`.`TIPO_SANGRE` (idTipoSangre)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICO`
  ADD CONSTRAINT FK_ACADEMICO_NIVEL_ESTUDIO FOREIGN KEY (idNivelEstudio)
  REFERENCES `bdsea`.`NIVEL_ESTUDIO` (idNivelEstudio)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICO`
  ADD CONSTRAINT FK_ACADEMICO_ESTADO_CIVIL FOREIGN KEY (idEstadoCivil)
  REFERENCES `bdsea`.`ESTADO_CIVIL` (idEstadoCivil)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`ACADEMICO`
  ADD CONSTRAINT FK_ACADEMICO_USUARIO FOREIGN KEY (idUsuario)
  REFERENCES `bdsea`.`USUARIO` (idUsuario)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

#TABLA ESTADO - 1 FK ***** Revisada v5

ALTER TABLE `bdsea`.`ESTADO`
  ADD CONSTRAINT FK_ESTADO_PAIS FOREIGN KEY (idPais)
  REFERENCES `bdsea`.`PAIS` (idPais)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

#TABLA CIUDAD - 1 FK ***** Modificado v5

ALTER TABLE `bdsea`.`CIUDAD`
  ADD CONSTRAINT FK_CIUDAD_ESTADO FOREIGN KEY (idEstado)
  REFERENCES `bdsea`.`ESTADO` (idEstado)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

#TABLA USUARIO - 1 FK *****

ALTER TABLE `bdsea`.`USUARIO`
  ADD CONSTRAINT FK_USUARIO_PERFIL FOREIGN KEY (idPerfil)
  REFERENCES `bdsea`.`PERFIL` (idPerfil)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

#TABLA DIRECCION - 2 FK *****

ALTER TABLE `bdsea`.`DIRECCION` #Modificada v5
  ADD CONSTRAINT FK_DIRECCION_CIUDAD FOREIGN KEY (idCiudadDir)
  REFERENCES `bdsea`.`CIUDAD` (idCiudad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`DIRECCION`
  ADD CONSTRAINT FK_DIRECCION_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

#TABLA TEL_ACADEMICO - 1 FK *****

ALTER TABLE `bdsea`.`TEL_ACADEMICO` #Revisado v5
  ADD CONSTRAINT FK_TEL_ACADEMICO_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
    
#TABLA DOC_IDENTIFICACION - 2 FK *****

ALTER TABLE `bdsea`.`DOC_IDENTIFICACION`
  ADD CONSTRAINT FK_DOC_IDENTIFICACION_TIPO_DOC_IDENT FOREIGN KEY (idTipoDocIdent)
  REFERENCES `bdsea`.`TIPO_DOC_IDENT` (idTipoDocIdent)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
 ALTER TABLE `bdsea`.`DOC_IDENTIFICACION`
  ADD CONSTRAINT FK_DOC_IDENTIFICACION_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
#TABLA CONTACTO_EMER - 1 FK *****

ALTER TABLE `bdsea`.`CONTACTO_EMER` #Verificado v5
  ADD CONSTRAINT FK_CONTACTO_EMER_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
#TABLA ACCION - 1 FK *****  #Verificada v5

ALTER TABLE `bdsea`.`ACCION`
  ADD CONSTRAINT FK_ACCION_MODULO FOREIGN KEY (idModulo)
  REFERENCES `bdsea`.`MODULO` (idModulo)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
#TABLA ACTIVIDAD - 2 FK *****  #Modificada v5
  
ALTER TABLE `bdsea`.`ACTIVIDAD`
  ADD CONSTRAINT FK_ACTIVIDAD_TIPO_ACTIVIDAD FOREIGN KEY (idTipoActividad)
  REFERENCES `bdsea`.`TIPO_ACTIVIDAD` (idTipoActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
    
 ALTER TABLE `bdsea`.`ACTIVIDAD`
  ADD CONSTRAINT FK_ACTIVIDAD_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
#TABLA OPCION_DATO_ACT - 1 FK *****

ALTER TABLE `bdsea`.`OPCION_DATO_ACT`
  ADD CONSTRAINT FK_OPCION_DATO_ACT_DATO_ACTIVIDAD FOREIGN KEY (idDatoActividad)
  REFERENCES `bdsea`.`DATO_ACTIVIDAD` (idDatoActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
#TABLA CARGO - 1 FK *****

ALTER TABLE `bdsea`.`CARGO`
  ADD CONSTRAINT FK_CARGO_TIPO_CARGO FOREIGN KEY (idTipoCargo)
  REFERENCES `bdsea`.`TIPO_CARGO` (idTipoCargo)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
#TABLA HISTORIAL_CARGO - 5 FK *****

ALTER TABLE `bdsea`.`HISTORIAL_CARGO`
  ADD CONSTRAINT FK_HISTORIAL_CARGO_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`HISTORIAL_CARGO` #Modificado v5
  ADD CONSTRAINT FK_HISTORIAL_CARGO_CARGOXUNIDAD_ORG FOREIGN KEY (idCargoxUnidadOrg)
  REFERENCES `bdsea`.`CARGOXUNIDAD_ORG` (idCargoxUnidadOrg)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`HISTORIAL_CARGO`
  ADD CONSTRAINT FK_HISTORIAL_CARGO_TIPO_CONTRATACION FOREIGN KEY (idTipoContratacion)
  REFERENCES `bdsea`.`TIPO_CONTRATACION` (idTipoContratacion)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`HISTORIAL_CARGO`
  ADD CONSTRAINT FK_HISTORIAL_CARGO_TIPO_CONTRATACION_EX FOREIGN KEY (idTipoContratacionEx)
  REFERENCES `bdsea`.`TIPO_CONTRATACION_EX` (idTipoContratacionEx)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`HISTORIAL_CARGO`
  ADD CONSTRAINT FK_HISTORIAL_CARGO_TIEMPO_CONTRATACION FOREIGN KEY (idTiempoContratacion)
  REFERENCES `bdsea`.`TIEMPO_CONTRATACION` (idTiempoContratacion)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

#TABLA HISTORIAL_GRADO_ACAD - 3 FK *****

ALTER TABLE `bdsea`.`HISTORIAL_GRADO_ACAD`
  ADD CONSTRAINT FK_HISTORIAL_GRADO_ACAD_ACADEMICO FOREIGN KEY (idAcademico)
  REFERENCES `bdsea`.`ACADEMICO` (idAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`HISTORIAL_GRADO_ACAD`
  ADD CONSTRAINT FK_HISTORIAL_GRADO_ACAD_NIVEL_ESTUDIO FOREIGN KEY (idNivelEstudio)
  REFERENCES `bdsea`.`NIVEL_ESTUDIO` (idNivelEstudio)
  ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `bdsea`.`HISTORIAL_GRADO_ACAD`
  ADD CONSTRAINT FK_HISTORIAL_GRADO_ACAD_TITULO_ACADEMICO FOREIGN KEY (idTituloAcademico)
  REFERENCES `bdsea`.`TITULO_ACADEMICO`(idTituloAcademico)
  ON DELETE NO ACTION ON UPDATE NO ACTION;
  
/***********NUEVAS RELACIONES***************/ 
  
#TABLA AVANCE_ACTIVIDAD - 2 FK *****  #Modificada v5

ALTER TABLE `bdsea`.`AVANCE_ACTIVIDAD`
  ADD CONSTRAINT FK_AVANCE_ACTIVIDAD_ACTIVIDAD FOREIGN KEY (idActividad)
  REFERENCES `bdsea`.`ACTIVIDAD`(idActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
ALTER TABLE `bdsea`.`AVANCE_ACTIVIDAD`
  ADD CONSTRAINT FK_AVANCE_ACTIVIDAD_ESTADO_ACTIVIDAD FOREIGN KEY (idEstadoActividad)
  REFERENCES `bdsea`.`ESTADO_ACTIVIDAD` (idEstadoActividad)
  ON DELETE NO ACTION ON UPDATE NO ACTION;  
  
#TABLA MATERIA - 1 FK *****

ALTER TABLE `bdsea`.`MATERIA` #Verificado v5
  ADD CONSTRAINT FK_MATERIA_UNIDAD_ORGANIZATIVA FOREIGN KEY (idUnidadOrganizativa)
  REFERENCES `bdsea`.`UNIDAD_ORGANIZATIVA`(idUnidadOrganizativa)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
  
#TABLA CATEGORIA_UMA - 1 FK *****

ALTER TABLE `bdsea`.`CATEGORIA_UMA`
  ADD CONSTRAINT FK_CATEGORIA_UMA_CATEGORIA_UMA FOREIGN KEY (idCategoriaUMASup)
  REFERENCES `bdsea`.`CATEGORIA_UMA`(idCategoriaUMA)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
   
#TABLA ACTIVIDAD_UMA - 1 FK *****  #Verificada v5

ALTER TABLE `bdsea`.`ACTIVIDAD_UMA`
  ADD CONSTRAINT FK_ACTIVIDAD_UMA_CATEGORIA_UMA FOREIGN KEY (idCategoriaUMA)
  REFERENCES `bdsea`.`CATEGORIA_UMA`(idCategoriaUMA)
  ON DELETE NO ACTION ON UPDATE NO ACTION; 
    