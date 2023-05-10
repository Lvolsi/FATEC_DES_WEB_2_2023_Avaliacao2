
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE candidatos (
  nome VARCHAR(11) NOT NULL,
  telefone varchar(20) DEFAULT NULL,
  rg_cpf varchar(50) DEFAULT NULL,
  escola_publica BOOLEAN DEFAULT NULL,
  id int PRIMARY KEY auto_increment
);

INSERT INTO candidatos (nome, telefone, rg_cpf, escola_publica, id) VALUES
('Larissa', '524152632', '123456789', 0, 3),
('Pedro', '521478696', '123456987', 0, 4),
('Orlando', '963852741', '852963741', 0, 5),
('Nilton', '741963852', '852741741', 0, 6);

ALTER TABLE candidatos
  ADD PRIMARY KEY (`id`);

ALTER TABLE candidatos
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

COMMIT;