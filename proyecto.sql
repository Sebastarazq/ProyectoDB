CREATE TABLE tipo_usuario (
    tpus_id int(20) NOT NULL,
    tpus_administrador BOOLEAN,
    tpus_empresario BOOLEAN,
    tpus_coordinador BOOLEAN,
    PRIMARY KEY (tpus_id),
);

CREATE TABLE usuario (
    us_id int(20) NOT NULL,
    us_nombre varchar(255),
    us_correo varchar(255),
    us_fecha_nacimiento datetime NOT NULL,
    fk_tpus_id int(20) NOT NULL,
    PRIMARY KEY (us_id),
    FOREIGN KEY (fk_tpus_id) REFERENCES tipo_usuario(tpus_id),
);

CREATE TABLE estudiantes (
    es_id int(20) NOT NULL,
    es_universidad varchar(255),
    es_semestre int(20),
    es_aprobado BOOLEAN,
    es_promedio float(20),
    fk_us_id int(20) NOT NULL,
    PRIMARY KEY (es_id),
    FOREIGN KEY (fk_us_id) REFERENCES usuario(us_id),
);

CREATE TABLE grupo (
    gru_id int(20) NOT NULL,
    gru_nombre varchar(255),
    fk_id_iniciativa int(20) NOT NULL,
    PRIMARY KEY (gru_id),
    FOREIGN KEY (fk_id_iniciativa) REFERENCES iniciativa(in_id),
);

CREATE TABLE lider (
    li_id int(20) NOT NULL,
    fk_es_id int(20) NOT NULL,
    fk_gru_id int(20) NOT NULL,
    PRIMARY KEY (li_id),
    FOREIGN KEY (fk_es_id) REFERENCES estudiantes(es_id),
    FOREIGN KEY (fk_gru_id) REFERENCES grupo(gru_id),
);

CREATE TABLE est_grupo (
    estg_id int(20) NOT NULL,
    fk_es_id int(20) NOT NULL,
    fk_gru_id int(20) NOT NULL,
    PRIMARY KEY (estg_id),
    FOREIGN KEY (fk_es_id) REFERENCES estudiantes(es_id),
    FOREIGN KEY (fk_gru_id) REFERENCES grupo(gru_id),
);

CREATE TABLE iniciativas (
    in_id int(20) NOT NULL,
    in_texto varchar(255),
    in_pdf MEDIUMBLOB,
    in_enlace varchar(255),
    fk_com_id int(20) NOT NULL,
    fk_cal_id int(20) NOT NULL,
    PRIMARY KEY (in_id),
    FOREIGN KEY (fk_com_id) REFERENCES comentario(com_id),
    FOREIGN KEY (fk_cal_id) REFERENCES calificacion(cal_id), 
);

CREATE TABLE comentario (
    com_id int(20) NOT NULL,
    com_texto varchar(255),
    com_pdf MEDIUMBLOB,
    com_enlace varchar(255),
    fk_us_id int(20) NOT NULL,
    PRIMARY KEY (com_id),
    FOREIGN KEY (fk_us_id) REFERENCES usuario(us_id),
); 

CREATE TABLE calificacion (
    cal_id int(20) NOT NULL,
    cal_puntaje int(20),
    fk_us_id int(20) NOT NULL,
    PRIMARY KEY (cal_id),
    FOREIGN KEY (fk_us_id) REFERENCES usuario(us_id),
);