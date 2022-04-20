
CREATE TABLE utilisateurs(
    id INT AUTO_INREMENT,
    firstnameVARCHAR(100),
    lastname VARCHAR(100),
    description TEXT,
    pseudo VARCHAR(100),
    email VARCHAR(100),
    password TEXT,
    type VARCHAR(100),
    ip VARCHAR(20),
    token TEXT,
    date_inscription DATETIME
)

CREATE TABLE formation(
    id INT PRIMARY KEY AUTO_INREMENT,
    titre VARCHAR(100),
    description TEXT,
    image VARCHAR(100)
)

CREATE TABLE lecon(
    id INT PRIMARY KEY AUTO_INREMENT,
    name VARCHAR(100),
    video VARCHAR(300),
    description TEXT
)
