<?php // select_user.php
require('../includes/db.php');
require('../includes/header.php');
require('../includes/navbar.php');
$users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <h1 class="page-title">Select a user to score</h1>
    <ul class="user-list">
        <?php foreach ($users as $index => $user): ?>
            <li>
                <?= $index + 1 ?>. 
                <a href="score_user.php?user_id=<?= $user['id'] ?>">
                    <?= htmlspecialchars($user['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
