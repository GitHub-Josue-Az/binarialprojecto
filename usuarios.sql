-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dbwt66nas56xsx
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbwt66nas56xsx
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbwt66nas56xsx` DEFAULT CHARACTER SET utf8 ;
USE `dbwt66nas56xsx` ;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(145) NULL,
  `usuario` VARCHAR(145) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `roles_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted` CHAR(1) NULL DEFAULT '1',
  `remember_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_roles_idx` (`roles_id` ASC) ,
  CONSTRAINT `fk_user_roles`
    FOREIGN KEY (`roles_id`)
    REFERENCES `dbwt66nas56xsx`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`tipos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(145) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`rasons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`rasons` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`representantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`representantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`empresas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ruc` VARCHAR(145) NULL,
  `nombrecomer` VARCHAR(145) NULL,
  `direccion` VARCHAR(145) NULL,
  `celularuno` INT(40) NULL,
  `celulardos` INT(40) NULL,
  `telefono` INT(40) NULL,
  `anexouno` INT(40) NULL,
  `anexodos` INT(40) NULL,
  `email` VARCHAR(145) NULL,
  `cantidademple` INT(40) NULL,
  `rasons_id` INT NOT NULL,
  `representantes_id` INT NOT NULL,
  `usuarios_id` INT NOT NULL,
  `status` CHAR(1) NULL DEFAULT '1',
  `deleted` CHAR(1) NULL DEFAULT '1',
  `created_at` VARCHAR(45) NULL,
  `updated_at` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_empresas_rasons1_idx` (`rasons_id` ASC) ,
  INDEX `fk_empresas_representantes1_idx` (`representantes_id` ASC) ,
  INDEX `fk_empresas_usuarios1_idx` (`usuarios_id` ASC) ,
  CONSTRAINT `fk_empresas_rasons1`
    FOREIGN KEY (`rasons_id`)
    REFERENCES `dbwt66nas56xsx`.`rasons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empresas_representantes1`
    FOREIGN KEY (`representantes_id`)
    REFERENCES `dbwt66nas56xsx`.`representantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empresas_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `dbwt66nas56xsx`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`proyectos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`proyectos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(145) NOT NULL,
  `nombreproyect` VARCHAR(145) NOT NULL,
  `ventaesti` DOUBLE NOT NULL,
  `capital` DOUBLE NOT NULL,
  `rentabilidad` DOUBLE NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  `deleted` CHAR(1) NOT NULL DEFAULT '1',
  `status` CHAR(1) NOT NULL DEFAULT '1',
  `tipos_id` INT NOT NULL,
  `varlorcomer` DOUBLE NOT NULL,
  `comprainmu` DOUBLE NOT NULL,
  `comisioncorre` DOUBLE NULL,
  `comisioninmo` DOUBLE NULL,
  `publicidadinmu` DOUBLE NULL,
  `utibruta` DOUBLE NULL,
  `gastoslegales` DOUBLE NULL,
  `utideimpu` DOUBLE NULL,
  `gastosadmin` DOUBLE NOT NULL,
  `utineta` DOUBLE NOT NULL,
  `empresas_id` INT NOT NULL,
  `utioperativa` DOUBLE NULL,
  `ventaesta` DOUBLE NULL,
  `gastoscomer` DOUBLE NULL,
  `comisionbpi` DOUBLE NULL,
  `gastosmarke` DOUBLE NULL,
  `desarrollopubli` DOUBLE NULL,
  `gastosope` DOUBLE NULL,
  `gastosinmo` DOUBLE NULL,
  `gastosremo` DOUBLE NULL,
  `impuestorenta` DOUBLE NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proyectos_tipos1_idx` (`tipos_id` ASC) ,
  INDEX `fk_proyectos_empresas1_idx` (`empresas_id` ASC) ,
  CONSTRAINT `fk_proyectos_tipos1`
    FOREIGN KEY (`tipos_id`)
    REFERENCES `dbwt66nas56xsx`.`tipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectos_empresas1`
    FOREIGN KEY (`empresas_id`)
    REFERENCES `dbwt66nas56xsx`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbwt66nas56xsx`.`archivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbwt66nas56xsx`.`archivos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tasacion` VARCHAR(255) NOT NULL,
  `usuarios_id` INT NOT NULL,
  `proyectos_id` INT NOT NULL,
  `estudiolegal` VARCHAR(245) NOT NULL,
  `estudiotribu` VARCHAR(245) NOT NULL,
  `estudiocomer` VARCHAR(245) NOT NULL,
  `estudiofinan` VARCHAR(245) NOT NULL,
  `estudioestruc` VARCHAR(245) NOT NULL,
  `adquisicion` VARCHAR(245) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_archivos_usuarios1_idx` (`usuarios_id` ASC) ,
  INDEX `fk_archivos_proyectos1_idx` (`proyectos_id` ASC) ,
  CONSTRAINT `fk_archivos_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `dbwt66nas56xsx`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_archivos_proyectos1`
    FOREIGN KEY (`proyectos_id`)
    REFERENCES `dbwt66nas56xsx`.`proyectos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
