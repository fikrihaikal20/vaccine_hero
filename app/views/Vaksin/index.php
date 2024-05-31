<?php

include(dirname(__DIR__) . '/includes/head.php');
if (!isset($_SESSION['user_id'])) {
    header('Location: ' . BASE_URL . '?url=auth/login');
    exit();
}
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
    include(dirname(__DIR__) . '/includes/header.php');
    ?>
    <!-- End Header Area -->

    <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Pilih Vaksin Sesuai Kebutuhan Anda</h2>
                        <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (!empty($data['vaksins'])): ?>
                    <?php foreach ($data['vaksins'] as $vaccine): ?>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-table">
                                <div class="table-head">
                                    <div class="icon">
                                        <i class="icofont icofont-vial"></i>
                                    </div>
                                    <h4 class="title"><?= htmlspecialchars($vaccine->Name) ?></h4>
                                    <!-- <div class="price">
                                        <p class="amount"><?= htmlspecialchars($vaccine->Description) ?><span>/ Per Visit</span></p>
                                    </div> -->
                                </div>
                                <ul class="table-list">
                                    <li><?= htmlspecialchars($vaccine->Description) ?></li>
                                    <li><i class="icofont icofont-ui-check"></i>Produsen: <?= htmlspecialchars($vaccine->Manufacturer) ?></li>
                                </ul>
                                <div class="table-bottom">
                                <a class="btn" href="<?= BASE_URL ?>?url=Pemesanan&id=<?= htmlspecialchars($vaccine->id) ?>">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No vaccines available</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

    <?php
    include(dirname(__DIR__) . '/includes/footer.php');
    ?>
</body>
</html>
