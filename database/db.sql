CREATE TABLE roles (

    id_rol         INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol     VARCHAR (255) NOT NULL UNIQUE KEY,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11)

)ENGINE=InnoDB;
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('ADMINISTRADOR','2024-08-01 23:58:10','1');
INSERT INTO roles (nombre_rol,fyh_creacion,estado) VALUES ('COACH','2024-08-01 23:58:10','1');


CREATE TABLE usuarios (

    id_usuario   INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres      VARCHAR (255) NOT NULL,
    rol_id       INT (11) NOT NULL,
    email        VARCHAR (255) NOT NULL UNIQUE KEY,
    password     TEXT NOT NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (rol_id) REFERENCES roles (id_rol)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO usuarios (nombres,rol_id,email,password,fyh_creacion,estado)
VALUES ('Vidal','1','admin','admin','2024-07-29 11:30:10','1');


CREATE TABLE configuracion_instituciones (

    id_config_institucion   INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_institucion      VARCHAR (255) NOT NULL,
    logo                    VARCHAR (255) NULL,
    telefono                VARCHAR (255) NULL,
    correo                  VARCHAR (255) NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11)


)ENGINE=InnoDB;
INSERT INTO configuracion_instituciones (nombre_institucion,logo,telefono,correo,fyh_creacion,estado)
VALUES ('Just Kids Home','logo_home.png','55136495','justkidsacademy502@gmail.com','2024-09-08 13:10:10','1');


CREATE TABLE gestiones (

    id_gestion             INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gestion                VARCHAR (255) NOT NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11)


)ENGINE=InnoDB;
INSERT INTO gestiones (gestion,fyh_creacion,estado)
VALUES ('Gestion 2024','2024-09-08 13:10:10','1');


CREATE TABLE niveles (

    id_nivel     INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gestion_id   INT (11) NOT NULL,
    nivel        VARCHAR (255) NOT NULL,
    turno        VARCHAR (255) NOT NULL,
    horario      VARCHAR (255) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (gestion_id) REFERENCES gestiones (id_gestion)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO niveles (gestion_id,nivel,turno,horario,fyh_creacion,estado)
VALUES ('1','Startes','Vespertino','4:00PM-5:00PM','2024-07-29 11:30:10','1');