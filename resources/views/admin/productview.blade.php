<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    @if(\Session::has('success'))
    <div class="alert alert-danger">
      <h4>{{\Session::get('success')}}</h4>
    <div>
    @endif

<div class="line" style="text-align:right">
<a href="{{route('home')}}" class="btn btn-primary">Назад</a>
<a href="/productadd" class="btn btn-primary">Добавить продукт</a>
<form>
 <table class="table table-bordered">
  <thead>
    <tr>
      <th >ID</th>
      <th >Название</th>
      <th >Цена</th>
      <th >Наличие</th>
      <th >Описание</th>
      <th >Category_id</th>
      <th >EDIT</th>
      <th >DELETE</th>
    </tr>
  <tbody>
  </thead>
  @foreach($product as $row)
    <tr style="background:white;">
      <td>{{$row->id}}</td>
      <td>{{$row->title}}</td>
      <td>{{$row->price}}</td>
      <td>{{$row->in_stock}}</td>
      <td>{{$row->description}}</td>
      <td>{{$row->category_id}}</td>
      <td>
      <a href="click_edit/{{$row->id}}" class="btn btn-success">Редактировать</a>
      </td>
      <td>
      <a href="/click_delete/{{$row->id}}" class="btn btn-danger">Удалить</a>
      </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </form>
  </div>  


</form>    
</body>
</html>