
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdalumnos`
--

drop database if exists bdalumnosSI;
create database bdalumnosSI;
use bdalumnosSI;


--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marcelo', 'marceloinfante13@gmail.com', NULL, '$2y$10$r6z.dK5qPUBwATkDoljl1eB8HU6R.AX1LKCKgUrtERFfevLPafg6i', NULL, '2022-07-15 03:26:31', '2022-07-15 03:26:31'),
(2, 'Marcelo Infante', 't033300420@unitru.edu.pe', NULL, '$2y$10$cjthgjRE8YmMt5o1X59YVOB1NxXbOpFN6xKy3eClzXu9pHLVqcj42', NULL, '2022-07-15 06:53:09', '2022-07-15 06:53:09');

-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




CREATE TABLE escuelas(idEscuela int, nombreEs varchar(60), primary key(idEscuela));
insert escuelas values(1,'ADMINISTRACION');
insert escuelas values(2,'AGRONOMIA');
insert escuelas values(3,'ANTROPOLOGIA');
insert escuelas values(4,'ARQUEOLOGIA');
insert escuelas values(5,'ARQUITECTURA Y URBANISMO');
insert escuelas values(6,'BIOLOGIA PESQUERA');
insert escuelas values(7,'CIENCIAS BIOLOGICAS');
insert escuelas values(8,'CIENCIAS DE LA COMUNICACION');
insert escuelas values(9,'CIENCIAS POLITICAS Y GOBERNABILIDAD');
insert escuelas values(10,'CONTABILIDAD Y FINANZAS');
insert escuelas values(11,'DERECHO');
insert escuelas values(12,'ECONOMIA');
insert escuelas values(13,'EDUCACION INICIAL');
insert escuelas values(14,'EDUCACION PRIMARIA');
insert escuelas values(15,'ENFERMERIA');
insert escuelas values(16,'ESTADISTICA');
insert escuelas values(17,'ESTOMATOLOGIA');
insert escuelas values(18,'FARMACIA Y BIOQUIMICA');
insert escuelas values(19,'FISICA');
insert escuelas values(20,'HISTORIA');
insert escuelas values(21,'INFORMATICA');
insert escuelas values(22,'INGENIERIA AGRICOLA');
insert escuelas values(23,'INGENIERIA AGROINDUSTRIAL');
insert escuelas values(24,'INGENIERIA AMBIENTAL');
insert escuelas values(25,'INGENIERIA CIVIL');
insert escuelas values(26,'INGENIERIA METALURGICA');
insert escuelas values(27,'INGENIERIA DE MATERIALES');
insert escuelas values(28,'INGENIERIA INDUSTRIAL');
insert escuelas values(29,'INGENIERIA MECANICA');
insert escuelas values(30,'INGENIERIA MECATRONICA');
insert escuelas values(31,'INGENIERIA METALURGICA');
insert escuelas values(32,'INGENIERIA DE MINAS');
insert escuelas values(33,'INGENIERIA QUIMICA');
insert escuelas values(34,'INGENIERIA DE SISTEMAS');
insert escuelas values(35,'MATEMATICAS');
insert escuelas values(36,'MEDICINA');
insert escuelas values(37,'MICROBOLOGIA Y PARASITOLOGIA');
insert escuelas values(38,'TRABAJO SOCIAL');
insert escuelas values(39,'TURISMO');
insert escuelas values(40,'ZOOTECNIA');
insert escuelas values(41,'No');


CREATE TABLE facultads(idFacultad int, nombreFa varchar(60), primary key(idFacultad));
insert facultads values(1,'F. DE CIENCIAS AGROPECUARIAS');
insert facultads values(2,'F. DE CIENCIAS BIOLOGICAS');
insert facultads values(3,'F. DE CIENCIAS ECONOMICAS');
insert facultads values(4,'F. DE CIENCIAS FISICAS Y MATEMATICAS');
insert facultads values(5,'F. DE CIENCIAS SOCIALES');
insert facultads values(6,'F. DE DERECHO Y CIENCIAS POLITICAS');
insert facultads values(7,'F. DE ENFERMERIA');
insert facultads values(8,'F. DE ESTOMATOLOGIA');
insert facultads values(9,'F. DE FARMACIA Y BIOQUIMICA');
insert facultads values(10,'F. DE INGENIERIA');
insert facultads values(11,'F. DE INGENIERIA QUIMICA');
insert facultads values(12,'F. DE MEDICINA');
insert facultads values(13,'F. DE EDUCACION Y CIENCIAS DE LA COMUNICACION');
insert facultads values(14,'No');

create table promociones(
    idpromocion int AUTO_INCREMENT,
    nombre varchar(30),

    estado int,
    primary key (idpromocion)
);
CREATE TABLE alumnos(
  idalumno int AUTO_INCREMENT, 
  dni varchar(8) not null, 
  nombres varchar(60) not null,
  apellidos varchar(60) not null, 
  edad varchar(2) not null, 
  telefono varchar (9) not null,
  idpromocion int,
  fechaN date not null, 
  superiores varchar(5) not null,
  oficio varchar (20),
  idEscuela int, 
  idFacultad int, 
  estado int,
  primary key(idalumno), 
  foreign key(idEscuela) references escuelas(idEscuela),
  foreign key(idpromocion) references promociones(idpromocion),
  foreign key(idFacultad) references facultads(idFacultad)
);

CREATE TABLE cargos(
    idcargo int,
    descripcion varchar(20),
    primary key (idcargo)
);



create table eventos(
    idevento int AUTO_INCREMENT,
    nombre varchar(30),
    fechaini date,
    fechafin date,
    costoevento float,
    estado int,
    primary key (idevento)
);




insert into promociones(idpromocion,nombre) values(1,'Promocion 95');
insert into promociones(idpromocion,nombre) values(2,'Promocion 96');
insert into promociones(idpromocion,nombre) values(3,'Promocion 97');
insert into promociones(idpromocion,nombre) values(4,'Promocion 98');
insert into promociones(idpromocion,nombre) values(5,'Promocion 99');
insert into promociones(idpromocion,nombre) values(6,'Promocion 2000');
insert into promociones(idpromocion,nombre) values(7,'Promocion 2001');
insert into promociones(idpromocion,nombre) values(8,'Promocion 2002');
insert into promociones(idpromocion,nombre) values(9,'Promocion 2003');
insert into promociones(idpromocion,nombre) values(10,'Promocion 2004');
insert into promociones(idpromocion,nombre) values(12,'Promocion 2005');
insert into promociones(idpromocion,nombre) values(13,'Promocion 2006');
insert into promociones(idpromocion,nombre) values(14,'Promocion 2007');
insert into promociones(idpromocion,nombre) values(15,'Promocion 2008');
insert into promociones(idpromocion,nombre) values(16,'Promocion 2009');
insert into promociones(idpromocion,nombre) values(17,'Promocion 2010');
insert into promociones(idpromocion,nombre) values(18,'Promocion 2011');
insert into promociones(idpromocion,nombre) values(19,'Promocion 2012');
insert into promociones(idpromocion,nombre) values(20,'Promocion 2013');
insert into promociones(idpromocion,nombre) values(21,'Promocion 2014');
insert into promociones(idpromocion,nombre) values(22,'Promocion 2015');
insert into promociones(idpromocion,nombre) values(23,'Promocion 2016');
insert into promociones(idpromocion,nombre) values(24,'Promocion 2017');
insert into promociones(idpromocion,nombre) values(25,'Promocion 2018');
insert into promociones(idpromocion,nombre) values(26,'Promocion 2019');
insert into promociones(idpromocion,nombre) values(27,'Promocion 2020');
insert into promociones(idpromocion,nombre) values(28,'Promocion 2021');


INSERT INTO `cargos` (`idcargo`, `descripcion`) VALUES
(1, 'Presidente'),
(2, 'Tesorero(a)'),
(3, 'Secretario(a)'),
(4, 'Vocal'),
(5, 'Comité ejecutivo'),
(6, 'Director(a) Electo(a)');

CREATE TABLE detalle_cargo(
    id_detalle int AUTO_INCREMENT,
    idalumno int, 
    idcargo int,
    fechains date,
    monto float,
    estado int,
    primary key (id_detalle),
    foreign key (idalumno) references alumnos(idalumno),
    foreign key (idcargo) references cargos(idcargo)
);

CREATE TABLE detalle_evento(
    id_detalle int AUTO_INCREMENT,
    idalumno int, 
    idevento int,
    fechains date,
    cant_entradas int,
    montototal float,
    estado int,
    primary key (id_detalle),
    foreign key (idalumno) references alumnos(idalumno),
    foreign key (idevento) references eventos(idevento)
);
