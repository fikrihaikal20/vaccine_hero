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
                    <h2>Add Vaksin</h2>
                    <br>
                </div>
                <div class="col">
                </div>
            </div>
        </div>

        <form action="<?= BASE_URL ?>?url=admin/store_vaksin" method="POST">
            <div class=" form-group mb-3">
                <label>Vaksin name</label>
                <input id="exampleInputText1" type="text" class="form-control" placeholder="vaksin name" name="name">
                <div class="form-text">please enter the vaksin name in range(1-25) character/s , special character not
                    allowed
                    !</div>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input id="validationTooltip01" type="text" class="form-control" placeholder="product brand"
                    name="description">
                <div class="form-text">please enter the description in range(1-25) character/s , special character not
                    allowed !
                </div>
            </div>
            <div class="form-group">
                <label>Manufacturer</label>
                <input id="validationTooltip01" type="text" class="form-control" placeholder="product tags" name="manufacturer">
                <div class="form-text">please enter manufacturer for the product in range(1-250) character/s , special character
                    not
                    allowed !</div>
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