<?php
require 'db.php';

$id = $_GET['id'] ?? null;
if ($id) {
    $conn->query("DELETE FROM products WHERE id=$id");
}
header("Location: index.php");
exit;
