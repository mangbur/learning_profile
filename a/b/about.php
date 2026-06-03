<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Tentang Saya</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Tentang</a>
        <a href="contact.php">Kontak</a>
    </nav>
</header>

<section class="content">
    <h2>Perkenalan</h2>
    <p>
        Halo, saya seorang programmer yang sedang belajar PHP,
        HTML, CSS, dan JavaScript.
    </p>

    <h2>Skill</h2>
    <ul>
        <li>HTML & CSS</li>
        <li>PHP Native</li>
        <li>JavaScript</li>
        <li>MySQL</li>
    </ul>
</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Web Profil PHP</p>
</footer>

</body>
</html>