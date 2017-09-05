-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2017 at 12:19 PM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nacho`
--

-- --------------------------------------------------------

--
-- Table structure for table `contratos`
--

CREATE TABLE `contratos` (
  `id_contrato` bigint(20) NOT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT '0',
  `fp_cash` varchar(250) NOT NULL,
  `numero` char(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `nif` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `profesion` varchar(250) NOT NULL,
  `domicilio` varchar(250) NOT NULL,
  `localidad` varchar(250) NOT NULL,
  `codigo_postal` varchar(250) NOT NULL,
  `pais` varchar(250) NOT NULL,
  `provincia` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `otro_telefono` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `edo_civil` varchar(250) NOT NULL,
  `sexo` varchar(250) NOT NULL,
  `beneficiarios` varchar(250) NOT NULL,
  `name_bene_1` varchar(250) NOT NULL,
  `name_bene_2` varchar(250) NOT NULL,
  `name_bene_3` varchar(250) NOT NULL,
  `nif_bene_1` varchar(250) NOT NULL,
  `nif_bene_2` varchar(250) NOT NULL,
  `nif_bene_3` varchar(250) NOT NULL,
  `date_bene_1` varchar(250) NOT NULL,
  `date_bene_2` varchar(250) NOT NULL,
  `date_bene_3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contrato` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
