<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage EWallet Methods</title>
</head>
<body>
    <h2>Manage EWallet Methods</h2>
    <a href="<?= BASE_URL ?>?url=ewallet/create">Add EWallet Method</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Method Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ewallets as $ewallet): ?>
                <tr>
                    <td><?= $ewallet->id ?></td>
                    <td><?= $ewallet->MethodName ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>?url=ewallet/edit/<?= $ewallet->id ?>">Edit</a>
                        <a href="<?= BASE_URL ?>?url=ewallet/delete/<?= $ewallet->id ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
