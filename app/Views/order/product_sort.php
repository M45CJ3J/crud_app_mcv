<?php require_once(VIEWS.'include/header.php'); ?>
    <h1>view products</h1>

    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">اسم الصنف</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($rows as $row): ?>
    <tr>
       <th scope="row"><a href="<?php url("order/order_details/".$row['product_id']) ?>">لكل المعلومات الخاصه بالصنف</a></th>
      <td><?php echo $row['product_name']; ?></td>
     </tr>
  <?php endforeach ?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>