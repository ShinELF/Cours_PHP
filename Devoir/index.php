<?php
session_start();
// session_unset();
// session_destroy();

$error = '';

if (!isset($_SESSION['lists'])) {
    require_once __DIR__ . "/includes/list.php";
    $_SESSION['lists'] = $listContact;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newContact = $_POST['name'] ?? '';
    $newMail = $_POST['mail'] ?? '';

    if ($newContact) {
        if ($newMail) {
            array_unshift($_SESSION['lists'], [
                'id' => uniqid(),
                'name' => $newContact,
                'mail' => $newMail,
                'fav' => false,
                'edit' => false,
            ]);
        } else {
            $error = 'Il faut renseigner un email !';
        }
    } else {
        $error = 'Il faut renseigner un contact !';
    }

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once __DIR__ . '/includes/head.php'; ?>
    <title>Contact Book</title>
</head>

<body>
    <?php require_once __DIR__ . '/includes/header.php'; ?>
    <main>
        <h2>Contacts</h2>

        <form action="/" method="POST">
            <input type="text"
                name="name"
                placeholder="Prénom et Nom"
                autocomplete="off"
                autofocus>
            <input type="email"
                name="mail"
                placeholder="Adresse email"
                autocomplete="off"
                autofocus>
            <button type="submit">Ajouter</button>
        </form>
        <?php if ($error): ?>
            <p><?= $error ?></p>
        <?php endif; ?>

        <ul>
            <?php foreach ($_SESSION['lists'] as $list): ?>
                <li>
                    <span><?= $list['name'] ?></span>
                    <?php if ($list['edit']): ?>
                        <form action="/" method="POST">
                            <input type="text" name="editName">
                            <a href="/edit-name.php">
                                <button> Modifier</button>
                            </a>
                        </form>
                    <?php endif; ?>
                    <span><?= $list['mail'] ?></span>
                    <?php if ($list['edit']): ?>
                        <form action="/" method="GET"><input type="mail" name="editMail"></form>
                    <?php endif; ?>
                    <a href="/fav-contact.php?id=<?= $list['id'] ?>">
                        <button>
                            <?= $list['fav'] ? 'Annuler' : 'Favoris' ?>
                        </button>
                    </a>
                    <a href="/edit-contact.php?id=<?= $list['id'] ?>">
                        <button>
                            Modifier
                        </button>
                    </a>
                    <a href="/remove-contact.php?id=<?= $list['id'] ?>">
                        <button>
                            Supprimer
                        </button>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <?php require_once __DIR__ . '/includes/footer.php'; ?>
</body>

</html>