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
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <br>
          <h2>Order details</h2>
          <br>
        </div>
        <div class="col">
        </div>
        <div class="col">
          <br>
          <form class="d-flex" method="GET" action="orders.php">
            <input class="form-control me-2 col" type="search" name="search_order_id"
              placeholder="Search for order (ID)" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit" name="search_order" value="search">Search</button>
          </form>
          <br>
        </div>
      </div>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Vaksin ID</th>
            <th scope="col">Ewallet ID</th>
            <th scope="col">Schedule</th>
            <th scope="col">Location</th>
            <th scope="col">Is confirm</th>
        </thead>

        <tbody>
          <?php foreach ($data['orders'] as $order): ?>

            
            <tr>
              <td><?php echo $order->id ?></td>
              <td><?php echo $order->UserID ?></td>
              <td><?php echo $order->VaksinID ?></td>
              <td><?php echo $order->EWalletID ?></td>
              <td><?php echo $order->Schedule ?></td>
              <td><?php echo $order->Location ?></td>
              <?php if ($order->IsConfirm == 1) {
                ?>
                <td style="color: green;">
                  Diproses
                </td>
                <?php
              } else {
                ?>
                <td style="color: red;">
                  pending
                </td>
                <?php
              }
              ?>
              <td>
                <button type="button" class="btn  btn-outline-danger"><a style="text-decoration: none; color:black;"
                    href="orders.php?delete=<?php echo $order->id ?>">Delete</a></button>
              </td>

              <?php if ($order->IsConfirm == 1) {
                ?>
                <td>
                  <button type="button" class="btn  btn-outline-danger"><a style="text-decoration: none; color:black;"
                      href="orders.php?undo=<?php echo $order->id ?>">&nbsp;Undo&nbsp;</a></button>
                </td>
                <?php
              } else {
                ?>
                <td>
                  <button type="button" class="btn  btn-outline-success"><a style="text-decoration: none; color:black;"
                      href="orders.php?done=<?php echo $order->id ?>">&nbsp;Done&nbsp;</a></button>

                </td>
                <?php
              }
              ?>
              <td>
                <button type="button" class="btn  btn-outline-info"><a style="text-decoration: none; color:black;"
                    href="customers.php?id=<?php echo $order->UserID ?>"> &nbsp;User details&nbsp; </a></button>
              </td>
              <td>
                <button type="button" class="btn  btn-outline-info"><a style="text-decoration: none; color:black;"
                    href="products.php?id=<?php echo $order->VaksinID ?>">Vaksin details</a></button>

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