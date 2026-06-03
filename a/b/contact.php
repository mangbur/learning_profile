<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Kontak Saya</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">Tentang</a>
        <a href="contact.php">Kontak</a>
    </nav>
</header>

<section class="content">

    <?php
    if(isset($_POST['kirim'])) {
        $nama = $_POST['nama'];
        $pesan = $_POST['pesan'];

        echo "<p class='success'>Terima kasih <b>$nama</b>, pesan Anda sudah dikirim.</p>";
    }
    ?>

    <form method="POST">
        <input type="text" name="nama" placeholder="Nama Anda" required>

        <textarea name="pesan" placeholder="Tulis pesan..." required></textarea>

        <button type="submit" name="kirim">Kirim</button>
    </form>

</section>

<footer>
    <p>&copy; <?php echo date('Y'); ?> - Web Profil PHP</p>
</footer>

</body>
</html>