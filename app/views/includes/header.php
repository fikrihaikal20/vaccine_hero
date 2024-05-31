<header class="header">
  <!-- Header Inner -->
  <div class="header-inner">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-12">
            <!-- Start Logo -->
            <div class="logo">
              <a href="<?= BASE_URL ?>?url=Home"><img src="<?= BASE_URL ?>img/logo vac 1.svg" alt="#"></a>
            </div>
            <!-- End Logo -->
            <!-- Mobile Nav -->
            <div class="mobile-nav"></div>
            <!-- End Mobile Nav -->
          </div>
          <div class="col-lg-7 col-md-9 col-12">
            <!-- Main Menu -->
            <div class="main-menu">
              <nav class="navigation">
                <ul class="nav menu">
                  <li class=""><a href="<?= BASE_URL ?>?url=Home">Beranda</a>
                  </li>
                  <li><a href="<?= BASE_URL ?>?url=Vaksin">Vaksin </a></li>
                  <li><a href="<?= BASE_URL ?>?url=Admin">Admin</a></li>
                </ul>
              </nav>
            </div>
            <!--/ End Main Menu -->
          </div>
          <?php if (!isset($_SESSION['user_id']) || !$_SESSION['user_id']): ?>
          <div class="col-lg-2 col-12">
            <div class="d-flex">
              <div class="get-quote">
                <a href="<?= BASE_URL ?>?url=auth/register" class="btn">Register</a>
              </div>
              <div class="get-quote">
                <a href="<?= BASE_URL ?>?url=auth/login" class="btn">Login</a>
              </div>
            </div>
          </div>
          <?php else: ?>
                <div class="get-quote">
                  <a href="<?= BASE_URL ?>?url=auth/logout" class="btn" style="background-color: red;">Logout</a>
                </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!--/ End Header Inner -->
</header>