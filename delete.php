<?php
require_once 'config.php';
require_once 'functions.php';

$id = $_GET['id'] ?? null;
if ($id) {
    deleteBook($pdo, $id);
}

header('Location: index.php');
exit;