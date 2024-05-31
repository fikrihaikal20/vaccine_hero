<?php
include(dirname(__DIR__) . '/includes/head.php');
?>

<body>
    <?php
    include(dirname(__DIR__) . '/includes/header.php');
        ?>


    <?php
    include(dirname(__DIR__) . '/includes/sidebar.php');
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        ?>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <br>
                    <h2>Add E-wallet</h2>
                    <br>
                </div>
                <div class="col">
                </div>
            </div>
        </div>

        <form action="<?= BASE_URL ?>?url=admin/store_ewallet" method="POST">
            <div class=" form-group mb-3">
                <label>E-wallet name</label>
                <input id="exampleInputText1" type="text" class="form-control" placeholder="E-wallet name" name="name">
                <div class="form-text">please enter the E-wallet name in range(1-25) character/s , special character not
                    allowed
                    !</div>
            </div>
            <br>
            <button type="submit" class="btn btn-outline-primary" value="update" name="add_item">Submit</button>
            <button type=" submit" class="btn btn-outline-danger" value="cancel" name="cancel">Cancel</button>
            <br> <br>
        </form>
    </main>
    </div>
    </div>
    <?php
    include(dirname(__DIR__) . '/includes/footer.php');
        ?>
</body>