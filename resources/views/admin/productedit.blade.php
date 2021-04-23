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
        <form action="/update/{{$product[0]->id}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label>Название продукта</label>
            <input type="text" class="form-control" name="title" id="name" value="{{$product[0]->title}}" aria-describedby="emailHelp"
                placeholder="Введите новое название продукта">
            </div>

            <div class="form-group">
                <label>Цена продукта</label>
            <input type="text" class="form-control" name="price" id="price" value="{{$product[0]->price}}"
                placeholder="Введите новую цену продукта">
            </div>

            <div class="form-group">
                <label>Наличие продукта</label>
            <input type="text" class="form-control" name="in_stock" id="in_stock" value="{{$product[0]->in_stock}}" 
                placeholder="Введите новое наличие продукта">
            </div>

            <div class="form-group">
                <label>Описание продукта</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$product[0]->description}}" 
                placeholder="Введите новое описание продукта">
            </div>

            <div class="form-group">
                <label>Категория продукта</label>
            <input type="text" class="form-control" name="category_id" id="category_id" value="{{$product[0]->category_id}}" 
                placeholder="Введите новую категорию">
            </div>

            <button type="submit" name="submit" class="btn btn-primary" style="width:50%;">Обновить данные</button>

        </form>

 </div>
 </div>   
</body>
</html>