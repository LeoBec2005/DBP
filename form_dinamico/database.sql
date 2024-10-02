CREATE DATABASE cv_database;

USE cv_database;

CREATE TABLE cv_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    occupation VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    nacionality VARCHAR(255) NOT NULL,
    lvl_english INT NOT NULL,
    profile TEXT NOT NULL,
    skills TEXT,
    abilities TEXT,
    programming_lng TEXT
);
