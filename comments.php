<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Comment Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <form method="POST">
        <textarea name="comment" placeholder="Write a comment..." required></textarea>
        <button type="submit">Post</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment = htmlspecialchars($_POST['comment']);
        echo "<p><strong>{$_SESSION['username']}:</strong> $comment</p>";
    }
    ?>
</body>
</html>
