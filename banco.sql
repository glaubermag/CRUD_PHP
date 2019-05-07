-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2018 às 21:07
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelaimg`
--

CREATE TABLE `tabelaimg` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `produto` varchar(80) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tabelaimg`
--

INSERT INTO `tabelaimg` (`id`, `codigo`, `produto`, `descricao`, `data`, `valor`, `imagem`) VALUES
(9, 100123, 'SSD Kingston 2.5Â´ 240GB A400 SATA III', '- 10x mais rÃ¡pido do que um disco rÃ­gido: Com incrÃ­veis velocidades de leitura/gravaÃ§Ã£o, o SSD A400 nÃ£o somente irÃ¡ aumentar o desempenho, como tambÃ©m poderÃ¡ ser usado para dar vida nova em computadores mais antigos. \r\n\r\n- Robusto: O A400 Ã©', '2018-10-31', '276.35', 'ssdkingston.jpg'),
(10, 100256, 'Placa de VÃ­deo VGA EVGA NVIDIA GeForce GTX 1050 TI Gaming 4GB GDDR5 ', 'Geral:\r\n- ResoluÃ§Ã£o MÃ¡xima: 7680 x 4320\r\n- Refrigerador: com Ventilador\r\n- Sistemas operacionais suportados: Windows 10 32 / 64bit, Windows 8 32 / 64bit, Windows 7 32 / 64bit\r\n- Requisitos do Sistema: Fonte de AlimentaÃ§Ã£o 300W ou mais\r\n- CompatÃ', '2018-10-31', '1117.53', 'geforcegtx1050ti.jpg'),
(11, 100453, 'Mouse Gamer Logitech G402 Hyperion Fury FPS Ultra-rÃ¡pido 4000DPI', '- Sensor hÃ­brido com tecnologia de fusÃ£o\r\n- Oito botÃµes programÃ¡veis\r\n- AlternÃ¢ncia de DPI imediata\r\n- Processador ARM de 32-bits\r\n- TransmissÃ£o em 1 milissegundo\r\n- Cliques de alta velocidade\r\n- USB de velocidade total', '2018-10-31', '235.18', 'logitechg402.jpg'),
(12, 100853, 'Watercooler EVGA CL11 120mm Intel Cooling 400-HY-CL11-V1', 'Waterblock\r\nIntel LGA2066/2011/2011-v3/1150/1151/1155/1156/1366 e variantes futuras\r\nAMD AM2 / AM3 / AM4 / FM1 / FM2 / TR4 e futuras variantes\r\n\r\nRadiador\r\n156mm X 122mm X 28mm (LxWxH)\r\nAlumÃ­nio\r\n\r\nVentoinha\r\nTamanho: 120mm x 120mm x 25mm\r\nTeflon Na', '2018-10-31', '239.90', 'watercoolerevgacl11.jpg'),
(13, 100957, 'Roteador D-LINK AC 1200Mbps - DIR-815', 'CaracterÃ­sticas:\r\n\r\n- Marca: D-link\r\n\r\n- Modelo: DIR-815\r\n\r\n \r\n\r\nEspecificaÃ§Ãµes:\r\n\r\n- AlcanceatÃ©: 200mÂ²\r\n\r\n- AlimentaÃ§Ã£o ElÃ©trica: Entrada: 100-240V / SaÃ­da: 12V / 1A\r\n\r\n- Antena (Ganho): 5dBi\r\n\r\n- Antena (Quantidade): 4\r\n\r\n- Antena (Tipo): ', '2018-10-31', '222.24', 'dir815.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelaimg`
--
ALTER TABLE `tabelaimg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelaimg`
--
ALTER TABLE `tabelaimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
