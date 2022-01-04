-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 02:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaranpasien`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `no_induk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`no_induk`, `nama`, `role`, `password`) VALUES
(321, 'syahrul riza', 'admin obat', 'adminobat123'),
(456, 'reza', 'admin regristrasi', 'adminregristrasi123');

-- --------------------------------------------------------

--
-- Table structure for table `detailtransaksi`
--

CREATE TABLE `detailtransaksi` (
  `id_obat` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jumlah_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailtransaksi`
--

INSERT INTO `detailtransaksi` (`id_obat`, `id_transaksi`, `jumlah_obat`) VALUES
(202, 7, 5),
(2, 7, 2),
(9, 8, 3),
(1, 9, 1),
(2, 9, 1),
(1, 10, 5),
(15, 10, 5),
(25, 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis_obat`) VALUES
(1, 'tablet'),
(2, 'pil');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori_obat`) VALUES
(1, 'obat bebas'),
(2, 'obat tertutup');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_obat` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `id_jenis`, `id_kategori`, `nama_obat`, `harga`, `stock`) VALUES
(1, 1, 1, 'Fluorouracil', 10000, 39),
(2, 1, 1, 'Medroxyprogesterone Acetate', 10000, 42),
(3, 1, 1, 'Old Spice Classic', 10000, 45),
(4, 1, 1, 'Kao-Bis', 10000, 45),
(5, 1, 1, 'topcare day time nite time cold and flu relief', 10000, 45),
(6, 1, 1, 'Mouse Epithelium', 10000, 45),
(7, 1, 1, 'Omeprazole', 10000, 45),
(8, 1, 1, 'Hydrocortisone Valerate', 10000, 45),
(9, 1, 1, 'Animi-3 with Vitamin D', 10000, 42),
(10, 1, 1, 'FOREVER LASTING ESSENTIAL EMULSION', 10000, 45),
(11, 1, 1, 'Dextrose And Sodium Chloride', 10000, 45),
(12, 1, 1, 'Zosyn', 10000, 45),
(13, 1, 1, 'Monilia', 10000, 45),
(14, 1, 1, 'Reversion Acne Control', 10000, 45),
(15, 1, 1, 'Badger SPF 35 Sport Sunscreen Face Stick', 10000, 40),
(16, 1, 1, 'Clonazepam', 10000, 45),
(17, 1, 1, 'White Ash', 10000, 45),
(18, 1, 1, 'Black Walnut', 10000, 45),
(19, 1, 1, 'equaline sinus congestion and pain', 10000, 45),
(20, 1, 1, 'ACONITUM FEROX', 10000, 45),
(21, 1, 1, 'Oxygen', 10000, 45),
(22, 1, 1, 'Mary Kay Tinted Moisturizer Sunscreen SPF 20 Beige', 10000, 45),
(23, 1, 1, 'Doxycycline', 10000, 45),
(24, 1, 1, 'Lidocaine Hydrochloride', 10000, 45),
(25, 1, 1, 'Levetiracetam', 10000, 40),
(26, 1, 1, 'Icy Hot', 10000, 45),
(27, 1, 1, 'Buspirone Hydrochloride', 10000, 45),
(28, 1, 1, 'CHILDRENS ADVIL', 10000, 45),
(29, 1, 1, 'Dopamine Hydrochloride and Dextrose', 10000, 45),
(30, 1, 1, 'Fluticasone Propionate', 10000, 45),
(31, 1, 1, 'DiorSkin Nude 051 Dark Sand', 10000, 45),
(32, 1, 1, 'SunscreenSPF 30', 10000, 45),
(33, 1, 1, 'FLUZONE QUADRIVALENT', 10000, 45),
(34, 1, 1, 'MINERAL BLEMISH KIT', 10000, 45),
(35, 1, 1, 'BETULA LENTA POLLEN', 10000, 45),
(36, 1, 1, 'Ibuprofen', 10000, 45),
(37, 1, 1, 'Fentanyl - NOVAPLUS', 10000, 45),
(38, 1, 1, 'Ibuprofen', 10000, 45),
(39, 1, 1, 'Personal Care Oil Free Foaming Facial Cleanser', 10000, 45),
(40, 1, 1, 'Rye Grain', 10000, 45),
(41, 1, 1, 'Cilostazol', 10000, 45),
(42, 1, 1, 'Hydromorphone Hydrochloride', 10000, 45),
(43, 1, 1, 'Trileptal', 10000, 45),
(44, 1, 1, 'SoftGlo', 10000, 45),
(45, 1, 1, 'Betamethasone Dipropionate', 10000, 45),
(46, 1, 1, 'Treatment Set TS349274', 10000, 45),
(47, 1, 1, 'equate daytime nitetime', 10000, 45),
(48, 1, 1, 'Zenzedi', 10000, 45),
(49, 1, 1, 'Personal Care Pyrithione Zinc Dandruff', 10000, 45),
(50, 1, 1, 'Irritated Eye Relief', 10000, 45),
(51, 1, 1, 'Mineral Oil Lubricant Laxative', 10000, 45),
(52, 1, 1, 'ibuprofen', 10000, 45),
(53, 1, 1, 'Speed Stick Gear Cool Motion Antiperspirant Deodor', 10000, 45),
(54, 1, 1, 'Triacin-C', 10000, 45),
(55, 1, 1, 'Amlodipine Besylate and Benazepril Hydrochloride', 10000, 45),
(56, 1, 1, 'Clomipramine Hydrochloride', 10000, 45),
(57, 1, 1, 'ADVANCED CELL BOOSTING EX BB', 10000, 45),
(58, 1, 1, 'METHYLIN', 10000, 45),
(59, 1, 1, 'XtraCare Hand Sanitizer', 10000, 45),
(60, 1, 1, 'NATRUM MURIATICUM', 10000, 45),
(61, 1, 1, 'severe sinus', 10000, 45),
(62, 1, 1, 'Benztropine Mesylate', 10000, 45),
(63, 1, 1, 'FixMySkin Healing Balm Fragrance-Free', 10000, 45),
(64, 1, 1, 'Mustard Seed', 10000, 45),
(65, 1, 1, 'Tinidazole', 10000, 45),
(66, 1, 1, 'Up and Up Medicated Hemorrhoidal Pads', 10000, 45),
(67, 1, 1, 'Insomnia', 10000, 45),
(68, 1, 1, 'LEVAQUIN', 10000, 45),
(69, 1, 1, 'DR. RECKEWEG R13 Prohaemorrhin', 10000, 45),
(70, 1, 1, 'Simvastatin', 10000, 45),
(71, 1, 1, 'Bupropion Hydrochloride', 10000, 45),
(72, 1, 1, 'SHISEIDO SUN PROTECTION FOUNDATION', 10000, 45),
(73, 1, 1, 'HCGDelivery com', 10000, 45),
(74, 1, 1, 'Old Spice Sweat Defense', 10000, 45),
(75, 1, 1, 'Ropivacaine HCl', 10000, 45),
(76, 1, 1, 'Darby', 10000, 45),
(77, 1, 1, 'Sunmark z sleep', 10000, 45),
(78, 1, 1, 'CLE DE PEAU BEAUTE SILKY FOUNDATION I', 10000, 45),
(79, 1, 1, 'JASMINE WATER BB', 10000, 45),
(80, 1, 1, 'LANOXIN', 10000, 45),
(81, 1, 1, 'Mobic', 10000, 45),
(82, 1, 1, 'VECURONIUM BROMIDE', 10000, 45),
(83, 1, 1, 'CLINIMIX', 10000, 45),
(84, 1, 1, 'Salsalate', 10000, 45),
(85, 1, 1, 'Tussin Sugar Free Cough', 10000, 45),
(86, 1, 1, 'Lovastatin', 10000, 45),
(87, 1, 1, 'PHENYTOIN', 10000, 45),
(88, 1, 1, 'adenosine', 10000, 45),
(89, 1, 1, 'formu care ranitidine', 10000, 45),
(90, 1, 1, 'Pure Petroleum Cocoa Butter Scented', 10000, 45),
(91, 1, 1, 'American Elm', 10000, 45),
(92, 1, 1, 'NANOMIX BODY CARE', 10000, 45),
(93, 1, 1, 'Furosemide', 10000, 45),
(94, 1, 1, 'Summer Berry Antibacterial Foaming Hand Wash', 10000, 45),
(95, 1, 1, 'Calcium Gluconate', 10000, 45),
(96, 1, 1, 'Ibuprofen IB', 10000, 45),
(97, 1, 1, 'Cefpodoxime Proxetil', 10000, 45),
(98, 1, 1, 'Matzim LA', 10000, 45),
(99, 1, 1, 'TOPIRAMATE', 10000, 45),
(100, 1, 1, 'Senna Plus', 10000, 45),
(101, 1, 1, 'CINNAMON', 10000, 45),
(102, 1, 1, 'Gelato Topical Anesthetic', 10000, 45),
(103, 1, 1, 'flormar REBORN BB SUNSCREEN BROAD SPECTRUM SPF 30 ', 10000, 45),
(104, 1, 1, 'Metaxalone', 10000, 45),
(105, 1, 1, 'POLYETHYLENE GLYCOL 3350', 10000, 45),
(106, 1, 1, 'Alendronate Sodium', 10000, 45),
(107, 1, 1, 'Gastrotone', 10000, 45),
(108, 1, 1, 'Quality Choice Effervescent Cold Relief Plus', 10000, 45),
(109, 1, 1, 'Sinus Congestion and Pain Relief', 10000, 45),
(110, 1, 1, 'Depakote', 10000, 45),
(111, 1, 1, 'Pepto-Bismol', 10000, 45),
(112, 1, 1, 'Miss Spa', 10000, 45),
(113, 1, 1, 'Childrens Ibuprofen', 10000, 45),
(114, 1, 1, 'Dexmethylphenidate Hydrochloride Extended-Release', 10000, 45),
(115, 1, 1, 'Sweet Lemon', 10000, 45),
(116, 1, 1, 'SYNTHROID', 10000, 45),
(117, 1, 1, 'Flarex', 10000, 45),
(118, 1, 1, 'Total Aluminum', 10000, 45),
(119, 1, 1, 'Nitetime D', 10000, 45),
(120, 1, 1, 'Lac Caninum Kit Refill', 10000, 45),
(121, 1, 1, 'BANANA BOAT', 10000, 45),
(122, 1, 1, 'Triple Antibiotic', 10000, 45),
(123, 1, 1, 'LEVAQUIN', 10000, 45),
(124, 1, 1, 'METOPROLOL SUCCINATE', 10000, 45),
(125, 1, 1, 'Bioelements', 10000, 45),
(126, 1, 1, 'Metoprolol Succinate', 10000, 45),
(127, 1, 1, 'fosphenytoin sodium', 10000, 45),
(128, 1, 1, 'Dextrose', 10000, 45),
(129, 1, 1, 'Publix', 10000, 45),
(130, 1, 1, 'Egg White', 10000, 45),
(131, 1, 1, 'healthy accents antacid', 10000, 45),
(132, 1, 1, 'Metronidazole', 10000, 45),
(133, 1, 1, 'TRAMADOL HYDROCHLORIDE', 10000, 45),
(134, 1, 1, 'Naproxen', 10000, 45),
(135, 1, 1, 'Metoprolol Tartrate', 10000, 45),
(136, 1, 1, 'beyond nicotine kit', 10000, 45),
(137, 1, 1, 'QUALITY CHOICE LUBRICANT TEARS EYE', 10000, 45),
(138, 1, 1, 'FUCUS VESICULOSUS', 10000, 45),
(139, 1, 1, 'Black Birch', 10000, 45),
(140, 1, 1, 'Medpride', 10000, 45),
(141, 1, 1, 'Venlafaxine Hydrochloride', 10000, 45),
(142, 1, 1, 'Isosorbide', 10000, 45),
(143, 1, 1, 'Neomycin and Polymyxin B Sulfates and Hydrocortiso', 10000, 45),
(144, 1, 1, 'SOLMATE', 10000, 45),
(145, 1, 1, 'Air', 10000, 45),
(146, 1, 1, 'GABAPENTIN', 10000, 45),
(147, 1, 1, 'Disney PIXAR MONSTERS UNIVERSITY Antibacterial Han', 10000, 45),
(148, 1, 1, 'Danazol', 10000, 45),
(149, 1, 1, 'good neighbor pharmacy nasal decongestant', 10000, 45),
(150, 1, 1, 'Motion sickness', 10000, 45),
(151, 1, 1, 'RoC Multi Correxion 5 in 1 Moisturizer', 10000, 45),
(152, 1, 1, 'Secret Clinical Invisible', 10000, 45),
(153, 1, 1, 'No7 Lift and Luminate Foundation Sunscreen Broad S', 10000, 45),
(154, 1, 1, 'ALLERGY RELIEF-D', 10000, 45),
(155, 1, 1, 'DAILY MOISTURIZING', 10000, 45),
(156, 1, 1, 'Treatment Set TS330717', 10000, 45),
(157, 1, 1, 'ChloraPrep One-Step', 10000, 45),
(158, 1, 1, 'Cephalexin', 10000, 45),
(159, 1, 1, 'LBEL REPLENISHING FOUNDATION SPF 14', 10000, 45),
(160, 1, 1, 'Metamucil', 10000, 45),
(161, 1, 1, 'Senna', 10000, 45),
(162, 1, 1, 'PCxx', 10000, 45),
(163, 1, 1, 'Muscle Ease', 10000, 45),
(164, 1, 1, 'Voriconazole', 10000, 45),
(165, 1, 1, 'Myoview', 10000, 45),
(166, 1, 1, 'Neutrogena Ultimate Sport', 10000, 45),
(167, 1, 1, 'Propranolol Hydrochloride', 10000, 45),
(168, 1, 1, 'Loperamide Hydrochloride', 10000, 45),
(169, 1, 1, 'Ampicillin and Sulbactam', 10000, 45),
(170, 1, 1, 'Megestrol Acetate', 10000, 45),
(171, 1, 1, 'Sulfamethoxazole and Trimethoprim', 10000, 45),
(172, 1, 1, 'H-Balm Control', 10000, 45),
(173, 1, 1, 'LBEL', 10000, 45),
(174, 1, 1, 'Zaroxolyn', 10000, 45),
(175, 1, 1, 'Budesonide', 10000, 45),
(176, 1, 1, 'Codeine sulfate', 10000, 45),
(177, 1, 1, 'EXENCE WHITE', 10000, 45),
(178, 1, 1, 'NITROGEN', 10000, 45),
(179, 1, 1, 'Chicken Feathers', 10000, 45),
(180, 1, 1, 'INSTANT HAND SANITIZER', 10000, 45),
(181, 1, 1, 'ADVANCED HYDRO-LIQUID COMPACT (REFILL)', 10000, 45),
(182, 1, 1, 'SSD', 10000, 45),
(183, 1, 1, 'Vapor Inhaler', 10000, 45),
(184, 1, 1, 'LBEL', 10000, 45),
(185, 1, 1, 'Levocetirizine Dihydrochloride', 10000, 45),
(186, 1, 1, 'Liothyronine Sodium', 10000, 45),
(187, 1, 1, 'Sore Throat', 10000, 45),
(188, 1, 1, '12 Hour Cough Relief', 10000, 45),
(189, 1, 1, 'LETROZOLE', 10000, 45),
(190, 1, 1, 'Moisturizer', 10000, 45),
(191, 1, 1, 'NARS PURE RADIANT TINTED MOISTURIZER', 10000, 45),
(192, 1, 1, 'Lamivudine and Zidovudine', 10000, 45),
(193, 1, 1, 'Labetalol Hydrochloride', 10000, 45),
(194, 1, 1, 'simply right cetirizine hydrochloride', 10000, 45),
(195, 1, 1, 'Preferred Plus Severe Cold Cough and Flu', 10000, 45),
(196, 1, 1, 'verapamil hydrochloride', 10000, 45),
(197, 1, 1, 'Clonidine Hydrochloride', 10000, 45),
(198, 1, 1, 'AcneFree Clear Skin Treatments', 10000, 45),
(199, 1, 1, 'Nifedipine', 10000, 45),
(200, 1, 1, 'Macadamia Nut', 10000, 45),
(201, 1, 1, 'Aspirin', 10000, 45),
(202, 1, 1, 'benzonatate', 10000, 40),
(203, 1, 1, 'DIPYRIDAMOLE', 10000, 45),
(204, 1, 1, 'Alcohol Prep', 10000, 45),
(205, 1, 1, 'Leucovorin', 10000, 45),
(206, 1, 1, 'MERCURIUS VIVUS', 10000, 45),
(207, 1, 1, 'SUNSCREEN STICK', 10000, 45),
(208, 1, 1, 'Sei Bella Age-Defying Liquid Foundation', 10000, 45),
(209, 1, 1, 'Phenobarbital', 10000, 45),
(210, 1, 1, 'REYATAZ', 10000, 45),
(211, 1, 1, 'Hydrocodone Bitartrate and Acetaminophen', 10000, 45),
(212, 1, 1, 'Levofloxacin', 10000, 45),
(213, 1, 1, 'Bite Beauty SPF 15 Sheer Balm', 10000, 45),
(214, 1, 1, 'Zidovudine', 10000, 45),
(215, 1, 1, 'Famotidine', 10000, 45),
(216, 1, 1, 'Perfecting Liquid Foundation Deep Bronze', 10000, 45),
(217, 1, 1, 'Atenolol and Chlorthalidone', 10000, 45),
(218, 1, 1, 'Lactovit Sensitive Skin Roll-On Antiperspirant Deo', 10000, 45),
(219, 1, 1, 'Zyclara', 10000, 45),
(220, 1, 1, 'Zonnic Nicotine Polacrilex', 10000, 45),
(221, 1, 1, 'Dicyclomine', 10000, 45),
(222, 1, 1, 'Propofol', 10000, 45),
(223, 1, 1, 'Metformin Hydrochloride', 10000, 45),
(224, 1, 1, 'Vibativ', 10000, 45),
(225, 1, 1, 'SkinCeuticals Blemish Plus Age Defense Acne Treatm', 10000, 45),
(226, 1, 1, 'SPA MYSTIQUE SKIN RELIEF OATMEAL DAILY MOISTURIZIN', 10000, 45),
(227, 1, 1, 'Tretin-X', 10000, 45),
(228, 1, 1, 'DULOXETINE', 10000, 45),
(229, 1, 1, 'ibuprofen', 10000, 45),
(230, 1, 1, 'Eight Hour Cream Lip Protectant SPF 15', 10000, 45),
(231, 1, 1, 'Doxazosin', 10000, 45),
(232, 1, 1, 'MONO-LINYAH', 10000, 45),
(233, 1, 1, 'Bupropion Hydrochloride', 10000, 45),
(234, 1, 1, 'AZITHROMYCIN', 10000, 45),
(235, 1, 1, 'Handi-Sani', 10000, 45),
(236, 1, 1, 'Clopidogrel', 10000, 45),
(237, 1, 1, 'Lunesta', 10000, 45),
(238, 1, 1, 'Ropinirole Hydrochloride', 10000, 45),
(239, 1, 1, 'SOOTHING AND MOISTURE ALOE VERA 92 PERCENT SOOTHIN', 10000, 45),
(240, 1, 1, 'PredniSONE', 10000, 45),
(241, 1, 1, 'Topcare Nasal Four', 10000, 45),
(242, 1, 1, 'ARTEMISIA TRIDENTATA POLLEN', 10000, 45),
(243, 1, 1, 'Medline Alcohol Prep', 10000, 45),
(244, 1, 1, 'Pleo Sanuvis', 10000, 45),
(245, 1, 1, 'LBEL EFFET PARFAIT Spots Reducing Effect Foundatio', 10000, 45),
(246, 1, 1, 'COREG', 10000, 45),
(247, 1, 1, 'GUNA-INF ALPHA', 10000, 45),
(248, 1, 1, 'ATORVASTATIN CALCIUM', 10000, 45),
(249, 1, 1, 'Naratriptan Hydrochloride', 10000, 45),
(250, 1, 1, 'Zeel', 10000, 45),
(251, 2, 2, 'CONCERTA', 15000, 50),
(252, 2, 2, 'Rice Grain', 15000, 50),
(253, 2, 2, 'VARIVAX', 15000, 50),
(254, 2, 2, 'Vita', 15000, 50),
(255, 2, 2, 'Ranitidine', 15000, 50),
(256, 2, 2, 'Standardized Meadow Fescue Grass Pollen', 15000, 50),
(257, 2, 2, 'Dexamethasone Sodium Phosphate', 15000, 50),
(258, 2, 2, 'ziprasidone hydrochloride', 15000, 50),
(259, 2, 2, 'Antipyrine and Benzocaine', 15000, 50),
(260, 2, 2, 'Dial', 15000, 50),
(261, 2, 2, 'CPDA-1', 15000, 50),
(262, 2, 2, 'Tragacanth Gum', 15000, 50),
(263, 2, 2, 'Ailanthus', 15000, 50),
(264, 2, 2, 'Flu Relief Therapy Day Time', 15000, 50),
(265, 2, 2, 'Rite Aid Sport SunscreenSPF 30', 15000, 50),
(266, 2, 2, 'Sodium Chloride', 15000, 50),
(267, 2, 2, 'CALCIUM ACETATE', 15000, 50),
(268, 2, 2, 'Vancomycin Hydrochloride', 15000, 50),
(269, 2, 2, 'Ondansetron', 15000, 50),
(270, 2, 2, 'Valeriana Officinalis Kit Refill', 15000, 50),
(271, 2, 2, 'Quetiapine fumarate', 15000, 50),
(272, 2, 2, 'Stendra', 15000, 50),
(273, 2, 2, 'Sertraline Hydrochloride', 15000, 50),
(274, 2, 2, 'Secret Clinical Strength', 15000, 50),
(275, 2, 2, 'Ondansetron', 15000, 50),
(276, 2, 2, 'FLAWLESS FINISH PERFECTLY NUDE MAKEUP BROAD SPECTR', 15000, 50),
(277, 2, 2, 'zaleplon', 15000, 50),
(278, 2, 2, 'Pilocarpine Hydrochloride', 15000, 50),
(279, 2, 2, 'BUPROPION HYDROCHLORIDE', 15000, 50),
(280, 2, 2, 'BUSPIRONE HYDROCHLORIDE', 15000, 50),
(281, 2, 2, 'Rabeprazole sodium', 15000, 50),
(282, 2, 2, 'Risperidone', 15000, 50),
(283, 2, 2, 'Losartan Potassium and Hydrochlorothiazide', 15000, 50),
(284, 2, 2, 'Amlodipine Besylate', 15000, 50),
(285, 2, 2, 'Stay Awake', 15000, 50),
(286, 2, 2, 'Lisinopril', 15000, 50),
(287, 2, 2, 'Ramipril', 15000, 50),
(288, 2, 2, 'FATIGUE RELIEF', 15000, 50),
(289, 2, 2, 'VOLTAREN', 15000, 50),
(290, 2, 2, 'FENTORA', 15000, 50),
(291, 2, 2, 'Aspirin', 15000, 50),
(292, 2, 2, 'Crest Pro-Health', 15000, 50),
(293, 2, 2, 'Fluconazole', 15000, 50),
(294, 2, 2, 'Instant Hand Sanitizer', 15000, 50),
(295, 2, 2, 'Clobetasol Propionate', 15000, 50),
(296, 2, 2, 'AXERT', 15000, 50),
(297, 2, 2, 'Vibra-Tabs', 15000, 50),
(298, 2, 2, 'Budesonide', 15000, 50),
(299, 2, 2, 'Night Time Cherry', 15000, 50),
(300, 2, 2, 'ProstaScint Kit for the Preparation of Indium In 1', 15000, 50),
(301, 2, 2, 'Modesa', 15000, 50),
(302, 2, 2, 'formu care calcium antacid', 15000, 50),
(303, 2, 2, 'Parasites', 15000, 50),
(304, 2, 2, 'ERY-TAB', 15000, 50),
(305, 2, 2, 'ESIKA Perfect Match', 15000, 50),
(306, 2, 2, 'Ondansetron Hydrochloride', 15000, 50),
(307, 2, 2, 'Endopure Testos-Male', 15000, 50),
(308, 2, 2, 'Red Alder', 15000, 50),
(309, 2, 2, 'Oxistat', 15000, 50),
(310, 2, 2, 'Basic Detox Core Formula', 15000, 50),
(311, 2, 2, 'Hydrocortisone Valerate', 15000, 50),
(312, 2, 2, 'Clonidine Hydrochloride', 15000, 50),
(313, 2, 2, 'ELF Zit Eraser', 15000, 50),
(314, 2, 2, 'FOAMING HAND SANITIZER', 15000, 50),
(315, 2, 2, 'Ribavirin', 15000, 50),
(316, 2, 2, 'Medicated', 15000, 50),
(317, 2, 2, 'Brotapp', 15000, 50),
(318, 2, 2, 'Lisinopril', 15000, 50),
(319, 2, 2, 'Earwax Removal Kit', 15000, 50),
(320, 2, 2, 'Neutrogena Healthy Skin 3 in 1 Concealer for Eyes', 15000, 50),
(321, 2, 2, 'Risperidone', 15000, 50),
(322, 2, 2, 'flormar Foundation Sunscreen Broad Spectrum SPF 20', 15000, 50),
(323, 2, 2, 'BAMBUSA AESCULUS', 15000, 50),
(324, 2, 2, 'OXYGEN', 15000, 50),
(325, 2, 2, 'Sulfamethoxazole and Trimethoprim', 15000, 50),
(326, 2, 2, 'Dial Aloe', 15000, 50),
(327, 2, 2, 'healthy accents nighttime cold and flu', 15000, 50),
(328, 2, 2, 'Amoxicillin and Clavulanate Potassium', 15000, 50),
(329, 2, 2, 'Reflux and Heartburn', 15000, 50),
(330, 2, 2, 'BabyGanics Sunscreen', 15000, 50),
(331, 2, 2, 'CY BETTER LIPS BALM Humectante para Labios con col', 15000, 50),
(332, 2, 2, 'BACLOFEN', 15000, 50),
(333, 2, 2, 'Promethazine hydrochloride', 15000, 50),
(334, 2, 2, 'XtraCare Foam Antibacterial Hand Wash', 15000, 50),
(335, 2, 2, 'Anti-Bacterial Gentle Foaming Hand', 15000, 50),
(336, 2, 2, 'No7 Protect and Perfect Foundation Sunscreen Broad', 15000, 50),
(337, 2, 2, 'Folic Acid', 15000, 50),
(338, 2, 2, 'Calcitriol', 15000, 50),
(339, 2, 2, 'Ifosfamide', 15000, 50),
(340, 2, 2, 'LEVOTHYROXINE SODIUM', 15000, 50),
(341, 2, 2, 'Ropinirole', 15000, 50),
(342, 2, 2, 'Felodipine', 15000, 50),
(343, 2, 2, 'Divalproex sodium', 15000, 50),
(344, 2, 2, 'Dicloxacillin Sodium', 15000, 50),
(345, 2, 2, 'Super Aqua Toner', 15000, 50),
(346, 2, 2, 'Acyclovir', 15000, 50),
(347, 2, 2, 'Valacyclovir hydrochloride', 15000, 50),
(348, 2, 2, 'Bio Oak', 15000, 50),
(349, 2, 2, 'Antifungal Clotrimazole', 15000, 50),
(350, 2, 2, 'Dakins Quarter', 15000, 50),
(351, 2, 2, 'CLINIMIX', 15000, 50),
(352, 2, 2, 'Omeprazole', 15000, 50),
(353, 2, 2, 'QUALITY CHOICE LUBRICANT TEARS EYE', 15000, 50),
(354, 2, 2, 'Doxazosin', 15000, 50),
(355, 2, 2, 'PredniSONE', 15000, 50),
(356, 2, 2, 'TISSEEL', 15000, 50),
(357, 2, 2, 'BIVIGAM', 15000, 50),
(358, 2, 2, 'Flawless Effect Liquid Foundation SPF 15', 15000, 50),
(359, 2, 2, 'Hand Sanitizer', 15000, 50),
(360, 2, 2, 'Spatherapy', 15000, 50),
(361, 2, 2, 'calcium antacid', 15000, 50),
(362, 2, 2, 'Ray Defense Borad Spectrum SPF 30 sunscreen', 15000, 50),
(363, 2, 2, 'Acetaminophen Oral Solution', 15000, 50),
(364, 2, 2, 'LIVESTS Moist Liquid', 15000, 50),
(365, 2, 2, 'Burns Itchy Skin', 15000, 50),
(366, 2, 2, 'SUGAR FREE LEMON MINT HERB THROAT DROPS', 15000, 50),
(367, 2, 2, 'Pediaderm TA', 15000, 50),
(368, 2, 2, 'Glipizide', 15000, 50),
(369, 2, 2, 'Fluconazole', 15000, 50),
(370, 2, 2, 'Triaminic', 15000, 50),
(371, 2, 2, 'Rizatriptan Benzoate', 15000, 50),
(372, 2, 2, 'Naproxen Sodium', 15000, 50),
(373, 2, 2, 'Apis Bryonia', 15000, 50),
(374, 2, 2, 'Synthroid', 15000, 50),
(375, 2, 2, 'Australian Gold', 15000, 50),
(376, 2, 2, 'Cefaclor', 15000, 50),
(377, 2, 2, 'Levocetirizine dihydrochloride', 15000, 50),
(378, 2, 2, 'Tiger Balm White', 15000, 50),
(379, 2, 2, 'Obao Frescura Floral', 15000, 50),
(380, 2, 2, 'BAC-D Antibacterial Wound and Skin care', 15000, 50),
(381, 2, 2, 'DYSPEPSIA', 15000, 50),
(382, 2, 2, 'Hydrocodone Bitartrate and Acetaminophen', 15000, 50),
(383, 2, 2, 'Pollens - Trees, Linden (Basswood) Tilia americana', 15000, 50),
(384, 2, 2, 'Humalog', 15000, 50),
(385, 2, 2, 'DAILY DEFENCE SUNSCREEN Broad Spectrum SPF30', 15000, 50),
(386, 2, 2, 'TOPROLXL', 15000, 50),
(387, 2, 2, 'Ampicillin', 15000, 50),
(388, 2, 2, 'AQUAFRESH', 15000, 50),
(389, 2, 2, 'J-MAX', 15000, 50),
(390, 2, 2, 'Desmopressin Acetate', 15000, 50),
(391, 2, 2, 'ISAKNOX WHITE SYMPHONY BRIGHTENING EMULSION', 15000, 50),
(392, 2, 2, 'Marcaine with Epinephrine', 15000, 50),
(393, 2, 2, 'Digoxin', 15000, 50),
(394, 2, 2, 'Oral Defense Fluoride Rinse', 15000, 50),
(395, 2, 2, 'Calciforce', 15000, 50),
(396, 2, 2, 'Midazolam hydrochloride', 15000, 50),
(397, 2, 2, 'Ibuprofen', 15000, 50),
(398, 2, 2, 'Hydroxyzine Hydrochloride', 15000, 50),
(399, 2, 2, 'Dr. Babor Purity Cellular Ultimate Blemish Reducin', 15000, 50),
(400, 2, 2, 'SHISEIDO SHEER AND PERFECT COMPACT (REFILL)', 15000, 50),
(401, 2, 2, 'SJ Antibacterial Hand Gel', 15000, 50),
(402, 2, 2, 'AZITHROMYCIN', 15000, 50),
(403, 2, 2, 'Crest Sensitivity', 15000, 50),
(404, 2, 2, 'Ibuprofen', 15000, 50),
(405, 2, 2, 'Clarifying Colloidal Sulfur Mask', 15000, 50),
(406, 2, 2, 'ZONISAMIDE', 15000, 50),
(407, 2, 2, 'Sheer Defense Tinted Moisturizer Broad Spectrum SP', 15000, 50),
(408, 2, 2, 'Olanzapine', 15000, 50),
(409, 2, 2, 'Cherry Plum', 15000, 50),
(410, 2, 2, 'Terazosin Hydrochloride', 15000, 50),
(411, 2, 2, 'Oxygen', 15000, 50),
(412, 2, 2, 'Isopropyl Alcohol', 15000, 50),
(413, 2, 2, 'Nitrogen', 15000, 50),
(414, 2, 2, 'REBIF REBIDOSE', 15000, 50),
(415, 2, 2, 'Medline Alcohol Prep', 15000, 50),
(416, 2, 2, 'ESIKA HD COLOR HIGH DEFINITION COLOR SPF 20', 15000, 50),
(417, 2, 2, 'Sheer Finish Tinted Moisturizer Medium-Beige', 15000, 50),
(418, 2, 2, 'itchy eye', 15000, 50),
(419, 2, 2, 'EMBEDA', 15000, 50),
(420, 2, 2, 'Fleet', 15000, 50),
(421, 2, 2, 'CLINIMIX E', 15000, 50),
(422, 2, 2, 'Lubricant / Redness Reliever', 15000, 50),
(423, 2, 2, 'Enalapril Maleate', 15000, 50),
(424, 2, 2, 'SIMPLY RIGHT', 15000, 50),
(425, 2, 2, 'Sumatriptan Succinate', 15000, 50),
(426, 2, 2, 'flormar REBORN FOUNDATION SUNSCREEN BROAD SPECTRUM', 15000, 50),
(427, 2, 2, 'Hand Sanitizer', 15000, 50),
(428, 2, 2, 'Mucinex', 15000, 50),
(429, 2, 2, 'DawnMist Alcohol Gel Hand Sanitizer', 15000, 50),
(430, 2, 2, 'Treatment Set TS344001', 15000, 50),
(431, 2, 2, 'Harris Teeter', 15000, 50),
(432, 2, 2, 'care one clearlax', 15000, 50),
(433, 2, 2, 'ENALAPRIL MALEATE', 15000, 50),
(434, 2, 2, 'Timolol Maleate', 15000, 50),
(435, 2, 2, 'Sani Wipes', 15000, 50),
(436, 2, 2, 'diclofenac sodium', 15000, 50),
(437, 2, 2, 'Constipation Relief', 15000, 50),
(438, 2, 2, 'Gabapentin', 15000, 50),
(439, 2, 2, 'ETODOLAC', 15000, 50),
(440, 2, 2, 'Natural Sunscreen Broad Spectrum SPF 30', 15000, 50),
(441, 2, 2, 'Queen Perfume Hair Conditioner', 15000, 50),
(442, 2, 2, 'Furosemide', 15000, 50),
(443, 2, 2, 'La Roche-Posay Laboratoire Dermatologique Anthelio', 15000, 50),
(444, 2, 2, 'CENTER-AL - PHLEUM PRATENSE POLLEN', 15000, 50),
(445, 2, 2, 'ProAmatine', 15000, 50),
(446, 2, 2, 'FixMySkin Healing Balm Vanilla Fragrance', 15000, 50),
(447, 2, 2, 'Baclofen', 15000, 50),
(448, 2, 2, 'Ropinirole Hydrochloride', 15000, 50),
(449, 2, 2, 'Nice', 15000, 50),
(450, 2, 2, 'Oxygen', 15000, 50),
(451, 2, 2, 'Glimepiride', 15000, 50),
(452, 2, 2, 'Alcohol Prep Pad', 15000, 50),
(453, 2, 2, 'Calcium', 15000, 50),
(454, 2, 2, 'ReEn Hairloss Clinic Jahajin Shampoo for Sensitive', 15000, 50),
(455, 2, 2, 'Fluoxetine', 15000, 50),
(456, 2, 2, 'Moisture Renew', 15000, 50),
(457, 2, 2, 'Quetiapine Fumarate', 15000, 50),
(458, 2, 2, 'Baclofen', 15000, 50),
(459, 2, 2, 'Basic Detox Core Formula', 15000, 50),
(460, 2, 2, 'Clarite 4', 15000, 50),
(461, 2, 2, 'Halsa Pyrithione Zinc Dandruff', 15000, 50),
(462, 2, 2, 'BENZOYL PEROXIDE', 15000, 50),
(463, 2, 2, 'LBEL HYDRATESS', 15000, 50),
(464, 2, 2, 'Aromafields Plumeria Scented Antibacterial Hand Wa', 15000, 50),
(465, 2, 2, 'Degree', 15000, 50),
(466, 2, 2, 'Magnesium Sulfate', 15000, 50),
(467, 2, 2, 'Ziprasidone Hydrochloride', 15000, 50),
(468, 2, 2, 'topcare Ibuprofen Cold and Sinus', 15000, 50),
(469, 2, 2, 'Oxygen', 15000, 50),
(470, 2, 2, 'Torisel', 15000, 50),
(471, 2, 2, 'Sertraline Hydrochloride', 15000, 50),
(472, 2, 2, 'Native Green Foaming Hand Sanitizer', 15000, 50),
(473, 2, 2, 'DELFLEX', 15000, 50),
(474, 2, 2, 'AMRIX', 15000, 50),
(475, 2, 2, 'Sani Guard Alcohol Free', 15000, 50),
(476, 2, 2, 'Penicillin V Potassium', 15000, 50),
(477, 2, 2, 'Adidas', 15000, 50),
(478, 2, 2, 'Equate One Step Corn Remover Pad', 15000, 50),
(479, 2, 2, 'PHENERGAN', 15000, 50),
(480, 2, 2, 'Levothyroxine Sodium', 15000, 50),
(481, 2, 2, 'Elcure Ato', 15000, 50),
(482, 2, 2, 'Gabapentin', 15000, 50),
(483, 2, 2, 'Haloperidol', 15000, 50),
(484, 2, 2, 'Fluocinonide', 15000, 50),
(485, 2, 2, 'Potassium Chloride in Sodium Chloride', 15000, 50),
(486, 2, 2, 'Enoxaparin Sodium', 15000, 50),
(487, 2, 2, 'risperidone', 15000, 50),
(488, 2, 2, 'FRESH JUICE C', 15000, 50),
(489, 2, 2, 'Tanda pearl professional whitening', 15000, 50),
(490, 2, 2, 'HEB', 15000, 50),
(491, 2, 2, 'Nitrofurantoin Monohydrate/ Macrocrystalline', 15000, 60),
(492, 2, 2, 'HAND AND NATURE SANITIZER', 15000, 10),
(493, 2, 2, 'VITALUMIERE AQUA', 15000, 50),
(494, 2, 2, 'Burkhart', 15000, 50),
(495, 2, 2, 'Lorazepam', 15000, 50),
(496, 2, 2, 'Pioglitazone', 15000, 50),
(497, 2, 2, 'CD DiorSkin Forever Flawless Perfection Fusion Wea', 15000, 50),
(498, 2, 2, 'Iris Antimicrobial Hand', 15000, 50),
(499, 2, 2, 'Premarin', 15000, 50),
(500, 2, 2, 'Phentermine Hydrochloride', 15000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_telp`, `alamat`, `nama`, `email`, `pekerjaan`) VALUES
(1, '0878877656', 'surabaya', 'slamet', 'slamet@gmail.com', 'karyawan swasta'),
(2, '0899998877', 'surabaya', 'faris', 'faris@gmail.com', 'mahasiswa'),
(3, '098586948596', 'rumah', 'reza', 'reza12@gmail.com', 'siswa'),
(4, '0889877767', 'Sidoarjo', 'MARCHELLA SAFIRA AULIA SANTOSO', 'marchel@gmail.com', 'mahasiswa'),
(5, '08866778777', 'Sidoarjo', 'dewa nirwana', 'dewanirwana@gmail.com', 'mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `id_poliklinik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`id_poliklinik`, `nama`) VALUES
(1, 'Poli Umum'),
(2, 'Poli Gigi');

-- --------------------------------------------------------

--
-- Table structure for table `regristrasi`
--

CREATE TABLE `regristrasi` (
  `id_regristrasi` int(11) NOT NULL,
  `id_poliklinik` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_regristrasi` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regristrasi`
--

INSERT INTO `regristrasi` (`id_regristrasi`, `id_poliklinik`, `no_induk`, `id_pasien`, `tgl_regristrasi`, `status`) VALUES
(1, 1, 456, 1, '2021-12-11', 0),
(2, 1, 456, 2, '2021-12-13', 0),
(5, 1, 456, 3, '2021-12-28', 0),
(7, 1, 456, 4, '2022-01-01', 0),
(8, 2, 456, 5, '2022-01-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksiobat`
--

CREATE TABLE `transaksiobat` (
  `id_transaksi` int(11) NOT NULL,
  `id_regristrasi` int(11) NOT NULL,
  `no_induk` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksiobat`
--

INSERT INTO `transaksiobat` (`id_transaksi`, `id_regristrasi`, `no_induk`, `tgl_transaksi`, `status_transaksi`) VALUES
(1, 1, 321, '2021-12-11', 1),
(5, 2, 321, '2021-12-20', 1),
(6, 1, 321, '2021-12-28', 1),
(7, 1, 321, '2021-12-28', 1),
(8, 5, 321, '2021-12-31', 1),
(9, 7, 321, '2022-01-01', 1),
(10, 8, 321, '2022-01-02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indexes for table `regristrasi`
--
ALTER TABLE `regristrasi`
  ADD PRIMARY KEY (`id_regristrasi`),
  ADD KEY `id_poliklinik` (`id_poliklinik`),
  ADD KEY `no_induk` (`no_induk`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `transaksiobat`
--
ALTER TABLE `transaksiobat`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_regristrasi` (`id_regristrasi`),
  ADD KEY `no_induk` (`no_induk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regristrasi`
--
ALTER TABLE `regristrasi`
  MODIFY `id_regristrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksiobat`
--
ALTER TABLE `transaksiobat`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD CONSTRAINT `detailtransaksi_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `detailtransaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksiobat` (`id_transaksi`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis` (`id_jenis`),
  ADD CONSTRAINT `obat_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `regristrasi`
--
ALTER TABLE `regristrasi`
  ADD CONSTRAINT `regristrasi_ibfk_1` FOREIGN KEY (`id_poliklinik`) REFERENCES `poliklinik` (`id_poliklinik`),
  ADD CONSTRAINT `regristrasi_ibfk_2` FOREIGN KEY (`no_induk`) REFERENCES `admin` (`no_induk`),
  ADD CONSTRAINT `regristrasi_ibfk_3` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);

--
-- Constraints for table `transaksiobat`
--
ALTER TABLE `transaksiobat`
  ADD CONSTRAINT `transaksiobat_ibfk_1` FOREIGN KEY (`id_regristrasi`) REFERENCES `regristrasi` (`id_regristrasi`),
  ADD CONSTRAINT `transaksiobat_ibfk_2` FOREIGN KEY (`no_induk`) REFERENCES `admin` (`no_induk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
