<?php
include "includes/head.php";
?>

<body>
    <?php
    include "includes/header.php"
        ?>


    <?php
    include "includes/sidebar.php";
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        ?>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <h2>E-Wallet details</h2>
                    <br>
                </div>
                <div class="col">
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none; color:black;"
                    href="products.php?add=1"> &nbsp;&nbsp;Add&nbsp;&nbsp;</a></button>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                </thead>

                <tbody>
                    <?php foreach ($data['wallets'] as $wallet): ?>


                        <tr>
                            <td><?php echo $wallet->id ?></td>
                            <td><?php echo $wallet->MethodName ?></td>
                            <td>
                                <button type="button" class="btn pull-left btn-outline-warning"><a
                                        style="text-decoration: none; color:black;"
                                        href="<?= BASE_URL ?>?url=admin/edit_ewallet&id=<?= htmlspecialchars($wallet->id) ?>">Edit</a></button>
                                <button type="button" class="btn pull-left btn-outline-danger"><a
                                        style="text-decoration: none; color:black;"
                                        href="<?= BASE_URL ?>?url=admin/delete_ewallet/<?= htmlspecialchars($wallet->id) ?>">Delete</a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>
    <?php
    include "includes/footer.php"
        ?>
</body>