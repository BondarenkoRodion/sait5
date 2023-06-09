@extends('layouts.main')

@section('content')
    <div class="container">
        <h2 class="mb-4">Зображення товару <span class="text-primary">{{ $product->title }}</span></h2>
        <div class="row justify-content-center">
            @foreach ($photos as $photo)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="image-container">
                            <img src="/product_photos/{{ $photo->image }}" class="card-img-top" alt="Product Image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Зображення {{ $loop->iteration }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="/products" class="btn btn-primary">На головну</a>
    </div>

    <style>
        .image-container {
            height: 200px;
            position: relative;
            overflow: hidden;
        }

        .image-container img {
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.1);
        }

        .card-title {
            position: relative;
            z-index: 1;
            color: black;
            background-image: linear-gradient(to right, #000000, #000000);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: background-image 0.3s ease;
        }

        .card:hover .card-title {
            background-image: linear-gradient(to right, #ff6b6b, #3a1c71);
        }
    </style>
@endsection
