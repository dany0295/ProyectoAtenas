-- Universidad Mariano Gálvez de Guatemala
-- Extensión Morales Izabal
-- Ingeniería en Sistenas de la Computación y Ciencias de Información
-- Base de Datos II
-- Script para la base de datos de la empresa Atenas, S.A. del Proyecto I del curso de Base de Datos II
-- Gemis Daniel Guevara Villeda
-- 4890-13-2950
-- Gustavo Rodolfo Arriaza
-- 4890-13-12004
-- Oscar Danilo Pérez
-- 4890-12-13782
-- Oseas Lima
-- 4890-06-16709
-- Miércoles 09 de Mayo del 2018
-- 20:48 PM

-- Creación de la bade de datos, si ya está creada la reemplaza
CREATE OR REPLACE DATABASE BDAtenas;

USE BDAtenas;

-- Creación de la tabla que contiene los puestos de la institución
CREATE OR REPLACE TABLE Puesto(
	idPuesto			TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NombrePuesto		VARCHAR(50)		NOT NULL
);

-- Creación de la tabla que contiene los rangos monetarios que manejará el usuario
CREATE OR REPLACE TABLE Rango(
	idRango				TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	RangoMinimo			DECIMAL(10,2)	NOT NULL,
	RangoMaximo			DECIMAL(10,2)	NOT NULL
);

-- Creación de la tabla que contiene los permisos que tendra el usuario
CREATE OR REPLACE TABLE Permiso(
	idPermiso			TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	TipoPermiso			VARCHAR(15)		NOT NULL
);

-- Creación de la tabla que contiene los roles de usuario
CREATE OR REPLACE TABLE Rol(
	idRol				TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NombreRol			VARCHAR(15)		NOT NULL,
	idPermiso			TINYINT			NOT NULL,
	INDEX (idPermiso),
	FOREIGN	KEY	(idPermiso)
        REFERENCES Permiso(idPermiso)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- Creación de la tabla que contiene los usuarios
CREATE OR REPLACE TABLE Usuario(
	idUsuario			TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NombreUsuario		VARCHAR(50)		NOT NULL,
	ApellidoUsuario		VARCHAR(50)		NOT NULL,
	TelefonoUsuario		VARCHAR(20)		NOT NULL,
	DireccionUsuario	VARCHAR(50) 	NOT NULL,
	CorreoUsuario		VARCHAR(40)		NOT NULL,
	NombreInicioSesionUsuario		VARCHAR(15)			NOT NULL,
	ContraseniaUsuario	TEXT			NOT NULL,
	idPuesto			TINYINT			NOT NULL,
	idRol				TINYINT			NOT NULL,
	idRango				TINYINT			NOT NULL,
	INDEX (idPuesto),
	FOREIGN	KEY	(idPuesto)
        REFERENCES Puesto(idPuesto)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
	INDEX (idRol),
	FOREIGN	KEY	(idRol)
        REFERENCES Rol(idRol)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
	INDEX (idRango),
	FOREIGN	KEY	(idRango)
        REFERENCES Rango(idRango)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- Creación de la tabla que contiene los Bancos que serán utilizados
CREATE OR REPLACE TABLE Banco(
	idBanco				TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NombreBanco			VARCHAR(50)		NOT NULL,
	DireccionBanco		VARCHAR(50)		NOT NULL,
	CorreoBanco			VARCHAR(40)		NOT NULL,
	SitioWebBanco		VARCHAR(59)		NOT NULL,
	TelefonoBanco		VARCHAR(15)		NOT NULL
);

-- Creación de la tabla que contendrá todas las cuentas
CREATE OR REPLACE TABLE Cuenta(
	idCuenta			TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NumeroCuenta		VARCHAR(25)		NOT NULL,
	NombreCuenta		VARCHAR(50)		NOT NULL,
	TipoCuenta			VARCHAR(15)		NOT NULL,
	SaldoCuenta			DECIMAL(10,2)	NOT NULL,
	idBanco				TINYINT			NOT NULL,
	INDEX (idBanco),
	FOREIGN	KEY	(idBanco)
        REFERENCES Banco(idBanco)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- Creación de la tabla que contendrá todas las chequeras
CREATE OR REPLACE TABLE Chequera(
	idChequera			SMALLINT		NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NombreChequera		VARCHAR(50)		NOT NULL,
	idCuenta			TINYINT			NOT NULL,
	RangoMinimoChequera	SMALLINT		NOT NULL,
	RangoMaximoChequera	SMALLINT		NOT NULL,
	INDEX (idCuenta),
	FOREIGN	KEY	(idCuenta)
        REFERENCES Cuenta(idCuenta)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- Creación de la tabla que contendrá todos los proveedores
CREATE OR REPLACE TABLE Proveedor(
	idProveedor			TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NombreProveedor		VARCHAR(50)		NOT NULL
);

-- Creación de la tabla que contendrá los cheques generados
CREATE OR REPLACE TABLE Cheque(
	idCheque			SMALLINT		NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	NumeroCheque		SMALLINT		NOT NULL,
	LugarCheque			VARCHAR(50)		NOT NULL,
	FechaCheque			DATE			NOT NULL,
	idProveedor			TINYINT			NOT NULL,
	ComentarioCheque	VARCHAR(50)		NOT NULL,
	MontoCheque			DECIMAL(10,2)	NOT NULL,
	idChequera			SMALLINT		NOT NULL,
	EstadoCheque		VARCHAR(15)		NOT NULL,
	INDEX (idProveedor),
	FOREIGN	KEY	(idProveedor)
        REFERENCES Proveedor(idProveedor)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
	INDEX (idChequera),
	FOREIGN	KEY	(idChequera)
        REFERENCES Chequera(idChequera)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- Creación de la tabla que contendrá los depósitos realizados
CREATE OR REPLACE TABLE Deposito(
	idDeposito			TINYINT			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	MontoDeposito		DECIMAL(10,2)	NOT NULL,
	NoDocumentoDeposito	INTEGER			NOT NULL,
	idCuenta			TINYINT			NOT NULL,
	idBanco				TINYINT			NOT NULL,
	INDEX (idCuenta),
	FOREIGN	KEY	(idCuenta)
        REFERENCES Cuenta(idCuenta)
        ON DELETE CASCADE
        ON UPDATE NO ACTION,
	INDEX (idBanco),
	FOREIGN	KEY	(idBanco)
        REFERENCES Banco(idBanco)
        ON DELETE CASCADE
        ON UPDATE NO ACTION
);

-- Creación de la tabla que contiene la bitácora de las transacciones de la base de datos
CREATE OR REPLACE TABLE BitacoraTransacciones(
	idBitacora			INTEGER			NOT NULL			PRIMARY KEY			AUTO_INCREMENT,
	HoraBitacora		TIME			NOT NULL,
	FechaBitacora		DATE			NOT NULL,
	HostBitacora		VARCHAR(20)		NOT NULL,
	TipoMovimientoBitacora		VARCHAR(40)		NOT NULL,
	UsuarioBitacora		VARCHAR(20)
);