-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2017 a las 21:55:10
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expedientes_clinicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_fam_patologicos`
--

CREATE TABLE `antecedentes_fam_patologicos` (
  `Id_Patologicos` int(15) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `E.Infecto_Contagiosas` varchar(100) NOT NULL,
  `E.Hereditarias` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_gineco_obstetricos`
--

CREATE TABLE `antecedentes_gineco_obstetricos` (
  `Id_Gineco_Obstetrico` int(15) NOT NULL,
  `Menarca` varchar(30) NOT NULL,
  `Vida_Sexual_Activa` varchar(15) NOT NULL,
  `Numero_Parejas` int(10) NOT NULL,
  `Gesta` varchar(30) NOT NULL,
  `Cesarea` varchar(10) NOT NULL,
  `Aborto` varchar(10) NOT NULL,
  `Legrado` varchar(10) NOT NULL,
  `Planificacion_Familiar` varchar(5) NOT NULL,
  `Metodo` varchar(20) NOT NULL,
  `FUR` varchar(15) NOT NULL,
  `Semanas_Amenorrea` varchar(30) NOT NULL,
  `Menapausia` varchar(5) NOT NULL,
  `Fecha_Menapausia` varchar(25) NOT NULL,
  `Sustitucion_Hormonal` varchar(5) NOT NULL,
  `Especifique_Hormonal` varchar(40) NOT NULL,
  `PAP` varchar(5) NOT NULL,
  `Resultado` varchar(60) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_personales_nopatologicos`
--

CREATE TABLE `antecedentes_personales_nopatologicos` (
  `Id_noPatologicas` int(15) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `Hora_De_Sueño` date NOT NULL,
  `Horas_Laborales` varchar(15) NOT NULL,
  `Hora_Actividad_Fisica` varchar(15) NOT NULL,
  `Alimentacion` varchar(50) NOT NULL,
  `Tabaco` varchar(10) NOT NULL,
  `Cantidad_Frecuencia_Tabaco` varchar(70) NOT NULL,
  `Edad_Inicio_Tabaco` int(10) NOT NULL,
  `Edad_Abandono_Tabaco` int(10) NOT NULL,
  `Duracion_Habito_Tabaco` int(15) NOT NULL,
  `Alcohol` varchar(15) NOT NULL,
  `Cantidad_Frecuencia_Alcohol` varchar(70) NOT NULL,
  `Edad_Inicio_Alcohol` int(10) NOT NULL,
  `Edad_Abandono_Alcohol` int(10) NOT NULL,
  `Duracion_Habito_Alcohol` int(15) NOT NULL,
  `Drogas` varchar(15) NOT NULL,
  `Cantidad_Frecuencia_Drogas` varchar(70) NOT NULL,
  `Edad_Inicio_Drogas` int(10) NOT NULL,
  `Edad_Abandono_Drogas` int(10) NOT NULL,
  `Duracion_Habito_Drogas` int(15) NOT NULL,
  `Farmacos` varchar(10) NOT NULL,
  `Numero_Farmacos_Recibiendo` int(10) NOT NULL,
  `Nombre_Posologia_Farmacos` varchar(70) NOT NULL,
  `Otros_Habitos` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_personales_patologicos`
--

CREATE TABLE `antecedentes_personales_patologicos` (
  `Id_Patologicas` int(15) NOT NULL,
  `E.Infecto_Contagiosas` varchar(100) NOT NULL,
  `Enfermedades_Cronicas` int(100) NOT NULL,
  `Cirujias_Previas` varchar(100) NOT NULL,
  `Hospitalizacion` varchar(100) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `Id_Consulta` int(10) NOT NULL,
  `Motivo_Consulta` varchar(100) NOT NULL,
  `Historia_Enfermedad_Actual` varchar(100) NOT NULL,
  `Interrogatorio` varchar(100) NOT NULL,
  `Numero_Consulta` int(10) NOT NULL,
  `Fecha` date NOT NULL,
  `Sala` int(10) NOT NULL,
  `Numero_Cama` int(10) NOT NULL,
  `Fuente_Informacion` varchar(50) NOT NULL,
  `Confiabilidad` varchar(70) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `Hora` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`Id_Consulta`, `Motivo_Consulta`, `Historia_Enfermedad_Actual`, `Interrogatorio`, `Numero_Consulta`, `Fecha`, `Sala`, `Numero_Cama`, `Fuente_Informacion`, `Confiabilidad`, `Numero_Expediente`, `Servicio`, `Hora`, `created_at`, `updated_at`) VALUES
(1, 'Gripe', 'Inexistente', 'No hay', 1, '2017-11-01', 1, 1, 'Mama', 'repo', 1, 'Web', '12:00', '2017-11-25 19:30:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `Numero_Expediente` int(10) NOT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `numerocedula` varchar(15) NOT NULL,
  `numeroinss` int(10) NOT NULL,
  `Edad` int(5) NOT NULL,
  `Lugar_Nacimiento` varchar(30) NOT NULL,
  `Religion` varchar(15) NOT NULL,
  `Etnias` varchar(15) NOT NULL,
  `Escolaridad` varchar(15) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Profesion` varchar(15) NOT NULL,
  `Direccion_Habitual` varchar(40) NOT NULL,
  `Nombre_Padre` varchar(30) NOT NULL,
  `Nombre_Madre` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Id_Usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`Numero_Expediente`, `Nombres`, `Apellidos`, `numerocedula`, `numeroinss`, `Edad`, `Lugar_Nacimiento`, `Religion`, `Etnias`, `Escolaridad`, `Sexo`, `Profesion`, `Direccion_Habitual`, `Nombre_Padre`, `Nombre_Madre`, `created_at`, `updated_at`, `Id_Usuario`) VALUES
(1, 'Landy Orlando', 'Cuadra Medina', '28108049', 12345, 20, 'Leon', 'Ateo', 'Mestizo', 'Universitario', 'Masculino', 'Ingeniero', 'Leon', 'Orlando', 'MamadeLandy', '2017-11-25 19:04:25', '2017-11-25 19:04:25', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores_pacientes`
--

CREATE TABLE `doctores_pacientes` (
  `Id_Doc_Pac` int(15) NOT NULL,
  `Id_Usuario` int(10) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_fisicos`
--

CREATE TABLE `examen_fisicos` (
  `FC` varchar(10) NOT NULL,
  `FR` varchar(10) NOT NULL,
  `TA` varchar(10) NOT NULL,
  `TEMP` varchar(10) NOT NULL,
  `Peso` varchar(10) NOT NULL,
  `Talla` varchar(15) NOT NULL,
  `Area_Superficoie_Corporal` varchar(15) NOT NULL,
  `IMC` int(15) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `Codigo_E_Fisico` int(15) NOT NULL,
  `Aspecto_General` varchar(40) NOT NULL,
  `Piel_Mucosa` varchar(40) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen_fisicos`
--

INSERT INTO `examen_fisicos` (`FC`, `FR`, `TA`, `TEMP`, `Peso`, `Talla`, `Area_Superficoie_Corporal`, `IMC`, `Numero_Expediente`, `Codigo_E_Fisico`, `Aspecto_General`, `Piel_Mucosa`, `Id_Consulta`, `created_at`, `updated_at`) VALUES
('45', '345', '456', '789', '1278', '123', '124', 456, 1, 1, 'Noral', 'lkj', 1, '2017-11-25 20:12:15', '2017-11-25 20:12:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisico_cabeza_cuello`
--

CREATE TABLE `fisico_cabeza_cuello` (
  `Id_Cabez` int(15) NOT NULL,
  `Codigo_E.Fisico` int(15) NOT NULL,
  `Craneo` varchar(30) NOT NULL,
  `Ojos` varchar(30) NOT NULL,
  `Orejas_Oidos` varchar(30) NOT NULL,
  `Nariz` varchar(30) NOT NULL,
  `Boca` varchar(30) NOT NULL,
  `Cuello` varchar(30) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisico_genitourinario`
--

CREATE TABLE `fisico_genitourinario` (
  `Id_Genitourinario` int(15) NOT NULL,
  `Codig_E.Fisico` int(15) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Examen_Ginecologico` varchar(50) NOT NULL,
  `examen_Neurologico` varchar(100) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisico_muscuesqueletico`
--

CREATE TABLE `fisico_muscuesqueletico` (
  `Id_Muscuesqueletico` int(15) NOT NULL,
  `Codigo_E.Fisico` int(15) NOT NULL,
  `Extremidades_Superiores` varchar(30) NOT NULL,
  `Extremidades_inferiores` varchar(30) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisico_torax`
--

CREATE TABLE `fisico_torax` (
  `Id_Torax` int(15) NOT NULL,
  `Codigo_E.Fisico` int(15) NOT NULL,
  `Caja_Toracica` varchar(30) NOT NULL,
  `Mamas` varchar(50) NOT NULL,
  `Campos_Pulmonares` varchar(50) NOT NULL,
  `Cardiaco` varchar(40) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fsico_abdomen_pelvis`
--

CREATE TABLE `fsico_abdomen_pelvis` (
  `Id_Abdomen_pelvis` int(15) NOT NULL,
  `Codigo_E.Fisico` int(15) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Tacto_Rectal` varchar(40) NOT NULL,
  `Id_Consulta` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_antecedentes`
--

CREATE TABLE `historia_antecedentes` (
  `Id_Historia_Antecedentes` int(10) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `Codigo_Historia_Laboral` int(10) NOT NULL,
  `Fecha_Inicio` varchar(10) NOT NULL,
  `Fecha_Conclusion` varchar(10) NOT NULL,
  `Años_Trabajados` int(10) NOT NULL,
  `Puesto_Trabajo` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_laboral`
--

CREATE TABLE `historia_laboral` (
  `Numero_Expediente` int(10) NOT NULL,
  `Trabaja_Actual` varchar(5) NOT NULL,
  `Lugar_trabajo` varchar(20) NOT NULL,
  `Area_Labora` varchar(20) NOT NULL,
  `Oficio` varchar(40) NOT NULL,
  `Años_Oficio` int(10) NOT NULL,
  `Dia_Laboral` int(30) NOT NULL,
  `Horas_Semanales_Trabajadas` int(30) NOT NULL,
  `Horas_Extras` int(20) NOT NULL,
  `Tipo_Horario_Realizado` varchar(30) NOT NULL,
  `Descripcion_Del_Trabajo` varchar(100) NOT NULL,
  `Expocision_Sustancias` varchar(5) NOT NULL,
  `Descripcion_Expocision_Sus` varchar(100) NOT NULL,
  `Intensidad_Trabajo` varchar(50) NOT NULL,
  `Trabajos_No_Habituales` varchar(30) NOT NULL,
  `Codigo_Historia_Laboral` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `Id_Resultados` int(10) NOT NULL,
  `Numero_Expediente` int(10) NOT NULL,
  `Observaciones_Analisis` varchar(200) NOT NULL,
  `Diagnosticos_Problemas` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(10) NOT NULL,
  `Nombre_Usuario` varchar(40) NOT NULL,
  `Contraseña` varchar(15) NOT NULL,
  `Niveles` enum('Administrador','Doctor','Registro') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Nombre_Usuario`, `Contraseña`, `Niveles`) VALUES
(1, 'Dania ', '1234', 'Doctor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_fam_patologicos`
--
ALTER TABLE `antecedentes_fam_patologicos`
  ADD PRIMARY KEY (`Id_Patologicos`),
  ADD KEY `Id_Consulta` (`Id_Consulta`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `antecedentes_gineco_obstetricos`
--
ALTER TABLE `antecedentes_gineco_obstetricos`
  ADD PRIMARY KEY (`Id_Gineco_Obstetrico`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `antecedentes_personales_nopatologicos`
--
ALTER TABLE `antecedentes_personales_nopatologicos`
  ADD PRIMARY KEY (`Id_noPatologicas`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `antecedentes_personales_patologicos`
--
ALTER TABLE `antecedentes_personales_patologicos`
  ADD PRIMARY KEY (`Id_Patologicas`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`Id_Consulta`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`Numero_Expediente`),
  ADD KEY `datos_personales_ibfk_1` (`Id_Usuario`);

--
-- Indices de la tabla `doctores_pacientes`
--
ALTER TABLE `doctores_pacientes`
  ADD PRIMARY KEY (`Id_Doc_Pac`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `examen_fisicos`
--
ALTER TABLE `examen_fisicos`
  ADD PRIMARY KEY (`Codigo_E_Fisico`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`),
  ADD KEY `Id_Consulta` (`Id_Consulta`);

--
-- Indices de la tabla `fisico_cabeza_cuello`
--
ALTER TABLE `fisico_cabeza_cuello`
  ADD PRIMARY KEY (`Id_Cabez`),
  ADD KEY `Codigo_E.Fisico` (`Codigo_E.Fisico`),
  ADD KEY `Id_Consulta` (`Id_Consulta`);

--
-- Indices de la tabla `fisico_genitourinario`
--
ALTER TABLE `fisico_genitourinario`
  ADD PRIMARY KEY (`Id_Genitourinario`),
  ADD KEY `Codig_E.Fisico` (`Codig_E.Fisico`),
  ADD KEY `Id_Consulta` (`Id_Consulta`);

--
-- Indices de la tabla `fisico_muscuesqueletico`
--
ALTER TABLE `fisico_muscuesqueletico`
  ADD PRIMARY KEY (`Id_Muscuesqueletico`),
  ADD KEY `Codigo_E.Fisico` (`Codigo_E.Fisico`),
  ADD KEY `Id_Consulta` (`Id_Consulta`);

--
-- Indices de la tabla `fisico_torax`
--
ALTER TABLE `fisico_torax`
  ADD PRIMARY KEY (`Id_Torax`),
  ADD KEY `Codigo_E.Fisico` (`Codigo_E.Fisico`),
  ADD KEY `Id_Consulta` (`Id_Consulta`);

--
-- Indices de la tabla `fsico_abdomen_pelvis`
--
ALTER TABLE `fsico_abdomen_pelvis`
  ADD PRIMARY KEY (`Id_Abdomen_pelvis`),
  ADD KEY `Codigo_E.Fisico` (`Codigo_E.Fisico`),
  ADD KEY `Id_Consulta` (`Id_Consulta`);

--
-- Indices de la tabla `historia_antecedentes`
--
ALTER TABLE `historia_antecedentes`
  ADD PRIMARY KEY (`Id_Historia_Antecedentes`),
  ADD KEY `Codigo_Historia_Laboral` (`Codigo_Historia_Laboral`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `historia_laboral`
--
ALTER TABLE `historia_laboral`
  ADD PRIMARY KEY (`Codigo_Historia_Laboral`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`Id_Resultados`),
  ADD KEY `Numero_Expediente` (`Numero_Expediente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes_fam_patologicos`
--
ALTER TABLE `antecedentes_fam_patologicos`
  MODIFY `Id_Patologicos` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `antecedentes_gineco_obstetricos`
--
ALTER TABLE `antecedentes_gineco_obstetricos`
  MODIFY `Id_Gineco_Obstetrico` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `antecedentes_personales_nopatologicos`
--
ALTER TABLE `antecedentes_personales_nopatologicos`
  MODIFY `Id_noPatologicas` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `antecedentes_personales_patologicos`
--
ALTER TABLE `antecedentes_personales_patologicos`
  MODIFY `Id_Patologicas` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `Numero_Expediente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `examen_fisicos`
--
ALTER TABLE `examen_fisicos`
  MODIFY `Codigo_E_Fisico` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `fisico_cabeza_cuello`
--
ALTER TABLE `fisico_cabeza_cuello`
  MODIFY `Id_Cabez` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fisico_genitourinario`
--
ALTER TABLE `fisico_genitourinario`
  MODIFY `Id_Genitourinario` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fisico_muscuesqueletico`
--
ALTER TABLE `fisico_muscuesqueletico`
  MODIFY `Id_Muscuesqueletico` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fisico_torax`
--
ALTER TABLE `fisico_torax`
  MODIFY `Id_Torax` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fsico_abdomen_pelvis`
--
ALTER TABLE `fsico_abdomen_pelvis`
  MODIFY `Id_Abdomen_pelvis` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historia_antecedentes`
--
ALTER TABLE `historia_antecedentes`
  MODIFY `Id_Historia_Antecedentes` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historia_laboral`
--
ALTER TABLE `historia_laboral`
  MODIFY `Codigo_Historia_Laboral` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `Id_Resultados` int(10) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes_fam_patologicos`
--
ALTER TABLE `antecedentes_fam_patologicos`
  ADD CONSTRAINT `antecedentes_fam_patologicos_ibfk_2` FOREIGN KEY (`Id_Consulta`) REFERENCES `consulta` (`Id_Consulta`) ON DELETE CASCADE,
  ADD CONSTRAINT `antecedentes_fam_patologicos_ibfk_3` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `antecedentes_gineco_obstetricos`
--
ALTER TABLE `antecedentes_gineco_obstetricos`
  ADD CONSTRAINT `antecedentes_gineco_obstetricos_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `antecedentes_personales_nopatologicos`
--
ALTER TABLE `antecedentes_personales_nopatologicos`
  ADD CONSTRAINT `antecedentes_personales_nopatologicos_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `antecedentes_personales_patologicos`
--
ALTER TABLE `antecedentes_personales_patologicos`
  ADD CONSTRAINT `antecedentes_personales_patologicos_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `doctores_pacientes`
--
ALTER TABLE `doctores_pacientes`
  ADD CONSTRAINT `doctores_pacientes_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `doctores_pacientes_ibfk_2` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `examen_fisicos`
--
ALTER TABLE `examen_fisicos`
  ADD CONSTRAINT `examen_fisicos_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fisico_cabeza_cuello`
--
ALTER TABLE `fisico_cabeza_cuello`
  ADD CONSTRAINT `fisico_cabeza_cuello_ibfk_1` FOREIGN KEY (`Codigo_E.Fisico`) REFERENCES `examen_fisicos` (`Codigo_E_Fisico`) ON DELETE CASCADE,
  ADD CONSTRAINT `fisico_cabeza_cuello_ibfk_2` FOREIGN KEY (`Id_Consulta`) REFERENCES `consulta` (`Id_Consulta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fisico_genitourinario`
--
ALTER TABLE `fisico_genitourinario`
  ADD CONSTRAINT `fisico_genitourinario_ibfk_1` FOREIGN KEY (`Codig_E.Fisico`) REFERENCES `examen_fisicos` (`Codigo_E_Fisico`) ON DELETE CASCADE,
  ADD CONSTRAINT `fisico_genitourinario_ibfk_2` FOREIGN KEY (`Id_Consulta`) REFERENCES `consulta` (`Id_Consulta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fisico_muscuesqueletico`
--
ALTER TABLE `fisico_muscuesqueletico`
  ADD CONSTRAINT `fisico_muscuesqueletico_ibfk_1` FOREIGN KEY (`Codigo_E.Fisico`) REFERENCES `examen_fisicos` (`Codigo_E_Fisico`) ON DELETE CASCADE,
  ADD CONSTRAINT `fisico_muscuesqueletico_ibfk_2` FOREIGN KEY (`Id_Consulta`) REFERENCES `consulta` (`Id_Consulta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fisico_torax`
--
ALTER TABLE `fisico_torax`
  ADD CONSTRAINT `fisico_torax_ibfk_1` FOREIGN KEY (`Codigo_E.Fisico`) REFERENCES `examen_fisicos` (`Codigo_E_Fisico`) ON DELETE CASCADE,
  ADD CONSTRAINT `fisico_torax_ibfk_2` FOREIGN KEY (`Id_Consulta`) REFERENCES `consulta` (`Id_Consulta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fsico_abdomen_pelvis`
--
ALTER TABLE `fsico_abdomen_pelvis`
  ADD CONSTRAINT `fsico_abdomen_pelvis_ibfk_1` FOREIGN KEY (`Codigo_E.Fisico`) REFERENCES `examen_fisicos` (`Codigo_E_Fisico`) ON DELETE CASCADE,
  ADD CONSTRAINT `fsico_abdomen_pelvis_ibfk_2` FOREIGN KEY (`Id_Consulta`) REFERENCES `consulta` (`Id_Consulta`) ON DELETE CASCADE;

--
-- Filtros para la tabla `historia_antecedentes`
--
ALTER TABLE `historia_antecedentes`
  ADD CONSTRAINT `historia_antecedentes_ibfk_1` FOREIGN KEY (`Codigo_Historia_Laboral`) REFERENCES `historia_laboral` (`Codigo_Historia_Laboral`) ON DELETE CASCADE,
  ADD CONSTRAINT `historia_antecedentes_ibfk_2` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `historia_laboral`
--
ALTER TABLE `historia_laboral`
  ADD CONSTRAINT `historia_laboral_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`Numero_Expediente`) REFERENCES `datos_personales` (`Numero_Expediente`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
