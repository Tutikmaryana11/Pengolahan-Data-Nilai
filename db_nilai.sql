-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2019 at 08:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayah_kandung`
--

CREATE TABLE `ayah_kandung` (
  `ayah_id` char(12) NOT NULL,
  `ayah_nama` varchar(25) DEFAULT NULL,
  `ayah_tahun_lahir` char(4) DEFAULT NULL,
  `ayah_jenjang_pendidikan` enum('SMA','SMK','D1','D2','D3','D4','S1','S2') DEFAULT NULL,
  `ayah_pekerjaan` varchar(20) DEFAULT NULL,
  `ayah_penghasilan` int(10) DEFAULT NULL,
  `ayah_nik` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ayah_kandung`
--

INSERT INTO `ayah_kandung` (`ayah_id`, `ayah_nama`, `ayah_tahun_lahir`, `ayah_jenjang_pendidikan`, `ayah_pekerjaan`, `ayah_penghasilan`, `ayah_nik`) VALUES
('AYAHK018-001', 'LAWENDI\n', '1981', 'SMK', 'Wiraswasta', 3000000, 666621653),
('AYAHK018-002', 'SYAIFUDIN\n', '1987', 'SMA', 'Buruh', 2000000, 8765212),
('AYAHK018-003', 'HO LIP KHIONG', '1978', 'D3', 'Karyawan', 2500000, 2147483647),
('AYAHK018-004', 'STEFANUS DWI HARIYANTO', '1980', 'SMA', 'Buruh', 1500000, 2147483647),
('AYAHK018-005', 'Koko', '1966', 'S1', 'Karyawan', 80000000, 2147483647),
('AYAHK018-006', 'Teddy', '1976', 'D3', 'Wiraswasta', 2500000, 2147483647),
('AYAHK018-007', 'ANTONIUS YEWIN', '1974', 'SMA', 'Petani', 20000000, 2147483647),
('AYAHK018-008', 'TIMOTIUS JAMADI', '1977', 'SMK', 'Teknisi', 2000000, 2147483647),
('AYAHK018-009', 'A.BONG BOY', '1977', 'SMA', 'Wiraswasta', 6000000, 2147483647),
('AYAHK018-010', 'INDRA ASWARI', '1988', 'D4', 'Guru', 3000000, 2147483647),
('AYAHK018-011', 'Yusli', '1973', 'D3', 'Wiraswasta', 5000000, 2147483647),
('AYAHK018-012', 'Yandi', '1966', 'D2', 'Wiraswasta', 4000000, 2147483647),
('AYAHK018-013', 'Benjamin Ahoi', '1956', 'D1', 'Wiraswasta', 8000000, 2147483647),
('AYAHK018-014', 'Syahrial', '1956', 'D2', 'Wiraswasta', 3000000, 878554142),
('AYAHK018-015', 'Agus Safari', '1980', 'S2', 'Dosen', 10000000, 2147483647),
('AYAHK018-016', 'Simon', '1985', 'S2', 'Dosen', 98000000, 2147483647),
('AYAHK018-017', 'Benny', '1977', 'D4', 'Karyawan', 6000000, 754417782),
('AYAHK018-018', 'Mimi Suanda', '1967', 'D3', 'Karyawan', 5600000, 2147483647),
('AYAHK018-019', 'Hardianto', '1965', 'D1', 'Karyawan', 3400000, 2147483647),
('AYAHK018-020', 'HERMAN TOPANG', '1974', 'D2', 'Karyawan', 300000, 1231231434),
('AYAHK018-021', 'HASBULLAH', '1956', 'SMA', 'Buruh', 200000, 126167921),
('AYAHK018-022', 'ANDREY NOVRILY CLANY', '1982', 'S2', 'Dosen', 89000000, 2147483647),
('AYAHK018-023', 'Dominikus Deni Pramuja', '1977', 'D4', 'Wiraswasta', 2000000, 2147483647),
('AYAHK018-024', 'Sarbani', '1966', 'SMK', 'Buruh', 1500000, 2147483647),
('AYAHK018-025', 'ENCAS WADY', '1966', 'D1', 'Karyawan', 2300000, 2132132131),
('AYAHK018-026', 'SUKRI', '1966', 'SMK', 'Teknisi', 2000000, 2147483647),
('AYAHK018-027', 'DANID UNTORO', '1966', 'D3', 'Wiraswasta', 3000000, 2147483647),
('AYAHK018-028', 'MARSIANUS APONG', '1982', 'D4', 'Guru', 2000000, 2147483647),
('AYAHK018-029', 'ANTONIUS', '1982', 'S1', 'Guru', 3000000, 765435678),
('AYAHK018-030', 'HENDRIK', '1981', 'D4', 'Guru', 3000000, 762516789),
('AYAHK018-031', 'BANDUT SUPRIADI', '1977', 'D1', 'Wiraswasta', 2000000, 1246789021),
('AYAHK018-032', 'TAUHID', '1977', 'SMK', 'Teknisi', 1000000, 2131123131),
('AYAHK018-033', 'BASTIAN.B.TOGO', '1978', 'SMA', 'Wiraswasta', 3000000, 2147483647),
('AYAHK018-034', 'FRANSISKUS JUPRIANTO', '1977', 'SMK', 'Karyawan', 300000, 2147483647),
('AYAHK018-035', 'ANTONIUS WASNI', '196', 'D2', 'Wiraswasta', 450000, 2123213213),
('AYAHK018-036', 'YUSAK RABIN', '1966', 'D4', 'Guru', 3000000, 213231312),
('AYAHK018-037', 'THOMAS', '1976', 'SMA', 'Wiraswasta', 7000000, 876545678),
('AYAHK018-038', 'LIM BUI PIN', '1982', 'D3', 'Wiraswasta', 6000000, 87621589),
('AYAHK018-039', 'ASPAR', '1980', 'D3', 'Guru', 500000, 456781212),
('AYAHK018-040', 'PAULUS', '1977', 'D2', 'Wiraswasta', 70000000, 2147483647),
('AYAHK018-041', 'JOVINUS BEVO', '1966', 'D1', 'Karyawan', 4500000, 2147483647),
('AYAHK018-042', 'LEOVOLD DIDIN', '1966', 'D1', 'Teknisi', 4000000, 2147483647),
('AYAHK018-043', 'KARNO', '1977', 'D2', 'Karyawan', 2300000, 2147483647),
('AYAHK018-044', 'DANID UNTORO', '1956', 'SMK', 'Buruh', 2100000, 2147483647),
('AYAHK018-045', 'RAJIMAN', '1966', 'D2', 'Guru', 4000000, 2147483647),
('AYAHK018-046', 'ANTONIUS YENDI', '1976', 'SMA', 'Wiraswasta', 2100000, 2147483647),
('AYAHK018-047', 'ANTO', '1981', 'SMK', 'Teknisi', 2000000, 2147483647),
('AYAHK018-048', 'LIEDJANLIN', '1966', 'D2', 'Teknisi', 4390000, 2147483647),
('AYAHK018-049', 'SAFARUDIN', '1956', 'D1', 'Wiraswasta', 40000000, 2147483647),
('AYAHK018-050', 'SUNARDI', '1976', 'SMK', 'Wiraswasta', 2000000, 2147483647),
('AYAHK018-051', 'PAULINUS', '1966', 'D3', 'Karyawan', 49000000, 765216789),
('AYAHK018-052', 'HENDRA', '1981', 'D3', 'Teknisi', 2000000, 2147483647),
('AYAHK018-053', 'YUGENSEP', '1967', 'D2', 'Wiraswasta', 2000000, 76567181),
('AYAHK018-054', 'AGUS SUJARWO', '1967', 'D3', 'Guru', 3000000, 212121231),
('AYAHK018-055', 'BAGAS SUHARNO', '1955', 'SMA', 'Wiraswasta', 120000, 2147483647),
('AYAHK018-056', 'BAGUS SAMALANTAN', '1967', 'SMK', 'Teknisi', 2000000, 765456781),
('AYAHK018-057', 'DALAWI', '1950', 'SMA', 'Buruh', 200000, 216578901),
('AYAHK018-058', 'PAULINUS SITAREP', '1977', 'D3', 'Karyawan', 3000000, 2147483647),
('AYAHK018-059', 'LIBERTUS ATNO', '1967', 'D1', 'Wiraswasta', 200000, 2678921),
('AYAHK018-060', 'SAFARUDIN HADI', '1970', 'SMA', 'Buruh', 150000, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` char(12) NOT NULL,
  `nama_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `id_operator` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` char(12) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_mapel` char(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status_kepegawaian` enum('pns','honor') DEFAULT NULL,
  `pendidikan_terakhir` enum('SMA','SMK','D1','D2','D3','D4','S1','S2') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `alamat`, `jenis_kelamin`, `agama`, `email`, `id_mapel`, `password`, `nik`, `tempat_lahir`, `tanggal_lahir`, `status_kepegawaian`, `pendidikan_terakhir`) VALUES
('GURU2018-001', 'Angelia Meilani Wiwin', 'Rangkang', 'P', 'kristen', 'guru@cs.com', 'MAPEL018-001', '', '6107044312890001', 'RANGKANG\n', '1989-12-03', 'honor', 'D3'),
('GURU2018-002', 'ANTONIA MEDALINA\n', 'SAMUHUN\n', 'P', 'Katholik', 'guru2@cs.com', 'MAPEL018-001', '', '6107096404730001', 'Aruk', '1973-04-24', 'pns', 'S1'),
('GURU2018-003', 'CHRISTINA ERRIANTI USMAN', 'Jln.Sadar No. 19', 'P', 'islam', 'guru3@cs.com', 'MAPEL018-002', '', '6107048901530001', 'Bengkayang', '1982-12-11', '', ''),
('GURU2018-004', 'EPI PANIATI', 'Rangkang Jalan Langgawi', 'P', 'kristen', 'guru4@cs.com', 'MAPEL018-003', '', '6107085501850001', 'Dawar', '1985-01-15', '', ''),
('GURU2018-005', 'ERNI MARDIAWATI', 'JL.MARZUKI.T', 'P', 'islam', 'guru5@cs.com', 'MAPEL018-004', '', '6107045402830001', 'Bengkayang', '1983-02-14', '', ''),
('GURU2018-007', 'Hayati', 'Jalan Sanggau Ledo', 'P', 'katolik', 'guru7@cs.com', 'MAPEL018-001', '', '6107046903640001', 'Banan', '1964-03-29', '', ''),
('GURU2018-008', 'HETI DARMAWATY, S.Pd', 'BANGUN SARI', 'P', 'islam', 'guru8@cs.com', 'MAPEL018-002', '', '6107045501660001', 'Badau', '1966-01-15', '', ''),
('GURU2018-009', 'IDAWATI, S.Pd', 'Jalan satria', 'P', 'islam', 'guru9@cs.com', 'MAPEL018-003', '', '6107046504600001', 'Gelelungi', '1964-04-25', '', ''),
('GURU2018-010', 'ISMIYATI', 'JALAN SEKIP LAMA NO 19 BENGKAYANG', 'P', 'islam', 'guru10@cs.com', 'MAPEL018-004', '', '6107046108600002', 'Pontianak', '1960-08-21', '', ''),
('GURU2018-011', 'JAJIAH, S.Pd.SD', 'Jalan RSU No.97', 'P', 'islam', 'guru11@cs.com', 'MAPEL018-001', '', '6107046208620001', 'Sambas', '1962-08-22', '', ''),
('GURU2018-012', 'KRISTIANTO', 'JALAN SATRIA', 'L', 'kristen', 'guru12@cs.com', 'MAPEL018-002', '', '6107090601890001', 'Serukam', '1989-06-01', '', ''),
('GURU2018-013', 'mnbmnb', 'mnbmnbm', 'L', 'islam', 'bbb@gamil.com', 'MAPEL018-001', 'kh', 'kk', 'ghjgj', '2018-12-31', 'pns', 'SMA'),
('GURU2019-014', 'indah', 'jogj', 'P', 'kristen', 'indah@gmail.com', 'MAPEL018-001', '1', '111', 'jogja', '2019-12-31', 'honor', 'D3');

-- --------------------------------------------------------

--
-- Table structure for table `ibu_kandung`
--

CREATE TABLE `ibu_kandung` (
  `ibu_id` char(12) NOT NULL,
  `ibu_nama` varchar(20) DEFAULT NULL,
  `ibu_tahun_lahir` char(4) DEFAULT NULL,
  `ibu_jenjang_pendidikan` enum('SMA','SMK','D1','D2','D3','D4','S1','S2') DEFAULT NULL,
  `ibu_pekerjaan` varchar(20) DEFAULT NULL,
  `ibu_penghasilan` int(10) DEFAULT NULL,
  `ibu_nik` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibu_kandung`
--

INSERT INTO `ibu_kandung` (`ibu_id`, `ibu_nama`, `ibu_tahun_lahir`, `ibu_jenjang_pendidikan`, `ibu_pekerjaan`, `ibu_penghasilan`, `ibu_nik`) VALUES
('IBUKA018-001', 'Sumarni', '1983', 'SMA', 'Ibu rumah tangga', NULL, NULL),
('IBUKA018-002', 'Sumarti', '1977', 'D3', 'Guru', 2000000, 123821),
('IBUKA018-003', 'Maryati', '1970', 'SMA', 'Ibu rumah tangga', 0, 987627912),
('IBUKA018-004', 'Halimah', '1970', 'D3', 'Karyawan', 200000, 2147483647),
('IBUKA018-005', 'Santi', '1982', 'SMA', 'Karyawan', 200000, 212192819),
('IBUKA018-006', 'Asih', '1977', 'D3', 'Guru', 250000, 2147483647),
('IBUKA018-007', 'Karmi', '1975', 'SMA', 'Ibu rumah tangga', 0, 2147483647),
('IBUKA018-008', 'Marta', '1966', 'D2', 'Ibu rumah tangga', 0, 76567891),
('IBUKA018-009', 'Salamah', '1985', 'S2', 'Dosen', 4900000, 2147483647),
('IBUKA018-010', 'Betty', '1985', 'S2', 'Dosen', 5000000, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` char(12) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
('KELRO019-001', '7 A'),
('KELRO019-002', '7 B'),
('KELRO019-003', '8 A');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` char(12) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `kkm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `kkm`) VALUES
('MAPEL018-001', 'Matematika', 75),
('MAPEL018-002', 'Bahasa Indonesia', 85),
('MAPEL018-003', 'PPKN', 78),
('MAPEL018-004', 'IPA', 75);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` char(12) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `id_mengajar` char(12) NOT NULL,
  `files` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `id_mengajar`, `files`, `keterangan`) VALUES
('MT-0001', 'UAS', 'TCH018-001', 'aa', 'aa'),
('MT-0002', 'UTS', 'TCH018-001', 'aa', 'aa'),
('MT-0003', 'TUGAS', 'TCH018-001', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id_mengajar` char(12) NOT NULL,
  `id_mapel` char(12) NOT NULL,
  `id_guru` char(12) NOT NULL,
  `id_kelas` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `id_mapel`, `id_guru`, `id_kelas`) VALUES
('TCH018-001', 'MAPEL018-001', 'GURU2018-001', 'KELRO019-001'),
('TCH018-002', 'MAPEL018-002', 'GURU2018-002', 'KELRO019-001'),
('TCH018-003', 'MAPEL018-002', 'GURU2018-003', 'KELRO019-001'),
('TCH018-004', 'MAPEL018-003', 'GURU2018-004', 'KELRO019-001'),
('TCH018-005', 'MAPEL018-004', 'GURU2018-005', 'KELRO019-001'),
('TCH018-007', 'MAPEL018-001', 'GURU2018-007', 'KELRO019-001'),
('TCH018-008', 'MAPEL018-002', 'GURU2018-008', 'KELRO019-001'),
('TCH018-009', 'MAPEL018-003', 'GURU2018-009', 'KELRO019-001'),
('TCH018-010', 'MAPEL018-004', 'GURU2018-010', 'KELRO019-001'),
('TCH018-011', 'MAPEL018-001', 'GURU2018-011', 'KELRO019-001'),
('TCH018-012', 'MAPEL018-002', 'GURU2018-012', 'KELRO019-001'),
('TCH018-013', 'MAPEL018-001', 'GURU2018-013', 'KELRO019-001'),
('TCH019-014', 'MAPEL018-001', 'GURU2019-014', 'KELRO019-001');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` char(12) NOT NULL,
  `id_tahunkelas` int(12) NOT NULL,
  `id_mapel` char(12) NOT NULL,
  `nilai_angka` int(5) NOT NULL,
  `id_materi` char(12) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_tahunkelas`, `id_mapel`, `nilai_angka`, `id_materi`, `keterangan`) VALUES
('NILAI019-001', 1, 'MAPEL018-001', 90, 'MT-0001', 'bagus'),
('NILAI019-002', 1, 'MAPEL018-001', 90, 'MT-0002', 'bagus'),
('NILAI019-003', 1, 'MAPEL018-001', 100, 'MT-0003', 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` char(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_sk_operator` varchar(30) DEFAULT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama`, `email`, `password`, `no_sk_operator`, `level`) VALUES
('OPERA018-001', 'Operator', 'operator@cs.com', '1', NULL, '1'),
('OPERA018-002', 'guru', 'guru2@cs.com', '1', '', '2'),
('OPERA018-003', 'Guru Satu', 'guru@cs.com', '1', '', '2'),
('OPERA018-004', 'slamet nurcahyo', 'nurcahyo@gmail.com', '1', '', '2'),
('OPERA018-005', 'CHRISTINA ERRIANTI USMAN', 'guru3@cs.com', '`', '', '2'),
('OPERA018-006', 'EPI PANIATI', 'guru4@cs.com', '1', '', '2'),
('OPERA018-007', 'ERNI MARDIAWATI', 'guru5@cs.com', '1', '', '2'),
('OPERA018-008', 'FABIANUS MANER, S.Pd', 'guru6@cs.com', '1', '', '2'),
('OPERA018-009', 'Hayati', 'guru7@cs.com', '1', '', '2'),
('OPERA018-010', 'HETI DARMAWATY, S.Pd', 'guru8@cs.com', '1', '', '2'),
('OPERA018-011', 'IDAWATI, S.Pd', 'guru9@cs.com', '1', '', '2'),
('OPERA018-012', 'ISMIYATI', 'guru10@cs.com', '1', '', '2'),
('OPERA018-013', 'JAJIAH, S.Pd.SD', 'guru11@cs.com', '1', '', '2'),
('OPERA018-014', 'KRISTIANTO', 'guru12@cs.com', '1', '', '2'),
('OPERA018-015', 'hgjhghjg', 'a@gmail.com', 'aaaa', '', '2'),
('OPERA018-016', 'kgkgkg', 'aaa@gmail.com', 'aaa', '', '2'),
('OPERA018-017', 'hgjhgh', 'aaaa@gmail.com', 'aa', '', '2'),
('OPERA018-018', 'kjhjk', 'kjh@gmail.com', 'aa', '', '2'),
('OPERA018-019', 'jjkhjk', 'kjhcc@gmail.com', 'jhjk', '', '2'),
('OPERA018-020', 'mnbmnb', 'bbb@gamil.com', 'kh', '', '2'),
('OPERA019-021', 'indah', 'indah@gmail.com', '1', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(12) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(100) NOT NULL,
  `id_kelas` char(12) NOT NULL,
  `ayah_id` char(12) DEFAULT NULL,
  `ibu_id` char(12) DEFAULT NULL,
  `wali_id` char(12) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `jenis_kelamin`, `agama`, `id_kelas`, `ayah_id`, `ibu_id`, `wali_id`, `email`) VALUES
(212019001, 'Dira', 'Jogja', 'L', 'islam', 'KELRO019-001', 'AYAHK018-001', 'IBUKA018-001', 'WALIS018-001', 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_kelas`
--

CREATE TABLE `tahun_kelas` (
  `id` int(11) NOT NULL,
  `id_kelas` char(12) NOT NULL,
  `id_siswa` int(12) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `flag_aktif` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_kelas`
--

INSERT INTO `tahun_kelas` (`id`, `id_kelas`, `id_siswa`, `tahun`, `flag_aktif`) VALUES
(1, 'KELRO019-001', 212019001, '2019', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `wali_siswa`
--

CREATE TABLE `wali_siswa` (
  `wali_id` char(12) NOT NULL,
  `wali_nama` varchar(20) DEFAULT NULL,
  `wali_tahun_lahir` char(4) DEFAULT NULL,
  `wali_jenjang_pendidikan` enum('SMA','SMK','D1','D2','D3','D4','S1','S2') DEFAULT NULL,
  `wali_pekerjaan` varchar(20) DEFAULT NULL,
  `wali_penghasilan` int(10) DEFAULT NULL,
  `wali_nik` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_siswa`
--

INSERT INTO `wali_siswa` (`wali_id`, `wali_nama`, `wali_tahun_lahir`, `wali_jenjang_pendidikan`, `wali_pekerjaan`, `wali_penghasilan`, `wali_nik`) VALUES
('WALIS018-001', 'Lawendi', '1982', 'SMK', 'Wiraswasta', 3000000, 66672351),
('WALIS018-002', 'Syaifudin', '1980', 'SMA', 'Petani', 2000000, 77676544),
('WALIS019-003', 'nanana', 'jogj', 'SMA', 'buruh', 20000, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayah_kandung`
--
ALTER TABLE `ayah_kandung`
  ADD PRIMARY KEY (`ayah_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_guru` (`id_operator`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `ibu_kandung`
--
ALTER TABLE `ibu_kandung`
  ADD PRIMARY KEY (`ibu_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_mengajar` (`id_mengajar`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `id_mapel` (`id_mapel`,`id_guru`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_tahunkelas`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `ayah_id` (`ayah_id`),
  ADD KEY `ibu_id` (`ibu_id`),
  ADD KEY `wali_id` (`wali_id`);

--
-- Indexes for table `tahun_kelas`
--
ALTER TABLE `tahun_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wali_siswa`
--
ALTER TABLE `wali_siswa`
  ADD PRIMARY KEY (`wali_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tahun_kelas`
--
ALTER TABLE `tahun_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_mengajar`) REFERENCES `mengajar` (`id_mengajar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `mengajar_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengajar_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`ibu_id`) REFERENCES `ibu_kandung` (`ibu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`ayah_id`) REFERENCES `ayah_kandung` (`ayah_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`wali_id`) REFERENCES `wali_siswa` (`wali_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
