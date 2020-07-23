/* please give the DB the name: store; */
CREATE TABLE product (
                id VARCHAR(100) NOT NULL,
                brand VARCHAR(30) NOT NULL,
                price DECIMAL(7,2) NOT NULL,
                category VARCHAR(50) NOT NULL,
                PRIMARY KEY (id)
);


CREATE TABLE client (
                id_client INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(20) NOT NULL,
                prenom VARCHAR(20) NOT NULL,
                mail VARCHAR(50) NOT NULL,
                mot_passe VARCHAR(255) NOT NULL,
                date_naissance DATE,
                adresse VARCHAR(50),
                ville VARCHAR(20),
                PRIMARY KEY (id_client)
);


CREATE UNIQUE INDEX client_idx
 ON client
 ( prenom, nom );

CREATE UNIQUE INDEX client_idx1
 ON client
 ( mail );

CREATE TABLE commande (
                id_commande INT AUTO_INCREMENT NOT NULL,
                client_id INT NOT NULL,
                valide BOOLEAN DEFAULT false NOT NULL,
                date DATE,
                PRIMARY KEY (id_commande)
);


CREATE TABLE ligne (
                product_id VARCHAR(100) NOT NULL,
                commande_id INT NOT NULL,
                quantite SMALLINT DEFAULT 1 NOT NULL,
                prix DECIMAL(10,2) NOT NULL,
                PRIMARY KEY (article_id, commande_id)
);


ALTER TABLE ligne ADD CONSTRAINT article_ligne_fk
FOREIGN KEY (product_id)
REFERENCES product (id)
ON UPDATE NO ACTION;

ALTER TABLE commande ADD CONSTRAINT client_commande_fk
FOREIGN KEY (client_id)
REFERENCES client (id_client)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE ligne ADD CONSTRAINT commande_ligne_fk
FOREIGN KEY (commande_id)
REFERENCES commande (id_commande)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
