/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : ionauth

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-07-15 11:06:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `catAplicacion`
-- ----------------------------
DROP TABLE IF EXISTS `catAplicacion`;
CREATE TABLE `catAplicacion` (
`idAplicacion`  int(11) NOT NULL AUTO_INCREMENT ,
`idSistema`  int(11) NOT NULL ,
`nombreAplicacion`  varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`urlAplicacion`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`idAplicacion`),
FOREIGN KEY (`idSistema`) REFERENCES `catSistema` (`idSistema`) ON DELETE CASCADE ON UPDATE CASCADE,
UNIQUE INDEX `urlAplicacion` (`urlAplicacion`) USING BTREE ,
INDEX `idAplicacion` (`idAplicacion`, `idSistema`) USING BTREE ,
INDEX `idSistema` (`idSistema`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=10

;

-- ----------------------------
-- Records of catAplicacion
-- ----------------------------
BEGIN;
INSERT INTO `catAplicacion` VALUES ('1', '1', 'application1', 'application1'), ('2', '1', 'application2', 'application2'), ('3', '2', 'application3', 'application3'), ('4', '3', 'Auth', 'auth'), ('5', '4', 'sistemaprueba1', 'sistemaprueba1'), ('6', '4', 'sistemaprueba2', 'sistemaprueba2'), ('7', '5', 'application5', 'application5'), ('8', '6', 'application6', 'application6'), ('9', '7', 'Entorno Patrimonial', 'Evaluacion_patrimonial');
COMMIT;

-- ----------------------------
-- Table structure for `catModulo`
-- ----------------------------
DROP TABLE IF EXISTS `catModulo`;
CREATE TABLE `catModulo` (
`idModulo`  int(11) NOT NULL AUTO_INCREMENT ,
`idAplicacion`  int(11) NOT NULL ,
`nombreModulo`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`urlModulo`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`idModulo`),
FOREIGN KEY (`idAplicacion`) REFERENCES `catAplicacion` (`idAplicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
INDEX `FK_catModulo_Aplicacion` (`idAplicacion`) USING BTREE ,
INDEX `idModulo` (`idModulo`) USING BTREE ,
INDEX `urlModulo` (`urlModulo`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=26

;

-- ----------------------------
-- Records of catModulo
-- ----------------------------
BEGIN;
INSERT INTO `catModulo` VALUES ('1', '1', 'modulo1', 'modulo1'), ('2', '1', 'modulo2', 'modulo2'), ('3', '1', 'modulo3', 'modulo3'), ('6', '2', 'modulo4', 'modulo4'), ('7', '2', 'modulo5', 'modulo5'), ('8', '3', 'modulo6', 'modulo6'), ('9', '4', 'Lista de Usuarios', 'index'), ('10', '4', 'Cambiar Contraseña', 'change_password'), ('11', '4', 'Crear Usuario', 'create_user'), ('12', '4', 'Crear Grupo', 'create_group'), ('13', '4', 'Cambiar de Usuario', 'logout'), ('14', '5', 't1', 't1'), ('16', '5', 'T2', 'T2'), ('17', '6', 'T3', 'T3'), ('21', '6', 'T4', 'T4'), ('22', '6', 'T5', 'T5'), ('23', '7', 'modulo55', 'modulo55'), ('24', '8', 'modulo a 6', 'modulo a 6'), ('25', '9', 'Datos Generales', 'index');
COMMIT;

-- ----------------------------
-- Table structure for `catSistema`
-- ----------------------------
DROP TABLE IF EXISTS `catSistema`;
CREATE TABLE `catSistema` (
`idSistema`  int(11) NOT NULL AUTO_INCREMENT ,
`nombreSistema`  varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`urlSistema`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`idSistema`),
UNIQUE INDEX `nombreSistema` (`nombreSistema`, `urlSistema`) USING BTREE ,
INDEX `idSistema` (`idSistema`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=8

;

-- ----------------------------
-- Records of catSistema
-- ----------------------------
BEGIN;
INSERT INTO `catSistema` VALUES ('3', 'Administración del Sistema', ''), ('7', 'CCC', ''), ('4', 'sistema de prueba', 'sistemaprueba'), ('1', 'sistema1', 'sistema1'), ('2', 'sistema2', 'sistema2'), ('5', 'sistema3', 'sistema3'), ('6', 'sistema4', 'sistema4');
COMMIT;

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
`id`  mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT ,
`name`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`description`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of groups
-- ----------------------------
BEGIN;
INSERT INTO `groups` VALUES ('1', 'admin', 'Administrator'), ('2', 'members', 'General User'), ('3', 'other', 'Other users');
COMMIT;

-- ----------------------------
-- Table structure for `login_attempts`
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
`id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`ip_address`  varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`login`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`time`  int(11) UNSIGNED NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `tblPermisosUsuario`
-- ----------------------------
DROP TABLE IF EXISTS `tblPermisosUsuario`;
CREATE TABLE `tblPermisosUsuario` (
`id_user`  int(11) UNSIGNED NOT NULL ,
`idModulo`  int(11) NOT NULL ,
PRIMARY KEY (`id_user`, `idModulo`),
FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY (`idModulo`) REFERENCES `catModulo` (`idModulo`) ON DELETE CASCADE ON UPDATE CASCADE,
INDEX `idModulo` (`idModulo`) USING BTREE ,
INDEX `id_user` (`id_user`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci

;

-- ----------------------------
-- Records of tblPermisosUsuario
-- ----------------------------
BEGIN;
INSERT INTO `tblPermisosUsuario` VALUES ('1', '1'), ('2', '1'), ('1', '2'), ('2', '2'), ('1', '3'), ('1', '6'), ('1', '7'), ('1', '8'), ('1', '9'), ('1', '10'), ('1', '11'), ('1', '12'), ('1', '13'), ('1', '14'), ('1', '17'), ('1', '21'), ('1', '22'), ('1', '23'), ('1', '24'), ('1', '25');
COMMIT;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`ip_address`  varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`username`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`salt`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`email`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`activation_code`  varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`forgotten_password_code`  varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`forgotten_password_time`  int(11) UNSIGNED NULL DEFAULT NULL ,
`remember_code`  varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`created_on`  int(11) UNSIGNED NOT NULL ,
`last_login`  int(11) UNSIGNED NULL DEFAULT NULL ,
`active`  tinyint(1) UNSIGNED NULL DEFAULT NULL ,
`first_name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`last_name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`company`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`phone`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=7

;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', '127.0.0.1', 'administrator', '$2y$08$oekhvfT5PTIWSzOK9KhJReCoC4NEqlLOcaZES7Y6.c4EOqGWqhCZW', '', 'admin@admin.com', '', null, null, null, '1268889823', '1467900129', '1', 'Admin', 'istrator', 'ADMIN', '0'), ('2', '::1', null, '$2y$08$wFEZhasg8yFEdnb.Wo4CMenDT1cgLI9c1duW/jx5NtBUuDdJWw136', null, 'test@gmial.com', null, null, null, null, '1465831201', null, '1', 'test', 'test', 'ssp', '5589568987'), ('3', '::1', null, '$2y$08$cfQEyb4VTfLniCXPH/a54.X7hVzT2G0Kb7ZzqP5Irtx4t474mG..6', null, 'prueba@gmail.com', null, null, null, null, '1465831322', '1466007065', '1', 'prueba', 'prueba', 'prueba', ''), ('4', '::1', null, '$2y$08$vJsJCER5q3RjKBm7BTBjnex.w.ZJJ0uU7pIshFt8NZm1KuwG9SVxm', null, 'luis@gmail.com', null, null, null, null, '1466460781', '1466461584', '1', 'luis ', 'test', 'ninguna', '12548789'), ('5', '::1', null, '$2y$08$5r7UIic/EEDuZfkjc3hLpOWaM1eY4Lo9qNXpS8yvEdzYR/5BaNjNq', null, 'pepe@gmail.com', '60514146e6d60af5a33b79d8a77517352a60fe8a', null, null, null, '1466461123', null, '0', 'pepe', 'test', 'test', '5589563256'), ('6', '::1', null, '$2y$08$Sn0rdiFEILmiScOjTI1agO/f5KDnMQZq2KkDSOMrfsldbGWy5tfau', null, 'usuario1@gmail.com', null, null, null, null, '1467297646', '1467317440', '1', 'usuario1', 'usuario1', 'usuario1', '5589568754');
COMMIT;

-- ----------------------------
-- Table structure for `users_copy`
-- ----------------------------
DROP TABLE IF EXISTS `users_copy`;
CREATE TABLE `users_copy` (
`id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`ip_address`  varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`username`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`salt`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`email`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`activation_code`  varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`forgotten_password_code`  varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`forgotten_password_time`  int(11) UNSIGNED NULL DEFAULT NULL ,
`remember_code`  varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`created_on`  int(11) UNSIGNED NOT NULL ,
`last_login`  int(11) UNSIGNED NULL DEFAULT NULL ,
`active`  tinyint(1) UNSIGNED NULL DEFAULT NULL ,
`first_name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`last_name`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`company`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`phone`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of users_copy
-- ----------------------------
BEGIN;
INSERT INTO `users_copy` VALUES ('1', '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', null, null, null, '1268889823', '1466453441', '1', 'Admin', 'istrator', 'ADMIN', '0'), ('2', '::1', null, '$2y$08$pxXqu.sWqDrgMLON.rJEJuEYbftQg5Nrs51Co/JtLQMEbYP4XHgg6', null, 'test@gmial.com', null, null, null, null, '1465831201', null, '1', 'test', 'test', 'ssp', '5589568987'), ('3', '::1', null, '$2y$08$cfQEyb4VTfLniCXPH/a54.X7hVzT2G0Kb7ZzqP5Irtx4t474mG..6', null, 'prueba@gmail.com', null, null, null, null, '1465831322', '1466007065', '1', 'prueba', 'prueba', 'prueba', '');
COMMIT;

-- ----------------------------
-- Table structure for `users_groups`
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
`id`  int(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
`user_id`  int(11) UNSIGNED NOT NULL ,
`group_id`  mediumint(8) UNSIGNED NOT NULL ,
PRIMARY KEY (`id`),
FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
UNIQUE INDEX `uc_users_groups` (`user_id`, `group_id`) USING BTREE ,
INDEX `fk_users_groups_users1_idx` (`user_id`) USING BTREE ,
INDEX `fk_users_groups_groups1_idx` (`group_id`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=16

;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
BEGIN;
INSERT INTO `users_groups` VALUES ('7', '1', '1'), ('8', '1', '2'), ('15', '2', '2'), ('6', '3', '2'), ('11', '4', '3'), ('13', '5', '3'), ('14', '6', '2');
COMMIT;

-- ----------------------------
-- Auto increment value for `catAplicacion`
-- ----------------------------
ALTER TABLE `catAplicacion` AUTO_INCREMENT=10;

-- ----------------------------
-- Auto increment value for `catModulo`
-- ----------------------------
ALTER TABLE `catModulo` AUTO_INCREMENT=26;

-- ----------------------------
-- Auto increment value for `catSistema`
-- ----------------------------
ALTER TABLE `catSistema` AUTO_INCREMENT=8;

-- ----------------------------
-- Auto increment value for `groups`
-- ----------------------------
ALTER TABLE `groups` AUTO_INCREMENT=4;

-- ----------------------------
-- Auto increment value for `login_attempts`
-- ----------------------------
ALTER TABLE `login_attempts` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `users`
-- ----------------------------
ALTER TABLE `users` AUTO_INCREMENT=7;

-- ----------------------------
-- Auto increment value for `users_copy`
-- ----------------------------
ALTER TABLE `users_copy` AUTO_INCREMENT=4;

-- ----------------------------
-- Auto increment value for `users_groups`
-- ----------------------------
ALTER TABLE `users_groups` AUTO_INCREMENT=16;
