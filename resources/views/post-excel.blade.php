<table class="table table-bordered mt-3">
    <thead>
    <tr>
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Дата</th>
        <th scope="col">Сумма</th>
        <th scope="col">Адрес</th>
    </tr>
    </thead>
    <tbody>
    
    @foreach($ShoppingCarts as $details)
        <tr>
            <th scope="row">{{ $details['firstname'] }}</th>
            <td>{{ $details['lastname'] }}</td>
            <td>{{ $details['date'] }}</td>
            <td>{{ $details['total']}}</td>
            <td>{{ $details['adress']}}</td>
        </tr>
    @endforeach
    </tbody>
</table>