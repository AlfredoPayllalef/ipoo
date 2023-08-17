.
CREATE DATABASE bdIngresantes;

CREATE TABLE ingresantes(
    inombre varchar(150),
    iapellido varchar(150),
    icorreo varchar(150),
    ilegajo bigint,
    idni bigint
    PRIMARY KEY (igdni)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE activiades(
    aidActividades bigint AUTO_INCREMENT,
    adescripcionCorta varchar(150),
    adescriccionLarga varchar(500),
    PRIMARY KEY (aidActividades)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE modulos(
    midModulos varchar(150),
    mdescripcionModulos varchar(150),
    mtopePrecio bigint,
    mcosto bigint,
    mhorarioInicio date,
    mhorarioCierre date,
    mfechaInicio date,
    mfechaFin date,
    midActividades bigint;
    PRIMARY KEY (midModulos)
    FOREIGN KEY (midActividades) REFERENCES activiades(aidActividades)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE modulosLinea(
     mlinkReunion varchar(200),
     midModulos varchar(150),
     PRIMARY KEY (mlinkReunion),
     PRIMARY KEY (midModulos)
     FOREIGN KEY (midModulos) REFERENCES modulos(midModulos)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,

) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE inscripcion(
    insid_inscripcion bigint AUTO_INCREMENT,
    insfecha date,
    inscosto bigint,
    igdni bigint,
    midModulos varchar(150),
    PRIMARY KEY (.57)
    FOREIGN KEY (igdni) REFERENCES ingresantes(idni)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    FOREIGN KEY (midModulos) REFERENCES modulos(midModulos)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
