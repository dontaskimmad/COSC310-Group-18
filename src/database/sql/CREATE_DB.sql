CREATE DATABASE IF NOT EXISTS robot_database;

USE robot_database;
CREATE TABLE IF NOT EXISTS rdictionary(
  ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Word     VARCHAR(100) NOT NULL,
  Type  VARCHAR(20) NOT NULL
);