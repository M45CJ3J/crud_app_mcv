<?php require_once(VIEWS.'include/header.php'); ?>
<h1>edit product</h1>

<?php foreach ($rows as $row): ?>
<form method="POST" action="<?php url('product/update/'.$row['product_id']); ?>" >
<input type="hidden" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_id" id="product_id" value="<?php echo $row['product_id']; ?>">
 
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product name</label>
    <input type="text" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" id="product_name" value="<?php echo $row['product_name']; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> product price</label>
    <input type="number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_price" id="product_price" value="<?php echo $row['product_price']; ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> product description </label>
    <textarea class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="product_description" id="product_description" ><?php echo $row['product_description']; ?></textarea> 
  </div>
<br>
  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
</form>
<?php endforeach ?>