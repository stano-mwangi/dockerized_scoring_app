<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Scoring App Home</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f4f4;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    header {
      background: #283593;
      color: white;
      padding: 20px;
      text-align: center;
    }

    main {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }

    h1 {
      margin-bottom: 10px;
    }

    .nav-buttons {
      margin-top: 30px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .nav-buttons a {
      padding: 12px 24px;
      background-color: #3f51b5;
      color: white;
      text-decoration: none;
      border-radius: 6px;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    .nav-buttons a:hover {
      background-color: #303f9f;
    }

    footer {
      background: #ddd;
      text-align: center;
      padding: 10px;
      font-size: 14px;
    }

    @media (max-width: 600px) {
      .nav-buttons a {
        width: 100%;
        text-align: center;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to the Scoring App</h1>
    <p>Judge participants, manage scores, and view the leaderboard</p>
  </header>

  <main>
    <div class="nav-buttons">
      <a href="/src/judge/list_users.php">Judge Panel</a>
      <a href="/src/admin/add_judge.php">Admin Panel</a>
      <a href="/src/public/scoreboard.php">View Scoreboard</a>
    </div>
  </main>

  <footer>
    &copy; <?= date("Y") ?> Scoring App. All rights reserved.
  </footer>

</body>
</html>
