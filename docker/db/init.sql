CREATE DATABASE IF NOT EXISTS scoring_app;
USE scoring_app;

CREATE TABLE judges (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  display_name VARCHAR(100) NOT NULL
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

CREATE TABLE scores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judge_id INT,
  user_id INT,
  points INT,
  FOREIGN KEY (judge_id) REFERENCES judges(id),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO users (name) VALUES ('Alice'), ('Bob'), ('Charlie');