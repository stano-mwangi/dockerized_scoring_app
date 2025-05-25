

## 📂 Folder Structure

- `admin/`: Admin interface to add judges.
- `judge/`: Interface for judges to view participants and assign scores.
- `public/`: Public scoreboard.
- `includes/`: Shared PHP code (DB connection, headers).
- `assets/`: CSS and JS assets.
- `sql/`: SQL schema for database setup.

## 🛠 Database Schema

```sql
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
```

## 💡 Assumptions

- Judges and users are identified uniquely.
- Judges can assign a score to each participant.
- No authentication implemented (for demo purposes).

## ✅ Design Choices

- Vanilla HTML/CSS/JS without frameworks for clarity.
- PDO for database abstraction.
- Logical separation of concerns.

## ⏳ Features I'd Add With More Time

- Authentication for admins and judges.
- Score auditing and modification.
- Responsive design.
- Export functionality (PDF/CSV).