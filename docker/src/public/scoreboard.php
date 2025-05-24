<?php require('../includes/db.php'); require('../includes/header.php'); require('../includes/navbar.php');
$results = $pdo->query("
    SELECT users.name, SUM(points) as total
    FROM users
    LEFT JOIN scores ON users.id = scores.user_id
    GROUP BY users.id
    ORDER BY total DESC
")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <h1 class="page-title">Scoreboard</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Total Points</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                    <tr class="score-highlight">
                        <td><?= ($row['name']) ?></td>
                        <td><?= ($row['total']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>