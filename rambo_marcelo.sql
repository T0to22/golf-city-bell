SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_usuarios
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'usuario',
  PRIMARY KEY (`id`,`email`,`usuario`) USING BTREE,
  UNIQUE KEY `UsuarioUnico` (`usuario`),
  UNIQUE KEY `MailUnico` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of tb_usuarios
-- ----------------------------
BEGIN;
INSERT INTO `tb_usuarios` VALUES (1, 'admin', 'admin@test.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');
COMMIT;

-- ----------------------------
-- Procedure structure for actualizarDatosUsuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `actualizarDatosUsuario`;
delimiter ;;
CREATE PROCEDURE `actualizarDatosUsuario`(IN v_id_usuario int(11),
IN v_usuario varchar(255),
IN v_email varchar(255))
BEGIN
	
	set @id_usuario = v_id_usuario;
	set @usuario = v_usuario;
	set @email = v_email;
	
	prepare stmt from 'update tb_usuarios set usuario = ?, email = ? where id = ? limit 1';
	execute stmt using @usuario, @email, @id_usuario;
	deallocate prepare stmt;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for eliminarUsuarioPorID
-- ----------------------------
DROP PROCEDURE IF EXISTS `eliminarUsuarioPorID`;
delimiter ;;
CREATE PROCEDURE `eliminarUsuarioPorID`(IN v_id_usuario int(11))
BEGIN
	
	set @id_usuario = v_id_usuario;
	
	prepare stmt from 'delete from tb_usuarios where id = ? limit 1';
	execute stmt using @id_usuario;
	deallocate prepare stmt;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for loginUsuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `loginUsuario`;
delimiter ;;
CREATE PROCEDURE `loginUsuario`(IN v_usuario varchar(255),
IN v_pwd varchar(255))
BEGIN
	
	set @usuario = v_usuario;
	set @pwd = MD5(v_pwd);
	
	prepare stmt from 'select * from tb_usuarios where usuario = ? and pwd = ?';
	execute stmt using @usuario, @pwd;
	deallocate prepare stmt;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for nuevoUsuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `nuevoUsuario`;
delimiter ;;
CREATE PROCEDURE `nuevoUsuario`(IN v_usuario varchar(255),
IN v_email varchar(255),
IN v_pwd varchar(255))
BEGIN
	
	set @usuario = v_usuario;
	set @email = v_email;
	set @pwd = MD5(v_pwd);
	
	prepare stmt from 'insert into tb_usuarios(usuario, email, pwd) values ( ?, ?, ? )';
	execute stmt using @usuario, @email, @pwd;
	deallocate prepare stmt;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for seleccionarUsuarios
-- ----------------------------
DROP PROCEDURE IF EXISTS `seleccionarUsuarios`;
delimiter ;;
CREATE PROCEDURE `seleccionarUsuarios`()
BEGIN
	
	prepare stmt from 'select * from tb_usuarios';
	execute stmt;
	deallocate prepare stmt;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
