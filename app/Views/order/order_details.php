<?php require_once(VIEWS.'include/header.php'); ?>
    <h1>view products details</h1>

    <table class="table table-dark table-hover">
  <thead>
    <tr>     
    </tr>
  </thead>
  <tbody>
<?php foreach ($rows as $row): ?>
    <tr>
    <th scope="col">اسم الصنف</th>
      <th><?php echo $row['product_name']; ?></th>
     </tr>
  <?php endforeach ?>

  <?php foreach ($countusers as $countuser): ?>
    <tr>
    <th scope="col">عدد مستخددمى الصنف</th>
      <td><?php echo $countuser['count']; ?></td>
    </tr>
  <?php endforeach ?>

  <?php foreach ($countpennding as $countpenndings): ?>
    <tr>
    <th scope="col">عدد طلبات الصنف قيد التنفيذ</th>
      <td><?php echo $countpenndings['count']; ?></td>
    </tr>
  <?php endforeach ?>

  <?php foreach ($countdone as $countdones): ?>
    <tr>
    <th scope="col">عدد طلبات الصنف تم التنفيذ</th>
      <td><?php echo $countdones['count']; ?></td>
    </tr>
  <?php endforeach ?>

  <?php foreach ($countusedone as $countusedones): ?>
    <tr>
    <th scope="col">عدد المستخدمين لمره واحده</th>
      <td><?php echo $countusedones['count']; ?></td>
    </tr>
  <?php endforeach ?>

  <?php foreach ($countusedmore as $countusedmores): ?>
    <tr>
    <th scope="col">عدد المستخدمين لمره لاكثر من مره</th>
      <td><?php echo $countusedmores['count']; ?></td>
    </tr>
  <?php endforeach ?>

  <?php foreach ($countorder as $countorders):?>
    <tr>
    <th scope="col">عدد الطلبات </th>
      <td><?php echo $countorders['count']; ?></td>
    </tr>
  <?php endforeach ?>

  <?php foreach ($countordercairo as $countordercairos):?>
    <tr>
    <th scope="col"> عدد الطلبات فى القاهره </th>
      <td><?php echo $countordercairos['count']; ?></td>
    </tr>
  <?php endforeach ?>
  
  <?php foreach ($countordergiza as $countordergizas):?>
    <tr>
    <th scope="col"> عدد الطلبات فى القاهره </th>
      <td><?php echo $countordergizas['count']; ?></td>
    </tr>
  <?php endforeach ?>
  
</tbody>
</table>>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>