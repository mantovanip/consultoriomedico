CREATE TABLE paciente(
	id 				INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome_paciente 	VARCHAR(150) NOT NULL,
    endereco 		VARCHAR(150) NOT NULL,
	bairro 			VARCHAR(150) NOT NULL,
    cep 			VARCHAR(150) NOT NULL,
    cidade 			VARCHAR(150) DEFAULT('Criciúma'),
    estado 			VARCHAR(150) DEFAULT('SC'),
    email			VARCHAR(150) NOT NULL,
    telefone1		CHAR(11) NOT NULL,
    telefone2		CHAR(11) NOT NULL,
    cpf 			CHAR(16) NOT NULL UNIQUE,
	rg				CHAR(9) NOT NULL,
    genero			VARCHAR(15) NOT NULL
    
)ENGINE = InnoDB;

 
 

