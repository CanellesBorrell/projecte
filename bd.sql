-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2016 at 07:37 PM
-- Server version: 5.5.46
-- PHP Version: 5.3.10-1ubuntu3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: Projecte
--

-- --------------------------------------------------------

--
-- Table structure for table Asignaturas
--

CREATE TABLE IF NOT EXISTS Asignaturas (
  id_asignatura int(11) NOT NULL AUTO_INCREMENT,
  Asignatura varchar(50) DEFAULT NULL,
  Contraseña varchar(50) NOT NULL,
  Profesor_asignado int(11) DEFAULT NULL,
  id_escuela int (11) NOT NULL,
  PRIMARY KEY (id_asignatura)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Roles
--

CREATE TABLE IF NOT EXISTS Escuela (
  id_escuela int(11) NOT NULL AUTO_INCREMENT,
  Nombre varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_escuela)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS Roles (
  id_rol int(11) NOT NULL AUTO_INCREMENT,
  Rol varchar(50) DEFAULT NULL,
  PRIMARY KEY (id_rol)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------

--
-- Inserts de los roles por defecto 
-- 

INSERT INTO Roles (Rol) VALUES ('Administrador');
INSERT INTO Roles (Rol) VALUES ('Director');
INSERT INTO Roles (Rol) VALUES ('Profesor');
INSERT INTO Roles (Rol) VALUES ('Alumno');

-- --------------------------------------------------------


--
-- Table structure for table Foro
--

CREATE TABLE IF NOT EXISTS Foros (
  id_foro int(11) NOT NULL AUTO_INCREMENT,
  id_usuario int(11) NOT NULL,
  Nombre varchar(150) NOT NULL,
  DiaHora timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  Descripcion text NOT NULL,
  PRIMARY KEY (id_foro)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Grupos
--

CREATE TABLE IF NOT EXISTS Grupos (
  id_grupo int(11) NOT NULL AUTO_INCREMENT,
  Grupo varchar(50) NOT NULL,
  Profesor_asignado int(11) NOT NULL,
  id_escuela int (11) NOT NULL,
  PRIMARY KEY (id_grupo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Grupos_Asignaturas
--

CREATE TABLE IF NOT EXISTS Grupos_Asignaturas (
  id_Grupos_Asignaturas int(11) NOT NULL AUTO_INCREMENT,
  id_grupo int(11) NOT NULL,
  id_asignatura int(11) NOT NULL,
  PRIMARY KEY (id_Grupos_Asignaturas)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Mensajes
--

CREATE TABLE IF NOT EXISTS Mensajes (
  id_mensaje int(11) NOT NULL AUTO_INCREMENT,
  Remitente int(11) NOT NULL,
  Destinatarios text NOT NULL,
  Mensaje text NOT NULL,
  FechaHora date NOT NULL,
  PRIMARY KEY (id_mensaje)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Notas
--

CREATE TABLE IF NOT EXISTS Notas (
  id_nota int(11) NOT NULL AUTO_INCREMENT,
  id_tarea int(11) NOT NULL,
  id_asignatura int(11) NOT NULL,
  id_alumno int(11) NOT NULL,
  Nota float NOT NULL,
  Comentario text NOT NULL,
  PRIMARY KEY (id_nota)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Respuestas
--

CREATE TABLE IF NOT EXISTS Respuestas (
  id_respuesta int(11) NOT NULL AUTO_INCREMENT,
  id_foro int(11) NOT NULL,
  id_usuario int(11) NOT NULL,
  Respuesta text NOT NULL,
  DiaHora timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_respuesta)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Tareas
--

CREATE TABLE IF NOT EXISTS Tareas (
  id_tarea int(11) NOT NULL AUTO_INCREMENT,
  id_asignatura int(11) NOT NULL,
  Nombre varchar(80) NOT NULL,
  Archivo varchar(500) DEFAULT NULL,
  Data_vencimiento date NOT NULL,
  Profesor_asignado int(11) NOT NULL,
  Comentario text,
  PRIMARY KEY (id_tarea)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Usuarios
--

CREATE TABLE IF NOT EXISTS Usuarios (
  id_usuario int(11) NOT NULL AUTO_INCREMENT,
  Nombre varchar(25) NOT NULL,
  Apellidos varchar(80) NOT NULL,
  Email varchar(100) NOT NULL,
  id_rol int(11) NOT NULL,
  FechaNacimiento date NOT NULL,
  Contraseña varchar(20) NOT NULL,
  Primeravez boolean,
  id_escuela int(11) NOT NULL,
  PRIMARY KEY (id_usuario)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Usuarios_Asignaturas
--

CREATE TABLE IF NOT EXISTS Usuarios_Asignaturas (
  id_Usuarios_Asignaturas int(11) NOT NULL AUTO_INCREMENT,
  id_usuario int(11) NOT NULL,
  id_asignatura int(11) NOT NULL,
  PRIMARY KEY (id_Usuarios_Asignaturas)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Usuarios_Grupos
--

CREATE TABLE IF NOT EXISTS Usuarios_Grupos (
  id_Usuarios_Grupos int(11) NOT NULL AUTO_INCREMENT,
  id_usuario int(11) NOT NULL,
  id_grupo int(11) NOT NULL,
  PRIMARY KEY (id_Usuarios_Grupos)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
