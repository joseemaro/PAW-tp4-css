USE pawtp3;

CREATE TABLE appointments (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT NOT NULL,
    email TEXT NOT NULL,
    telefono TEXT NOT NULL,
    edad SMALLINT,
    talla_calzado SMALLINT,
    altura SMALLINT,
    fecha_nacimiento DATE NOT NULL,
    color_pelo TEXT,
    fecha_turno DATE NOT NULL,
    horario_turno TIME NOT NULL,
    diagnostico MEDIUMBLOB
);
