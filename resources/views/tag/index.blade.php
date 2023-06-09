@extends('layouts.main')
@section('content')
  <div>
    <h3> СПИСОК ТЕГІВ </h3>
    @foreach($tags as $tag)
      <div>
        <a href="{{ route('tag.show', $tag->id) }}">
          {{$tag->id}}. {{ $tag->title }}
        </a>
      </div>
    @endforeach
    <div class="d-flex justify-content-between">
      <a href="$" class="btn btn-primary mb-3 mt-2">СТВОРИТИ НОВИЙ ТЕГ</a>
      <a href="/products" class="btn btn-info mb-3 mt-2">НАЗАД</a>
    </div>
</div>
@endsection