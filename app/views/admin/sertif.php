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
          href="<?= BASE_URL ?>?url=admin/create_vaksin"> &nbsp;&nbsp;Add&nbsp;&nbsp;</a></button>
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
                <img src="<?php echo htmlspecialchars($sertif->Url); ?>" alt="" style="width: 80%;">
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

  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <?php
  include "includes/footer.php"
    ?>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var images = document.querySelectorAll("img");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    images.forEach(img => {
      img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
    });

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>
</body>
