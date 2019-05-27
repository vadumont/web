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

-- md5('value')
-- date AAAA-MM-JJ 