<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Vaksin</title>
</head>
<body>
    <h2>Manage Vaksin</h2>
    <a href="<?= BASE_URL ?>?url=vaksin/create">Add Vaksin</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Manufacturer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vaksins as $vaksin): ?>
                <tr>
                    <td><?= $vaksin->id ?></td>
                    <td><?= $vaksin->Name ?></td>
                    <td><?= $vaksin->Description ?></td>
                    <td><?= $vaksin->Manufacturer ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>?url=vaksin/edit/<?= $vaksin->id ?>">Edit</a>
                        <a href="<?= BASE_URL ?>?url=vaksin/delete/<?= $vaksin->id ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
