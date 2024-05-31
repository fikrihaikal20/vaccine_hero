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
          <div class="section-title">
            <h2>We Are Always Ready to Help You</h2>
            <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class=" col-6 ">
          <div class="row justify-content-center">
            <?php if (!empty($data['vaksin'])): ?>
              <div class="">
                <div class="card shadow-sm">
                  <div class="card-header text-center text-white">
                    <i class="icofont icofont-vial fa-2x"></i>
                    <h4 class="title mt-2"><?= htmlspecialchars($data['vaksin']->Name) ?></h4>
                  </div>
                  <div class="card-body">
                    <p class="amount text-center"><strong>Description:</strong>
                      <?= htmlspecialchars($data['vaksin']->Description) ?></p>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><i class="icofont icofont-ui-check"></i>
                        <?= htmlspecialchars($data['vaksin']->Description) ?></li>
                      <li class="list-group-item"><i class="icofont icofont-ui-check"></i> Produsen:
                        <?= htmlspecialchars($data['vaksin']->Manufacturer) ?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <div class="col-lg-12 text-center">
                <p>Vaccine details not available</p>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-6">
          <form class="form" action="#">
            <div class="row ">
              <!-- Waktu -->
              <div class="col-12">
                <div class="form-group">
                  <label for="time">Select Time</label>
                  <input type="datetime-local" id="time" name="time" class="form-control">
                </div>
              </div>

              <!-- Lokasi -->
              <div class="col-12">
                <div class="form-group">
                  <label for="location">Location</label>
                  <input type="text" id="location" name="location" class="form-control" placeholder="Location">
                </div>
              </div>

              <!-- E-wallet -->
              <div class="col-12">
                <div class="form-group">
                  <label for="ewallet">Select E-wallet</label>
                  <select id="ewallet" name="ewallet" class="form-control wide" required>
                    <option value="" disabled selected>Select E-wallet</option>
                    <?php foreach ($data['ewallets'] as $ewallet): ?>
                      <option value="<?= htmlspecialchars($ewallet->id) ?>"><?= htmlspecialchars($ewallet->MethodName) ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <!-- Button -->
              <div class="col-12">
                <div class="form-group">
                  <div class="button">
                    <button type="submit" class="btn">Proses Pemesanan</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
  <!--/ End Pricing Table -->


  <?php
  include (dirname(__DIR__) . '/includes/footer.php');
  ?>