<?php
include (dirname(__DIR__) . '/includes/head.php');
?>

<body>

  <!-- Preloader -->
  <div class="preloader">
    <div class="loader">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>

      <div class="indicator">
        <svg width="16px" height="12px">
          <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
          <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
        </svg>
      </div>
    </div>
  </div>
  <!-- End Preloader -->


  <!-- Header Area -->
  <?php
  include (dirname(__DIR__) . '/includes/header.php');
  ?>
  <!-- End Header Area -->

  <!-- Pricing Table -->
  <section class="product">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12">
          <div class="section-title mb-[100px]">
            <h2>Pemesanan Sukses</h2>
            <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
            <p>Pesanan akan segera kami proses. tunggu konfirmasinya melalui WA</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End Pricing Table -->


  <?php
  include (dirname(__DIR__) . '/includes/footer.php');
  ?>