<?php
include(dirname(__DIR__) . '/includes/head.php');
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
                        <h2>We Provide You The Best Treatment In Reasonable Price</h2>
                        <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (!empty($data['ewallets'])): ?>
                    <?php foreach ($data['ewallets'] as $ewallet): ?>
                        <div class="col-lg-4 col-md-12 col-12">
                            <div class="single-table">
                                <div class="table-head">
                                    <div class="icon">
                                        <i class="icofont icofont-wallet"></i>
                                    </div>
                                    <h4 class="title"><?= htmlspecialchars($ewallet['name']) ?></h4>
                                    <div class="price">
                                        <p class="amount">$<?= htmlspecialchars($ewallet['description']) ?><span>/ Per Visit</span></p>
                                    </div>
                                </div>
                                <ul class="table-list">
                                    <li><i class="icofont icofont-ui-check"></i><?= htmlspecialchars($ewallet['description']) ?></li>
                                    <li><i class="icofont icofont-ui-check"></i>Produsen: <?= htmlspecialchars($ewallet['manufacturer']) ?></li>
                                </ul>
                                <div class="table-bottom">
                                    <a class="btn" href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No e-wallets available</p>
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
