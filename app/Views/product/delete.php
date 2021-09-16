<?php require_once(VIEWS.'include/header.php'); ?>
<h1>delete product</h1>

<?php if(isset($success)): ?>
<h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
<?php endif; ?>
<?php if(isset($error)): ?>
<h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
<?php endif; ?>

