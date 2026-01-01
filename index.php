<?php
require 'config.php';

$stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista użytkowników</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
        th { background: #eee; }
    </style>
</head>
<body>

<h1>Użytkownicy</h1>

<p>Tutaj muszą być użytkownicy.</p>

<table>
    <tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Email</th>
        <th>Opis</th>
        <th>Data utworzenia</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['username']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td><?= htmlspecialchars($user['description']) ?></td>
        <td><?= htmlspecialchars($user['created_at']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>