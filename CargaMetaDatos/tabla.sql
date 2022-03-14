CREATE TABLE estudiantes (
id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
cedula_estudiante VARCHAR(255) NOT NULL,
apellido1 VARCHAR(255) ,
apellido2 VARCHAR(255) ,
nombre1 VARCHAR(255) ,
nombre2 VARCHAR(255) ,
sexo INTEGER ,
correo_institucional VARCHAR(255) ,
telefono_celular VARCHAR(255) ,
telefono_fijo VARCHAR(255) ,
tipo_matricula VARCHAR(255) ,
periodo_academico_principal INTEGER ,
jornada_principal VARCHAR(255) ,
jornada_operativa VARCHAR(255) 
);