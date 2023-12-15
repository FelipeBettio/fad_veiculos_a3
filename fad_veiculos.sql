CREATE DATABASE fad_veiculos;
CREATE TABLE IF NOT EXISTS `carros` (
  `idCar` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `ano` int NOT NULL,
  `cor` varchar(30) NOT NULL,
  `preco` double NOT NULL,
  `imagem1` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imagem2` varchar(220) DEFAULT NULL,
  `imagem3` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`idCar`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `carros` (`idCar`, `tipo`, `modelo`, `descricao`, `ano`, `cor`, `preco`, `imagem1`, `imagem2`, `imagem3`) VALUES
(1, 'carro', 'GM Corsa wind 1.0', 'Corsa wind 2 portas em bom estado', 2003, 'Preto', 14900, 'corsa1.jpg', 'corsa2.jpg', 'corsa3.jpg'),
(2, 'carro', 'GM Vectra 2.2', 'Vectra 2.2 em excelente estado', 2009, 'Branco', 27400, 'vectra.jpg', 'vectra2.jpg', 'vectra3.jpg'),
(3, 'carro', 'GM Onix Plus 1.0 Turbo', 'Onix Plus em bom estado nunca foi uber', 2020, 'Azul', 89900, 'onix1.jpg', 'onix2.jpg', 'onix3.jpg'),
(4, 'carro', 'GM Camaro V8', 'Camaro amarelo v8 original', 2015, 'Amarelo', 134900, 'camaro1.jpeg', 'camaro2.jpg', 'camaro3.jpg'),
(5, 'moto', 'BMW S1000RR', 'BMW S1000RR 0Km nunca usada', 2023, 'Branca', 149900, 'bmw1.jpg', 'bmw2.jpg', 'bmw3.jpg'),
(6, 'moto', 'Honda CG 150', 'CG 150 perfeita pra ifood', 2004, 'Preta', 6900, 'cg1.jpg', 'cg2.jpg', 'cg3.jpg'),
(7, 'moto', 'Honda PCX', 'PCX em estado razoavel com km baixa', 2011, 'Branca', 14900, 'pcx1.jpg', 'pcx2.jpg', 'pcx3.jpg'),
(8, 'moto', 'Honda Biz', 'Biz perfeita faz 400km/L', 2007, 'Vermelha', 9900, 'biz1.jpg', 'biz2.jpg', 'biz3.jpg');
COMMIT;

