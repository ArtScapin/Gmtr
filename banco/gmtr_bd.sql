-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Dez-2020 às 20:21
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gmtr_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE `conteudo` (
  `id_conteudo` int(11) NOT NULL,
  `conteudo` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id_conteudo`, `conteudo`) VALUES
(1, '<p>Figura geométrica plana caracterizada pelo conjunto de todos os pontos de um plano. O raio (r) do círculo corresponde a medida da distância entre o centro da figura até sua extremidade.<br/></p><p>A área do círculo corresponde ao valor da superfície dessa figura, levando em conta a medida de seu raio (r).<br/></p><p>O perímetro do círculo corresponde a medida da volta completa dessa figura geométrica plana. Nesse caso, o perímetro é o comprimento da circunferência.<br/></p>'),
(2, '<p>Polígono (figura plana fechada) de três lados, o triângulo é uma figura geométrica plana formada por três segmentos de reta.<br/></p><p>Os Triangulos são classificados em:<br/></p><p>♦ triângulo equilátero: possui todos os lados e ângulos internos iguais, que totalizam 180°;<br/></p><p>♦ triângulo isósceles: possui dois lados e dois ângulos internos congruentes;<br/></p><p>♦ triângulo escaleno: possui todos os lados e ângulos internos diferentes.<br/></p><p>A área do triângulo pode ser calculada através das medidas da base e da altura da figura. Lembre-se que o triângulo é uma figura geométrica plana formada por três lados. Contudo, há diversas maneiras de calcular a área de um triângulo, sendo que a escolha é feita de acordo com os dados conhecidos no problema.Acontece que muitas vezes, não temos todas as medidas necessárias para fazer esse cálculo.Nestes casos, devemos identificar o tipo de triângulo (retângulo, equilátero, isósceles ou escaleno) e levar em consideração as suas características e propriedades para encontrar as medidas que necessitamos.<br/></p>'),
(3, '<p>O losango é uma figura geométrica plana representada por um quadrilátero equilátero, ou seja, um polígono formado por quatro lados iguais.Importante destacar que todo losango é um paralelogramo, cujos lados opostos são iguais e paralelos, com duas diagonais que se cruzam perpendicularmente.Diferente do quadrado, que possui quatro ângulos iguais a 90º, o losango possui dois ângulos agudos (menores que 90º) e dois ângulos obtusos (maiores que 90º).Assim, enquanto o losango é um paralelogramo composto de quatro lados congruentes, o retângulo é um paralelogramo composto de quatro ângulos congruentes. Já o quadrado, é um paralelogramo composto de quatro lados e quatro ângulos congruentes.<br/></p><p>Para calcular a área do losango é necessário traçar duas diagonais. Dessa forma tem-se 4 triângulos retângulos (com ângulo reto de 90º) iguais.Assim, podemos encontrar a área do losango a partir da área de 4 triângulos retângulos ou 2 retângulos.</p>'),
(4, '<p>Polígono de quatro lados iguais, o quadrado ou quadrilátero é uma figura geométrica plana que possuem os quatro ângulos congruentes: retos (90°).<br/></p><p>A área do quadrado corresponde ao tamanho da superfície dessa figura. Lembre-se que o quadrado é um quadrilátero regular que apresenta quatro lados congruentes (mesma medida).Além disso, ele possui quatro ângulos internos de 90°, chamados de ângulos retos. Assim, a soma dos ângulos internos do quadrado totaliza 360°.<br/></p><p>O perímetro do quadrado corresponde a soma dos quatro lados dessa figura plana.Lembre-se que o quadrado é um quadrilátero regular que apresenta lados com as mesmas medidas (congruentes). Assim, essa figura é composta por quatro ângulos retos (90°).</p>'),
(5, '<p>Figura geométrica plana marcada por dois lados paralelos no sentido vertical e os outros dois paralelos, no horizontal. Assim, todos os lados do retângulo formam ângulos reto (90°).<br/></p><p>A área do retângulo corresponde ao produto (multiplicação) da medida da base pela altura da figura, sendo expressa pela fórmula:(A=b*h)Lembre-se que o retângulo é uma figura geométrica plana formada por quatro lados (quadrilátero). Dois lados do retângulo são menores e dois deles são maiores.Ele possui quatro ângulos internos de 90° chamados de ângulos retos. Assim, a soma dos ângulos internos dos retângulos totalizam 360°.<br/></p><p>O perímetro do retângulo é a soma das medidas de todos os lados dessa figura geométrica plana.</p>'),
(6, '<p>Chamado de quadrilátero notável, pois a soma dos seus ângulos internos corresponde a 360º, o trapézio é uma figura geométrica plana.Ele possui dois lados e bases paralelas, donde uma é maior e outra menor. São classificados em:<br/></p><p>♦ trapézio retângulo: possui dois ângulos de 90º;<br/></p><p>♦ trapézio isósceles ou simétrico: os lados não paralelos possuem a mesma medida;<br/></p><p>♦ trapézio escaleno: todos os lados de medidas diferentes.<br/></p><p>A área do trapézio mede o valor da superfície dessa figura plana formada por quatro lados.O trapézio é um quadrilátero que possui dois lados e duas bases paralelas, sendo que uma é maior e outra menor.O trapézio é considerado um quadrilátero notável, de forma que a soma de seus ângulos internos corresponde a 360°.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma`
--

CREATE TABLE `forma` (
  `id_forma` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `conteudo_id` int(11) NOT NULL,
  `imagem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `forma`
--

INSERT INTO `forma` (`id_forma`, `nome`, `conteudo_id`, `imagem_id`) VALUES
(1, 'Círculo', 1, 1),
(2, 'Triângulo', 2, 2),
(3, 'Losango', 3, 3),
(4, 'Quadrado', 4, 4),
(5, 'Retangulo', 5, 5),
(6, 'Trapézio', 6, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id_imagem` int(11) NOT NULL,
  `diretorio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id_imagem`, `diretorio`) VALUES
(1, 'assets/img/circulo.png'),
(2, 'assets/img/triangulo.png'),
(3, 'assets/img/losango.png'),
(4, 'assets/img/quadrado.png'),
(5, 'assets/img/retangulo.png'),
(6, 'assets/img/trapezio.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conteudo`
--
ALTER TABLE `conteudo`
  ADD PRIMARY KEY (`id_conteudo`);

--
-- Índices para tabela `forma`
--
ALTER TABLE `forma`
  ADD PRIMARY KEY (`id_forma`),
  ADD KEY `fk_forma_conteudo` (`conteudo_id`),
  ADD KEY `fk_forma_imagem` (`imagem_id`);

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_imagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conteudo`
--
ALTER TABLE `conteudo`
  MODIFY `id_conteudo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `forma`
--
ALTER TABLE `forma`
  MODIFY `id_forma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `forma`
--
ALTER TABLE `forma`
  ADD CONSTRAINT `fk_forma_conteudo` FOREIGN KEY (`conteudo_id`) REFERENCES `conteudo` (`id_conteudo`),
  ADD CONSTRAINT `fk_forma_imagem` FOREIGN KEY (`imagem_id`) REFERENCES `imagem` (`id_imagem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
