create database php_crud;

use php_crud;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);
