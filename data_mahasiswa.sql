SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `data_mahasiswa`;
CREATE TABLE IF NOT EXISTS `data_mahasiswa` (
  `NIM` bigint(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Prodi` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `data_mahasiswa` (`NIM`, `Nama`, `Prodi`) VALUES
(120140003, 'Ari', 'IF'),
(120140111, 'Sandi', 'IF'),
(120140341, 'Budi', 'IF'),
(120140201, 'Adit', 'IF'),
(120140101, 'Suleman', 'IF'),
(120140073, 'Yusuf', 'IF'),
(120130008, 'Danil', 'EL'),
(120210044, 'Dono', 'SI'),
(120210035, 'Imam', 'SI'),
(120130020, 'Rika', 'EL'),
(120140071, 'Izha', 'IF'),
(120140116, 'Bagas', 'IF');
COMMIT;