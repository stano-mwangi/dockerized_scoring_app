# dockerized_scoring_app
A minimalist web-based system for scoring participants and viewing a live scoreboard. Judges can assign scores, and results are ranked publicly.

# Tech Stack
- PHP 8.2 (PDO)
- MariaDB 10.5
- Apache (mod_rewrite enabled)
- Docker + Docker Compose
- phpMyAdmin (for easy database access)

# Quick Start
1. Clone this repo and navigate into the directory.
2. Run docker-compose up -d
3. Access the app at:
   - App: http://localhost:8080
   - phpMyAdmin: http://localhost:8081

# Structure
- docker/ – Docker-related files and DB init SQL
- src/ – PHP codebase with pages:
  - public/scoreboard.php
  - judge/select_user.php
  - judge/score_user.php
  - admin/add_judge.php

  # Database Schema

sql
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

# Assumptions

- Judges and users are identified uniquely.
- Judges can assign a score to each participant.
- No authentication implemented (for demo purposes).

# Design Choices

- Vanilla HTML/CSS/JS without frameworks for clarity.
- PDO for database abstraction.
- Logical separation of concerns.

