<?php require_once(VIEWS.'include/header.php'); ?>
    <h1>view products</h1>

    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product name</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>

  <?php if(isset($success)): ?>
<h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
<?php endif; ?>
<?php if(isset($error)): ?>
<h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
<?php endif; ?>

<?php foreach ($products as $product): ?>
    <tr>
      
      <th scope="row"><a href="<?php url("order/order_details/".$product['product_id']) ?>">to its orders details</a></th>
      <td><?php echo $product['product_name']; ?></td>
      <td><?php echo $product['product_price']; ?></td>
      <td><a href=<?php url("product/edit/".$product['product_id']) ?>>edit</a></td>
      <td><a href=<?php url("product/delete/".$product['product_id']) ?>>delete</a></td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>