<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASE_URL ?>style2.css">
  <title>Vaccine Hero</title>
</head>

<body>
  <!----------------------- Main Container -------------------------->

  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <?php if (isset($errors) && !empty($errors)): ?>
      <ul>
        <?php foreach ($errors as $error): ?>
          <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

      <!--------------------------- Left Box ----------------------------->

      <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
        style="background: #103cbe;">
        <a href="<?= BASE_URL ?>?url=Home">
          <div class="featured-image mb-3">
            <img src="<?= BASE_URL ?>img/Component 6.png" class="img-fluid" style="width: 250px;">
          </div>
        </a>

        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Login
        </p>
      </div>

      <!-------------------- ------ Right Box ---------------------------->
      <div class="col-md-6 right-box">
        <form action="<?= BASE_URL ?>?url=auth/login" method="POST">
          <div class="row align-items-center">
            <div class="header-text mb-4">
              <h2>Hello, Again</h2>
              <p>We are happy to have you back.</p>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="email" class="form-control form-control-lg bg-light fs-6"
                placeholder="Email address" required>
            </div>
            <div class="input-group mb-1">
              <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                placeholder="Password" required>
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="formCheck">
                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
              </div>
            </div>
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
            </div>
            <div class="row">
              <small>Don't have an account? <a href="<?= BASE_URL ?>?url=auth/register">Sign Up</a></small>
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>

</body>

</html>