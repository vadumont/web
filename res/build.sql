-- Creation de la table utilisiateur

CREATE TABLE utilisateur (
    mail VARCHAR(128) NOT NULL UNIQUE,
    pseudo VARCHAR(128) NOT NULL UNIQUE,
    mdp VARCHAR(32) NOT NULL,
    CONSTRAINT PK_U_MAIL PRIMARY KEY (mail)
);


-- Creation de la table personnage

CREATE TABLE personnage (
    perso_id INT NOT NULL AUTO_INCREMENT,
    perso_nom VARCHAR(50) NOT NULL UNIQUE,
    perso_niveau INT NOT NULL,
    date_creation DATE NOT NULL,
    user_id VARCHAR(128) NOT NULL UNIQUE,
    CONSTRAINT PK_P_ID PRIMARY KEY (perso_id),
    CONSTRAINT FK_P_USER_ID FOREIGN KEY (user_id) REFERENCES utilisateur(mail)

);

CREATE TABLE combat (
    combat_id INT NOT NULL AUTO_INCREMENT,
    attaquant_id INT NOT NULL,
    victime_id INT NOT NULL,
    attaquant_gagne BOOL NOT NULL,
    date_combat DATE NOT NULL,
    CONSTRAINT PK_C_ID PRIMARY KEY (combat_id),
    CONSTRAINT FK_C_A_ID FOREIGN KEY (attaquant_id) REFERENCES personnage(perso_id),
    CONSTRAINT FK_C_V_ID FOREIGN KEY (victime_id) REFERENCES personnage(perso_id)
);


-- Insertion des utilisateurs

INSERT INTO utilisateur VALUES
    ('david@test.fr', 'David63', md5('david')),
    ('theking@test.fr', 'The King', md5('theking')),
    ('romuald@test.fr', 'Romuald', md5('romuald')),
    ('camilledu38@test.fr', 'Camilledu38', md5('camille'));


-- Insertion des personnages

INSERT INTO personnage VALUE  (0,'Léodagan', 30, '2019/05/27', 'david@test.fr');
INSERT INTO personnage VALUE  (0,'Le Roi Arthur', 52, '2019/05/27', 'theking@test.fr');
INSERT INTO personnage VALUE  (0,'Perceval', 18, '2019/05/27', 'romuald@test.fr');


-- Insertion des combats
INSERT INTO combat VALUE (0, 1, 3, 1, '2019/06/03');
INSERT INTO combat VALUE (0, 2, 1, 1, '2019/06/03');

-- md5('value')
-- date AAAA-MM-JJ 