<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>kitaplar</title>
</head>
<body>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Kitap Adı</th>
      <th scope="col">Kitap Yazari</th>
      <th scope="col">Kitap İsbn Numarası</th>
      <th scope="col">Kitap Resmi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($book as $key =>$book)
    <tr>
      <td>{{$book->kitapadi}}</td>
      <td>{{$book->kitapyazari}}</td>
      <td>{{$book->kitapisbnnumarasi}}</td>
      <td><img style="height:200px; width:200px;"  src="{{ asset('/storage/images/'.$book->kitapresmi) }}"></td>
      <td><a href="{{route('books.edit',['book'=>$book->id])}}" class="btn btn-primary" style="text-decoration: none;">Düzenle</a></td>
      <td><a href="{{route('sil',['id'=>$book->id])}}" class="btn btn-danger" style="text-decoration: none;">Sil</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</body>
</html>
