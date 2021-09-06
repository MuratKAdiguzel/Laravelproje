<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>verigiris</title>
  </head>
  <body>
   Veri giriş
   
  <form action="{{route('verigiris') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapadi" placeholder="Kitapadi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapyazari" placeholder="Kitapyazari">
    </div>
  </div>
 
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="kitapisbnnumarasi" placeholder="Kitapisbnnumarasi">
    </div>
    <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="file" class="form-control" name="kitapresmi" placeholder="Kitapresmi">
    </div>
    
  
  
    <button  type="submit" class="btn btn-primary" >Kaydet</button>
  
  
</form>
 
 
  </body>
</html>
