<?php
require_once 'config.php';
require_once 'functions.php';

$books = getAllBooks($pdo);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="add.php">Tambah Buku</a>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['author']) ?></td>
            <td><?= htmlspecialchars($book['published_year']) ?></td>
            <td>
                <a href="edit.php?id=<?= $book['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $book['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>