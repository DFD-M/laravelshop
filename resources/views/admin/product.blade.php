<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(\Session::has('success'))
    <div class="alert">
        <h4>{{\Session::get('success')}}</h4>
    </div>
    @endif
<form action="/add_data" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label >Имя продукта</label>
    <input type="text" class="form-control"  name="title" placeholder="Example input">
  </div>
  <div class="form-group">
    <label >Наличие</label>
    <input type="text" class="form-control" name="in_stock" placeholder="Another input">
  </div>
  <div class="form-group">
    <label >Цена</label>
    <input type="text" class="form-control" name="price" placeholder="Another input">
  </div>
  <div class="form-group">
    <label >Описание</label>
    <input type="text" class="form-control" name="description" placeholder="Another input">
  </div>
  <div class="form-group">
    <label >Категория</label>
    <input type="text" class="form-control" name="category_id" placeholder="Another input">
  </div>
  <div class="form-group">
    <label >Фото</label>
    <input type="file" class="form-control" name="img" placeholder="Another input">
  </div>
  <input type="submit" name="submit" class="btn btn-success" value="Save/Insert Data">
</form>
</body>
</html>
	