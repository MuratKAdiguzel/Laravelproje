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
      @foreach($kitap as $key =>$kitap)
    <tr>
      <td>{{$kitap->kitapadi}}</td>
      <td>{{$kitap->kitapyazari}}</td>
      <td>{{$kitap->kitapisbnnumarasi}}</td>
      <td>{{$kitap->kitapresmi}}</td>
      <td> <button type="button" class="btn btn-primary">Düzenle</button> </td>
      <td> <button type="button" class="btn btn-danger">Sil</button> </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</body>
</html>
