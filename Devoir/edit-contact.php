<?php

session_start();

require_once __DIR__ . "/includes/list.php";

$id = $_GET['id'] ?? '';
$edit = &$_SESSION['lists'] ?? [];

if ($id && count($edit)) {
    $editIndex = array_search($id, array_column($edit, 'id'));

    if ($editIndex !== false) {
        $edit[$editIndex]['edit'] = !$edit[$editIndex]['edit'];
    }
}

header('Location: /');
exit;
