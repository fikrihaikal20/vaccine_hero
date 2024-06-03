<?php
include "includes/head.php";
?>

<body>
  <?php
  include "includes/header.php"
    ?>

  <?php
  include "includes/sidebar.php";
  ?>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php
    ?>
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <br>
          <h2>Sertif details</h2>
          <br>
        </div>
        <div class="col">
        </div>
      </div>
    </div>

    <div class="table-responsive">
      <button type="button" class="btn btn-outline-primary"><a style="text-decoration: none; color:black;"
          href="<?= BASE_URL ?>?url=admin/create_sertif"> &nbsp;&nbsp;Add&nbsp;&nbsp;</a></button>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PemesananID</th>
            <th scope="col">IssuedDate</th>
            <th scope="col">ExpiryDate</th>
            <th scope="col">VerificationStatus</th>
            <th scope="col">Url</th>
            <th scope="col">Image</th>
        </thead>

        <tbody>
          <?php foreach ($data['sertifikatVaksin'] as $sertif): ?>
            <tr>
              <td><?php echo $sertif->id ?></td>
              <td><?php echo $sertif->PemesananID ?></td>
              <td><?php echo $sertif->IssuedDate ?></td>
              <td><?php echo $sertif->ExpiryDate ?></td>
              <td><?php echo $sertif->VerificationStatus ?></td>
              <td><?php echo $sertif->Url ?></td>
              <td>
                <a href="<?= htmlspecialchars($sertif->Url) ?>">
                  <img src="<?php echo htmlspecialchars($sertif->Url); ?>" alt="" style="width: 80%;">
                </a>
              </td>
              <td>
                <button type="button" class="btn pull-left btn-outline-warning"><a
                    style="text-decoration: none; color:black;"
                    href="<?= BASE_URL ?>?url=admin/edit_sertif&id=<?= htmlspecialchars($sertif->id) ?>">Edit</a></button>
                <button type="button" class="btn pull-left btn-outline-danger"><a
                    style="text-decoration: none; color:black;"
                    href="<?= BASE_URL ?>?url=admin/delete_sertif/<?= htmlspecialchars($sertif->id) ?>">Delete</a></button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>
  </div>
  </div>

  <?php
  include "includes/footer.php"
    ?>

</body>