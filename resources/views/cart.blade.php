@extends('layout')

@section('title', 'Cart')

@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Товар</th>
            <th style="width:10%">Цена</th>
            <th style="width:8%">Количество</th>
            <th style="width:22%" class="text-center">Итог</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>
                @php 
                $fsc=DB::select('select img from skjdhfksjfdh8d3d4a8fhd_product_images where product_id = '.$id);
                
                @endphp 

          

                <tr>
                    <td data-th="Product">
                        <div class="row">
                      
                            <div class="col-sm-3 hidden-xs"><img src="images/{{$details['img'][0]->img}}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['title'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">₽{{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Subtotal" class="text-center">₽{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning">Вернуться к товарам</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center" name="total"><strong>Итог {{ $total }} ₽</strong></td>
            <!-- <td><a href="{{ url('/') }}" class="btn btn-success">Оплатить</a></td> -->
 
        </tr>
        </tfoot>
    </table>
   
    <div class="row g-3">
    <form action="/check" method="POST">
        @csrf   
          <div class="col-sm-6">
            <label for="firstName" class="form-label">Имя</label>
            <input type="text" class="form-control" name="firstname" id="firstName" placeholder=""  required="">
            <div class="invalid-feedback">
              Требуется действительное имя.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Фамилия</label>
            <input type="text" class="form-control" name="lastname" id="lastName" placeholder=""  required="">
            <div class="invalid-feedback">
              Требуется действительная фамилия.
            </div>
          </div>


          <div class="col-12">
            <label for="address" class="form-label">Адрес</label>
            <input type="text" class="form-control" name="adress" id="address" placeholder="Москва, Арбат" required="">
            <div class="invalid-feedback">
              Пожалуйста, введите свой адрес доставки.
            </div>
          </div>
          <p name="date">{{date('Y-m-d H:i:s')}}</p>

          

          <div class="col-md-7">
            
            
          </div>
          <div class="col-md-7">
            <label for="zip" class="form-label">Почтовый индекс</label>
            <input type="text" class="form-control" id="zip" placeholder="" required="">
            <div class="invalid-feedback">
              Требуется почтовый индекс.
            </div>
          </div>
        </div>

        <div class="row gy-3">
          <div class="col-md-6">
            <label for="cc-name" class="form-label">Имя на карте</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Полное имя, как показано на карточке</small>
            <div class="invalid-feedback">
              Имя на карте обязательно
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-number" class="form-label">Номер кредитной карты</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Требуется номер кредитной карты
            </div>
          </div>

          <div class="col-md-3">
            <label for="cc-expiration" class="form-label">Срок действия</label>
            <input type="text" class="form-control"  id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Требуется срок действия
            </div>
          </div>
          
          <div class="col-md-3">
            <label for="cc-cvv" class="form-label">CVV</label>
            <input type="text" class="form-control" name="cvv" id="cc-cvv" placeholder="" required="" >
            <div class="invalid-feedback">
              Требуется защитный код
            </div>
          </div>

          <div class="hideinput">
          <p>К оплате <input type="hidden" name="total" value="{{ $total }}"></p>
          </div>

        </div>
        <br>

        <button class="btn btn-primary btn-lg btn-block" type="submit" >Продолжить оформление заказа</button>
        </form>
    @section('scripts')


    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection

@endsection