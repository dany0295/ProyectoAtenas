-- Universidad Mariano Gálvez de Guatemala
-- Extensión Morales Izabal
-- Ingeniería en Sistenas de la Computación y Ciencias de Información
-- Base de Datos II
-- Script para la insersión de los usuarios adminstradores de la 
-- base de datos de la empresa Atenas, S.A. del Proyecto I del 
-- curso de Base de Datos II.
-- Gemis Daniel Guevara Villeda
-- 4890-13-2950
-- Gustavo Rodolfo Arriaza
-- 4890-13-12004
-- Oscar Danilo Pérez
-- 4890-12-13782
-- Oseas Lima
-- 4890-06-16709
-- Miércoles 16 de Mayo del 2018
-- 08:51 PM

-- Uso de la base de datos BDAtenas
USE BDAtenas;

-- Insersion del primer puesto, en este caso será Administrador
INSERT INTO Puesto (CodigoPuesto, NombrePuesto)
			Values('0001','Administrador');
			
-- Insersión del primer Rango, en este Caso Administrador
INSERT INTO Rango (CodigoRango, RangoMinimo, RangoMaximo)
			VALUES('0001', 999999.99, 999999.99);

-- Insersión del primer Permiso, en este cado Administrador y operador
INSERT INTO Permiso (TipoPermiso)
			Values('Administrador');
INSERT INTO Permiso (TipoPermiso)
			Values('Operador');
			
-- Insersión del primer Rol, en este caso Administrador
INSERT INTO Rol(NombreRol, idPermiso)
			VALUES('Administrador', 1);
			
-- Insersión de los usuarios adminstradores del sistema.
INSERT INTO Usuario (NombreUsuario, ApellidoUsuario, TelefonoUsuario,
                     DireccionUsuario, CorreoUsuario, NombreInicioSesionUsuario,
					 ContraseniaUsuario, idPuesto, idRol, idRango)
              VALUES('Gemis Daniel', 'Guevara Villeda', '1234-5678', 'Ciudad',
                     'admin@site.com', 'gguevara', 'e60c177bc95bb0d56e2f95ac372bde51', 1, 1, 1);

INSERT INTO Usuario (NombreUsuario, ApellidoUsuario, TelefonoUsuario,
                     DireccionUsuario, CorreoUsuario, NombreInicioSesionUsuario,
					 ContraseniaUsuario, idPuesto, idRol, idRango)
              VALUES('Gustavo Rodolfo', 'Arriaza', '1234-5678', 'Ciudad',
                     'admin@site.com', 'garriaza', '0b97363041ab9c0a7e8a8e9a6e1394ac', 1, 1, 1);
					
INSERT INTO Usuario (NombreUsuario, ApellidoUsuario, TelefonoUsuario,
                     DireccionUsuario, CorreoUsuario, NombreInicioSesionUsuario,
					 ContraseniaUsuario, idPuesto, idRol, idRango)
              VALUES('Oscar Danilo', 'Pérez Juárez', '1234-5678', 'Ciudad',
                     'admin@site.com', 'operez', 'ddf300630c30a126a7ac2c759342dd1a', 1, 1, 1);
					 
INSERT INTO Usuario (NombreUsuario, ApellidoUsuario, TelefonoUsuario,
                     DireccionUsuario, CorreoUsuario, NombreInicioSesionUsuario,
					 ContraseniaUsuario, idPuesto, idRol, idRango)
              VALUES('Oseas Eli', 'Lima Juárez', '1234-5678', 'Ciudad',
                     'admin@site.com', 'olima', 'befefca1f3e124665f72f6ec168acfff', 1, 1, 1);