@extends('layouts.main')
@section('content')
    <div class="container">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ім'я товару</th>
              <th scope="col">Опис товару</th>
              <th scope="col">Айді товару</th>
              <th scope="col">Продажі</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->productName }}</td>
                <td>{{ $item->productDescription }}</td>
                <td>{{ $item->productID }} </td>
                <td>{{ $item->productSales }} </td>
            </tr>
        @endforeach
          </tbody>
        </table>
    </div>
@endsection