-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2023 às 19:51
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_clinica`
--

-- --------------------------------------------------------
--
-- Estrutura da tabela `tutor`
--

CREATE TABLE `tutor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(120) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tutor`
--

INSERT INTO `tutor` (`id`, `nome`, `cpf`, `email`, `telefone`, `endereco`, `created_at`, `updated_at`) VALUES
(1, 'Leo Cristian Padrão Jr.', '720.520.123-38', 'rico.luan@casanova.org', '(83) 95290-4268', 'Av. das Dores, 800. 952º Andar', NULL, NULL),
(2, 'Dr. Matias Gean Quintana', '382.012.008-45', 'dlira@cruz.org', '(17) 4794-2800', 'Avenida Cléber Prado, 87. 9º Andar', NULL, NULL),
(3, 'Simone Souza Camacho Filho', '231.942.014-25', 'delvalle.gael@terra.com.br', '(38) 3322-9443', 'Travessa Téo, 733. 750º Andar', NULL, NULL),
(4, 'Dr. Erik Leal Galvão Filho', '609.546.681-46', 'marta.mendes@yahoo.com', '(28) 4303-0682', 'Largo Burgos, 8. Bc. 44 Ap. 37', NULL, NULL),
(5, 'Dr. Santiago Bonilha Neto', '085.358.013-83', 'qtorres@yahoo.com', '(32) 2855-3811', 'Travessa Constância das Dores, 4392. 374º Andar', NULL, NULL),
(6, 'Wagner Maximiano de Souza Sobrinho', '675.087.031-70', 'rgarcia@terra.com.br', '(92) 4755-2778', 'Avenida Kevin Molina, 5', NULL, NULL),
(7, 'Dr. Nicolas Matheus Soares Neto', '116.346.042-70', 'brito.dener@r7.com', '(95) 2717-0322', 'Travessa Ketlin, 441. Apto 11', NULL, NULL),
(8, 'Antônio Galhardo', '400.266.451-14', 'agatha.fonseca@ig.com.br', '(68) 96345-2599', 'Avenida Larissa Leal, 19150. 38º Andar', NULL, NULL),
(9, 'Sra. Gabriela Domingues', '546.998.760-48', 'madeira.daniella@delvalle.com.br', '(65) 2634-1992', 'Rua Márcio, 9038. 2º Andar', NULL, NULL),
(10, 'Dr. Suellen Azevedo Neto', '681.885.473-79', 'fatima16@terra.com.br', '(34) 97315-1800', 'Rua Benites, 763', NULL, NULL);

-- --------------------------------------------------------


--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `peso` varchar(8) NOT NULL,
  `porte` varchar(7) NOT NULL,
  `raca` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tutor_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id`, `nome`, `peso`, `porte`, `raca`, `created_at`, `updated_at`, `tutor_id`) VALUES
(1, 'Bezerra', '56', 'P', 'inacio37', NULL, NULL, 1),
(2, 'Galvão', '16', 'G', 'kesia73', NULL, NULL, 4),
(3, 'Verdugo', '81', 'M', 'luciana38', NULL, NULL, 4),
(4, 'Ferminiano', '46', 'P', 'jmendes', NULL, NULL, 3),
(5, 'da Rosa', '74', 'G', 'alan.uchoa', NULL, NULL, 5),
(6, 'Rangel', '8', 'P', 'azevedo.cecilia', NULL, NULL, 3),
(7, 'Ferraz', '92', 'M', 'hcarrara', NULL, NULL, 2),
(8, 'Domingues', '48', 'P', 'wdias', NULL, NULL, 4),
(9, 'Aragão', '34', 'G', 'benicio.leon', NULL, NULL, 1),
(10, 'Aguiar', '5', 'M', 'zcorreia', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(12) NOT NULL,
  `hora` varchar(6) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `animal_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`id`, `data`, `hora`, `tipo`, `descricao`, `created_at`, `updated_at`, `animal_id`) VALUES
(1, '2015-12-03', '02:00', 'Exame', 'Rua Silvana Toledo', NULL, NULL, 2),
(2, '1990-05-22', '14:57', 'Cirurgia', 'Largo Lovato', NULL, NULL, 1),
(3, '1971-11-21', '08:35', 'Exame', 'Largo Fernando Zaragoça', NULL, NULL, 4),
(4, '1974-06-04', '13:12', 'Curativo', 'R. Salgado', NULL, NULL, 5),
(5, '2018-02-27', '23:57', 'Cirurgia', 'Largo William', NULL, NULL, 8),
(6, '1981-07-09', '07:09', 'Exame', 'Largo Clara Santacruz', NULL, NULL, 6),
(7, '1999-09-28', '14:04', 'Curativo', 'Avenida Rangel', NULL, NULL, 5),
(8, '1971-11-15', '16:13', 'Cirurgia', 'Largo Maitê Maldonado', NULL, NULL, 7),
(9, '2005-05-13', '09:56', 'Exame', 'Travessa Maia', NULL, NULL, 10),
(10, '1981-10-27', '20:10', 'Exame', 'Rua Henrique Paes', NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_30_210203_create_tutors_table', 1),
(6, '2023_09_01_002242_create_animals_table', 1),
(7, '2023_09_01_143401_create_consultas_table', 1),
(8, '2023_09_01_162810_alter_consulta', 1),
(9, '2023_09_03_202810_alter_animal', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_tutor_id_foreign` (`tutor_id`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consulta_animal_id_foreign` (`animal_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animal`
--
ALTER TABLE `animal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_tutor_id_foreign` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_animal_id_foreign` FOREIGN KEY (`animal_id`) REFERENCES `animal` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
