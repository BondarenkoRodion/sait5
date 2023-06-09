@extends('layouts.main')
@section('content')
  <div>
      <div><strong>Назва:</strong>    {{ $product->productName }}</div>
      <div><strong>Опис:</strong>    {{ $product->productDescription }}</div>
      <div><strong>Айді:</strong>    {{ $product->productID }}</div>
      <div><strong>Кількість продажів: </strong> {{ $product->productSales }}</div>
      <div><strong>Категорія товару: </strong> {{ $category->title }}</div>
      <h5 class ="mt-5"> Теги товару: </h5>
      @foreach($product->tags as $productTag)
      <div>{{ $productTag->title }}</div>
      @endforeach
</div>
<div class='d-flex mt-5'>
  <a class="btn btn-info" href="{{ route('product.edit', $product->id) }}">Редагувати</a>

  <form action="{{ route('product.delete', $product->id) }}" method="post">
  @csrf
  @method('delete')
  <input type="submit" value="Видалити" class="btn btn-danger mx-2">
  </form>

  <a class="btn btn-info" href="{{ route('product.index') }}">Назад</a>
</div>
@endsection