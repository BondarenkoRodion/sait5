@extends('layouts.main')
@section('content')
@php 
$user = Auth::user();
@endphp

    @if(session('success'))
    <h3>Список товарів користувача: <strong>{{ $user->name }}</strong></h3>
  <div>
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <h4>Вітаю!<h4>
      <p class="mb-0">Новий товар було успішно додано!</p>
    </div>
    @endif
      @if(auth()->check())
      
    <div class="container">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Ім'я товару</th>
              <th scope="col">Опис товару</th>
              <th scope="col">Айді товару</th>
              <th scope="col">Продажі</th>
              <th scope="col">Категорія</th>
              <th scope="col">Фото</th>
            </tr>
          </thead>
          <tbody>
          @foreach (auth()->user()->products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><a href="{{ route('product.show', $product->id) }}">{{ $product->productName }}</a></td>
                <td>{{ $product->productDescription }}</td>
                <td>{{ $product->productID }} </td>
                <td>{{ $product->productSales }} </td>
                <td>{{ $product->category->title }}</td>
                <td><a href= {{ route('product.photos',$product->id) }}> {{ $product->photos->count() }} </a></td>


            </tr>
        @endforeach
        </tbody>
        </table>
        
    <div class="d-flex justify-content-between">
      <a href="{{ route('product.create') }}" class="btn btn-primary mb-3 mt-1">ДОДАТИ ТОВАР</a>
      <a href="{{ route('tag.index') }}" class="btn btn-info mb-3 mt-1">ПЕРЕГЛЯНУТИ ТЕГИ</a>
    </div>
    </div>
        @else
        <h3>Увійдіть в акаунт!</strong></h3>
        @endif
          
 
@endsection