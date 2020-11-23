-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 07:46 AM
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
  `idRole` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `NIDN`, `NAMA`, `Alamat`, `No_hp`, `password`, `email`, `idRole`) VALUES
('197008311998031001', '0031087001', 'Moh. Munih Dian W, S.Kom,MT', 'Jember', '123456789', '$2y$10$F1NvhGoBNRexnHwju3t7juyU3QX9qkp9aOMI4NwqdxezLXBNhM7T2', '', 7),
('197104082001121003', '`0008047103', 'Wahyu Kurnia Dewanto,S.Kom, MT', 'Jember', '123456789', '$2y$10$bfkTeoAVQKoWW/VcO.bVN.h/CFqDw.gfiapFAffVqmZ5FJDc82n4S', '', 2),
('197110092003121001', '0009107104', 'Denny Trias Utomo, S,Si, MT', 'Jember', '123456789', '$2y$10$8AsSB5vCQvuhdZBLGY6J5.cV5W1OGEP87ia.KVLC1Zkujj1Sw1ODO', '', 7),
('197111151998021001', '0015117106', 'Adi Heru Utomo, S.Kom, M.Kom', 'Jember', '123456789', '$2y$10$MAoTQ2kjQ8tjp0u2k1Fz9eMAxGXsPGPExAay4M.9HoNK6fkgjxsWS', '', 7),
('197405192003121002', '0019057403', 'Nugroho Setyo Wibowo, ST,MT', 'Jember', '123456789', '$2y$10$nMcWTFOhu56VuBH24E90CeHVUDbb8br6wEGewvXNHA5GZ5nhZMALi', '', 7),
('197709292005011003', '0029097704', 'Didit Rahmat Hartadi S.Kom , MT', 'Jember', '123456789', '$2y$10$c8zsQOLjtPmvVr/4Jf1UJ.P97t/jirmyeq.ZIaF2ObLzlceMF/ady', '', 2),
('19780816 200501 1 00', '0016087806', 'Beni Widiawan, S.ST, MT', 'jember', '123456789', '19780816 200501 1 002', '', 7),
('197808172003121005', '0017067306', 'Ely Mulyadi, S.E., M.Kom.', 'Jember', '123456789', '$2y$10$Un73e/VNKX/DGNvzB7FJvOuXBNrHX0Y5YMaWwTduGmqknIqUw18SW', '', 2),
('197808192005012001', '0019087803', 'Ika Widiastuti, S.ST , MT', 'Jember', '123456789', '$2y$10$kH7rfnAaldA3BqYxWVUO7O/8MVMu1/GubuXYNQuhGPWHxXcRTBwGW', '', 7),
('197810112005012002', '0011107802', 'Elly Antika, ST, M.Kom', 'Jember', '123456789', '$2y$10$NLekdmqo7EjLqvgfK8B1aesQqo7p2XgInfVRihEOs4KMZqiEiMvKy', '', 7),
('197909212005011001', '0021097903', 'I Putu Dody Lesmana, ST,MT', 'Jember', '123456789', '$2y$10$WlCBELecPidXd6u9a7t6wezZqcCYvSoek8/r7ETVZ.79pPga7jNym', '', 7),
('198005172008121002', '0017058003', 'Dwi Putro Sarwo S S.Kom, M.Kom', 'Jember', '123456789', '$2y$10$OYBP8exucIzgPONb3BOyEe3McasYkDjF8Rri4XWI9h2tCxOyUq5Sa', '', 2),
('198012122005011001', '0012128001', 'Prawidya Destarianto , S.Kom ,MT', 'Jember', '123456789', '$2y$10$QlKfKi7ZNHK/PZRe3T0enevuu4HrRvRIogQ2.wW3VBymjPOfUfJvC', '', 7),
('198101152005011011', '0015018103', 'Nurul Zainal Fanani, S.ST, MT', 'Jember', '123456789', '$2y$10$X62kNMdDc964tJfvoEPDlOL/kU.NC/KRUjyhvly7Zjb2LhyL7QJj6', '', 2),
('198106152006041002', '0015068202', 'Syamsul Arifin , S.Kom., M.Cs.', 'Jember', '123456789', '$2y$10$1sxYpt9ryLSfrDSvcBCTuOpf0JBpHnl2Fcf1EKAGKwP7Z05aDkyuK', '', 4),
('198301092018031001', '', 'Hermawan Arief P. S.T.,MT', 'Jember', '123456789', '$2y$10$CjmHQxgYNpxv876VbVZrHeeZGY0jz5S3LEP0pCzd4F82m50XSR70a', '', 2),
('198302032006041003', '0003028302', 'Hendra Yufit Riskiawan, S.Kom, M.Cs', 'Jember', '123456789', '$2y$10$ep5zMOVswk83iBl9Ca8tN.Tq1VO80cQcffweVtW5WnYiNWoOb.PP.', '', 3),
('198511282008121002', '0028118502', 'Aji Seto Arfianto, S.ST, MT', 'Jember', '123456789', '$2y$10$MWlm1IazMU6.BpGzssGdc.e27SttNevyVaE1thBwm7SfLNG/UlQw.', '', 7),
('198606092008122004', '`0009068601', 'Nanik Anita M. ,S.ST,MT', 'Jember', '123456789', '$2y$10$W4bEzBSgAAOXkbMfX5m7NuI3EvtNeNXevqkR5Tjj2Haf2evKQ2ZeC', '', 2),
('198608022015042002', '0702088601', 'Ratih Ayuninghemi S.ST, M.Kom', 'Jember', '123456789', '$2y$10$F8Hc9K4vmIgqJ3Hfhq69Ee8IdPE2e2njHP2HwAz31eMcn2a69cxJy', '', 7),
('198801172019031008', '0017018808', 'I Gede Wiryawan, S.Kom., M.Kom.', 'Jember', '123456789', '$2y$10$5oVfzGv.Z7BiWo0uJPnIUe6FkM2VH9a/sFBwgGaW460cMzoESPRZe', '', 2),
('198807022016101001', '', 'Husin, S.Kom., M.MT.', 'Jember', '123456789', '$2y$10$wIkk/oXADm1Y1UZ/mHSBvexONPmjwMa0BEy/ImnlDTpqlwot/9xvG', '', 2),
('198903292019031007', '`0029058906', 'Taufiq Rizaldi S,ST,MT', 'Jember', '123456789', '$2y$10$RZFh/PBz78hf2Ff0VNetNu4r9Ki/25Z0G7z.zvEVWN0XvoCTVX4fW', '', 2),
('198907102019031010', '0010078903', 'Ery Setiyawan Julev Atmaji,S.Kom,M.Cs', 'Jember', '123456789', '$2y$10$BIGeqqqKrmHSNVeKvQ7OP.79hvbNVxnmy9hcvFhebyRDWt/Wv8asu', '', 7),
('199002272018032001', '8868110016', 'Trismayanti Dwi P ,S.Kom, M,Cs', 'Jember', '123456789', '$2y$10$qFpE/0objW618aipOZp4gOLnQpYmzSLqdBMljnmgeqIRfmTNPbNny', '', 7),
('199103152017031001', '', 'Syamsiar Kautsar S.ST., MT.', 'Jember', '123456789', '$2y$10$QC.lcgXV/EpNHJqRHhWLCuyWvHSXK2NN2WqCYkC0c11nlBJiLvIwK', '', 7),
('199104292019031011', '0029049102', 'Faisal Lutfi Afriansyah S.Kom.,M.T.', 'Jember', '123456789', '$2y$10$7iP/mfmRT9SbjdLAdRAd2eUK/uh2JKBDLJsqUr7F3SAH3atVGVmRu', '', 1),
('199112112018031001', '', 'Khafidurohman A., S.Pd., M.Eng.', 'Jember', '123456789', '$2y$10$wF5/Fe1WfJRvVMacGxSyBeWqtAnlK0xBmguZ0w15h09DOT0W5AK7K', '', 7),
('199203022018032001', '', 'Zilvanhisna Emka Fitri ST., MT.', 'Jember', '123456789', '$2y$10$frHWrNt5OZNRTZK6HYvoie9Lpe4jq45wbh1aH22BnlKjZynmoHPHK', '', 7),
('199205282018032001', '', 'Bety Etikasari, S.Pd., M.Pd.', 'Jember', '123456789', '$2y$10$IEJ5OSNHiPD5xI4coN7Pv.60kzHjO08Ktcrr.zDradF/Mmr9vm6XC', '', 7),
('199408122019031013', '0012089401', 'Mukhamad Angga Gumilang, S. Pd., M. Eng.', 'Jember', '123456789', '$2y$10$JD4xbHrj5Tx2QeI/KL2zS.CQFwvPQPeXXEIOyPGkdwOQgoguVeFXm', '', 2);

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
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `Alamat`, `Tahun_masuk`, `Prodi_idProdi`, `tanggallahir`, `password`, `email`, `no_hp`) VALUES
('Bahtiar A', 'E41171467', 'Dusun rimpis Rt 03 Rw 01 sumbersari srono ban', 2017, 1, '0000-00-00', '$2y$10$UddoF8j7dRPV/kt7s66oee/asFtIz6gWyt.b.DKX7OABYQOw2NPeO', '', ''),
('Budi Yuni', 'E41170917', 'Jl. Wijaya Kusuma No.36 RT.03 RW.04 Dawuhan', 2017, 1, '0000-00-00', '$2y$10$/dgbZ/nkEThjBusjIiK6TOG9fy8aEDYGKZTIMr0NIBUcBHkxro93a', '', ''),
('E41160077', 'Anas Abiem Bahar', 'Dusun krajan 1 RT 004 RW 002  ', 2016, 3, '1997-10-09', '$2y$10$cqYQciMlKpGxoWyunOT.MuKoPbukwzTV.XdFkOGLVodr.CF8UQccK', '', ''),
('E41160083', 'Intan Kemala Pertiwi', 'Desa Juglangan RT.01 RW.04 Kec.Panji ,Situbon', 2016, 3, '1997-07-12', '$2y$10$2t/DjCU9/KRoPhqQwbQleeur4bZk7M9G1nuTLpX70xYf3OiyLv.ku', '', ''),
('E41160104', 'Mohammad Naufal Ramadhan ', 'Jl.Imam Bonjol No 725 RT. 13 RW.3 Gg. Al-Irsy', 2016, 3, '1998-12-01', '$2y$10$06YHd6m4doHd66AQIaqG5e2nhCmJe7Eowno1qwOZ9iYPaLPit.IlK', '', ''),
('E41160130', 'NURUL DWI ZAINITA', 'Dusun Kancoan RT2/RW2 Sukokerto Pajarakan / 6', 2016, 3, '1997-08-17', '$2y$10$S2836OnNcDLicpKOQr8QpO9UH0.ESg/HgfCJY9TaNMjt4OXdsLRIu', '', ''),
('E41160141', 'Andis Trihariprasetya', 'DS.GUCIALIT RT 4 RW 3 LUMAJANG', 2016, 3, '1998-03-20', '$2y$10$7BQLwPhdcPqMtp.BCOgtMOns.HQYU.UtJNauvCknMYd/P44LnbuT6', '', ''),
('E41160161', 'Selvi marfiyanti', 'DESA TLOGOSARI RT 07 RW 02 KEC.SUMBERMALANG K', 2016, 3, '1999-11-03', '$2y$10$kSmjN0sI8I3hzP6BvHRT9.0qNH8kpcJlhzuXmo4h.ErqRq6z0pptu', '', ''),
('E41160167', 'Rizky Cahyasanti', 'JALAN LETJEN PANJAITAN GANG XII NO.5968122', 2016, 3, '1998-01-18', '$2y$10$6UCULzWddCKcQxSU5JwXpeaL8.Py5d7fiRdorIeM1Q90GdfciTJRe', '', ''),
('E41160182', 'Christopher Nanda Jonathan', 'JL. PANGLIMA SUDIRMAN NO.27 RT/RW: 032/010DES', 2016, 3, '1997-08-26', '$2y$10$WhoFDGgg8RRSHc4N1guLUOaM9l.P8lYi0ppex38KgxqxRCTYTOHZC', '', ''),
('E41160224', 'Ulandari Susika', 'perumahan bumi bulu indah a-8, kraksaan, prob', 2016, 3, '1997-10-18', '$2y$10$CcRZtQ0K.h51wzbiz6oD0.UYuDy8tpxyL4NGQJEINYTmw9wnjRoRS', '', ''),
('E41160227', 'Lutfi Auliasari ', 'sumber kadut, balung kidul , balung, jember ', 2016, 3, '1998-05-23', '$2y$10$dNlYat7Q2DvhLiR9BPMNd.HAcmO5PMt4IpGtWRvRrxOAUm.UMY..S', '', ''),
('E41160231', 'Niko Sebastian', 'RT 05/I dusun Mulyoasri, desa Sumbermulyo 684', 2016, 3, '1998-09-20', '$2y$10$tlmTyO6JcthJE.oUbYJ7Pud10MlgMYs7OClDzZnGL4o6tAke.TG4y', '', ''),
('E41160237', 'Eldwin Hendrasiva', 'PERUM TEGAL BESAR PERMAI 01 BLOK AA-19', 2016, 3, '1997-12-28', '$2y$10$lNbLph3fdgOO1tJv1SsB7.jPySskU0sMHUZ90tul9Kv2Mkf34ByDC', '', ''),
('E41160242', 'Rifrinda afianti maghfiroh', 'Jalan Kauman 142 Mangli Kecamatan Kaliwates K', 2016, 3, '1998-02-13', '$2y$10$jh99I5xKflwAfaeRF8SILuPUJYO9LZx94cKQ5UJbERnfx9AbhXnd2', '', ''),
('E41160295', 'Rangga Akhir Aprian', 'JL.Asrama Haji 3, NO.III Tuban', 2016, 3, '1997-03-10', '$2y$10$TkpIxPblLXhmS6.UjSEej.w.fU/f9uyx5c6GTWmVVTsVrzj02ia0.', '', ''),
('E41160331', 'Achmad Sultoni Romadhon', 'Jl. Darmawangsa Perum Graha Rambi Asri A5', 2016, 3, '1999-01-01', '$2y$10$2NsB5CoHtf/3lceuzngza.Vl/M5PpGto3sAelhsUHbtRLF/1Te5GC', '', ''),
('E41160344', 'Linda Dwi Wahyuningsih', 'SEPANJANG WETAN DEPAN PUSKESMAS GLENMORE. RT ', 2016, 3, '1998-03-11', '$2y$10$NP74ZMI7DOlNkQoMrTiCDuV8ZmyZNZYcBqeUKcZAo2TZ7x7p4.uT6', '', ''),
('E41160352', 'Muhammad Fendrik Nurul Jadid', 'Jl.Rengganis no 5 RT 19 RW 07, Kembang, Bondo', 2016, 3, '1997-11-13', '$2y$10$qpzEp.1EX4qganYZ4QZ5uebeziWmRvkdGDIarXe8AXIOYyN6vKUYK', '', ''),
('E41160388', 'Muhammad Yusuf', 'LN. SAWO 3 NO 26 LINGK. BARATAN TIMUR - PATRA', 2016, 3, '1998-01-31', '$2y$10$2bdKEQlF78gKBlaK4fkvNuEl4V12g4XTPG96RqJrLSlryjY9eVvy.', '', ''),
('E41160460', 'Firdaustinovida Aisyah', 'JL. KH. MANSYUR 9 RT23 RW6 BLINDUNGAN, BONDOW', 2016, 3, '1997-11-22', '$2y$10$yrvVAitRTqYGGgDH1g5s/.4WxV7a7s7BkTfODHlfupM4Pz2PvCTjG', '', ''),
('E41160474', 'VYAN ARY PRATAMA', 'Dsn Gunung Remuk RT 02 RW 04 Desa Ketapang Ke', 2016, 3, '1997-12-25', '$2y$10$26bJdIagEr6OXgBU.zLpgeV8weWDZ0LPiDx4KeChPLlRVumpCLpn.', '', ''),
('E41160482', 'Panji Budi Satria', 'JL. BASUKI RAHMAT LINGKUNGAN GUMUKSARI/ 68133', 2016, 3, '1997-12-21', '$2y$10$hrDAGXwbmGsOUikNUapDy./FP6v9HNFkNPoblGo40YNimcZOG1Ho.', '', ''),
('E41160483', 'Agung Rahmatullah ', NULL, 2016, 3, '1970-01-01', '$2y$10$M/pbrhkZORmBJ/.69Q7mmuTZqAUugm3FE6LT8goABwODbXGDYDNEW', '', ''),
('E41160510', 'Muhammad Bahrul Arif', 'RT 03 RW 02 Dsn. Kebonagung Ds. Kebonagung Ke', 2016, 3, '1998-09-15', '$2y$10$W7EmG4eDoARTIsYOk7qpQuPpszJon9TyPTFOyMdh0EFp5/q49Hl/6', '', ''),
('E41160513', 'Aldefa Lingga Prayoga', 'Dsn.Awar -Awar', 2016, 3, '1997-07-31', '$2y$10$tppSecRGUkB.rzViEx4ZgOG40XRrGdmnnUFzLIk5N3kyWpc0z7j2i', '', ''),
('E41160519', 'Zavira Wahyu Dewi Pratiwi', 'JALAN UTOMO NOMOR 14 RT.001/RW.005 DESA PAKIJ', 2016, 3, '1997-08-09', '$2y$10$ybnUuJzG.H0uhqOTO7PHEu6EUlq.2TR1QsUBPRKpOlWT/.Xr9xw/G', '', ''),
('E41160603', 'Roifatul Munawaroh', 'DUSUN GONDOSARI RT 001 RW 011 DESA ROWOTENGAH', 2016, 3, '1998-04-01', '$2y$10$kS.QPiX.clw5R9RPft/5YuHDmq4yiylxZ.b1oRZ6D65yUwYqW.xLy', '', ''),
('E41160605', 'Ardhan Febriansyah', 'Perumahan Tegal Besar Permai I blok T-30     ', 2016, 3, '1998-05-02', '$2y$10$vQ1GCawGOYUSKYeKBw6.eu32ueCnQIIQ4Dcs2I0KZ6BF8RJV9UfPG', '', ''),
('E41160660', 'LUFRI RAIS MAULANA', 'Dukuh Rendole RT 1 RW 1, Desa Muktiharjo, Kec', 2016, 3, '1999-06-25', '$2y$10$jemhetEoSYMlsnM03Gn0rOYtd8k8ZIaMhugrWgSbpghsA1fiVN0Im', '', ''),
('E41160695', 'Barorotus Sulusayil Laili', 'JL. ARGOPURO 176 MANGGISAN-TANGGUL / 68155 ', 2016, 3, '1997-08-19', '$2y$10$HJUPyh1EW3uixg9KIUw1s.RUfOKQvC.6xV4g2oD3ZruhEskE0HS0G', '', ''),
('E41160701', 'Ahmad Rizki Rifai', 'Jl. Kaliurang Gg. Swadaya 07 / 68121 ', 2016, 3, '1997-07-13', '$2y$10$ZNRnzBbgrnEYLY.MKMkEaeDmhG3rOl.7mLt9/B1PT1x2Hwt0Jhc2m', '', ''),
('E41160711', 'Gea Ayu Wulandari', 'JL. GAJAH MADA XXXI 153 JEMBER / 68133  ', 2016, 3, '1997-08-16', '$2y$10$Swtdx67LkgXGmfMGuRPwKeovdecg38y9B9Xhmn9Z7Jvy/t34IKWq6', '', ''),
('E41160728', 'Najmi nurus shofi', 'CAKRU - KENCONG - JEMBER / 68168 ', 2016, 3, '1998-01-10', '$2y$10$c7FSWvD1oNRnj0g8eM8CR.8J8rZ.awtvWYGVteSAO/ZMSX0SDNxWq', '', ''),
('E41160729', 'M. Wahyu Asharul Falah', 'TEGALWANGI JATILAWANG UMBULSARI RT 003 RW 010', 2016, 3, '1999-06-05', '$2y$10$QINBuy/VnNr7EOuR50PzQ.X5X5GzK1mhuL05HnvWw3ytqhrlx6T8m', '', ''),
('E41160732', 'Nanda Ega', 'Jl. A. Yani Gg. B No. 22 Bondowoso / 62811 ', 2016, 3, '1997-04-05', '$2y$10$fxST7PrnFYGcIFSxyJ4xxeGP3wAnvcNjDNgKNdZqLP3ksLHkLqRiK', '', ''),
('E41160737', 'yunita eri aruma', 'Dsn: Krajan Rt:001/Rw:009 Desa: Kedungringin ', 2016, 3, '1998-06-25', '$2y$10$gSHDFlvwgc3gIkGyy9CWP.EZa/UvD5AnZHCWmieaKG/Qa4sakmuZC', '', ''),
('E41160765', 'Dian Pusparini', 'DSN. RUMPING, RT03/RW05, KEC. CLURING, KAB. B', 2016, 3, '1998-08-09', '$2y$10$8Q./JesXBaNCJodkVTuWGe6X58Yqrz0AjpggVKw4gmibunETXxU1K', '', ''),
('E41160775', 'Danny Sofiansyah Akbar', 'JLN WALI KOTA GATOT NO 154/ 67213', 2016, 3, '1996-05-06', '$2y$10$Xfs8UZn9bTbTcKYqDF86UurP7lXcYePvOVnf7Y7MI3b1xPn/TJlxy', '', ''),
('E41160825', 'Kursita Dewi safitri', 'jalan mastrip 4 nomor 108 / 68126', 2016, 3, '1997-04-22', '$2y$10$Bj84HvhcZSQ5sCzOlwQt2uzvkhBUcU8c.v1WVO/N18wzh8Crzsb7.', '', ''),
('E41160849', 'Deka Permana Alfiansyah', ' Dusun Banjarejo RT 002/RW 002, 68166', 2016, 3, '1998-05-11', '$2y$10$mhyodwts4jiGnxJa1CsJpOEugMbPES9PQxWUFN44BiYebhYTqEYE.', '', ''),
('E41160914', 'Avinda Renaldi Alamsyah', 'DS. POJOK RT.05/RW.02, KEC. KAWEDANAN, KAB. M', 2016, 3, '1998-10-30', '$2y$10$Pq/PR1ZxtgAJ8FQn9l3UyeO6Pop0yn7sO2dY2u2NO0qJ/AV8NBXSm', '', ''),
('E41160978', 'Nova An-Nisa Azizah', 'sempu krajan kalisetail, rt/rw 01/01 ', 2016, 3, '1997-11-21', '$2y$10$mQXOSx4NUU4ENVEIwAQhmeDAgR/SgpD4JFGVQVvGQ2fet5EBIeC56', '', ''),
('E41161052', 'Farida Ayu Dusturiya', 'Perum Mastrip Blok Z No 5/ 68121  ', 2016, 3, '1997-11-12', '$2y$10$LtxUKoh119xHnAFM8I6emOT0gQuiNzDpqcZ6pbxKShUN.G28osG2O', '', ''),
('E41161056', 'Indri Ayu Saputri', 'Dusun Kedung Langkap RT 003 RW 011 Desa Krato', 2016, 3, '1998-08-15', '$2y$10$LO8ZcTFIRm0e/x27dFZKaOawLhU/PSjcT/dPGwiIs47LINviGn54m', '', ''),
('E41161062', 'Esa sakti', '\'desa semekan utara,kedit,panarukan,situbondo', 2016, 3, '1997-06-18', '$2y$10$u3yS2YdgEeTUgQZwyEIJCuFCI30xUdmWEnPgPCnqhItu2CIr8glWW', '', ''),
('E41161091', 'Aisyah Safitri', 'JL. Manggar III/22 ,RT02/RW024, GEBANG DARWO ', 2016, 3, '1999-01-19', '$2y$10$55yxjHP.enSqoNn8JXqE...02iyhdoTLUcqxowMzO2nueByU3AQrm', '', ''),
('E41161100', 'Deny fadhilah akbar', 'JL NANAS NO 35 PATRANG JEMBER/68111  ', 2016, 3, '1997-03-10', '$2y$10$hXqOtPPT0Vy/1JjUU5.WLeEVjYmx.tLalvb.uxpU0Pm.ahrorATLW', '', ''),
('E41161120', 'Fachry Asy\'ari', 'Perum Bumi Mangli Permai blok IB-11 Mangli Ka', 2016, 3, '1997-03-07', '$2y$10$dj4YIOmNt7Cpvob2T0hOS./4GdOh5YTnphXTNXmMHnN7qsp9GEj72', '', ''),
('E41161132', 'AL FARIS CAHYA PRATAMA', 'dusun sumberanjl sentot prawiro no 3. RT 1 / ', 2016, 3, '1998-04-27', '$2y$10$vE4Ws0v5.0gd7cb9g6iwtewDAIVUCx2w09V0sQNK0hikfF4E3o9ia', '', ''),
('E41161145', 'Ahmad Shafry Shiddiq', 'JL. GAJAH MADA IV/40, KALIWATES, JEMBER ', 2016, 3, '1998-01-17', '$2y$10$7dq6iprOIktcPgf9bNDp2ej/CoIlA7xnlXO5NR41dZ6B88MfCdV5G', '', ''),
('E41161178', 'Cahya Affrillah Prasetyo', 'PERUM KALIURANG CLUSTER BLOK D/ NO.6', 2016, 3, '1997-06-29', '$2y$10$XaSxBs5JS4nBmskigqq.QOrCsEsKEMC9A.s/y/SwbPmEerr/z0e7m', '', ''),
('E41161189', 'Moh. Fajar Assidiq', 'dsn Kabat Mantren, RT/RW 01/01, Kabat Banyuwa', 2016, 3, '1997-06-30', '$2y$10$SQ700LRBnd4EWdtZvup0PeBsJw2FN/48u6l/ZCz.ehS95I8kQj9aq', '', ''),
('E41161208', 'Haqolby Bunga Ditasari Putri', 'Dusun Wedusan RT 040 RW 007 Pringgowirawan Su', 2016, 3, '1998-03-21', '$2y$10$Rm7eeYZfzlh3m7y1J/5Sf.nI2Rq1vRT8EAf.sieHYy/Trq8tSn5cq', '', ''),
('E41161211', 'REZHI SYLVIA AGUSTINA', 'DUSUN KRAJAN RT / RW : 002 / 002 DESA KANDANG', 2016, 3, '1997-08-21', '$2y$10$Dm8ODpzjs1Tz3WCSOp83QefopDN6tktzTiKUJ4rPVoDhcRao.uKUO', '', ''),
('E41161213', 'AAN KHOIRUL SHOLEH', 'Jalan Raya Selombong, Rt 06 - Rw 02 Ds. Pengg', 2016, 3, '1997-11-24', '$2y$10$ucPME/7SBOauxjIA1tuW/.9Gr8dYRrFRgG0NchWNZB7lXaTtTqxM.', '', ''),
('E41161215', 'Hendra laksmana', 'Perumahan Indah Pemali Blok B-4 / 68132', 2017, 1, '1997-06-09', '$2y$10$Ws1U79FPbbzuJir4rn5vTuflI3MGvhCy/LCEgkT5qnWLHrZ.gWWTi', '', ''),
('E41161219', 'Anggita Kusumaningrum', 'Jalan Sumatra Gang Kenanga no 40 Jember 68121', 2016, 3, '1997-10-19', '$2y$10$nzV6QmjsSkzc9eDivHx64uzJIVOudrAL0MYwjHeTSPEgzXRBmIlmK', '', ''),
('E41161281', 'Damar Novtahaning', 'Jl. S. Yudodhiharjo Gg. Romantika no.277 Bond', 2016, 3, '1997-11-13', '$2y$10$m2Tf8rL7TUSlGT8XMvQ/iuA5M9TmBDEM.iadwxRh0TpSdhfAgPMqe', '', ''),
('E41161297', 'Fajar Firmansyah Amirudin', 'Jl. Senduro, Dusun Selokambang, Desa Purwoson', 2016, 3, '1997-12-12', '$2y$10$HCpfQX1ulSRbONAFlPVHI.1qtlPC9Gx1zo4NwyWnCfYFli8qheeAa', '', ''),
('E41161299', 'Mohammad Arif Khoiruman', 'Jl. Raya Karangbendo RT 04 RW 09, Tekung, Lum', 2016, 3, '1998-10-29', '$2y$10$fk.t7ddo08.K3Am9RFOTlOs8DGoubSsjfFGi.ajbsbt278OCvmbaK', '', ''),
('E41161315', 'Rifqi Hakim Ariesdianto', 'Dusun Krajan IRT 01 / RW 011JOMBANG - JEMBER', 2016, 3, '1999-03-05', '$2y$10$JFCvmHVGcToeZq6ajsY/FOkbzyfMeHTywzt7srYrpT2vSvitySGIO', '', ''),
('E41161322', 'Fahim Alfiyan', 'Jl. Mayjend Panjaitan No.57RT 04 . RW 01DABAS', 2016, 3, '1998-02-19', '$2y$10$ypTAToqp4jXBs/Ik9Qb2SO7sk7QnawtManGn7LAca6Rcs0S3g5fDy', '', ''),
('E41161324', 'Warda Novitasari', 'DUSUN KRAJAN SELATAN RT/RW 001/008 PATEMON PA', 2016, 3, '1997-11-25', '$2y$10$RV9OQDIf4mWt2lqIkxRaeuWwYs8AH5eyxLdB9pfa/vAkfeoSkSSNq', '', ''),
('E41161340', 'Safira Azizah Firdaus', 'JL.KH.IMAM BAHRI RT02/02 MARON GENTENG KULON,', 2016, 3, '1998-02-02', '$2y$10$AwLdUOWtZ0RjCfYjQCC/HugPFE23l/bKKUF1F7apGMf5QvoG2b2qa', '', ''),
('E41161342', 'Nindya Novitasari', 'JALAN KARTINI GANG 6 NO. 59 RAMBIPUJI, JEMBER', 2016, 3, '1997-11-19', '$2y$10$6lXQHyFUc.K8OaRboidtGOFsYlcChcO9CxJ7X4QTDMNiBS1f9kfvu', '', ''),
('E41161383', 'Mambaur Roziq Alwi', 'Lojejer Wuluhan Jember', 2016, 3, '1998-08-17', '$2y$10$.s3tCydgwzy3sAGZMESvoutc2LhnEubYywNGszVLk9RiTsJpFBpey', '', ''),
('E41161385', 'Mardiana Azizah', 'DUSUN ATERAN, RT 44/RW 006, DESA TEMPEH TENGA', 2016, 3, '1997-09-21', '$2y$10$D7AOSHbOyjXDcBFB4GomieSJQ8RsBBVqO8pPKVDbXPk9gA7CIJhPq', '', ''),
('E41161390', 'Jazil Ramadhanty', 'DUSUN TULUSREJO II RT.05 RW.03 TEMPEH LOR- TE', 2016, 3, '1998-12-01', '$2y$10$rSqCCz.GcSANxJ5Ep.KzauAzPssR/sy7zaXU9evUDXP9uMtt28OUa', '', ''),
('E41161395', 'Aditia Afif Arfiansyah', 'Dsn.Sumber Sari TimurRT/RW  :001/006Desa  :Pe', 2016, 3, '1998-07-25', '$2y$10$jvDvduZOu2UTz9JnCKRl7efo21DKaOGQvlnVCBZIne64cJAwFsBHW', '', ''),
('E41161401', 'Ladeta Okta Verawan', '\'DUSUN KTAJAN RT.02RW.04 SUKORAMBI JEMBER ', 2016, 3, '1997-11-10', '$2y$10$Jzv06uLo2qi2wGaj4A4MSudvTIZJnayECDg.kjJXUTECg5lyyTpb.', '', ''),
('E41161422', 'Ahmad Aris Ubaidillah', 'RT 02 RW 08 GEBANGAN RAMPET KEC KAPONGAN SITU', 2016, 3, '1998-10-06', '$2y$10$l5wXxN5hjy6gsG5S.LnVz.3x./uqaGlwdp5Mwk94aMY848srBOJXm', '', ''),
('E41161520', 'RIZKY NUR FAQIH', 'PERUM. BUMI MANGLI PERMAI BLOK AB 1OB RT 05 R', 2016, 3, '1998-06-02', '$2y$10$NURwwXlt7SaJHfS0Sr8bcu7AZ6sMSoF0BzKS8llSkYCi4QqqpciY.', '', ''),
('E41161529', 'Ravel Alfarisy Fardan Rofinsyah', 'RT 001 RW 002 DUSUN GAPLEK, DESA GAPLEK', 2016, 3, '1997-12-18', '$2y$10$ffjV0bwg5e0uN.taRAydjOvNVdJZaYG4xSgJtYjaC8NCZk86LDEmK', '', ''),
('E41161549', 'Ahira Labata', 'Gebangan, kecamatan kapongan, kabupaten Situb', 2016, 3, '1999-03-18', '$2y$10$6DamMBlhTXvlNf99GhJRsu4NlDWIqBCnRwgza8gcjGcRqiTsEhxtO', '', ''),
('E41161564', 'Rizky Aulia Al Amin', 'JL. MONUMEN KAPTEN KYAI ILYAS RT/RW 02/03 BAN', 2016, 3, '1996-10-27', '$2y$10$n72l6oww81I.8RoRbE/7tuZ44MoHQtrJODw/5eA8rIfLfonxKwr46', '', ''),
('E41161578', 'Nabila Inayah', 'Jl. Raya Semboro no.8, RT 1/1, Desa Semboro, ', 2016, 3, '1996-02-11', '$2y$10$lfvYlmcpY5pn1t6kpirJD.fK1DcVSInvIfRIqC1ZUhdokqZc8h36W', '', ''),
('E41161595', 'Surya Laskar Ababil', 'RT.04/RW.05 Dsn.Sidorejo Ds.Wonosari Kec.Ngor', 2016, 3, '1998-07-17', '$2y$10$2lY//eV/Ma2J0WMK1Xg7z.oTYh0WS28s.VNotqXS5jF.a2aKXw2v6', '', ''),
('E41161609', 'Vini Yolanda Putri', 'KETAH RT 02 RW 03 KECAMATAN SUBOH KABUPATEN S', 2016, 3, '1998-08-07', '$2y$10$TbjTDkxsBd5UBuJqcYeFoueJKtYGqaTw0Y5CUP/TyKAUdm.qIzl4e', '', ''),
('E41161610', 'VERIO LUCIANTO', 'JLN LAWU TANJUNG 3 NO 9 LUMAJANG', 2016, 3, '1998-03-30', '$2y$10$0T6NT5jIrp55if0mY.f4O.NMn9aK6nnuWsWbt3nPZcX/RwjwJmsDG', '', ''),
('E41161613', 'Dyan Anugerah Ramadani', 'KP. KRAJAN RT 02 RW 01 DESA BAYEMAN KECAMATAN', 2016, 3, '1996-10-29', '$2y$10$3vMtBw3FJopdJt5uf9aZ1u4E4MrBJbMxMRZy6zaAwYw65y3mg8VYG', '', ''),
('E41161617', 'Azwar Fanani Suprayogi', 'JALAN SALAK GANG NUSA INDAH NO. 13 LUMAJANG', 2016, 3, '1996-10-29', '$2y$10$Abe2JRCoq7ZoV0HktqeyHufLEoQyWwDvKt/VU4hVw97pXze.3hnsS', '', ''),
('E41161641', 'Ikmawati Maremningtyas', 'JL. PATIMURA-TEMPEH LOR-TEMPEH RT.11 RW.02 KE', 2016, 3, '1997-12-11', '$2y$10$eqFS/PdjLPxwJPlKUGxEZu3J6SAJlnN66dN3YlNyJ8OUaIha3Ws6q', '', ''),
('E41161676', 'Dimas Kristanto', 'Tempurejo RT 04 RW 01 Purwodadi Gambiran Bany', 2016, 3, '1998-09-03', '$2y$10$OEqUQhAL9adTR5Qi3RQACupzvOd/7RQSd/1H1AbAYWkHR9F6rYkDC', '', ''),
('E41161716', 'Citra Nika Sasmita', NULL, 2016, 3, '1970-01-01', '$2y$10$7qzaUvUunb5oS4sLho67WOHPk95IyEqKtKQb/TYrk6vhIZqkWAopq', '', ''),
('E41161779', 'Nur Hidayatul Afidah', 'DUSUN PUCU\'AN 002/003 SIDOMULYO SEMBORO / 681', 2016, 3, '1998-04-01', '$2y$10$wTxUROCNMrJKmJfIuzCjyeO35ksOZYCnA4iV97cByiECX0f5k88QS', '', ''),
('E41161807', 'Sylvia Febrianti', 'JL. LUMPANG RT 14 RW 01, PUTAT KIDUL, GONDANG', 2016, 3, '1999-03-02', '$2y$10$OaY/AZ20KFWgo0P2BTnb6OhGDi5EzlbKk03cNO2yLTDx.mcMzCrIu', '', ''),
('E41161838', 'Rahajeng Rahma Kencana Giri', 'Perumahan Mondokan Sentosa Y-5', 2016, 3, '1997-06-27', '$2y$10$KfykHai/kHylHWl45mUWHuA/b0CRLFoIdwynujTBYSI3RagOxtPqG', '', ''),
('E41161854', 'Dayu Agastya Rani', 'Desa Pontang, Kecamatan Ambulu, Kab Jember', 2016, 3, '1998-01-26', '$2y$10$sN2sWZ3O6NamooIIcYN2MewIM2skD7mwsW40zqJRc0MKEGXu8uHba', '', ''),
('E41161904', 'M. Akbar Rahmatullah Sujatmiko', 'JL. SILIWANGI, ASRAMA YONARMED 12, RT 001/RW ', 2016, 3, '1996-12-24', '$2y$10$VgJZ54ewC03GwpePbYJ.s.hVRkf3iI8LD79rxD78MPqOY/RnkKTmq', '', ''),
('E41161914', 'Wildan Bakti Nugroho', 'PERUM SUKO ASRI BLOK T.6 ROGOTRUNAN LUMAJANG ', 2016, 3, '1998-04-16', '$2y$10$3rQUitXM.lGnGNUf6fGLJ.jMhfzz5LPqi/tCZJ4ScScUCngEeuku.', '', ''),
('E41161930', 'Al Rizal Fikri Sulthoni Arrahman', 'Jl. Trunojoyo gang 5 blok 4 no : 27', 2016, 3, '1997-09-19', '$2y$10$cdaEZvkbiypUG847QtTMNO/FFgcc5xRtyEuaP698M2PRDImfVWusW', '', ''),
('E41161943', 'Slamet Riyadi', 'DesaTegal Sari Rt03/Rw07 Kec.Pademawu Kab.Pam', 2016, 3, '1997-05-30', '$2y$10$bnbkBUY9x5B1zrZXaZSOaeWHucRCLf2rvCbGCefV7u8wtGKmKCMT.', '', ''),
('E41161947', 'Luthfian Dwipayana', 'DSN. GAYAM RAMBIGUNDAM RAMBIPUJI', 2016, 3, '1997-10-30', '$2y$10$YwbISJKI8H0iJ5HBNUzBp.Yg3ldDn14KAjSC/giwrk3wztpCsCzUm', '', ''),
('E41161948', 'Moh Ziyaul haq ramadlani', 'jl sunan muriya no 145 RT/RW 002/010 usun sam', 2016, 3, '1998-01-19', '$2y$10$iQ9gOa/ZcqhbQSJIzgjJuemava5YrG16Q4ezmTZNzIDFCfVtBODx.', '', ''),
('E41161953', 'DWI BEKTI HARIYANTO', 'PERUMAHAN PANCORAN MAS BLOK A.69 / 68219', 2016, 3, '1996-03-14', '$2y$10$uNiN7Mt1c9kroi5APZQnSucCVHqzH75uqo7NDSnF8geN.r/1xlJKq', '', ''),
('E41161965', 'Brilyan Andi Syahbana ', NULL, 2016, 3, '1970-01-01', '$2y$10$ziI2m/DFWYYFuumLP3f08eaFeI9EkGUNKUgwOTKtPmy152MhmDdvS', '', ''),
('E41161991', 'Ibnu Fadjar', 'Jalan Raya Manding No.18A Pamolokan Sumenep 6', 2016, 3, '1997-04-20', '$2y$10$oEl/nPEPxcuAedU/OqLz0OST.vIFDybPGMqeIeuaild.XEBVzUJpG', '', ''),
('E41162009', 'Nanang Budi Utomo', 'DSN. SELOREJO RT/RW: 003/002 Desa TEMUREJO Ke', 2016, 3, '1997-07-24', '$2y$10$vqFxCRLgBW8U9SscxoanKeLp5z5KFJeegDKVRKvpndt4qYuBaM94O', '', ''),
('E41162018', 'Nur Afifah', 'dsn. pandansari rt/rw:004/002 desa: tukum kec', 2016, 3, '1999-06-22', '$2y$10$2cFPNropuu9B8714rB3LK.9efc9tPzXuxea.jdtlzcwefAuMp/9iW', '', ''),
('E41162045', 'Sheila Anggun Choirunnisa', 'JL Arief rahman Hakim Gg Seruni 1 No3b. Kelur', 2016, 3, '1997-11-06', '$2y$10$6YgbQ9M69Zp0jtWEngXRmOoLA150chhhgJ38CPKfMBlECiUIdWsV2', '', ''),
('E41162068', 'IL JAMI\'ATIN ZANNAH', 'DSN. KIDUL SAWAH RT 001 RW 004, DESA KUDUS, K', 2016, 3, '1997-08-22', '$2y$10$q05PYY4JAjdSiZvGzFxRUueFDRvk9i1FLwuRDoeoTh4GqdV/VZAUG', '', ''),
('E41162071', 'Arif Rakhmat Aprilianto', 'KLAMPIS AJI NO 39', 2016, 3, '1996-04-20', '$2y$10$3T99oeQEeSsPG4PaTOPSJeuIFXInbqEZ0OXkmfqgYLoXaYDg/fcri', '', ''),
('E41170052', 'E.Muhammad Fachriansyah B', 'Jalan Seruni No.12 Probolinggo/67219', 2017, 1, '0000-00-00', '$2y$10$Q9asCJllkixq0u8Xk8pwsuZsF1XGikGAVikZXVO9/ke/bdDg.u5hy', '', ''),
('E41170061', 'Elsa Manora Ramadania', 'KAUMAN TEMPUREJORT 3 RW 12', 2017, 1, '0000-00-00', '$2y$10$WlpjPSJmP4s0tZ/BxwbMMuIQbphRXQuDHZNAobj1IzcCAmT7y18P6', '', ''),
('E41170084', 'Berliana Rohmah Aminin', 'Ds. Musir Kidul, Kec. Rejoso, Kab. Nganjuk/64', 2017, 1, '1999-05-19', '$2y$10$CrKNcxqD5ucsYJgPQjSmPO/eGDaK9dTKz/L9ZnFfAtwyzlcg/QU6u', '', ''),
('E41170090', 'Ari Baskara', 'jalan pakisan RT 4 RW 2 dusun pakel desa kase', 2017, 1, '1997-11-28', '$2y$10$7EiRJpv/qXnarRWhppCSAuqcVwDOdS1JIHKFVGkwt5tHLjU2reBHi', '', ''),
('E41170131', 'Indri Nur Hamida', 'JL. SUCIPTO Gg. 10 LINGK. KRAJAN RT.02/RW.02 ', 2017, 1, '1999-01-14', '$2y$10$W/PmNy35CkYeh1mmLv0VButbweHlQHPUukFwZmJaRoS2BzcVKhF3C', '', ''),
('E41170153', 'Nuril Feby Maulidyah', 'Ds. CURAH JERU TENGAH RT 1 / RW 7 KECAMATAN P', 2017, 1, '1998-06-29', '$2y$10$cxod4S6CA47ld7bAcDuT7uQ.iqb7OAYwBCjGqeDnm4sBIravY15Wq', '', ''),
('E41170164', 'Rizkika Zakka Palindungan', 'Dsn. WUNUTSARIRT/RW : 020/005Kel/Desa : JATIG', 2017, 1, '1998-04-13', '$2y$10$xjW2XcS0JbapwGDoze7zRO8Cb.b3.MpNCxVv3NZbYSUUpi8l71xle', '', ''),
('E41170190', 'Winda kurniawati', 'Jl. Patimura Gg. 4a No. 1 Semampir Kec. Kraks', 2017, 1, '1998-11-06', '$2y$10$VZ9NWQIYpjUcpf3nucx/xuC7mkvYayKqwmduqbuIpXyFsERoUEGxK', '', ''),
('E41170203', 'Kahfinda Mulya Utama Putra', 'JL.Diponegoro GG.4 No.23 RT03/RW03/68311', 2017, 1, '1998-08-22', '$2y$10$nq1VprG0qElsZpG9FUQRS.s1tpGo8cSgZtH5rQJyug.FiI1.Aafvy', '', ''),
('E41170204', 'DANI ARDIYANSYAH', 'Dusun Tegalan, Desa Langkap, Kec. Bangsalsari', 2017, 1, '1999-05-15', '$2y$10$jeZLRrrHf9d0cPtxWPE92u/cAyf5wEyfjtiHykFDNz87PZrU92n.i', '', ''),
('E41170241', 'Inant Kharisma', 'Jl Raya Situbondo, Wonosari RT33 RW11, Wonosa', 2017, 1, '1999-05-04', '$2y$10$/d/bhqL2JC.xr.EAdCFX/e1daNkiXCBC8StQAmIJITvcXlfLgFmJW', '', ''),
('E41170244', 'David Setya Ainur Hakiki Ramadhan', 'Jalan KH Ali Desa Sekarputih Kecamatan Tegala', 2017, 1, '1999-01-19', '$2y$10$GA0uPzYLfB4BAVDx0kW/D.KXgjAOmCWNSMO4ZN0zKcP3zjMgcEuKi', '', ''),
('E41170252', 'Salman Al Farisi', 'Dusun krajan Desa pandean RT/RW 14/05 Kec.Pai', 2017, 1, '1999-04-06', '$2y$10$K2HXaAk8PjM3RzPQpdBptOlBnlUw/U9XTZuHLzwi3ziVrgK0VnPAu', '', ''),
('E41170266', 'Ali Rahmatullah', 'Desa Randuagung, Dusun Krajan RT 1 RW 3 Kec. ', 2017, 1, '1999-06-02', '$2y$10$OhBxJ/GR0gql/dWK0ZJ5wOc1QA1wznVjmgeVSOoIVeot3SUwKLDda', '', ''),
('E41170291', 'Ali wajhah', 'Dusun Panggulmlati RT 005/RW 006 Desa Kepanje', 2017, 1, '1999-08-24', '$2y$10$OTez7785fxSgjKBh9n3E0uOg4pUKSTczuGoA78SEpz.p54PQmNH/K', '', ''),
('E41170333', 'Cicilia Selvy Erianthy', 'Jl. Cempaka 2 No.8, Pondok Teratai, Sooko, Mo', 2017, 1, '0000-00-00', '$2y$10$pGbKauir15ImeyDHqaldcO38g58SMsztUA0QjM1s2x8QMrNADPEqS', '', ''),
('E41170352', 'Meta Gadiecha Wachyudi', 'JL. MADAKARIPURA RT.17 RW.06 DESA BRANGGAH KE', 2017, 1, '1999-02-05', '$2y$10$ZONXhh.IVz5YDmD2SUlW0OTo8QpUN8VmNPmD6RIXNWAA1t34Ufv5W', '', ''),
('E41170391', 'Rakhmat Fadilah', 'Jl. Ahmad Yani 8 no 92 Jember', 2017, 1, '0000-00-00', '$2y$10$01/e413Euh.Ma8FSsb7u3Oh58Zmm3.bmLVR1AJOHa8ypPYQbnTC8i', '', ''),
('E41170436', 'Muhammad Fathan Ridlo', 'Paleran RT. 004 RW. 002 Desa Penanggungan Kec', 2017, 1, '1999-10-03', '$2y$10$Xnu5C7C42SlSmwU5sUkMT.J/g97nKsTkO51xm63.svo7L17ePTLye', '', ''),
('E41170438', 'Mohamad Rizal Ramli', 'Jln. Cut Mutiah RT 01 RW 12 Kelurahan Rogotru', 2017, 1, '1998-12-11', '$2y$10$m.hut512Ta9.TGkbrZWEOeVw.h95wL0GCT/9rWyIBcrH7VdGOR6qK', '', ''),
('E41170442', 'Dimas Yudha Pratama', 'RT.02 RW.07 DUSUN ROWOASRI DESA ROWOKANGKUNG ', 2017, 1, '1999-10-08', '$2y$10$kl/0WLAvEZRcPiwUfgwBNuPSO4HHv7CTlAdYS2ua6tLedTiJ1OkHS', '', ''),
('E41170449', 'Wahidah Addini', 'Jln. Gunung Raung, Gang.04 No.03, RT. 005/013', 2017, 1, '1999-01-05', '$2y$10$wtYEa7GQSGRDWvk5zFGF6O0.iojeEnL7wweupXDsRjymQmz.CGa4S', '', ''),
('E41170466', 'Lail iNur Hanifah', 'Jl. Rengganis No.46 RT. 3 RW. 2 Gugut Kecamat', 2017, 1, '1998-06-08', '$2y$10$2pzcrP0U.kMVqHpu9Jtlv..mhzyxcM52rbyl1Qi97eM88Ujiiup9e', '', ''),
('E41170538', 'Rizky Maulida', 'Dsn. Kemirigalih, Ds, Sawiji, Kec. Jogoroto, ', 2017, 1, '0000-00-00', '$2y$10$dHokQkhFcm5vuj7AZ5ROyeVD23.MJB67uW.Z9KkbQ7GBTOK0KIJHy', '', ''),
('E41170562', 'Krisopras Epikuros', 'JL. DIPONEGORO NO.32 RT.28 RW.06 KOTAKULON ,B', 2017, 1, '1998-05-06', '$2y$10$Cr3vDf/wbliKn8EgGKfJdONkuk1tRRDkTCmeo0MRF3FnRAr5jl8AW', '', ''),
('E41170613', 'Monika Kusuma Dewi', 'Perum Cluster Teratai Hill E-1  rt/rw: 004/02', 2017, 1, '1998-03-23', '$2y$10$l13Xz9C7KeAnDIkAp3cotuutGG6XOvfmrKM7yMoyJhEse10MK17te', '', ''),
('E41170629', 'Yanuar Anugrah Ramadhani', 'JL. Sumatera NO.101 Jember', 2017, 1, '1999-11-01', '$2y$10$96U1JqgvMpYJuyANzApKkeL4/ZISI7.95AQAUxmchbsTqhXZITPye', '', ''),
('E41170633', 'M. Toriq Alfarizi Imansyah', 'JL. MELATI GG 2 RT2 RW1 BITING PINGGIR - 6819', 2017, 1, '1999-02-06', '$2y$10$P8wSznToidvUsxLEnFyYFexaX.ui0OfgzhTeP/NyvdU7yQ0uvdOe2', '', ''),
('E41170641', 'Aji Wahyu Prasetyo', 'dusun gunung sari desa bangorejo rt 1 rw 3 ke', 2017, 1, '0000-00-00', '$2y$10$VdwpBV82GvuQLp96w/uTeOLuLs8UYYgodpRjdbYgWo34hqHTDeVni', '', ''),
('E41170676', 'Anggi Trikusuma Dewi', 'Dsn.Manunggal Lor RT.01 RW. 03 / 61486', 2017, 1, '0000-00-00', '$2y$10$LmomTYs6ENX8w2fl48WVoO9k7vGgCVMCSBKJkGkW7vvRR4VOoMpMq', '', ''),
('E41170686', 'Alex Rudi Herlambang', 'Jl. Sultan Agung No. 50 RT/RW 002/009 Dusun K', 2017, 1, '1998-10-24', '$2y$10$WFsO77SGHBlElxpvZVj9e.2FI5XsllbLGzxUhhtr/Rb53eWajzNXW', '', ''),
('E41170735', 'Destino Dewantara Pratama', 'PERUM MASTRIP BLOK T.3 RT01 RW21 KELURAHAN SU', 2017, 1, '1998-12-16', '$2y$10$tIW/CSBRcI1n1J0CetbCRO.ipnl1kLFoRW1NLARWorS0qRrELXQgG', '', ''),
('E41170740', 'Abdilana Mohtalia Saputra', 'JL.RE MARTADINATA NO 22/ 68211', 2017, 1, '0000-00-00', '$2y$10$9HapzS0Tqno8/fm.L8DnSOi84kghcnR83kCwv0.JNO4x5MMVVrI3K', '', ''),
('E41170753', 'Dheni Teguh Pramono', 'JALAN CENDRAWASIH NO.37 RANDUAGUNG , SUMBERJA', 2017, 1, '1998-02-21', '$2y$10$l5SO5HR7rm8Bczphr13ot.tD5t/9.0RgjIiHwVp38nLPlzGDObDvW', '', ''),
('E41170754', 'Aldy Noverianto Pratama', 'DSN. BANDILAN RT 03 RW 06, DS. SIMOGIRANG. KE', 2017, 1, '1998-11-15', '$2y$10$XqKNaTlDPMwQYz0i86QWe.0PO.pzYsxs1gocCMcnY3HKSJSqJdvbS', '', ''),
('E41170757', 'Hafidz Imanda Jzanuareri', 'PRUMNAS MASTRIP C/1 MANGUNDIKARAN 64412', 2017, 1, '1999-02-01', '$2y$10$W9wpIXSn/667dD9efJNYE.dwjO9WI3Ufppb86if/ehx3055pzwXxe', '', ''),
('E41170809', 'Kurnia Mutiara Septi', 'JL.MT.Haryono Gg Randu lima no 16 rt 01 rw 04', 2017, 1, '1998-03-09', '$2y$10$2fVv30FaI8GHXN4K8t0Rde4A0tVuTR3XkVES7Cr6N71y8LCX2fNky', '', ''),
('E41170820', 'Adhe Fathur Rahman', 'JALAN DR.SUTOMO RT 01/RW 02 Kelurahan Kandang', 2017, 1, '1998-08-12', '$2y$10$SG8bM7JJ/cb0q1zYAq4dQeW.WlSiUX5M.QBOnPMYStR5wjJLTDEIe', '', ''),
('E41170827', 'Ahmad Munir', 'RT 009 RW 004 SUKOSARI LOR, SUKOSARI, BONDOWO', 2017, 1, '1999-02-14', '$2y$10$F0diFMCc6Qm3HEBFOZbOluURzcriFTl.90PqFnhoZEvAxZHjeJkKu', '', ''),
('E41170853', 'Firmansyah Wahyu Maulana', ' Jl.wijaya kusuma gg 2 no 25 ', 2017, 1, '1998-04-07', '$2y$10$c2v1j4Xzb9e5K8phVK4R3u7TRUEFMmi4CHUZt3Sb6XpKcvuQAqRTO', '', ''),
('E41170873', 'Achsanul Khizam', 'DS.BEGAN DSN.SEPAT KEC.GLAGA /62292  KAB. LAM', 2017, 1, '0000-00-00', '$2y$10$FYs32VZL6wSqcxPNAg.L7ewMloVpDuBbgu6br.mT0xZ83Vv.ciyJS', '', ''),
('E41170885', 'Rangga Triana Putra', 'Dusun Krajan Rt 03 Rw II Kecamatan siliragung', 2017, 1, '1999-03-23', '$2y$10$4lMHzaD2bR6exryqks00JOxDLd6y5Yy61W64TsS1lMbXnH/VTseq.', '', ''),
('E41170890', 'Muammar Khadafi Ichsan', 'srono des.kebaman rt:07 rw:05kode pos  68411', 2017, 1, '1999-10-08', '$2y$10$aPu2b9xm7/qatr9Y2TlML.biLF.SWZ4mBtmoHW7nayOsr0d.SslUe', '', ''),
('E41170891', 'Helmi Holida Putri Puspita Ningrum', 'Jl. MAHONI GG.1 LINGK.LAMPARAN', 2017, 1, '1999-05-21', '$2y$10$nD1ZvqxlYwI.QdLr9558IuotCfgsbN6HqmIGJC/ckZgXuzwNExbOy', '', ''),
('E41170896', 'Syavina Octavia Parahita', 'JL. MELATI V/137 LINGK. PATTIMURA RT.003 R.00', 2017, 1, '1998-10-22', '$2y$10$jrjvsJNRHFqmmTz0xr5tle1qqCcNtrStEZbwFr6GMFGudMeIvIJ3S', '', ''),
('E41170897', 'Ridi Yoga Pratama', 'DSN GENENGAN, RT 003, RW 004 Desa Sambiresik', 2017, 1, '1998-06-09', '$2y$10$.42/WmDuaVJl3jczy18.luMVITrs.L0CJ0oLrDqqR2rjycAGnMMLS', '', ''),
('E41170909', 'Ade Setiawan', 'DESA BAGOREJO DUSUN UMBULREJO/68471', 2017, 1, '1998-10-09', '$2y$10$.94GjIuHUdsKjVTbVNcYcuwAleEwV.R3UzWQp5I4zetL5/yCnOwUa', '', ''),
('E41170913', 'Yusuf Andi Nugroho', 'JL.R WIJAYA RT 07 RW 06 KEL.PLOSO/64417', 2017, 1, '1999-03-27', '$2y$10$CyKDmpDrhfBKlRqmLGVMDezU7Me3gXAJGNcqdNIWQJMj4bC1uUY5S', '', ''),
('E41170916', 'Muhammad Khoiriri', 'jln. niaga nogosari kecamatan sukosari kabupa', 2017, 1, '1999-03-20', '$2y$10$yZbSXF47ACrP/ig8jfAMhODMwHrCjlqN6bBzdPA9SSpMUEKy.oDbK', '', ''),
('E41170926', 'Fahriza Ramadhani Putra', 'Jalan Dieng No.110, Dawuhan Lor, Kec.Sukodono', 2017, 1, '1999-05-01', '$2y$10$285UTnH2fuwWKqH46pAPWuo0BUVGa7xkuU8fw.AsV26TMmdfyywLC', '', ''),
('E41170959', 'Maretta Dwi Muriyawati', 'NYANGKRING RT.04 RW.06 NO.26 CANGKRINGMALANG ', 2017, 1, '1999-03-03', '$2y$10$sgPpT0n4.3M1Ci.j9GJ.ZuSlIVOmaPit2hqJVzuF6txryLATyHq8.', '', ''),
('E41170972', 'ISMU UBAIDILLAH PANATAGAMA', 'DUSUN BIMO RT 02 RW 01 DESA BIMOREJO KECAMATA', 2017, 1, '1998-12-25', '$2y$10$yx8mRU7CVbF8qq2du2zzm.dSOIqV7OG/vK8hAgGckv5bquWjUu2YS', '', ''),
('E41170987', 'Novia Nurul Qomaril', 'Jl. Wijaya Kusuma RT 05 RW 04 Kelurahan Dawuh', 2017, 1, '0000-00-00', '$2y$10$i6esLFR/HPSoniMEWuSjLOp8QtEyaGfcHKsNXask1jFXcUuonuJ/m', '', ''),
('E41171011', 'Gagas Adi Rismawan', 'Perumahan Villa Kembang Asri Block B.C 4 / 68', 2017, 1, '1998-09-26', '$2y$10$2DkEVSKf0c/9Kyo7HRbIzOnAL2zFLJYWhQtpNjI/AG0Bj9jhl1T5u', '', ''),
('E41171014', 'youwanto refo dewa wahana', 'jln. gajah mada VI no.128 / 68131', 2017, 1, '1999-05-06', '$2y$10$/2uLSWw/cKyDvFsBnL7u3eNwT8x0/GMHhCjc9jhw7s58OyV8PY50G', '', ''),
('E41171015', 'Yusril Fahmi Al Faizi', 'JALAN KI HAJAR DEWANTARA NO 166 (SELATAN LAPA', 2017, 1, '0000-00-00', '$2y$10$/iXbiH6MpCWPAnRgio7O3eDuTSjStymX2QRKgcLtc5OC192GEw3hC', '', ''),
('E41171041', 'Makhi Hakim Hakiki', 'DUSUN KRAJAN III RT004/RW014 Desa KETING Kec.', 2017, 1, '0000-00-00', '$2y$10$G.g.FtFnv9lYpkTe.KXCFeWSOXLpoOKzQlRQj4ktZTVPMJxUfJd72', '', ''),
('E41171075', 'Moh. Syafrian Abie', 'Dusun Maron RT07/ RW02 Desa Genteng Kulon, Ke', 2017, 1, '1999-05-01', '$2y$10$gsmuLEa3gcq06igI4cBOe.A6k6Hxv.JdrRazRKLLXsTFuBfTIhRW2', '', ''),
('E41171092', 'Galang Putra Fendriansyah', 'Jl.karimata no.78 (fotocopy gladys)', 2017, 1, '0000-00-00', '$2y$10$GMPAXvNnsQqbkJPIVTSZoOsK8tpIMkj5Dx2KNSw72PHK2JeHF8DGy', '', ''),
('E41171093', 'Firlana Priyadna Putri', 'Jalan Letjen Suprapto RT 3 RW 5 Desa Bulu, Ke', 2017, 1, '1998-08-16', '$2y$10$1SjARBbp3kIrrr0dfxXi2OK6c4UUsllwonSTbFKT9NdRrtLb7LEIS', '', ''),
('E41171101', 'Mochammad Rozy Andrean Syah', 'JALAN TAWANG MANGU 3 NO 24 SUMBERSARI JEMBER', 2017, 1, '1998-04-05', '$2y$10$it.bD.tztj6Xz9bOIQXxbOJosvYVr.eDUiI94.gzOKrGehPaLEmCq', '', ''),
('E41171104', 'Maulana Malik Ibrahim', 'JALAN SEMANGKA 31A PATRANG-JEMBER', 2017, 1, '0000-00-00', '$2y$10$gCfy0KdDgDLmtf53sysPuOPiGVQbbW3z28q.FT4x3Lnim4LU8ddOm', '', ''),
('E41171111', 'Muhammad irfan shidqi laksono', 'JL.KAPTEN TESNA NO.11\'', 2017, 1, '1999-11-07', '$2y$10$WNoMqaEFogV3sBJMlo1RbeDcgsPhbrf7eiTbYiXeZ2PBPFTXKoKn.', '', ''),
('E41171118', 'Fernando Farista Ahmad', 'DUSUN WUNGUREJO RT. 06 RW. O6 DESA SIDOREJO K', 2017, 1, '0000-00-00', '$2y$10$61jDsGgH2Ooy.Cn2doMEFeuxtUEBYLNFVAy7.AQ.HCw2ick/.SDlu', '', ''),
('E41171120', 'Muhammad Arief Rachman Muttaqien', 'Jl. Rejoagung No.2, RT 1, RW 16, Semboro, Jem', 2017, 1, '1999-05-13', '$2y$10$doyuL8lvNH/nKjXycgASgeY99vnwWYfDmJtNUMpEbNbsISUb7Y3O6', '', ''),
('E41171128', 'Romi Septian Wahyu Ilahi', 'Dusun Tukum kidul RT 31 RW 11 kec. Tekung Lum', 2017, 1, '1998-05-09', '$2y$10$rEKdpYSGw2/2EgRj9CXDxukHE8oH28nJQEkRADsGZVclQ0lzH2tDG', '', ''),
('E41171135', 'Dwi Ayu Wulandari', 'Perumahan Sumber Taman Indah Blok S no 8 RT 0', 2017, 1, '0000-00-00', '$2y$10$WkQ/0Ht6bgv.xlD9MegAdeVYDaLfgdMD.PdirmvlihQUsYi78.lti', '', ''),
('E41171141', 'Fahmi Dwi Septianto', 'Dsn/Desa/kec. SUMOBITO RT/RW 002/001 JOMBANG ', 2017, 1, '0000-00-00', '$2y$10$KlPFZHVX2druIZamYSBY4.Q.XheyRGv3DTzggITob2nbT0QqD.kVS', '', ''),
('E41171142', 'Kevin Harlis Oktaviano', 'Dusun koncer malang  2 rt 4 rw ,Desa koncer d', 2017, 1, '0000-00-00', '$2y$10$IqylLApq7.wqMHTNa.oLTuGsC0SOzKhrOcNLEH2LD1EB7Sb6ByShS', '', ''),
('E41171164', 'Adi Lukito', 'Jl.Kertabumi Gang 4 No.8 Jember', 2017, 1, '1999-05-21', '$2y$10$b8pL4Gn50I2xJTp7mM5o3u3T1PM0Zfm1Nlwb3Kp5CzMuqRIytcfbK', '', ''),
('E41171169', 'Fedy Rahmatullah', 'DUSUN BABAN TIMUR BEDENGAN, RT 001, RW 008, M', 2017, 1, '1999-02-27', '$2y$10$OiwIul6MoqJkmIjS0uItWektnOS/4api0JlBABuNET0GpJHh7Mfym', '', ''),
('E41171171', 'Atho\' Fajarianto', 'RT/RW 01/02, Desa Sumberagung, Kec. Pesanggar', 2017, 1, '1999-04-06', '$2y$10$yyHIdJGhiwrt8ocrruNcK.nXwvm8T2DHzawK3LhYrhOtTFABlO5ZS', '', ''),
('E41171178', 'Moh. Ainun Najib', 'Jl. KH. Moh. Tohir. Dusun Krajan, Puger Wetan', 2017, 1, '0000-00-00', '$2y$10$ZSEFio139xY/JWDNOKd1/.109xQ9aaq5c454cvNmYRUJfYOdxPZ9O', '', ''),
('E41171192', 'Zulfian Hilman Firdausyi', 'DUSUN JATILAWANG RT 02 RW 06 TEGALWANGI-UMBUL', 2017, 1, '0000-00-00', '$2y$10$sl9q7vNBDBeFNErbdEYJs.dgUFHF1od33UzXTy6YODUCvrECPrN..', '', ''),
('E41171252', 'Niko Wahyu Fitrianto', 'Perumahan panji permai blok OO-19, kelurahan ', 2017, 1, '0000-00-00', '$2y$10$a0OTCHS4bRHSvKVAyBTEm.ybjkA..d1lHWFdH5aJfHhsy4eL0dA/a', '', ''),
('E41171254', 'Moch. Aliffi Akbar', 'Jalan Kacapiring 1 No.48 Gebang / 68117', 2017, 1, '0000-00-00', '$2y$10$HZxoQm6LVDIOr8Md/tdQTeVvClIkqG4uSO0XAkk2xF/UVoy8H7Jqq', '', ''),
('E41171308', 'Bawik Ardiyan Ramadhan', 'Dusun Kapuran Desa Grenden Kecamatan Puger Ka', 2017, 1, '1999-09-01', '$2y$10$GvfWFKO2Vn1n6ONgRgrOneo.HFNBo6C7rT8GH8Si5gMg6FUsY9OIq', '', ''),
('E41171309', 'Al Busran', 'Perum Bumi Biting Indah, Jln.  Kenanga, blok ', 2017, 1, '1998-01-22', '$2y$10$XzbKqa6UoAvaPhyeP4ulpulh1EFy5uR7fdWeIIwiUkXCEQ2JmIKvq', '', ''),
('E41171319', 'Alfani Zidni Hidayah', 'Gumuk rase kemuningsari kidul jenggawah jembe', 2017, 1, '1998-12-31', '$2y$10$OrVUcA2K3c5.ZNdmHVPs4e0LTwr64J2L2lTU0YyKrmeDJnyYNzAgW', '', ''),
('E41171328', 'Yanuar Ridwan Hisyam', 'Jl. Karimata V blok D-12, Jember', 2017, 1, '1999-01-23', '$2y$10$uxD93syjCD26AasVIoqkLecT.TNmqEtVhlJ3G77npSkdIdZ6b4IZC', '', ''),
('E41171335', 'VINNY SAKINAH VIRGIO', 'PERUMAHAN SUKO ASRI BLOK D 20 RT 04 RW 11 KEL', 2017, 1, '0000-00-00', '$2y$10$HBLZqaU6lxQJBxj2u2qGvOJmchuTwDkMv6eBHTkZLQ1Hv.wYEFmQa', '', ''),
('E41171351', 'Ainun Nurkharima Noviana', 'Sabrang wringin anom Rt 01/02', 2017, 1, '1998-05-11', '$2y$10$9YWBnn4LLQ2gjtkB540NtetP4PuKLAAjhICCIjEpmYaUZWMAdHlLS', '', ''),
('E41171365', 'Moh Khairul Anwar', 'Dsn PANDIAN Ds DEMPO BARAT PASEAN PAMEKASAN /', 2017, 1, '1997-03-06', '$2y$10$6mWdhFhzZuwXO9laLeu.muigSmf/NzVAtypy9V0d2Q4OHlFXdTWZu', '', ''),
('E41171369', 'Maulana Hasbi', '03/01,Panjen,Jambewangi,Sempu,Banyuwangi ', 2017, 1, '0000-00-00', '$2y$10$m5AZnIyIqeDNEjoh0LQ0tO1BKMqkB1HuVvUQoTDuo3.P9d6osud96', '', ''),
('E41171389', 'Septiaji Waraga Fila', 'JL.WIJAYA KUSUMA RT 07 RW 01 KEL. DITOTRUNAN ', 2017, 1, '1998-05-09', '$2y$10$V6W7z0bhuOcQAF5tqzbjtuvlO7CcpDVuZCk12oTbGjs7B6WlJfgxi', '', ''),
('E41171392', 'Budi Lasmana', 'DUSUN KRAJAN RT 004 RW 002 KALIANGET KEC.BANY', 2017, 1, '0000-00-00', '$2y$10$sJzrtnZfpPNhUXp/AcbA9OgPkyg3HSDivJ70.WrT6OTbcFeLBLJq6', '', ''),
('E41171452', 'ADY BAGUS SUGIH SUSANTO', 'Jl. Rowo Mas Rogojampi Utara RT/RW 003/005 , ', 2017, 1, '1997-03-12', '$2y$10$hHFfZXEyH3290BxQqv5eiuP1RcSqqo68jBWqCJsx7Afs5SenxFmBS', '', ''),
('E41171478', 'Raya Akbar Jaya', 'JALAN MASTRIP NOMER 3/88 JEMBER', 2017, 1, '0000-00-00', '$2y$10$IOUch5yRXfv1CCrBWa3g6eblJPdHLrKs58AbVBjEotN0oYLx4dOxy', '', ''),
('E41171508', 'Willian Refky Firmansyah', 'KP. BRINGIN RT 001 RW 002 DESA LANGKAP KEC. B', 2017, 1, '1998-04-30', '$2y$10$8.H6dt8r/eHrrtFi3A0okeVuEq4K5g5kNOB/MKYcLv1ary6ZSFmve', '', ''),
('E41171541', 'M. Avicenna Maula', 'DUSUN KERTAH, RT. 04 RW. 08 SEBAUNG GENDING P', 2017, 1, '0000-00-00', '$2y$10$wjZ6HNBH7xKa0SjGMG/RnOc49q36JTNyZndSwSxdrZYrDytTnQebG', '', ''),
('E41171569', 'Riska Aprilia', 'JL TEUKU UMAR NO.13 RT/RW 01/04', 2017, 1, '1999-04-26', '$2y$10$P.ITLSmAOV3naSNqXEOgDObX59CR0jztgUaKbF3m.3XSmojMHzpna', '', ''),
('E41171583', 'Ahmad Fakih Hasbullah', 'JALAN MAKAM MRONGGI NO 2 MRAWAN-MAYANG', 2017, 1, '1998-09-05', '$2y$10$h8F6LVjHO7U2Qcx9UkN79.sAclYd75jFbpDD9QZVI39h89KxT7vre', '', ''),
('E41171590', 'Ega Kustian Pratama', 'Dusun Kertonegoro Selatan RT 2 RW 5 Kertonego', 2017, 1, '1999-06-02', '$2y$10$ekbAWMpBEPwk3dDHaNTc6usKGSieAOVpdKXBJvSEKOHV2xZT.F3o6', '', ''),
('E41171600', 'Lafic Imarega Dwiputra', 'Jalan Blora 834 Desa Wotsogo RT 1 RW 8 Kecama', 2017, 1, '1998-01-03', '$2y$10$WpE5argESouKmAxEc4elkeajNQJ/Qm5GBLvqOOiP37Yt5ybVXB8lO', '', ''),
('E41171605', 'Muhammad Andys Saputra', 'DSN. SINGOPADU RT 4 RW 2 DS.CANGGU KEC.JETIS ', 2017, 1, '0000-00-00', '$2y$10$CJ7zfBOjn2dxisPEwqqet.VsRH.SWM1x.0UZjfLEDVxBpObWMZ0Qa', '', ''),
('E41171613', 'Galih Bagus Prakasa', 'Jalan Raya Tamanan Dusun Karang Pande Desa Gr', 2017, 1, '1998-11-08', '$2y$10$Rc7vPgEk7sH1BrBOx7nlu.1bmqh..v6DxJPT92kaOf8QxUI5gTxGu', '', ''),
('E41171621', 'Bangga Adityatama', 'DESA KAJAR RT/RW 003/002 KECAMATAN TENGGARANG', 2017, 1, '0000-00-00', '$2y$10$XHjvFwFeyrwaL4ovQb1XvO50W6nsgL/CCF4k78JWfgx8hD.IqVY3O', '', ''),
('E41171625', 'Raga Satya Airlangga', 'JALAN TEUKU UMAR GG 1 NO 29 BONDOWOSO / 68211', 2017, 1, '0000-00-00', '$2y$10$DZzWRtvyXHiiiR4.7RjkeuxhV14lc5vQjilMD09GufO/eQ9n/WbA2', '', ''),
('E41171660', 'Refi Tri Hidayatullah', ' BASUKI RAHMAT NO 130 GLADAK PAKEM JEMBER', 2017, 1, '0000-00-00', '$2y$10$zynX5DtH6UPaA6Ubh9wPdul/ZLOppmXw33gBSo1DwStmN7KDFSH7O', '', ''),
('E41171664', 'Ramadhan Ibnu Umam', 'RT 01 RW 08 dusun Jatilawang, Tegalwangi, Umb', 2017, 1, '0000-00-00', '$2y$10$fw7A/xtuaNHDrU/F2MwiR.dJ5ecpS8C4mUnZTZiunPFhqDxti1EAC', '', ''),
('E41171666', 'Nauval Permana Putra', 'Jl. Kenanga no 30 RT 02 RW 024 dusun dukuh - ', 2017, 1, '0000-00-00', '$2y$10$yUr0H.ORC1Bg1iYGLgRbZu3l1ng84746fx1LM8r4wfUS1vNGNX4y2', '', ''),
('E41171683', 'MOCHAMAD WELDANI EFANSYAH', 'JL. Dr. Soebandi no.116 Jember / 68111', 2017, 1, '0000-00-00', '$2y$10$tOBo6ws0uOq3wjfHU4QWgexpSxpX4jLNRBkByWHQikVLK1NxsfNLu', '', ''),
('E41171691', 'Susilawati', 'Jl. Raya Banlendur Kalowang Kecamatan Gayam/6', 2017, 1, '0000-00-00', '$2y$10$Gp7VpFC4qfjY7DJMnSDsK.AbhsPn8D1OOGr7ADOtmwApciLgapWKS', '', ''),
('E41171697', 'MUCH NESHA ADINATA R', 'Jl. Moh seruji 0 RT.4 RW.18 Dusun Bedengan, D', 2017, 1, '0000-00-00', '$2y$10$zdQYIi52zweMDMCxUdDeauaezGf0CoBmlpHxATiAVNh8UoZJaX5I6', '', ''),
('E41171720', 'Ahmad Rifa\'i', 'KALIANYAR II RT 10 RW 02 SIDODADI, PAITON, PR', 2017, 1, '1999-10-05', '$2y$10$mnmYy02ZxLDL/hBPh11lQeY/xY92.ybdTNsnKnt9yFmTWzKW/yiCu', '', ''),
('E41171725', 'Khosnol Khotimatul Arifah', 'Dusun: Bansanik RT:02 RW:02', 2017, 1, '1998-10-15', '$2y$10$CG4v9s6WX04rg9ZwE1IoS.TFwvbyv/ZkLMvuK1zb8sLnyIQa1lk76', '', ''),
('E41171742', 'Ridwan Hananto Aji Arifin', 'Dusun Krajan RT 05 RW 05 Tanggul Kulon, Kecam', 2017, 1, '1999-01-25', '$2y$10$ZcFs8/pch3uSJ74/MaueOu9ge.2lGvNe/eBr5Ap.1e4wx/LS2B2fi', '', ''),
('E41171746', 'Muhammad Fatihal', 'Jl.IR SUKARNO 110 Desa Pisang,Kecamatan Patia', 2017, 1, '0000-00-00', '$2y$10$QE7y0RKFwIhTqzythYYPF.vjRy/DoQrw/VS1jOqv4uKNvSiwWOJZK', '', ''),
('E41171749', 'Ali Mansur', 'Dusun Mulyoasri, Rt/Rw 01/01, Desa Sumbermuly', 2017, 1, '0000-00-00', '$2y$10$xNNmK9E1xwuZpUB6U.8mZ.gZ2Gn.Dyloiq9ypNzNxowAfcpIZRAjC', '', ''),
('E41171753', 'RIKKY IHZA PRATAMA', 'DUSUN SUMBERAN RT 001 RW 019 DESA AMBULU KECA', 2017, 1, '0000-00-00', '$2y$10$iWlUjfbTqUx1ujLD1qkED.8l7lm5pR4s.09H94zbdqnXon3gLOv0G', '', ''),
('E41171754', 'David Bristi Antara', 'RT/RW 04/05 DSN. LEMBENAH, DS. LEDOKTEMPURO, ', 2017, 1, '1970-01-01', '$2y$10$gV9kUi/qr5B27teWAx4yO.kiNropnl/vkQY7rSN2VFKXzDd0hKwoq', '', ''),
('E41171762', 'MOH FANI FADILAH', 'Jalan Pegadaian Rt 03 Rw 02 Dusun Kebonan,Kal', 2017, 1, '1998-07-07', '$2y$10$yi2gCq5BlBGSrgc8vUqone1112g6Y1KCs47Z/55KNot86KUAz2bDy', '', ''),
('E41171763', 'Tabhrany Odi Asmoro', 'Jl. Melon Gg 4 Blok D:18 / 68111 ', 2017, 1, '0000-00-00', '$2y$10$77yha7xxlbZHixqptkJ.gO3sYYcsnt9KHm650bNUE.L3qk3tqMF8G', '', ''),
('E41171769', 'Farhan Rizal Hidayat', 'Jurangsapi, Bondowoso , sebelum SMK 1 Tapen', 2017, 1, '1998-01-05', '$2y$10$mdOmyypt6orFE0Xsq0WgvuGiiY5c.OwW0ab/acEEeSxpoQJ07y1LC', '', ''),
('E41171785', 'Yadribullah Hul Amtsal', 'JL.KALIURANG PERUMP PTP NO 3 JEMBER ', 2017, 1, '0000-00-00', '$2y$10$XZx6b.UnvKd7R6yU3CRRT.TavhqOgMtYFfnkz0t78dNOQ2X1jwgb6', '', ''),
('E41171807', 'AJI PRATAMA', 'DUSUN KRAJAN II RT.03/RW.06 DESA KETING-JOMBA', 2017, 1, '0000-00-00', '$2y$10$CemHIHuVtIGpJtvDO9KrKO1Mr13gnck2bq6ARGDLyle5Fv6GLBMsi', '', ''),
('E41171823', 'Siti Nur Azizah', 'DSN. KRAJAN GUGUT RAMBIPUJI JEMBER', 2017, 1, '1999-07-08', '$2y$10$z5m9scSEDljBwzwm41yE4.yFx150i9gRS3..TYhs0/UXqIX31koXK', '', ''),
('E41171829', 'MEGA SILVIA', 'Desa wonokerto RT 05 RW 05, Dusun Krajan , ke', 2017, 1, '0000-00-00', '$2y$10$fHzYxj/f1/6xGOT6eeIAn.zyocqtRcaLvl1iYbSKBryYVLHRJGNaS', '', ''),
('E41171843', 'OKTA ROHMATUN NISA’', '\'DUSUN DEMANGAN RT/RW 008/006 KESILIR WULUHAN', 2017, 1, '0000-00-00', '$2y$10$80B..gYoX8uNqxYaCkaHkelVvGoqZPoA2F6NmLzIe4xB.2PSBD/xe', '', ''),
('E41171845', 'YUNIAR FABI PUTRA', 'DUSUN KRAJAN AMPELRT 02 RW 01JL.SUNAN KALIJAG', 2017, 1, '0000-00-00', '$2y$10$XlNckt.qC471F1AGMCVoD.A6JD24Ful7UTb2VIObhJpy1wd7OJfoG', '', ''),
('E41171874', 'Yusuf Tri Wibowo', 'Dsn Plaosan Ds. Plaosan RT. 018 RW. 005 Kec. ', 2017, 1, '0000-00-00', '$2y$10$VBr7zFRM7buFxSfOCSkVQuo.LHJp6mIJJGpePeQ.IzjRXFoYHpVAe', '', ''),
('E41171890', 'Mohammad Debby Karomi', 'JL WACHID HASYIM XXI BLOK 3 NO 146', 2017, 1, '0000-00-00', '$2y$10$CVWhBk7ph048v/gV4n.mEeoLsgIOL6BPdbNLET9IvNiV6.PNxxpqW', '', ''),
('E41171892', 'Akbar Maulana Tryas K', 'JL. PB. SUDIRMAN XII / 39 JEMBER / 68118', 2017, 1, '1998-04-11', '$2y$10$8mYI5ppCDBqe65e0b09z.ene5NFCsgwmQ7IVyAO.i5e0v/3kjoLy2', '', ''),
('E41171896', 'Adi Cahya Wiratmaya', 'Jalan Brigjend Katamso No 59 e Bondowoso', 2017, 1, '1998-06-22', '$2y$10$0xq6JPI7CSrq8Op06o1OeOS67XyNI2H3kSnF5vJE7994MRcCbvq6G', '', ''),
('E41171926', 'Yosef Yoga Himawan', 'Jl.Piere Tendean gang Pemuda no 56/ 68124', 2017, 1, '1970-01-01', '$2y$10$//q1QA6QiE5HwAaG0/a91uLXHCm6rzoWMSA9cRpGnfw7ADnVnDbhO', '', ''),
('E41171941', 'NISKE ELMY PAULINA', 'DSN.RINGINASRI RT/RW.029/007 DES.WRINGINPITU ', 2017, 1, '1999-04-04', '$2y$10$ftipnpaOetB3iPIGvrBD2.BBtXasWydJRUmuB4jTn9BrOYdna0hBq', '', ''),
('E41171946', 'Sharah Rizky Nadyastuty', 'JALAN MENCO NO 8 RT 02 RW 2 SAWAHAN - GENTENG', 2017, 1, '1999-03-28', '$2y$10$VDj3SE84ihzxBb2bwzrt..vf0SM1NAtWBEwoQHWd2VLip/rH7YP6W', '', ''),
('E41171956', 'DANA BHAKTI SURYA PRATIWI', 'RT 003 RW 022 Dusun Kepel Desa Ampel Kecamata', 2017, 1, '1998-02-14', '$2y$10$kW3gPkPrt991Rs14nKN1ceu0LFdUWHZcL/FB2f4vXj6cx6nULkZ.i', '', ''),
('E41171959', 'Kia Dzaky Eriyoko', 'PERUM GRAHA CITRA MAS BLOK Q14, KALIWATES, JE', 2017, 1, '1998-10-12', '$2y$10$vnm7v7xX7T22/NC4LZ.dI.fGmJrvczzCpSWrT/scv7NmspJ.Cv2RG', '', ''),
('E41171969', 'Arif rahman hakim', 'JL.PB SUDIRMAN RT 01 RW 01 SERUT-PANTI-JEMBER', 2017, 1, '0000-00-00', '$2y$10$TpfmzqMy1/S0cjOCZmRqd.i6TCyr.phkKmSsJYrxXpuQEq/jkwdz.', '', ''),
('E41171994', 'Sasqia Dwi Arta Novia', 'RT.06/RW.05 Krajan Genteng Kulon, Kec. Genten', 2017, 1, '2000-04-25', '$2y$10$FYt5ZSGZCYCixyT13X6rVucJn9vick6P92UBhRVeMVRahg3JoOLqS', '', ''),
('E41172008', 'Arif Adi Kurniawan', 'Jl. Bengawan Solo 03/70 /68121', 2017, 1, '0000-00-00', '$2y$10$z33heTjTpy6thDtl/nc44eXhlo.PsviXkbr6cEl6wIXJrqQKrRDUS', '', ''),
('E41172031', 'Aditya Ramadhan Rizkiyanto', 'JL. KALI PANCING NO. 08 RT 02 RW 16 JOGOTRUNA', 2017, 1, '0000-00-00', '$2y$10$Bs1DBq.pyZMd2dSt6EXSPe1bc2SQb0jvY587NVRGGkpoojT67sKHu', '', ''),
('E41172060', 'Roki Prasetyo Adi', 'JL. LUMBA - LUMBA 2 NO : 234', 2017, 1, '1997-05-10', '$2y$10$t.n7h60ZxZaHuxaoMoHN.OSdkN6O7nAOJuK9Ud9ClnpMBbG.MizGe', '', ''),
('E41172064', 'Syahdan Fiman Huda', 'Jl. Bungur 70 jember / 68117', 2017, 1, '1998-12-11', '$2y$10$GD92oary/4Tm9PklZz9GDe11Q9FksymlcMP2OpvychOY2eDWUhniS', '', ''),
('E41172068', 'AFFAN TOHARI', 'Dusun Pesisir, desa Aeng Panas , Kecamatan Pr', 2017, 1, '1999-05-03', '$2y$10$2ipjh5K5W1VSep6NeQpe0OwjdsZ.5.vIGo1aneRATlnM3IBpW.ezq', '', ''),
('E41172069', 'Akhlaq Khan', 'Jalan pantai no 73 puger kulon', 2017, 1, '0000-00-00', '$2y$10$UnLzimGRzSiqQZIrPS/Pd.hnIVUz4MfSakqqZ9B93u9RMtUnjVnJq', '', ''),
('E41172072', 'Khoirul usamah admojo', 'DSN BARAT RT 4 RW 1 DESA KRUCIL KEC KRUCIL KA', 2017, 1, '1997-08-08', '$2y$10$8AWwiaJRT3JbeQM63VzwZunyzNQhy3712X68rXCDpPAVlBzbasmd6', '', ''),
('E41172074', 'Imron Rosadi', 'Jln. raya timur pasar randuagung Gg.Cempaka D', 2017, 1, '0000-00-00', '$2y$10$OJfoj1unmyIKqfPKzHV6CuUZORGmXFJ3Gx1bF5mBp7v9ubcQGnu6.', '', ''),
('E41172079', 'Sandistya Diski Aprilian', 'Jln. Letjen Sutoyo Lingk. Kramat 1 RT:02 RW:1', 2017, 1, '1999-01-04', '$2y$10$nQrHxwAf/Dtnw7Ks3ZWWvu3cAmdNt2B3tBTCDWGc58AmVhRzvbscu', '', ''),
('E41172092', 'Moch. Zainur Rofan Fannani', 'JL KH AGUS SALIM 04 (rofil) - KRAJAN - MUMBUL', 2017, 1, '1999-12-25', '$2y$10$Apb41P.Ol8BbFl6Z6clAK.3Dms.TeL.EiqC7su0E3VK6tRjWvStO.', '', ''),
('E41172094', 'Ferdian Nada', 'Jl.Sumberwadung RT01 RW02 - Dsn.Tugung - Ds.S', 2017, 1, '1998-06-11', '$2y$10$zq1f4qnt5BzddYz/.QhDeeFM6Q7Yk7.2V1fq98rq7cBPJblcOw262', '', ''),
('E41172104', 'Gilang Rahmadhan', 'KEBONAN BULAKWINONG,PASIRIAN 67372', 2017, 1, '1998-07-12', '$2y$10$YHmwrshHSCXJz/9/xfE7p.jwo8LXWW3bnm6CFw6nD.S9j5DOLTO7i', '', ''),
('E41172109', 'Nava Shoqibatul Khoiriyah', 'Perempuan\', \'Dsn. Pandanrejo RT.013 / RW.002,', 2017, 1, '0000-00-00', '$2y$10$CAynqsAIRh9TA38snVZkDeMkw20dIxVUVuvJlEJFyZSiPF7/e9AA6', '', ''),
('E41172111', 'Rizmawan Widi Wiranata', 'JL.SEMERU XXII/Z16 JEMBER ', 2017, 1, '1997-10-09', '$2y$10$i7s93W1XW0g2IxoBw44tAOlnPWauWYb9faXhw4LrdYZviFysfERJ2', '', ''),
('E41172126', 'Morgan Ardianto', 'DSN TEGAL PAKIS RT 02 RW 01 KALIBARU WETAN, K', 2017, 1, '1970-01-01', '$2y$10$EZlBMtc4ScSUTcwiexevq.ZSydqEiurdmTOCrwAjpCdJuNDsYDiOO', '', ''),
('E41172128', 'TRI AMBARWATI', 'JL.YOS SUDARSO N0 721, DESA PABEAN, KECAMATAN', 2017, 1, '0000-00-00', '$2y$10$ALoJGnvJeQch68.cgbw4p.kcDiK9QEMvIRIkmxMZPMY7DjQM0ENc2', '', ''),
('E41172150', 'Novando Agung Syahputra', 'Jl.Karimata V Blok A6 ', 2017, 1, '0000-00-00', '$2y$10$SdSVonInrXPLdcfEk5KZ..ZY.ffJPmuXd4xlarr2VlATVW/jM/TIC', '', ''),
('E41172152', 'Muhammad Hadana Sabilal Muttaqin', 'Jl.Sultan Agung - Candijati - Arjasa  Kab. Je', 2017, 1, '0000-00-00', '$2y$10$hV2kXtOMyn97jT9GfI0a1OQWOiZbtrazcbf3WZ0LqR3JkmqQCv6K6', '', ''),
('E41172160', 'Nofita Safira Anggraini', 'Kalidilem-RanduagungRt:04 Rw:02Kec.Randuagung', 2017, 1, '1999-04-09', '$2y$10$P3B2YUr21lWb.WmrNPEtouyGVUNG/Cjo49uZC3Ua6HRNvCF5XTXRq', '', ''),
('E41172164', 'khansa izza alif', 'Jalan dharmawangsa 3, no 5 RT 01 RW 01 Rambip', 2017, 1, '0000-00-00', '$2y$10$0JLlHDrPsRsTv1jdggh2UOzUSPdBE63wVSVtOy07lxPJjJ5GxDpiK', '', ''),
('E41172165', 'Mochammad Lembar Adjie Bramantya', 'PERUMNAS PONJEN BLOK H NO.10 KENCONG-JEMBER 6', 2017, 1, '0000-00-00', '$2y$10$gX1oVO6STyIjdOb.QJ.MnO39/4EXyV7QK8MM2nstFat1GPZscwxZ2', '', ''),
('E41172176', 'ILHAM BAHTIAR', 'Sidomulyo RT.06 RW.11 Sumberberas Kec. Muncar', 2017, 1, '1999-01-04', '$2y$10$thhhOYqbApmhmWI9.5xTQ.PGI5RXE3Av8jsvf5uaZ/1Ek4Shz9SoO', '', ''),
('E41172209', 'Alfarezha Diaz Mahendra', 'Jalan pajajaran no 23 jember', 2017, 1, '1999-02-17', '$2y$10$lzaWhsAf2ddt8IyDAyl04eggRA1o1z/9v.LB/0vHMlYdE8xkcc9Mm', '', ''),
('E41172219', 'Moh Wafiq Fakhri Ali', 'Situbondo, Kec. Panji, Perumahan Griya Panji ', 2017, 1, '1998-11-29', '$2y$10$/m0KfRuB.322ePhHI7Tlse9p2SDMLX1O/Jod5RmaUjPZBkr8VTa0C', '', ''),
('E41172228', 'Muhammad Alvian zidny', 'jln.sultan agung No.02 Gumukmas,Jember', 2017, 1, '1999-09-04', '$2y$10$u/GjPgqaBxqOC4vS.8OWqe5u3w74iMQvNeP.bRCreryY5x7DflzzC', '', ''),
('E41172249', 'Rendhy Pratama Putra', 'JL. RAYA KAWAH IJEN NO. 1 SEMPOL RT 007 RW 00', 2017, 1, '0000-00-00', '$2y$10$WgQaNanFe6T7o54VnCIcueZo1lYmmLW5xPos4xmDU94..RHgZTZB2', '', ''),
('E41172253', 'Fahrizal Azi Ferdiansyah', 'Dsn Balak Kidul Ds Balak Kec Songgon Kab Banw', 2017, 1, '1999-09-05', '$2y$10$5HlzjRBZ34v8Nt3NrO9NZ.3GNv5HZwGwzU8i8LDtu5JlcE2g8h5XS', '', ''),
('E4172054', 'Taufikur Rahman', NULL, 2017, 1, NULL, '$2y$10$GfYeD8uLnYVakB6l5dCqR.wdZbR3mRcv8N0Z7KxP3VhBYkA7A0v0i', '', '');

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
  `id_prodi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `Role`, `id_prodi`) VALUES
(1, 'Administrator', 0),
(2, 'Dosen Pembimbing', 0),
(3, 'Admin Prodi MIF', 1),
(4, 'Admin Prodi TKK', 2),
(5, 'Admin Prodi TIF', 3),
(6, 'Koordinator TA MIF', 1),
(7, 'Koordinator TA TKK', 2),
(8, 'Koordinator TA TIF', 3),
(9, 'Ketua Program Studi MIF', 1),
(10, 'Ketua Program Studi TKK', 2),
(11, 'Ketua Program Studi TIF', 3),
(12, 'Mahasiswa', 0);

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
(10, 'Lulus');

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
(13, 105, 'asasdsdzxzxzx', '7a02c0e50919ddfd3426c0f0d9418f6e.png', NULL, '2020-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `td_seminar`
--

CREATE TABLE `td_seminar` (
  `id_seminar` int(6) NOT NULL,
  `Nilai_penelis` int(3) DEFAULT NULL,
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

INSERT INTO `td_seminar` (`id_seminar`, `Nilai_penelis`, `Nilai_pembimbing`, `Tanggal`, `jam`, `id_TA`, `NIP_Panelis`, `id_status`, `idruangan`, `lampiran_revisi`, `revisi`, `status_revisi`) VALUES
(9, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '', '', 'acc'),
(10, NULL, 0, NULL, NULL, 1, NULL, NULL, NULL, '', '', 'acc');

-- --------------------------------------------------------

--
-- Table structure for table `td_sidang`
--

CREATE TABLE `td_sidang` (
  `id_sidang` int(6) NOT NULL,
  `Nilai_panelis` int(3) DEFAULT NULL,
  `Nilai_anggota` int(3) NOT NULL,
  `Nilai_sidang` int(3) NOT NULL,
  `Nilai_bimbingan` int(3) NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `id_TA` int(6) NOT NULL,
  `NIP_Anggota` varchar(20) NOT NULL,
  `id_status` int(3) DEFAULT NULL,
  `idruangan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `td_sidang`
--

INSERT INTO `td_sidang` (`id_sidang`, `Nilai_panelis`, `Nilai_anggota`, `Nilai_sidang`, `Nilai_bimbingan`, `Tanggal`, `jam`, `id_TA`, `NIP_Anggota`, `id_status`, `idruangan`) VALUES
(2, 22, 0, 0, 0, '2020-03-29', '15:00:00', 1, '', 4, 1);

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
(5, 'Iot', 'Internet Of Thing', 'y'),
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
(1, 'CCTV otomatis menggunakan hp cetol', 'Polijesip', 'polije ashiap', 'robot', '197111151998021001', 'E41171892', 4, 5, NULL, '2020-10-28', ''),
(2, '\"PENGEMBANGAN SISTEM PENGUKUR KESESUAIAN USER', 'z', 'c', 'b.', '199112112018031001', 'E41161322', 1, 10, NULL, '2020-09-18', ''),
(3, 'Penentuan Menu Diet Seimbang Bagi Penderita D', 'Penentuan Menu Diet Seimbang Bagi Penderita Diabetes Mellitus Menggunakan Logika Fuzzy Metode Tsukamoto\r\n', 'Penentuan Menu Diet Seimbang Bagi Penderita Diabetes Mellitus Menggunakan Logika Fuzzy Metode Tsukamoto\r\n', 'c.', '197810112005012002', 'E41161779', 1, 7, NULL, '2020-09-18', ''),
(4, 'Sistem Pendukung Keputusan Pemilihan Menu Mak', 'Sistem Pendukung Keputusan Pemilihan Menu Makanan Pasien Hipertensi Menggunakan Fuzzy Mamdani\r\n', 'Sistem Pendukung Keputusan Pemilihan Menu Makanan Pasien Hipertensi Menggunakan Fuzzy Mamdani\r\n', 'b.', '197810112005012002', 'E41162018', 1, 7, NULL, '2020-09-18', ''),
(5, 'Sistem Pakar Seleksi Kesiapan Bertelur pada A', 'Sistem Pakar Seleksi Kesiapan Bertelur pada Ayam Ras Menggunakan Metode Certainty Factor\r\n', 'Sistem Pakar Seleksi Kesiapan Bertelur pada Ayam Ras Menggunakan Metode Certainty Factor\r\n', 'c.', '199002272018032001', 'E41161395', 1, 8, NULL, '2020-09-18', ''),
(6, 'Implementasi Fuzzy tsukamoto untuk optimalisa', 'Implementasi Fuzzy tsukamoto untuk optimalisasi produksi batako studi kasus UD.AA', 'Implementasi Fuzzy tsukamoto untuk optimalisasi produksi batako studi kasus UD.AA', 'b.', '198907102019031010', 'E41161189', 1, 3, NULL, '2020-09-18', ''),
(7, 'Sistem Informasi Diagnosis Ikterus Neonatorum', 'Sistem Informasi Diagnosis Ikterus Neonatorum Menggunakan Logika Fuzzy\r\n', 'Sistem Informasi Diagnosis Ikterus Neonatorum Menggunakan Logika Fuzzy\r\n', 'si.', '199002272018032001', 'E41161390', 1, 12, NULL, '2020-09-18', ''),
(8, 'SISTEM IDENTIFIKASI KERUSAKAN BIJI KOPI ARABI', 'SISTEM IDENTIFIKASI KERUSAKAN BIJI KOPI ARABIKA MENGGUNAKAN BACKPROPAGATION\r\n', 'SISTEM IDENTIFIKASI KERUSAKAN BIJI KOPI ARABIKA MENGGUNAKAN BACKPROPAGATION\r\n', 'spk.', '199203022018032001', 'E41161965', 1, 8, NULL, '2020-09-18', ''),
(9, '\"IMPLEMENTASI ALGORITMA DOUBLE EXPONENTIAL SM', '\"IMPLEMENTASI ALGORITMA DOUBLE EXPONENTIAL SMOOTHING DALAM FORECASTING PENGADAAN BUKU DI DINAS PERPUSTAKAAN DAN KEARSIPAN \r\nKABUPATEN BONDOWOSO\"\r\n', '\"IMPLEMENTASI ALGORITMA DOUBLE EXPONENTIAL SMOOTHING DALAM FORECASTING PENGADAAN BUKU DI DINAS PERPUSTAKAAN DAN KEARSIPAN \r\nKABUPATEN BONDOWOSO\"\r\n', 'pcd.', '198012122005011001', 'E41161281', 1, 4, NULL, '2020-09-18', ''),
(10, 'Aksara jawa untuk klasifikasi level motorik h', 'Aksara jawa untuk klasifikasi level motorik halus anak usia awal sekolah\r\n', 'Aksara jawa untuk klasifikasi level motorik halus anak usia awal sekolah\r\n', 'A.i', '197808192005012001', 'E41161716', 1, 3, NULL, '2020-09-18', ''),
(11, 'Penerapan Algoritma C4.5 pada Aplikasi Penent', 'Penerapan Algoritma C4.5 pada Aplikasi Penentuan Kemampuan Motorik Halus Anak Usia Awal Sekolah\r\n', 'Penerapan Algoritma C4.5 pada Aplikasi Penentuan Kemampuan Motorik Halus Anak Usia Awal Sekolah\r\n', 'A.i', '197808192005012001', 'E41161385', 1, 3, NULL, '2020-09-18', ''),
(12, 'Penerapan Metode Dempster Shafer dan Certaint', 'Penerapan Metode Dempster Shafer dan Certainty Factor pada Sistem Pakar Diagnosis Hama dan Penyakit Tanaman Pisang\r\n', 'Penerapan Metode Dempster Shafer dan Certainty Factor pada Sistem Pakar Diagnosis Hama dan Penyakit Tanaman Pisang\r\n', 'sp.', '198012122005011001', 'E41161211', 1, 8, NULL, '2020-09-18', ''),
(13, 'Rancang Bangun Sistem Koreksi Otomatis Dengan', 'Rancang Bangun Sistem Koreksi Otomatis Dengan Menggabungkan GLSA dan Thesaurus Pada Dokumen Esai\r\n', 'Rancang Bangun Sistem Koreksi Otomatis Dengan Menggabungkan GLSA dan Thesaurus Pada Dokumen Esai\r\n', 'sc.', '198907102019031010', 'E41161299', 1, 9, NULL, '2020-09-18', ''),
(14, 'Sistem Pendukung Keputusan Pemilihan Pupuk Pa', 'Sistem Pendukung Keputusan Pemilihan Pupuk Padi Berdasarkan Umur Padi Menggunakan Fuzzy SAW\r\n', 'Sistem Pendukung Keputusan Pemilihan Pupuk Padi Berdasarkan Umur Padi Menggunakan Fuzzy SAW\r\n', 'spk.', '199002272018032001', 'E41161056', 1, 7, NULL, '2020-09-18', ''),
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
(25, 'Penentuan Komposisi Bahan Makanan Bagi Pender', 'Penentuan Komposisi Bahan Makanan Bagi Penderita Obesitas Dengan Metode Algoritma Genetika\r\n', 'Penentuan Komposisi Bahan Makanan Bagi Penderita Obesitas Dengan Metode Algoritma Genetika\r\n', 'sp.', '199002272018032001', 'E41160227', 1, 8, NULL, '2020-09-18', ''),
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
(105, '\"PENGEMBANGAN SISTEM USABILITY TESTING MENGGU', 'a', 'a', 'a,', '199112112018031001', 'E41161324', 1, 9, NULL, '2020-09-18', '');

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
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `td_bimbingan`
--
ALTER TABLE `td_bimbingan`
  MODIFY `id_bimbingan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `td_seminar`
--
ALTER TABLE `td_seminar`
  MODIFY `id_seminar` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `td_sidang`
--
ALTER TABLE `td_sidang`
  MODIFY `id_sidang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `idTopik` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

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
