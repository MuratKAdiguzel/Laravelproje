<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>duzenlekitaplar</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
<a class="navbar-brand" href="<?php echo e(url('/')); ?>">    Home    </a>
<a class="navbar-brand" href="<?php echo e(route('index')); ?>">   Kitaplar    </a>
</nav>
<h4 >"Veri düzenle"</h4>
   
  <form action="<?php echo e(route('books.update', ['book' => $bookedit->id])); ?>" method="POST" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapadi" placeholder="Kitapadi" value="<?php echo e($bookedit->kitapadi); ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapyazari" placeholder="Kitapyazari" value="<?php echo e($bookedit->kitapyazari); ?>">
    </div>
  </div>
 
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapisbnnumarasi" placeholder="Kitapisbnnumarasi" value="<?php echo e($bookedit->kitapisbnnumarasi); ?>">
    </div>
    <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="file" class="form-control" name="kitapresmi" placeholder="Kitapresmi" src="<?php echo e(asset('/storage/images/'.$bookedit->kitapresmi)); ?>">
    </div>
    
  
  
    <button  type="submit" class="btn btn-primary" >Düzenle</button>
  
  
</form>
 
    
</body>
</html><?php /**PATH C:\xampp\htdocs\moneokitap\resources\views/duzenlekitaplar.blade.php ENDPATH**/ ?>