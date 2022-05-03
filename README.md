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
  ### Visual CRUD (Create, Read, Update, Delete)
  ![image](https://user-images.githubusercontent.com/92740455/166474059-25af2f84-fd4f-46af-b927-3b620b410db2.png)
![image](https://user-images.githubusercontent.com/92740455/166474086-2d6376a9-2157-49ad-b7a0-61e74d70d491.png)
![image](https://user-images.githubusercontent.com/92740455/166474120-3416e5aa-101d-4f9b-8d29-4de01127a4d3.png)
![image](https://user-images.githubusercontent.com/92740455/166474141-29fb8a9d-7c48-435f-b3b1-59bf6deef656.png)
![image](https://user-images.githubusercontent.com/92740455/166474162-25016f26-0831-411c-8d5d-790abcda5c2a.png)




  
  ### Adryan Ynfante adryanynfante@gmail.com
