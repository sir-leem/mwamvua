-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 10:05 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dedicate_rahn`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocated_device`
--

CREATE TABLE `allocated_device` (
  `id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `allocated_date` datetime NOT NULL,
  `allocated_to` int(11) NOT NULL,
  `allocated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Administrator', '11', 1586726667),
('Administrator', '12', 1586726899),
('Administrator', '17', 1586736967),
('Administrator', '18', 1586737135),
('Administrator', '9', 1584441876),
('Bill_Customer', '6', 1584393318),
('BorderPerson', '15', 1586734005),
('BorderPerson', '4', 1586731929),
('CreditCustomer', '16', 1586734383),
('CreditCustomer', '7', 1586593932),
('CreditCustomer', '8', 1586594526),
('Operator', '13', 1586733574),
('Operator', '3', 1584856676),
('Operator', '5', 1584388479),
('SalesPerson', '14', 1586733813),
('SalesPerson', '2', 1586731999),
('SuperAdministrator', '1', 1584264876),
('SuperAdministrator', '10', 1584443106);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `module` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `module`, `created_at`, `updated_at`) VALUES
('addUserAllocated', 2, 'can assign all users', NULL, NULL, 13, NULL, NULL),
('Administrator', 1, 'Administrator', NULL, NULL, NULL, 1584270120, 1586685752),
('BorderPerson', 1, 'Border Person', NULL, NULL, NULL, 1586731301, 1586731301),
('changeUserRoles', 2, 'can update user roles', NULL, NULL, 14, NULL, NULL),
('companyProfile', 2, 'can create or update company settings', NULL, NULL, 13, NULL, NULL),
('createBorder', 2, 'can add border new border or update border', NULL, NULL, 13, NULL, NULL),
('createLocation', 2, 'can add new location or update location', NULL, NULL, 13, NULL, NULL),
('createSalesPoint', 2, 'can add sales point or update sales point', NULL, NULL, 13, NULL, NULL),
('createUser', 2, 'can create user or update', NULL, NULL, 14, NULL, NULL),
('CreditCustomer', 1, 'Credit Customer', NULL, NULL, NULL, 1584263372, 1584263372),
('deleteBorder', 2, 'can delete border', NULL, NULL, 13, NULL, NULL),
('deleteCompanySetting', 2, 'can delete company setting', NULL, NULL, 13, NULL, NULL),
('deleteLocation', 2, 'can delete Location', NULL, NULL, 13, NULL, NULL),
('deleteSalesPoint', 2, 'can delete Sales Point', NULL, NULL, 13, NULL, NULL),
('deleteSalesTrip', 2, 'can delete Sales Trip record', NULL, NULL, 17, NULL, NULL),
('deleteUser', 2, 'can delete User', NULL, NULL, 14, NULL, NULL),
('deleteUserAllocated', 2, 'can delete user allocated', NULL, NULL, 13, NULL, NULL),
('Operator', 1, 'Operator', NULL, NULL, NULL, 1584263218, 1584263310),
('SalesPerson', 1, 'Sales', NULL, NULL, NULL, 1584263254, 1584263285),
('SuperAdministrator', 1, 'Super Administrator', NULL, NULL, NULL, 1581718456, 1586685738),
('Supervisor', 1, 'Supervisor', NULL, NULL, NULL, 1584263341, 1584263341),
('Technical', 1, 'Technical Person', NULL, NULL, NULL, 1586731489, 1586731489),
('viewCompanyProfile', 2, 'can view company details', NULL, NULL, 13, NULL, NULL),
('viewConfigurationModule', 2, 'can view configuration module', NULL, NULL, 13, NULL, NULL),
('viewDevicesRotationModule', 2, 'can view all device rotation module', NULL, NULL, 16, NULL, NULL),
('viewReportModule', 2, 'can view report module', NULL, NULL, 17, NULL, NULL),
('viewSettingModule', 2, 'can view all settings module', NULL, NULL, 14, NULL, NULL),
('viewUserManagementModule', 2, 'can view all user management module', NULL, NULL, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Administrator', 'addUserAllocated'),
('Administrator', 'changeUserRoles'),
('Administrator', 'companyProfile'),
('Administrator', 'createBorder'),
('Administrator', 'createLocation'),
('Administrator', 'createSalesPoint'),
('Administrator', 'createUser'),
('Administrator', 'deleteSalesTrip'),
('Administrator', 'viewCompanyProfile'),
('Administrator', 'viewConfigurationModule'),
('Administrator', 'viewDevicesRotationModule'),
('Administrator', 'viewReportModule'),
('Administrator', 'viewSettingModule'),
('Administrator', 'viewUserManagementModule'),
('SuperAdministrator', 'addUserAllocated'),
('SuperAdministrator', 'changeUserRoles'),
('SuperAdministrator', 'companyProfile'),
('SuperAdministrator', 'companySetting'),
('SuperAdministrator', 'createBorder'),
('SuperAdministrator', 'createEmployees'),
('SuperAdministrator', 'createLocation'),
('SuperAdministrator', 'createSalesPoint'),
('SuperAdministrator', 'createUser'),
('SuperAdministrator', 'deleteBorder'),
('SuperAdministrator', 'deleteCompanySetting'),
('SuperAdministrator', 'deleteLocation'),
('SuperAdministrator', 'deleteSalesPoint'),
('SuperAdministrator', 'deleteSalesTrip'),
('SuperAdministrator', 'deleteUser'),
('SuperAdministrator', 'deleteUserAllocated'),
('SuperAdministrator', 'viewCompanyProfile'),
('SuperAdministrator', 'viewConfigurationModule'),
('SuperAdministrator', 'viewDevicesRotationModule'),
('SuperAdministrator', 'viewReportModule'),
('SuperAdministrator', 'viewSettingModule'),
('SuperAdministrator', 'viewUserManagementModule');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awaiting_receive`
--

CREATE TABLE `awaiting_receive` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `received_from` int(11) NOT NULL,
  `border_port` int(11) DEFAULT NULL,
  `received_from_staff` int(11) DEFAULT NULL,
  `received_at` datetime NOT NULL,
  `received_status` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `received_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awaiting_receive`
--

INSERT INTO `awaiting_receive` (`id`, `serial_no`, `received_from`, `border_port`, `received_from_staff`, `received_at`, `received_status`, `remark`, `received_by`) VALUES
(4, 312343123, 2, 1, 3, '2020-02-05 00:00:00', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `awaiting_receive_report`
--

CREATE TABLE `awaiting_receive_report` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `received_from` int(11) NOT NULL,
  `border_port` int(11) DEFAULT NULL,
  `received_from_staff` int(11) DEFAULT NULL,
  `received_at` datetime NOT NULL,
  `received_status` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `received_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awaiting_receive_report`
--

INSERT INTO `awaiting_receive_report` (`id`, `serial_no`, `received_from`, `border_port`, `received_from_staff`, `received_at`, `received_status`, `remark`, `received_by`) VALUES
(1, 3423434234, 1, 2, 1, '2020-03-10 00:00:00', 1, NULL, 0),
(2, 3423342390, 1, 2, 1, '2020-03-10 00:00:00', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `border_port`
--

CREATE TABLE `border_port` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `border_port`
--

INSERT INTO `border_port` (`id`, `name`, `location`) VALUES
(1, 'TUNDUMA', 1),
(2, 'KASUMULU', 1),
(3, 'KABANGA', 1),
(4, 'MTUKULA', 1),
(5, 'RUSUMO', 1),
(6, 'AFRICAN ICD', 2),
(7, 'ALHUSHOOM', 2),
(8, 'AMI', 2),
(9, 'BAKHRESA', 2),
(10, 'DICD', 2),
(11, 'EASTCOST', 2),
(12, 'GATE 2', 2),
(13, 'GATE 3', 2),
(14, 'GATE 5', 2),
(15, 'JEFA', 2),
(16, 'KICD', 2),
(17, 'MCCL', 2),
(18, 'MOFED', 2),
(19, 'PMM', 2),
(20, 'TICTS', 2),
(21, 'TRH', 2),
(26, 'KIGOMA', 1),
(27, 'FROM MANUFACTURE', 3),
(28, 'FROM MAINTAINANCE', 4);

-- --------------------------------------------------------

--
-- Table structure for table `border_port_user`
--

CREATE TABLE `border_port_user` (
  `id` int(11) NOT NULL,
  `border_port` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `assigned_date` datetime NOT NULL,
  `assigned_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `border_port_user`
--

INSERT INTO `border_port_user` (`id`, `border_port`, `name`, `assigned_date`, `assigned_by`) VALUES
(1, 2, '4', '2020-03-17 09:12:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `login_name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `login_name`, `mobile`, `status`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'WEB TECH', 'WEB', '076800000', 1, '2020-03-16 22:23:00', NULL, 1),
(2, 'MAXIMA TECH LTD', 'MAXIMA', '076800100', 1, '2020-03-16 22:35:00', NULL, 1),
(3, 'RAHN TECH', 'RAHN', '098754345678', 1, '2020-04-13 01:33:00', NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tin` varchar(200) NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `logo` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `name`, `mobile`, `email`, `tin`, `website`, `address`, `logo`) VALUES
(1, 'RAHNTECH COMPANY TANZANIA LIMITED', '+255 722 222 444', 'info@rahntech.co.tz', '123456', 'www.rahntech.co.tz', 'DAR ES SALAAM', '');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `serial` bigint(20) UNSIGNED NOT NULL,
  `received_from` int(11) NOT NULL,
  `border_port` int(11) DEFAULT NULL,
  `received_from_staff` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` smallint(6) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `serial`, `received_from`, `border_port`, `received_from_staff`, `remark`, `created_by`, `created_at`, `status`) VALUES
(1, 7560923795, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(2, 7571018279, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(3, 7560924320, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(4, 7560924335, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(5, 7571018465, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(6, 7560923846, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(7, 7560924079, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(8, 7560924154, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(9, 7560923761, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(10, 7560923973, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(11, 7560923804, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(12, 7571018352, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(13, 7560923817, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(14, 7560923858, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(15, 7571018295, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(16, 7560924169, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(17, 7560923946, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(18, 7571018406, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(19, 7571018368, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL),
(20, 7581211298, 3, 27, NULL, NULL, 7, '2020-03-11 11:04:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longblob DEFAULT NULL,
  `mobile` varchar(200) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `image`, `mobile`, `address`, `status`, `created_at`, `created_by`) VALUES
(1, 'nucho', NULL, '0769622546', '70307', 1, '2020-03-15 22:13:00', 1),
(2, 'mimi wewe', NULL, '0769622546', '70307', 1, '2020-03-15 22:15:00', 1),
(3, 'nick thomas', NULL, '0677040914', '70307', 1, '2020-03-16 20:43:00', 1),
(5, 'Administrator ', 0x2e6a70672e6a70672e6a7067, '0677040914', '70307', 1, '2020-03-17 11:44:00', 1),
(8, 'admin juan', 0x2e6a7067, '0987654323', '', 1, '2020-04-12 23:24:00', 9),
(9, 'mbauro', NULL, '0987654323', '70307', 1, '2020-04-12 23:28:00', 9),
(10, 'office', NULL, '0987654323', '70307', 1, '2020-04-13 01:19:00', 9),
(11, 'port', NULL, 'port', '70307', 1, '2020-04-13 01:23:00', 9),
(13, 'border2', NULL, '0987654323', '70307', 1, '2020-04-13 01:26:00', 9),
(14, 'admin1', 0x2e6a7067, '0876543221', '70307', 1, '2020-04-13 02:16:00', 9),
(15, 'admin2', 0x6b6f6e646f2e6a70672e6a7067, '0876543221', '70307', 1, '2020-04-13 02:18:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `fault_devices`
--

CREATE TABLE `fault_devices` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `remarks` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `view_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fault_devices`
--

INSERT INTO `fault_devices` (`id`, `serial_no`, `created_by`, `created_at`, `remarks`, `status`, `view_status`) VALUES
(1, 7560923795, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(2, 7571018279, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(3, 7560924320, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(4, 7560924335, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(5, 7571018465, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(6, 7560923846, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(7, 7560924079, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(8, 7560924154, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(9, 7560923761, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(10, 7560923973, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(11, 7560923804, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(12, 7571018352, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(13, 7560923817, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(14, 7560923858, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(15, 7571018295, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(16, 7560924169, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(17, 7560923946, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(18, 7571018406, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(19, 7571018368, 7, '2020-03-11 11:04:41', NULL, 1, NULL),
(20, 7581211298, 7, '2020-03-11 11:04:41', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fault_devices_report`
--

CREATE TABLE `fault_devices_report` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `remarks` text DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `in_transit`
--

CREATE TABLE `in_transit` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `tzl` varchar(200) DEFAULT NULL,
  `border` int(11) DEFAULT NULL,
  `sales_person` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `vehicle_no` varchar(200) DEFAULT NULL,
  `container_number` varchar(200) DEFAULT NULL,
  `view_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_transit`
--

INSERT INTO `in_transit` (`id`, `serial_no`, `tzl`, `border`, `sales_person`, `created_at`, `created_by`, `vehicle_no`, `container_number`, `view_status`) VALUES
(1, 7560923795, '58705935214', 3, 43, '2020-03-11 11:08:12', 43, 'DASH', 'Asada', 5),
(2, 7571018279, '25412536854', 3, 43, '2020-03-12 05:05:43', 43, 'DASH', 'T46643', 5),
(3, 7560924320, '57412587425', 3, 43, '2020-03-12 05:08:43', 43, 'DASH', 'T46643', 5),
(4, 7560924335, '07584253695', 3, 43, '2020-03-12 05:11:22', 43, 'DASH', 'T46643', 5),
(5, 7571018465, '80745263985', 3, 43, '2020-03-12 05:12:46', 43, 'DASH', 'T46643', 5),
(6, 7560923846, '54785036982', 3, 43, '2020-03-12 05:57:36', 43, 'DASH', 'T46643', 5),
(7, 7560924079, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(8, 7560924154, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(9, 7560923761, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(10, 7560923973, '12543698446', 3, 43, '2020-03-13 09:52:50', 43, 'DASH', 'T46643', 5),
(11, 7560923804, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(12, 7571018352, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(13, 7560923817, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(14, 7560923858, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(15, 7571018295, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(16, 7560924169, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(17, 7560923946, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(18, 7571018406, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(19, 7571018368, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL),
(20, 7581211298, NULL, NULL, NULL, '2020-03-11 11:04:41', 7, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `in_transit_report`
--

CREATE TABLE `in_transit_report` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `tzl` varchar(200) NOT NULL,
  `border` int(11) NOT NULL,
  `sales_person` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `vehicle_no` varchar(200) DEFAULT NULL,
  `container_number` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_transit_report`
--

INSERT INTO `in_transit_report` (`id`, `serial_no`, `tzl`, `border`, `sales_person`, `created_at`, `created_by`, `vehicle_no`, `container_number`) VALUES
(1, 7560923795, '58705935214', 3, 43, '2020-03-11 11:08:12', 43, 'DASH', 'Asada'),
(2, 7571018279, '25412536854', 3, 43, '2020-03-12 05:05:43', 43, 'DASH', 'T46643'),
(3, 7560924320, '57412587425', 3, 43, '2020-03-12 05:08:43', 43, 'DASH', 'T46643'),
(4, 7560924335, '07584253695', 3, 43, '2020-03-12 05:11:22', 43, 'DASH', 'T46643'),
(5, 7571018465, '80745263985', 3, 43, '2020-03-12 05:12:46', 43, 'DASH', 'T46643'),
(6, 7560923846, '54785036982', 3, 43, '2020-03-12 05:57:36', 43, 'DASH', 'T46643'),
(7, 7560923973, '12543698446', 3, 43, '2020-03-13 09:52:50', 43, 'DASH', 'T46643');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`) VALUES
(1, 'BORDER'),
(2, 'PORT'),
(3, 'NEW STOCK'),
(4, 'ICT DEPT');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1581714253),
('m130524_201442_init', 1581714258),
('m140506_102106_rbac_init', 1581715227),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1581715228),
('m180523_151638_rbac_updates_indexes_without_prefix', 1581715230),
('m190124_110200_add_verification_token_column_to_user_table', 1581714259);

-- --------------------------------------------------------

--
-- Table structure for table `received_devices`
--

CREATE TABLE `received_devices` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `received_from` int(11) NOT NULL,
  `border_port` int(11) DEFAULT NULL,
  `received_from_staff` int(11) DEFAULT NULL,
  `received_at` datetime NOT NULL,
  `received_status` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `received_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `received_devices`
--

INSERT INTO `received_devices` (`id`, `serial_no`, `received_from`, `border_port`, `received_from_staff`, `received_at`, `received_status`, `remark`, `received_by`) VALUES
(1, 7571018681, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(2, 7560923604, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(3, 7560923877, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(4, 7560504513, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(5, 7560923869, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(6, 7560924409, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(7, 7560923795, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(8, 7560923759, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(9, 7581211524, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(10, 7581211519, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(13, 7581211507, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(14, 7581211505, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(15, 7581211504, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(16, 7581211501, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(17, 7581211496, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `received_devices_report`
--

CREATE TABLE `received_devices_report` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `received_from` int(11) NOT NULL,
  `border_port` int(11) DEFAULT NULL,
  `received_from_staff` int(11) DEFAULT NULL,
  `received_at` datetime NOT NULL,
  `received_status` int(11) DEFAULT NULL,
  `remark` text DEFAULT NULL,
  `received_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `received_devices_report`
--

INSERT INTO `received_devices_report` (`id`, `serial_no`, `received_from`, `border_port`, `received_from_staff`, `received_at`, `received_status`, `remark`, `received_by`) VALUES
(1, 7571018681, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(2, 7560923604, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(3, 7560923877, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(4, 7560504513, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(5, 7560923869, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(6, 7560924409, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(7, 7560923795, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(8, 7560923759, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(9, 7581211524, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(10, 7581211519, 3, 27, NULL, '2020-02-14 13:43:42', NULL, '', 1),
(11, 7581211507, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(12, 7581211505, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(13, 7581211504, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(14, 7581211501, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1),
(15, 7581211496, 3, 27, NULL, '2020-02-14 13:57:34', NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `released_devices`
--

CREATE TABLE `released_devices` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `released_date` datetime NOT NULL,
  `released_by` int(11) DEFAULT NULL,
  `released_to` int(11) DEFAULT NULL,
  `sales_point` int(11) DEFAULT NULL,
  `transferred_from` int(11) DEFAULT NULL,
  `transferred_to` int(11) DEFAULT NULL,
  `transferred_date` datetime DEFAULT NULL,
  `transferred_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `view_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `released_devices`
--

INSERT INTO `released_devices` (`id`, `serial_no`, `released_date`, `released_by`, `released_to`, `sales_point`, `transferred_from`, `transferred_to`, `transferred_date`, `transferred_by`, `status`, `view_status`) VALUES
(1, 7560923795, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(2, 7571018279, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(3, 7560924320, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(4, 7560924335, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(5, 7571018465, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(6, 7560923846, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(7, 7560924079, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(8, 7560924154, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(9, 7560923761, '2020-03-09 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 1),
(10, 7560923973, '2020-03-10 00:00:00', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 5),
(11, 7560923804, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(12, 7571018352, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(13, 7560923817, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(14, 7560923858, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(15, 7571018295, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(16, 7560924169, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(17, 7560923946, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(18, 7571018406, '2020-03-09 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1, 1),
(19, 7571018368, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
(20, 7581211298, '0000-00-00 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `released_devices_report`
--

CREATE TABLE `released_devices_report` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `released_date` datetime NOT NULL,
  `released_by` int(11) DEFAULT NULL,
  `released_to` int(11) DEFAULT NULL,
  `sales_point` int(11) DEFAULT NULL,
  `transferred_from` int(11) DEFAULT NULL,
  `transferred_to` int(11) DEFAULT NULL,
  `transferred_date` datetime DEFAULT NULL,
  `transferred_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `released_devices_report`
--

INSERT INTO `released_devices_report` (`id`, `serial_no`, `released_date`, `released_by`, `released_to`, `sales_point`, `transferred_from`, `transferred_to`, `transferred_date`, `transferred_by`, `status`) VALUES
(1, 7560923795, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(2, 7571018279, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(3, 7560924320, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(4, 7560924335, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(5, 7571018465, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(6, 7560923846, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(7, 7560924079, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(8, 7560924154, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(9, 7560923761, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(10, 7560923973, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(11, 7560923804, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(12, 7571018352, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(13, 7560923817, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(14, 7560923858, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(15, 7571018295, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(16, 7560924169, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(17, 7560923946, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(18, 7571018406, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(19, 7571018368, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1),
(20, 7581211298, '2020-03-11 11:05:51', 7, 43, 14, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rfidcard`
--

CREATE TABLE `rfidcard` (
  `id` int(11) NOT NULL,
  `card_no` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `assigned_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_trips`
--

CREATE TABLE `sales_trips` (
  `id` int(11) NOT NULL,
  `sale_date` datetime NOT NULL,
  `tzl` varchar(200) NOT NULL,
  `start_date_time` datetime DEFAULT NULL,
  `vehicle_number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `chasis_number` varchar(200) DEFAULT NULL,
  `driver_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `border_id` int(4) NOT NULL,
  `trip_status` int(11) DEFAULT NULL,
  `driver_number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `amount` decimal(16,2) NOT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `gate_number` int(11) NOT NULL,
  `end_date` date DEFAULT NULL,
  `sales_person` int(11) NOT NULL,
  `receipt_number` varchar(255) CHARACTER SET latin1 NOT NULL,
  `passport` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `container_number` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `vehicle_type_id` varchar(100) DEFAULT NULL,
  `customer_type_id` varchar(200) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `customer_name` varchar(200) DEFAULT NULL,
  `agent` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `cancelled_by` int(11) DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `edited_at` date DEFAULT NULL,
  `date_cancelled` datetime DEFAULT NULL,
  `sale_type` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales_trips`
--

INSERT INTO `sales_trips` (`id`, `sale_date`, `tzl`, `start_date_time`, `vehicle_number`, `chasis_number`, `driver_name`, `border_id`, `trip_status`, `driver_number`, `serial_no`, `amount`, `currency`, `gate_number`, `end_date`, `sales_person`, `receipt_number`, `passport`, `container_number`, `vehicle_type_id`, `customer_type_id`, `customer_id`, `company_name`, `customer_name`, `agent`, `cancelled_by`, `edited_by`, `edited_at`, `date_cancelled`, `sale_type`, `sale_id`) VALUES
(1, '2020-03-06 14:11:00', '58705935214', '2020-03-06 14:11:00', 'DASH', '', 'Josh', 3, 1, '07667270', 7560923795, '6000.00', 'TZS', 13, '2020-03-12', 1, '431111032020CASH000001', '54236567', 'Asada', '2', '1', NULL, 'Demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL),
(2, '2020-03-12 13:04:00', '25412536854', '2020-03-12 13:04:00', 'DASH', '', 'Daka', 3, 1, '0766524369', 7571018279, '60000.00', 'TZS', 9, '2020-03-18', 43, '430512032020CASH000002', '1234fdaf', 'T46643', '2', '1', NULL, 'demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL),
(3, '2020-03-12 13:04:00', '57412587425', '2020-03-12 13:04:00', 'DASH', '', 'Daka', 3, 1, '0766524369', 7560924320, '60000.00', 'TZS', 9, '2020-03-18', 43, '430512032020CASH000003', '1234fdaf', 'T46643', '2', '1', NULL, 'demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL),
(4, '2020-03-12 13:04:00', '07584253695', '2020-03-12 13:04:00', 'DASH', '', 'Daka', 3, 1, '0766524369', 7560924335, '60000.00', 'TZS', 9, '2020-03-18', 43, '430512032020CASH000004', '1234fdaf', 'T46643', '2', '1', NULL, 'demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL),
(5, '2020-03-12 13:04:00', '80745263985', '2020-03-12 13:04:00', 'DASH', '', 'Daka', 3, 1, '0766524369', 7571018465, '60000.00', 'TZS', 9, '2020-03-18', 43, '430512032020CASH000005', '1234fdaf', 'T46643', '2', '1', NULL, 'demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL),
(6, '2020-03-12 13:04:00', '54785036982', '2020-03-12 13:04:00', 'DASH', '', 'Daka', 3, 1, '0766524369', 7560923846, '60000.00', 'TZS', 9, '2020-03-18', 43, '430512032020CASH000006', '1234fdaf', 'T46643', '2', '1', NULL, 'demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL),
(7, '2020-03-12 13:04:00', '12543698446', '2020-03-12 13:04:00', 'DASH', '', 'Daka', 3, 1, '0766524369', 7560923973, '60000.00', 'TZS', 9, '2020-03-18', 43, '430913032020CASH000007', '1234fdaf', 'T46643', '2', '1', NULL, 'demo', NULL, '', NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_devices`
--

CREATE TABLE `stock_devices` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `location_from` int(11) DEFAULT NULL,
  `view_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_devices`
--

INSERT INTO `stock_devices` (`id`, `serial_no`, `created_by`, `created_at`, `status`, `location_from`, `view_status`) VALUES
(1, 7560923795, 7, '2020-03-11 11:05:31', 1, 27, 4),
(2, 7571018279, 7, '2020-03-11 11:05:32', 1, 27, 4),
(3, 7560924320, 7, '2020-03-11 11:05:32', 1, 27, 4),
(4, 7560924335, 7, '2020-03-11 11:05:32', 1, 27, 4),
(5, 7571018465, 7, '2020-03-11 11:05:32', 1, 27, 4),
(6, 7560923846, 7, '2020-03-11 11:05:32', 1, 27, 4),
(7, 7560924079, 7, '2020-03-11 11:05:32', 1, 27, 4),
(8, 7560924154, 7, '2020-03-11 11:05:32', 1, 27, 4),
(9, 7560923761, 7, '2020-03-11 11:05:32', 1, 27, 4),
(10, 7560923973, 7, '2020-03-11 11:05:32', 1, 27, 4),
(11, 7560923804, 7, '2020-03-11 11:05:32', 1, 27, 4),
(12, 7571018352, 7, '2020-03-11 11:05:32', 1, 27, 4),
(13, 7560923817, 7, '2020-03-11 11:05:32', 1, 27, 4),
(14, 7560923858, 7, '2020-03-11 11:05:32', 1, 27, 4),
(15, 7571018295, 7, '2020-03-11 11:05:32', 1, 27, 4),
(16, 7560924169, 7, '2020-03-11 11:05:32', 1, 27, 4),
(17, 7560923946, 7, '2020-03-11 11:05:32', 1, 27, 4),
(18, 7571018406, 7, '2020-03-11 11:05:32', 1, 27, 4),
(19, 7571018368, 7, '2020-03-11 11:05:32', 1, 27, 4),
(20, 7581211298, 7, '2020-03-11 11:05:32', 1, 27, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stock_devices_report`
--

CREATE TABLE `stock_devices_report` (
  `id` int(11) NOT NULL,
  `serial_no` bigint(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `location_from` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_devices_report`
--

INSERT INTO `stock_devices_report` (`id`, `serial_no`, `created_by`, `created_at`, `status`, `location_from`) VALUES
(1, 7560923795, 7, '2020-03-11 11:05:31', 1, 27),
(2, 7571018279, 7, '2020-03-11 11:05:32', 1, 27),
(3, 7560924320, 7, '2020-03-11 11:05:32', 1, 27),
(4, 7560924335, 7, '2020-03-11 11:05:32', 1, 27),
(5, 7571018465, 7, '2020-03-11 11:05:32', 1, 27),
(6, 7560923846, 7, '2020-03-11 11:05:32', 1, 27),
(7, 7560924079, 7, '2020-03-11 11:05:32', 1, 27),
(8, 7560924154, 7, '2020-03-11 11:05:32', 1, 27),
(9, 7560923761, 7, '2020-03-11 11:05:32', 1, 27),
(10, 7560923973, 7, '2020-03-11 11:05:32', 1, 27),
(11, 7560923804, 7, '2020-03-11 11:05:32', 1, 27),
(12, 7571018352, 7, '2020-03-11 11:05:32', 1, 27),
(13, 7560923817, 7, '2020-03-11 11:05:32', 1, 27),
(14, 7560923858, 7, '2020-03-11 11:05:32', 1, 27),
(15, 7571018295, 7, '2020-03-11 11:05:32', 1, 27),
(16, 7560924169, 7, '2020-03-11 11:05:32', 1, 27),
(17, 7560923946, 7, '2020-03-11 11:05:32', 1, 27),
(18, 7571018406, 7, '2020-03-11 11:05:32', 1, 27),
(19, 7571018368, 7, '2020-03-11 11:05:32', 1, 27),
(20, 7581211298, 7, '2020-03-11 11:05:32', 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit`
--

CREATE TABLE `tbl_audit` (
  `id` int(11) NOT NULL,
  `activity` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `new` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `maker` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maker_time` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transport_fees_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_audit`
--

INSERT INTO `tbl_audit` (`id`, `activity`, `module`, `action`, `old`, `new`, `maker`, `maker_time`, `transport_fees_id`) VALUES
(8199, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:36:28', NULL),
(8200, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:36:46', NULL),
(8201, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:36:49', NULL),
(8202, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:37:04', NULL),
(8203, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:38:07', NULL),
(8204, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:40:04', NULL),
(8205, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:09:40:16', NULL),
(8206, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:09:40:19', NULL),
(8207, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:41:52', NULL),
(8208, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:09:42:22', NULL),
(8209, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:09:42:24', NULL),
(8210, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:09:42:26', NULL),
(8211, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:09:42:30', NULL),
(8212, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:09:42:32', NULL),
(8213, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:42:37', NULL),
(8214, 'Location hii AFRICAN ICD imekuwa updated', 'BorderPort', 'Update', '', '', 'admin', '2020-03-17:09:43:11', NULL),
(8215, 'admin ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:09:43:12', NULL),
(8216, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:43:15', NULL),
(8217, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:43:30', NULL),
(8218, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:44:15', NULL),
(8219, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:44:39', NULL),
(8220, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:44:39', NULL),
(8221, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:44:46', NULL),
(8222, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:46:55', NULL),
(8223, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:56:18', NULL),
(8224, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:56:20', NULL),
(8225, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:56:22', NULL),
(8226, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:09:56:25', NULL),
(8227, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:09:56:27', NULL),
(8228, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:04:29', NULL),
(8229, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:04:31', NULL),
(8230, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:04:34', NULL),
(8231, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:04:37', NULL),
(8232, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:04:39', NULL),
(8233, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:05:22', NULL),
(8234, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:05:27', NULL),
(8235, 'Location hii TUNDUMA imekuwa updated', 'BorderPort', 'Update', '', '', 'admin', '2020-03-17:10:05:31', NULL),
(8236, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:05:32', NULL),
(8237, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:06:32', NULL),
(8238, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:06:41', NULL),
(8239, 'admin ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:06:44', NULL),
(8240, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:06:46', NULL),
(8241, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:11:47', NULL),
(8242, 'admin ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:11:52', NULL),
(8243, 'admin ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:11:53', NULL),
(8244, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:11:57', NULL),
(8245, 'Location hii AFRICAN ICD imekuwa updated', 'BorderPort', 'Update', '', '', 'admin', '2020-03-17:10:12:01', NULL),
(8246, 'admin ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:12:01', NULL),
(8247, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:03', NULL),
(8248, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:08', NULL),
(8249, 'admin ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:12:11', NULL),
(8250, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:13', NULL),
(8251, 'Location hii ALHUSHOOM imekuwa updated', 'BorderPort', 'Update', '', '', 'admin', '2020-03-17:10:12:17', NULL),
(8252, 'admin ameangalia taarifa ya hii (ALHUSHOOM) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:12:17', NULL),
(8253, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:19', NULL),
(8254, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:23', NULL),
(8255, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:25', NULL),
(8256, 'admin ameangalia taarifa ya hii (KASUMULU) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:12:27', NULL),
(8257, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:12:35', NULL),
(8258, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:15:41', NULL),
(8259, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:15:43', NULL),
(8260, 'Taarifa hii mbb mpya imeongezwa ', 'BorderPort', 'Create', '', '', 'admin', '2020-03-17:10:15:55', NULL),
(8261, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:15:55', NULL),
(8262, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:16:23', NULL),
(8263, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:16:46', NULL),
(8264, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:16:53', NULL),
(8265, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:17:35', NULL),
(8266, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:17:43', NULL),
(8267, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:17:50', NULL),
(8268, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:18:43', NULL),
(8269, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:18:46', NULL),
(8270, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:18:56', NULL),
(8271, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:18:58', NULL),
(8272, 'admin ameangalia taarifa ya hii (mbb) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:19:00', NULL),
(8273, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:15', NULL),
(8274, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:18', NULL),
(8275, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:20', NULL),
(8276, 'Taarifa hii ww mpya imeongezwa ', 'BorderPort', 'Create', '', '', 'admin', '2020-03-17:10:19:27', NULL),
(8277, 'admin ameangalia taarifa ya hii (ww) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:19:27', NULL),
(8278, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:29', NULL),
(8279, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:29', NULL),
(8280, 'admin ameangalia taarifa ya hii (ww) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:19:32', NULL),
(8281, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:36', NULL),
(8282, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:44', NULL),
(8283, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:47', NULL),
(8284, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:19:49', NULL),
(8285, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:20:10', NULL),
(8286, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:20:13', NULL),
(8287, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:20:37', NULL),
(8288, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:10:20:38', NULL),
(8289, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:20:43', NULL),
(8290, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:20:46', NULL),
(8291, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:20:54', NULL),
(8292, 'mimi ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:10:20:57', NULL),
(8293, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:21:02', NULL),
(8294, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:21:04', NULL),
(8295, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:21:10', NULL),
(8296, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:21:12', NULL),
(8297, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:10:21:16', NULL),
(8298, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:10:21:16', NULL),
(8299, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:21:18', NULL),
(8300, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:10:21:29', NULL),
(8301, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:22:17', NULL),
(8302, 'Location hii AFRICAN ICD imekuwa updated', 'BorderPort', 'Update', '', '', 'mimi', '2020-03-17:10:22:24', NULL),
(8303, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:10:22:24', NULL),
(8304, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-17:10:23:01', NULL),
(8305, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:23:05', NULL),
(8306, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:23:11', NULL),
(8307, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:23:13', NULL),
(8308, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:23:25', NULL),
(8309, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-17:10:23:26', NULL),
(8310, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:24:37', NULL),
(8311, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:24:43', NULL),
(8312, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:24:45', NULL),
(8313, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:24:51', NULL),
(8314, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:49:43', NULL),
(8315, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:49:46', NULL),
(8316, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:49:49', NULL),
(8317, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:49:55', NULL),
(8318, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:11:49:57', NULL),
(8319, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:50:01', NULL),
(8320, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:50:46', NULL),
(8321, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:11:50:48', NULL),
(8322, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:50:50', NULL),
(8323, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:11:50:53', NULL),
(8324, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:11:52:52', NULL),
(8325, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-03-17:11:55:05', NULL),
(8326, 'Location hii TUNDUMA imekuwa updated', 'BorderPort', 'Update', '', '', 'admin', '2020-03-17:11:55:10', NULL),
(8327, 'admin ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'admin', '2020-03-17:11:55:10', NULL),
(8328, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:11:59:15', NULL),
(8329, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:11:59:17', NULL),
(8330, 'kondo ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'kondo', '2020-03-17:11:59:21', NULL),
(8331, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:11:59:23', NULL),
(8332, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:13:20:08', NULL),
(8333, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:13:20:31', NULL),
(8334, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:13:20:36', NULL),
(8335, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:15:50:14', NULL),
(8336, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:15:50:16', NULL),
(8337, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:15:53:38', NULL),
(8338, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:15:54:13', NULL),
(8339, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-17:15:54:15', NULL),
(8340, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-17:21:10:48', NULL),
(8341, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-17:21:11:20', NULL),
(8342, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-17:21:11:26', NULL),
(8343, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-18:17:35:01', NULL),
(8344, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-18:17:35:03', NULL),
(8345, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-18:23:15:58', NULL),
(8346, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-18:23:16:00', NULL),
(8347, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-18:23:17:31', NULL),
(8348, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-18:23:17:34', NULL),
(8349, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-19:00:14:15', NULL),
(8350, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-19:00:14:18', NULL),
(8351, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:36:22', NULL),
(8352, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:36:52', NULL),
(8353, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:39:34', NULL),
(8354, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:39:51', NULL),
(8355, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:40:05', NULL),
(8356, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:40:22', NULL),
(8357, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:41:49', NULL),
(8358, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:58:23', NULL),
(8359, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:10:59:14', NULL),
(8360, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:07:48', NULL),
(8361, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:08:47', NULL),
(8362, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:10:31', NULL),
(8363, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:10:59', NULL),
(8364, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:11:18', NULL),
(8365, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:11:27', NULL),
(8366, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:15:07', NULL),
(8367, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:15:18', NULL),
(8368, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:15:19', NULL),
(8369, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:15:20', NULL),
(8370, 'Location hii TUNDUMA imekuwa updated', 'BorderPort', 'Update', '', '', 'juan', '2020-03-20:11:15:25', NULL),
(8371, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:15:25', NULL),
(8372, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:15:27', NULL),
(8373, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:17:34', NULL),
(8374, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:18:08', NULL),
(8375, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:18:31', NULL),
(8376, 'Location hii TUNDUMA imekuwa updated', 'BorderPort', 'Update', '', '', 'juan', '2020-03-20:11:18:39', NULL),
(8377, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:18:39', NULL),
(8378, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:18:41', NULL),
(8379, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:18:47', NULL),
(8380, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:18:50', NULL),
(8381, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:18:59', NULL),
(8382, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:20:04', NULL),
(8383, 'Location hii AFRICAN ICD imekuwa updated', 'BorderPort', 'Update', '', '', 'juan', '2020-03-20:11:20:18', NULL),
(8384, 'juan ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:20:18', NULL),
(8385, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:20:22', NULL),
(8386, 'juan ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:20:24', NULL),
(8387, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:20:27', NULL),
(8388, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:21:24', NULL),
(8389, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:21:28', NULL),
(8390, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:21:58', NULL),
(8391, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:22:05', NULL),
(8392, 'Location hii AFRICAN ICD imekuwa updated', 'BorderPort', 'Update', '', '', 'juan', '2020-03-20:11:22:10', NULL),
(8393, 'juan ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-20:11:22:10', NULL),
(8394, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:22:14', NULL),
(8395, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:23:05', NULL),
(8396, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:23:09', NULL),
(8397, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-20:11:23:20', NULL),
(8398, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-20:11:23:31', NULL),
(8399, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:24:00', NULL),
(8400, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-20:11:27:04', NULL),
(8401, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-20:11:43:46', NULL),
(8402, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-20:11:44:42', NULL),
(8403, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-20:11:44:47', NULL),
(8404, 'mimi ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-20:11:44:47', NULL),
(8405, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-20:11:44:51', NULL),
(8406, 'mimi ameangalia taarifa ya hii (KASUMULU) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-20:11:44:56', NULL),
(8407, 'mimi ameangalia taarifa ya hii (KASUMULU) Border Port', 'BorderPort', 'View', '', '', 'mimi', '2020-03-20:11:44:56', NULL),
(8408, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-20:11:45:01', NULL),
(8409, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:00:54:57', NULL),
(8410, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:00:55:09', NULL),
(8411, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:07:07:20', NULL),
(8412, 'juan ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-21:07:07:25', NULL),
(8413, 'juan ameangalia taarifa ya hii (AFRICAN ICD) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-21:07:07:25', NULL),
(8414, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:07:07:28', NULL),
(8415, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-21:07:07:36', NULL),
(8416, 'juan ameangalia taarifa ya hii (TUNDUMA) Border Port', 'BorderPort', 'View', '', '', 'juan', '2020-03-21:07:07:37', NULL),
(8417, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:07:07:40', NULL),
(8418, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:09:22:33', NULL),
(8419, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:09:24:12', NULL),
(8420, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:09:24:57', NULL),
(8421, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:27:22', NULL),
(8422, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:30:24', NULL),
(8423, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:30:33', NULL),
(8424, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:30:44', NULL),
(8425, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:31:10', NULL),
(8426, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:32:20', NULL),
(8427, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:33:42', NULL),
(8428, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:34:10', NULL),
(8429, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:36:05', NULL),
(8430, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:36:36', NULL),
(8431, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:36:48', NULL),
(8432, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:36:58', NULL),
(8433, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:37:03', NULL),
(8434, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:38:17', NULL),
(8435, 'mimi ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'mimi', '2020-03-21:18:38:46', NULL),
(8436, 'juan ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'juan', '2020-03-21:21:02:58', NULL),
(8437, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-03-22:06:32:48', NULL),
(8438, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:21:51:34', NULL),
(8439, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:21:51:40', NULL),
(8440, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:21:55:08', NULL),
(8441, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:21:57:15', NULL),
(8442, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:21:57:19', NULL),
(8443, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:21:57:35', NULL),
(8444, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:22:08:57', NULL),
(8445, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:22:09:34', NULL),
(8446, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:22:13:10', NULL),
(8447, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-09:22:13:15', NULL),
(8448, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-11:10:39:25', NULL),
(8449, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-04-11:10:39:39', NULL),
(8450, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-04-11:10:40:18', NULL),
(8451, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-04-11:12:06:19', NULL),
(8452, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-04-12:11:44:01', NULL),
(8453, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-12:21:14:06', NULL),
(8454, 'admin ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'admin', '2020-04-12:22:11:22', NULL),
(8455, 'kondo ameangalia taarifa za Border ', 'BorderPort', 'Index', '', '', 'kondo', '2020-04-12:22:16:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_system_module`
--

CREATE TABLE `tbl_system_module` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_system_module`
--

INSERT INTO `tbl_system_module` (`id`, `name`) VALUES
(13, 'CONFIGURATION'),
(14, 'SETTINGS'),
(15, 'USER MANAGEMENT'),
(16, 'DEVICES ROTATION'),
(17, 'REPORT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `employee_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `role` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `employee_id`, `company_id`, `user_type`, `role`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'kondo', 'vz7Qr7s7bB1Hm18umGi_2l4Sx9HGiuXP', '$2y$13$FCEQtqftOiu0X75l.12oUeVGIx5LKICtYtte3OJe.Tb6QRUvRvhuG', 'QH56c20Sd_Wn9_hqZ7WwYdl5pUh1TuA1_1584264876', 'salim@gmail.com', 10, 0, 0, 0, 'SuperAdministrator', 1581714302, 1584264875, 'VNja0aC9jT6CeqEzyuW35BIErC-uhdDd_1581714302'),
(2, 'adminsaa', 'qiGpdMFCoExh6V0aXJCCAZQJSjyAcs9N', '$2y$13$U65InLIcf8gZ2Pc5Tch3mOHIq9rGvitM6FDyjLlkCjj/oWsPfQPPC', 'wzompe9AG8VMf8SlF0gWMQWWrzlaeGTl_1584306788', 'thomsi@gmail.com', 1, 1, NULL, 3, 'SalesPerson', 1584306787, 1586731998, NULL),
(3, 'mimi', 'fDlyN3fVQC6pvpVBney7usjaEYTzhjnN', '$2y$13$oL8X1Q5ECkMQTtnEPrEGZ.LOxLhjMu2or1QxUL9flYmSJHRDFI6MK', 'n60TQ66cf2EeGbPmeGE8BxPx3wePumJt_1584856675', 'mimi@gmail.com', 10, 2, NULL, 2, 'Operator', 1584306907, 1584856675, NULL),
(4, 'border', 'k8sq5hE3aw1zRTsbp6LBD0YnQOBaBRRY', '$2y$13$VuE9V10FXF6v5aNhjgRUq.wgWnjwuV24sz9R.EuuVj/TyObcv1Fz2', 'G9tojL91M2Ac2aveuGdaOFrYbmAaHNYQ_1584432497', 'nick@gmail.com', 10, 3, NULL, 4, 'BorderPerson', 1584387793, 1586731929, NULL),
(7, 'WEB', 'EcGUDauPwR51-dVKNLLKWP3EF2CIIWPN', '$2y$13$lzvd6WrkT0z2k5RZc2y9jen/N5CKHd0ErSMa1sL7ck/Onc0gm2E6a', 'u1pJcyMKco7rG_hxG4SVeKYkgCQ6lBg4_1584393798', 'web@gmail.com', 10, NULL, 1, 5, 'CreditCustomer', 1584393798, 1586593931, NULL),
(8, 'MAXIMA', 'absuvhrL2NOBdfmVaeiJ8yn1fxzS7bUD', '$2y$13$lTt7.JIBDwWfl9vgSMjhf.0W1z4yc5RG6TDb21SCdNzE5/Qghn2zK', 'T5tseB1Lwz4S_eTq5V3fvEkIOlQ6IXso_1584394550', 'maxima@gmail.com', 10, NULL, 2, 5, 'CreditCustomer', 1584394549, 1586594526, NULL),
(9, 'admin', '2EUx9ZgVnqbSQwJ9NhaSx4QOrk__WoIL', '$2y$13$/NZ6r5cgHJ6zFnZmUFtinObbyX7wQWAiIHfukmqmcdPW/Lhz1asK6', 'vhA9A1ePYbDBGdXDmUAoHwJCqr8xCuJd_1584441876', 'admin@gmail.com', 10, 5, NULL, 1, 'Administrator', 1584441875, 1584441875, NULL),
(10, 'juan', 'SPI5x_R7QvLSrUavGAn0qKLBP2_Is0jU', '$2y$13$SKNQO2ytRctEIE6soF6//.wsR9BrS8kleFp4m1AEs/phLkbaJ8MP6', 'Z-0KxuMD-JK-V_3Nolex3x0WBN9-FCg8_1584443106', 'juan@gmail.com', 10, 0, 0, 0, 'SuperAdministrator', 1584443105, 1584443105, NULL),
(11, 'adminjuan', 'ql1B4QhdtGcabbupQLSlqD8bACXc_w5f', '$2y$13$VrqWA2vD5mSrJ/EEycOfCeItCPZhdVTLHRi7gnIPO5bgC6ikK8Vy.', 'yleisxXM08gWqV8sEkaLYOPqjJzxUGdn_1586726667', 'adminjuan@gmail.com', 10, 8, NULL, 1, 'Administrator', 1586726666, 1586726666, NULL),
(12, 'mbauro', 'f9TEbEqGOlijS_aSuNaQpuBz3_6Hv6kL', '$2y$13$spd4HuF/QRnz.R0r0ESyo.SrccaCoIUC8ESua9vFWg8L3B0houbYi', '3_Nkmkkq73Q3pU9vqfHSi8fm8f67cSwK_1586726899', 'mbauro@gmail.com', 10, 9, NULL, 1, 'Administrator', 1586726898, 1586726898, NULL),
(13, 'office', 'ttXG_v7MShgqtEGTZAD3feqYbw9VN3SF', '$2y$13$4CA2h6NQ7s1r/NIQCtcCBu9JFWic.n2TpUualK.VO2ySpkBOMbiMu', 'MEUekzLILwb6idU7QDcbGeIYJKaUgdHC_1586733574', 'office@gmail.com', 10, 10, NULL, 2, 'Operator', 1586733573, 1586733573, NULL),
(14, 'port', 'z2zZ1sg0CFHEMcJ4_IV72tDI_sNp7BM0', '$2y$13$S3hEp2dfIzKSwljIUm.Mke3D/AcGmPdusbyt7WVFyv5VXtRGCmXK6', 'gembTlk4uQQaQbISaggOn-qWWGlXJTDl_1586733813', 'port@gmail.com', 1, 11, NULL, 3, 'SalesPerson', 1586733812, 1586733812, NULL),
(15, 'border2', 'vupnMd-7hyB0DZosQvBc3bbIIUyfJc1s', '$2y$13$4bXBU7p0.Fcz6FG5LQKHKuR44arRln4jQaY9oaxt74eEJX1NmKW/m', '-O4i1gm1OOWiqE7Kdgyzu8qrgSg-EuXt_1586734005', 'border@gmail.com', 10, 13, NULL, 4, 'BorderPerson', 1586734004, 1586734004, NULL),
(16, 'RAHN', 'bpD0BsafbJXCFpnN-LVzlxZ2K4-2rMqf', '$2y$13$nC7h.fRpALDbZ6TI7oIRTuCigqYNqsBoTISGUpM92krYJaTxBbNse', 'lFrKi5T8EJLFWHx0YnA90VyF4j-zH5BN_1586734383', 'rahn@gmail.com', 10, NULL, 3, NULL, 'CreditCustomer', 1586734382, 1586734382, NULL),
(17, 'admin1', '0iGqZixr1Nt4YOJIb8eprLgiPYS3s9pQ', '$2y$13$MmodBx0CPtggRtVosAf20uUyDev.3/sod2c3xOIsdl26U1ix6nt4y', '1DEpBss15_MPL1qQZTlp07FA4nhx0BzB_1586736967', 'adminjuan1@gmail.com', 10, 14, NULL, 1, 'Administrator', 1586736966, 1586736966, NULL),
(18, 'admin2', 'RKgBT2D6VjNsjcFwK-5nwIMpYvfLstLm', '$2y$13$0MkVzp/VNsH/86e4dw737.fYeQuq6GkClIwIcJr0i0ZIB8N0/OO6m', 'OfVkUnLLCqxDrkm6nHXYCjbjxnr0SJsH_1586737134', 'adminjuan2@gmail.com', 10, 15, NULL, 1, 'Administrator', 1586737134, 1586737134, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocated_device`
--
ALTER TABLE `allocated_device`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `awaiting_receive`
--
ALTER TABLE `awaiting_receive`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `awaiting_receive_report`
--
ALTER TABLE `awaiting_receive_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `border_port`
--
ALTER TABLE `border_port`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`(191)),
  ADD KEY `location` (`location`);

--
-- Indexes for table `border_port_user`
--
ALTER TABLE `border_port_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `border_port` (`border_port`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-devices-created_by` (`created_by`),
  ADD KEY `serial` (`serial`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fault_devices`
--
ALTER TABLE `fault_devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_no_2` (`serial_no`),
  ADD KEY `idx-fault_devices-created_by` (`created_by`),
  ADD KEY `serial_no` (`serial_no`);

--
-- Indexes for table `fault_devices_report`
--
ALTER TABLE `fault_devices_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-fault_devices-created_by` (`created_by`),
  ADD KEY `serial_no` (`serial_no`);

--
-- Indexes for table `in_transit`
--
ALTER TABLE `in_transit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `in_transit_report`
--
ALTER TABLE `in_transit_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `received_devices`
--
ALTER TABLE `received_devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `received_devices_report`
--
ALTER TABLE `received_devices_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `released_devices`
--
ALTER TABLE `released_devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `released_devices_report`
--
ALTER TABLE `released_devices_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfidcard`
--
ALTER TABLE `rfidcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_trips`
--
ALTER TABLE `sales_trips`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trip_number` (`tzl`),
  ADD KEY `fb_filter_agent_INDEX` (`agent`(10));

--
-- Indexes for table `stock_devices`
--
ALTER TABLE `stock_devices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `stock_devices_report`
--
ALTER TABLE `stock_devices_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_system_module`
--
ALTER TABLE `tbl_system_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `employee_id` (`employee_id`,`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allocated_device`
--
ALTER TABLE `allocated_device`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `awaiting_receive`
--
ALTER TABLE `awaiting_receive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `awaiting_receive_report`
--
ALTER TABLE `awaiting_receive_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `border_port`
--
ALTER TABLE `border_port`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `border_port_user`
--
ALTER TABLE `border_port_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fault_devices`
--
ALTER TABLE `fault_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `fault_devices_report`
--
ALTER TABLE `fault_devices_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_transit`
--
ALTER TABLE `in_transit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `in_transit_report`
--
ALTER TABLE `in_transit_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `received_devices`
--
ALTER TABLE `received_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `received_devices_report`
--
ALTER TABLE `received_devices_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `released_devices`
--
ALTER TABLE `released_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `released_devices_report`
--
ALTER TABLE `released_devices_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rfidcard`
--
ALTER TABLE `rfidcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_trips`
--
ALTER TABLE `sales_trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stock_devices`
--
ALTER TABLE `stock_devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `stock_devices_report`
--
ALTER TABLE `stock_devices_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8456;

--
-- AUTO_INCREMENT for table `tbl_system_module`
--
ALTER TABLE `tbl_system_module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
