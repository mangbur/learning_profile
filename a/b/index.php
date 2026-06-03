<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Profil Saya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Profil Saya</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </header>

    <section class="hero">
        <img src="assets/profile.jpg.jpeg" width="300" height= "200" alt="Foto Profil">

        <?php 
            $nama = "Burhan Abas";
            $pekerjaan = "Web Developer";
        ?>

        <h2><?php echo $nama; ?></h2>
        <p><?php echo $pekerjaan; ?></p>

        <button onclick="alert('Selamat datang di website profil saya!')">
            Klik Saya
        </button>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Web Profil PHP</p>
    </footer>

</body>
</html>