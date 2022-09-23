CREATE TABLE agendamento(
id 				 INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_paciente 	 INT NOT NULL,
id_medico	 	 INT NOT NULL,
id_atendente	 INT NOT NULL,
data_agendamento DATE  NOT NULL,
hrinicial		 TIME  NOT NULL,
hrfinal			 TIME  NOT NULL,
	
    CONSTRAINT  fk_paciente_id
    FOREIGN KEY (id_paciente)
    REFERENCES paciente(id),
    
    CONSTRAINT   fk_medico_id
    FOREIGN KEY  (id_medico)
    REFERENCES   medico(id),
    
    CONSTRAINT  fk_atendente_id
    FOREIGN KEY (id_atendente)
    REFERENCES  atendente(id)
    
)ENGINE = InnoDB;


