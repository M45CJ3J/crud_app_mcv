<?php require_once(VIEWS.'include/header.php'); ?>
<h1>create product</h1>

<?php if(isset($success)): ?>
<h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
<?php endif; ?>
<?php if(isset($error)): ?>
<h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
<?php endif; ?>

<form method="POST" action="<?php url('product/store'); ?>" >
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">product name</label>
    <input type="text" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" id="product_name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> product price</label>
    <input type="number" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_price" id="product_price">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> product description </label>
    <textarea class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="discripe it " name="product_description" id="product_description" ></textarea> 
  </div>
<br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>