@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center">Product Images</h1>
        <div class="image-container">
            @foreach($photos as $photo)
                <div class="card image-card">
                    <img src="/product_photos/{{ $photo->image }}" alt="{{ $photo->id }}">
                </div>
            @endforeach
        </div>
    </div>
@endsection