<?php

session_start();

require_once __DIR__ . "/includes/list.php";

$id = $_GET['id'] ?? '';
$fav = &$_SESSION['lists'] ?? [];

if ($id && count($fav)) {
    $favIndex = array_search($id, array_column($fav, 'id'));

    if ($favIndex !== false) {
        $fav[$favIndex]['fav'] = !$fav[$favIndex]['fav'];
    }
}

header('Location: /');
exit;
