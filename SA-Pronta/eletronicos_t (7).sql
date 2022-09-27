-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2022 às 04:43
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `eletronicos_t`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `avaliacao` varchar(1) NOT NULL,
  `comentario` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `feedback`
--

INSERT INTO `feedback` (`id_usuario`, `id_produto`, `nome`, `avaliacao`, `comentario`) VALUES
(5, 36, 'ar condiconado', 'A', 'aaaadf'),
(8, 20, 'Cafeteira', 'B', 'Mais para menos.'),
(21, 17, 'MP3 Sony', 'C', 'Audio Ruim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `preco` float NOT NULL,
  `marca` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `imagem` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome`, `preco`, `marca`, `quantidade`, `imagem`) VALUES
(1, ' Fone de Ouvido Bluetooth JBL Tune 510BT Pure Bass Preto', 194.57, 'JBLT510BTBLK', 22, 'img1.jpg'),
(3, 'Power Bank 20000mAh portátil carregamento Poverbank 20002mAh Mobile Ph', 69.95, 'LUMINOUCUP', 24, 'img2.jpg'),
(4, 'Relógio Esportivo Unissex Led Digital Prova Dágua Lançamento', 19.99, 'Esport', 26, 'img3.jpg'),
(5, 'Fone de Ouvido In-Ear Realme Buds Air 3 BT5.2 Cancel. Ruído', 449.44, 'Realme Buds', 23, 'img4.jpg'),
(6, 'Scooter Elétrico Hoverboard 6.5 / Bluetooth Preto', 899, 'Sony', 89, 'img5.jpg'),
(7, 'Leitor MP3 / MP4 com 64 GB, Rádio FM e Gravador Honorall', 91.89, 'Sony', 45, 'img6.jpg'),
(9, 'JBL Flip Essential Caixa de som portátil com Bluetooth®', 519, 'JBL', 3, 'img8.jpg'),
(10, 'Mouse Gamer CRUSADER RGB 7200DPI Preto Fortrek G', 39.99, 'Crusader', 52, 'img9.jpg'),
(11, 'ACER Notebook Gamer Nitro 5 AN515-55-59T4, Intel Core I5 10ª geração, ', 1223.23, 'Acer', 7, 'img10.jpg'),
(12, 'Computador Intel Core i5 Com Hdmi 8GB HD 1TB Windows 10 Desktop', 999, 'Dell', 8, 'imgpc.jpg'),
(13, 'Kit Completo Anel Luz 35cm Com Tripé Dimmer Youtuber Selfie Pro + supo', 149, 'Sony', 11, 'img25.jpg'),
(14, 'Máquina de Lavar Brastemp 12Kg titânio com Ciclo Tira Manchas Advanced', 1699.15, 'Brastemp', 12, 'img13.jpg'),
(15, 'Repetidor De Sinal Wifi Expansor Wireless 300m Internet', 69.9, 'Wireless', 23, 'img15.jpg'),
(16, 'Caixa Amplificada Gradiente Extreme Colors Bass Bomm GCA201 Bluetooth', 755.1, 'Sony', 54, 'img17.jpg'),
(17, 'Mp3 Sony Walkman Nwz-b183f Com Rádio Fm', 453.6, 'Sony', 78, 'img18.jpg'),
(18, 'Combo Teclado e Mouse Gamer Com Fio Detalhes Azuis Multilaser', 69.99, 'Multilaser', 12, 'img19.jpg'),
(19, 'Mini Ventilador Portatil Mao e Mesa Usb Bateria Recarregavel 3 Velocid', 17.99, 'Philips', 34, 'img21.jpg'),
(20, 'Cafeteira Espresso TRES 3 Corações Passione Preto', 445.55, 'Philips', 87, 'img22.jpg'),
(21, 'Aspirador de Pó e Água Wap gtw 10', 299.9, 'Philips', 12, 'img24.jpg'),
(22, 'Luminária Articulada De Mesa Abajur Tipo Pixar Com Base E Garra (Preto', 99.9, 'Reshels', 21, 'imgab.jpg'),
(23, 'Ferro de Passar Sem Fio Vapor Oster Ceramic', 299.9, 'Philips', 56, 'img26.jpg'),
(24, 'Pente Quente Ferro Elétrico Alisador Modelador Cachos Pro', 72.25, 'Philips', 34, 'img27.jpg'),
(25, 'Lampada LED bulbo Philips, luz branca fria', 8.51, 'Philips', 43, 'img12.jpg'),
(26, 'Sanduicheira Minigrill Gourmet 127V com 750W Chapa Dupla e com Revesti', 75.9, 'Multilaser', 33, 'img29.jpg'),
(36, 'Ar condicionado Elgin Eco Plus II split frio 9000 BTU branco 220V', 1.329, 'Fujitsu', 23, 'img20.jpg'),
(38, 'Geladeira / Refrigerador Brastemp', 3.988, 'Frost Free', 28, 'img23.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(99) NOT NULL,
  `email` varchar(70) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `senha` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `cpf`, `telefone`, `sexo`, `senha`) VALUES
(1, 'Admin', 'admin@gmail.com', '233434543', '23233444', 'M', '$2y$10$F8WYXg.eqONiEsJa2h9hNODEAKT8nDGBf6NyiXpyijFK6nXgKJ2/C'),
(2, 'Francisco', 'francisc@gmail.com.br', '280.447.576-00', '(37) 99738-0462', 'M', '$2y$10$Bpm4gae1K4ylJ/7W9EKqW.X/AjPqxUhtpeWCvyVf61dk5upLNQR7u'),
(3, 'Sônia', 'soniasales@hospit.org.br', '573.981.466-98', '(31) 98899-3014', 'F', '$2y$10$BOxUOXzz7A89xk0C3VlHUuarVhfoNQQog3IzETxBaIy/CF9A5AzGu'),
(4, 'teste', 'teste@test.com', '12345678900', '3145678999', 'F', '$2y$10$6zn/y/Qi.U6YPPfIqoJ5weByqaxpdPULTHHTEw8Gms2kqaZTaqcKW'),
(5, 'Maria Soares', 'maria.s@gmail.com', '213.435.440-12', '(31) 93476-8809', 'F', '$2y$10$L8RmxDgdWCfaz3N9jiejIOO8f6VchvkTGpExZTRotJXWmFrvSdDM2'),
(6, 'Rita Magalhães', 'rimaga@gmail.com', '559.234.577-13', '(31) 95678-2235', 'F', '$2y$10$a68bnAmowU8i7VGCcrQEC.lsWp8mMXvIfy3Npn30wmPrL4cr/vpfa'),
(7, 'Laila Júlia', 'ljulia@gmail.com', '456.112.100-12', '(31) 99998-3211', 'F', '$2y$10$WmE4viNwuSaHcOZc8IHzBuO.f2hR6ivu3upqrE9kRnMd.SOE26vRO'),
(8, 'Yuri Mota', 'mota.yuri@gmail.com', '002.887.454-11', '(31) 98294-4060', 'M', '$2y$10$Ex3nrKvujZH6aKzDjDUgh.SSuXHATCf79zNq30N7rhL5GVCdZNxJK'),
(9, 'Paulo César', 'pauloce@gmail.com', '288.686.032-40', '(31) 99283-3969', 'M', '$2y$10$N8WbSvWGciLIATK2rXdPS.tksxz6My0nge5EAaajcz0BKggWqVfnC'),
(10, 'Paulo Victor', 'p.victor@gmail.com', '332.547.007-22', '(31) 93390-2388', 'M', '$2y$10$SZgO.BmOzGzk5uONmLKzY.kLBAj8HXNyN5.REO50QBwJSQ.CVo7.K'),
(11, 'Thaís Alves', 'tata@gmail.com', '662.574.478-22', '(31) 95365-2665', 'F', '$2y$10$DL01IpwXgnY/Vg40IYtVqu12BVChQmTRaibPVI2mxlAy2gEl7u4wW'),
(12, 'Ítalo Vieira', 'vieira.italo@gmail.com', '456.256.122-36', '(31) 95425-6575', 'M', '$2y$10$u0DDJ3oKhwdlR/7bXibOG..vmtTXsbRdngiAoAUpLAPq0x.59pjQm'),
(13, 'Fernanda Soares', 's.fefe@gmail.com', '753.436.653-36', '(31) 96336-7756', 'F', '$2y$10$pV5UfCECLF1vcOriUPPJQOHMvztsMSFVDrYBShLxtQQX7/pe13AJm'),
(14, 'Miguel Ávila', 'miguel.avila@gmail.com', '768.234.765-39', '(31) 95466-5676', 'M', '$2y$10$uC52zNOtTE8E7n139CEiweYvalXJJ52DpTGzNzrn2yy6aMZtA3huW'),
(15, 'Maria Clara Ávila', 'aviclara@gmail.com', '123.654.857-37', '(31) 96400-5646', 'F', '$2y$10$lueXzDHdcQiZEp5JhFI0Se5Lm/E6tK1wAuBqjkmZf4e6wsfEIS5bi'),
(16, 'Arthur Mota', 'aatom@gmail.com', '565.776.345-36', '(31) 95444-7456', 'M', '$2y$10$P5..CIemhELhTP4MWVe/k.x6pRXTJ6c23JeamiLyVxvihx7DGrAjy'),
(17, 'Joaquim Gonçalves', 'joaquimgoncalves@gmail.com', '433.677.132-10', '(31) 94654-7565', 'M', '$2y$10$zHNtPAQlpjfklB4sPoGM8uFqlya1xdoZ.WRi7L.uvVQdvRgHjW9g.'),
(18, 'Sabrina Brunna', 'sabrunna@gmail.com', '654.765.666-27', '(31) 996173-5885', 'F', '$2y$10$OnjzlP6MOdTZEQjPhz12mewsl3YndWBPbM8P8xhqolJqzEhu59/QS'),
(19, 'Júlia Maria', 'jujuma@gmail.com', '455.765.878-10', '(31) 96544-7634', 'F', '$2y$10$otabbx4cTcFxANb7v9Y3MON4PXcDzd3RJf8fEexELAx5KMVIKz8GO'),
(20, 'Rafael Vieira', 'rafaaa@gmail.com', '564.767.877-38', '(31) 99996-4005', 'M', '$2y$10$D0jtliCnHMrFkqbZQYyXTelrhTigggIpQWmTO87zil5IzImjItI2a'),
(21, 'Claúdia Souza', 'clau.s.ouza@gmail.com', '657.765.666-10', '(31) 96543-5466', 'F', '$2y$10$U.b00uK8bp.CDzvN6QOhQ.V1QZzQtWzXhRIQ6zygZdcLdUHbgIFJa'),
(22, 'Gabriela Souza', 'sgabi@gmail.com', '465.777.765-12', '(31) 95864-5433', 'F', '$2y$10$1hOeZddkKY/wqwC5cO4J/OQkVMUnoXQ5HwWmosNwPuTbUw8CGYBuy'),
(23, 'Camila Costa', 'camiscos@gmail.com', '654.876.453-12', '(31) 93187-3132', 'F', '$2y$10$jSorPbwwvDSfGcdkCLfuM.HszPoe96/51Ucp/2BU.e5Y9UDmJHPTq'),
(24, 'Eduardo Costa', 'costa.dudu@gmail.com', '123.909.544-12', '(31) 96548-5323', 'M', '$2y$10$ApIg/oRtG9p0vXADi9RPhuvsoHLj7IqnoD9BHwFBVrdjqc3FCSvDS'),
(25, 'test12323', 'testaaa@gmail.com', '12123334', '2334345', 'M', '$2y$10$rryDn4U9eTiaDCy1a4YRVOja.gTZf4evCX0dqm.h14SXUYBSu56Jq');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `fk_produto_has_usuario_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_produto_has_usuario_produto_idx` (`id_produto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_produto_has_usuario_produto` FOREIGN KEY (`id_produto`) REFERENCES `mydb`.`produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_has_usuario_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `mydb`.`usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
