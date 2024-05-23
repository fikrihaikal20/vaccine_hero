<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
    <h1>Users</h1>
    <a href="<?= BASE_URL ?>user/create">Create New User</a>
    <ul>
        <?php foreach($data['users'] as $user): ?>
            <li><?= $user->Name ?> (<?= $user->Email ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
