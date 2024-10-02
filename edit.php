<?php
require_once 'config.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    addBook($pdo, $_POST['title'], $_POST['author'], $_POST['published_year']);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form method="post">
        <div>
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="author">Penulis:</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div>
            <label for="published_year">Tahun Terbit:</label>
            <input type="number" id="published_year" name="published_year" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali ke Daftar</a>
</body>
</html>
