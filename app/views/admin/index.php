<?php
include "includes/head.php";
?>

<body>

  <?php
  include "includes/header.php";
  ?>

  <div class=" container-fluid">

    <?php
    include "includes/sidebar.php";
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <br>
      <div class="row">
        <div class="card" style="width: 25rem;margin-bottom: 20px ;margin-right: 200px ;">
          <div class="card-body">
            <h5 class="card-title">Pesanan</h5>
            <p class="card-text">Menampilkan dan merubah detail pesanan.</p>
            <a href="<?= BASE_URL ?>?url=admin/order" class="btn btn-primary">Kelola Pesanan</a>
          </div>
        </div>
        <div class="card" style="width: 25rem;margin-bottom: 20px ;">
          <div class="card-body">
            <h5 class="card-title">Vaksin</h5>
            <p class="card-text">Menampilkan dan merubah detail vaksin.</p>
            <a href="<?= BASE_URL ?>?url=admin/vaksin" class="btn btn-primary">Kelola Vaksin</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card" style="width: 25rem;margin-top: 20px ;margin-right: 200px ;">
          <div class="card-body">
            <h5 class="card-title">Pengguna</h5>
            <p class="card-text">Menampilkan dan merubah detail pengguna.</p>
            <a href="<?= BASE_URL ?>?url=admin/user" class="btn btn-primary">Kelola Pengguna</a>
          </div>
        </div>
        <div class="card" style="width: 25rem;margin-top: 20px ;">
          <div class="card-body">
            <h5 class="card-title">E-wallet</h5>
            <p class="card-text">Menampilkan dan merubah detail E-wallet.</p>
            <a href="<?= BASE_URL ?>?url=admin/ewallet" class="btn btn-primary">Kelola Ewallet</a>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php
  include "includes/footer.php"
  ?>
</body>

</html>