<?php // score_user.php
require('../includes/db.php');
require('../includes/header.php');
require('../includes/navbar.php');
$user_id = $_GET['user_id'];
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $judge_id = $_POST['judge_id'];
    $points = $_POST['points'];

    $stmt = $pdo->prepare("INSERT INTO scores (judge_id, user_id, points) VALUES (?, ?, ?)");
    $stmt->execute([$judge_id, $user_id, $points]);
    echo "<p class='success-msg'>Score submitted!</p>";
}
$user = $pdo->prepare("SELECT * FROM users WHERE id=?");
$user->execute([$user_id]);
$user = $user->fetch();

$judges = $pdo->query("SELECT id, display_name FROM judges ORDER BY display_name")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <h1 class="page-title">Score <?= htmlspecialchars($user['name']) ?></h1>
    <form method="POST" class="responsive-form">
        <select name="judge_id" required>
            <option value="">-- Select Judge --</option>
            <?php foreach ($judges as $judge): ?>
                <option value="<?= $judge['id'] ?>"><?= htmlspecialchars($judge['display_name']) ?></option>
            <?php endforeach; ?>
        </select>
        <label>Points (1-100):</label>
        <input type="number" name="points" placeholder="Points" min="1" max="100" required>
        <button type="submit">Submit Score</button>
    </form>
</div>
</body>
</html>