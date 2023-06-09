@extends('layouts.main')
@section('content')
<h3> Тег номер {{ $tag->id }} </h3>
  <div>
      <div>{{ $tag->title }}</div>
      
    @foreach($tag->products as $tagProduct)
    <div>
      <a href="{{ route('product.show', $tagProduct->id) }}">
          {{$tagProduct->id}}. {{ $tagProduct->productName }}
      </a>
    </div>
    @endforeach
</div>
<div class="d-flex justify-content-between">
  <a href="#">Редагувати</a> <a href="{{ route('tag.index') }}">Назад</a>
</div>
@endsection