<?php

function getAllBooks($pdo) {
    $stmt = $pdo->query('SELECT * FROM books');
    return $stmt->fetchAll();
}

function addBook($pdo, $title, $author, $published_year) {
    $sql = "INSERT INTO books (title, author, published_year) VALUES (?, ?, ?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$title, $author, $published_year]);
}

function getBook($pdo, $id) {
    $stmt = $pdo->prepare('SELECT * FROM books WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch();
}

function updateBook($pdo, $id, $title, $author, $published_year) {
    $sql = "UPDATE books SET title = ?, author = ?, published_year = ? WHERE id = ?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$title, $author, $published_year, $id]);
}

function deleteBook($pdo, $id) {
    $sql = "DELETE FROM books WHERE id = ?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$id]);
}
?>