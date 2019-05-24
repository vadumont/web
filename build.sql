CREATE TABLE utilisateur (
    mail VARCHAR(128) NOT NULL UNIQUE,
    pseudo VARCHAR(128) NOT NULL UNIQUE,
    mdp VARCHAR(32) NOT NULL,
    CONSTRAINT PK_U_MAIL PRIMARY KEY (mail)
);

INSERT INTO utilisateur VALUES (
    'david@test.fr', 'David63', md5('david')
);

-- md5('value')