CREATE TABLE medico(
	id		    	INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_medico     VARCHAR(150) NOT NULL,
    crm				CHAR(30) NOT NULL UNIQUE,
    especialidade	VARCHAR(1) NOT NULL
    
)ENGINE = InnoDB;

