<?php
include "includes/head.php"
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
  include "includes/header.php"
    ?>
  <!-- End Header Area -->

  <!-- Slider Area -->
  <section class="slider">
    <div class="hero-slider">
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image:url('img/slider2.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>Kita menyediakan vaksin terpercaya</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus
                  libero eu, gravida quam. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider -->
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image:url('img/slider.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
                <h1>Kita menyediakan vaksin terpercaya</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus
                  libero eu, gravida quam. </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start End Slider -->
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image:url('img/slider3.jpg')">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="text">
              <h1>Kita menyediakan vaksin terpercaya</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus
                  libero eu, gravida quam. </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider -->
    </div>
  </section>
  <!--/ End Slider Area -->

  <!-- Start Schedule Area -->
  <section class="schedule">
    <div class="container">
      <div class="schedule-inner">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12 ">
            <!-- single-schedule -->
            <div class="single-schedule first">
              <div class="inner">
                <div class="icon">
                  <i class="fa fa-ambulance"></i>
                </div>
                <div class="single-content">
                  <h4>Tentang Kami</h4>
                  <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
                  <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <!-- single-schedule -->
            <div class="single-schedule middle">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-prescription"></i>
                </div>
                <div class="single-content">
                  <h4>Pentingnya Vaksinasi</h4>
                  <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
                  <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12">
            <!-- single-schedule -->
            <div class="single-schedule last">
              <div class="inner">
                <div class="icon">
                  <i class="icofont-ui-clock"></i>
                </div>
                <div class="single-content">
                  <h4>Jam Layanan</h4>
                  <ul class="time-sidual">
                    <li class="day">Senin - Jumat <span>8.00-20.00</span></li>
                    <li class="day">Sabtu <span>9.00-18.30</span></li>
                    <li class="day">Senin - Kamis <span>9.00-15.00</span></li>
                  </ul>
                  <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/End Start schedule Area -->

  <!-- Start Feautes -->
  <section class="Feautes section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Tahapan Kami</h2>
            <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features">
            <div class="signle-icon">
              <i class="icofont icofont-ambulance-cross"></i>
            </div>
            <h3>Pemesanan</h3>
            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
          </div>
          <!-- End Single features -->
        </div>
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features">
            <div class="signle-icon">
              <i class="icofont icofont-medical-sign-alt"></i>
            </div>
            <h3>Vaksin</h3>
            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
          </div>
          <!-- End Single features -->
        </div>
        <div class="col-lg-4 col-12">
          <!-- Start Single features -->
          <div class="single-features last">
            <div class="signle-icon">
              <i class="icofont icofont-stethoscope"></i>
            </div>
            <h3>Pasca Vaksin</h3>
            <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
          </div>
          <!-- End Single features -->
        </div>
      </div>
    </div>
  </section>
  <!--/ End Feautes -->

  <!-- Start Fun-facts -->
  <div id="fun-facts" class="fun-facts section overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-home"></i>
            <div class="content">
              <span class="counter">3468</span>
              <p>Lokasi</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-user-alt-3"></i>
            <div class="content">
              <span class="counter">183</span>
              <p>Partner</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont-simple-smile"></i>
            <div class="content">
              <span class="counter">4379</span>
              <p>Pengguna Puas</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Fun -->
          <div class="single-fun">
            <i class="icofont icofont-table"></i>
            <div class="content">
              <span class="counter">1++</span>
              <p>Pengalaman</p>
            </div>
          </div>
          <!-- End Single Fun -->
        </div>
      </div>
    </div>
  </div>
  <!--/ End Fun-facts -->


  <!-- Start portfolio -->
  <section class="portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Testimoni</h2>
            <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="owl-carousel portfolio-slider">
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf1.jpg" alt="#">
              
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf2.jpg" alt="#">
              
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf3.jpg" alt="#">
              
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf4.jpg" alt="#">
              
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf1.jpg" alt="#">
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf2.jpg" alt="#">
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf3.jpg" alt="#">
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
            <div class="single-pf">
              <img src="<?= BASE_URL ?>img/pf4.jpg" alt="#">
              <a href="portfolio-details.html" class="btn">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End portfolio -->

  <!-- Start service -->
  <section class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Layanan Kami</h2>
            <img src="<?= BASE_URL ?>img/section-img.png" alt="#">
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-prescription"></i>
            <h4><a href="service-details.html">Vaksin Preventif</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-heart-alt"></i>
            <h4><a href="service-details.html">Vaksin Balita</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="icofont icofont-blood"></i>
            <h4><a href="service-details.html">Vaksin Kekebalan Tubuh</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus dictum eros ut imperdiet. </p>
          </div>
          <!-- End Single Service -->
        </div>
      </div>
    </div>
  </section>
  <!--/ End service -->

  <?php
  include "includes/footer.php"
    ?>