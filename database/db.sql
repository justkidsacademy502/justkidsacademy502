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
VALUES ('Just Kids Academy','logo_home.png','55136495','justkidsacademy502@gmail.com','2024-09-08 13:10:10','1');


CREATE TABLE gestiones (

    id_gestion             INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gestion                VARCHAR (255) NOT NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11)


)ENGINE=InnoDB;
INSERT INTO gestiones (gestion,fyh_creacion,estado)
VALUES ('Gestion 2024','2024-09-08 13:10:10','1');




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
VALUES ('1','STARTERS','MATUTINO','2024-07-29 11:30:10','1');



CREATE TABLE grados (

    id_grado     INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nivel_id     INT (11) NOT NULL,
    bloque       VARCHAR (255) NOT NULL,
    paralelo     VARCHAR (255) NOT NULL,
    horario      VARCHAR (255) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (nivel_id) REFERENCES niveles (id_nivel)  on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO grados (nivel_id,bloque,paralelo,fyh_creacion,estado)
VALUES ('1','STARTERS - BLOCK 1','A','2024-07-29 11:30:10','1');




CREATE TABLE estudiantes (

    id_estudiante       INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    persona_id          INT (11) NOT NULL,
    nivel_id            INT (11) NOT NULL,
    grado_id            INT (11) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (persona_id) REFERENCES personas (id_persona)  on delete no action on update cascade,
FOREIGN KEY (nivel_id) REFERENCES niveles (id_nivel)  on delete no action on update cascade,
FOREIGN KEY (grado_id) REFERENCES grados (id_grado)  on delete no action on update cascade

)ENGINE=InnoDB;



CREATE TABLE ppffs (

    id_ppff                   INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    estudiante_id             INT (11) NOT NULL,
    nombres_apellidos_ppff    VARCHAR (50) NOT NULL,
    dpi_ppf                  VARCHAR (25) NOT NULL,
    celular_ppff              VARCHAR (25) NOT NULL,
    relacion_ppff             VARCHAR (30) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

FOREIGN KEY (estudiante_id) REFERENCES estudiantes (id_estudiante)  on delete no action on update cascade

)ENGINE=InnoDB;



CREATE TABLE materias (

    id_materia                INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_materia            VARCHAR (50) NOT NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11)


)ENGINE=InnoDB;
INSERT INTO materias (nombre_materia,fyh_creacion,estado)
VALUES ('BLOQUE 1','2024-09-08 13:10:10','1');



CREATE TABLE pagos (

    id_pago             INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    estudiante_id       INT (11) NOT NULL,
    mes_pagado          VARCHAR (50) NOT NULL,
    monto_pagado        VARCHAR (15) NOT NULL,
    descuento_pago      VARCHAR (50) NOT NULL,
    fecha_pagado        VARCHAR (20) NOT NULL,
    proximo_pago        VARCHAR (50) NOT NULL,
    no_transaccion      VARCHAR (50) NOT NULL,
    mensualidad_precio  VARCHAR (50) NOT NULL,
    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),


FOREIGN KEY (estudiante_id) REFERENCES estudiantes (id_estudiante)  on delete no action on update cascade

)ENGINE=InnoDB;



CREATE TABLE asignaciones (

    id_asignacion      INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    docente_id         INT (11) NOT NULL,
    nivel_id           INT (11) NOT NULL,
    grado_id           INT (11) NOT NULL,
    materia_id         INT (11) NOT NULL,

    
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (docente_id) REFERENCES docentes (id_docente)  on delete no action on update cascade,
    FOREIGN KEY (nivel_id) REFERENCES niveles (id_nivel)  on delete no action on update cascade,
    FOREIGN KEY (grado_id) REFERENCES grados (id_grado)  on delete no action on update cascade,
    FOREIGN KEY (materia_id) REFERENCES materias (id_materia)  on delete no action on update cascade



)ENGINE=InnoDB;



CREATE TABLE calificaciones (

    id_calificacion    INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    docente_id         INT (11) NOT NULL,
    estudiante_id      INT (11) NOT NULL,
    grado_id           INT (11) NOT NULL,
    nota1              VARCHAR (20) NOT NULL,
    nota2              VARCHAR (20) NOT NULL,
    nota3              VARCHAR (20) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (docente_id) REFERENCES docentes (id_docente)  on delete no action on update cascade,
    FOREIGN KEY (estudiante_id) REFERENCES estudiantes (id_estudiante)  on delete no action on update cascade,
    FOREIGN KEY (grado_id) REFERENCES grados (id_grado)  on delete no action on update cascade

    

)ENGINE=InnoDB;



CREATE TABLE asistencias (

    id_asistencia      INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    docente_id         INT (11) NOT NULL,
    estudiante_id      INT (11) NOT NULL,
    grado_id           INT (11) NOT NULL,
    presente           VARCHAR (50) NOT NULL,
    fecha_asistencia   VARCHAR (50) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (docente_id) REFERENCES docentes (id_docente)  on delete no action on update cascade,
    FOREIGN KEY (estudiante_id) REFERENCES estudiantes (id_estudiante)  on delete no action on update cascade,
    FOREIGN KEY (grado_id) REFERENCES grados (id_grado)  on delete no action on update cascade

    

)ENGINE=InnoDB;


CREATE TABLE permisos (

    id_permiso          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_url          VARCHAR (150) NOT NULL,
    url                 text NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11)

)ENGINE=InnoDB;



CREATE TABLE roles_permisos (

    id_rol_permiso      INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,

    rol_id              INT (11) NOT NULL,
    permiso_id          INT (11) NOT NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),
    
    FOREIGN KEY (rol_id) REFERENCES roles (id_rol)  on delete no action on update cascade,
    FOREIGN KEY (permiso_id) REFERENCES permisos (id_permiso)  on delete no action on update cascade

)ENGINE=InnoDB;


CREATE TABLE observaciones (

    id_observacion     INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    estudiante_id      INT (11) NOT NULL,
    grado_id           INT (11) NOT NULL,
    nivel              VARCHAR (50) NOT NULL,
    bloque             VARCHAR (50) NOT NULL,
    archivo            VARCHAR(255) NULL,
   
    fyh_creacion      DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado            VARCHAR (11),

    FOREIGN KEY (estudiante_id) REFERENCES estudiantes (id_estudiante)  on delete no action on update cascade,
    FOREIGN KEY (grado_id) REFERENCES grados (id_grado)  on delete no action on update cascade

    

)ENGINE=InnoDB;
