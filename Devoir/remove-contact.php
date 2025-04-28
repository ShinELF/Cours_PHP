<?php

session_start();

require_once __DIR__ . "/includes/list.php";

$id = $_GET['id'] ?? '';
$delete = &$_SESSION['lists'] ?? [];

if ($id && count($delete)) {
    $deleteIndex = array_search($id, array_column($delete, 'id'));

    if ($deleteIndex !== false) {
        array_splice($delete, $deleteIndex, 1);
    }
}

header('Location: /');
exit;
