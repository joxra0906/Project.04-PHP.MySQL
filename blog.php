<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "personal_web";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM blog ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog - Personal Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Blog</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="gallery.html">Gallery</a>
            <a href="blog.php" class="active">Blog</a>
            <a href="contact.html">Contact</a>
        </nav>
    </header>

    <main>
        <?php while($row = $result->fetch_assoc()): ?>
            <article>
                <h2><?= htmlspecialchars($row['title']) ?></h2>
                <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
                <small>Diposting: <?= $row['created_at'] ?></small>
                <hr>
            </article>
        <?php endwhile; ?>
    </main>

    <footer>© 2025. All rights reserved.</footer>
</body>
</html>

<?php $conn->close(); ?>
