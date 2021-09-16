<?php require_once(VIEWS.'include/header.php'); ?>
<?php if(isset($success)): ?>
<h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
<?php endif; ?>
<h1>edited  product successfully</h1>

<h1><a href="<?php url('home') ?>">to products</a></h1>