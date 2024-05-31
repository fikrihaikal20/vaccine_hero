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
          <h2>Products details</h2>
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
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Manufacturer</th>
            <th scope="col">Action</th>
        </thead>

        <tbody>
          <?php foreach ($data['vaksins'] as $vaksin): ?>


            <tr>
              <td><?php echo $vaksin->id ?></td>
              <td><?php echo $vaksin->Name ?></td>
              <td><?php echo $vaksin->Description ?></td>
              <td><?php echo $vaksin->Manufacturer ?></td>
              <td>
                <button type="button" class="btn pull-left btn-outline-warning"><a
                    style="text-decoration: none; color:black;"
                    href="<?= BASE_URL ?>?url=admin/edit_vaksin&id=<?= htmlspecialchars($vaksin->id) ?>">Edit</a></button>
                <button type="button" class="btn pull-left btn-outline-danger"><a
                    style="text-decoration: none; color:black;"
                    href="<?= BASE_URL ?>?url=admin/delete_vaksin/<?= htmlspecialchars($vaksin->id) ?>">Delete</a></button>
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