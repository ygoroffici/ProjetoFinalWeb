
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Banco de dados: `biblioteca`
-- --------------------------------------------------------
--  Criações de tabelas
-- --------------------------------------------------------

-- Tabela `autor`
--
CREATE TABLE `autor` (
  `idautor` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nmautor` varchar(64) NOT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Tabela `categoria`
--
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dscategoria` varchar(64) NOT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Tabela `livro`
--
CREATE TABLE `livro` (
  `cdlivro` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nmlivro` varchar(64) NOT NULL,
  `dtpublicacao` date NOT NULL,
  `idautor` int(11) NOT NULL,
  FOREIGN KEY(`idautor`) REFERENCES `autor`(`idautor`)
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Tabela `livro_categoria`
--
CREATE TABLE `livro_categoria` (
  `cdlivro` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  PRIMARY KEY(`cdlivro`, `idcategoria`),
  FOREIGN KEY(`cdlivro`) REFERENCES `livro`(`cdlivro`),
  FOREIGN KEY(`idcategoria`) REFERENCES `categoria`(`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------
--  Inserções de registros nas tabelas
-- --------------------------------------------------------

-- Registros de `autor`
--
INSERT INTO `autor` (`idautor`, `nmautor`)
  VALUES (NULL, 'Kamome Shirahama');


-- Registros de `categoria`
--
INSERT INTO `categoria` (`idcategoria`, `dscategoria`)
  VALUES (NULL, 'Fantasia'),
        (NULL, 'Infanto-juvenil'),
        (NULL, 'Internacionais');


-- Registros de `livro`
--
INSERT INTO `livro` (`cdlivro`, `nmlivro`, `dtpublicacao`, `idautor`)
  VALUES (NULL, 'Witch Hat Atelier Vol.1', '2017-01-23', 1);


-- Registros de `livro_categoria`
--
INSERT INTO `livro_categoria` (`cdlivro`, `idcategoria`)
  VALUES (1, 1),
        (1, 2),
        (1, 3);

COMMIT;

