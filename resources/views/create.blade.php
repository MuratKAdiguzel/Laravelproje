<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 
    <title>veriekle</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <a class="navbar-brand" href="{{ url('/') }}">    Home    </a>
  <a class="navbar-brand" href="{{route('index') }}">   Kitaplar    </a>
  @if(Auth()->check()) 
  <a class="navbar-brand" href="{{ url('create') }}"> Veri Ekle  </a>
  @endif
  </nav>
  <form action="{{route('create') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <h4 >"Veri ekle"</h4>
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="name" placeholder="Kitapadi">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="author" placeholder="Kitapyazari">
    </div>
  </div>
 
  <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="text" class="form-control" name="isbnNO" placeholder="Kitapisbnnumarasi">
    </div>
    <div class="-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4"></label>
      <input type="file" class="form-control" name="image" placeholder="Kitapresmi">
    </div>
    
  
  
    <button  type="submit" class="btn btn-primary" >Kaydet</button>
  
  
</form>
 
 
  </body>
</html>
