# CRUD CON PHP "Administración de tareas"

### Tecnologias usadas

- html
- php
- mysql
- boostrap


### Requerido
```sh
crear base de datos -> phy_crud_mysql
crear columnas en la tabla task(TAREA) id, title, description and created_at (timestamp)
```

### SQL - Base de datos
/*query*/

 create database php_crud_mysql;
 use php_crud_mysql;
 CREATE TABLE `php_crud_mysql`.`task` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
 `responsible` VARCHAR(85) NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`));

  /*fin query*/
  
  ### Adryan Ynfante adryanynfante@gmail.com
