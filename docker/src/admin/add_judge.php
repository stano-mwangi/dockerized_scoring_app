<?php // add_judge.php
require('../includes/db.php');
require('../includes/header.php');
require('../includes/navbar.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $display_name = $_POST['display_name'];
    $stmt = $pdo->prepare("INSERT INTO judges (username, display_name) VALUES (?, ?)");
    $stmt->execute([$username, $display_name]);
    echo "<p class='success-msg'>Judge added!</p>";
}
?>
<div class="container">
    <h1 class="page-title">Add Judge</h1>
    <form method="POST" class="responsive-form">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" required>
        <label>Display Name:</label>
        <input type="text" name="display_name" placeholder="Display Name" required>
        <button type="submit">Add Judge</button>
    </form>
</div>
</body>
</html>