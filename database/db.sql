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
    rol_id       INT (11) NOT NULL,
    email        VARCHAR (255) NOT NULL UNIQUE KEY,
    password     TEXT NOT NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (rol_id) REFERENCES roles (id_rol)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO usuarios (rol_id,email,password,fyh_creacion,estado)
VALUES ('1','admin','$2y$10$bRtoP72flfrP50ghbi0Wjewhnzao3sGU/c6X08g.n8HzrW4e84xJW','2024-07-29 11:30:10','1');


CREATE TABLE personas (

    id_persona   INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario_id          INT (11) NOT NULL,
    nombres          VARCHAR (50) NOT NULL,
    apellidos        VARCHAR (50) NOT NULL,
    dpi              VARCHAR (25) NOT NULL,
    celular          VARCHAR (25) NOT NULL,
    fecha_nacimiento VARCHAR (25) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (usuario_id) REFERENCES usuarios (id_usuario)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO personas (usuario_id,nombres,apellidos,dpi,celular,fecha_nacimiento,fyh_creacion,estado)
VALUES ('1','Jhony Vidal','Pirir Ortiz','123456789122','12345678','10/10/1999','2024-07-29 11:30:10','1');


CREATE TABLE administrativos (

    id_administrativo   INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id          INT (11) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (persona_id) REFERENCES personas (id_persona)  on delete no action on update cascade

)ENGINE=InnoDB;



CREATE TABLE docentes (

    id_docente   INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id          INT (11) NOT NULL,
    fecha_contratacion  VARCHAR (25) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (persona_id) REFERENCES personas (id_persona)  on delete no action on update cascade

)ENGINE=InnoDB;



CREATE TABLE estudiantes (

    id_estudiante       INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id          INT (11) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (persona_id) REFERENCES personas (id_persona)  on delete no action on update cascade

)ENGINE=InnoDB;



CREATE TABLE ppffs (

    id_ppff       INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id          INT (11) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (persona_id) REFERENCES personas (id_persona)  on delete no action on update cascade

)ENGINE=InnoDB;


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
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (gestion_id) REFERENCES gestiones (id_gestion)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO niveles (gestion_id,nivel,turno,fyh_creacion,estado)
VALUES ('1','Startes','Vespertino','2024-07-29 11:30:10','1');



CREATE TABLE grados (

    id_grado     INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nivel_id     INT (11) NOT NULL,
    curso        VARCHAR (255) NOT NULL,
    paralelo     VARCHAR (255) NOT NULL,
    horario      VARCHAR (255) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (nivel_id) REFERENCES niveles (id_nivel)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO grados (nivel_id,curso,paralelo,fyh_creacion,estado)
VALUES ('1','STARTERS-BLOCK 1','A','2024-07-29 11:30:10','1');