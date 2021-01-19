-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 02:30 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinta`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIP` varchar(20) NOT NULL,
  `NIDN` varchar(45) DEFAULT NULL,
  `NAMA` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `No_hp` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `idRole` int(2) DEFAULT NULL,
  `telegram_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NIDN`, `NAMA`, `Alamat`, `No_hp`, `password`, `email`, `idRole`, `telegram_id`) VALUES
('197008311998031001', '0031087001', 'Moh. Munih Dian W, S.Kom,MT', 'Jember', '123456789', '$2y$10$F1NvhGoBNRexnHwju3t7juyU3QX9qkp9aOMI4NwqdxezLXBNhM7T2', '', 11, 0),
('197104082001121003', '`0008047103', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Jember', '123456789', '$2y$10$bfkTeoAVQKoWW/VcO.bVN.h/CFqDw.gfiapFAffVqmZ5FJDc82n4S', '', 8, 0),
('197110092003121001', '0009107104', 'Denny Trias Utomo, S,Si, MT', 'Jember', '123456789', '$2y$10$8AsSB5vCQvuhdZBLGY6J5.cV5W1OGEP87ia.KVLC1Zkujj1Sw1ODO', '', 5, 0),
('197405192003121002', '0019057403', 'Nugroho Setyo Wibowo, ST,MT', 'Jember', '123456789', '$2y$10$nMcWTFOhu56VuBH24E90CeHVUDbb8br6wEGewvXNHA5GZ5nhZMALi', '', 6, 0),
('197709292005011003', '0029097704', 'Didit Rahmat Hartadi S.Kom , MT', 'Jember', '123456789', '$2y$10$c8zsQOLjtPmvVr/4Jf1UJ.P97t/jirmyeq.ZIaF2ObLzlceMF/ady', '', 1, 0),
('19780816 200501 1 00', '0016087806', 'Beni Widiawan, S.ST, MT', 'jember', '123456789', '19780816 200501 1 002', '', 7, 0),
('197808172003121005', '0017067306', 'Ely Mulyadi, S.E., M.Kom.', 'Jember', '123456789', '$2y$10$Un73e/VNKX/DGNvzB7FJvOuXBNrHX0Y5YMaWwTduGmqknIqUw18SW', '', 2, 0),
('197808192005012001', '0019087803', 'Ika Widiastuti, S.ST , MT', 'Jember', '123456789', '$2y$10$kH7rfnAaldA3BqYxWVUO7O/8MVMu1/GubuXYNQuhGPWHxXcRTBwGW', '', 7, 0),
('197810112005012002', '0011107802', 'Elly Antika, ST, M.Kom', 'Jember', '123456789', '$2y$10$NLekdmqo7EjLqvgfK8B1aesQqo7p2XgInfVRihEOs4KMZqiEiMvKy', '', 7, 0),
('197909212005011001', '0021097903', 'I Putu Dody Lesmana, ST,MT', 'Jember', '123456789', '$2y$10$WlCBELecPidXd6u9a7t6wezZqcCYvSoek8/r7ETVZ.79pPga7jNym', '', 7, 0),
('198005172008121002', '0017058003', 'Dwi Putro Sarwo S S.Kom, M.Kom', 'Jember', '123456789', '$2y$10$OYBP8exucIzgPONb3BOyEe3McasYkDjF8Rri4XWI9h2tCxOyUq5Sa', '', 2, 0),
('198012122005011001', '0012128001', 'Prawidya Destarianto , S.Kom ,MT', 'Jember', '123456789', '$2y$10$QlKfKi7ZNHK/PZRe3T0enevuu4HrRvRIogQ2.wW3VBymjPOfUfJvC', '', 7, 0),
('198101152005011011', '0015018103', 'Nurul Zainal Fanani, S.ST, MT', 'Jember', '123456789', '$2y$10$X62kNMdDc964tJfvoEPDlOL/kU.NC/KRUjyhvly7Zjb2LhyL7QJj6', '', 6, 0),
('198106152006041002', '0015068202', 'Syamsul Arifin , S.Kom., M.Cs.', 'Jember', '123456789', '$2y$10$1sxYpt9ryLSfrDSvcBCTuOpf0JBpHnl2Fcf1EKAGKwP7Z05aDkyuK', '', 4, 0),
('198301092018031001', '', 'Hermawan Arief P. S.T.,MT', 'Jember', '123456789', '$2y$10$CjmHQxgYNpxv876VbVZrHeeZGY0jz5S3LEP0pCzd4F82m50XSR70a', '', 2, 0),
('198302032006041003', '0003028302', 'Hendra Yufit Riskiawan, S.Kom, M.Cs', 'Jember', '123456789', '$2y$10$ep5zMOVswk83iBl9Ca8tN.Tq1VO80cQcffweVtW5WnYiNWoOb.PP.', '', 3, 0),
('198511282008121002', '0028118502', 'Aji Seto Arfianto, S.ST, MT', 'Jember', '123456789', '$2y$10$MWlm1IazMU6.BpGzssGdc.e27SttNevyVaE1thBwm7SfLNG/UlQw.', '', 7, 0),
('198606092008122004', '`0009068601', 'Nanik Anita M. ,S.ST,MT', 'Jember', '123456789', '$2y$10$W4bEzBSgAAOXkbMfX5m7NuI3EvtNeNXevqkR5Tjj2Haf2evKQ2ZeC', '', 2, 0),
('198608022015042002', '0702088601', 'Ratih Ayuninghemi S.ST, M.Kom', 'Jember', '123456789', '$2y$10$F8Hc9K4vmIgqJ3Hfhq69Ee8IdPE2e2njHP2HwAz31eMcn2a69cxJy', '', 7, 0),
('198801172019031008', '0017018808', 'I Gede Wiryawan, S.Kom., M.Kom.', 'Jember', '123456789', '$2y$10$5oVfzGv.Z7BiWo0uJPnIUe6FkM2VH9a/sFBwgGaW460cMzoESPRZe', '', 2, 0),
('198807022016101001', '', 'Husin, S.Kom., M.MT.', 'Jember', '123456789', '$2y$10$wIkk/oXADm1Y1UZ/mHSBvexONPmjwMa0BEy/ImnlDTpqlwot/9xvG', '', 2, 0),
('198903292019031007', '`0029058906', 'Taufiq Rizaldi S,ST,MT', 'Jember', '123456789', '$2y$10$RZFh/PBz78hf2Ff0VNetNu4r9Ki/25Z0G7z.zvEVWN0XvoCTVX4fW', '', 2, 0),
('198907102019031010', '0010078903', 'Ery Setiyawan Julev Atmaji,S.Kom,M.Cs', 'Jember', '123456789', '$2y$10$BIGeqqqKrmHSNVeKvQ7OP.79hvbNVxnmy9hcvFhebyRDWt/Wv8asu', '', 8, 1138930287),
('199002272018032001', '8868110016', 'Trismayanti Dwi P ,S.Kom, M,Cs', 'Jember', '123456789', '$2y$10$qFpE/0objW618aipOZp4gOLnQpYmzSLqdBMljnmgeqIRfmTNPbNny', '', 2, 0),
('199103152017031001', '', 'Syamsiar Kautsar S.ST., MT.', 'Jember', '123456789', '$2y$10$QC.lcgXV/EpNHJqRHhWLCuyWvHSXK2NN2WqCYkC0c11nlBJiLvIwK', '', 7, 0),
('199104292019031011', '0029049102', 'Faisal Lutfi Afriansyah S.Kom.,M.T.', 'Jember', '123456789', '$2y$10$7iP/mfmRT9SbjdLAdRAd2eUK/uh2JKBDLJsqUr7F3SAH3atVGVmRu', '', 1, 0),
('199112112018031001', '', 'Khafidurohman A., S.Pd., M.Eng.', 'Jember', '123456789', '$2y$10$wF5/Fe1WfJRvVMacGxSyBeWqtAnlK0xBmguZ0w15h09DOT0W5AK7K', '', 7, 0),
('199203022018032001', '', 'Zilvanhisna Emka Fitri ST., MT.', 'Jember', '123456789', '$2y$10$frHWrNt5OZNRTZK6HYvoie9Lpe4jq45wbh1aH22BnlKjZynmoHPHK', '', 7, 0),
('199205282018032001', '', 'Bety Etikasari, S.Pd., M.Pd.', 'Jember', '123456789', '$2y$10$IEJ5OSNHiPD5xI4coN7Pv.60kzHjO08Ktcrr.zDradF/Mmr9vm6XC', '', 7, 0),
('199408122019031013', '0012089401', 'Mukhamad Angga Gumilang, S. Pd., M. Eng.', 'Jember', '123456789', '$2y$10$JD4xbHrj5Tx2QeI/KL2zS.CQFwvPQPeXXEIOyPGkdwOQgoguVeFXm', '', 2, 0),
('6', '0015117106', 'Adi Heru Utomo, S.Kom, M.Kom', 'Jember', '123456789', '$2y$10$MAoTQ2kjQ8tjp0u2k1Fz9eMAxGXsPGPExAay4M.9HoNK6fkgjxsWS', '', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(9) NOT NULL,
  `NAMA` varchar(45) DEFAULT NULL,
  `Alamat` varchar(45) DEFAULT NULL,
  `Tahun_masuk` year(4) DEFAULT NULL,
  `Prodi_idProdi` int(2) NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `telegram_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `Alamat`, `Tahun_masuk`, `Prodi_idProdi`, `tanggallahir`, `password`, `email`, `no_hp`, `telegram_id`) VALUES
('Bahtiar A', 'E41171467', 'Dusun rimpis Rt 03 Rw 01 sumbersari srono ban', 2017, 1, '0000-00-00', '$2y$10$8Dxp9qtYcXtw0OtztArGyevSTRF.67Vr7Sqqi2PqOQLvxKoex4/zq', '', '', 0),
('Budi Yuni', 'E41170917', 'Jl. Wijaya Kusuma No.36 RT.03 RW.04 Dawuhan', 2017, 1, '0000-00-00', '$2y$10$b.BVptSCynVZ5.s7VzZt8eOnoocG0ln1BpjPmp9FNFVwFkMMSHQ8e', '', '', 0),
('E41160077', 'Anas Abiem Bahar', 'Dusun krajan 1 RT 004 RW 002  ', 2016, 3, '1997-10-09', '$2y$10$8SQBoErXC8sF56XFeiSdT.wTZ5OCHas8ULXP6YYsjMP8hLTzS3v0C', '', '', 0),
('E41160083', 'Intan Kemala Pertiwi', 'Desa Juglangan RT.01 RW.04 Kec.Panji ,Situbon', 2016, 3, '1997-07-12', '$2y$10$9jN/4ZZ2hU/U7nRya7yA0OpdfAbMcXOkIZGl6pxFx/fJKgqOg31ja', '', '', 0),
('E41160104', 'Mohammad Naufal Ramadhan ', 'Jl.Imam Bonjol No 725 RT. 13 RW.3 Gg. Al-Irsy', 2016, 3, '1998-12-01', '$2y$10$RTPKYlnNePWarH/wVTB4ju5ygB35uN9ycc8zetT80lmlusr6gH.86', '', '', 0),
('E41160130', 'NURUL DWI ZAINITA', 'Dusun Kancoan RT2/RW2 Sukokerto Pajarakan / 6', 2016, 3, '1997-08-17', '$2y$10$PnJLpAxnuHaukekujo4LPe4KFWYMAXV3RwvCEYok/t8d.Y19Yub7m', '', '', 0),
('E41160141', 'Andis Trihariprasetya', 'DS.GUCIALIT RT 4 RW 3 LUMAJANG', 2016, 3, '1998-03-20', '$2y$10$PhB7DSqxQJe.OLkMmH7zgeeaDGUk3T3mlqmU75Oe3y8lVokIH5s8e', '', '', 0),
('E41160161', 'Selvi marfiyanti', 'DESA TLOGOSARI RT 07 RW 02 KEC.SUMBERMALANG K', 2016, 3, '1999-11-03', '$2y$10$Q6gTsLpsidiKjvDlu7Csj.yIXbRS1/jA3aZxwbEPFtqQLKoC3LYvy', '', '', 0),
('E41160167', 'Rizky Cahyasanti', 'JALAN LETJEN PANJAITAN GANG XII NO.5968122', 2016, 3, '1998-01-18', '$2y$10$XUn1Ur/yv8tmcuhHY82NsuISZFwiLqNdI0eVEezl1l.CKbmRFA0sW', '', '', 0),
('E41160182', 'Christopher Nanda Jonathan', 'JL. PANGLIMA SUDIRMAN NO.27 RT/RW: 032/010DES', 2016, 3, '1997-08-26', '$2y$10$clQnZyc0ofoE3qiiuQrgPuVV/WFiYVirT6Lf829OutGXj4mMeKBfO', '', '', 0),
('E41160224', 'Ulandari Susika', 'perumahan bumi bulu indah a-8, kraksaan, prob', 2016, 3, '1997-10-18', '$2y$10$Kp5dRW.lQM07Rb66Xob8R./U2EAzwrMFcAzl9I8hd5D/MUimAKP/e', '', '', 0),
('E41160227', 'Lutfi Auliasari ', 'sumber kadut, balung kidul , balung, jember ', 2016, 3, '1998-05-23', '$2y$10$alY2.1.xUEiKq5.RD32lhOrPPd5sMpekfrNApc4dlUFX.SrxE6rKO', '', '', 0),
('E41160231', 'Niko Sebastian', 'RT 05/I dusun Mulyoasri, desa Sumbermulyo 684', 2016, 3, '1998-09-20', '$2y$10$isVE8PfwJkmhy4YArKXB6.ExHGbc.jk1/VLu09NQl/ENX9w0LA6A6', '', '', 0),
('E41160237', 'Eldwin Hendrasiva', 'PERUM TEGAL BESAR PERMAI 01 BLOK AA-19', 2016, 3, '1997-12-28', '$2y$10$3io8Kx4ZG.56lbjsqqCsh.BR9tZlEgyp8LuThDcyptZEcl64Nm6XK', '', '', 0),
('E41160242', 'Rifrinda afianti maghfiroh', 'Jalan Kauman 142 Mangli Kecamatan Kaliwates K', 2016, 3, '1998-02-13', '$2y$10$PnjsCHfSCLhJvmnCWC9d1OedyumzxKWJEk41XJ40XwCXWzp20hFvi', '', '', 0),
('E41160295', 'Rangga Akhir Aprian', 'JL.Asrama Haji 3, NO.III Tuban', 2016, 3, '1997-03-10', '$2y$10$XK0eKUpNcmNjYJDswwfYc.jb1CtQTAd7XszQwS7jCWnX/ZN98/yoe', '', '', 0),
('E41160331', 'Achmad Sultoni Romadhon', 'Jl. Darmawangsa Perum Graha Rambi Asri A5', 2016, 3, '1999-01-01', '$2y$10$nS9XuAduBxASTOTCXgVvFOXbNzeDsVkXkI2J7RWIDY.Y6ioG1KJQy', '', '', 0),
('E41160344', 'Linda Dwi Wahyuningsih', 'SEPANJANG WETAN DEPAN PUSKESMAS GLENMORE. RT ', 2016, 3, '1998-03-11', '$2y$10$nMp0mTfFWzqFyFcWToVwjOYut9ZlR4PUiNPx5pib6pOtRJgdCfOX6', '', '', 0),
('E41160352', 'Muhammad Fendrik Nurul Jadid', 'Jl.Rengganis no 5 RT 19 RW 07, Kembang, Bondo', 2016, 3, '1997-11-13', '$2y$10$B0ZST776UW4z/QY.i0ghzeRlfHydxCzgX.Wa1QljFtUEd3RzlyqZu', '', '', 0),
('E41160388', 'Muhammad Yusuf', 'LN. SAWO 3 NO 26 LINGK. BARATAN TIMUR - PATRA', 2016, 3, '1998-01-31', '$2y$10$HKyGvC9B.1AZFPVTJbhHi.sqCSS9reiFSuK4o.aCglmGs.o5mMLHO', '', '', 0),
('E41160460', 'Firdaustinovida Aisyah', 'JL. KH. MANSYUR 9 RT23 RW6 BLINDUNGAN, BONDOW', 2016, 3, '1997-11-22', '$2y$10$cBUJclw9C6e4MbQnT9LQVO6pk47ZYSvrV21qBQbHiBnfWcEixicBi', '', '', 0),
('E41160474', 'VYAN ARY PRATAMA', 'Dsn Gunung Remuk RT 02 RW 04 Desa Ketapang Ke', 2016, 3, '1997-12-25', '$2y$10$nfxBz6UlArIzph4ZZYmT/.QxFaxjGBlvzWdxeAAMrl.UUDVALaaSW', '', '', 0),
('E41160482', 'Panji Budi Satria', 'JL. BASUKI RAHMAT LINGKUNGAN GUMUKSARI/ 68133', 2016, 3, '1997-12-21', '$2y$10$xesv4Z4BsJbkxBjpB664nep./k8pWZfQx5JBeWqWYICRHp13.2G5G', '', '', 0),
('E41160483', 'Agung Rahmatullah ', NULL, 2016, 3, '1970-01-01', '$2y$10$tYGF40qOgUPrL0D9lBsqHeAdmPdxMMyvbyvZz5xDK/JyWGSl47FhW', '', '', 0),
('E41160510', 'Muhammad Bahrul Arif', 'RT 03 RW 02 Dsn. Kebonagung Ds. Kebonagung Ke', 2016, 3, '1998-09-15', '$2y$10$asFCYnT8Hi9D3OdzsFrylOrCK7GRcltU7BWTT3uNkJ0TH8fvOwDZO', '', '', 0),
('E41160513', 'Aldefa Lingga Prayoga', 'Dsn.Awar -Awar', 2016, 3, '1997-07-31', '$2y$10$OEWLjsZp.kZe0bputiRE8uYt8WXJ0D0dkymBa/v62wZwErEmAB2TC', '', '', 0),
('E41160519', 'Zavira Wahyu Dewi Pratiwi', 'JALAN UTOMO NOMOR 14 RT.001/RW.005 DESA PAKIJ', 2016, 3, '1997-08-09', '$2y$10$3Jnp7OMd0vG04HkeqvMCveTw3cUrAQ2.QJJpBY0jlTIsrihGrtG36', '', '', 0),
('E41160603', 'Roifatul Munawaroh', 'DUSUN GONDOSARI RT 001 RW 011 DESA ROWOTENGAH', 2016, 3, '1998-04-01', '$2y$10$fOZ6YrQZkmPWmU.a4V7gxudUqwzMBwY3igK87kbbqLLjq6pFbzne6', '', '', 0),
('E41160605', 'Ardhan Febriansyah', 'Perumahan Tegal Besar Permai I blok T-30     ', 2016, 3, '1998-05-02', '$2y$10$k16H7cXHU18UNNqAyvbU2e1A78MYmR8PwNb7CLltJqiicAZArDpYa', '', '', 0),
('E41160660', 'LUFRI RAIS MAULANA', 'Dukuh Rendole RT 1 RW 1, Desa Muktiharjo, Kec', 2016, 3, '1999-06-25', '$2y$10$p9y1vAbyze3TrwdrLcqpQOLTPWfAr3O3dFYJdItjGCaeFqjOzXmDq', '', '', 0),
('E41160695', 'Barorotus Sulusayil Laili', 'JL. ARGOPURO 176 MANGGISAN-TANGGUL / 68155 ', 2016, 3, '1997-08-19', '$2y$10$D4df7Knk/ElYB54OKDjKIu3OLEh6CbrUDi8JwW6KXf2l5ogFQ.dlC', '', '', 0),
('E41160701', 'Ahmad Rizki Rifai', 'Jl. Kaliurang Gg. Swadaya 07 / 68121 ', 2016, 3, '1997-07-13', '$2y$10$YG5Cgo.PrC4o608WigL4N.ocEksw35r4aGIfgUOfF7KVIzOzEkG9C', '', '', 0),
('E41160711', 'Gea Ayu Wulandari', 'JL. GAJAH MADA XXXI 153 JEMBER / 68133  ', 2016, 3, '1997-08-16', '$2y$10$JZlm8zAW/8BuymyAdqBwQO1KSpVm6WMQzQ9Uw2mpBnTJi2gS9a4Y2', '', '', 0),
('E41160728', 'Najmi nurus shofi', 'CAKRU - KENCONG - JEMBER / 68168 ', 2016, 3, '1998-01-10', '$2y$10$vtqdmCaIppqyLw5KFAosD.rV.iKZaC0OTUTuzoFpuc51BX5BNLtc6', '', '', 0),
('E41160729', 'M. Wahyu Asharul Falah', 'TEGALWANGI JATILAWANG UMBULSARI RT 003 RW 010', 2016, 3, '1999-06-05', '$2y$10$yM1xNlrtQje6OzwMg9ssKeLvD8/Ow7tbrlucNz.ktsUdsWkk5dIUK', '', '', 0),
('E41160732', 'Nanda Ega', 'Jl. A. Yani Gg. B No. 22 Bondowoso / 62811 ', 2016, 3, '1997-04-05', '$2y$10$wEIxwdQXeql/DNkWRja2weALkJW.p/DMMVfoMMudsxf7igr7Z9ABC', '', '', 0),
('E41160737', 'yunita eri aruma', 'Dsn: Krajan Rt:001/Rw:009 Desa: Kedungringin ', 2016, 3, '1998-06-25', '$2y$10$RX/ASnM1EnX0ih1hQvVTv..BdsBFRUXWttUiPE3/B0euBOXrdsCbO', '', '', 0),
('E41160765', 'Dian Pusparini', 'DSN. RUMPING, RT03/RW05, KEC. CLURING, KAB. B', 2016, 3, '1998-08-09', '$2y$10$Q.nPqXBNkHhn3.3e8jSd6OvTv8FLQfyhmdZmxNR2dv5yq.eFU8LLm', '', '', 0),
('E41160775', 'Danny Sofiansyah Akbar', 'JLN WALI KOTA GATOT NO 154/ 67213', 2016, 3, '1996-05-06', '$2y$10$X.j7CRan/jjw/gL5mPPdJ.KSyibrqtnDzAliZFynW.gfOp7K0zB5G', '', '', 0),
('E41160825', 'Kursita Dewi safitri', 'jalan mastrip 4 nomor 108 / 68126', 2016, 3, '1997-04-22', '$2y$10$8BIkEcbMUh0CfcDWwK/WYO9BiyaXyoktCIuPoVAfj5K5vQziIb7qC', '', '', 0),
('E41160849', 'Deka Permana Alfiansyah', ' Dusun Banjarejo RT 002/RW 002, 68166', 2016, 3, '1998-05-11', '$2y$10$QeA9U8UyxFDUEU51GSUccuFVFQD.QUSzO10NKUz33UkNDgtnNSPsO', '', '', 0),
('E41160914', 'Avinda Renaldi Alamsyah', 'DS. POJOK RT.05/RW.02, KEC. KAWEDANAN, KAB. M', 2016, 3, '1998-10-30', '$2y$10$e6lb664b5msZGrfJpawln.KajD4YMw.NE4p81wVMCFNgz.L5b5wtm', '', '', 0),
('E41160978', 'Nova An-Nisa Azizah', 'sempu krajan kalisetail, rt/rw 01/01 ', 2016, 3, '1997-11-21', '$2y$10$kIHAMVhSEIqTzkA7RJmJfeSN8nh3nDokpe9oSkx4eNi2VzefBKYSG', '', '', 0),
('E41161052', 'Farida Ayu Dusturiya', 'Perum Mastrip Blok Z No 5/ 68121  ', 2016, 3, '1997-11-12', '$2y$10$FSn6ORN7INJK1gM.1X/eFeiUE5CpaIHA/gg4TH0iX4MFGNNortrQy', '', '', 0),
('E41161056', 'Indri Ayu Saputri', 'Dusun Kedung Langkap RT 003 RW 011 Desa Krato', 2016, 3, '1998-08-15', '$2y$10$UIkWhzY391Pzub/inI0hbuVftSn3upHVvA1NxUG9VpYlp2HG1DLdK', '', '', 0),
('E41161062', 'Esa sakti', '\'desa semekan utara,kedit,panarukan,situbondo', 2016, 3, '1997-06-18', '$2y$10$YhgVnSvmD.bJeQqsrOTox.rLDjJW3G8/3oCv9o.1OscJ..QULqBHu', '', '', 0),
('E41161091', 'Aisyah Safitri', 'JL. Manggar III/22 ,RT02/RW024, GEBANG DARWO ', 2016, 3, '1999-01-19', '$2y$10$y4CATOD6v.gA0YLIaqFkF.qH/2I/SzjMJc.FYNlUTkHosBzWlFPxe', '', '', 0),
('E41161100', 'Deny fadhilah akbar', 'JL NANAS NO 35 PATRANG JEMBER/68111  ', 2016, 3, '1997-03-10', '$2y$10$mdp7a18j4dWQACPXLlWwfuBaEd6y7t1pqLhRwLWUY9ZSg4m37XjL.', '', '', 0),
('E41161120', 'Fachry Asy\'ari', 'Perum Bumi Mangli Permai blok IB-11 Mangli Ka', 2016, 3, '1997-03-07', '$2y$10$DxyXdpvuHAAlEmfGZD0E3.ZsdeYjCUPftpSPRgg0ZvfXeHeGIor7C', '', '', 0),
('E41161132', 'AL FARIS CAHYA PRATAMA', 'dusun sumberanjl sentot prawiro no 3. RT 1 / ', 2016, 3, '1998-04-27', '$2y$10$1W8qGNl.mvaGQINLmGxO0upjp3EGyMPnMvzy3RUM8tQdLCxfnOvrq', '', '', 0),
('E41161145', 'Ahmad Shafry Shiddiq', 'JL. GAJAH MADA IV/40, KALIWATES, JEMBER ', 2016, 3, '1998-01-17', '$2y$10$xu4ZifsBpc26Ju3vad.93.mFzy47X5wtxSzq4tj0oh0pfrZDK69vW', '', '', 0),
('E41161178', 'Cahya Affrillah Prasetyo', 'PERUM KALIURANG CLUSTER BLOK D/ NO.6', 2016, 3, '1997-06-29', '$2y$10$u.jxChuzJ8nZcy/QAlZi/.eBuH/ehysE4oykp2lN54wfjJpAd4OZm', '', '', 0),
('E41161189', 'Moh. Fajar Assidiq', 'dsn Kabat Mantren, RT/RW 01/01, Kabat Banyuwa', 2016, 3, '1997-06-30', '$2y$10$1vn2RhWp1KBj7MwGC5wRDutV1qK5asreXInpp4rNoSb37p4cgLSWK', '', '', 0),
('E41161208', 'Haqolby Bunga Ditasari Putri', 'Dusun Wedusan RT 040 RW 007 Pringgowirawan Su', 2016, 3, '1998-03-21', '$2y$10$sdIXSA32oz5A3ifkWh3Nhe.ct59vRh84d41nYfpcD/eQqT/Yax5CK', '', '', 0),
('E41161211', 'REZHI SYLVIA AGUSTINA', 'DUSUN KRAJAN RT / RW : 002 / 002 DESA KANDANG', 2016, 3, '1997-08-21', '$2y$10$7htJOSNNBl0/qR0oz78y7uqH7PefPPnLPN8GNV2VlueDu/T8Lpfma', '', '', 0),
('E41161213', 'AAN KHOIRUL SHOLEH', 'Jalan Raya Selombong, Rt 06 - Rw 02 Ds. Pengg', 2016, 3, '1997-11-24', '$2y$10$7F4PdBMa57usraNEHyOPnOzdnMNNvSRYEXzgy0oxoJvi8gOIBOPem', '', '', 0),
('E41161215', 'Hendra laksmana', 'Perumahan Indah Pemali Blok B-4 / 68132', 2017, 1, '1997-06-09', '$2y$10$nCc/TiWpDmD5GNQEsyrUHubMDXE87amTWUCHVQy/4xyjb0RI3LR82', '', '', 0),
('E41161219', 'Anggita Kusumaningrum', 'Jalan Sumatra Gang Kenanga no 40 Jember 68121', 2016, 3, '1997-10-19', '$2y$10$8SXHlAHkg2mN/iCamswSeecvB/xqa0DUuKikEovI5d.pKMfPIRCrW', '', '', 0),
('E41161281', 'Damar Novtahaning', 'Jl. S. Yudodhiharjo Gg. Romantika no.277 Bond', 2016, 3, '1997-11-13', '$2y$10$bgMjHxgWuha0IZZ/4gT6le/zZpxFAOEeymz8rE2F5W/62NIdzohJ.', '', '', 0),
('E41161297', 'Fajar Firmansyah Amirudin', 'Jl. Senduro, Dusun Selokambang, Desa Purwoson', 2016, 3, '1997-12-12', '$2y$10$UsNBDK0NkcmpSVGynB/ZyufdWtwoYzlwoMEA1npNPkHc3ItyFgaxq', '', '', 0),
('E41161299', 'Mohammad Arif Khoiruman', 'Jl. Raya Karangbendo RT 04 RW 09, Tekung, Lum', 2016, 3, '1998-10-29', '$2y$10$n8NVFhyqMsJOVKKgQHqnte.x3ScxWTISfuFVD4vn50RAafzQRMAqy', '', '', 0),
('E41161315', 'Rifqi Hakim Ariesdianto', 'Dusun Krajan IRT 01 / RW 011JOMBANG - JEMBER', 2016, 3, '1999-03-05', '$2y$10$Q1ky69emoVCjA3hBxO.VoulHm4klyKwGElXyxjRvhE5H14IGEQHyi', '', '', 0),
('E41161322', 'Fahim Alfiyan', 'Jl. Mayjend Panjaitan No.57RT 04 . RW 01DABAS', 2016, 3, '1998-02-19', '$2y$10$VFhAEBMedpQ/jZATps.Eqe0PYXjxF0gjCMQwc2x5lZBDD92w0w1/u', '', '', 0),
('E41161324', 'Warda Novitasari', 'DUSUN KRAJAN SELATAN RT/RW 001/008 PATEMON PA', 2016, 3, '1997-11-25', '$2y$10$a6oarJhzedbWYfAXEigLSOzIqMkRyCM/XaNh.TQk4Ce5MX5kqTtdC', '', '', 0),
('E41161340', 'Safira Azizah Firdaus', 'JL.KH.IMAM BAHRI RT02/02 MARON GENTENG KULON,', 2016, 3, '1998-02-02', '$2y$10$zOXP6ZxRV8XY.zBSYo211ONO5lFHE6gvz6NhFl.LXQ2evYDLjX6ni', '', '', 0),
('E41161342', 'Nindya Novitasari', 'JALAN KARTINI GANG 6 NO. 59 RAMBIPUJI, JEMBER', 2016, 3, '1997-11-19', '$2y$10$QmY.Ao/WJD3DUJmUWIgZBOs2NxyTdwronJeC5ymHpmSLJ8rX9r5H.', '', '', 0),
('E41161383', 'Mambaur Roziq Alwi', 'Lojejer Wuluhan Jember', 2016, 3, '1998-08-17', '$2y$10$0ge8IbAvYl6FoTMOcp/0FOFtNccrfN1X9n/vvhnMib7AWFUoYFVr2', '', '', 0),
('E41161385', 'Mardiana Azizah', 'DUSUN ATERAN, RT 44/RW 006, DESA TEMPEH TENGA', 2016, 3, '1997-09-21', '$2y$10$EcsBd07P3p/MA0RS9lGbnu0EHD3ifH5irKS9hRWXY32XQc52lOBO2', '', '', 0),
('E41161390', 'Jazil Ramadhanty', 'DUSUN TULUSREJO II RT.05 RW.03 TEMPEH LOR- TE', 2016, 3, '1998-12-01', '$2y$10$bxG8/rEC0/Ee76AUC3RMxuk4/LWp5EX..vAw.Rk5e6at4gYESuXge', '', '', 0),
('E41161395', 'Aditia Afif Arfiansyah', 'Dsn.Sumber Sari TimurRT/RW  :001/006Desa  :Pe', 2016, 3, '1998-07-25', '$2y$10$MldXdjJYa2hAjX/dWNcRCOlG.FYAML5KVcIeH2lEvJ08qWe0nek8u', '', '', 0),
('E41161401', 'Ladeta Okta Verawan', '\'DUSUN KTAJAN RT.02RW.04 SUKORAMBI JEMBER ', 2016, 3, '1997-11-10', '$2y$10$MT2CirIbqW7Juxuy9cnh3uaySwgwnnwDXqDS0/VSn1KK1IOjFuhm2', '', '', 0),
('E41161422', 'Ahmad Aris Ubaidillah', 'RT 02 RW 08 GEBANGAN RAMPET KEC KAPONGAN SITU', 2016, 3, '1998-10-06', '$2y$10$7nMTGVz6APIVdNIwgvMw/uiGqaWs/B8K//2szmJ.rYbm5ukxvp9GC', '', '', 0),
('E41161520', 'RIZKY NUR FAQIH', 'PERUM. BUMI MANGLI PERMAI BLOK AB 1OB RT 05 R', 2016, 3, '1998-06-02', '$2y$10$BoC399RhspuhkcpAaQ.X5.o/uXbaP326twAlWBwWvbP1giNOyNUWC', '', '', 0),
('E41161529', 'Ravel Alfarisy Fardan Rofinsyah', 'RT 001 RW 002 DUSUN GAPLEK, DESA GAPLEK', 2016, 3, '1997-12-18', '$2y$10$bZw12DAtrcI.G1vF03aZgem6ESaUMDt.ZMq3QaajSddoNvwN5enKy', '', '', 0),
('E41161549', 'Ahira Labata', 'Gebangan, kecamatan kapongan, kabupaten Situb', 2016, 3, '1999-03-18', '$2y$10$EokPXSkXfKuGztQWQOTdneCHk7mWjUkwd0VMNW2iHl3CKN2.GFtVa', '', '', 0),
('E41161564', 'Rizky Aulia Al Amin', 'JL. MONUMEN KAPTEN KYAI ILYAS RT/RW 02/03 BAN', 2016, 3, '1996-10-27', '$2y$10$CfV8lbEnOym4Nwn7gOn2WOT/ixVyWqNVs/LwJNDF1MPezYObBwADy', '', '', 0),
('E41161578', 'Nabila Inayah', 'Jl. Raya Semboro no.8, RT 1/1, Desa Semboro, ', 2016, 3, '1996-02-11', '$2y$10$AYh2g6nny7m9UhQIy91FNecV868afW7A8Lo8TJlcDTI.rO69jePy.', '', '', 0),
('E41161595', 'Surya Laskar Ababil', 'RT.04/RW.05 Dsn.Sidorejo Ds.Wonosari Kec.Ngor', 2016, 3, '1998-07-17', '$2y$10$ngSiR.NKh2dVxlgAyMyVMea.Yd11.ZMvVxxmX.uqATRnLcyADQk4O', '', '', 0),
('E41161609', 'Vini Yolanda Putri', 'KETAH RT 02 RW 03 KECAMATAN SUBOH KABUPATEN S', 2016, 3, '1998-08-07', '$2y$10$mKmVZRdzm/C5PMpSY6Jnru1Ql8ebtzDoZxLgslarSVbocGFwo2vk.', '', '', 0),
('E41161610', 'VERIO LUCIANTO', 'JLN LAWU TANJUNG 3 NO 9 LUMAJANG', 2016, 3, '1998-03-30', '$2y$10$BeofdhcEGcPN7zigtsOQneEpYBnJ/EogGUWMegmnvBswPHC.6a6dK', '', '', 0),
('E41161613', 'Dyan Anugerah Ramadani', 'KP. KRAJAN RT 02 RW 01 DESA BAYEMAN KECAMATAN', 2016, 3, '1996-10-29', '$2y$10$nU.knttURv5B5B7t.zD8f.4ESnpEwe0nWlfun0nsyq5kJcPyeP/VO', '', '', 0),
('E41161617', 'Azwar Fanani Suprayogi', 'JALAN SALAK GANG NUSA INDAH NO. 13 LUMAJANG', 2016, 3, '1996-10-29', '$2y$10$r.8sdUuinDQVK4FHJWDfaeBIfc0XHy1jxx1d/HCh5nH8P8/8oz9a2', '', '', 0),
('E41161641', 'Ikmawati Maremningtyas', 'JL. PATIMURA-TEMPEH LOR-TEMPEH RT.11 RW.02 KE', 2016, 3, '1997-12-11', '$2y$10$MBIau9CbS7Otrmwgbao07e66kbsF2qspt5cQEjup5R1Fdzj06WpRC', '', '', 0),
('E41161676', 'Dimas Kristanto', 'Tempurejo RT 04 RW 01 Purwodadi Gambiran Bany', 2016, 3, '1998-09-03', '$2y$10$tzXMCb11uumUIFYr5U17R.TEa9PRhE44sDnDQomEj2Y7DinnfXAoi', '', '', 0),
('E41161716', 'Citra Nika Sasmita', NULL, 2016, 3, '1970-01-01', '$2y$10$wQNTgTVrEC6LYPsyNCenxeAWzVyXVtOjZW2NCheREORKrZAbRML4i', '', '', 0),
('E41161779', 'Nur Hidayatul Afidah', 'DUSUN PUCU\'AN 002/003 SIDOMULYO SEMBORO / 681', 2016, 3, '1998-04-01', '$2y$10$s62YRhXSpU2fxmy3XoZVtu18w1s6L.E71mlEZ.lS21DxLVixQvnZG', '', '', 0),
('E41161807', 'Sylvia Febrianti', 'JL. LUMPANG RT 14 RW 01, PUTAT KIDUL, GONDANG', 2016, 3, '1999-03-02', '$2y$10$DVObWQozR6HVVJ/PVm3YWuLIyOz8Ol5TdlH3CyoPAZDLGcQKNPWJa', '', '', 0),
('E41161838', 'Rahajeng Rahma Kencana Giri', 'Perumahan Mondokan Sentosa Y-5', 2016, 3, '1997-06-27', '$2y$10$VOlViKyVmmE./Jb9k4N41uQPn9uze.2j.uRvjAwuLEWI0j/dIklV2', '', '', 0),
('E41161854', 'Dayu Agastya Rani', 'Desa Pontang, Kecamatan Ambulu, Kab Jember', 2016, 3, '1998-01-26', '$2y$10$Q1DekRmjud8asSGgMvNje.hGNDq155sl7bsxIb8/CA0sw63LAXM7e', '', '', 0),
('E41161904', 'M. Akbar Rahmatullah Sujatmiko', 'JL. SILIWANGI, ASRAMA YONARMED 12, RT 001/RW ', 2016, 3, '1996-12-24', '$2y$10$i4tc5pIjHG8vK/Z7GFnAGu.AhSwI1X/FRoyc97tVgzLhirfhPaKaS', '', '', 0),
('E41161914', 'Wildan Bakti Nugroho', 'PERUM SUKO ASRI BLOK T.6 ROGOTRUNAN LUMAJANG ', 2016, 3, '1998-04-16', '$2y$10$ANBSqCxMXAmqNswsmjhfr.Hq.RUK4aEkJ50/LOb5qpWKkuOR.xRI.', '', '', 0),
('E41161930', 'Al Rizal Fikri Sulthoni Arrahman', 'Jl. Trunojoyo gang 5 blok 4 no : 27', 2016, 3, '1997-09-19', '$2y$10$M8xQE8xNg08t8oFfLnj8zeZfBhTJWNDVEzg/xM8FTL1DpJ0.F8Bry', '', '', 0),
('E41161943', 'Slamet Riyadi', 'DesaTegal Sari Rt03/Rw07 Kec.Pademawu Kab.Pam', 2016, 3, '1997-05-30', '$2y$10$Ev6F4GbBDexPibt/JkJNXO7AzM8Ftl9Xk.duO9H1LkgYbE1/ia6We', '', '', 0),
('E41161947', 'Luthfian Dwipayana', 'DSN. GAYAM RAMBIGUNDAM RAMBIPUJI', 2016, 3, '1997-10-30', '$2y$10$u4xDqO3XqVr.hM1xRGIyoOiR1kCg1J90d71GRm1YTdpKMKxlj.Djm', '', '', 0),
('E41161948', 'Moh Ziyaul haq ramadlani', 'jl sunan muriya no 145 RT/RW 002/010 usun sam', 2016, 3, '1998-01-19', '$2y$10$hAYwfkPaDi/PG2xiGig.IOMJBYERM4z8jhkJx.I9EpFh9yFMXUHA.', '', '', 0),
('E41161953', 'DWI BEKTI HARIYANTO', 'PERUMAHAN PANCORAN MAS BLOK A.69 / 68219', 2016, 3, '1996-03-14', '$2y$10$LJb/.eBY4gXGr/HfoSmmtespHclFspbqALsb2goaG9EZbLshsOfH6', '', '', 0),
('E41161965', 'Brilyan Andi Syahbana ', NULL, 2016, 3, '1970-01-01', '$2y$10$QsEGWcs2ZOZMxRYBbB72IOwZddEQwpRw50XqG7XgsenFL4u/Xj/xS', '', '', 0),
('E41161991', 'Ibnu Fadjar', 'Jalan Raya Manding No.18A Pamolokan Sumenep 6', 2016, 3, '1997-04-20', '$2y$10$/2l4v4ELAeWJH.2yL2uv5eNpmyaVn03xOQge8446CCm8YNl8Ubr5O', '', '', 0),
('E41162009', 'Nanang Budi Utomo', 'DSN. SELOREJO RT/RW: 003/002 Desa TEMUREJO Ke', 2016, 3, '1997-07-24', '$2y$10$kn3UMjoNIyeb8yZQZ2Kj9eJEDv6T1W0O5eHypiKg8DRK5jL8Wo18q', '', '', 0),
('E41162018', 'Nur Afifah', 'dsn. pandansari rt/rw:004/002 desa: tukum kec', 2016, 3, '1999-06-22', '$2y$10$r9vS3nwm/FDYN6WLPQWEDeQCiyMrR3L6rnOcQe7Nl8LG0kTfZUJYC', '', '', 0),
('E41162045', 'Sheila Anggun Choirunnisa', 'JL Arief rahman Hakim Gg Seruni 1 No3b. Kelur', 2016, 3, '1997-11-06', '$2y$10$MbMS/ZtGwAkAjP1Zp3beEeYHBhDtMdbG1LZ84mfNciNnmnE8mTTcK', '', '', 0),
('E41162068', 'IL JAMI\'ATIN ZANNAH', 'DSN. KIDUL SAWAH RT 001 RW 004, DESA KUDUS, K', 2016, 3, '1997-08-22', '$2y$10$HcxbHFCChEDlPMx06UhRNu3JiwtlmY424jCaPQbagtVx6Y.5v/oYC', '', '', 0),
('E41162071', 'Arif Rakhmat Aprilianto', 'KLAMPIS AJI NO 39', 2016, 3, '1996-04-20', '$2y$10$i8QfjQBd.QDLgMXxz4XLmOAaA5TMEJkDkREfIJDk.eu8p2FZzPThO', '', '', 0),
('E41170052', 'E.Muhammad Fachriansyah B', 'Jalan Seruni No.12 Probolinggo/67219', 2017, 1, '0000-00-00', '$2y$10$v/ypeJvrQ6e3MzxhkHJ82OLG4eFcRze03zvOKbwBG90EhEKzId79G', '', '', 0),
('E41170061', 'Elsa Manora Ramadania', 'KAUMAN TEMPUREJORT 3 RW 12', 2017, 1, '0000-00-00', '$2y$10$ChmDIsTrCBE11a9tzJ2Tpen2qMpVqCJOAzZ6LRHme.Y8p2j9L7ReG', '', '', 0),
('E41170084', 'Berliana Rohmah Aminin', 'Ds. Musir Kidul, Kec. Rejoso, Kab. Nganjuk/64', 2017, 1, '1999-05-19', '$2y$10$kX4FQN5/1QowaHqngEiT5Ol052tLs1xVFD6tUCUpzWdGXvrvCPKsG', '', '', 0),
('E41170090', 'Ari Baskara', 'jalan pakisan RT 4 RW 2 dusun pakel desa kase', 2017, 1, '1997-11-28', '$2y$10$V.ehRCUMNQj8k1wRaRjKqucIXrDMopWXCGrbCGC0qkwrijfd2U1t6', '', '', 0),
('E41170131', 'Indri Nur Hamida', 'JL. SUCIPTO Gg. 10 LINGK. KRAJAN RT.02/RW.02 ', 2017, 1, '1999-01-14', '$2y$10$g7xEQ56fDRxXh0hPlyktUOdTKMW7nH1a33lQlQXYhPH8BMha.cxem', '', '', 0),
('E41170153', 'Nuril Feby Maulidyah', 'Ds. CURAH JERU TENGAH RT 1 / RW 7 KECAMATAN P', 2017, 1, '1998-06-29', '$2y$10$MOt9JbVRCGUu4UgKXy/HHuqbu/D.FXK4uW82RYXZVTPgO3x6uDeaa', '', '', 0),
('E41170164', 'Rizkika Zakka Palindungan', 'Dsn. WUNUTSARIRT/RW : 020/005Kel/Desa : JATIG', 2017, 1, '1998-04-13', '$2y$10$jHTr5eh5vuP7lzcBD51Y0uX9lNTyJcqyhqw4Sl3FUOgu.sdb0a2Dy', '', '', 0),
('E41170190', 'Winda kurniawati', 'Jl. Patimura Gg. 4a No. 1 Semampir Kec. Kraks', 2017, 1, '1998-11-06', '$2y$10$FD4iG29mfa30FjFmlzWZLO0cJU8dJ7TBWdNl1daXjy8F/swwuKQe.', '', '', 0),
('E41170203', 'Kahfinda Mulya Utama Putra', 'JL.Diponegoro GG.4 No.23 RT03/RW03/68311', 2017, 1, '1998-08-22', '$2y$10$5fbQAIULWcdtyn3pwCEXw.RmvH2QgmB0ZYnyXkPZvFelXK8IIRD4i', '', '', 0),
('E41170204', 'DANI ARDIYANSYAH', 'Dusun Tegalan, Desa Langkap, Kec. Bangsalsari', 2017, 1, '1999-05-15', '$2y$10$RQS06o6TNEDai3QSKPkMcOD/qlEELvtIiCidpJep7kOUPTgcfsquC', '', '', 0),
('E41170241', 'Inant Kharisma', 'Jl Raya Situbondo, Wonosari RT33 RW11, Wonosa', 2017, 1, '1999-05-04', '$2y$10$HVZi2XC2Dp0Sw0BStY2tHOBatFzMOcPQZiYF89GpT7tQTXpDLf4VO', '', '', 649618857),
('E41170244', 'David Setya Ainur Hakiki Ramadhan', 'Jalan KH Ali Desa Sekarputih Kecamatan Tegala', 2017, 3, '1999-01-17', '$2y$10$ZmjwvgaufdW29rus4Ac10uHcQG3XwdfrnWHG4OP8nijrJceSEi6.2', '', '', 1138930287),
('E41170252', 'Salman Al Farisi', 'Dusun krajan Desa pandean RT/RW 14/05 Kec.Pai', 2017, 1, '1999-04-06', '$2y$10$80TeyAQekJwvXUEL3x17oOWIiW6WKshs.3kiCMZrDUXdIOYThnq4m', '', '', 0),
('E41170266', 'Ali Rahmatullah', 'Desa Randuagung, Dusun Krajan RT 1 RW 3 Kec. ', 2017, 1, '1999-06-02', '$2y$10$2vxrJeDS2QuYfRPQ5ZYkZurZIvkQbGWOVXmdpXXquqpcCxIxZsQJW', '', '', 0),
('E41170291', 'Ali wajhah', 'Dusun Panggulmlati RT 005/RW 006 Desa Kepanje', 2017, 1, '1999-08-24', '$2y$10$MF8TNHj8ZiHKM.Hy3dBNYOn0w7c0rOT6kGvOYF9dqYLkdGiKD6kFO', '', '', 0),
('E41170333', 'Cicilia Selvy Erianthy', 'Jl. Cempaka 2 No.8, Pondok Teratai, Sooko, Mo', 2017, 1, '0000-00-00', '$2y$10$hwPGHoIXnbGJXxixApJPdenWPhG5QJqRYqWXvGQ2V/0BhNlTWxbFm', '', '', 0),
('E41170352', 'Meta Gadiecha Wachyudi', 'JL. MADAKARIPURA RT.17 RW.06 DESA BRANGGAH KE', 2017, 1, '1999-02-05', '$2y$10$1KqCx6PtpqG/rG9SaxTy5eWV5uBfKrA8.MAC74/o6TDp4Avft.UHi', '', '', 0),
('E41170391', 'Rakhmat Fadilah', 'Jl. Ahmad Yani 8 no 92 Jember', 2017, 1, '0000-00-00', '$2y$10$7x0k2s8.ggvVfdW3tijrTOWZ2aY8qY/Zae9cdy31XI5VJPaB.4Uoa', '', '', 0),
('E41170436', 'Muhammad Fathan Ridlo', 'Paleran RT. 004 RW. 002 Desa Penanggungan Kec', 2017, 1, '1999-10-03', '$2y$10$NWorE6AN.MT8EywUd/s8Xu0QveLSgFmQYw2ZzlT4Qx18XTZ5d2Wm6', '', '', 992532282),
('E41170438', 'Mohamad Rizal Ramli', 'Jln. Cut Mutiah RT 01 RW 12 Kelurahan Rogotru', 2017, 1, '1998-12-11', '$2y$10$NsbTQ7dtiy6V7f.J8muCquMb35PPIO0PtfLLJpH7kLUfkAFHBE736', '', '', 0),
('E41170442', 'Dimas Yudha Pratama', 'RT.02 RW.07 DUSUN ROWOASRI DESA ROWOKANGKUNG ', 2017, 1, '1999-10-08', '$2y$10$jRQzShQVpoi87qsgMXPhmOlI4hK5RSXwwS0Fxq6IkcoUbHy.AXLpW', '', '', 0),
('E41170449', 'Wahidah Addini', 'Jln. Gunung Raung, Gang.04 No.03, RT. 005/013', 2017, 1, '1999-01-05', '$2y$10$TG1o4Cpr27NgsagI/8rsouEIVMiYxM7pVBon3KgDh/Ingmcj3dXkK', '', '', 0),
('E41170466', 'Lail iNur Hanifah', 'Jl. Rengganis No.46 RT. 3 RW. 2 Gugut Kecamat', 2017, 1, '1998-06-08', '$2y$10$KGaB6Xg2WJtwUdepnyXt7udHMN01eN8kgwpE4hN1fbn9E9a6Fxd.G', '', '', 0),
('E41170538', 'Rizky Maulida', 'Dsn. Kemirigalih, Ds, Sawiji, Kec. Jogoroto, ', 2017, 1, '0000-00-00', '$2y$10$8TzA8ZtgHPptVVkeAJNGDOeD6Q0MFpAeIVOrvxYAw6eyNe0UVGNAG', '', '', 0),
('E41170562', 'Krisopras Epikuros', 'JL. DIPONEGORO NO.32 RT.28 RW.06 KOTAKULON ,B', 2017, 1, '1998-05-06', '$2y$10$azvAUFFuzOdsrWOKzB7yh.qryX0kiyse/WonBc.R7S3.hrQ0YPfeW', '', '', 0),
('E41170613', 'Monika Kusuma Dewi', 'Perum Cluster Teratai Hill E-1  rt/rw: 004/02', 2017, 1, '1998-03-23', '$2y$10$ZTINKvWlTMOYwafoN8JEXu4CsZ/M0j1hNEYMe35G/6G.8fPedp5Ei', '', '', 0),
('E41170629', 'Yanuar Anugrah Ramadhani', 'JL. Sumatera NO.101 Jember', 2017, 1, '1999-11-01', '$2y$10$TokVRZuHqWIEiEcu9cGmkePq6b/62yU86otNb5E92vzFjGrzdOsRu', '', '', 0),
('E41170633', 'M. Toriq Alfarizi Imansyah', 'JL. MELATI GG 2 RT2 RW1 BITING PINGGIR - 6819', 2017, 1, '1999-02-06', '$2y$10$x3VTvEGkAqL2Z9Usbq55mO.ZaMqR9gFG1gyMZp3R3gUHvaKZZFDF2', '', '', 0),
('E41170641', 'Aji Wahyu Prasetyo', 'dusun gunung sari desa bangorejo rt 1 rw 3 ke', 2017, 1, '0000-00-00', '$2y$10$NfS0rdq7v.fKhdAD0nNO5OvEVtJNoAF83kjK2xmMQHF0nAq1kTZd6', '', '', 0),
('E41170676', 'Anggi Trikusuma Dewi', 'Dsn.Manunggal Lor RT.01 RW. 03 / 61486', 2017, 1, '0000-00-00', '$2y$10$mW.P4rbWsjdXfXnPTZGqjeMiFKc5NA/4QlR3/kvN7z3e9MYFuG67C', '', '', 0),
('E41170686', 'Alex Rudi Herlambang', 'Jl. Sultan Agung No. 50 RT/RW 002/009 Dusun K', 2017, 1, '1998-10-24', '$2y$10$bZ00vtaqWlzmZ5gHEo79me6zVOoMnUW6B01.BuGXAVRnfnt7Gu4jC', '', '', 0),
('E41170735', 'Destino Dewantara Pratama', 'PERUM MASTRIP BLOK T.3 RT01 RW21 KELURAHAN SU', 2017, 1, '1998-12-16', '$2y$10$QKPo/kgHW95axHKvJAroYeFrtbwYKHntQnN0xBLScYSmByJzi0m6u', '', '', 0),
('E41170740', 'Abdilana Mohtalia Saputra', 'JL.RE MARTADINATA NO 22/ 68211', 2017, 1, '0000-00-00', '$2y$10$CsX9axVvo9L74Qs4ejTK1uDvtSDbrAwwuZX1OJSCMnPJI58tuXeg6', '', '', 0),
('E41170753', 'Dheni Teguh Pramono', 'JALAN CENDRAWASIH NO.37 RANDUAGUNG , SUMBERJA', 2017, 1, '1998-02-21', '$2y$10$xSfNXMzA308lDAvAsbFlOOuDLVgNoToKCp0SUTHUtL5gmRNgxWTWa', '', '', 0),
('E41170754', 'Aldy Noverianto Pratama', 'DSN. BANDILAN RT 03 RW 06, DS. SIMOGIRANG. KE', 2017, 1, '1998-11-15', '$2y$10$lkk0NoOpVfyFlutAKqi6COCKz8E52QsSeDsEIdHf1d/Eqgg6t7kAe', '', '', 0),
('E41170757', 'Hafidz Imanda Jzanuareri', 'PRUMNAS MASTRIP C/1 MANGUNDIKARAN 64412', 2017, 1, '1999-02-01', '$2y$10$xpT.wXwAy48jlftzAxCMaedOw5wUE3Wa7mUQwRKh2N73mDBvExCZK', '', '', 0),
('E41170809', 'Kurnia Mutiara Septi', 'JL.MT.Haryono Gg Randu lima no 16 rt 01 rw 04', 2017, 1, '1998-03-09', '$2y$10$Aifea3dDJuZEK0zEDOePaejw0ky6lixFO1PKVAdTMpWsOVwtM8bYK', '', '', 0),
('E41170820', 'Adhe Fathur Rahman', 'JALAN DR.SUTOMO RT 01/RW 02 Kelurahan Kandang', 2017, 1, '1998-08-12', '$2y$10$ef76APBP9GUY3NWEu0QRUeR19QQfTCRc7.w7PTMAQ1Uqfi3BDwTOe', '', '', 0),
('E41170827', 'Ahmad Munir', 'RT 009 RW 004 SUKOSARI LOR, SUKOSARI, BONDOWO', 2017, 1, '1999-02-14', '$2y$10$VIIvWiEfAg9CrlmsOQTAJuW4flWoXiKQE8tEk7M2k2JFD1sdZYfES', '', '', 0),
('E41170853', 'Firmansyah Wahyu Maulana', ' Jl.wijaya kusuma gg 2 no 25 ', 2017, 1, '1998-04-07', '$2y$10$qtuHbvGAVCq2YcZMJp/efO7BOIcyguon1oRHFUDDLt7U5AG53mlUm', '', '', 0),
('E41170873', 'Achsanul Khizam', 'DS.BEGAN DSN.SEPAT KEC.GLAGA /62292  KAB. LAM', 2017, 1, '0000-00-00', '$2y$10$yqBSlgJM6Jo9WvzWeLHP1.O00e.hGxFRHdaPxh2aIwp4DqGS7jMta', '', '', 0),
('E41170885', 'Rangga Triana Putra', 'Dusun Krajan Rt 03 Rw II Kecamatan siliragung', 2017, 1, '1999-03-23', '$2y$10$iEAsFbVSRkGl3ldwXgBz3.kvDkkA9JoqDZ0gse5JfnXEvovm5iPmy', '', '', 0),
('E41170890', 'Muammar Khadafi Ichsan', 'srono des.kebaman rt:07 rw:05kode pos  68411', 2017, 1, '1999-10-08', '$2y$10$OsHCg.wWplptSyNYEG0jFuWMzP0Z5opbXpVwt3/RJKm/OPIfe5PPa', '', '', 0),
('E41170891', 'Helmi Holida Putri Puspita Ningrum', 'Jl. MAHONI GG.1 LINGK.LAMPARAN', 2017, 1, '1999-05-21', '$2y$10$N0TooEVpJyXzgscBI.d23uL36T5R1dsBDmJWOz0jOQGR4yx6hVxsG', '', '', 0),
('E41170896', 'Syavina Octavia Parahita', 'JL. MELATI V/137 LINGK. PATTIMURA RT.003 R.00', 2017, 1, '1998-10-22', '$2y$10$.2l.VvzMmD71Yl8u4YHOBOjuwejLAPVplm6X9F9XuUuo.ULrZsXdO', '', '', 0),
('E41170897', 'Ridi Yoga Pratama', 'DSN GENENGAN, RT 003, RW 004 Desa Sambiresik', 2017, 1, '1998-06-09', '$2y$10$hxeZfvW4V6mqymp69jLAsuZrWv7gzw2P210gZmscDOoYL9r0Pz3/O', '', '', 0),
('E41170909', 'Ade Setiawan', 'DESA BAGOREJO DUSUN UMBULREJO/68471', 2017, 1, '1998-10-09', '$2y$10$qiO6UxZmKDtxCQHqfb9f5elmoUfe0VgLSGiKYsinlCk9zKeFQt3IO', '', '', 0),
('E41170913', 'Yusuf Andi Nugroho', 'JL.R WIJAYA RT 07 RW 06 KEL.PLOSO/64417', 2017, 1, '1999-03-27', '$2y$10$ah7UWes9Tw.9G/WABooHvubwamkX9B4ESlhGNTtlM0y.KJ4Rb5MVK', '', '', 0),
('E41170916', 'Muhammad Khoiriri', 'jln. niaga nogosari kecamatan sukosari kabupa', 2017, 1, '1999-03-20', '$2y$10$4NEvXmQBn9KDFzKQ39bioudCQ7PqiqIm71yke3zUow4Q6X21vHiRO', '', '', 0),
('E41170926', 'Fahriza Ramadhani Putra', 'Jalan Dieng No.110, Dawuhan Lor, Kec.Sukodono', 2017, 1, '1999-05-01', '$2y$10$duVbb6WZGUKzzapxlekL/u5EYpHSWz.1MyBCCeBW7Vp6kHEbsDryu', '', '', 0),
('E41170959', 'Maretta Dwi Muriyawati', 'NYANGKRING RT.04 RW.06 NO.26 CANGKRINGMALANG ', 2017, 1, '1999-03-03', '$2y$10$ljasp0GjE5wpPJEjgWpvxuJduuiC3LwWN7jR03FGIB5NPXqGYSg2W', '', '', 0),
('E41170972', 'ISMU UBAIDILLAH PANATAGAMA', 'DUSUN BIMO RT 02 RW 01 DESA BIMOREJO KECAMATA', 2017, 1, '1998-12-25', '$2y$10$QpWq/F/Odp9FVPayvxM2XOu8l1bAYgGDJagWmdICSop8STPjKtLIK', '', '', 0),
('E41170987', 'Novia Nurul Qomaril', 'Jl. Wijaya Kusuma RT 05 RW 04 Kelurahan Dawuh', 2017, 1, '0000-00-00', '$2y$10$VR/6fiWNMGoy7ZzitngBv.PzrJmKBMxddA.0iPQiIJedDVtR5p.g.', '', '', 0),
('E41171011', 'Gagas Adi Rismawan', 'Perumahan Villa Kembang Asri Block B.C 4 / 68', 2017, 1, '1998-09-26', '$2y$10$/fS0XtGJcRAc0rCcK.BSfOcRyvYFvXr6S.SC3f/MUl5ulzj92MmUm', '', '', 0),
('E41171014', 'youwanto refo dewa wahana', 'jln. gajah mada VI no.128 / 68131', 2017, 1, '1999-05-06', '$2y$10$my8POhL7NILe/Z6sx1ufqOF9JU4V8p6q6y9QYeuSYpJ4/LvgNcClW', '', '', 0),
('E41171015', 'Yusril Fahmi Al Faizi', 'JALAN KI HAJAR DEWANTARA NO 166 (SELATAN LAPA', 2017, 1, '0000-00-00', '$2y$10$QSbqCLpUAXH3TRm7G0uiGuli121OiclI.OXnm3MmRIOQSHf3faL12', '', '', 0),
('E41171041', 'Makhi Hakim Hakiki', 'DUSUN KRAJAN III RT004/RW014 Desa KETING Kec.', 2017, 1, '0000-00-00', '$2y$10$gjwOVBs2JMOJdbH4kVwVfeleVrRj1rzdSLxkZiSJYpfgFQIw.lNIm', '', '', 0),
('E41171075', 'Moh. Syafrian Abie', 'Dusun Maron RT07/ RW02 Desa Genteng Kulon, Ke', 2017, 1, '1999-05-01', '$2y$10$c.m1f6mEla3cIVmsjSmqb.JGuGUBamSZMPJzMFOIDe2XyY2WSjJfO', '', '', 0),
('E41171092', 'Galang Putra Fendriansyah', 'Jl.karimata no.78 (fotocopy gladys)', 2017, 1, '0000-00-00', '$2y$10$pp/0ASBxYWyts2sSpTHO3OKtj705ZLJhquJcaXSLGitY0khyXafQa', '', '', 0),
('E41171093', 'Firlana Priyadna Putri', 'Jalan Letjen Suprapto RT 3 RW 5 Desa Bulu, Ke', 2017, 1, '1998-08-16', '$2y$10$EKJEM75b5m.O.AU6psIOR.E3h7o9ZzrsY234F/PNGOjSVcIWmK7Eq', '', '', 0),
('E41171101', 'Mochammad Rozy Andrean Syah', 'JALAN TAWANG MANGU 3 NO 24 SUMBERSARI JEMBER', 2017, 1, '1998-04-05', '$2y$10$tqqdzZXxDHNolr9HZTyn5eS5yqWbgWF8n3PwB4zSpghNC3Ry6FAWy', '', '', 0),
('E41171104', 'Maulana Malik Ibrahim', 'JALAN SEMANGKA 31A PATRANG-JEMBER', 2017, 1, '0000-00-00', '$2y$10$lsIz.O5HRipPxCjOcPq/Lep2hXV.fzRTQEMPyFDpMYhjr37WYlJam', '', '', 0),
('E41171111', 'Muhammad irfan shidqi laksono', 'JL.KAPTEN TESNA NO.11\'', 2017, 1, '1999-11-07', '$2y$10$dQrfM8LIbE820v5eCf09fOtcLPF3U0vNTYOdaupnNmoZ5lAnbe5o2', '', '', 698491779),
('E41171118', 'Fernando Farista Ahmad', 'DUSUN WUNGUREJO RT. 06 RW. O6 DESA SIDOREJO K', 2017, 1, '0000-00-00', '$2y$10$grcG9E2ZjvqtX9iOWS8H9uY/D9X9x/nqZKHk1FkmxrBjgSNgdmMSG', '', '', 0),
('E41171120', 'Muhammad Arief Rachman Muttaqien', 'Jl. Rejoagung No.2, RT 1, RW 16, Semboro, Jem', 2017, 1, '1999-05-13', '$2y$10$fucyVXKuBtcHk8s9CIAtSO7LvlQcAIrBbchw/bK0B1JZOWw3cZmNe', '', '', 0),
('E41171128', 'Romi Septian Wahyu Ilahi', 'Dusun Tukum kidul RT 31 RW 11 kec. Tekung Lum', 2017, 1, '1998-05-09', '$2y$10$GBZoU2hMXFzFOtEpwdtmL.CjiJuoBt5nqps3ZiziQDFCu1BZX02b.', '', '', 0),
('E41171135', 'Dwi Ayu Wulandari', 'Perumahan Sumber Taman Indah Blok S no 8 RT 0', 2017, 1, '0000-00-00', '$2y$10$GM/5W1p1YTlvzNX9klSFP.u/fgpbVGfSUkLol4g0cz8j5C7iaDUZC', '', '', 0),
('E41171141', 'Fahmi Dwi Septianto', 'Dsn/Desa/kec. SUMOBITO RT/RW 002/001 JOMBANG ', 2017, 1, '0000-00-00', '$2y$10$JifM26GkPC3lQ7xwQyMSq.TIqJy0/oExx9eMxYsS.LzkwLHcW0H2i', '', '', 0),
('E41171142', 'Kevin Harlis Oktaviano', 'Dusun koncer malang  2 rt 4 rw ,Desa koncer d', 2017, 1, '0000-00-00', '$2y$10$lOKGa5oPCZDSJggJMhjv0eCxJoECxTUhdhSpNzOb6lGQ5kaUT8l0K', '', '', 0),
('E41171164', 'Adi Lukito', 'Jl.Kertabumi Gang 4 No.8 Jember', 2017, 1, '1999-05-21', '$2y$10$MjXUpGS58s2GDQ71APlDOO63xYqt0tgr8YLEilmYRr87ro.ENcmZy', '', '', 0),
('E41171169', 'Fedy Rahmatullah', 'DUSUN BABAN TIMUR BEDENGAN, RT 001, RW 008, M', 2017, 1, '1999-02-27', '$2y$10$0UXQn.7qCi170/KJr7TzJOEXV9WQ9jwm048davVegzSf6xwtsrrKq', '', '', 0),
('E41171171', 'Atho\' Fajarianto', 'RT/RW 01/02, Desa Sumberagung, Kec. Pesanggar', 2017, 1, '1999-04-06', '$2y$10$02t.3C7BuO85gp.2KXfZLeRwgHrSPzisQ.N3GDcPRqdToLComLLMm', '', '', 0),
('E41171178', 'Moh. Ainun Najib', 'Jl. KH. Moh. Tohir. Dusun Krajan, Puger Wetan', 2017, 1, '0000-00-00', '$2y$10$lRz/esYERMd/gq3S6giGo.YM2nrUIZFb3TJAPimCpRaa3Oko6eNc2', '', '', 0),
('E41171192', 'Zulfian Hilman Firdausyi', 'DUSUN JATILAWANG RT 02 RW 06 TEGALWANGI-UMBUL', 2017, 1, '0000-00-00', '$2y$10$YkNbGv3KhO30iX1wJeVhKe3XmhPtwpvL./58gf4Cy9Tq/2Vzk6Fsy', '', '', 0),
('E41171252', 'Niko Wahyu Fitrianto', 'Perumahan panji permai blok OO-19, kelurahan ', 2017, 1, '0000-00-00', '$2y$10$bmc8D2wJ55ukQ/uQeCLfouN0vtUIwYDFa8xuURe/XFuQ6imEUaOUC', '', '', 0),
('E41171254', 'Moch. Aliffi Akbar', 'Jalan Kacapiring 1 No.48 Gebang / 68117', 2017, 1, '0000-00-00', '$2y$10$vdK3sEKdNjFo/NnVDbTZy.9JfE6YeGp82Ove7F5Bu2rCrVqKG2pMy', '', '', 0),
('E41171308', 'Bawik Ardiyan Ramadhan', 'Dusun Kapuran Desa Grenden Kecamatan Puger Ka', 2017, 1, '1999-09-01', '$2y$10$R09iGbNXJc6nFUa2XRGceedFsJ4mGtC.5IVZA/Kr1pMbEYYREzSsC', '', '', 0),
('E41171309', 'Al Busran', 'Perum Bumi Biting Indah, Jln.  Kenanga, blok ', 2017, 1, '1998-01-22', '$2y$10$j414PSa208sc/SdCKofnnOPIdX4WKbGICw3y8wDaDJ0AEB9eoHili', '', '', 0),
('E41171319', 'Alfani Zidni Hidayah', 'Gumuk rase kemuningsari kidul jenggawah jembe', 2017, 1, '1998-12-31', '$2y$10$tUVpNilqPe41QBfBCQyb4OZ2J66Pkt7W5IRvGXQ7XSix3gYsl6ThS', '', '', 0),
('E41171328', 'Yanuar Ridwan Hisyam', 'Jl. Karimata V blok D-12, Jember', 2017, 1, '1999-01-23', '$2y$10$oKOgmxE8x082u0WD3IH/MeKp2Nz.SwbsRt1vtdJ4.YQwO.ITG8Y6q', '', '', 0),
('E41171335', 'VINNY SAKINAH VIRGIO', 'PERUMAHAN SUKO ASRI BLOK D 20 RT 04 RW 11 KEL', 2017, 1, '0000-00-00', '$2y$10$qQr3MiCHJ7T8VoRt14wnoO/v2YBy4hsp/JR3.FayaToLThTTzy5au', '', '', 0),
('E41171351', 'Ainun Nurkharima Noviana', 'Sabrang wringin anom Rt 01/02', 2017, 1, '1998-05-11', '$2y$10$zLEDyqeG9wlBdsUmiGWDneCFo03UKHMFF7906ZlCZ5L0JHx30z1/W', '', '', 0),
('E41171365', 'Moh Khairul Anwar', 'Dsn PANDIAN Ds DEMPO BARAT PASEAN PAMEKASAN /', 2017, 1, '1997-03-06', '$2y$10$sO7B.Y5Vhn5XpAVAvVNON.pTfUMuqtAj8wGgm5yyPaU1wZ3Ba3kVy', '', '', 0),
('E41171369', 'Maulana Hasbi', '03/01,Panjen,Jambewangi,Sempu,Banyuwangi ', 2017, 1, '0000-00-00', '$2y$10$5r3YKPe83GHDf7moJzhQjOPkSpag65vdpMVEre6TV/JooLPPfmpbW', '', '', 0),
('E41171389', 'Septiaji Waraga Fila', 'JL.WIJAYA KUSUMA RT 07 RW 01 KEL. DITOTRUNAN ', 2017, 1, '1998-05-09', '$2y$10$CRrzzm9fGybr5tAW5oXiiOyjrdLR61GLRv3ph6FoOc4rrNK1g2gEa', '', '', 0),
('E41171392', 'Budi Lasmana', 'DUSUN KRAJAN RT 004 RW 002 KALIANGET KEC.BANY', 2017, 1, '0000-00-00', '$2y$10$xD/mrMZhq4Agc.g/sKGNtO69mJYiDWYvJ2g5xAidmyF4cg5lgpgou', '', '', 0),
('E41171452', 'ADY BAGUS SUGIH SUSANTO', 'Jl. Rowo Mas Rogojampi Utara RT/RW 003/005 , ', 2017, 1, '1997-03-12', '$2y$10$VtIu0CHUi1daidLtxfmgrOaJmXsBfEC4HH6xffnTS3exLOHPVkkQ6', '', '', 0),
('E41171478', 'Raya Akbar Jaya', 'JALAN MASTRIP NOMER 3/88 JEMBER', 2017, 1, '0000-00-00', '$2y$10$pHz44WCKAWXPf/IFdNSrXe4GbExzeFhclTJ4FPDPzhkvRaqkJs8ZO', '', '', 0),
('E41171508', 'Willian Refky Firmansyah', 'KP. BRINGIN RT 001 RW 002 DESA LANGKAP KEC. B', 2017, 1, '1998-04-30', '$2y$10$xJoJP3PCVPldFrPs901ab.cNlBJLBlIRARcfUh3TGAR6n3c28MytW', '', '', 0),
('E41171541', 'M. Avicenna Maula', 'DUSUN KERTAH, RT. 04 RW. 08 SEBAUNG GENDING P', 2017, 1, '0000-00-00', '$2y$10$Gy55WC4GiAIYUSrOogXpG.ARGoIlhQA4VasRUBDOmOKYlw/5UyFOC', '', '', 0),
('E41171569', 'Riska Aprilia', 'JL TEUKU UMAR NO.13 RT/RW 01/04', 2017, 1, '1999-04-26', '$2y$10$8q4gIfZVKG.MuDncdDHuBOpGe4Adm/psvT7YdX.8opriI2k8yPHRi', '', '', 0),
('E41171583', 'Ahmad Fakih Hasbullah', 'JALAN MAKAM MRONGGI NO 2 MRAWAN-MAYANG', 2017, 1, '1998-09-05', '$2y$10$GwyOmE/vf5fnAe1cqZ5fZuo0M/knWV9If6ixUc5GAsFmqZpNa1.UO', '', '', 0),
('E41171590', 'Ega Kustian Pratama', 'Dusun Kertonegoro Selatan RT 2 RW 5 Kertonego', 2017, 1, '1999-06-02', '$2y$10$UxeGKhqQFIABcQJ8QmkY1.Z3AZbZxaIUMTcPXp/VP0TH8rapWkSX2', '', '', 0),
('E41171600', 'Lafic Imarega Dwiputra', 'Jalan Blora 834 Desa Wotsogo RT 1 RW 8 Kecama', 2017, 1, '1998-01-03', '$2y$10$4DV1gWTl1X0BtNWJBnsqdeklNBp9R8OG6H4unbp.mEo7ttwmWd/wO', '', '', 0),
('E41171605', 'Muhammad Andys Saputra', 'DSN. SINGOPADU RT 4 RW 2 DS.CANGGU KEC.JETIS ', 2017, 1, '0000-00-00', '$2y$10$lguHxOoM0q3IJ6LquAvE9ua9UMixeSgzXwYRSmymdEggmLs3t30W.', '', '', 0),
('E41171613', 'Galih Bagus Prakasa', 'Jalan Raya Tamanan Dusun Karang Pande Desa Gr', 2017, 1, '1998-11-08', '$2y$10$e/lSx7S64pjZkSxTSepMW.zTS1jtPMS0rqINL57tyfIiL/rW/Ka7e', '', '', 702854857),
('E41171621', 'Bangga Adityatama', 'DESA KAJAR RT/RW 003/002 KECAMATAN TENGGARANG', 2017, 1, '0000-00-00', '$2y$10$z/0otDwR1Tqw.ga6St5sbO3vJ5FYkFBjbdKeK08.5qsfTPusBGC6O', '', '', 0),
('E41171625', 'Raga Satya Airlangga', 'JALAN TEUKU UMAR GG 1 NO 29 BONDOWOSO / 68211', 2017, 1, '0000-00-00', '$2y$10$zi97x9bJmAZRvrX4yp6BDOxDqCjKDp7mk1e6xJ06zh9dRff8Orj..', '', '', 0),
('E41171660', 'Refi Tri Hidayatullah', ' BASUKI RAHMAT NO 130 GLADAK PAKEM JEMBER', 2017, 1, '0000-00-00', '$2y$10$xiiRuSFf2O..3v5pQcsHS.qCKMkc26azuN/6v/VrCVh9Jm2BlzWKa', '', '', 0),
('E41171664', 'Ramadhan Ibnu Umam', 'RT 01 RW 08 dusun Jatilawang, Tegalwangi, Umb', 2017, 1, '0000-00-00', '$2y$10$t07Y1ogYbRpwU63ha88SM.spVMksf4m0nz3pzVW3iGDk/rrnbTpRu', '', '', 0),
('E41171666', 'Nauval Permana Putra', 'Jl. Kenanga no 30 RT 02 RW 024 dusun dukuh - ', 2017, 1, '0000-00-00', '$2y$10$ToTbNpudiv5qD1hJNlYG6OM2zSDHV8JU5huGUaA4m0KoJlHD7Hx6.', '', '', 0),
('E41171683', 'MOCHAMAD WELDANI EFANSYAH', 'JL. Dr. Soebandi no.116 Jember / 68111', 2017, 1, '0000-00-00', '$2y$10$CeaXGqkqNo9W9x5mkHEiv.PuIXfpytNAdlq4y5FZXu/yrGp7FBo/K', '', '', 0),
('E41171691', 'Susilawati', 'Jl. Raya Banlendur Kalowang Kecamatan Gayam/6', 2017, 1, '0000-00-00', '$2y$10$7SZ9WGV7Axc.2glusjdwoegul8AuxtA4YmfHYsX.eSAgfsnjRIgDa', '', '', 0),
('E41171697', 'MUCH NESHA ADINATA R', 'Jl. Moh seruji 0 RT.4 RW.18 Dusun Bedengan, D', 2017, 1, '0000-00-00', '$2y$10$GCJcxFrbtUAafATbn9jO3.cryskLN32Df4uAglk01c25q4t9fy10S', '', '', 0),
('E41171720', 'Ahmad Rifa\'i', 'KALIANYAR II RT 10 RW 02 SIDODADI, PAITON, PR', 2017, 1, '1999-10-05', '$2y$10$YtH4wekm5qTWiJf/Q3ib4eSs3nXcPaWOmGnfAauj/nb9IXsEO0sES', '', '', 0),
('E41171725', 'Khosnol Khotimatul Arifah', 'Dusun: Bansanik RT:02 RW:02', 2017, 1, '1998-10-15', '$2y$10$dDDtUXl0d3ZTLmV/aC3J1uiCabNOhBNulaSwr1CFvf.RuJxJZI4c2', '', '', 0),
('E41171742', 'Ridwan Hananto Aji Arifin', 'Dusun Krajan RT 05 RW 05 Tanggul Kulon, Kecam', 2017, 1, '1999-01-25', '$2y$10$lFElYenWSyG4wg.w4PDTZOhVpX/EqtY0hSqA1rWtItazprf/Aa9fO', '', '', 0),
('E41171746', 'Muhammad Fatihal', 'Jl.IR SUKARNO 110 Desa Pisang,Kecamatan Patia', 2017, 1, '0000-00-00', '$2y$10$s9ef44lL3I.jsmpaGCf/ou0/.bIii8WSiM9CUk/tORcYJsLgOAxNy', '', '', 0),
('E41171749', 'Ali Mansur', 'Dusun Mulyoasri, Rt/Rw 01/01, Desa Sumbermuly', 2017, 1, '0000-00-00', '$2y$10$Ag0UyMPQoHNh0MKqvjS0oeOgm/9.YRW8JsQCPYUlc57Cnx1NPRwGS', '', '', 0),
('E41171753', 'RIKKY IHZA PRATAMA', 'DUSUN SUMBERAN RT 001 RW 019 DESA AMBULU KECA', 2017, 1, '0000-00-00', '$2y$10$JEaUAtwMtCwAfp7yqOHgAOvMEbgMg4LXJcu93j4ZWuGaiPJoXgXuO', '', '', 0),
('E41171754', 'David Bristi Antara', 'RT/RW 04/05 DSN. LEMBENAH, DS. LEDOKTEMPURO, ', 2017, 1, '1970-01-01', '$2y$10$BZ6YojW7BnMxhfJkJtpsEO7plf2IzllxtbaPvuivvjQp22QRjsyUO', '', '', 0),
('E41171762', 'MOH FANI FADILAH', 'Jalan Pegadaian Rt 03 Rw 02 Dusun Kebonan,Kal', 2017, 1, '1998-07-07', '$2y$10$FBI6/PglgoqOm5.397Uci.ngpyoH9K4kgS1wiaOwVSMtHBx7LLybi', '', '', 0),
('E41171763', 'Tabhrany Odi Asmoro', 'Jl. Melon Gg 4 Blok D:18 / 68111 ', 2017, 1, '0000-00-00', '$2y$10$A10KWdOTvC2Y/R3aL533XuZ.nQvbto0CkBzpGzHGPGt0b3mLxiv4C', '', '', 0),
('E41171769', 'Farhan Rizal Hidayat', 'Jurangsapi, Bondowoso , sebelum SMK 1 Tapen', 2017, 1, '1998-01-05', '$2y$10$VUuiUeLpRWKx2qrN7l93LOEyYMXVzImHbmc7a/IYwAMRYKh9x3rLO', '', '', 0),
('E41171785', 'Yadribullah Hul Amtsal', 'JL.KALIURANG PERUMP PTP NO 3 JEMBER ', 2017, 1, '0000-00-00', '$2y$10$oNY/NEWIPT3Y1Z4ikqwZ2edjw7d4qyafK.aQNNKT3.XNnZwGZGEIq', '', '', 0),
('E41171807', 'AJI PRATAMA', 'DUSUN KRAJAN II RT.03/RW.06 DESA KETING-JOMBA', 2017, 1, '0000-00-00', '$2y$10$oV2BtVLf1aTk4vddXFalc.GTQP/jQee7PzX4TqEXVLFrT39lDsLLe', '', '', 0),
('E41171823', 'Siti Nur Azizah', 'DSN. KRAJAN GUGUT RAMBIPUJI JEMBER', 2017, 1, '1999-07-08', '$2y$10$75M/Xsw2LT3tNjKuoTKQiOMEUdEYD92ri3SS2AUO2RWSeSQe9gh.2', '', '', 0),
('E41171829', 'MEGA SILVIA', 'Desa wonokerto RT 05 RW 05, Dusun Krajan , ke', 2017, 1, '0000-00-00', '$2y$10$BPmx1cnJxMTeotBzAn2C..T9Y7qDkbDAayxbWWVsS2vz0ME63Bwz2', '', '', 0),
('E41171843', 'OKTA ROHMATUN NISA’', '\'DUSUN DEMANGAN RT/RW 008/006 KESILIR WULUHAN', 2017, 1, '0000-00-00', '$2y$10$fz6tacABWMVDXvzEOVMTBu1rSumuXRXjJzUibAooMHNU4.LgmpclW', '', '', 0),
('E41171845', 'YUNIAR FABI PUTRA', 'DUSUN KRAJAN AMPELRT 02 RW 01JL.SUNAN KALIJAG', 2017, 1, '0000-00-00', '$2y$10$8toJCztIwIrdyTDT9uT8jOfI.W7ZFG9M6UnN9i2l1kBrOkRIxtlOK', '', '', 0),
('E41171874', 'Yusuf Tri Wibowo', 'Dsn Plaosan Ds. Plaosan RT. 018 RW. 005 Kec. ', 2017, 1, '0000-00-00', '$2y$10$wjLlDLkH/rCaqOAUFZpPC.LdagmdeMge8OQFpj1ZKM7hEdolG3h0S', '', '', 0),
('E41171890', 'Mohammad Debby Karomi', 'JL WACHID HASYIM XXI BLOK 3 NO 146', 2017, 1, '0000-00-00', '$2y$10$aL3B2f.OGS7.T2EziMzPruw1mwhMM96nEOnPFUY6dfxJXQIhQ153m', '', '', 0),
('E41171892', 'Akbar Maulana Tryas K', 'JL. PB. SUDIRMAN XII / 39 JEMBER / 68118', 2017, 1, '1998-04-11', '$2y$10$HHSXr37NvUViEOwhx4s4i.26oVmFPnZTdFtzUIPJn5NgAlNpWG9J6', '', '', 0),
('E41171896', 'Adi Cahya Wiratmaya', 'Jalan Brigjend Katamso No 59 e Bondowoso', 2017, 1, '1998-06-22', '$2y$10$dQjwY8x.PEGqme26PvsPs..02ZIn.qKkH0GaPENinBasjHUv5llyO', '', '', 0),
('E41171926', 'Yosef Yoga Himawan', 'Jl.Piere Tendean gang Pemuda no 56/ 68124', 2017, 1, '1970-01-01', '$2y$10$foGZrPQ7kbM3jAn8VUUEP.yLTP7SqsCfZtHLKbIschafMhJa8CCyC', '', '', 0),
('E41171941', 'NISKE ELMY PAULINA', 'DSN.RINGINASRI RT/RW.029/007 DES.WRINGINPITU ', 2017, 1, '1999-04-04', '$2y$10$yjgEgY9sGN/v9RYqwivB3.ScOrdSIuZL/EJo1hOcL/IA6BM.IROQq', '', '', 0),
('E41171946', 'Sharah Rizky Nadyastuty', 'JALAN MENCO NO 8 RT 02 RW 2 SAWAHAN - GENTENG', 2017, 1, '1999-03-28', '$2y$10$ikTx9wJjWM.J6S3UJDN0leMIHb70WTTBGvOrQeQLS9mTAr0c1K1ua', '', '', 0),
('E41171956', 'DANA BHAKTI SURYA PRATIWI', 'RT 003 RW 022 Dusun Kepel Desa Ampel Kecamata', 2017, 1, '1998-02-14', '$2y$10$KQVtvToPKvXlgR59pxQd1eTqJb1KW9XqJDcBL6V97kEkfQ6sUTy.u', '', '', 0),
('E41171959', 'Kia Dzaky Eriyoko', 'PERUM GRAHA CITRA MAS BLOK Q14, KALIWATES, JE', 2017, 1, '1998-10-12', '$2y$10$pPmUtpLjsWGJDj.FXVMacuPjvZ9LchUgBYUj/Z.un7qzBdB06Fr8q', '', '', 0),
('E41171969', 'Arif rahman hakim', 'JL.PB SUDIRMAN RT 01 RW 01 SERUT-PANTI-JEMBER', 2017, 1, '0000-00-00', '$2y$10$gh7x1mhZYhCfa9fuIBREneTrbkZfxYtd1KCWji0ELkxBqJInRjska', '', '', 0),
('E41171994', 'Sasqia Dwi Arta Novia', 'RT.06/RW.05 Krajan Genteng Kulon, Kec. Genten', 2017, 1, '2000-04-25', '$2y$10$e/eWN.7v414/fpUG266mZOZUkFNzC8ctKgaVwI/LuvF5Rxv8Vu0.K', '', '', 0),
('E41172008', 'Arif Adi Kurniawan', 'Jl. Bengawan Solo 03/70 /68121', 2017, 1, '0000-00-00', '$2y$10$utx7YYaT7fRvjXVb8hMWXOAYP4x4toml.23im0PyXEIc6q3.H41S2', '', '', 0),
('E41172031', 'Aditya Ramadhan Rizkiyanto', 'JL. KALI PANCING NO. 08 RT 02 RW 16 JOGOTRUNA', 2017, 1, '0000-00-00', '$2y$10$YXVrWly7dZqpx7ViJNiVqeEOPxlPEHVqpG.3pS79JQYoFGvlm/YBa', '', '', 0),
('E41172060', 'Roki Prasetyo Adi', 'JL. LUMBA - LUMBA 2 NO : 234', 2017, 1, '1997-05-10', '$2y$10$Sci6VxUi9OAHz2RoKUypHOd.98/znobn05FKVTKG8v6Ufe4/rNPzS', '', '', 0),
('E41172064', 'Syahdan Fiman Huda', 'Jl. Bungur 70 jember / 68117', 2017, 1, '1998-12-11', '$2y$10$OiRcWVFT3Htg.mud41A/4uTdsVhUfvM/NCa8EzSY.YExSE7YLTJTa', '', '', 0),
('E41172068', 'AFFAN TOHARI', 'Dusun Pesisir, desa Aeng Panas , Kecamatan Pr', 2017, 1, '1999-05-03', '$2y$10$cTYPzwR6Fwzi4Xr8qPygues0csrEKxRgcih85PYc.yC/io9y9qyZ6', '', '', 0),
('E41172069', 'Akhlaq Khan', 'Jalan pantai no 73 puger kulon', 2017, 1, '0000-00-00', '$2y$10$bj4b2SsAQ39U.zpj6p4R3Ok5utwHCEkrEuDy6lqgFAmrphNihjTNy', '', '', 0),
('E41172072', 'Khoirul usamah admojo', 'DSN BARAT RT 4 RW 1 DESA KRUCIL KEC KRUCIL KA', 2017, 1, '1997-08-08', '$2y$10$SFT5C4lcPVZmbz4u1mmZT.FMDwcodncGshVbj2Q0esBBTRrC/NaUq', '', '', 0),
('E41172074', 'Imron Rosadi', 'Jln. raya timur pasar randuagung Gg.Cempaka D', 2017, 1, '0000-00-00', '$2y$10$JRl6YU3zk9wahtA8ashTcuJB9NIrPv4RRpPCOdfBCw9AugFSZmBT6', '', '', 0),
('E41172079', 'Sandistya Diski Aprilian', 'Jln. Letjen Sutoyo Lingk. Kramat 1 RT:02 RW:1', 2017, 1, '1999-01-04', '$2y$10$2LYU6X6xIsH1kaPOG39rJuFmxjjRttJnPCY0WPqmN0MOhb4fUAhsa', '', '', 0),
('E41172092', 'Moch. Zainur Rofan Fannani', 'JL KH AGUS SALIM 04 (rofil) - KRAJAN - MUMBUL', 2017, 1, '1999-12-25', '$2y$10$7z14/Cv3236xjABiX0sqSe8yg4YRFkQL1puVapt8PhAiqOoNSEyUK', '', '', 0),
('E41172094', 'Ferdian Nada', 'Jl.Sumberwadung RT01 RW02 - Dsn.Tugung - Ds.S', 2017, 1, '1998-06-11', '$2y$10$w2nLNtGpn3yzBh4Bv.UQGOmH2/QgcA/Nh/a5ESt3uy/TO4SQ7a4NO', '', '', 0),
('E41172104', 'Gilang Rahmadhan', 'KEBONAN BULAKWINONG,PASIRIAN 67372', 2017, 1, '1998-07-12', '$2y$10$A9ge9dHajLTzLs97YjUYW.R.PCXBJe4MEyZnQPA6OSk0i2IzNZnK2', '', '', 0),
('E41172109', 'Nava Shoqibatul Khoiriyah', 'Perempuan\', \'Dsn. Pandanrejo RT.013 / RW.002,', 2017, 1, '0000-00-00', '$2y$10$xnbzQ.YUIpGXVVc3vWLS4O9jdFIsuhhqKSwL2o2ZiByLz5WF1uELm', '', '', 0),
('E41172111', 'Rizmawan Widi Wiranata', 'JL.SEMERU XXII/Z16 JEMBER ', 2017, 1, '1997-10-09', '$2y$10$S0DMgA/BIFHBY/IfUVRPcu/5LEuznTHp3kSws8gonZmf1eSHaALUS', '', '', 0),
('E41172126', 'Morgan Ardianto', 'DSN TEGAL PAKIS RT 02 RW 01 KALIBARU WETAN, K', 2017, 1, '1970-01-01', '$2y$10$n7YUQn81GaM9rlVeIwzkTOQmyA5T61sgNeGY/5QJySMhaXxPZDqyy', '', '', 0),
('E41172128', 'TRI AMBARWATI', 'JL.YOS SUDARSO N0 721, DESA PABEAN, KECAMATAN', 2017, 1, '0000-00-00', '$2y$10$nzSI/bNvjT3nvSgWqns5je6Uu2cR6bJ.X7PlK7yfDGbWTMrQ5ZfNe', '', '', 0),
('E41172150', 'Novando Agung Syahputra', 'Jl.Karimata V Blok A6 ', 2017, 1, '0000-00-00', '$2y$10$UveTteJ9S1ksLI67wRLjIOR3UtEt9lvGy.FLMwfMxL6RN3/oCZyIq', '', '', 0),
('E41172152', 'Muhammad Hadana Sabilal Muttaqin', 'Jl.Sultan Agung - Candijati - Arjasa  Kab. Je', 2017, 1, '0000-00-00', '$2y$10$oro2hZD/Ove9OrXHzJ4gjOPdFuY/zO5mK12cOtU2VybGxX6rC6Qbu', '', '', 0),
('E41172160', 'Nofita Safira Anggraini', 'Kalidilem-RanduagungRt:04 Rw:02Kec.Randuagung', 2017, 1, '1999-04-09', '$2y$10$VxVwEHpLJK/mLM1EWqwdt.gLSbGwySH7BLPttcxafzCTjJoT.gLEy', '', '', 0),
('E41172164', 'khansa izza alif', 'Jalan dharmawangsa 3, no 5 RT 01 RW 01 Rambip', 2017, 1, '0000-00-00', '$2y$10$yyDMIfDEZb5FSjxneIMdK.q7JF1pxyDCy.Z1yR47Ff/jrGPdGp9h6', '', '', 0),
('E41172165', 'Mochammad Lembar Adjie Bramantya', 'PERUMNAS PONJEN BLOK H NO.10 KENCONG-JEMBER 6', 2017, 1, '0000-00-00', '$2y$10$mB5Mz0DD3H8mF7DH6gMLkOgnVDVADjZ1wYuahXcQxI5ZWULCKL8LK', '', '', 0),
('E41172176', 'ILHAM BAHTIAR', 'Sidomulyo RT.06 RW.11 Sumberberas Kec. Muncar', 2017, 1, '1999-01-04', '$2y$10$Y42BqVk9y5/K3ryuaTK/cuDlivDhX1fhis9.yay9aWikCXIQLlFuq', '', '', 0),
('E41172209', 'Alfarezha Diaz Mahendra', 'Jalan pajajaran no 23 jember', 2017, 1, '1999-02-17', '$2y$10$8/TQrnrMfa7.HDtB6t.R5uainEWgjF6iGmyVlCH26Xy140u/pVsNi', '', '', 0),
('E41172219', 'Moh Wafiq Fakhri Ali', 'Situbondo, Kec. Panji, Perumahan Griya Panji ', 2017, 1, '1998-11-29', '$2y$10$8aAHf8HtJxpLeDDNdvzBZOiYQ.iLJp0Xx1qEUzTsnrGluIajo/Fle', '', '', 0),
('E41172228', 'Muhammad Alvian zidny', 'jln.sultan agung No.02 Gumukmas,Jember', 2017, 1, '1999-09-04', '$2y$10$0nKSrGBY3gabfDwu1xpX3uFkyQoc126z1DU.Ut6fqFcub5uLyBONG', '', '', 0),
('E41172249', 'Rendhy Pratama Putra', 'JL. RAYA KAWAH IJEN NO. 1 SEMPOL RT 007 RW 00', 2017, 1, '0000-00-00', '$2y$10$r1I5iS0EdwR3wngOrAD4A.az343Evuq/WchSV4jXmIEORE8pKOISO', '', '', 0),
('E41172253', 'Fahrizal Azi Ferdiansyah', 'Dsn Balak Kidul Ds Balak Kec Songgon Kab Banw', 2017, 1, '1999-09-05', '$2y$10$WdHIGMGPrO2jeMDz85BddOjdpw.zCwEAh1fXV0LdJ.AZLWfbC4EAO', '', '', 0),
('E4172054', 'Taufikur Rahman', NULL, 2017, 1, NULL, '$2y$10$FsDOyoLOyPxBwQONkXcj7OlD5Eyi2OQvAHYQDgdESWkh6/7bDEO3m', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_status`
--

CREATE TABLE `master_status` (
  `idMaster_status` int(3) NOT NULL,
  `Status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_status`
--

INSERT INTO `master_status` (`idMaster_status`, `Status`) VALUES
(1, 'Pengajuan Judul'),
(2, 'ACC Judul'),
(3, 'ACC SEMINAR'),
(4, 'Pembimbingan'),
(5, 'ACC Sidang'),
(6, 'Revisi Sidang'),
(7, 'Revisi Seminar'),
(8, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `idProdi` int(2) NOT NULL,
  `Nama_prodi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`idProdi`, `Nama_prodi`) VALUES
(1, 'D3 Manajemen Informatika'),
(2, 'D3 Teknik Komputer'),
(3, 'D4 Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idRole` int(2) NOT NULL,
  `Role` varchar(45) DEFAULT NULL,
  `global_role` enum('Administrator','Dosen Pembimbing','Admin Prodi','Koordinator TA','KPS','Mahasiswa') NOT NULL,
  `id_prodi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `Role`, `global_role`, `id_prodi`) VALUES
(1, 'Administrator', 'Administrator', 0),
(2, 'Dosen Pembimbing', 'Dosen Pembimbing', 0),
(3, 'Admin Prodi MIF', 'Admin Prodi', 1),
(4, 'Admin Prodi TKK', 'Admin Prodi', 2),
(5, 'Admin Prodi TIF', 'Admin Prodi', 3),
(6, 'Koordinator TA MIF', 'Koordinator TA', 1),
(7, 'Koordinator TA TKK', 'Koordinator TA', 2),
(8, 'Koordinator TA TIF', 'Koordinator TA', 3),
(9, 'Ketua Program Studi MIF', 'KPS', 1),
(10, 'Ketua Program Studi TKK', 'KPS', 2),
(11, 'Ketua Program Studi TIF', 'KPS', 3),
(12, 'Mahasiswa', 'Mahasiswa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `idRuangan` int(3) NOT NULL,
  `Nama_ruangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`idRuangan`, `Nama_ruangan`) VALUES
(1, '3.3');

-- --------------------------------------------------------

--
-- Table structure for table `status_ta`
--

CREATE TABLE `status_ta` (
  `id_status` int(2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_ta`
--

INSERT INTO `status_ta` (`id_status`, `status`) VALUES
(1, 'Pengajuan Judul'),
(2, 'ACC Judul'),
(3, 'Judul Ditolak'),
(4, 'Bimbingan Seminar'),
(5, 'Pengajuan Seminar'),
(6, 'Seminar'),
(7, 'Bimbingan Sidang'),
(8, 'Pengajuan Sidang'),
(9, 'Sidang'),
(10, 'Selesai Sidang'),
(11, 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `td_bimbingan`
--

CREATE TABLE `td_bimbingan` (
  `id_bimbingan` int(9) NOT NULL,
  `Tugas_akhir_id` int(9) NOT NULL,
  `Deskripsi` text DEFAULT NULL,
  `Data_Dukung` text DEFAULT NULL,
  `revisi` text DEFAULT NULL,
  `Tanggal_bimbingan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_bimbingan`
--

INSERT INTO `td_bimbingan` (`id_bimbingan`, `Tugas_akhir_id`, `Deskripsi`, `Data_Dukung`, `revisi`, `Tanggal_bimbingan`) VALUES
(1, 1, 'Bimbingan 1', NULL, NULL, '2020-10-28'),
(13, 105, 'asasdsdzxzxzx', '7a02c0e50919ddfd3426c0f0d9418f6e.png', NULL, '2020-03-23'),
(18, 112, 'bimbingan 1', '112_PHP telegram webhook_2021-01-09_1610174804.txt', 'Revisi ABC', '2021-01-09'),
(19, 112, 'aa', '112_PROSEDUR UJI DAYA TUMBUH MENGGUNAKAN METODE ISTA 2014_2021-01-11_1610371983.docx', '-', '2021-01-11'),
(21, 112, 'aa', '112_PROSEDUR UJI DAYA TUMBUH MENGGUNAKAN METODE ISTA 2014_2021-01-11_1610371983.docx', '-', '2021-01-11'),
(22, 112, 'bimbingan 4', '112_PROSEDUR UJI DAYA TUMBUH MENGGUNAKAN METODE ISTA 2014_2021-01-12_1610419131.docx', '-', '2021-01-12'),
(23, 112, 'test', '112_lima_2021-01-13_1610507473.png', '-', '2021-01-13'),
(24, 112, 'uuu', '112_compro_2021-01-13_1610507512.pdf', '-', '2021-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `td_seminar`
--

CREATE TABLE `td_seminar` (
  `id_seminar` int(6) NOT NULL,
  `Nilai_panelis` int(3) NOT NULL,
  `Nilai_pembimbing` int(3) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `id_TA` int(6) NOT NULL,
  `NIP_Panelis` varchar(20) DEFAULT NULL,
  `id_status` int(3) DEFAULT NULL,
  `idruangan` int(3) DEFAULT NULL,
  `lampiran_revisi` varchar(100) NOT NULL,
  `revisi` text NOT NULL,
  `status_revisi` enum('acc','pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_seminar`
--

INSERT INTO `td_seminar` (`id_seminar`, `Nilai_panelis`, `Nilai_pembimbing`, `Tanggal`, `jam`, `id_TA`, `NIP_Panelis`, `id_status`, `idruangan`, `lampiran_revisi`, `revisi`, `status_revisi`) VALUES
(10, 0, 0, '2021-01-11', '15:52:00', 2, '197008311998031001', NULL, 1, '', '', ''),
(12, 90, 85, '2021-01-12', '23:05:00', 112, '197008311998031001', NULL, 1, '12_PROSEDUR UJI DAYA TUMBUH MENGGUNAKAN METODE ISTA 2014__1610405452.docx', 'Revisi A\r\nRevisi B', 'acc');

-- --------------------------------------------------------

--
-- Table structure for table `td_sidang`
--

CREATE TABLE `td_sidang` (
  `id_sidang` int(6) NOT NULL,
  `Nilai_panelis` int(3) NOT NULL,
  `Nilai_anggota` int(3) NOT NULL,
  `Nilai_sidang` int(3) NOT NULL,
  `Nilai_bimbingan` int(3) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `id_TA` int(6) NOT NULL,
  `NIP_Anggota` varchar(20) DEFAULT NULL,
  `id_status` int(3) DEFAULT NULL,
  `idruangan` int(3) DEFAULT NULL,
  `lampiran_revisi` varchar(100) NOT NULL,
  `revisi` text NOT NULL,
  `status_revisi` enum('acc','pending','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_sidang`
--

INSERT INTO `td_sidang` (`id_sidang`, `Nilai_panelis`, `Nilai_anggota`, `Nilai_sidang`, `Nilai_bimbingan`, `Tanggal`, `jam`, `id_TA`, `NIP_Anggota`, `id_status`, `idruangan`, `lampiran_revisi`, `revisi`, `status_revisi`) VALUES
(5, 90, 80, 95, 85, '2021-01-13', '10:48:00', 112, '197008311998031001', NULL, 1, '5_compro-portofolio__1610539334.docx', 'Kurang A', 'acc');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idTopik` int(3) NOT NULL,
  `Topik` varchar(45) DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL,
  `icon` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`idTopik`, `Topik`, `Deskripsi`, `icon`) VALUES
(1, 'Big data', 'asaksaks', ''),
(2, 'Jaringan Komputer', 'Topik Jaringan Komputer', 'fa fa-globe'),
(3, 'Artificial Intelegence', 'Sistem Cerdas ', 'w'),
(4, 'Pengolahan Citra Digital', 'Image Processing', 'e'),
(5, 'Iot', 'Internet Of Thing', 'fa fa-wifi'),
(6, 'Elektronika & Instrumentasi', 'Elektronika & Instrumentasi', 'o'),
(7, 'Sistem Pendukung Keputusan', 'SPK', '1'),
(8, 'Sistem Pakar', 'Sistem Pakar', '2'),
(9, 'Sistem Cerdas', 'Sistem Cerdas', 'b'),
(10, 'Multimedia Interaktif', 'Multimedia', 'a'),
(11, 'Game Technology', 'Game Tech', 'b'),
(12, 'Sistem Informasi ', 'Sistem Informasi ', 'SI');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id` int(6) NOT NULL,
  `Judul_TA` varchar(45) DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL,
  `abstract` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `Dosen_NIP` varchar(20) NOT NULL,
  `Mahasiswa_NIM` varchar(9) NOT NULL,
  `id_status` int(3) NOT NULL,
  `id_topik` int(3) NOT NULL,
  `tgl_ACC` date DEFAULT NULL,
  `tgl_pengajuan` date DEFAULT NULL,
  `status` enum('','acc seminar','acc sidang') NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`id`, `Judul_TA`, `Deskripsi`, `abstract`, `keywords`, `Dosen_NIP`, `Mahasiswa_NIM`, `id_status`, `id_topik`, `tgl_ACC`, `tgl_pengajuan`, `status`) VALUES
(1, 'CCTV otomatis menggunakan hp cetol', 'Polijesip', 'polije ashiap', 'robot', '197104082001121003', 'E41171892', 4, 5, NULL, '2020-10-28', ''),
(2, '\"PENGEMBANGAN SISTEM PENGUKUR KESESUAIAN USER', 'z', 'c', 'b.', '197405192003121002', 'E41161322', 1, 10, NULL, '2020-09-18', ''),
(3, 'Penentuan Menu Diet Seimbang Bagi Penderita D', 'Penentuan Menu Diet Seimbang Bagi Penderita Diabetes Mellitus Menggunakan Logika Fuzzy Metode Tsukamoto\r\n', 'Penentuan Menu Diet Seimbang Bagi Penderita Diabetes Mellitus Menggunakan Logika Fuzzy Metode Tsukamoto\r\n', 'c.', '197810112005012002', 'E41161779', 1, 7, NULL, '2020-09-18', ''),
(4, 'Sistem Pendukung Keputusan Pemilihan Menu Mak', 'Sistem Pendukung Keputusan Pemilihan Menu Makanan Pasien Hipertensi Menggunakan Fuzzy Mamdani\r\n', 'Sistem Pendukung Keputusan Pemilihan Menu Makanan Pasien Hipertensi Menggunakan Fuzzy Mamdani\r\n', 'b.', '197810112005012002', 'E41162018', 1, 7, NULL, '2020-09-18', ''),
(5, 'Sistem Pakar Seleksi Kesiapan Bertelur pada A', 'Sistem Pakar Seleksi Kesiapan Bertelur pada Ayam Ras Menggunakan Metode Certainty Factor\r\n', 'Sistem Pakar Seleksi Kesiapan Bertelur pada Ayam Ras Menggunakan Metode Certainty Factor\r\n', 'c.', '199002272018032001', 'E41161395', 2, 8, '2020-01-14', '2020-09-18', ''),
(6, 'Implementasi Fuzzy tsukamoto untuk optimalisa', 'Implementasi Fuzzy tsukamoto untuk optimalisasi produksi batako studi kasus UD.AA', 'Implementasi Fuzzy tsukamoto untuk optimalisasi produksi batako studi kasus UD.AA', 'b.', '198907102019031010', 'E41161189', 1, 3, NULL, '2020-09-18', ''),
(7, 'Sistem Informasi Diagnosis Ikterus Neonatorum', 'Sistem Informasi Diagnosis Ikterus Neonatorum Menggunakan Logika Fuzzy\r\n', 'Sistem Informasi Diagnosis Ikterus Neonatorum Menggunakan Logika Fuzzy\r\n', 'si.', '199002272018032001', 'E41161390', 2, 12, '2020-01-14', '2020-09-18', ''),
(8, 'SISTEM IDENTIFIKASI KERUSAKAN BIJI KOPI ARABI', 'SISTEM IDENTIFIKASI KERUSAKAN BIJI KOPI ARABIKA MENGGUNAKAN BACKPROPAGATION\r\n', 'SISTEM IDENTIFIKASI KERUSAKAN BIJI KOPI ARABIKA MENGGUNAKAN BACKPROPAGATION\r\n', 'spk.', '199203022018032001', 'E41161965', 1, 8, NULL, '2020-09-18', ''),
(9, '\"IMPLEMENTASI ALGORITMA DOUBLE EXPONENTIAL SM', '\"IMPLEMENTASI ALGORITMA DOUBLE EXPONENTIAL SMOOTHING DALAM FORECASTING PENGADAAN BUKU DI DINAS PERPUSTAKAAN DAN KEARSIPAN \r\nKABUPATEN BONDOWOSO\"\r\n', '\"IMPLEMENTASI ALGORITMA DOUBLE EXPONENTIAL SMOOTHING DALAM FORECASTING PENGADAAN BUKU DI DINAS PERPUSTAKAAN DAN KEARSIPAN \r\nKABUPATEN BONDOWOSO\"\r\n', 'pcd.', '198012122005011001', 'E41161281', 1, 4, NULL, '2020-09-18', ''),
(10, 'Aksara jawa untuk klasifikasi level motorik h', 'Aksara jawa untuk klasifikasi level motorik halus anak usia awal sekolah\r\n', 'Aksara jawa untuk klasifikasi level motorik halus anak usia awal sekolah\r\n', 'A.i', '197808192005012001', 'E41161716', 1, 3, NULL, '2020-09-18', ''),
(11, 'Penerapan Algoritma C4.5 pada Aplikasi Penent', 'Penerapan Algoritma C4.5 pada Aplikasi Penentuan Kemampuan Motorik Halus Anak Usia Awal Sekolah\r\n', 'Penerapan Algoritma C4.5 pada Aplikasi Penentuan Kemampuan Motorik Halus Anak Usia Awal Sekolah\r\n', 'A.i', '197808192005012001', 'E41161385', 1, 3, NULL, '2020-09-18', ''),
(12, 'Penerapan Metode Dempster Shafer dan Certaint', 'Penerapan Metode Dempster Shafer dan Certainty Factor pada Sistem Pakar Diagnosis Hama dan Penyakit Tanaman Pisang\r\n', 'Penerapan Metode Dempster Shafer dan Certainty Factor pada Sistem Pakar Diagnosis Hama dan Penyakit Tanaman Pisang\r\n', 'sp.', '198012122005011001', 'E41161211', 1, 8, NULL, '2020-09-18', ''),
(13, 'Rancang Bangun Sistem Koreksi Otomatis Dengan', 'Rancang Bangun Sistem Koreksi Otomatis Dengan Menggabungkan GLSA dan Thesaurus Pada Dokumen Esai\r\n', 'Rancang Bangun Sistem Koreksi Otomatis Dengan Menggabungkan GLSA dan Thesaurus Pada Dokumen Esai\r\n', 'sc.', '198907102019031010', 'E41161299', 1, 9, NULL, '2020-09-18', ''),
(14, 'Sistem Pendukung Keputusan Pemilihan Pupuk Pa', 'Sistem Pendukung Keputusan Pemilihan Pupuk Padi Berdasarkan Umur Padi Menggunakan Fuzzy SAW\r\n', 'Sistem Pendukung Keputusan Pemilihan Pupuk Padi Berdasarkan Umur Padi Menggunakan Fuzzy SAW\r\n', 'spk.', '199002272018032001', 'E41161056', 2, 7, '2020-01-14', '2020-09-18', ''),
(15, 'Sistem informasi tata kelola clinical pathway', 'Sistem informasi tata kelola clinical pathway pasien rawat inap BPJS \r\n', 'Sistem informasi tata kelola clinical pathway pasien rawat inap BPJS \r\n', 'si.', '198608022015042002', 'E41160711', 1, 12, NULL, '2020-09-18', ''),
(16, 'Sistem Pendukung Keputusan Pemilihan Perumaha', 'Sistem Pendukung Keputusan Pemilihan Perumahan\r\n', 'Sistem Pendukung Keputusan Pemilihan Perumahan\r\n', 'spk.', '199205282018032001', 'E41160729', 1, 7, NULL, '2020-09-18', ''),
(17, 'Sistem Pendukung Keputusan Pemilihan Pemasok ', 'Sistem Pendukung Keputusan Pemilihan Pemasok Menggunakan Metode Fuzzy AHP\r\n', 'Sistem Pendukung Keputusan Pemilihan Pemasok Menggunakan Metode Fuzzy AHP\r\n', 'spk.', '197110092003121001', 'E41161052', 1, 7, NULL, '2020-09-18', ''),
(18, 'Evaluasi Tata Kelola Sistem Informasi Manajem', 'Evaluasi Tata Kelola Sistem Informasi Manajemen ( SIM ONLINE ) Politeknik Negeri Jember Berbasis Framework Cobit\r\n', 'Evaluasi Tata Kelola Sistem Informasi Manajemen ( SIM ONLINE ) Politeknik Negeri Jember Berbasis Framework Cobit\r\n', 'si.', '198608022015042002', 'E41160388', 1, 12, NULL, '2020-09-18', ''),
(19, 'Implementasi metode backpropagation neural ne', 'Implementasi metode backpropagation neural network dalam memprediksi hasil produksi kedelai berdasarkan pengaruh iklim\r\n', 'Implementasi metode backpropagation neural network dalam memprediksi hasil produksi kedelai berdasarkan pengaruh iklim\r\n', 'A.i', '197110092003121001', 'E41160695', 1, 3, NULL, '2020-09-18', ''),
(20, 'Sistem identifikasi penyakit pada tanaman men', 'Sistem identifikasi penyakit pada tanaman mentimun menggunakan probabilistic neural network\r\n', 'Sistem identifikasi penyakit pada tanaman mentimun menggunakan probabilistic neural network\r\n', 'sp.', '199203022018032001', 'E41161422', 1, 8, NULL, '2020-09-18', ''),
(21, 'Kontrol otomatis untuk keseimbangan kandang a', 'Kontrol otomatis untuk keseimbangan kandang ayam broiler berbasis internet of things\r\n', 'Kontrol otomatis untuk keseimbangan kandang ayam broiler berbasis internet of things\r\n', 'el.', '199205282018032001', 'E41162045', 1, 6, NULL, '2020-09-18', ''),
(22, 'Implementasi Metode Fuzzy Sugeno Pada Mikroko', 'Implementasi Metode Fuzzy Sugeno Pada Mikrokontrollee Untuk Penentuan Kualitas Air Tambak Secara On-Line\r\n', 'Implementasi Metode Fuzzy Sugeno Pada Mikrokontrollee Untuk Penentuan Kualitas Air Tambak Secara On-Line\r\n', 'iot', '199103152017031001', 'E41161120', 1, 5, NULL, '2020-09-18', ''),
(23, 'Pengenalan Isyarat Abjad pada Sistem Isyarat ', 'Pengenalan Isyarat Abjad pada Sistem Isyarat Bahasa Indonesia Secara Real-Time dengan Menggunakan Metode Backpropagation\r\n', 'Pengenalan Isyarat Abjad pada Sistem Isyarat Bahasa Indonesia Secara Real-Time dengan Menggunakan Metode Backpropagation\r\n', 'A.i', '197909212005011001', 'E41160605', 1, 3, NULL, '2020-09-18', ''),
(24, 'Analisis Peramalan Perencanaan Produksi Roti ', 'Analisis Peramalan Perencanaan Produksi Roti Menggunakan Metode Time Series Triple Exponential Smoothing (Studi Kasus: Perusahaan Fatimah Patrang, Jember)\r\n', 'Analisis Peramalan Perencanaan Produksi Roti Menggunakan Metode Time Series Triple Exponential Smoothing (Studi Kasus: Perusahaan Fatimah Patrang, Jember)\r\n', 'si.', '198012122005011001', 'E41161609', 1, 9, NULL, '2020-09-18', ''),
(25, 'Penentuan Komposisi Bahan Makanan Bagi Pender', 'Penentuan Komposisi Bahan Makanan Bagi Penderita Obesitas Dengan Metode Algoritma Genetika\r\n', 'Penentuan Komposisi Bahan Makanan Bagi Penderita Obesitas Dengan Metode Algoritma Genetika\r\n', 'sp.', '199002272018032001', 'E41160227', 2, 8, '2020-01-14', '2020-09-18', ''),
(26, 'Pengukuran dan pengembangan kualitas website ', 'Pengukuran dan pengembangan kualitas website jurusan kesehatan politeknik negeri jember menggunakan metode webqual 4.0\r\n', 'Pengukuran dan pengembangan kualitas website jurusan kesehatan politeknik negeri jember menggunakan metode webqual 4.0\r\n', 'sc.', '199002272018032001', 'E41161208', 1, 9, NULL, '2020-09-18', ''),
(27, 'Sistem pakar diagnosa autis sejak dini menggu', 'Sistem pakar diagnosa autis sejak dini menggunakan metode Certainty factor \r\n', 'Sistem pakar diagnosa autis sejak dini menggunakan metode Certainty factor \r\n', 'sp.', '197810112005012002', 'E41160483', 1, 8, NULL, '2020-09-18', ''),
(28, 'Sistem Pakar Diagnosa Penyakit Ikan Lele Meng', 'Sistem Pakar Diagnosa Penyakit Ikan Lele Menggunakan Metode Certainty Factor\r\n', 'Sistem Pakar Diagnosa Penyakit Ikan Lele Menggunakan Metode Certainty Factor\r\n', 'sp.', '198012122005011001', 'E41160182', 1, 8, NULL, '2020-09-18', ''),
(29, 'sistem pakar diagnosis gizi buruk menggunakan', 'sistem pakar diagnosis gizi buruk menggunakan metode certainty factor\r\n', 'sistem pakar diagnosis gizi buruk menggunakan metode certainty factor\r\n', 'sp.', '199002272018032001', 'E41160161', 1, 8, NULL, '2020-09-18', ''),
(30, 'Sistem Pakar Kenakalan Remaja SMP menggunakan', 'Sistem Pakar Kenakalan Remaja SMP menggunakan Metode Theorema Bayes Berbasis Web\r\n', 'Sistem Pakar Kenakalan Remaja SMP menggunakan Metode Theorema Bayes Berbasis Web\r\n', 'sp.', '197810112005012002', 'E41160104', 1, 8, NULL, '2020-09-18', ''),
(31, 'Klasifikasi Jenis Jamur Menggunakan Metode Al', 'Klasifikasi Jenis Jamur Menggunakan Metode Algoritma Decision Tree J48\r\n', 'Klasifikasi Jenis Jamur Menggunakan Metode Algoritma Decision Tree J48\r\n', 'sc.', '197909212005011001', 'E41161145', 1, 9, NULL, '2020-09-18', ''),
(32, 'Sistem pakar diagnosa hama dan penyakit jamur', 'Sistem pakar diagnosa hama dan penyakit jamur tiram menggunakan certainty factor\r\n', 'Sistem pakar diagnosa hama dan penyakit jamur tiram menggunakan certainty factor\r\n', 'sp.', '197405192003121002', 'E41161401', 1, 8, NULL, '2020-09-18', ''),
(33, 'Penentuan Status Gizi dan Menu Makanan Atlet ', 'Penentuan Status Gizi dan Menu Makanan Atlet Karate Menggunakan Metode K-Nearest Neighbor (KNN)\r\n', 'Penentuan Status Gizi dan Menu Makanan Atlet Karate Menggunakan Metode K-Nearest Neighbor (KNN)\r\n', 'sp.', '199002272018032001', 'E41161520', 1, 8, NULL, '2020-09-18', ''),
(34, 'Sistem informasi estimasi masak fisiologis be', 'Sistem informasi estimasi masak fisiologis benih padi berdasarkan metode akumulasi panas\r\n', 'Sistem informasi estimasi masak fisiologis benih padi berdasarkan metode akumulasi panas\r\n', 'si.', '198511282008121002', 'E41160728', 1, 12, NULL, '2020-09-18', ''),
(35, '\"Sistem pendukung keputusan penilaian kinerja', '\"Sistem pendukung keputusan penilaian kinerja pegawai menggunakan metode analytical hierarchy proses (AHP) \r\n(Studi Kasus : PT. Mangli Djaya Raya)\"\r\n', '\"Sistem pendukung keputusan penilaian kinerja pegawai menggunakan metode analytical hierarchy proses (AHP) \r\n(Studi Kasus : PT. Mangli Djaya Raya)\"\r\n', 'spk.', '197405192003121002', 'E41160083', 1, 7, NULL, '2020-09-18', ''),
(36, 'Sistem pakar identifikasi penyakit tanaman te', 'Sistem pakar identifikasi penyakit tanaman tembakau kasturi menggunakan metode fuzzy\r\n', 'Sistem pakar identifikasi penyakit tanaman tembakau kasturi menggunakan metode fuzzy\r\n', 'sp.', '199112112018031001', 'E41161383', 1, 8, NULL, '2020-09-18', ''),
(37, 'Perbandingan metode euclidean probability dan', 'Perbandingan metode euclidean probability dan decision tree j48 dalam mendiagnosa penyakit dan hama kedelai edamame\r\n', 'Perbandingan metode euclidean probability dan decision tree j48 dalam mendiagnosa penyakit dan hama kedelai edamame\r\n', 'A.i', '198511282008121002', 'E41160825', 1, 3, NULL, '2020-09-18', ''),
(38, 'Analisis Kualitas Perangkat Lunak Website Jur', 'Analisis Kualitas Perangkat Lunak Website Jurnal Teknologi Informasi dan Terapan (JTIT) Menggunakan MCCall\r\n', 'Analisis Kualitas Perangkat Lunak Website Jurnal Teknologi Informasi dan Terapan (JTIT) Menggunakan MCCall\r\n', 'sc.', '199002272018032001', 'E41160513', 1, 9, NULL, '2020-09-18', ''),
(39, 'Sistem Pendukung Keputusan Rekomendari Peneri', 'Sistem Pendukung Keputusan Rekomendari Penerima Bantuan Program Keluarga Harapan Berbasis Web dengan Metode Simple Additive Weighting\r\n', 'Sistem Pendukung Keputusan Rekomendari Penerima Bantuan Program Keluarga Harapan Berbasis Web dengan Metode Simple Additive Weighting\r\n', 'spk.', '197405192003121002', 'E41160460', 1, 7, NULL, '2020-09-18', ''),
(40, 'Sistem Informasi Geografis Persebaran Pajak B', 'Sistem Informasi Geografis Persebaran Pajak Bumi Bangunan menggunakan Djikstra (Studi Kasus di Kantor Badan Pendapatan Daerah Kabupaten Jember)\r\n', 'Sistem Informasi Geografis Persebaran Pajak Bumi Bangunan menggunakan Djikstra (Studi Kasus di Kantor Badan Pendapatan Daerah Kabupaten Jember)\r\n', 'si.G', '197405192003121002', 'E41160167', 1, 12, NULL, '2020-09-18', ''),
(41, 'Analisis Perbandingan Algoritma K Means dan F', 'Analisis Perbandingan Algoritma K Means dan Fuzzy K Means untuk Clustering Hasil Proses Pembelajaran Siswa\r\n', 'Analisis Perbandingan Algoritma K Means dan Fuzzy K Means untuk Clustering Hasil Proses Pembelajaran Siswa\r\n', 'pcd.', '198608022015042002', 'E41161854', 1, 4, NULL, '2020-09-18', ''),
(42, 'Sistem Pakar Diagnosa Penyakit Pada Udang Van', 'Sistem Pakar Diagnosa Penyakit Pada Udang Vannamei Menggunakan Metode Certainty Factor\r\n', 'Sistem Pakar Diagnosa Penyakit Pada Udang Vannamei Menggunakan Metode Certainty Factor\r\n', 'sp.', '198012122005011001', 'E41160482', 1, 8, NULL, '2020-09-18', ''),
(43, 'Sistem Pendukung Keputusan  terintegrasi pari', 'Sistem Pendukung Keputusan  terintegrasi pariwisata kabupaten jember menggunakan metode topsis berbasis website\r\n', 'Sistem Pendukung Keputusan  terintegrasi pariwisata kabupaten jember menggunakan metode topsis berbasis website\r\n', 'spk.', '198012122005011001', 'E41160077', 1, 7, NULL, '2020-09-18', ''),
(44, 'Sistem Informasi Peramalan Pertamax Menggunak', 'Sistem Informasi Peramalan Pertamax Menggunakan Metode Single Moving Average Dengan Memperhatikan Stok\r\n', 'Sistem Informasi Peramalan Pertamax Menggunakan Metode Single Moving Average Dengan Memperhatikan Stok\r\n', 'si.', '197008311998031001', 'E41161930', 1, 12, NULL, '2020-09-18', ''),
(45, 'Penentuan Rute Terpendek Pengiriman Barang Me', 'Penentuan Rute Terpendek Pengiriman Barang Menggunakan Algoritma Dijkstra Berbasis Android\r\n', 'Penentuan Rute Terpendek Pengiriman Barang Menggunakan Algoritma Dijkstra Berbasis Android\r\n', 'sc.', '199205282018032001', 'E41161340', 1, 9, NULL, '2020-09-18', ''),
(46, 'Sistem Pakar Diagnosa Stunting pada Balita', 'Sistem Pakar Diagnosa Stunting pada Balita\r\n', 'Sistem Pakar Diagnosa Stunting pada Balita\r\n', 'sp.', '197405192003121002', 'E41160519', 1, 8, NULL, '2020-09-18', ''),
(47, 'Pengembangan Person of Interest System, mengg', 'Pengembangan Person of Interest System, menggunakan metode Task Analysis(studi kasus: Lisa Blackpink)\r\n', 'Pengembangan Person of Interest System, menggunakan metode Task Analysis(studi kasus: Lisa Blackpink)\r\n', 'sc.', '199112112018031001', 'E41161342', 1, 9, NULL, '2020-09-18', ''),
(48, '\"Sistem Peramalan Stok Penjualan  Sembako Pad', '\"Sistem Peramalan Stok Penjualan \r\nSembako Pada Toko Morodadi Menggunakan Metode Triple Exponential Smoothing\"\r\n', '\"Sistem Peramalan Stok Penjualan \r\nSembako Pada Toko Morodadi Menggunakan Metode Triple Exponential Smoothing\"\r\n', 'si.', '197810112005012002', 'E41161578', 1, 12, NULL, '2020-09-18', ''),
(49, 'Sistem informasi geografis penentuan jalur te', 'Sistem informasi geografis penentuan jalur terpendek objek wisata di jawa timur menggunakan metode floyd warshall\r\n', 'Sistem informasi geografis penentuan jalur terpendek objek wisata di jawa timur menggunakan metode floyd warshall\r\n', 'si.G', '197405192003121002', 'E41160242', 1, 12, NULL, '2020-09-18', ''),
(50, 'PENGEMBANGAN SISTEM PERAMALAN RADIASI MATAHAR', 'PENGEMBANGAN SISTEM PERAMALAN RADIASI MATAHARI MENGGUNAKAN METODE LONG SHORT-TERM MEMORY\r\n', 'PENGEMBANGAN SISTEM PERAMALAN RADIASI MATAHARI MENGGUNAKAN METODE LONG SHORT-TERM MEMORY\r\n', 'si.', '199112112018031001', 'E41160660', 1, 12, NULL, '2020-09-18', ''),
(51, 'Pemutuan Edamame Menggunakan Citra Digital De', 'Pemutuan Edamame Menggunakan Citra Digital Dengan K-Nearest Neighbour\r\n', 'Pemutuan Edamame Menggunakan Citra Digital Dengan K-Nearest Neighbour\r\n', 'pcd.', '197810112005012002', 'E41160603', 1, 4, NULL, '2020-09-18', ''),
(52, 'Sistem pendukung keputusan menggunakan metode', 'Sistem pendukung keputusan menggunakan metode analytical hierarchy process untuk wedding organizer kabupaten jember \r\n', 'Sistem pendukung keputusan menggunakan metode analytical hierarchy process untuk wedding organizer kabupaten jember \r\n', 'spk.', '199203022018032001', 'E41160224', 1, 7, NULL, '2020-09-18', ''),
(53, 'Kontrol otomatis untuk keseimbangan kandang a', 'Kontrol otomatis untuk keseimbangan kandang ayam broiler berbasis internet of things\r\n', 'Kontrol otomatis untuk keseimbangan kandang ayam broiler berbasis internet of things\r\n', 'iot', '199205282018032001', 'E41162045', 1, 5, NULL, '2020-09-18', ''),
(54, 'SISTEM PENDUKUNG KEPUTUSAN KELAYAYAKAN INVEST', 'SISTEM PENDUKUNG KEPUTUSAN KELAYAYAKAN INVESTASI UNTUK PENGEMBANGAN USAHA DARI ASPEK KEUANGAN DENGAN MENGGUNAKAN METODE SMART \r\n', 'SISTEM PENDUKUNG KEPUTUSAN KELAYAYAKAN INVESTASI UNTUK PENGEMBANGAN USAHA DARI ASPEK KEUANGAN DENGAN MENGGUNAKAN METODE SMART \r\n', 'spk.', '198608022015042002', 'E41162068', 1, 7, NULL, '2020-09-18', ''),
(55, 'Sistem Pakar Diagnosis Resiko Tinggi Kehamila', 'Sistem Pakar Diagnosis Resiko Tinggi Kehamilan\r\n', 'Sistem Pakar Diagnosis Resiko Tinggi Kehamilan\r\n', 'sp.', '199205282018032001', 'E41160732', 1, 8, NULL, '2020-09-18', ''),
(56, 'Sistem Pakar Diagnosis Penyakit Ikan Kerapu m', 'Sistem Pakar Diagnosis Penyakit Ikan Kerapu menggunakan Metode Dempster Shafer\r\n', 'Sistem Pakar Diagnosis Penyakit Ikan Kerapu menggunakan Metode Dempster Shafer\r\n', 'sp.', '197110092003121001', 'E41160765', 1, 8, NULL, '2020-09-18', ''),
(57, 'Pengolahan Citra Digital Deteksi Defisiensi N', 'Pengolahan Citra Digital Deteksi Defisiensi Nutrisi Pada Tanaman Jagung Menggunakan Metode Color Moments dan GLCM\r\n', 'Pengolahan Citra Digital Deteksi Defisiensi Nutrisi Pada Tanaman Jagung Menggunakan Metode Color Moments dan GLCM\r\n', 'pcd.', '198511282008121002', 'E41160231', 1, 4, NULL, '2020-09-18', ''),
(58, 'Penentuan Variasi Barang Pada Paket Lebaran M', 'Penentuan Variasi Barang Pada Paket Lebaran Menggunakan Algoritma Welch Powell\r\n', 'Penentuan Variasi Barang Pada Paket Lebaran Menggunakan Algoritma Welch Powell\r\n', 'sp.', '197810112005012002', 'E41161641', 1, 8, NULL, '2020-09-18', ''),
(59, 'KONVERSI UI  PROTOTYPE ANDROID BERUPA GAMBAR ', 'KONVERSI UI  PROTOTYPE ANDROID BERUPA GAMBAR MENJADI SEBUAH SOURCE CODE  XML DENGAN MENGGUNAKAN DEEP LEARNING\r\n', 'KONVERSI UI  PROTOTYPE ANDROID BERUPA GAMBAR MENJADI SEBUAH SOURCE CODE  XML DENGAN MENGGUNAKAN DEEP LEARNING\r\n', 'pcd.', '198608022015042002', 'E41160474', 1, 4, NULL, '2020-09-18', ''),
(60, 'Analisis perbandingan spk metode fuzzy saw da', 'Analisis perbandingan spk metode fuzzy saw dan wp pada pemilihan smartphone berbasis website\r\n', 'Analisis perbandingan spk metode fuzzy saw dan wp pada pemilihan smartphone berbasis website\r\n', 'sc.', '199002272018032001', 'E41161100', 1, 9, NULL, '2020-09-18', ''),
(61, 'Clustering dengan menggunakan metode K-means ', 'Clustering dengan menggunakan metode K-means untuk menentukan Matchmaking pada Game Online Mobile Legends\r\n', 'Clustering dengan menggunakan metode K-means untuk menentukan Matchmaking pada Game Online Mobile Legends\r\n', 'A.i', '198511282008121002', 'E41161947', 1, 3, NULL, '2020-09-18', ''),
(62, 'SISTEM IDENTIFIKASI VARIETAS PISANG (Musa Par', 'SISTEM IDENTIFIKASI VARIETAS PISANG (Musa Paradiasaca) MENGGUNAKAN NEURAL NETWORK\r\n', 'SISTEM IDENTIFIKASI VARIETAS PISANG (Musa Paradiasaca) MENGGUNAKAN NEURAL NETWORK\r\n', 'sp.', '199203022018032001', 'E41161914', 1, 8, NULL, '2020-09-18', ''),
(63, 'PENGEMBANGAN SISTEM KLASIFIKASI BENIH CABAI B', 'PENGEMBANGAN SISTEM KLASIFIKASI BENIH CABAI BESAR BERMUTU\r\n', 'PENGEMBANGAN SISTEM KLASIFIKASI BENIH CABAI BESAR BERMUTU\r\n', 'sp.', '199112112018031001', 'E41161529', 1, 8, NULL, '2020-09-18', ''),
(64, 'Sistem Pendukung Keputusan Pemilihan Kesesuai', 'Sistem Pendukung Keputusan Pemilihan Kesesuaian Lahan Tanam Tembakau Voor Oogst Kasruri di Kabupaten Jember Menggunakan Fuzzy Sugeno\r\n', 'Sistem Pendukung Keputusan Pemilihan Kesesuaian Lahan Tanam Tembakau Voor Oogst Kasruri di Kabupaten Jember Menggunakan Fuzzy Sugeno\r\n', 'spk.', '198012122005011001', 'E41160510', 1, 7, NULL, '2020-09-18', ''),
(65, 'Sistem Pendukung Keputusan Penentuan Pupuk Ta', 'Sistem Pendukung Keputusan Penentuan Pupuk Tanaman Cabai berdasarkan Umur dan pH Tanah dengan Metode fuzzy TOPSIS\r\n', 'Sistem Pendukung Keputusan Penentuan Pupuk Tanaman Cabai berdasarkan Umur dan pH Tanah dengan Metode fuzzy TOPSIS\r\n', 'spk.', '197111151998021001', 'E41160737', 1, 7, NULL, '2020-09-18', ''),
(66, 'SISTEM PAKAR PENENTUAN KUALITAS MUTU TEMBAKAU', 'SISTEM PAKAR PENENTUAN KUALITAS MUTU TEMBAKAU FCV (Flue-Cured Virginia) BERBASIS WEB DENGAN MENGGUNAKAN METODE CERTAINTY FACTOR\r\n', 'SISTEM PAKAR PENENTUAN KUALITAS MUTU TEMBAKAU FCV (Flue-Cured Virginia) BERBASIS WEB DENGAN MENGGUNAKAN METODE CERTAINTY FACTOR\r\n', 'sp.', '197405192003121002', 'E41160130', 1, 8, NULL, '2020-09-18', ''),
(67, 'ANALISIS USER INTERFACE DAN USER EXPERIENCE P', 'ANALISIS USER INTERFACE DAN USER EXPERIENCE PADA WEBSITE JPC POLITEKNIK NEGERI JEMBER DENGAN MENGGUNAKAN METODE HEURISTIC EVALUATION\r\n', 'ANALISIS USER INTERFACE DAN USER EXPERIENCE PADA WEBSITE JPC POLITEKNIK NEGERI JEMBER DENGAN MENGGUNAKAN METODE HEURISTIC EVALUATION\r\n', 'A.i', '198511282008121002', 'E41161904', 1, 3, NULL, '2020-09-18', ''),
(68, 'Analisis pengukuran kualitas perangkat lunak ', 'Analisis pengukuran kualitas perangkat lunak menggunakan standard ISO 9126 pada website jurusan teknologi informasi (WEB JTI) Politeknik Negeri Jember\r\n', 'Analisis pengukuran kualitas perangkat lunak menggunakan standard ISO 9126 pada website jurusan teknologi informasi (WEB JTI) Politeknik Negeri Jember\r\n', 'spk.', '198012122005011001', 'E41160978', 1, 7, NULL, '2020-09-18', ''),
(69, 'Sistem Pakar Diagnosis Penyakit pada Tanaman ', 'Sistem Pakar Diagnosis Penyakit pada Tanaman Kopi menggunakan Metode Dempster Shafer\r\n', 'Sistem Pakar Diagnosis Penyakit pada Tanaman Kopi menggunakan Metode Dempster Shafer\r\n', 'sp.', '199002272018032001', 'E41161219', 1, 8, NULL, '2020-09-18', ''),
(70, 'Analisis Aplikasi Mobile JKN Menggunakan Meto', 'Analisis Aplikasi Mobile JKN Menggunakan Metode Usability Testing\r\n', 'Analisis Aplikasi Mobile JKN Menggunakan Metode Usability Testing\r\n', 'si.', '198511282008121002', 'E41161991', 1, 12, NULL, '2020-09-18', ''),
(71, 'ANALISA HAMA DAN PENYAKIT PADA TANAMAN KUBIS ', 'ANALISA HAMA DAN PENYAKIT PADA TANAMAN KUBIS BUNGA (BRASSICA OLERACEA VAR. BOTRITYS L) DENGAN MEMANFAATKAN METODE DEMPSTER - SHAFER\r\n', 'ANALISA HAMA DAN PENYAKIT PADA TANAMAN KUBIS BUNGA (BRASSICA OLERACEA VAR. BOTRITYS L) DENGAN MEMANFAATKAN METODE DEMPSTER - SHAFER\r\n', 'pcd.', '198907102019031010', 'E41161676', 1, 4, NULL, '2020-09-18', ''),
(72, 'ANALISIS WEBSITE INDODAX DENGAN MENGGUNAKAN M', 'ANALISIS WEBSITE INDODAX DENGAN MENGGUNAKAN METODE USER CENTERED DIAGRAM\r\n', 'ANALISIS WEBSITE INDODAX DENGAN MENGGUNAKAN METODE USER CENTERED DIAGRAM\r\n', 'A.i', '199112112018031001', 'E41161610', 1, 3, NULL, '2020-09-18', ''),
(73, 'Pengembangan Sistem Informasi Geografis Sebar', 'Pengembangan Sistem Informasi Geografis Sebaran Kepadatan Arus Lalu Lintas Di Kota Jember Pada Jam Tertentu\r\n', 'Pengembangan Sistem Informasi Geografis Sebaran Kepadatan Arus Lalu Lintas Di Kota Jember Pada Jam Tertentu\r\n', 'si.G', '199112112018031001', 'E41161953', 1, 12, NULL, '2020-09-18', ''),
(74, '\"SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN MENU MA', '\"SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN MENU MAKANAN BERDASARKAN KEBUTUHAN GIZI MENGGUNAKAN METODE ALGORITMA GENETIKA:\r\nSTUDI KASUS KANTIN POLITEKNIK NEGERI JEMBER\"\r\n', '\"SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN MENU MAKANAN BERDASARKAN KEBUTUHAN GIZI MENGGUNAKAN METODE ALGORITMA GENETIKA:\r\nSTUDI KASUS KANTIN POLITEKNIK NEGERI JEMBER\"\r\n', 'spk.', '198907102019031010', 'E41160914', 1, 7, NULL, '2020-09-18', ''),
(75, 'PENGENALAN MOTIF BATIK MENGGUNAKAN METODE GLC', 'PENGENALAN MOTIF BATIK MENGGUNAKAN METODE GLCM DAN NAIVE BAYES CLASSIFIER\r\n', 'PENGENALAN MOTIF BATIK MENGGUNAKAN METODE GLCM DAN NAIVE BAYES CLASSIFIER\r\n', 'A.i', '198511282008121002', 'E41160295', 1, 3, NULL, '2020-09-18', ''),
(76, 'Sistem pakar pemilihan menu makanan berdasark', 'Sistem pakar pemilihan menu makanan berdasarkan kebutuhan kalori pada ibu hamil\r\n', 'Sistem pakar pemilihan menu makanan berdasarkan kebutuhan kalori pada ibu hamil\r\n', 'sp.', '199205282018032001', 'E41160701', 1, 8, NULL, '2020-09-18', ''),
(77, 'ANALISIS DAN EVALUASI TINGKAT KEPUASAN PENGGU', 'ANALISIS DAN EVALUASI TINGKAT KEPUASAN PENGGUNA SISTEM INFORMASI INLIS DINAS PERPUSTAKAAN DAN KEARSIPAN KABUPATEN BONDOWOSO\r\n', 'ANALISIS DAN EVALUASI TINGKAT KEPUASAN PENGGUNA SISTEM INFORMASI INLIS DINAS PERPUSTAKAAN DAN KEARSIPAN KABUPATEN BONDOWOSO\r\n', 'si.', '198608022015042002', 'E41162009', 1, 12, NULL, '2020-09-18', ''),
(78, 'Sistem Peramalan Pengadaan Obat Berbasis Web ', 'Sistem Peramalan Pengadaan Obat Berbasis Web Dengan Metode Triple Exponential Smoothing Dan Winter\'s Exponential Smoothing (Studi Kasus Di Klinik Dokterku Taman Gading Jember)\r\n', 'Sistem Peramalan Pengadaan Obat Berbasis Web Dengan Metode Triple Exponential Smoothing Dan Winter\'s Exponential Smoothing (Studi Kasus Di Klinik Dokterku Taman Gading Jember)\r\n', 'si.', '198012122005011001', 'E41160352', 1, 12, NULL, '2020-09-18', ''),
(79, 'Sistem Pendukung Keputusan Pelurusan Rambut R', 'Sistem Pendukung Keputusan Pelurusan Rambut Rebonding dan Smoothing Menggunakan Metode SAW\r\n', 'Sistem Pendukung Keputusan Pelurusan Rambut Rebonding dan Smoothing Menggunakan Metode SAW\r\n', 'spk.', '197810112005012002', 'E41160331', 1, 7, NULL, '2020-09-18', ''),
(80, 'Implementasi Fuzzy Tsukamoto Untuk Menentukan', 'Implementasi Fuzzy Tsukamoto Untuk Menentukan Tingkat Keparahan Penyakit Scabies Pada Kucing\r\n', 'Implementasi Fuzzy Tsukamoto Untuk Menentukan Tingkat Keparahan Penyakit Scabies Pada Kucing\r\n', 'A.i', '197008311998031001', 'E41161091', 1, 3, NULL, '2020-09-18', ''),
(81, 'Online Weather Station Monitoring System dan ', 'Online Weather Station Monitoring System dan Klasifikasi kualitas Udara untuk area Persawahan dengan Metode Fuzzy\r\n', 'Online Weather Station Monitoring System dan Klasifikasi kualitas Udara untuk area Persawahan dengan Metode Fuzzy\r\n', 'el.', '199103152017031001', 'E41160775', 1, 6, NULL, '2020-09-18', ''),
(82, 'PEMANFAATAN BUSSINES INTELIGENCE PADA PERAMAL', 'PEMANFAATAN BUSSINES INTELIGENCE PADA PERAMALAN HASIL PRODUKSI PADI DENGAN PENDEKATAN DOUBLE EXPONENTIAL SMOOTHING\r\n', 'PEMANFAATAN BUSSINES INTELIGENCE PADA PERAMALAN HASIL PRODUKSI PADI DENGAN PENDEKATAN DOUBLE EXPONENTIAL SMOOTHING\r\n', 'si.', '198907102019031010', 'E41161132', 1, 12, NULL, '2020-09-18', ''),
(83, 'Sistem Pendukung Keputusan Pemilihan Varietas', 'Sistem Pendukung Keputusan Pemilihan Varietas Tanaman Berdasarkan Kondisi Lahan dengan Metode Fuzzy\r\n', 'Sistem Pendukung Keputusan Pemilihan Varietas Tanaman Berdasarkan Kondisi Lahan dengan Metode Fuzzy\r\n', 'spk.', '199205282018032001', 'E41161178', 1, 7, NULL, '2020-09-18', ''),
(84, 'Rancang Bangun Sistem Pemantauan Kepatuhan Pa', 'Rancang Bangun Sistem Pemantauan Kepatuhan Pasien Prolanis DM 2 Dengan Memanfaatkan Smart Wearable dan Metode AHP\r\n', 'Rancang Bangun Sistem Pemantauan Kepatuhan Pasien Prolanis DM 2 Dengan Memanfaatkan Smart Wearable dan Metode AHP\r\n', 'pcd.', '198907102019031010', 'E41160141', 1, 4, NULL, '2020-09-18', ''),
(85, 'Sistem Pendukung Keputusan Pemilihan Perumaha', 'Sistem Pendukung Keputusan Pemilihan Perumahan Berbasis Website\r\n', 'Sistem Pendukung Keputusan Pemilihan Perumahan Berbasis Website\r\n', 'spk.', '199205282018032001', 'E41160729', 1, 7, NULL, '2020-09-18', ''),
(86, 'SISTEM INFORMASI PERAMALAN PENUMPANG SEBAGAI ', 'SISTEM INFORMASI PERAMALAN PENUMPANG SEBAGAI BAHAN PERTIMBANGAN KEBUTUHAN ARMADA TRAVEL MENGGUNAKAN METODE ARIMA DI CV SURYA ARIE JAYA\r\n', 'SISTEM INFORMASI PERAMALAN PENUMPANG SEBAGAI BAHAN PERTIMBANGAN KEBUTUHAN ARMADA TRAVEL MENGGUNAKAN METODE ARIMA DI CV SURYA ARIE JAYA\r\n', 'si.', '197008311998031001', 'E41160849', 1, 12, NULL, '2020-09-18', ''),
(87, 'Analisis web service json rpc dan json rest', 'Analisis web service json rpc dan json rest\r\n', 'Analisis web service json rpc dan json rest\r\n', 'bi', '198907102019031010', 'E41161062', 1, 1, NULL, '2020-09-18', ''),
(88, 'SISTEM PAKAR DIAGNOSA PENYAKIT TANAMAN OKRA M', 'SISTEM PAKAR DIAGNOSA PENYAKIT TANAMAN OKRA MENGGUNAKAN METODE CERTAINTY FACTOR\r\n', 'SISTEM PAKAR DIAGNOSA PENYAKIT TANAMAN OKRA MENGGUNAKAN METODE CERTAINTY FACTOR\r\n', 'sp.', '197909212005011001', 'E41161617', 1, 8, NULL, '2020-09-18', ''),
(89, 'SIMSTEM PAKAR DIAGNOSA JENIS PENYAKIT ANEMIA ', 'SIMSTEM PAKAR DIAGNOSA JENIS PENYAKIT ANEMIA MENGGUNAKAN METODE CERTAINTY FACTOR BERBASIS ANDROID\r\n', 'SIMSTEM PAKAR DIAGNOSA JENIS PENYAKIT ANEMIA MENGGUNAKAN METODE CERTAINTY FACTOR BERBASIS ANDROID\r\n', 'sp.', '197111151998021001', 'E41161838', 1, 8, NULL, '2020-09-18', ''),
(90, 'SIMSTEM PAKAR DIAGNOSA JENIS PENYAKIT ANEMIA ', 'SIMSTEM PAKAR DIAGNOSA JENIS PENYAKIT ANEMIA MENGGUNAKAN METODE CERTAINTY FACTOR BERBASIS ANDROID\r\n', 'SIMSTEM PAKAR DIAGNOSA JENIS PENYAKIT ANEMIA MENGGUNAKAN METODE CERTAINTY FACTOR BERBASIS ANDROID\r\n', 'sp.', '198608022015042002', 'E41160344', 1, 8, NULL, '2020-09-18', ''),
(91, 'ANALISIS PERBANDINGAN ALGORITMA FUZZYSAW DAN ', 'ANALISIS PERBANDINGAN ALGORITMA FUZZYSAW DAN WEIGHTED PRODUCT PADA SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN SMARTPHONE BERBASIS WEBSITE\r\n', 'ANALISIS PERBANDINGAN ALGORITMA FUZZYSAW DAN WEIGHTED PRODUCT PADA SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN SMARTPHONE BERBASIS WEBSITE\r\n', 'spk.', '199002272018032001', 'E41161100', 1, 7, NULL, '2020-09-18', ''),
(92, 'Sistem Pengenalan Huruf Latin Menggunakan Pri', 'Sistem Pengenalan Huruf Latin Menggunakan Principal Component Analysis dan Backpropagation Untuk Pendidikan Anak Usia Dini\r\n', 'Sistem Pengenalan Huruf Latin Menggunakan Principal Component Analysis dan Backpropagation Untuk Pendidikan Anak Usia Dini\r\n', 'si.', '199203022018032001', 'E41161943', 1, 12, NULL, '2020-09-18', ''),
(93, 'Sistem Pendukung Keputusan Rekomendasi Jumlah', 'Sistem Pendukung Keputusan Rekomendasi Jumlah Produksi Roti Dengan Metode Simpleks Studi Kasus \"Roti SIP Polije\"\r\n', 'Sistem Pendukung Keputusan Rekomendasi Jumlah Produksi Roti Dengan Metode Simpleks Studi Kasus \"Roti SIP Polije\"\r\n', 'spk.', '198511282008121002', 'E41160237', 1, 7, NULL, '2020-09-18', ''),
(94, 'SISTEM PAKAR PEMBERIAN MENU MAKANAN BAGI PEND', 'SISTEM PAKAR PEMBERIAN MENU MAKANAN BAGI PENDERITA ANEMIA DEFISIENSI BESI UNTUK REMAJA PUTRI MENGGUNAKAN METODE FUZZY MAMDANI\r\n', 'SISTEM PAKAR PEMBERIAN MENU MAKANAN BAGI PENDERITA ANEMIA DEFISIENSI BESI UNTUK REMAJA PUTRI MENGGUNAKAN METODE FUZZY MAMDANI\r\n', 'sp.', '197111151998021001', 'E41161807', 1, 8, NULL, '2020-09-18', ''),
(95, 'Impelemntasi Fuzzy Logic Untuk Sistem Monitor', 'Impelemntasi Fuzzy Logic Untuk Sistem Monitoring Suhu Dan Kelembapan Pada Inkubator Telur Berbasis Android\r\n', 'Impelemntasi Fuzzy Logic Untuk Sistem Monitoring Suhu Dan Kelembapan Pada Inkubator Telur Berbasis Android\r\n', 'el.', '19780816 200501 1 00', 'E41161297', 1, 6, NULL, '2020-09-18', ''),
(96, 'SISTEM IDENTIFIKASI PENYAKIT PADA DAUN JERUK ', 'SISTEM IDENTIFIKASI PENYAKIT PADA DAUN JERUK SIAM (citrus noblilis lour. var. microcarpa) BERDASARKAN GRAY LEVEL CO-OCCURRENCE MATRIX MENGGUNAKAN METODE PROBABILISTIC NEURAL NETWORK\r\n', 'SISTEM IDENTIFIKASI PENYAKIT PADA DAUN JERUK SIAM (citrus noblilis lour. var. microcarpa) BERDASARKAN GRAY LEVEL CO-OCCURRENCE MATRIX MENGGUNAKAN METODE PROBABILISTIC NEURAL NETWORK\r\n', 'sp.', '199203022018032001', 'E41161315', 1, 8, NULL, '2020-09-18', ''),
(97, 'Komparasi Feature Selection TF-IDF dan Chi Sq', 'Komparasi Feature Selection TF-IDF dan Chi Square Pada Klasifikasi Berita Online di Indonesia Dengan Metode Multinomial Naive Bayes\r\n', 'Komparasi Feature Selection TF-IDF dan Chi Square Pada Klasifikasi Berita Online di Indonesia Dengan Metode Multinomial Naive Bayes\r\n', 'bi', '198907102019031010', 'E41161549', 1, 1, NULL, '2020-09-18', ''),
(98, 'Pengembangan Website Dinas Pertanian Berdasar', 'Pengembangan Website Dinas Pertanian Berdasarkan Analisis Kualitas Layanan Website Terhadap Peningkatan Pengetahuan Petani Dengan Metode Webwual 4.0\r\n', 'Pengembangan Website Dinas Pertanian Berdasarkan Analisis Kualitas Layanan Website Terhadap Peningkatan Pengetahuan Petani Dengan Metode Webwual 4.0\r\n', 'si.', '199205282018032001', 'E41161595', 1, 12, NULL, '2020-09-18', ''),
(99, 'Sistem Informasi Peramalan Dengan Memperhatik', 'Sistem Informasi Peramalan Dengan Memperhatikan Prioritas Barang\r\n', 'Sistem Informasi Peramalan Dengan Memperhatikan Prioritas Barang\r\n', 'si.', '197008311998031001', 'E41161613', 1, 12, NULL, '2020-09-18', ''),
(100, 'PENGEMBANGAN APLIKASI ANALISIS KUALITAS WEBSI', 'PENGEMBANGAN APLIKASI ANALISIS KUALITAS WEBSITE MENGGUNAKAN METODE WEBQUAL 4.0 (SMAN 4 JEMBER)\r\n', 'PENGEMBANGAN APLIKASI ANALISIS KUALITAS WEBSITE MENGGUNAKAN METODE WEBQUAL 4.0 (SMAN 4 JEMBER)\r\n', 'si.', '199112112018031001', 'E41161520', 1, 12, NULL, '2020-09-18', ''),
(101, 'Prediksi forex menggunakan fuzzy mamdani', 'Prediksi forex menggunakan fuzzy mamdani\r\n', 'Prediksi forex menggunakan fuzzy mamdani\r\n', 'spk.', '198511282008121002', 'E41162071', 1, 7, NULL, '2020-09-18', ''),
(102, 'Penerapan Metode K-Nearest Neighbor Untuk Kla', 'Penerapan Metode K-Nearest Neighbor Untuk Klasifikasi Mutu Biji Kacang Panjang\r\n', 'Penerapan Metode K-Nearest Neighbor Untuk Klasifikasi Mutu Biji Kacang Panjang\r\n', 'pcd.', '199203022018032001', 'E41161213', 1, 4, NULL, '2020-09-18', ''),
(103, 'Sistem Pakar Kualitas Ekspor Kakao Menggunaka', 'Sistem Pakar Kualitas Ekspor Kakao Menggunakan metode K-nearest neighbor dan Pengolahan Citra Digital\r\n', 'Sistem Pakar Kualitas Ekspor Kakao Menggunakan metode K-nearest neighbor dan Pengolahan Citra Digital\r\n', 'sp.', '197810112005012002', 'E41161948', 1, 8, NULL, '2020-09-18', ''),
(105, '\"PENGEMBANGAN SISTEM USABILITY TESTING MENGGU', 'a', 'a', 'a,', '199112112018031001', 'E41161324', 1, 9, NULL, '2020-09-18', ''),
(112, 'Analisis analisa', 'deskripsi', 'abstract', 'robotic,iot', '198907102019031010', 'E41170244', 11, 5, '2021-01-09', '2021-01-07', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `fk_Dosen_Role1_idx` (`idRole`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `fk_Mahasiswa_Prodi1_idx` (`Prodi_idProdi`);

--
-- Indexes for table `master_status`
--
ALTER TABLE `master_status`
  ADD PRIMARY KEY (`idMaster_status`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`idProdi`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`),
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`idRuangan`);

--
-- Indexes for table `status_ta`
--
ALTER TABLE `status_ta`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `td_bimbingan`
--
ALTER TABLE `td_bimbingan`
  ADD PRIMARY KEY (`id_bimbingan`),
  ADD KEY `fk_TD_Bimbingan_Tugas_akhir1_idx` (`Tugas_akhir_id`);

--
-- Indexes for table `td_seminar`
--
ALTER TABLE `td_seminar`
  ADD PRIMARY KEY (`id_seminar`),
  ADD KEY `fk_TD_seminar_Tugas_akhir1_idx` (`id_TA`),
  ADD KEY `fk_TD_seminar_Dosen1_idx` (`NIP_Panelis`),
  ADD KEY `fk_TD_seminar_Master_status1_idx` (`id_status`),
  ADD KEY `fk_TD_seminar_Ruangan1_idx` (`idruangan`);

--
-- Indexes for table `td_sidang`
--
ALTER TABLE `td_sidang`
  ADD PRIMARY KEY (`id_sidang`),
  ADD KEY `NIP_Anggota` (`NIP_Anggota`),
  ADD KEY `id_TA` (`id_TA`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idTopik`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Tugas_akhir_Dosen_idx` (`Dosen_NIP`),
  ADD KEY `fk_Tugas_akhir_Mahasiswa1_idx` (`Mahasiswa_NIM`),
  ADD KEY `fk_Tugas_akhir_Master_status1_idx` (`id_status`),
  ADD KEY `fk_Tugas_akhir_Topik1_idx` (`id_topik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_status`
--
ALTER TABLE `master_status`
  MODIFY `idMaster_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `idProdi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `idRuangan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_ta`
--
ALTER TABLE `status_ta`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `td_bimbingan`
--
ALTER TABLE `td_bimbingan`
  MODIFY `id_bimbingan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `td_seminar`
--
ALTER TABLE `td_seminar`
  MODIFY `id_seminar` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `td_sidang`
--
ALTER TABLE `td_sidang`
  MODIFY `id_sidang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `idTopik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_Mahasiswa_Prodi1` FOREIGN KEY (`Prodi_idProdi`) REFERENCES `prodi` (`idProdi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
